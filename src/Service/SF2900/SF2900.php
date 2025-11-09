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
use ItkDev\Serviceplatformen\Service\Exception\MissingArgumentException;
use ItkDev\Serviceplatformen\Service\Exception\SoapException;
use ItkDev\Serviceplatformen\Service\SF2900\SF2900\SftpHelper;
use ItkDev\Serviceplatformen\SF2900\ClassMap;
use ItkDev\Serviceplatformen\SF2900\ServiceType\Fordelingskvittering;
use ItkDev\Serviceplatformen\SF2900\ServiceType\Fordelingsmodtager;
use ItkDev\Serviceplatformen\SF2900\ServiceType\Fordelingsobjekt;
use ItkDev\Serviceplatformen\SF2900\StructType\AnmodRequestType;
use ItkDev\Serviceplatformen\SF2900\StructType\AuthorityContextType;
use ItkDev\Serviceplatformen\SF2900\StructType\DistributionContextType;
use ItkDev\Serviceplatformen\SF2900\StructType\DistributionDokumentType;
use ItkDev\Serviceplatformen\SF2900\StructType\DistributionFormularType;
use ItkDev\Serviceplatformen\SF2900\StructType\DistributionJournalPostType;
use ItkDev\Serviceplatformen\SF2900\StructType\DistributionObjectType;
use ItkDev\Serviceplatformen\SF2900\StructType\FordelingskvitteringModtagRequestType;
use ItkDev\Serviceplatformen\SF2900\StructType\FordelingskvitteringModtagResponseType;
use ItkDev\Serviceplatformen\SF2900\StructType\FordelingsmodtagerListRequest;
use ItkDev\Serviceplatformen\SF2900\StructType\FordelingsmodtagerListRequestType;
use ItkDev\Serviceplatformen\SF2900\StructType\FordelingsmodtagerListResponseType;
use ItkDev\Serviceplatformen\SF2900\StructType\FordelingsobjektAfsendRequestType;
use ItkDev\Serviceplatformen\SF2900\StructType\ForretningskvitteringType;
use ItkDev\Serviceplatformen\SF2900\StructType\ObjektIndholdType;
use ItkDev\Serviceplatformen\SF2900\StructType\RoutingKLEInfo;
use ItkDev\Serviceplatformen\SF2900\StructType\RoutingValg;
use Symfony\Component\Cache\Adapter\FilesystemAdapter;
use Symfony\Component\OptionsResolver\Options;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Contracts\Cache\CacheInterface;
use WsdlToPhp\PackageBase\SoapClientInterface;

class SF2900
{
    // https://digitaliseringskataloget.dk/integration/sf2900
    public const string ENTITY_ID = 'http://sp.serviceplatformen.dk/service/fordeling/3';

    // Date(time) formats used in SOAP calls.
    private const string DATETIME_FORMAT = \DateTimeInterface::ATOM;
    private const string DATE_FORMAT = 'Y-m-d';

    private readonly array $options;
    private readonly SftpHelper $sftp;

    public function __construct(array $options)
    {
        $this->options = $this->resolveOptions($options);
        $this->sftp = new SftpHelper($this->options['sftp']);
    }

