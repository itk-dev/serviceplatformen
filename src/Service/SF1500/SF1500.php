<?php

/**
 * This file is part of itk-dev/serviceplatformen.
 *
 * (c) 2020 ITK Development
 *
 * This source file is subject to the MIT license.
 */

namespace ItkDev\Serviceplatformen\Service\SF1500;

use ItkDev\Serviceplatformen\Certificate\CertificateLocatorInterface;
use ItkDev\Serviceplatformen\Service\Exception\SAMLTokenException;
use ItkDev\Serviceplatformen\Service\Exception\SF1500Exception;
use ItkDev\Serviceplatformen\Service\SF1514\SF1514;
use ItkDev\Serviceplatformen\Service\SF1601\Serializer;
use ItkDev\Serviceplatformen\SF1500\Adresse\ClassMap as AdresseClassMap;
use ItkDev\Serviceplatformen\SF1500\Adresse\ServiceType\_List as AdresseList;
use ItkDev\Serviceplatformen\SF1500\Adresse\ServiceType\Laes as AdresseLaes;
use ItkDev\Serviceplatformen\SF1500\Adresse\ServiceType\Soeg as AdresseSoeg;
use ItkDev\Serviceplatformen\SF1500\Adresse\StructType\LaesInputType as AdresseLaesInputType;
use ItkDev\Serviceplatformen\SF1500\Adresse\StructType\LaesOutputType as AdresseLaesOutputType;
use ItkDev\Serviceplatformen\SF1500\Bruger\ClassMap as BrugerClassMap;
use ItkDev\Serviceplatformen\SF1500\Bruger\ServiceType\_List as BrugerList;
use ItkDev\Serviceplatformen\SF1500\Bruger\ServiceType\Laes as BrugerLaes;
use ItkDev\Serviceplatformen\SF1500\Bruger\ServiceType\Soeg as BrugerSoeg;
use ItkDev\Serviceplatformen\SF1500\Bruger\StructType\LaesInputType as BrugerLaesInputType;
use ItkDev\Serviceplatformen\SF1500\Bruger\StructType\LaesOutputType as BrugerLaesOutputType;
use ItkDev\Serviceplatformen\SF1500\OrganisationEnhed\ClassMap as OrganisationEnhedClassMap;
use ItkDev\Serviceplatformen\SF1500\OrganisationEnhed\ServiceType\_List as OrganisationEnhedList;
use ItkDev\Serviceplatformen\SF1500\OrganisationEnhed\ServiceType\Laes as OrganisationEnhedLaes;
use ItkDev\Serviceplatformen\SF1500\OrganisationEnhed\ServiceType\Soeg as OrganisationEnhedSoeg;
use ItkDev\Serviceplatformen\SF1500\OrganisationEnhed\StructType\LaesInputType as OrganisationEnhedLaesInputType;
use ItkDev\Serviceplatformen\SF1500\OrganisationEnhed\StructType\LaesOutputType as OrganisationEnhedLaesOutputType;
use ItkDev\Serviceplatformen\SF1500\OrganisationFunktion\ClassMap as OrganisationFunktionClassMap;
use ItkDev\Serviceplatformen\SF1500\OrganisationFunktion\ServiceType\_List as OrganisationFunktionList;
use ItkDev\Serviceplatformen\SF1500\OrganisationFunktion\ServiceType\Laes as OrganisationFunktionLaes;
use ItkDev\Serviceplatformen\SF1500\OrganisationFunktion\ServiceType\Soeg as OrganisationFunktionSoeg;
use ItkDev\Serviceplatformen\SF1500\OrganisationFunktion\StructType\AttributListeType as OrganisationFunktionAttributListeType;
use ItkDev\Serviceplatformen\SF1500\OrganisationFunktion\StructType\BrugerFlerRelationType as OrganisationFunktionBrugerFlerRelationType;
use ItkDev\Serviceplatformen\SF1500\OrganisationFunktion\StructType\EgenskabType as OrganisationFunktionEgenskabType;
use ItkDev\Serviceplatformen\SF1500\OrganisationFunktion\StructType\KlasseRelationType as OrganisationFunktionKlasseRelationType;
use ItkDev\Serviceplatformen\SF1500\OrganisationFunktion\StructType\LaesInputType as OrganisationFunktionLaesInputType;
use ItkDev\Serviceplatformen\SF1500\OrganisationFunktion\StructType\LaesOutputType as OrganisationFunktionLaesOutputType;
use ItkDev\Serviceplatformen\SF1500\OrganisationFunktion\StructType\OrganisationEnhedFlerRelationType as OrganisationFunktionOrganisationEnhedFlerRelationType;
use ItkDev\Serviceplatformen\SF1500\OrganisationFunktion\StructType\RelationListeType as OrganisationFunktionRelationListeType;
use ItkDev\Serviceplatformen\SF1500\OrganisationFunktion\StructType\SoegInputType as OrganisationFunktionSoegInputType;
use ItkDev\Serviceplatformen\SF1500\OrganisationFunktion\StructType\SoegOutputType as OrganisationFunktionSoegOutputType;
use ItkDev\Serviceplatformen\SF1500\OrganisationFunktion\StructType\UnikIdType as OrganisationFunktionUnikIdType;
use ItkDev\Serviceplatformen\SF1500\Person\ClassMap as PersonClassMap;
use ItkDev\Serviceplatformen\SF1500\Person\ServiceType\_List as PersonList;
use ItkDev\Serviceplatformen\SF1500\Person\ServiceType\Laes as PersonLaes;
use ItkDev\Serviceplatformen\SF1500\Person\ServiceType\Soeg as PersonSoeg;
use ItkDev\Serviceplatformen\SF1500\Person\StructType\LaesInputType as PersonLaesInputType;
use Symfony\Component\Cache\Adapter\FilesystemAdapter;
use Symfony\Component\OptionsResolver\Options;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Contracts\Cache\CacheInterface;
use Symfony\Contracts\Cache\ItemInterface;

