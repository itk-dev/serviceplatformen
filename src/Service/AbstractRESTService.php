<?php

/**
 * This file is part of itk-dev/serviceplatformen.
 *
 * (c) 2020 ITK Development
 *
 * This source file is subject to the MIT license.
 */

namespace ItkDev\Serviceplatformen\Service;

use DateTime;
use DateTimeImmutable;
use DateTimeInterface;
use DateTimeZone;
use GuzzleHttp\RequestOptions;
use ItkDev\Serviceplatformen\Service\Exception\ServiceException;
use Symfony\Component\HttpClient\CurlHttpClient;
use Symfony\Component\HttpClient\TraceableHttpClient;
use Symfony\Component\OptionsResolver\Options;
use Symfony\Component\OptionsResolver\OptionsResolver;
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

    /**
     * Call a REST service endpoint.
     *
     * @param string $method
     * @param string $url
     * @param array $options
     * @return ResponseInterface
     * @throws ServiceException
     */
    protected function call(string $method, string $url, array $options): ResponseInterface
    {
        $samlToken = $this->fetchSAMLToken();
        $accessToken = $this->fetchAccessToken($samlToken);

        // @todo Can we just generate the transaction id?
        if (!isset($options['transactionId'])) {
            throw new ServiceException('Missing transaction id');
        }
        $transactionId = $options['transactionId'];
        unset($options['transactionId']);

        $transactionTid = $options['transactionTid'] ?? new DateTimeImmutable();
        if ($transactionTid instanceof DateTimeInterface) {
            $transactionTid = $this->formatDateTime($transactionTid);
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
                        'X-TransaktionsId' => $transactionId,
                        'X-TransaktionsTid' => $transactionTid,
                    ] + $headers,
            ]
            +$options
        );
    }

    private function client(): HttpClientInterface
    {
        if (null === $this->client) {
            $this->client = new CurlHttpClient([
                'local_cert' => $this->options['client_cert_pub'],
                'local_pk' => $this->options['client_cert_key'],
            ]);
        }

        return $this->client;
    }

    private function request(string $method, string $url, array $options): ResponseInterface
    {
        return $this->client()->request($method, $url, $options);
    }

    private function fetchSAMLToken(): string
    {
        // @todo Cache the token
        try {
            // There must be a better way to get the first certificate in a pem file.
            $content = file_get_contents($this->options['client_cert_pub']);
            $stuff = preg_split('/^-+(BEGIN|END) CERTIFICATE-+$/m', $content);
            $useKey = str_replace("\n", '', $stuff[1]);

            $data = [
                'TokenType' => 'http://docs.oasis-open.org/wss/oasis-wss-saml-token-profile-1.1#SAMLV2.0',
                'RequestType' => 'http://docs.oasis-open.org/ws-sx/ws-trust/200512/Issue',
                'KeyType' => 'http://docs.oasis-open.org/ws-sx/ws-trust/200512/PublicKey',
                'AnvenderKontekst' => ['Cvr' => $this->options['authority_cvr']],
                'UseKey' => $useKey,
                'AppliesTo' => ['EndpointReference' => ['Address' => $this->options['svc_entity_id']]],
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

    private function fetchAccessToken(string $samlToken): array
    {
        // @todo Cache the token
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

    protected function configureOptions(OptionsResolver $resolver)
    {
        $resolver
            ->setRequired([
                'client_cert_pub',
                'client_cert_key',
                'authority_cvr',
            ])
            ->setDefaults([
                'debug' => false,
                'test_mode' => true,
                'saml_token_svc' => static function (Options $options) {
                    return $options['test_mode']
                        ? 'https://adgangsstyring.eksterntest-stoettesystemerne.dk/runtime/api/rest/wstrust/v1/issue'
                        : 'https://adgangsstyring.stoettesystemerne.dk/runtime/api/rest/wstrust/v1/issue';
                },
                'access_token_svc' => static function (Options $options) {
                    return $options['test_mode']
                        ? 'https://exttest.serviceplatformen.dk/service/AccessTokenService_1/token'
                        : 'https://serviceplatformen.dk/service/AccessTokenService_1/token';
                },
            ]);
    }

    /**
     * Format date time as Zulu time.
     *
     * @see https://stackoverflow.com/a/57701653/2502647
     *
     * @param DateTimeInterface $dateTime
     * @return string
     */
    protected function formatDateTime(DateTimeInterface $dateTime): string
    {
        return (new DateTimeImmutable($dateTime->format(DateTimeInterface::ATOM), new DateTimeZone('UTC')))
            ->format('Y-m-d\TH:i:s\Z');
    }
}
