<?php

/**
 * This file is part of itk-dev/serviceplatformen.
 *
 * (c) 2025– ITK Development
 *
 * This source file is subject to the MIT license.
 */

namespace ItkDev\Serviceplatformen\Service\SF2900;

use ItkDev\Serviceplatformen\Certificate\CertificateLocatorInterface;
use ItkDev\Serviceplatformen\Service\Exception\SAMLTokenException;
use ItkDev\Serviceplatformen\Service\SF1514\SF1514;
use ItkDev\Serviceplatformen\Service\SF1601\Serializer;
use ItkDev\Serviceplatformen\SF2900\ClassMap;
use ItkDev\Serviceplatformen\SF2900\ServiceType\Fordelingsmodtager;
use ItkDev\Serviceplatformen\SF2900\ServiceType\Fordelingsobjekt;
use ItkDev\Serviceplatformen\SF2900\StructType\AnmodRequestType;
use ItkDev\Serviceplatformen\SF2900\StructType\DistributionContextType;
use ItkDev\Serviceplatformen\SF2900\StructType\DistributionObjectType;
use ItkDev\Serviceplatformen\SF2900\StructType\FordelingsmodtagerListRequest;
use ItkDev\Serviceplatformen\SF2900\StructType\FordelingsmodtagerListRequestType;
use ItkDev\Serviceplatformen\SF2900\StructType\FordelingsmodtagerListResponseType;
use ItkDev\Serviceplatformen\SF2900\StructType\FordelingsobjektAfsendRequestType;
use ItkDev\Serviceplatformen\SF2900\StructType\ObjektIndholdType;
use ItkDev\Serviceplatformen\SF2900\StructType\RoutingKLEInfo;
use ItkDev\Serviceplatformen\SF2900\StructType\RoutingValg;
use Symfony\Component\Cache\Adapter\FilesystemAdapter;
use Symfony\Component\OptionsResolver\Options;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Contracts\Cache\CacheInterface;
use Symfony\Contracts\Cache\ItemInterface;

class SF2900
{
    // https://digitaliseringskataloget.dk/integration/sf2900
    public const ENTITY_ID = 'http://sp.serviceplatformen.dk/service/fordeling/3';

    private SF2900XMLBuilder $xmlBuilder;
    private SF1514 $sf1514;
    protected array $options;

    private static ?bool $shutdownFunctionRegistered = null;

    public function __construct(SF1514 $sf1514, array $options)
    {
        $this->sf1514 = $sf1514;
        $this->xmlBuilder = new SF2900XMLBuilder();
        $this->options = $this->resolveOptions($options);

        if (!self::$shutdownFunctionRegistered) {
            register_shutdown_function(self::shutdown(...));
            self::$shutdownFunctionRegistered = true;
        }
    }

    public function getModtagerList(
        string $routingMyndighed,
        string $routingKLEEmne,
        ?string $routingHandlingFacet = null,
    ): FordelingsmodtagerListResponseType|bool {
        $request = $this->buildFordelingsmodtagerListRequest(
            routingMyndighed: $routingMyndighed,
            routingKLEEmne: $routingKLEEmne,
            routingHandlingFacet: $routingHandlingFacet
        );

        $service = (new Fordelingsmodtager([
            SoapClientBase::WSDL_URL => __DIR__.'/../../../resources/sf2900/wsdl/context/DistributionService.wsdl',
            SoapClientBase::WSDL_CLASSMAP => ClassMap::get(),
        ]))
            ->setSF2900($this);

        $result = $service->FordelingsmodtagerList($request);

        return $result;
    }

    private function buildFordelingsmodtagerListRequest(
        string $routingMyndighed,
        ?string $routingKLEEmne,
        ?string $routingHandlingFacet = null,
        ?string $afsendendeMyndighed = null,
    ): FordelingsmodtagerListRequestType {
        $afsendendeMyndighed ??= $this->options['authority_cvr'];

        $routing = new FordelingsmodtagerListRequest(
            afsendendeMyndighed: $afsendendeMyndighed,
            routingMyndighed: $routingMyndighed,
            routingKLEEmne: $routingKLEEmne,
            routingHandlingFacet: $routingHandlingFacet
        );

        return new FordelingsmodtagerListRequestType(routing: $routing);
    }