class SF1500
{
    /**
     * Client instances indexed by class name.
     * @var array
     */
    protected array $clients = [];

    /**
     * Service instances indexed by class name.
     * @var array
     */
    protected array $services = [];

    private SF1500XMLBuilder $xmlBuilder;
    private SF1514 $sf1514;
    protected array $options;

    private static bool|null $shutdownFunctionRegistered = null;

    public function __construct(SF1514 $sf1514, array $options)
    {
        $this->sf1514 = $sf1514;
        $this->xmlBuilder = new SF1500XMLBuilder();
        $this->options = $this->resolveOptions($options);

        if (!self::$shutdownFunctionRegistered) {
            register_shutdown_function(self::shutdown(...));
            self::$shutdownFunctionRegistered = true;
        }
    }

    /**
     * Fetches person name from SF1500.
     */
    public function getPersonName(string $brugerId): string
    {
        try {
            $response = $this->brugerLaes($brugerId);

            $personId = $response
              ->getFiltreretOejebliksbillede()
              ->getRegistrering()[0]
              ->getRelationListe()->getTilknyttedePersoner()[0]
              ->getReferenceID()
              ->getUUIDIdentifikator();
        } catch (\Throwable $throwable) {
            throw new SF1500Exception(sprintf('Cannot find person id for bruger id %s', $brugerId), $throwable->getCode(), $throwable);
        }

        try {
            $personLaesClient = $this->getClient(PersonLaes::class);
            $response = $personLaesClient->laes(new PersonLaesInputType($personId));

            return $response
              ->getFiltreretOejebliksbillede()
              ->getRegistrering()[0]
              ->getAttributListe()
              ->getEgenskab()[0]
              ->getNavnTekst();
        } catch (\Throwable $throwable) {
            throw new SF1500Exception(sprintf('Cannot find person name for person id %s', $personId), $throwable->getCode(), $throwable);
        }
    }

