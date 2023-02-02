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
use ItkDev\Serviceplatformen\Service\SoapClient;
use Symfony\Component\Cache\Adapter\FilesystemAdapter;
use Symfony\Component\OptionsResolver\Options;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\PropertyAccess\PropertyAccessor;
use Symfony\Contracts\Cache\CacheInterface;

class SF1500
{
    private SoapClient $client;
    private PropertyAccessor $propertyAccessor;
    private SF1500XMLBuilder $xmlBuilder;
    private SF1514 $sf1514;
    private array $options;

    public function __construct(SoapClient $client, SF1514 $sf1514, SF1500XMLBuilder $xmlBuilder, PropertyAccessor $propertyAccessor, array $options)
    {
        $this->client = $client;
        $this->sf1514 = $sf1514;
        $this->xmlBuilder = $xmlBuilder;
        $this->propertyAccessor = $propertyAccessor;
        $resolver = new OptionsResolver();
        $this->configureOptions($resolver);
        $this->options = $resolver->resolve($options);
    }

    /**
     * Fetches person name from SF1500.
     */
    public function getPersonName(string $brugerId): string
    {
        $data = $this->brugerLaes($brugerId);

        $personIdKeys = [
            'ns3LaesOutput',
            'ns3FiltreretOejebliksbillede',
            'ns3Registrering',
            'ns3RelationListe',
            'ns2TilknyttedePersoner',
            'ns2ReferenceID',
            'ns2UUIDIdentifikator',
        ];

        $personId = $this->getValue($data, $personIdKeys);

        if (null === $personId) {
            throw new SF1500Exception('Cannot find person id.');
        }

        $data = $this->personLaes($personId);

        $navnTekstKeys = [
            'ns3LaesOutput',
            'ns3FiltreretOejebliksbillede',
            'ns3Registrering',
            'ns3AttributListe',
            'ns3Egenskab',
            'ns3NavnTekst',
        ];

        return $this->getValue($data, $navnTekstKeys, '');
    }

    /**
     * Fetches person phone from SF1500.
     */
    public function getPersonPhone(string $brugerId): string
    {
        return $this->getBrugerAdresseAttribut('Mobiltelefon_bruger', $brugerId);
    }

    /**
     * Fetches person location from SF1500.
     */
    public function getPersonLocation(string $brugerId): string
    {
        return $this->getBrugerAdresseAttribut('Lokation_bruger', $brugerId);
    }

    /**
     * Fetches person email from SF1500.
     */
    public function getPersonEmail(string $brugerId): string
    {
        return $this->getBrugerAdresseAttribut('Email_bruger', $brugerId);
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
        $data = $this->organisationFunktionSoeg($brugerId, $funktionsNavn, $organisationId, $funktionsTypeId);

        $idListeKeys = [
            'ns3SoegOutput',
            'ns2IdListe',
            'ns2UUIDIdentifikator',
        ];

        // If only one result is found convert it into array with one entry.
        return (array)$this->getValue($data, $idListeKeys, []);
    }

    /**
     * Fetches organisation enhed level 1 name from SF1500.
     */
    public function getOrganisationEnhed(string $funktionsId, bool $returnOrganisationID = false): string
    {
        $data = $this->organisationFunktionLaes($funktionsId);

        $tilknyttedeEnhederKeys = [
            'ns3LaesOutput',
            'ns3FiltreretOejebliksbillede',
            'ns3Registrering',
            'ns3RelationListe',
            'ns2TilknyttedeEnheder',
            'ns2ReferenceID',
            'ns2UUIDIdentifikator',
        ];

        $orgEnhedId = $this->getValue($data, $tilknyttedeEnhederKeys);

        if (null === $orgEnhedId) {
            throw new SF1500Exception('Cannot find organisation enheds id.');
        }

        if ($returnOrganisationID) {
            return $orgEnhedId;
        }

        $data = $this->organisationEnhedLaes($orgEnhedId);

        $enhedsNavnKeys = [
            'ns3LaesOutput',
            'ns3FiltreretOejebliksbillede',
            'ns3Registrering',
            'ns3AttributListe',
            'ns3Egenskab',
            'ns2EnhedNavn',
        ];

        return $this->getValue($data, $enhedsNavnKeys, '');
    }

