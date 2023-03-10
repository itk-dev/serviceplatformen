<?php

/**
 * This file is part of itk-dev/serviceplatformen.
 *
 * (c) 2020 ITK Development
 *
 * This source file is subject to the MIT license.
 */

namespace ItkDev\Serviceplatformen\Service\SF1500;

/**
 * Helper class for SF1500 Organisation.
 */
class SF1500XMLBuilder
{
    /**
     * Builds XML body for bruger laes.
     */
    public function buildBodyBrugerLaesXML($uuid): string
    {
        $uuid = $this->xmlEncode($uuid);

        return <<<XML
<s:Body u:Id="_1" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema">
    <LaesInput xmlns="http://stoettesystemerne.dk/organisation/bruger/6/">
        <UUIDIdentifikator xmlns="urn:oio:sagdok:3.0.0">$uuid</UUIDIdentifikator>
    </LaesInput>
</s:Body>
XML;
    }

    /**
     * Builds XML body for bruger soeg.
     */
    public function buildBodyBrugerSoegXML(string $name)
    {
        $name = $this->xmlEncode($name);

        return <<<XML
<s:Body u:Id="_1" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema">
    <SoegInput xmlns="http://stoettesystemerne.dk/organisation/bruger/6/">
      <AttributListe>
        <Egenskab>
          <BrugerNavn xmlns="urn:oio:sagdok:3.0.0">$name</BrugerNavn>
        </Egenskab>
      </AttributListe>
      <TilstandListe/>
      <RelationListe/>
    </SoegInput>
</s:Body>
XML;
    }

    /**
     * Builds XML body for bruger list.
     */
    public function buildBodyBrugerListXML(array $uuids)
    {
        $uuids = array_map([$this, 'xmlEncode'], $uuids);

        $uuidsXML = '';

        foreach ($uuids as $uuid) {
            $uuidsXML .= '<UUIDIdentifikator xmlns="urn:oio:sagdok:3.0.0">' . $uuid . '</UUIDIdentifikator>';
        }

        return <<<XML
<s:Body u:Id="_1" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema">
    <ListInput xmlns="http://stoettesystemerne.dk/organisation/bruger/6/">
        $uuidsXML
    </ListInput>
</s:Body>
XML;
    }

    /**
     * Builds XML body for person laes.
     */
    public function buildBodyPersonLaesXML($uuid)
    {
        $uuid = $this->xmlEncode($uuid);

        return <<<XML
<s:Body u:Id="_1" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema">
    <LaesInput xmlns="http://stoettesystemerne.dk/organisation/person/6/">
        <UUIDIdentifikator xmlns="urn:oio:sagdok:3.0.0">$uuid</UUIDIdentifikator>
    </LaesInput>
</s:Body>
XML;
    }

    /**
     * Builds XML body for person soeg.
     */
    public function buildBodyPersonSoegXML(string $name)
    {
        $name = $this->xmlEncode($name);

        return <<<XML
<s:Body u:Id="_1" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema">
    <SoegInput xmlns="http://stoettesystemerne.dk/organisation/person/6/">
      <AttributListe>
        <Egenskab>
          <NavnTekst xmlns="http://stoettesystemerne.dk/organisation/person/6/">$name</NavnTekst>
        </Egenskab>
      </AttributListe>
      <TilstandListe/>
      <RelationListe/>
    </SoegInput>
</s:Body>
XML;
    }

    /**
     * Builds XML body for adresse soeg.
     */
    public function buildBodyAdresseSoegXML(string $name)
    {
        $name = $this->xmlEncode($name);

        return <<<XML
<s:Body u:Id="_1" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema">
    <SoegInput xmlns="http://stoettesystemerne.dk/organisation/adresse/6/">
      <AttributListe>
        <Egenskab>
          <AdresseTekst xmlns="urn:oio:sts:6">$name</AdresseTekst>
        </Egenskab>
      </AttributListe>
      <TilstandListe/>
      <RelationListe/>
    </SoegInput>
</s:Body>
XML;
    }

    /**
     * Builds XML body for adresse laes.
     */
    public function buildBodyAdresseLaesXML($uuid)
    {
        $uuid = $this->xmlEncode($uuid);

        return <<<XML
<s:Body u:Id="_1" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema">
    <LaesInput xmlns="http://stoettesystemerne.dk/organisation/adresse/6/">
        <UUIDIdentifikator xmlns="urn:oio:sagdok:3.0.0">$uuid</UUIDIdentifikator>
    </LaesInput>
</s:Body>
XML;
    }