    /**
     * Fetches person az ident from SF1500.
     */
    public function getPersonAZIdent(string $brugerId): string
    {
        $response = $this->brugerLaes($brugerId);

        return $response
        ->getFiltreretOejebliksbillede()
        ->getRegistrering()[0]
        ->getAttributListe()
        ->getEgenskab()[0]
        ->getBrugerNavn();
    }

    /**
     * Fetches person phone from SF1500.
     */
    public function getPersonPhone(string $brugerId): string
    {
        return $this->getBrugerAdresse('Mobiltelefon_bruger', $brugerId);
    }

    /**
     * Fetches person location from SF1500.
     */
    public function getPersonLocation(string $brugerId): string
    {
        return $this->getBrugerAdresse('Lokation_bruger', $brugerId);
    }

    /**
     * Fetches person email from SF1500.
     */
    public function getPersonEmail(string $brugerId): string
    {
        return $this->getBrugerAdresse('Email_bruger', $brugerId);
    }

    /**
     * Fetches organisations funktioner from SF1500.
     */
    public function getOrganisationFunktionerFromUserId(string $brugerId): array
    {
        return $this->soegOrganisationFunktioner($brugerId, null, null, null);
    }

    /**
     * Searches for organisations funktioner from SF1500.
     */
    public function soegOrganisationFunktioner(?string $brugerId, ?string $funktionsNavn, ?string $organisationId, ?string $funktionsTypeId): array
    {
        $response = $this->organisationFunktionSoeg($brugerId, $funktionsNavn, $organisationId, $funktionsTypeId);
        $idListe = $response->getIdListe();

        return null === $idListe ? [] : ($idListe->getUUIDIdentifikator() ?? []);
    }

    /**
     * Fetches organisation enhed level 1 name from SF1500.
     */
    public function getOrganisationEnhed(string $funktionsId, bool $returnOrganisationID = false): string
    {
        try {
            $response = $this->organisationFunktionLaes($funktionsId);
            $orgEnhedId = $response
              ->getFiltreretOejebliksbillede()
              ->getRegistrering()[0]
              ->getRelationListe()
              ->getTilknyttedeEnheder()[0]
              ->getReferenceID()
              ->getUUIDIdentifikator();
        } catch (\Throwable $throwable) {
            throw new SF1500Exception(sprintf('Cannot find organisation enheds id for funktionsid %s', $funktionsId), $throwable->getCode(), $throwable);
        }

        if ($returnOrganisationID) {
            return $orgEnhedId;
        }

        return $this
          ->organisationEnhedLaes($orgEnhedId)
          ->getFiltreretOejebliksbillede()
          ->getRegistrering()[0]
          ->getAttributListe()
          ->getEgenskab()[0]
          ->getEnhedNavn();
    }

    /**
     * Fetches funktions navn from SF1500.
     */
    public function getFunktionsNavn(string $funktionsId): string
    {
        $response = $this->organisationFunktionLaes($funktionsId);
        return $response
          ->getFiltreretOejebliksbillede()
          ->getRegistrering()[0]
          ->getAttributListe()
          ->getEgenskab()[0]
          ->getFunktionNavn();
    }

    /**
     * Fetches organisation enhed level 2 from SF1500.
     */
    public function getOrganisationEnhedNiveauTo(string $funktionsId): string
    {
        try {
            $orgEnhedId = $this->getOrganisationEnhed($funktionsId, true);

            if (empty($orgEnhedId)) {
                return '';
            }

            // Niveau 1.
            $response = $this->organisationEnhedLaes($orgEnhedId);
            $orgEnhedId = $response
              ->getFiltreretOejebliksbillede()
              ->getRegistrering()[0]
              ->getRelationListe()
              ->getOverordnet()
              ->getReferenceID()
              ->getUUIDIdentifikator();

            if (null === $orgEnhedId) {
                throw new SF1500Exception('Cannot find organisation enheds id');
            }

            $response = $this->organisationEnhedLaes($orgEnhedId);
            return $response
              ->getFiltreretOejebliksbillede()
              ->getRegistrering()[0]
              ->getAttributListe()
              ->getEgenskab()[0]
              ->getEnhedNavn();
        } catch (\Throwable $throwable) {
            throw new SF1500Exception('Cannot find organisation enheds id', $throwable->getCode(), $throwable);
        }
    }

