<?php

/**
 * This file is part of itk-dev/serviceplatformen.
 *
 * (c) 2020 ITK Development
 *
 * This source file is subject to the MIT license.
 */

namespace ItkDev\Serviceplatformen\Service;

use DateTimeImmutable;
use DateTimeInterface;
use ItkDev\Serviceplatformen\Certificate\CertificateLocatorInterface;
use ItkDev\Serviceplatformen\Service\Exception\ServiceException;
use ItkDev\Serviceplatformen\Service\SF1601\Serializer;
use Symfony\Component\Cache\Adapter\FilesystemAdapter;
use Symfony\Component\HttpClient\CurlHttpClient;
use Symfony\Component\OptionsResolver\Options;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Contracts\Cache\CacheInterface;
use Symfony\Contracts\Cache\ItemInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use Symfony\Contracts\HttpClient\ResponseInterface;

abstract class AbstractRESTService
{
    protected array $defaultOptions = [];

    private array $options;

    private ?HttpClientInterface $client = null;

    public function __construct(array $options = [])
    {
        $resolver = new OptionsResolver();
        $this->configureOptions($resolver);

        $this->options = $resolver->resolve($this->defaultOptions + $options);
    }

    protected function getOption(string $name)
    {
        if (!array_key_exists($name, $this->options)) {
            throw new ServiceException(sprintf('No such option: %s', $name));
        }

        return $this->options[$name];
    }

    public function isTestMode(): bool
    {
        return (bool)$this->options['test_mode'];
    }

    /**
     * Call a REST service endpoint.
     *
     * @param string $entityId
     * @param string $method
     * @param string $url
     * @param array $options
     * @return ResponseInterface
     * @throws ServiceException
     */
    protected function call(string $entityId, string $method, string $url, array $options): ResponseInterface
    {
        $samlToken = $this->getSAMLToken($entityId);
        $accessToken = $this->getAccessToken($samlToken);

        // @todo Can we just generate the transaction id?
        if (!isset($options['transactionId'])) {
            throw new ServiceException('Missing transaction id');
        }
        $transactionId = $options['transactionId'];
        unset($options['transactionId']);

        $transactionTid = $options['transactionTid'] ?? new DateTimeImmutable();
        if ($transactionTid instanceof DateTimeInterface) {
            $transactionTid = Serializer::formatDateTimeZulu($transactionTid);
        }
        unset($options['transactionTid']);

        $headers = (isset($options['headers']) && is_array($options['headers'])) ?  $options['headers'] : [];
        unset($options['headers']);

        return $this->request(
            $method,
            $url,
            [
                'headers' => [
                        'Authorization' => sprintf('%s %s', $accessToken['token_type'], $accessToken['access_token']),
                        'x-TransaktionsId' => $transactionId,
                        'x-TransaktionsTid' => $transactionTid,
                    ] + $headers,
            ]
            +$options
        );
    }

    private function client(): HttpClientInterface
    {
        if (null === $this->client) {
            $this->client = new CurlHttpClient([
                // Force HTTP 1.1 to prevent "HTTP/2 stream 1 was reset" error.
                'http_version' => 1.1,
            ]);
        }

        return $this->client;
    }

    private function request(string $method, string $url, array $options): ResponseInterface
    {
        // Write certificates to temporary files.
        $certificateFilename = tempnam(sys_get_temp_dir(), 'cert');
        file_put_contents($certificateFilename, $this->getCertificate());

        $privateKeyFilename = tempnam(sys_get_temp_dir(), 'cert');
        file_put_contents($privateKeyFilename, $this->getPrivateKey());

        return $this->client()->request($method, $url, $options + [
                'local_cert' => $certificateFilename,
                'local_pk' => $privateKeyFilename,
                'on_progress' => function (int $dlNow, int $dlSize, array $info) use (&$certificateFilename, &$privateKeyFilename): void {
                    // Delete temporary certificate files when receiving response headers.
                    if (!empty($info['response_headers'])) {
                        if (isset($certificateFilename) && file_exists($certificateFilename)) {
                            unlink($certificateFilename);
                            $certificateFilename = null;
                        }
                        if (isset($privateKeyFilename) && file_exists($privateKeyFilename)) {
                            unlink($privateKeyFilename);
                            $privateKeyFilename = null;
                        }
                    }
                },
            ]);
    }