    /**
     * Builds XML body for organisation funktion laes.
     */
    public function buildBodyOrganisationFunktionLaesXML(string $uuid)
    {
        $uuid = $this->xmlEncode($uuid);

        return <<<XML
<s:Body u:Id="_1" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema">
    <LaesInput xmlns="http://stoettesystemerne.dk/organisation/organisationfunktion/6/">
        <UUIDIdentifikator xmlns="urn:oio:sagdok:3.0.0">$uuid</UUIDIdentifikator>
    </LaesInput>
</s:Body>
XML;
    }

    /**
     * Builds XML body for organisation funktion soeg.
     */
    public function buildBodyOrganisationFunktionSoegXML(?string $brugerUuid, ?string $funktionNavn, ?string $organisationUuid, ?string $funktionsTypeId)
    {
        $funktionNavnXML = '';
        $brugerXML = '';
        $orgXML = '';
        $funktionsTypeXML = '';


        if ($funktionNavn !== null) {
            $funktionNavn = $this->xmlEncode($funktionNavn);

            $funktionNavnXML = <<<XML
        <FunktionNavn xmlns="urn:oio:sagdok:3.0.0">$funktionNavn</FunktionNavn>
XML;
        }

        if ($brugerUuid !== null) {
            $brugerUuid = $this->xmlEncode($brugerUuid);

            $brugerXML = <<<XML
      <TilknyttedeBrugere xmlns="urn:oio:sagdok:3.0.0">
        <ReferenceID>
          <UUIDIdentifikator xmlns="urn:oio:sagdok:3.0.0">$brugerUuid</UUIDIdentifikator>
        </ReferenceID>
      </TilknyttedeBrugere>
XML;
        }

        if ($organisationUuid !== null) {
            $organisationUuid = $this->xmlEncode($organisationUuid);

            $orgXML = <<<XML
      <TilknyttedeEnheder xmlns="urn:oio:sagdok:3.0.0">
          <ReferenceID>
            <UUIDIdentifikator xmlns="urn:oio:sagdok:3.0.0">$organisationUuid</UUIDIdentifikator>
          </ReferenceID>
      </TilknyttedeEnheder>
XML;
        }

        if ($funktionsTypeId !== null) {
            $funktionsTypeId = $this->xmlEncode($funktionsTypeId);

            $funktionsTypeXML = <<<XML
        <Funktionstype xmlns="urn:oio:sagdok:3.0.0">
          <ReferenceID>
            <UUIDIdentifikator xmlns="urn:oio:sagdok:3.0.0">$funktionsTypeId</UUIDIdentifikator>
          </ReferenceID>
      </Funktionstype>
XML;
        }

        return <<<XML
<s:Body u:Id="_1" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema">
    <SoegInput xmlns="http://stoettesystemerne.dk/organisation/organisationfunktion/6/">
      <AttributListe>
        <Egenskab>
          $funktionNavnXML
        </Egenskab>
      </AttributListe>
      <TilstandListe/>
      <RelationListe>
        $funktionsTypeXML
        $brugerXML
        $orgXML
      </RelationListe>
    </SoegInput>
</s:Body>
XML;
    }

    /**
     * Builds XML body for fremsoeg hieraki.
     */
    public function buildBodyFremsoegHierakiXML(string $name)
    {
        $name = $this->xmlEncode($name);

        return <<<XML
<s:Body u:Id="_1" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema">
    <FremsoegObjekthierarkiInput xmlns="http://stoettesystemerne.dk/organisation/organisationsystem/6/">
        <OrganisationEnhedSoegEgenskab>
            <EnhedNavn xmlns="urn:oio:sagdok:3.0.0">$name</EnhedNavn>
        </OrganisationEnhedSoegEgenskab>
    </FremsoegObjekthierarkiInput>
</s:Body>
XML;
    }

