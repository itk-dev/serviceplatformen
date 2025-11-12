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
use ItkDev\Serviceplatformen\Service\SF2900\Event\AfterServiceCallEvent;
use ItkDev\Serviceplatformen\Service\SF2900\Event\BeforeServiceCallEvent;
use ItkDev\Serviceplatformen\Service\SF2900\SF2900\SftpHelper;
use ItkDev\Serviceplatformen\SF2900\ClassMap;
use ItkDev\Serviceplatformen\SF2900\EnumType\ObjektTypeType;
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
use ItkDev\Serviceplatformen\SF2900\StructType\FordelingsobjektAfsendResponseType;
use ItkDev\Serviceplatformen\SF2900\StructType\ForretningskvitteringType;
use ItkDev\Serviceplatformen\SF2900\StructType\ObjektIndholdType;
use ItkDev\Serviceplatformen\SF2900\StructType\RoutingKLEInfo;
use ItkDev\Serviceplatformen\SF2900\StructType\RoutingValg;
use Symfony\Component\OptionsResolver\Options;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Contracts\EventDispatcher\EventDispatcherInterface;
use WsdlToPhp\PackageBase\AbstractStructBase;
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

    private ?AbstractStructBase $lastRequest;

    public function __construct(
        private readonly EventDispatcherInterface $eventDispatcher,
        array $options,
    ) {
        $this->options = $this->resolveOptions($options);
        $this->sftp = new SftpHelper($this->options['sftp']);
    }

    public function sftp(): SftpHelper
    {
        return $this->sftp;
    }

    public function getLastRequest(): AbstractStructBase
    {
        return $this->lastRequest;
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

        return $this->callService(
            serviceClass: Fordelingsmodtager::class,
            serviceMethod: 'FordelingsmodtagerList',
            request: $request
        );
    }

    /**
     * @throws SoapException
     */
    public function afsend(
        string $transactionId,
        DistributionDokumentType|DistributionJournalPostType|DistributionFormularType $document,
        string $routingMyndighed,
        string $routingKLEEmne,
        ?string $routingHandlingFacet = null,
        ?string $routingModtagerAktoer = null,
        ?string $dokumentFilNavn = null,
    ): ?FordelingsobjektAfsendResponseType {
        if ($document instanceof DistributionDokumentType && null === $dokumentFilNavn) {
            throw new MissingArgumentException(sprintf('documentFilNavn must be set for %s request.', $document::class));
        }

        $request = $this->buildFordelingsobjektAfsendRequest(
            transactionId: $transactionId,
            document: $document,
            routingMyndighed: $routingMyndighed,
            routingKLEEmne: $routingKLEEmne,
            routingHandlingFacet: $routingHandlingFacet,
            routingModtagerAktoer: $routingModtagerAktoer,
            dokumentFilNavn: $dokumentFilNavn,
        );

        return $this->callService(
            serviceClass: Fordelingsobjekt::class,
            serviceMethod: 'FordelingsobjektAfsend',
            request: $request
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

        return $this->callService(
            serviceClass: Fordelingskvittering::class,
            serviceMethod: 'FordelingskvitteringModtag',
            request: $request,
        );
    }

    private function resolveOptions(array $options): array
    {
        $resolveSftpOptions = static function (OptionsResolver $resolver, Options $parent): void {
            $resolver
                ->setDefaults([
                    // https://digitaliseringskataloget.dk/files/integration-files/260220200803/20200226_Vejledning%20til%20Serviceplatformens%20SFTP%20Service.pdf#page=14
                    'host' => $parent['test_mode']
                        ? 'sftpexttest.serviceplatformen.dk'
                        : 'sftp.serviceplatformen.dk',
                    'port' => 22,
                ])
                ->setAllowedTypes('host', 'string')
                ->setAllowedTypes('port', 'int')
                ->setRequired('username')
                ->setAllowedTypes('username', 'string')
                ->setRequired('private_key')
                ->setAllowedTypes('private_key', 'string')
                ->setDefault('private_key_passphrase', null)
                ->setAllowedTypes('private_key_passphrase', ['string', 'null']);
        };

        return (new OptionsResolver())
            ->setRequired('certificate')
            ->setAllowedTypes('certificate', ['string', CertificateLocatorInterface::class])
            ->setRequired('authority_cvr')
            ->addAllowedTypes('authority_cvr', 'string')
            ->setDefaults([
                'debug' => false,
                'test_mode' => true,
                'certificate_passphrase' => '',
                'service_endpoint_domain' => static function (Options $options) {
                    return $options['test_mode']
                        ? 'https://exttest.serviceplatformen.dk'
                        : 'https://prod.serviceplatformen.dk';
                },
            ])
            ->setRequired('sftp')
            ->setDefault('sftp', $resolveSftpOptions)
            // Defining nested options via setDefault() is deprecated since Symfony 7.3
            // (cf. https://symfony.com/doc/current/components/options_resolver.html#nested-options)
            // ->setOptions('sftp', $resolveSftpOptions)
            ->resolve($options);
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
     * Perform service request using a local certificate.
     *
     * @throws \ItkDev\Serviceplatformen\Certificate\Exception\CertificateLocatorException
     *
     * @todo (How) Can we do this in a better way?
     */
    private function callService(
        string $serviceClass,
        string $serviceMethod,
        AbstractStructBase $request,
    ): ?AbstractStructBase {
        $this->lastRequest = $request;

        [$localCert, $passphrase] = $this->getLocalCert();

        try {
            $event = new BeforeServiceCallEvent(
                request: $request,
            );
            $this->eventDispatcher->dispatch($event);

            $service = (new $serviceClass([
                SoapClientInterface::WSDL_URL => __DIR__.'/../../../resources/sf2900/wsdl/context/DistributionService.wsdl',
                SoapClientInterface::WSDL_CLASSMAP => ClassMap::get(),
                SoapClientInterface::WSDL_LOCAL_CERT => $localCert,
                SoapClientInterface::WSDL_PASSPHRASE => $passphrase,
            ]))
                ->setSF2900($this);

            $response = $service->{$serviceMethod}($request) ?: null;

            $event = new AfterServiceCallEvent(
                request: $request,
                response: $response,
            );
            $this->eventDispatcher->dispatch($event);

            return $response;
        } finally {
            if (file_exists($localCert)) {
                unlink($localCert);
            }
        }
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
        $certificate = $this->options['certificate'];
        $certificatePassphrase = $this->options['certificate_passphrase'];

        $localCertFilename = tempnam(sys_get_temp_dir(), 'cert');
        if ($certificate instanceof CertificateLocatorInterface) {
            $certificates = $certificate->getCertificates();
            $output = [null, null];
            openssl_x509_export($certificates['cert'], $output[0]);
            $certificatePassphrase = '';
            openssl_pkey_export($certificates['pkey'], $output[1], $certificatePassphrase);
            file_put_contents($localCertFilename, join(PHP_EOL, $output));
        } else {
            file_put_contents($localCertFilename, $certificate);
        }

        return [
            $localCertFilename,
            $certificatePassphrase,
        ];
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

    private function buildFordelingsobjektAfsendRequest(
        string $transactionId,
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
                $type = ObjektTypeType::VALUE_DOKUMENT;
                $objectIndhold->setDistributionDokument($document);
                break;
            case DistributionJournalPostType::class:
                $type = ObjektTypeType::VALUE_JOURNALPOST;
                $objectIndhold->setDistributionJournalPost($document);
                break;
            case DistributionFormularType::class:
                $type = ObjektTypeType::VALUE_FORMULAR;
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
            authorityContext: $authorityContext,
        );
    }
}
