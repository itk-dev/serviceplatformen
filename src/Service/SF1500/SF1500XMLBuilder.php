<?php

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
     * Builds XML body for adresse laes.
     */
    public function buildBodyAdresseLaesXML($uuid)
    {
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
    public function buildBodyOrganisationFunktionSoegXML(?string $brugerUuid, ?string $funktionNavn, ?string $organisationUuid)
    {
        $funktionNavnXML = '';
        $brugerXML = '';
        $orgXML = '';

        if ($funktionNavn !== null) {
            $funktionNavnXML = <<<XML
        <FunktionNavn xmlns="urn:oio:sagdok:3.0.0">$funktionNavn</FunktionNavn>
XML;
        }

        if ($brugerUuid !== null) {
            $brugerXML = <<<XML
      <TilknyttedeBrugere xmlns="urn:oio:sagdok:3.0.0">
        <ReferenceID>
          <UUIDIdentifikator xmlns="urn:oio:sagdok:3.0.0">$brugerUuid</UUIDIdentifikator>
        </ReferenceID>
      </TilknyttedeBrugere>
XML;
        }
        if ($organisationUuid !== null) {
            $orgXML = <<<XML
      <TilknyttedeEnheder xmlns="urn:oio:sagdok:3.0.0">
          <ReferenceID>
            <UUIDIdentifikator xmlns="urn:oio:sagdok:3.0.0">$organisationUuid</UUIDIdentifikator>
          </ReferenceID>
      </TilknyttedeEnheder>
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
    public function buildBodyOrganisationEnhedLaesXML(string $string)
    {
        return <<<XML
<s:Body u:Id="_1" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema">
    <LaesInput xmlns="http://stoettesystemerne.dk/organisation/organisationenhed/6/">
        <UUIDIdentifikator xmlns="urn:oio:sagdok:3.0.0">$string</UUIDIdentifikator>
    </LaesInput>
</s:Body>
XML;
    }

    /**
     * Builds XML header.
     */
    public function buildHeaderXML($to, $action, $tokenRaw)
    {

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

    /**
     * Signs request.
     */
    public function buildSignedRequest($requestSimple, $privKey)
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
            $isSTR = ($value == 'SecurityTokenReference');

            $tags = $documentRequest->getElementsByTagName($value);

            $tag = $tags[0];
            $tagId = $this->getDocEleId($tag);

            if ($isSTR) {
                $tag = $documentRequest->getElementsByTagName('Assertion')[0];
            }

            $canonicalXml = utf8_encode($tag->C14N(true, false));

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