    /**
     * Builds XML body for organisation enhed laes.
     */
    public function buildBodyOrganisationEnhedLaesXML(string $orgEnhedId)
    {
        $orgEnhedId = $this->xmlEncode($orgEnhedId);

        return <<<XML
<s:Body u:Id="_1" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema">
    <LaesInput xmlns="http://stoettesystemerne.dk/organisation/organisationenhed/6/">
        <UUIDIdentifikator xmlns="urn:oio:sagdok:3.0.0">$orgEnhedId</UUIDIdentifikator>
    </LaesInput>
</s:Body>
XML;
    }

    /**
     * Builds XML header.
     */
    public function buildHeaderXML($to, $action, $tokenRaw)
    {
        $to = $this->xmlEncode($to);
        $action = $this->xmlEncode($action);

        $timestampXML = $this->buildTimestampHeaderXML($this->generateUuid());
        $actionXML = '<a:Action s:mustUnderstand="1" u:Id="_2">' . $action . '</a:Action>';
        $messageXML = '<a:MessageID u:Id="_3">urn:uuid:' . $this->generateUuid() . '</a:MessageID>';
        $replyXML = '<a:ReplyTo u:Id="_4"><a:Address>http://www.w3.org/2005/08/addressing/anonymous</a:Address></a:ReplyTo>';
        $toXML = '<a:To s:mustUnderstand="1" u:Id="_5">' . $to . '</a:To>';

        $transUuid = $this->generateUuid();

        $requestHeader = <<<XML
<h:RequestHeader xmlns:h="http://kombit.dk/xml/schemas/RequestHeader/1/" xmlns="http://kombit.dk/xml/schemas/RequestHeader/1/" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema">
    <TransactionUUID>$transUuid</TransactionUUID>
</h:RequestHeader>
XML;

        $documentToken = new \DOMDocument();
        $documentToken->loadXML($tokenRaw);
        $tokenUuid = $this->getDocEleId($documentToken->documentElement);

        return <<<XML
<s:Header>
    <sbf:Framework xmlns:ns1="urn:liberty:sb:profile" xmlns:sbf="urn:liberty:sb:2006-08" ns1:profile="urn:liberty:sb:profile:basic" version="2.0"/>
    $actionXML
    $requestHeader
    $messageXML
    $replyXML
    $toXML
    <o:Security s:mustUnderstand="1" xmlns:o="http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-wssecurity-secext-1.0.xsd">
        $timestampXML
        $tokenRaw
        <o:SecurityTokenReference b:TokenType="http://docs.oasis-open.org/wss/oasis-wss-saml-token-profile-1.1#SAMLV2.0" u:Id="_str$tokenUuid" xmlns:b="http://docs.oasis-open.org/wss/oasis-wss-wssecurity-secext-1.1.xsd">
            <o:KeyIdentifier ValueType="http://docs.oasis-open.org/wss/oasis-wss-saml-token-profile-1.1#SAMLID">$tokenUuid</o:KeyIdentifier>
        </o:SecurityTokenReference>
        <Signature xmlns="http://www.w3.org/2000/09/xmldsig#">
            <SignedInfo>
                <CanonicalizationMethod Algorithm="http://www.w3.org/2001/10/xml-exc-c14n#"></CanonicalizationMethod>
                <SignatureMethod Algorithm="http://www.w3.org/2001/04/xmldsig-more#rsa-sha256"></SignatureMethod>
            </SignedInfo>
            <SignatureValue></SignatureValue>
            <KeyInfo>
                <o:SecurityTokenReference b:TokenType="http://docs.oasis-open.org/wss/oasis-wss-saml-token-profile-1.1#SAMLV2.0" xmlns:b="http://docs.oasis-open.org/wss/oasis-wss-wssecurity-secext-1.1.xsd">
                    <o:KeyIdentifier ValueType="http://docs.oasis-open.org/wss/oasis-wss-saml-token-profile-1.1#SAMLID">$tokenUuid</o:KeyIdentifier>
                </o:SecurityTokenReference>
            </KeyInfo>
        </Signature>
    </o:Security>
</s:Header>
XML;
    }

    private const NS_U = 'http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-wssecurity-utility-1.0.xsd';
    private const NS_A = 'http://www.w3.org/2005/08/addressing';
    private const NS_S = 'http://www.w3.org/2003/05/soap-envelope';
    private const NS_H = 'http://kombit.dk/xml/schemas/RequestHeader/1/';
    private const NS_SBF = 'urn:liberty:sb:2006-08';
    private const NS_PROFILE = 'urn:liberty:sb:profile';
    private const NS_O = 'http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-wssecurity-secext-1.0.xsd';
    private const NS_B = 'http://docs.oasis-open.org/wss/oasis-wss-wssecurity-secext-1.1.xsd';
    private const NS_XMLDSIG = 'http://www.w3.org/2000/09/xmldsig#';
    public const NS_ASSERTION = 'urn:oasis:names:tc:SAML:2.0:assertion';