    public function afsend(
        string $transactionId,
        Type $type,
        string $routingMyndighed,
        string $routingKLEEmne,
        ?string $routingHandlingFacet = null,
    ): FordelingsobjektAfsendRequestType|bool {
        $request = $this->buildFordelingsobjektAfsendRequest(
            $transactionId,
            $type,
            routingMyndighed: $routingMyndighed,
            routingKLEEmne: $routingKLEEmne,
            routingHandlingFacet: $routingHandlingFacet
        );

        $service = (new Fordelingsobjekt([
            SoapClientBase::WSDL_URL => __DIR__.'/../../../resources/sf2900/wsdl/context/DistributionService.wsdl',
            SoapClientBase::WSDL_CLASSMAP => ClassMap::get(),
        ]))
            ->setSF2900($this);

        $result = $service->FordelingsobjektAfsend($request);

        return $result;
    }

    private function buildFordelingsobjektAfsendRequest(
        string $transactionId,
        Type $type,
        string $routingMyndighed,
        string $routingKLEEmne,
        ?string $routingHandlingFacet = null,
        ?string $afsendendeMyndighed = null,
    ): FordelingsobjektAfsendRequestType {
        $afsendendeMyndighed ??= $this->options['authority_cvr'];

        $objectIndhold = new ObjektIndholdType(
            // distributionDokument: null
        );
        $distributionObject = new DistributionObjectType(
            objektType: $type->value,
            objektIndhold: $objectIndhold,
        );
        $distributionContext = new DistributionContextType(
            anvenderTransaktionsID: $transactionId,
            afsendendeMyndighed: $afsendendeMyndighed,
            routingMyndighed: $routingMyndighed,
            routingValg: new RoutingValg(
                new RoutingKLEInfo(
                    routingKLEEmne: $routingKLEEmne,
                    routingHandlingFacet: $routingHandlingFacet,
                )
            ),
            distributionTransktionsID: null,
            digitalPostMeddelelsesID: null,
            dokumentFilNavn: null
        );
        $anmodning = new AnmodRequestType(
            distributionContext: $distributionContext,
            distributionObject: $distributionObject,
        );

        return new FordelingsobjektAfsendRequestType(
            anmodning: $anmodning,
            callContext: null,
            authorityContext: null,
        );
    }

