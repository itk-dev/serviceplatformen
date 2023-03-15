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

    /**
     * Build SOAP header.
     *
     * @internal
     */
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
        $actionElement->setAttributeNS(self::NS_S, 's:mustUnderstand', '1');
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
        $toElement->setAttributeNS(self::NS_S, 's:mustUnderstand', '1');
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
        $tokenUuid = $this->getElementId($tokenElement);

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
     *
     * @internal
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
            $tagId = $this->getElementId($tag);

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
     *
     * @internal
     */
    public function getElementId(\DOMElement $element)
    {
        /** @var \DOMAttr $attribute */
        foreach ($element->attributes as $attribute) {
            if (false !== strpos($attribute->name, 'Id') || false !== strpos($attribute->name, 'ID')) {
                return $attribute->value;
            }
        }

        return null;
    }

    /**
     * Computes timestamp.
     *
     * @internal
     */
    public function getTimestamp($offset = 0)
    {
        return gmdate("Y-m-d\TH:i:s\Z", time() + $offset);
    }

    /**
     * Generates uuid.
     *
     * @internal
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