    public function buildSoapHeader(\DOMElement $header, string $to, string $action, string $tokenXml)
    {
        /** @var \DOMDocument $document */
        $document = $header->ownerDocument;
        $createdAt = $this->getTimestamp();
        $expiresAt = $this->getTimestamp(300);

        $frameworkElement = $document->createElementNS(self::NS_SBF, 'sbf:Framework');
        $frameworkElement->setAttribute('version', '2.0');
        $frameworkElement->setAttributeNS(self::NS_PROFILE, 'profile:profile', 'urn:liberty:sb:profile:basic');
        $header->appendChild($frameworkElement);

        $actionElement = $document->createElementNS(self::NS_A, 'a:Action');
        $actionElement->setAttributeNS(self::NS_S, 's:mustUnderstand', 1);
        $actionElement->setAttributeNS(self::NS_U, 'u:Id', '_2');
        $actionElement->nodeValue = $action;
        $header->appendChild($actionElement);

        $requestHeaderElement = $document->createElementNS(self::NS_H, 'h:RequestHeader');
        $transactionUUIDElement = $document->createElementNS(self::NS_H, 'h:TransactionUUID');
        $transactionUUIDElement->nodeValue = $this->generateUuid();
        $requestHeaderElement->appendChild($transactionUUIDElement);
        $header->appendChild($requestHeaderElement);

        $messageElement = $document->createElementNS(self::NS_A, 'a:MessageID');
        $messageElement->setAttributeNS(self::NS_U, 'u:Id', '_3');
        $messageElement->nodeValue = 'urn:uuid:' . $this->generateUuid();
        $header->appendChild($messageElement);

        $replyElement = $document->createElementNS(self::NS_A, 'a:ReplyTo');
        $replyElement->setAttributeNS(self::NS_U, 'u:Id', '_4');
        $addressElement = $document->createElementNS(self::NS_A, 'a:Address');
        $addressElement->nodeValue = 'http://www.w3.org/2005/08/addressing/anonymous';
        $replyElement->appendChild($addressElement);
        $header->appendChild($replyElement);

        $toElement = $document->createElementNS(self::NS_A, 'a:To');
        $toElement->setAttributeNS(self::NS_S, 's:mustUnderstand', 1);
        $toElement->setAttributeNS(self::NS_U, 'u:Id', '_5');
        $toElement->nodeValue = $to;
        $header->appendChild($toElement);

        $securityElement = $document->createElementNS(self::NS_O, 'o:Security');
        $securityElement->setAttributeNS(self::NS_S, 's:mustUnderstand', '1');

        $timestampElement = $document->createElementNS(self::NS_U, 'u:Timestamp');
        $timestampElement->setAttributeNS(self::NS_U, 'Id', 'uuid-'.$this->generateUuid());
        $createdElement = $document->createElementNS(self::NS_U, 'u:Created');
        $createdElement->nodeValue = $createdAt;
        $timestampElement->appendChild($createdElement);
        $expiresElement = $document->createElementNS(self::NS_U, 'u:Expires');
        $expiresElement->nodeValue = $expiresAt;
        $timestampElement->appendChild($expiresElement);
        $securityElement->appendChild($timestampElement);

        $tokenDocument = new \DOMDocument();
        $tokenDocument->loadXML($tokenXml);
        $tokenElement = $document->importNode($tokenDocument->documentElement, true);
        $tokenUuid = $this->getDocEleId($tokenElement);

        // @see https://bugs.php.net/bug.php?id=55294
        $tokenElement = $document->createElementNS(self::NS_ASSERTION, 'assertion:insert-token-here');
        $tokenElement->nodeValue = 'INSERT TOKEN HERE';

        $securityElement->appendChild($tokenElement);

        $securityTokenReferenceElement = $document->createElementNS(self::NS_O, 'o:SecurityTokenReference');
        $securityTokenReferenceElement->setAttributeNS(self::NS_U, 'u:Id', '_str'.$tokenUuid);
        $securityTokenReferenceElement->setAttributeNS(self::NS_B, 'b:TokenType', 'http://docs.oasis-open.org/wss/oasis-wss-saml-token-profile-1.1#SAMLV2.0');
        $keyIdentifierElement = $document->createElementNS(self::NS_O, 'o:KeyIdentifier');
        $keyIdentifierElement->setAttribute('ValueType', 'http://docs.oasis-open.org/wss/oasis-wss-saml-token-profile-1.1#SAMLID');
        $keyIdentifierElement->nodeValue = $tokenUuid;
        $securityTokenReferenceElement->appendChild($keyIdentifierElement);
        $securityElement->appendChild($securityTokenReferenceElement);

        $signatureElement = $document->createElementNS(self::NS_XMLDSIG, 'xmlsdig:Signature');
        $signedInfoElement = $document->createElementNS(self::NS_XMLDSIG, 'xmlsdig:SignedInfo');
        $canonicalizationMethodElement = $document->createElementNS(self::NS_XMLDSIG, 'xmlsdig:CanonicalizationMethod');
        $canonicalizationMethodElement->setAttribute('Algorithm', 'http://www.w3.org/2001/10/xml-exc-c14n#');
        $signedInfoElement->appendChild($canonicalizationMethodElement);
        $signatureMethodElement = $document->createElementNS(self::NS_XMLDSIG, 'xmlsdig:SignatureMethod');
        $signatureMethodElement->setAttribute('Algorithm', 'http://www.w3.org/2001/04/xmldsig-more#rsa-sha256');
        $signedInfoElement->appendChild($signatureMethodElement);
        $signatureElement->appendChild($signedInfoElement);

        $signatureValueElement = $document->createElementNS(self::NS_XMLDSIG, 'xmlsdig:SignatureValue');
        $signatureElement->appendChild($signatureValueElement);
        $securityElement->appendChild($signatureElement);

        $keyInfoElement = $document->createElementNS(self::NS_XMLDSIG, 'xmlsdig:KeyInfo');
        $securityTokenReferenceElement = $document->createElementNS(self::NS_O, 'o:SecurityTokenReference');
        $securityTokenReferenceElement->setAttributeNS(self::NS_B, 'b:TokenType', 'http://docs.oasis-open.org/wss/oasis-wss-saml-token-profile-1.1#SAMLV2.0');
        $keyIdentifierElement = $document->createElementNS(self::NS_O, 'o:KeyIdentifier');
        $keyIdentifierElement->setAttribute('ValueType', 'http://docs.oasis-open.org/wss/oasis-wss-saml-token-profile-1.1#SAMLID');
        $keyIdentifierElement->nodeValue = $tokenUuid;
        $securityTokenReferenceElement->appendChild($keyIdentifierElement);
        $keyInfoElement->appendChild($securityTokenReferenceElement);
        $signatureElement->appendChild($keyInfoElement);

        $securityElement->appendChild($signatureElement);

        $header->appendChild($securityElement);
    }