    /**
     * Gets SAML token from SF1514.
     *
     * @throws SAMLTokenException
     */
    private function getSAMLToken(): string
    {
        return $this->sf1514->getSAMLToken();
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

    private function resolveOptions(array $options): array
    {
        return (new OptionsResolver())
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
                        ? 'https://n2adgangsstyring.eksterntest-stoettesystemerne.dk/runtime/services/kombittrust/14/certificatemixed'
                        : 'https://n2adgangsstyring.stoettesystemerne.dk/runtime/services/kombittrust/14/certificatemixed';
                },
                'saml_token_expiration_time_offset' => '-15 minutes',
                'service_endpoint_domain' => static function (Options $options) {
                    return $options['test_mode']
                        ? 'https://exttest.serviceplatformen.dk'
                        : 'https://prod.serviceplatformen.dk';
                },
                'soap_request_cache_expiration_time' => ['+1 hour'],
                'soap_service_version' => '3',
                'organisation-funktion-manager-id' => '46c73630-f7ad-4000-9624-c06131cde671',
            ])
            ->setInfo('saml_token_expiration_time_offset', 'Offset used when checking if SAML token is expired. By default the SAML token expires 8 hours after being issued.')
            ->setAllowedTypes('certificate_locator', CertificateLocatorInterface::class)
            ->setAllowedTypes('cache', CacheInterface::class)
            ->setAllowedTypes('soap_request_cache_expiration_time', 'string[]')
            ->setAllowedTypes('soap_service_version', 'string')
            ->resolve($options)
        ;
    }

    public function getSoapLocation(string $location): string
    {
        $domain = $this->options['service_endpoint_domain'];

        $path = preg_replace('@^.*(?=/service/SP/Distribution/)@', '', $location);

        $soapLocation = $domain.$path;
        // @todo '/'.$this->options['soap_service_version'].'/';

        return $soapLocation;
    }

    private const NS_SOAP_ENVELOPE = 'http://www.w3.org/2003/05/soap-envelope';
    private const NS_SAGDOK = 'urn:oio:sagdok:3.0.0';
    private const STATUS_KODE_OK = '20';

    public function formatSoapRequest(
        string $request,
        string $location,
        string $action,
        int $version,
        bool $oneWay = false,
    ): string {
        $doc = Serializer::loadXML($request);

        // Set an id.
        /** @var \DOMElement $body */
        $body = $doc->getElementsByTagNameNS(self::NS_SOAP_ENVELOPE, 'Body')[0];
        $body->setAttributeNS(
            'http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-wssecurity-utility-1.0.xsd',
            'u:Id',
            '_1'
        );

        $token = $this->getSAMLToken();
        $this->xmlBuilder->buildSoapHeader($doc->getElementsByTagNameNS(self::NS_SOAP_ENVELOPE, 'Header')[0], $location, $action, $token);

        // HACK!
        // @see self::getTokenXSLTProcessor().
        $request = self::getTokenXSLTProcessor($token)->transformToXml($doc);

        return $this->xmlBuilder->buildSignedRequest($request, $this->getPrivateKey());
    }

    private static array $tokenXSLTProcessors = [];

    /**
     * @see https://bugs.php.net/bug.php?id=55294
     */
    private static function getTokenXSLTProcessor(string $token): \XSLTProcessor
    {
        if (!isset(self::$tokenXSLTProcessors[$token])) {
            $xsldoc = new \DOMDocument();
            $xsldoc->load(__DIR__.'/resources/insert-token.xslt');

            $tokenPath = tempnam(sys_get_temp_dir(), sha1($token).'.token.xml');
            file_put_contents($tokenPath, $token);
            $xsl = new \XSLTProcessor();
            $xsl->importStylesheet($xsldoc);
            $xsl->setParameter('', 'token-path', $tokenPath);

            self::$tokenXSLTProcessors[$token] = [
                'xsltprocessor' => $xsl,
                'tokenpath' => $tokenPath,
            ];
        }

        return self::$tokenXSLTProcessors[$token]['xsltprocessor'];
    }

    private static function shutdown()
    {
        foreach (self::$tokenXSLTProcessors as $processor) {
            if ($path = ($processor['tokenpath'] ?? null)) {
                if (file_exists($path)) {
                    unlink($path);
                }
            }
        }
    }

    public function cacheSoapRequest(array $cacheKeys, callable $callable)
    {
        $cache = $this->getCache();
        $cacheKey = $this->getSoapRequestCacheKey(__METHOD__, $cacheKeys);
        $expirationTime = $this->getSoapRequestCacheExpirationDateTime();

        return $cache->get($cacheKey, function (ItemInterface $item) use ($callable, $expirationTime) {
            $response = $callable();

            if (!is_string($response) || $this->preventCaching($response)) {
                $expirationTime = new \DateTimeImmutable('-1 day');
            }

            $item->expiresAt($expirationTime);

            return $response;
        });
    }

    private function preventCaching(string $response): bool
    {
        try {
            $document = Serializer::loadXML($response);
            // Prevent caching if we have a SOAP fault.
            if ($document->getElementsByTagNameNS(self::NS_SOAP_ENVELOPE, 'Fault')->count() > 0) {
                return true;
            }

            // Prevent caching if we get a "not OK" status code.
            $statusKode = $document->getElementsByTagNameNS(self::NS_SAGDOK, 'StatusKode')->item(0);
            if (null !== $statusKode && self::STATUS_KODE_OK !== $statusKode->nodeValue) {
                return true;
            }
        } catch (\Throwable) {
            // Ignore any exceptions.
        }

        return false;
    }

    private function getCache(): CacheInterface
    {
        return $this->options['cache'];
    }

    private function getSoapRequestCacheKey(string $key, array $payload): string
    {
        return preg_replace(
            '#[{}()/\\\\@:]+#',
            '_',
            $key.'|'.sha1(json_encode($payload + $this->options))
        );
    }

    public function getSoapRequestCacheExpirationDateTime(): ?\DateTimeImmutable
    {
        $now = new \DateTimeImmutable('now');
        $times = [];
        foreach ($this->options['soap_request_cache_expiration_time'] as $spec) {
            $time = $now->modify($spec);
            if ($time > $now) {
                $times[] = $time;
            }
        }

        return empty($times) ? null : min([...$times]);
    }
}
