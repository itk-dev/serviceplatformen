<?php

namespace ItkDev\Serviceplatformen\Service\SF1500;

use ItkDev\Serviceplatformen\Certificate\CertificateLocatorInterface;
use ItkDev\Serviceplatformen\Service\SF1514\SF1514;
use ItkDev\Serviceplatformen\Service\SoapClient;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\PropertyAccess\PropertyAccessor;

class SF1500
{
    private PropertyAccessor $propertyAccessor;
    private SF1500XMLBuilder $xmlBuilder;
    private SF1514 $sf1514;
    private array $options;

    public function __construct(PropertyAccessor $propertyAccessor, array $options)
    {
        $resolver = new OptionsResolver();
        $this->configureOptions($resolver);
        $this->options = $resolver->resolve($options);
        $this->propertyAccessor = $propertyAccessor;
        $this->setUpXMLBuilder();
        $this->setUpSF1514();
    }

    /**
     * Fetches person name from SF1500.
     */
    public function getPersonName(string $brugerId): string
    {
        $token = $this->fetchSAMLToken();

        if (null === $token) {
            return '';
        }

        $data = $this->brugerLaes($brugerId, $token);

        $personIdKeys = [
            'ns3LaesOutput',
            'ns3FiltreretOejebliksbillede',
            'ns3Registrering',
            'ns3RelationListe',
            'ns2TilknyttedePersoner',
            'ns2ReferenceID',
            'ns2UUIDIdentifikator',
        ];

        $personId = $this->getValue($data, $personIdKeys, '');

        if (null === $personId) {
            return '';
        }

        $data = $this->personLaes($personId, $token);

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
    public function getOrganisationFunktioner(string $brugerId)
    {
        $token = $this->fetchSAMLToken();

        if (null === $token) {
            return '';
        }

        $data = $this->organisationFunktionSoeg($brugerId, null, $token);

        $idListeKeys = [
            'ns3SoegOutput',
            'ns2IdListe',
            'ns2UUIDIdentifikator',
        ];

        $id = $this->getValue($data, $idListeKeys);

        return $id;
    }

    /**
     * Fetches organisation enhed level 1 name from SF1500.
     */
    public function getOrganisationEnhed(string $funktionsId, bool $returnOrganisationID = false): ?string
    {
        $token = $this->fetchSAMLToken();

        $data = $this->organisationFunktionLaes($funktionsId, $token);

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

        if ($returnOrganisationID) {
            return $orgEnhedId ?: '';
        }

        if (empty($orgEnhedId)) {
            return '';
        }

        $data = $this->organisationEnhedLaes($orgEnhedId, $token);

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
    public function getFunktionsNavn(string $funktionsId)
    {
        $token = $this->fetchSAMLToken();

        $data = $this->organisationFunktionLaes($funktionsId, $token);

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
    public function getOrganisationEnhedNiveauTo(string $funktionsId)
    {
        $orgEnhedId = $this->getOrganisationEnhed($funktionsId, true);

        if (empty($orgEnhedId)) {
            return '';
        }

        $token = $this->fetchSAMLToken();

        if (null === $token) {
            return '';
        }

        // Level 1.
        $data = $this->organisationEnhedLaes($orgEnhedId, $token);

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
            return '';
        }

        $data = $this->organisationEnhedLaes($orgEnhedId, $token);

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
    public function getPersonAZIdent(string $brugerId)
    {
        $token = $this->fetchSAMLToken();

        if (null === $token) {
            return '';
        }

        $data = $this->brugerLaes($brugerId, $token);

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
    public function getOrganisationAddress(string $funktionsId)
    {
        $orgEnhedId = $this->getOrganisationEnhed($funktionsId, true);

        if (empty($orgEnhedId)) {
            return '';
        }

        $token = $this->fetchSAMLToken();

        if (null === $token) {
            return '';
        }

        $data = $this->organisationEnhedLaes($orgEnhedId, $token);

        $adresseKeys = [
            'ns3LaesOutput',
            'ns3FiltreretOejebliksbillede',
            'ns3Registrering',
            'ns3RelationListe',
            'ns2Adresser',
        ];

        $adresser = $this->getValue($data, $adresseKeys);

        if (!is_array($adresser)) {
            return '';
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

                $data = $this->adresseLaes($adresseId, $token);

                return $this->getValue($data, $adresseTekstKeys, '');
            }
        }

        return '';
    }

    /**
     * Fetches person magistrat from SF1500.
     */
    public function getPersonMagistrat(string $funktionsId)
    {
        $orgEnhedId = $this->getOrganisationEnhed($funktionsId, true);

        if (empty($orgEnhedId)) {
            return '';
        }

        $token = $this->fetchSAMLToken();

        if (null === $token) {
            return '';
        }

        $data = $this->organisationEnhedLaes($orgEnhedId, $token);

        $enhedsNavnKeys = [
            'ns3LaesOutput',
            'ns3FiltreretOejebliksbillede',
            'ns3Registrering',
            'ns3AttributListe',
            'ns3Egenskab',
            'ns2EnhedNavn',
        ];

        $enhedsNavn = $this->getValue($data, $enhedsNavnKeys);

        // Follow organisation until parent does not exist, updating $enhedsNavn.
        $overordnetKeys = [
            'ns3LaesOutput',
            'ns3FiltreretOejebliksbillede',
            'ns3Registrering',
            'ns3RelationListe',
            'ns2Overordnet',
            'ns2ReferenceID',
            'ns2UUIDIdentifikator',
        ];

        while ($orgEnhedId = $this->getValue($data, $overordnetKeys)) {
            $enhedsNavn = $this->getValue($data, $enhedsNavnKeys);
            $data = $this->organisationEnhedLaes($orgEnhedId, $token);
        }

        return $enhedsNavn;
    }

    /**
     * Fetches SAML token from SF1514.
     */
    private function fetchSAMLToken(): ?string
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
    private function responseXMLToArray(string $response)
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
    private function brugerLaes($brugerId, $token)
    {
        $body = $this->xmlBuilder->buildBodyBrugerLaesXML($brugerId);

        $endpoint = 'https://organisation.eksterntest-stoettesystemerne.dk/organisation/bruger/6/';
        $action = 'http://kombit.dk/sts/organisation/bruger/laes';

        $header = $this->xmlBuilder->buildHeaderXML($endpoint, $action, $token);

        $request = $this->createXMLRequest($header, $body);
        $request = $this->xmlBuilder->buildSignedRequest($request, $this->getPrivateKey());

        $response = SoapClient::doSOAP($endpoint, $request, $action);

        return $this->responseXMLToArray($response);
    }

    /**
     * Performs adresse laes action.
     */
    private function adresseLaes($adresseID, string $token)
    {
        $endpoint = 'https://organisation.eksterntest-stoettesystemerne.dk/organisation/adresse/6/';
        $action = 'http://kombit.dk/sts/organisation/adresse/laes';

        $header = $this->xmlBuilder->buildHeaderXML($endpoint, $action, $token);
        $body = $this->xmlBuilder->buildBodyAdresseLaesXML($adresseID);
        $request = $this->createXMLRequest($header, $body);

        $requestSigned = $this->xmlBuilder->buildSignedRequest($request, $this->getPrivateKey());
        $response = SoapClient::doSOAP($endpoint, $requestSigned, $action);

        return $this->responseXMLToArray($response);
    }

    /**
     * Performs organisation enhed laes action.
     */
    private function organisationEnhedLaes($orgEnhedId, string $token)
    {
        $endpoint = 'https://organisation.eksterntest-stoettesystemerne.dk/organisation/organisationenhed/6/';
        $action = 'http://kombit.dk/sts/organisation/organisationenhed/laes';

        $body = $this->xmlBuilder->buildBodyOrganisationEnhedLaesXML($orgEnhedId);
        $header = $this->xmlBuilder->buildHeaderXML($endpoint, $action, $token);

        $request = $this->createXMLRequest($header, $body);

        $requestSigned = $this->xmlBuilder->buildSignedRequest($request, $this->getPrivateKey());
        $response = SoapClient::doSOAP($endpoint, $requestSigned, $action);

        return $this->responseXMLToArray($response);
    }

    /**
     * Performs organisation funktion laes action.
     */
    private function organisationFunktionLaes($orgFunktionId, string $token)
    {
        $endpoint = 'https://organisation.eksterntest-stoettesystemerne.dk/organisation/organisationfunktion/6/';
        $action = 'http://kombit.dk/sts/organisation/organisationfunktion/laes';

        $body = $this->xmlBuilder->buildBodyOrganisationFunktionLaesXML($orgFunktionId);
        $header = $this->xmlBuilder->buildHeaderXML($endpoint, $action, $token);

        $request = $this->createXMLRequest($header, $body);

        $requestSigned = $this->xmlBuilder->buildSignedRequest($request, $this->getPrivateKey());
        $response = SoapClient::doSOAP($endpoint, $requestSigned, $action);

        return $this->responseXMLToArray($response);
    }

    /**
     * Performs organisation funktion soeg action.
     */
    private function organisationFunktionSoeg($orgBrugerId, $funktionsNavn, string $token)
    {
        $endpoint = 'https://organisation.eksterntest-stoettesystemerne.dk/organisation/organisationfunktion/6/';
        $action = 'http://kombit.dk/sts/organisation/organisationfunktion/soeg';

        $body = $this->xmlBuilder->buildBodyOrganisationFunktionSoegXML($orgBrugerId, $funktionsNavn, null);
        $header = $this->xmlBuilder->buildHeaderXML($endpoint, $action, $token);

        $request = $this->createXMLRequest($header, $body);

        $requestSigned = $this->xmlBuilder->buildSignedRequest($request, $this->getPrivateKey());
        $response = SoapClient::doSOAP($endpoint, $requestSigned, $action);

        return $this->responseXMLToArray($response);
    }

    /**
     * Performs person laes action.
     */
    private function personLaes($personId, string $token)
    {
        $endpoint = 'https://organisation.eksterntest-stoettesystemerne.dk/organisation/person/6/';
        $action = 'http://kombit.dk/sts/organisation/person/laes';

        $header = $this->xmlBuilder->buildHeaderXML($endpoint, $action, $token);
        $body = $this->xmlBuilder->buildBodyPersonLaesXML($personId);

        $request = $this->createXMLRequest($header, $body);

        $requestSigned = $this->xmlBuilder->buildSignedRequest($request, $this->getPrivateKey());
        $response = SoapClient::doSOAP($endpoint, $requestSigned, $action);

        return $this->responseXMLToArray($response);
    }

    /**
     * Fetches bruger adresse attribut.
     */
    private function getBrugerAdresseAttribut(string $attribute, string $brugerId)
    {
        $token = $this->fetchSAMLToken();

        if (null === $token) {
            return '';
        }


        $data = $this->brugerLaes($brugerId, $token);

        $adresseKeys = [
            'ns3LaesOutput',
            'ns3FiltreretOejebliksbillede',
            'ns3Registrering',
            'ns3RelationListe',
            'ns2Adresser',
        ];

        $adresser = $this->getValue($data, $adresseKeys);

        if (!is_array($adresser)) {
            return '';
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

                $data = $this->adresseLaes($adresseId, $token);

                return $this->getValue($data, $adresseTekstKeys, '');
            }
        }

        return '';
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

    /**
     * Sets up SF1500 XML Builder.
     */
    private function setUpXMLBuilder()
    {
        $this->xmlBuilder = new SF1500XMLBuilder();
    }

    private function setUpSF1514()
    {
        $this->sf1514 = new SF1514($this->options);
    }

    private function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setRequired([
            'certificate_locator',
            'authority_cvr',
            'sts_applies_to',
        ]);
    }
}