    /**
     * Fetches organisation address from SF1500.
     */
    public function getOrganisationAddress(string $funktionsId): string
    {
        $orgEnhedId = $this->getOrganisationEnhed($funktionsId, true);

        if (empty($orgEnhedId)) {
            return '';
        }

        try {
            $response = $this->organisationEnhedLaes($orgEnhedId);
            $adresser = $response
              ->getFiltreretOejebliksbillede()
              ->getRegistrering()[0]
              ->getRelationListe()
              ->getAdresser();

            if (is_array($adresser)) {
                foreach ($adresser as $adresse) {
                    if ('Postadresse' === $adresse->getRolle()->getLabel()) {
                        $adresseId = $adresse->getReferenceID()->getUUIDIdentifikator();
                        $adresse = $this->adresseLaes($adresseId);

                        return $adresse
                            ->getFiltreretOejebliksbillede()
                            ->getRegistrering()[0]
                            ->getAttributListe()
                            ->getEgenskab()[0]
                            ->getAdresseTekst();
                    }
                }
            }

            return '';
        } catch (\Throwable $throwable) {
            throw new SF1500Exception(sprintf('Cannot find organisation address for funktionsid %s', $funktionsId), $throwable->getCode(), $throwable);
        }
    }

    /**
     * Fetches person magistrat from SF1500.
     */
    public function getPersonMagistrat(string $funktionsId): string
    {
        $orgEnhedId = $this->getOrganisationEnhed($funktionsId, true);

        if (empty($orgEnhedId)) {
            return '';
        }

        $response = $this->organisationEnhedLaes($orgEnhedId);
        $enhedNavn = $response
          ->getFiltreretOejebliksbillede()
          ->getRegistrering()[0]
          ->getAttributListe()
          ->getEgenskab()[0]
          ->getEnhedNavn();

        $data = $this->getEnhedNavnOgOverordnetOrganisationsId($orgEnhedId);
        while ($orgEnhedId = $data['overordnet_id']) {
            $enhedNavn = $data['enhedNavn'];
            $data = $this->getEnhedNavnOgOverordnetOrganisationsId($orgEnhedId);
        }

        return $enhedNavn;
    }

    /**
     * Fetches enhedsnavn and overordnet organisations id.
     */
    public function getEnhedNavnOgOverordnetOrganisationsId($organisationEnhedsId): array
    {
        $overordnetId = null;
        $enhedNavn = null;

        try {
            $data = $this->organisationEnhedLaes($organisationEnhedsId);
            $registrering = $data
              ->getFiltreretOejebliksbillede()
              ->getRegistrering()[0];

            $overordnetId = $registrering
              ->getRelationListe()
              ->getOverordnet()
              ->getReferenceID()
              ->getUUIDIdentifikator();

            $enhedNavn = $registrering
              ->getAttributListe()
              ->getEgenskab()[0]
              ->getEnhedNavn();
        } catch (\Throwable $throwable) {
            // Ignore any errors.
        }

        return [
          'overordnet_id' => $overordnetId,
          'enhedNavn' => $enhedNavn,
        ];
    }