    /**
     * Fetches funktions navn from SF1500.
     */
    public function getFunktionsNavn(string $funktionsId): string
    {
        $data = $this->organisationFunktionLaes($funktionsId);

        $funktionsNavnKeys = [
            'ns3LaesOutput',
            'ns3FiltreretOejebliksbillede',
            'ns3Registrering',
            'ns3AttributListe',
            'ns3Egenskab',
            'ns2FunktionNavn',
        ];

        return $this->getValue($data, $funktionsNavnKeys, '');
    }

    /**
     * Fetches organisation enhed level 2 from SF1500.
     */
    public function getOrganisationEnhedNiveauTo(string $funktionsId): string
    {
        $orgEnhedId = $this->getOrganisationEnhed($funktionsId, true);

        if (empty($orgEnhedId)) {
            return '';
        }

        // Level 1.
        $data = $this->organisationEnhedLaes($orgEnhedId);

        $overordnetKeys = [
            'ns3LaesOutput',
            'ns3FiltreretOejebliksbillede',
            'ns3Registrering',
            'ns3RelationListe',
            'ns2Overordnet',
            'ns2ReferenceID',
            'ns2UUIDIdentifikator',
        ];

        // Level 2.
        $orgEnhedId = $this->getValue($data, $overordnetKeys);

        if (null === $orgEnhedId) {
            throw new SF1500Exception('Cannot find organisation enheds id.');
        }

        $data = $this->organisationEnhedLaes($orgEnhedId);

        $enhedsNavnKeys = [
            'ns3LaesOutput',
            'ns3FiltreretOejebliksbillede',
            'ns3Registrering',
            'ns3AttributListe',
            'ns3Egenskab',
            'ns2EnhedNavn',
        ];

        return $this->getValue($data, $enhedsNavnKeys, '');
    }