    public function sftp(): SftpHelper
    {
        return $this->sftp;
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
                SoapClientInterface::WSDL_URL => __DIR__.'/../../../resources/sf2900/wsdl/context/DistributionService.wsdl',
                SoapClientInterface::WSDL_CLASSMAP => ClassMap::get(),
                SoapClientInterface::WSDL_LOCAL_CERT => $localCert,
                SoapClientInterface::WSDL_PASSPHRASE => $passphrase,
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

    /**
     * @throws SoapException
     */
    public function afsend(
        string $transactionId,
        string $type,
        DistributionDokumentType|DistributionJournalPostType|DistributionFormularType $document,
        string $routingMyndighed,
        string $routingKLEEmne,
        ?string $routingHandlingFacet = null,
        ?string $routingModtagerAktoer = null,
        ?string $dokumentFilNavn = null,
    ): Result {
        if ($document instanceof DistributionDokumentType && null === $dokumentFilNavn) {
            throw new MissingArgumentException(sprintf('documentFilNavn must be set for %s request.', $document::class));
        }

        $request = $this->buildFordelingsobjektAfsendRequest(
            transactionId: $transactionId,
            type: $type,
            document: $document,
            routingMyndighed: $routingMyndighed,
            routingKLEEmne: $routingKLEEmne,
            routingHandlingFacet: $routingHandlingFacet,
            routingModtagerAktoer: $routingModtagerAktoer,
            dokumentFilNavn: $dokumentFilNavn,
        );

        [$localCert, $passphrase] = $this->getLocalCert();

        try {
            $service = (new Fordelingsobjekt([
                SoapClientInterface::WSDL_URL => __DIR__.'/../../../resources/sf2900/wsdl/context/DistributionService.wsdl',
                SoapClientInterface::WSDL_CLASSMAP => ClassMap::get(),
                SoapClientInterface::WSDL_LOCAL_CERT => $localCert,
                SoapClientInterface::WSDL_PASSPHRASE => $passphrase,

                SoapClientInterface::WSDL_TRACE => true,
                //                SoapClientInterface::WSDL_EXCEPTIONS => false,
            ]))
                ->setSF2900($this);

            return new Result(
                request: $request,
                response: $service->FordelingsobjektAfsend($request) ?: null
            );
        } finally {
            if (file_exists($localCert)) {
                unlink($localCert);
            }
        }
    }

    private function buildFordelingsobjektAfsendRequest(
        string $transactionId,
        string $type,
        DistributionDokumentType|DistributionJournalPostType|DistributionFormularType $document,
        string $routingMyndighed,
        string $routingKLEEmne,
        ?string $routingHandlingFacet = null,
        ?string $afsendendeMyndighed = null,
        ?string $authorityContextMunicipalityCVR = null,
        ?string $routingModtagerAktoer = null,
        ?string $dokumentFilNavn = null,
    ): FordelingsobjektAfsendRequestType {
        $afsendendeMyndighed ??= $this->options['authority_cvr'];
        $authorityContextMunicipalityCVR ??= $afsendendeMyndighed;

        $objectIndhold = new ObjektIndholdType();
        switch ($document::class) {
            case DistributionDokumentType::class:
                $objectIndhold->setDistributionDokument($document);
                break;
            case DistributionJournalPostType::class:
                $objectIndhold->setDistributionJournalPost($document);
                break;
            case DistributionFormularType::class:
                $objectIndhold->setDistributionFormular($document);
                break;
            default:
                throw new \Exception(__FILE__);
        }

        $distributionObject = new DistributionObjectType(
            objektType: $type,
            objektIndhold: $objectIndhold,
        );

        $routingValg = null !== $routingModtagerAktoer
            ? new RoutingValg(routingModtagerAktoer: $routingModtagerAktoer)
            : new RoutingValg(
                routingKLEEmneHandling: new RoutingKLEInfo(
                    routingKLEEmne: $routingKLEEmne,
                    routingHandlingFacet: $routingHandlingFacet,
                ),
            );

        $distributionContext = new DistributionContextType(
            anvenderTransaktionsID: $transactionId,
            afsendendeMyndighed: $afsendendeMyndighed,
            routingMyndighed: $routingMyndighed,
            routingValg: $routingValg,
            distributionTransktionsID: null,
            digitalPostMeddelelsesID: null,
            dokumentFilNavn: $dokumentFilNavn,
        );
        $anmodning = new AnmodRequestType(
            distributionContext: $distributionContext,
            distributionObject: $distributionObject,
        );

        $authorityContext = new AuthorityContextType($authorityContextMunicipalityCVR);

        return new FordelingsobjektAfsendRequestType(
            anmodning: $anmodning,
            //            callContext: null,
            authorityContext: $authorityContext,
        );
    }

    public function modtag(
        ForretningskvitteringType $forretningsKvittering,
        DistributionContextType $distributionContext,
        ?AuthorityContextType $authorityContext = null,
    ): ?FordelingskvitteringModtagResponseType {
        $authorityContext ??= new AuthorityContextType($this->options['authority_cvr']);

        $request = new FordelingskvitteringModtagRequestType(
            forretningskvittering: $forretningsKvittering,
            distributionContext: $distributionContext,
            authorityContext: $authorityContext,
        );

        [$localCert, $passphrase] = $this->getLocalCert();

        try {
            $service = (new Fordelingskvittering([
                SoapClientInterface::WSDL_URL => __DIR__.'/../../../resources/sf2900/wsdl/context/DistributionService.wsdl',
                SoapClientInterface::WSDL_CLASSMAP => ClassMap::get(),
                SoapClientInterface::WSDL_LOCAL_CERT => $localCert,
                SoapClientInterface::WSDL_PASSPHRASE => $passphrase,
            ]))
                ->setSF2900($this);

            return $service->FordelingskvitteringModtag($request) ?: null;
        } finally {
            if (file_exists($localCert)) {
                unlink($localCert);
            }
        }
    }

    private function resolveOptions(array $options): array
    {
        return (new OptionsResolver())
            ->setRequired([
                'certificate_locator',
                'authority_cvr',
                'sftp',
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
            ->setOptions('sftp', SftpHelper::resolveOptions(...))
            ->resolve($options)
        ;
    }

    public function getSoapLocation(string $location): string
    {
        return $this->options['service_endpoint_domain']
            .parse_url($location, PHP_URL_PATH);
    }

    public static function formatDateTime(\DateTimeInterface $dateTime): string
    {
        return $dateTime->format(self::DATETIME_FORMAT);
    }

    public static function formatDate(\DateTimeInterface $dateTime): string
    {
        return $dateTime->format(self::DATE_FORMAT);
    }

    /**
     * Get local certificate in PEM format.
     *
     * @return array[string, string]
     *   [filename, passphrase]
     *
     * @throws \ItkDev\Serviceplatformen\Certificate\Exception\CertificateLocatorException
     */
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