    /**
     * Get SAML token.
     *
     * @return string
     */
    private function getSAMLToken(string $entityId): string
    {
        $cache = $this->getCache();
        $cacheKey = $this->getCacheKey(__METHOD__, [
            'AnvenderKontekst' => ['Cvr' => $this->options['authority_cvr']],
            'AppliesTo' => ['EndpointReference' => ['Address' => $entityId]],
        ]);

        $expirationTimeOffset = $this->options['saml_token_expiration_time_offset'];

        $token = $cache->get($cacheKey, function (ItemInterface $item) use ($entityId, $expirationTimeOffset) {
            $token = $this->fetchSAMLToken($entityId);

            // Set cache expiration time a litte before actual token expiration time.
            $expirationTime = $this->getSAMLTokenExpirationTime($token)
                ->modify($expirationTimeOffset);
            $item->expiresAt($expirationTime);

            return $token;
        });

        // Check SAML token expiration time (with offset) to make sure that it still valid.
        if (null !== $token && $this->getSAMLTokenExpirationTime($token)->modify($expirationTimeOffset) <= new \DateTimeImmutable()) {
            // Remove expired token from cache and get a new token.
            $cache->delete($cacheKey);
            return $this->getSAMLToken($entityId);
        }

        return $token;
    }

    private function getCache()
    {
        return $this->options['cache'];
    }

    private function getCacheKey(string $key, array $payload): string
    {
        return preg_replace(
            '#[{}()/\\\\@:]+#',
            '_',
            $key . '|' . sha1(json_encode($payload+$this->options))
        );
    }

    private function getSAMLTokenExpirationTime(string $token): \DateTimeImmutable
    {
        $sxe = new \SimpleXMLElement(base64_decode($token));
        $sxe->registerXPathNamespace('assertion', 'urn:oasis:names:tc:SAML:2.0:assertion');
        $nodes = $sxe->xpath('//assertion:Conditions/@NotOnOrAfter');
        if (empty($nodes)) {
            throw new \RuntimeException('Cannot get SAML token expiration time');
        }
        $notOnOrAfter = reset($nodes);

        return new \DateTimeImmutable((string)$notOnOrAfter);
    }

    /**
     * Fetch SAML token.
     *
     * @return string
     * @throws ServiceException
     * @throws \Symfony\Contracts\HttpClient\Exception\ClientExceptionInterface
     * @throws \Symfony\Contracts\HttpClient\Exception\DecodingExceptionInterface
     * @throws \Symfony\Contracts\HttpClient\Exception\RedirectionExceptionInterface
     * @throws \Symfony\Contracts\HttpClient\Exception\ServerExceptionInterface
     * @throws \Symfony\Contracts\HttpClient\Exception\TransportExceptionInterface
     */
    private function fetchSAMLToken(string $entityId): string
    {
        try {
            // Public certificate on a single line.
            $content = $this->getCertificate();
            $stuff = preg_split('/^-+(BEGIN|END) CERTIFICATE-+$/m', $content);
            $useKey = str_replace("\n", '', $stuff[1]);

            $data = [
                'TokenType' => 'http://docs.oasis-open.org/wss/oasis-wss-saml-token-profile-1.1#SAMLV2.0',
                'RequestType' => 'http://docs.oasis-open.org/ws-sx/ws-trust/200512/Issue',
                'KeyType' => 'http://docs.oasis-open.org/ws-sx/ws-trust/200512/PublicKey',
                'AnvenderKontekst' => ['Cvr' => $this->options['authority_cvr']],
                'UseKey' => $useKey,
                'AppliesTo' => ['EndpointReference' => ['Address' => $entityId]],
                'OnBehalfOf' => null
            ];

            $response = $this->request('POST', $this->options['saml_token_svc'], [
                'json' => $data,
            ]);

            $result = $response->toArray();
            if (isset($result['RequestedSecurityToken']['Assertion'])) {
                return $result['RequestedSecurityToken']['Assertion'];
            }
        } catch (\Exception $exception) {
            throw new ServiceException('Cannot fetch SAML token', 0, $exception);
        }

        throw new ServiceException('Cannot fetch SAML token');
    }