    /**
     * Fetches person az ident from SF1500.
     */
    public function getPersonAZIdent(string $brugerId): string
    {
        $data = $this->brugerLaes($brugerId);

        $brugerNavnKeys = [
            'ns3LaesOutput',
            'ns3FiltreretOejebliksbillede',
            'ns3Registrering',
            'ns3AttributListe',
            'ns3Egenskab',
            'ns2BrugerNavn',
        ];

        return $this->getValue($data, $brugerNavnKeys, '');
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

        $data = $this->organisationEnhedLaes($orgEnhedId);

        $adresseKeys = [
            'ns3LaesOutput',
            'ns3FiltreretOejebliksbillede',
            'ns3Registrering',
            'ns3RelationListe',
            'ns2Adresser',
        ];

        $adresser = $this->getValue($data, $adresseKeys);

        if (!is_array($adresser)) {
            throw new SF1500Exception('Cannot find organisation address.');
        }

        $adresseTekstKeys = [
            'ns3LaesOutput',
            'ns3FiltreretOejebliksbillede',
            'ns3Registrering',
            'ns3AttributListe',
            'ns3Egenskab',
            'ns4AdresseTekst',
        ];

        $adresseRolleLabelKeys = [
            'ns2Rolle',
            'ns2Label',
        ];

        $adresseReferenceUuidKeys = [
            'ns2ReferenceID',
            'ns2UUIDIdentifikator',
        ];

        foreach ($adresser as $adresse) {
            if ('Postadresse' === $this->getValue($adresse, $adresseRolleLabelKeys)) {
                $adresseId = $this->getValue($adresse, $adresseReferenceUuidKeys);

                if (null === $adresseId) {
                    continue;
                }

                $data = $this->adresseLaes($adresseId);

                return $this->getValue($data, $adresseTekstKeys, '');
            }
        }

        return '';
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

        $data = $this->organisationEnhedLaes($orgEnhedId);


        $enhedsNavnKeys = [
            'ns3LaesOutput',
            'ns3FiltreretOejebliksbillede',
            'ns3Registrering',
            'ns3AttributListe',
            'ns3Egenskab',
            'ns2EnhedNavn',
        ];

        $enhedNavn = $this->getValue($data, $enhedsNavnKeys);

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
        $data = $this->organisationEnhedLaes($organisationEnhedsId);

        $overordnetKeys = [
            'ns3LaesOutput',
            'ns3FiltreretOejebliksbillede',
            'ns3Registrering',
            'ns3RelationListe',
            'ns2Overordnet',
            'ns2ReferenceID',
            'ns2UUIDIdentifikator',
        ];

        $enhedsNavnKeys = [
            'ns3LaesOutput',
            'ns3FiltreretOejebliksbillede',
            'ns3Registrering',
            'ns3AttributListe',
            'ns3Egenskab',
            'ns2EnhedNavn',
        ];

        return [
            'overordnet_id' => $this->getValue($data, $overordnetKeys),
            'enhedNavn' => $this->getValue($data, $enhedsNavnKeys),
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
                $managers[] = $managerInfo;
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
        }

        if (null === $orgId) {
            // We have reached the top
            return [];
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
        $data = $this->laesOrganisationFunktion($id);

        $enhedsNavnKeys = [
            'ns3LaesOutput',
            'ns3FiltreretOejebliksbillede',
            'ns3Registrering',
            'ns3RelationListe',
            'ns2Funktionstype',
            'ns2ReferenceID',
            'ns2UUIDIdentifikator',
        ];

        $organisationFunktionsTypeId = $this->getValue($data, $enhedsNavnKeys);

        if (null === $organisationFunktionsTypeId) {
            throw new SF1500Exception(sprintf('Cannot find organisation funktions type for organisation funktion id %s', $id));
        }

        return $organisationFunktionsTypeId;
    }


    public function getPersonLaes($personId): array
    {
        return $this->personLaes($personId);
    }

    public function getPersonSoeg($name): array
    {
        return $this->personSoeg($name);
    }

    public function laesOrganisationFunktion($id): array
    {
        return $this->organisationFunktionLaes($id);
    }

    public function getBrugerIdFromOrganisationFunktion($organisationFunktionsId): string
    {
        $data = $this->organisationFunktionLaes($organisationFunktionsId);

        $enhedsNavnKeys = [
            'ns3LaesOutput',
            'ns3FiltreretOejebliksbillede',
            'ns3Registrering',
            'ns3RelationListe',
            'ns2TilknyttedeBrugere',
            'ns2ReferenceID',
            'ns2UUIDIdentifikator',
        ];

        $enhedsNavn = $this->getValue($data, $enhedsNavnKeys);

        if (null === $enhedsNavn) {
            throw new SF1500Exception(sprintf('Cannot read bruger id from organisation funktion %s', $organisationFunktionsId));
        }

        return $this->getValue($data, $enhedsNavnKeys);
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
     * Creates XML request.
     */
    private function createXMLRequest(string $header, string $body): string
    {
        return <<<XML
    <s:Envelope xmlns:s="http://www.w3.org/2003/05/soap-envelope" xmlns:a="http://www.w3.org/2005/08/addressing" xmlns:u="http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-wssecurity-utility-1.0.xsd">$header$body</s:Envelope>
    XML;
    }

    /**
     * Converts XML response to array.
     */
    private function responseXMLToArray(string $response): array
    {
        // Handle xml namespaces.
        $response = preg_replace("/(<\/?)(\w+):([^>]*>)/", "$1$2$3", $response);
        $xml = simplexml_load_string($response);
        $body = $xml->xpath('//soapBody')[0];
        return json_decode(json_encode((array) $body), true);
    }

    /**
     * Performs bruger laes action.
     */
    private function brugerLaes($brugerId): array
    {
        $endpoint = $this->generateServiceEndpoint('/organisation/bruger/6/');
        $action = 'http://kombit.dk/sts/organisation/bruger/laes';


        $header = $this->buildHeaderXML($endpoint, $action);
        $body = $this->xmlBuilder->buildBodyBrugerLaesXML($brugerId);
        $request = $this->createXMLRequest($header, $body);

        $requestSigned = $this->xmlBuilder->buildSignedRequest($request, $this->getPrivateKey());

        $cacheKeyOptions = [
            __METHOD__,
            $brugerId,
        ];

        $response = $this->client->doSoap($endpoint, $requestSigned, $action, false, $cacheKeyOptions);

        return $this->responseXMLToArray($response);
    }

    /**
     * Performs adresse laes action.
     */
    private function adresseLaes($adresseID): array
    {
        $endpoint = $this->generateServiceEndpoint('/organisation/adresse/6/');
        $action = 'http://kombit.dk/sts/organisation/adresse/laes';

        $header = $this->buildHeaderXML($endpoint, $action);
        $body = $this->xmlBuilder->buildBodyAdresseLaesXML($adresseID);
        $request = $this->createXMLRequest($header, $body);

        $requestSigned = $this->xmlBuilder->buildSignedRequest($request, $this->getPrivateKey());

        $cacheKeyOptions = [
            __METHOD__,
            $adresseID,
        ];

        $response = $this->client->doSoap($endpoint, $requestSigned, $action, false, $cacheKeyOptions);

        return $this->responseXMLToArray($response);
    }

    /**
     * Performs organisation enhed laes action.
     */
    private function organisationEnhedLaes($orgEnhedId): array
    {
        $endpoint = $this->generateServiceEndpoint('/organisation/organisationenhed/6/');
        $action = 'http://kombit.dk/sts/organisation/organisationenhed/laes';

        $body = $this->xmlBuilder->buildBodyOrganisationEnhedLaesXML($orgEnhedId);
        $header = $this->buildHeaderXML($endpoint, $action);
        $request = $this->createXMLRequest($header, $body);

        $requestSigned = $this->xmlBuilder->buildSignedRequest($request, $this->getPrivateKey());

        $cacheKeyOptions = [
            __METHOD__,
            $orgEnhedId,
        ];

        $response = $this->client->doSoap($endpoint, $requestSigned, $action, false, $cacheKeyOptions);

        return $this->responseXMLToArray($response);
    }

    /**
     * Performs organisation funktion laes action.
     */
    private function organisationFunktionLaes($orgFunktionId): array
    {
        $endpoint = $this->generateServiceEndpoint('/organisation/organisationfunktion/6/');
        $action = 'http://kombit.dk/sts/organisation/organisationfunktion/laes';

        $body = $this->xmlBuilder->buildBodyOrganisationFunktionLaesXML($orgFunktionId);
        $header = $this->buildHeaderXML($endpoint, $action);
        $request = $this->createXMLRequest($header, $body);

        $requestSigned = $this->xmlBuilder->buildSignedRequest($request, $this->getPrivateKey());

        $cacheKeyOptions = [
            __METHOD__,
            $orgFunktionId,
        ];

        $response = $this->client->doSoap($endpoint, $requestSigned, $action, false, $cacheKeyOptions);

        return $this->responseXMLToArray($response);
    }

    /**
     * Performs organisation funktion soeg action.
     */
    private function organisationFunktionSoeg(?string $brugerId, ?string $funktionsNavn, ?string $organisationsId, ?string $funktionsTypeId): array
    {
        $endpoint = $this->generateServiceEndpoint('/organisation/organisationfunktion/6/');
        $action = 'http://kombit.dk/sts/organisation/organisationfunktion/soeg';

        $body = $this->xmlBuilder->buildBodyOrganisationFunktionSoegXML($brugerId, $funktionsNavn, $organisationsId, $funktionsTypeId);
        $header = $this->buildHeaderXML($endpoint, $action);
        $request = $this->createXMLRequest($header, $body);

        $requestSigned = $this->xmlBuilder->buildSignedRequest($request, $this->getPrivateKey());

        $cacheKeyOptions = [
            __METHOD__,
            $brugerId,
            $funktionsNavn,
            $organisationsId,
            $funktionsTypeId,
        ];

        $response = $this->client->doSoap($endpoint, $requestSigned, $action, false, $cacheKeyOptions);

        return $this->responseXMLToArray($response);
    }

    /**
     * Performs person laes action.
     */
    private function personLaes($personId): array
    {
        $endpoint = $this->generateServiceEndpoint('/organisation/person/6/');
        $action = 'http://kombit.dk/sts/organisation/person/laes';

        $header = $this->buildHeaderXML($endpoint, $action);
        $body = $this->xmlBuilder->buildBodyPersonLaesXML($personId);
        $request = $this->createXMLRequest($header, $body);

        $requestSigned = $this->xmlBuilder->buildSignedRequest($request, $this->getPrivateKey());

        $cacheKeyOptions = [
            __METHOD__,
            $personId,
        ];

        $response = $this->client->doSoap($endpoint, $requestSigned, $action, false, $cacheKeyOptions);

        return $this->responseXMLToArray($response);
    }

    /**
     * Performs person soeg action.
     */
    private function personSoeg($name): array
    {
        $endpoint = $this->generateServiceEndpoint('/organisation/person/6/');
        $action = 'http://kombit.dk/sts/organisation/person/soeg';

        $header = $this->buildHeaderXML($endpoint, $action);
        $body = $this->xmlBuilder->buildBodyPersonSoegXML($name);
        $request = $this->createXMLRequest($header, $body);

        $requestSigned = $this->xmlBuilder->buildSignedRequest($request, $this->getPrivateKey());

        $cacheKeyOptions = [
            __METHOD__,
            $name,
        ];

        $response = $this->client->doSoap($endpoint, $requestSigned, $action, false, $cacheKeyOptions);

        return $this->responseXMLToArray($response);
    }

    /**
     * Fetches bruger adresse attribut.
     */
    private function getBrugerAdresseAttribut(string $attribute, string $brugerId): string
    {
        $data = $this->brugerLaes($brugerId);

        $adresseKeys = [
            'ns3LaesOutput',
            'ns3FiltreretOejebliksbillede',
            'ns3Registrering',
            'ns3RelationListe',
            'ns2Adresser',
        ];

        $adresser = $this->getValue($data, $adresseKeys);

        if (!is_array($adresser)) {
            throw new SF1500Exception('Cannot find organisation address.');
        }

        $adresseTekstKeys = [
            'ns3LaesOutput',
            'ns3FiltreretOejebliksbillede',
            'ns3Registrering',
            'ns3AttributListe',
            'ns3Egenskab',
            'ns4AdresseTekst',
        ];

        $adresseRolleLabelKeys = [
            'ns2Rolle',
            'ns2Label',
        ];

        $adresseReferenceUuidKeys = [
            'ns2ReferenceID',
            'ns2UUIDIdentifikator',
        ];

        foreach ($adresser as $adresse) {
            if ($this->getValue($adresse, $adresseRolleLabelKeys) === $attribute) {
                $adresseId = $this->getValue($adresse, $adresseReferenceUuidKeys);

                if (null === $adresseId) {
                    continue;
                }

                $data = $this->adresseLaes($adresseId);

                return $this->getValue($data, $adresseTekstKeys, '');
            }
        }

        return '';
    }

    /**
     * Method for building header XML.
     */
    private function buildHeaderXML(string $endpoint, string $action): string
    {
        $token = $this->getSAMLToken();
        
        return $this->xmlBuilder->buildHeaderXML($endpoint, $action, $token);
    }

    /**
     * Computes full service endpoint.
     */
    private function generateServiceEndpoint(string $serviceEndpointPath): string
    {
        return $this->options['service_endpoint_domain'].$serviceEndpointPath;
    }

    /**
     * Gets value from data according to keys.
     */
    private function getValue($data, array $keys, $defaultValue = null)
    {
        // @see https://symfony.com/doc/current/components/property_access.html#reading-from-arrays
        $propertyPath = '[' . implode('][', $keys) . ']';

        if ($this->propertyAccessor->isReadable($data, $propertyPath)) {
            return $this->propertyAccessor->getValue($data, $propertyPath) ?: $defaultValue;
        }

        return $defaultValue;
    }

    private function configureOptions(OptionsResolver $resolver)
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
                        ? 'https://adgangsstyring.eksterntest-stoettesystemerne.dk/runtime/services/kombittrust/14/certificatemixed'
                        : 'https://adgangsstyring.stoettesystemerne.dk/runtime/services/kombittrust/14/certificatemixed';
                },
                'saml_token_expiration_time_offset' => '-15 minutes',
                'service_endpoint_domain' => static function (Options $options) {
                    return $options['test_mode']
                        ? 'https://organisation.eksterntest-stoettesystemerne.dk'
                        : 'https://organisation.stoettesystemerne.dk';
                },
            ])
            ->setInfo('saml_token_expiration_time_offset', 'Offset used when checking if SAML token is expired. By default the SAML token expires 8 hours after being issued.')
            ->setAllowedTypes('certificate_locator', CertificateLocatorInterface::class)
            ->setAllowedTypes('cache', CacheInterface::class)
        ;
    }
}