    /**
     * Fetches bruger and organisation funktions id for managers from user id.
     * Returns empty array if no manager exists.
     * @throws SF1500Exception|SAMLTokenException
     */
    public function getManagerBrugerAndFunktionsIdFromUserId($userId, $managerFunktionsTypeId): array
    {
        $organisationFunktionsId = $this->getOrganisationFunktionerFromUserId($userId);

        if (empty($organisationFunktionsId)) {
            throw new SF1500Exception(sprintf('Cannot find any organisation funktioner for user %s', $userId));
        }

        $managers = [];

        foreach ($organisationFunktionsId as $id) {
            $managerInfo = $this->getManagerBrugerAndFunktionsIdFromFunktionsId($id, $managerFunktionsTypeId);

            if (!empty($managerInfo)) {
                // A user cannot be its own manager.
                $managers[] = array_filter(
                    $managerInfo,
                    static fn (array $info) => $info['brugerId'] !== $userId
                );
            }
        }

        return array_merge(...$managers);
    }

    /**
     * Fetches bruger and organisation funktions id for managers from funktions id.
     * Returns empty array if no manager exists
     * @throws SF1500Exception
     */
    private function getManagerBrugerAndFunktionsIdFromFunktionsId($funktionsId, $managerFunktionsTypeId): array
    {
        $orgId = $this->getOrganisationEnhed($funktionsId, true);

        // If current user is manager, start searching one level up in organisation tree.
        if ($managerFunktionsTypeId === $this->getOrganisationFunktionsTypeFromOrganisationFunktion($funktionsId)) {
            $orgId = $this->getOverordnetOrganisatonEnhedId($orgId);

            if (null === $orgId) {
                // We have reached the top
                return [];
            }
        }

        $managerFunktionIds = $this->soegOrganisationFunktioner(null, null, $orgId, $managerFunktionsTypeId);

        while (empty($managerFunktionIds)) {
            // Search one level further up the organisation tree.
            $orgId = $this->getOverordnetOrganisatonEnhedId($orgId);

            if (null === $orgId) {
                // We have reached the top
                return [];
            }

            $managerFunktionIds = $this->soegOrganisationFunktioner(null, null, $orgId, $managerFunktionsTypeId);
        }

        $result = [];

        foreach ($managerFunktionIds as $managerFunktionId) {
            $managerBrugerId = $this->getBrugerIdFromOrganisationFunktion($managerFunktionId);

            $result[] = [
                'brugerId' => $managerBrugerId,
                'funktionsId' => $managerFunktionId,
            ];
        }

        return $result;
    }

    /**
     * Fetches overordnet organisation enheds id or null if it does not exist.
     */
    public function getOverordnetOrganisatonEnhedId(string $organisationEnhedId): ?string
    {
        return $this->getEnhedNavnOgOverordnetOrganisationsId($organisationEnhedId)['overordnet_id'];
    }

    public function getOrganisationFunktionsTypeFromOrganisationFunktion($id): string
    {
        try {
            return $this
              ->organisationFunktionLaes($id)
              ->getFiltreretOejebliksbillede()
              ->getRegistrering()[0]
              ->getRelationListe()
              ->getFunktionstype()
              ->getReferenceID()
              ->getUUIDIdentifikator();
        } catch (\Throwable $throwable) {
            throw new SF1500Exception(sprintf('Cannot find organisation funktions type for organisation funktion id %s', $id), $throwable->getCode(), $throwable);
        }
    }

    public function getBrugerIdFromOrganisationFunktion($organisationFunktionsId): string
    {
        try {
            return $this
              ->organisationFunktionLaes($organisationFunktionsId)
              ->getFiltreretOejebliksbillede()
              ->getRegistrering()[0]
              ->getRelationListe()
              ->getTilknyttedeBrugere()[0]
              ->getReferenceID()
              ->getUUIDIdentifikator();
        } catch (\Throwable $throwable) {
            throw new SF1500Exception(sprintf('Cannot read bruger id from organisation funktion %s', $organisationFunktionsId), $throwable->getCode(), $throwable);
        }
    }