    /**
     * Signs request.
     */
    public function buildSignedRequest(string $requestSimple, string $privKey)
    {
        $documentRequest = new \DOMDocument('1.0', 'utf-8');
        $documentRequest->preserveWhiteSpace = false;
        $documentRequest->formatOutput = false;
        $documentRequest->loadXML($requestSimple);

        $signatureElement = $documentRequest->getElementsByTagName('Signature')[1];
        $signedInfoElement = $signatureElement->getElementsByTagName('SignedInfo')[0];

        $referenceIds = [
            'Body',
            'Action',
            'MessageID',
            'ReplyTo',
            'To',
            'Timestamp',
            'SecurityTokenReference',
        ];

        foreach ($referenceIds as &$value) {
            $isSTR = ($value === 'SecurityTokenReference');

            $tags = $documentRequest->getElementsByTagName($value);

            $tag = $tags[0];
            $tagId = $this->getDocEleId($tag);

            if ($isSTR) {
                $tag = $documentRequest->getElementsByTagName('Assertion')[0];
            }

            $canonicalXml = mb_convert_encoding($tag->C14N(true, false), 'UTF-8');

            $digestValue = base64_encode(openssl_digest($canonicalXml, 'sha256', true));

            $reference = $signedInfoElement->appendChild($documentRequest->createElementNS('http://www.w3.org/2000/09/xmldsig#', 'Reference'));
            $reference->setAttribute('URI', "#{$tagId}");
            $transforms = $reference->appendChild($documentRequest->createElementNS('http://www.w3.org/2000/09/xmldsig#', 'Transforms'));
            $transform = $transforms->appendChild($documentRequest->createElementNS('http://www.w3.org/2000/09/xmldsig#', 'Transform'));

            if ($isSTR) {
                $transform->setAttribute('Algorithm', 'http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-soap-message-security-1.0#STR-Transform');
                $transformationParameter = $transform->appendChild($documentRequest->createElementNS('http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-wssecurity-secext-1.0.xsd', 'TransformationParameters'));
                $canonicalizationMethod = $transformationParameter->appendChild($documentRequest->createELementNS('http://www.w3.org/2000/09/xmldsig#', 'CanonicalizationMethod'));
                $canonicalizationMethod->setAttribute('Algorithm', 'http://www.w3.org/2001/10/xml-exc-c14n#');
            } else {
                $transform->setAttribute('Algorithm', 'http://www.w3.org/2001/10/xml-exc-c14n#');
            }

            $method = $reference->appendChild($documentRequest->createElementNS('http://www.w3.org/2000/09/xmldsig#', 'DigestMethod'));
            $method->setAttribute('Algorithm', 'http://www.w3.org/2001/04/xmlenc#sha256');
            $reference->appendChild($documentRequest->createElementNS('http://www.w3.org/2000/09/xmldsig#', 'DigestValue', $digestValue));
        }

        $signedInfoElementCanonical = $signedInfoElement->C14N(true, false);

        // OPENSSL_ALGO_SHA256 OR 'RSA-SHA256' OR 'sha256WithRSAEncryption'.
        openssl_sign($signedInfoElementCanonical, $signatureValue, $privKey, 'sha256WithRSAEncryption');
        $signatureValue = base64_encode($signatureValue);

        // Insert signaturevalue.
        $signatureElement->getElementsByTagName('SignatureValue')[0]->nodeValue = $signatureValue;

        return $documentRequest->saveXML($documentRequest->documentElement);
    }