    private function getAccessToken(string $samlToken): array
    {
        $cache = $this->getCache();
        $cacheKey = $this->getCacheKey(__METHOD__, [
            'access_token_svc' => $this->options['access_token_svc'],
            'saml_token' => $samlToken,
        ]);

        $token = $cache->get($cacheKey, function (ItemInterface $item) use ($samlToken) {
            $token = $this->fetchAccessToken($samlToken);

            // Set cache expiration time a little before actual token expiration time.
            $expiresAfter = max(0, $token['expires_in'] - $this->options['access_token_expires_after_offset']);
            $item->expiresAfter($expiresAfter);

            return $token;
        });

        return $token;
    }

    private function fetchAccessToken(string $samlToken): array
    {
        try {
            $params = ['saml-token' => $samlToken];

            $response = $this->request('POST', $this->options['access_token_svc'], [
                'body' => $params,
            ]);

            return $response->toArray();
        } catch (\Exception $exception) {
            throw new ServiceException('Cannot fetch access token', 0, $exception);
        }
    }

    private function getCertificate(): string
    {
        return $this->getCertificatePart('cert');
    }

    private function getPrivateKey(): string
    {
        return $this->getCertificatePart('pkey');
    }

    private function getCertificatePart(string $part): string
    {
        $certificateLocator = $this->options['certificate_locator'];
        assert($certificateLocator instanceof CertificateLocatorInterface);
        $certificates = $certificateLocator->getCertificates();

        if (isset($certificates[$part])) {
            return $certificates[$part];
        }

        throw new \RuntimeException(sprintf('Cannot get certificate part %s', $part));
    }

    protected function configureOptions(OptionsResolver $resolver)
    {
        $resolver
            ->setRequired([
                'certificate_locator',
                'authority_cvr',
            ])
            ->setDefaults([
                'debug' => false,
                'test_mode' => true,
                'cache' => static function (Options $options) {
                    return new FilesystemAdapter();
                },
                'certificate_passphrase' => '',
                'saml_token_svc' => static function (Options $options) {
                    return $options['test_mode']
                        ? 'https://adgangsstyring.eksterntest-stoettesystemerne.dk/runtime/api/rest/wstrust/v1/issue'
                        : 'https://adgangsstyring.stoettesystemerne.dk/runtime/api/rest/wstrust/v1/issue';
                },
                'saml_token_expiration_time_offset' => '-15 minutes',
                'access_token_svc' => static function (Options $options) {
                    return $options['test_mode']
                        ? 'https://exttest.serviceplatformen.dk/service/AccessTokenService_1/token'
                        : 'https://prod.serviceplatformen.dk/service/AccessTokenService_1/token';
                },
                'access_token_expires_after_offset' => 60,
            ])
            ->setInfo('saml_token_expiration_time_offset', 'Offset used when checking if SAML token is expired. By default the SAML token expires 8 hours after being issued.')
            ->setInfo('access_token_expires_after_offset', 'Offset in seconds used when checking if the access token is expired. By default an access token expires in 3600 seconds.')
            ->setAllowedTypes('certificate_locator', CertificateLocatorInterface::class)
            ->setAllowedTypes('cache', CacheInterface::class);
    }
}