    /**
     * Gets SAML token from SF1514.
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

    /**
     * Performs bruger laes action.
     */
    private function brugerLaes($brugerId): BrugerLaesOutputType
    {
        $brugerLaesClient = $this->getClient(BrugerLaes::class);
        return $brugerLaesClient->laes(new BrugerLaesInputType($brugerId));
    }

    /**
     * Performs adresse laes action.
     */
    private function adresseLaes($adresseId): AdresseLaesOutputType
    {
        return $this->getClient(AdresseLaes::class)
          ->laes(new AdresseLaesInputType($adresseId));
    }

    /**
     * Performs organisation enhed laes action.
     */
    private function organisationEnhedLaes($orgEnhedId): ?OrganisationEnhedLaesOutputType
    {
        return $this->getClient(OrganisationEnhedLaes::class)
          ->laes(new OrganisationEnhedLaesInputType($orgEnhedId)) ?: null;
    }

    /**
     * Performs organisation funktion laes action.
     */
    private function organisationFunktionLaes(string $orgFunktionId): ?OrganisationFunktionLaesOutputType
    {
        return $this
          ->getClient(OrganisationFunktionLaes::class)
          ->laes(new OrganisationFunktionLaesInputType($orgFunktionId)) ?: null;
    }

    /**
     * Performs organisation funktion soeg action.
     */
    private function organisationFunktionSoeg(?string $brugerId, ?string $funktionsNavn, ?string $organisationsId, ?string $funktionsTypeId): ?OrganisationFunktionSoegOutputType
    {
        $attributListe = new OrganisationFunktionAttributListeType();
        if (null !== $funktionsNavn) {
            $attributListe->addToEgenskab((new OrganisationFunktionEgenskabType())
              ->setFunktionNavn($funktionsNavn));
        }

        $relationsListe = new OrganisationFunktionRelationListeType();
        if (null !== $brugerId) {
            $relationsListe->addToTilknyttedeBrugere((new OrganisationFunktionBrugerFlerRelationType)
                ->setReferenceID(new OrganisationFunktionUnikIdType($brugerId)));
        }
        if (null !== $organisationsId) {
            // TODO: Why is organisationsId an enhed?!
            $relationsListe->addToTilknyttedeEnheder((new OrganisationFunktionOrganisationEnhedFlerRelationType())
              ->setReferenceID(new OrganisationFunktionUnikIdType($organisationsId)));
        }
        if (null !== $funktionsTypeId) {
            $relationsListe->setFunktionstype((new OrganisationFunktionKlasseRelationType)
                ->setReferenceID(new OrganisationFunktionUnikIdType($funktionsTypeId)));
        }

        $request = (new OrganisationFunktionSoegInputType())
          ->setAttributListe($attributListe)
          ->setRelationListe($relationsListe);

        return $this
          ->getClient(OrganisationFunktionSoeg::class)
          ->soeg($request) ?: null;
    }

    /**
     * Fetches bruger adresse attribut.
     */
    private function getBrugerAdresse(string $rolle, string $brugerId): string
    {
        try {
            $brugerLaesClient = $this->getClient(BrugerLaes::class);
            $response = $brugerLaesClient->laes(new BrugerLaesInputType($brugerId));

            $adresser = $response
                ->getFiltreretOejebliksbillede()
                ->getRegistrering()[0]
                ->getRelationListe()
                ->getAdresser();

            foreach ($adresser as $adresse) {
                if ($rolle === $adresse->getRolle()->getLabel()) {
                    $adresse = $this->adresseLaes($adresse->getReferenceID()->getUUIDIdentifikator());

                    return $adresse
                      ->getFiltreretOejebliksbillede()
                      ->getRegistrering()[0]
                      ->getAttributListe()
                      ->getEgenskab()[0]
                      ->getAdresseTekst();
                }
            }

            return '';
        } catch (\Throwable $throwable) {
            throw new SF1500Exception(sprintf('Cannot find adresse %s for bruger id %s', $rolle, $brugerId), $throwable->getCode(), $throwable);
        }
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
                        ? 'https://adgangsstyring.eksterntest-stoettesystemerne.dk/runtime/services/kombittrust/14/certificatemixed'
                        : 'https://adgangsstyring.stoettesystemerne.dk/runtime/services/kombittrust/14/certificatemixed';
                },
                'saml_token_expiration_time_offset' => '-15 minutes',
                'service_endpoint_domain' => static function (Options $options) {
                    return $options['test_mode']
                        ? 'https://organisation.eksterntest-stoettesystemerne.dk'
                        : 'https://organisation.stoettesystemerne.dk';
                },
                'soap_request_cache_expiration_time' => ['+1 hour'],
                'soap_service_version' => '6',
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

