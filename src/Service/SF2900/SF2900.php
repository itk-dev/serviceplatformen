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
use ItkDev\Serviceplatformen\SF2900\ClassMap;
use ItkDev\Serviceplatformen\SF2900\ServiceType\Fordelingsmodtager;
use ItkDev\Serviceplatformen\SF2900\ServiceType\Fordelingsobjekt;
use ItkDev\Serviceplatformen\SF2900\StructType\AnmodRequestType;
use ItkDev\Serviceplatformen\SF2900\StructType\AuthorityContextType;
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

class SF2900
{
    // https://digitaliseringskataloget.dk/integration/sf2900
    public const ENTITY_ID = 'http://sp.serviceplatformen.dk/service/fordeling/3';

    protected array $options;

    public function __construct(array $options)
    {
        $this->options = $this->resolveOptions($options);
    }

    public function getModtagerList(
        string $routingMyndighed,
        string $routingKLEEmne,
        ?string $routingHandlingFacet = null,
    ): ?FordelingsmodtagerListResponseType {
        $request = $this->buildFordelingsmodtagerListRequest(
            routingMyndighed: $routingMyndighed,
            routingKLEEmne: $routingKLEEmne,
            routingHandlingFacet: $routingHandlingFacet
        );

        [$localCert, $passphrase] = $this->getLocalCert();

        try {
            $service = (new Fordelingsmodtager([
                SoapClientBase::WSDL_URL => __DIR__.'/../../../resources/sf2900/wsdl/context/DistributionService.wsdl',
                SoapClientBase::WSDL_CLASSMAP => ClassMap::get(),
                SoapClientBase::WSDL_LOCAL_CERT => $localCert,
                SoapClientBase::WSDL_PASSPHRASE => $passphrase,
            ]))
                ->setSF2900($this);

            return $service->FordelingsmodtagerList($request) ?: null;
        } finally {
            if (file_exists($localCert)) {
                unlink($localCert);
            }
        }
    }

    private function buildFordelingsmodtagerListRequest(
        string $routingMyndighed,
        ?string $routingKLEEmne,
        ?string $routingHandlingFacet = null,
        ?string $afsendendeMyndighed = null,
        ?string $authorityContextMunicipalityCVR = null,
    ): FordelingsmodtagerListRequestType {
        $afsendendeMyndighed ??= $this->options['authority_cvr'];
        $authorityContextMunicipalityCVR ??= $afsendendeMyndighed;

        $routing = new FordelingsmodtagerListRequest(
            afsendendeMyndighed: $afsendendeMyndighed,
            routingMyndighed: $routingMyndighed,
            routingKLEEmne: $routingKLEEmne,
            routingHandlingFacet: $routingHandlingFacet
        );
        $authorityContext = new AuthorityContextType($authorityContextMunicipalityCVR);

        return new FordelingsmodtagerListRequestType(
            routing: $routing,
            authorityContext: $authorityContext
        );
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
        return $this->options['service_endpoint_domain']
            .parse_url($location, PHP_URL_PATH);
    }

    private function getLocalCert(): array
    {
        // @todo Does this only work with a file system certificate locator?!
        $certificateLocator = $this->options['certificate_locator'];
        assert($certificateLocator instanceof CertificateLocatorInterface);
        $certificates = $certificateLocator->getCertificates();
        $passphrase = '';
        $output = [null, null];
        openssl_x509_export($certificates['cert'], $output[0]);
        openssl_pkey_export($certificates['pkey'], $output[1], $passphrase);
        $localCertFilename = tempnam(sys_get_temp_dir(), 'cert');
        file_put_contents($localCertFilename, join(PHP_EOL, $output));

        return [
            $localCertFilename,
            $passphrase,
        ];
    }
}