    /**
     * Extract "Id" attribute from xml data.
     */
    public function getDocEleId($docEle)
    {
        for ($i = 0; $i < $docEle->attributes->length; ++$i) {
            if (strpos($docEle->attributes->item($i)->name, 'Id') !== false || strpos($docEle->attributes->item($i)->name, 'ID') !== false) {
                return $docEle->attributes->item($i)->value;
            }
        }
        return null;
    }

    /**
     * Computes timestamp.
     */
    public function getTimestamp($offset = 0)
    {
        return gmdate("Y-m-d\TH:i:s\Z", time() + $offset);
    }

    /**
     * Builds XML timestamp header.
     */
    public function buildTimestampHeaderXML($timestampID = "_0")
    {
        $created = $this->getTimestamp();
        $expires = $this->getTimestamp(300);
        return <<<XML
<u:Timestamp u:Id="uuid-$timestampID">
    <u:Created>$created</u:Created>
    <u:Expires>$expires</u:Expires>
</u:Timestamp>
XML;
    }

    /**
     * XML encodes value.
     */
    private function xmlEncode(string $value): string
    {
        return htmlspecialchars($value, ENT_QUOTES| ENT_XML1);
    }

    /**
     * Generates uuid.
     */
    public function generateUuid()
    {
        return sprintf(
            '%04x%04x-%04x-%04x-%04x-%04x%04x%04x',
            // 32 bits for "time_low"
            mt_rand(0, 0xffff),
            mt_rand(0, 0xffff),
            // 16 bits for "time_mid"
            mt_rand(0, 0xffff),
            // 16 bits for "time_hi_and_version",
            // four most significant bits holds version number 4
            mt_rand(0, 0x0fff) | 0x4000,
            // 16 bits, 8 bits for "clk_seq_hi_res",
            // 8 bits for "clk_seq_low",
            // two most significant bits holds zero and one for variant DCE1.1
            mt_rand(0, 0x3fff) | 0x8000,
            // 48 bits for "node"
            mt_rand(0, 0xffff),
            mt_rand(0, 0xffff),
            mt_rand(0, 0xffff)
        );
    }
}