        $path = preg_replace('@^.*(?=/organisation/)@', '', $location);

        // Work around typo in WSDL document (remove superfluous 's').
        $path = preg_replace('@/organisationsenhed$@', '/organisationenhed', $path);

        $soapLocation = $domain.$path.'/'.$this->options['soap_service_version'].'/';

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
        bool $oneWay = false
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
     *
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

            if ($this->preventCaching($response)) {
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
            $key . '|' . sha1(json_encode($payload+$this->options))
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

    /**
     * @template Service of ServiceInterface
     * @param class-string<Service> $className
     * @return Service
     */
    public function getService(string $className): ServiceInterface
    {
        if (!isset($this->services[$className])) {
            $this->services[$className] = new $className($this->sf1514, $this->options);
        }

        return $this->services[$className];
    }

    /**
     * @template Client of SoapClientBase
     * @param class-string<Client> $className
     * @return Client
     */
    public function getClient(string $className, array $options = []): SoapClientBase
    {
        if (!isset($this->clients[$className])) {
            [$wsdlUrl, $classMap] = $this->getSoapClientInfo($className);
            $this->clients[$className] = (new $className([
              SoapClientBase::WSDL_URL => $wsdlUrl,
              SoapClientBase::WSDL_CLASSMAP => $classMap,
            ] + $options))
              ->setSF1500($this);
        }

        return $this->clients[$className];
    }

    protected function getSoapClientInfo(string $className): array
    {
        switch ($className) {
            case AdresseSoeg::class:
            case AdresseList::class:
            case AdresseLaes::class:
                return [
                __DIR__ . '/../../../resources/sf1500/Tekniske specifikationer (v6.0 Services)/v6_0_0_0/wsdl/Adresse.wsdl',
                AdresseClassMap::get(),
              ];
            case BrugerSoeg::class:
            case BrugerList::class:
            case BrugerLaes::class:
                return [
                __DIR__ . '/../../../resources/sf1500/Tekniske specifikationer (v6.0 Services)/v6_0_0_0/wsdl/Bruger.wsdl',
                BrugerClassMap::get(),
              ];
            case OrganisationEnhedSoeg::class:
            case OrganisationEnhedList::class:
            case OrganisationEnhedLaes::class:
                return [
                __DIR__ . '/../../../resources/sf1500/Tekniske specifikationer (v6.0 Services)/v6_0_0_0/wsdl/OrganisationEnhed.wsdl',
                OrganisationEnhedClassMap::get(),
              ];
            case OrganisationFunktionSoeg::class:
            case OrganisationFunktionList::class:
            case OrganisationFunktionLaes::class:
                return [
                __DIR__ . '/../../../resources/sf1500/Tekniske specifikationer (v6.0 Services)/v6_0_0_0/wsdl/OrganisationFunktion.wsdl',
                OrganisationFunktionClassMap::get(),
              ];
            case PersonSoeg::class:
            case PersonList::class:
            case PersonLaes::class:
                return [
                __DIR__ . '/../../../resources/sf1500/Tekniske specifikationer (v6.0 Services)/v6_0_0_0/wsdl/Person.wsdl',
                PersonClassMap::get(),
              ];
        }

        throw new \InvalidArgumentException(sprintf('Invalid class name: %s', $className));
    }
}
