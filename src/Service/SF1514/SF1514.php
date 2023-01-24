<?php

namespace ItkDev\Serviceplatformen\Service\SF1514;

use DOMXPath;
use ItkDev\Serviceplatformen\Certificate\CertificateLocatorInterface;
use ItkDev\Serviceplatformen\Service\Exception\ServiceException;
use ItkDev\Serviceplatformen\Service\SoapClient;
use Symfony\Component\Cache\Adapter\FilesystemAdapter;
use Symfony\Component\OptionsResolver\Options;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Contracts\Cache\CacheInterface;
use Symfony\Contracts\Cache\ItemInterface;

class SF1514
{
    private array $options;

    const TOKENTYPE_SAML20 = 'http://docs.oasis-open.org/wss/oasis-wss-saml-token-profile-1.1#SAMLV2.0';
    const TOKENTYPE_STATUS = 'http://docs.oasis-open.org/ws-sx/ws-trust/200512/RSTR/Status';

    const KEYTYPE_BEARER = 'http://docs.oasis-open.org/ws-sx/ws-trust/200512/Bearer';
    const KEYTYPE_PUBLIC = 'http://docs.oasis-open.org/ws-sx/ws-trust/200512/PublicKey';

    public function __construct(array $options = [])
    {
        $resolver = new OptionsResolver();
        $this->configureOptions($resolver);

        $this->options = $resolver->resolve($options);
    }

    protected function getOption(string $name)
    {
        if (!array_key_exists($name, $this->options)) {
            throw new ServiceException(sprintf('No such option: %s', $name));
        }

        return $this->options[$name];
    }

    public function isTestMode(): bool
    {
        return (bool)$this->options['test_mode'];
    }


    public function getSAMLToken(): ?string
    {
        $cache = $this->getCache();

        $cacheKey = $this->getCacheKey(__METHOD__, [
            'AnvenderKontekst' => ['Cvr' => $this->options['authority_cvr']],
            'AppliesTo' => ['EndpointReference' => ['Address' => $this->options['sts_applies_to']]],
        ]);

        $expirationTimeOffset = $this->options['saml_token_expiration_time_offset'];

        $token = $cache->get($cacheKey, function (ItemInterface $item) use ($expirationTimeOffset) {
            $token = $this->fetchSAMLToken();

            // Set cache expiration time a litte before actual token expiration time.
            $expirationTime = $this->getSAMLTokenExpirationTime($token)
                ->modify($expirationTimeOffset);
            $item->expiresAt($expirationTime);

            return $token;
        });

        // Check SAML token expiration time (with offset) to make sure that it is still valid.
        if (null !== $token && $this->getSAMLTokenExpirationTime($token)->modify($expirationTimeOffset) <= new \DateTimeImmutable()) {
            // Remove expired token from cache and get a new token.
            $cache->delete($cacheKey);
            return $this->getSAMLToken();
        }

        return $token;
    }

    private function getCache()
    {
        return $this->options['cache'];
    }

    private function getCacheKey(string $key, array $payload): string
    {
        return preg_replace(
            '#[{}()/\\\\@:]+#',
            '_',
            $key . '|' . sha1(json_encode($payload+$this->options))
        );
    }

    private function getSAMLTokenExpirationTime(string $token): \DateTimeImmutable
    {
        $sxe = new \SimpleXMLElement($token);

        $sxe->registerXPathNamespace('assertion', 'urn:oasis:names:tc:SAML:2.0:assertion');
        $nodes = $sxe->xpath('//assertion:Conditions/@NotOnOrAfter');

        if (empty($nodes)) {
            throw new \RuntimeException('Cannot get SAML token expiration time');
        }
        $notOnOrAfter = reset($nodes);

        return new \DateTimeImmutable((string)$notOnOrAfter);
    }

    public function fetchSAMLToken(): ?string
    {
        $endpointSecurityTokenService = $this->getOption('saml_token_svc');
        $appliesTo = $this->getOption('sts_applies_to');
        $cvr = $this->getOption('authority_cvr');

        // Public certificate on a single line.
        $content = $this->getCertificate();
        $stuff = preg_split('/^-+(BEGIN|END) CERTIFICATE-+$/m', $content);
        $useKey = str_replace("\n", '', $stuff[1]);

        $xml = $this->buildSAMLTokenRequestXML($useKey, $this->getPrivateKey(), $cvr, $appliesTo);

        $responseSecurityTokenService = SoapClient::doSOAP($endpointSecurityTokenService, $xml);

        // Parse the RSTR that is returned.
        [$domSecurityTokenService, $xpath, $token] = $this->parseRequestSecurityTokenResponse($responseSecurityTokenService);

        [$domSecurityTokenService, $token] = $this->getDecrypted($domSecurityTokenService, $xpath, $token, $this->getPrivateKey());

        return $token != null ? $domSecurityTokenService->saveXML($token) : null;
    }

    private function getCertificate(): string
    {
        return $this->getCertificatePart('cert');
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
     * Builds SAML token request XML.
     */
    public function buildSAMLTokenRequestXML($cert, $privKey, $cvr, $appliesTo)
    {
        $dom = new \DOMDocument();
        $dom->load(__DIR__ . '/SAMLTokenSoapTemplate.xml');
        $xpath = new DOMXPath($dom);

        $xpath->registerNamespace('wsu', 'http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-wssecurity-utility-1.0.xsd');
        $xpath->registerNamespace('ds', 'http://www.w3.org/2000/09/xmldsig#');
        $xpath->registerNamespace('wst', 'http://docs.oasis-open.org/ws-sx/ws-trust/200512');
        $xpath->registerNamespace('wsp', 'http://schemas.xmlsoap.org/ws/2004/09/policy');
        $xpath->registerNamespace('wsa', 'http://www.w3.org/2005/08/addressing');
        $xpath->registerNamespace('soap', 'http://www.w3.org/2003/05/soap-envelope');
        $xpath->registerNamespace('wsauth', 'http://docs.oasis-open.org/wsfed/authorization/200706');
        $xpath->registerNamespace('wsse', 'http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-wssecurity-secext-1.0.xsd');

        // Signature.
        $signatureId = 'SIG-' . $this->generateUuid();
        $signature = $this->getElement($xpath, '//ds:Signature');
        $signature->setAttribute('Id', $signatureId);

        // Action.
        $actionId = '_' . $this->generateUuid();
        $actionElement = $this->getElement($xpath, '//wsa:Action');
        $actionElement->setAttribute('wsu:Id', $actionId);

        $this->handleReference($xpath, $actionElement, $actionId, 'action_id');

        // MessageID.
        $messageId = '_' . $this->generateUuid();
        $messageIdElement = $this->getElement($xpath, '//wsa:MessageID');
        $messageIdElement->setAttribute('wsu:Id', $messageId);
        $messageIdElement->nodeValue = 'urn:uuid:' . $this->generateUuid();

        $this->handleReference($xpath, $messageIdElement, $messageId, 'message_id_id');

        // To.
        $toId = '_' . $this->generateUuid();
        $toElement = $this->getElement($xpath, '//wsa:To');
        $toElement->nodeValue = $appliesTo;
        $toElement->setAttribute('wsu:Id', $toId);

        $this->handleReference($xpath, $toElement, $toId, 'to_id');

        // ReplyTo.
        $replyToId = '_' . $this->generateUuid();
        $replyToElement = $this->getElement($xpath, '//wsa:ReplyTo');
        $replyToElement->setAttribute('wsu:Id', $replyToId);

        $this->handleReference($xpath, $replyToElement, $replyToId, 'reply_id');

        // Timestamp.
        $timestampId = 'TS-' . $this->generateUuid();
        $timestampElement = $this->getElement($xpath, '//wsu:Timestamp');
        $timestampElement->setAttribute('wsu:Id', $timestampId);

        $this->getElement($xpath, 'wsu:Created', $timestampElement)->nodeValue = $this->getTimestamp();
        $this->getElement($xpath, 'wsu:Expires', $timestampElement)->nodeValue = $this->getTimestamp(300);

        $this->handleReference($xpath, $timestampElement, $timestampId, 'timestamp_id');

        // BinarySecurityToken.
        $certificateKeyContent = str_replace(["\r", "\n"], '', $cert);

        $binarySecurityTokenId = 'X509-' . $this->generateUuid();
        $binarySecurityTokenElement = $this->getElement($xpath, '//wsse:BinarySecurityToken');
        $binarySecurityTokenElement->setAttribute('wsu:Id', $binarySecurityTokenId);
        $binarySecurityTokenElement->nodeValue = $certificateKeyContent;

        $this->handleReference($xpath, $binarySecurityTokenElement, $binarySecurityTokenId, 'security_token_id');

        // Body.
        $bodyId = '_' . $this->generateUuid();
        $bodyElement = $this->getElement($xpath, '//soap:Body');
        $bodyElement->setAttribute('wsu:Id', $bodyId);

        $this->getElement($xpath, '//wsauth:Value')->nodeValue = $cvr;
        $this->getElement($xpath, 'wsse:BinarySecurityToken', $this->getElement($xpath, '//wst:UseKey'))->nodeValue = $certificateKeyContent;

        $this->handleReference($xpath, $bodyElement, $bodyId, 'body_id');

        // KeyInfo.
        $keyInfoId = 'KI-' . $this->generateUuid();
        $keyInfoElement = $this->getElement($xpath, '//ds:KeyInfo');
        $keyInfoElement->setAttribute('Id', $keyInfoId);

        // Set final ids.
        $this->getElement($xpath, '//wsse:Reference')->setAttribute('URI', '#' . $binarySecurityTokenId);
        $this->getElement($xpath, '//wsse:SecurityTokenReference')->setAttribute('wsu:Id', 'STR-' . $this->generateUuid());

        // Sign the request.
        $signedInfoElement = $this->getElement($xpath, '//ds:SignedInfo');

        $signedIntoElementCanonical = $signedInfoElement->C14N(true, false);

        openssl_sign($signedIntoElementCanonical, $signatureValue, $privKey, 'sha256WithRSAEncryption');

        $signatureValue = base64_encode($signatureValue);
        $this->getElement($xpath, '//ds:SignatureValue')->nodeValue = $signatureValue;

        return $dom->saveXML();
    }

    /**
     * Handles reference by signing element.
     */
    private function handleReference(DOMXPath $xpath, \DOMElement $element, string $elementId, $baseId)
    {
        $referenceElement = $this->getElement($xpath, "//ds:Reference[contains(@URI, '$baseId')]");
        $referenceElement->setAttribute('URI', '#' . $elementId);

        $digestValue = base64_encode(openssl_digest($element->C14N(true, false), 'SHA256', true));
        $this->getElement($xpath, 'ds:DigestValue', $referenceElement)->nodeValue = $digestValue;
    }

    /**
     * Queries for element.
     */
    private function getElement(DOMXPath $xpath, string $expression, \DOMElement $context = null): \DOMElement
    {
        return $xpath->query($expression, $context)[0];
    }

    /**
     * Computes timestamp.
     */
    public function getTimestamp($offset = 0)
    {
        return gmdate("Y-m-d\TH:i:s\Z", time() + $offset);
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

    /**
     * Parses Request Security Token Response (RSTR).
     */
    public function parseRequestSecurityTokenResponse($result)
    {
        $dom = new \DOMDocument();
        $dom->loadXML($result);
        $doc = $dom->documentElement;
        $xpath = new DOMXpath($dom);
        $xpath->registerNamespace('s', 'http://www.w3.org/2003/05/soap-envelope');
        $xpath->registerNamespace('wst', 'http://docs.oasis-open.org/ws-sx/ws-trust/200512');
        $xpath->registerNamespace('wsse', 'http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-wssecurity-secext-1.0.xsd');
        $token = $xpath->query('/s:Envelope/s:Body/wst:RequestSecurityTokenResponseCollection/wst:RequestSecurityTokenResponse/wst:RequestedSecurityToken', $doc);
        $proofKey = $xpath->query('/s:Envelope/s:Body/wst:RequestSecurityTokenResponseCollection/wst:RequestSecurityTokenResponse/wst:RequestedProofToken/wst:BinarySecret', $doc);
        if ($proofKey->length > 0) {
            $proofKey = base64_decode($proofKey->item(0)->textContent);
        } else {
            $proofKey = null;
        }
        return [$dom, $xpath, $token->item(0), $proofKey];
    }

    /**
     * Decrypts Request Security Token Response (RSTR).
     */
    public function getDecrypted(\DOMDocument $dom, $xpath, $token, $pkey, $type = self::TOKENTYPE_SAML20)
    {

        $doc = $dom->documentElement;
        $xpath->registerNamespace('xenc', 'http://www.w3.org/2001/04/xmlenc#');
        $xpath->registerNamespace('ds', 'http://www.w3.org/2000/09/xmldsig#');
        $xpath->registerNamespace('saml', 'urn:oasis:names:tc:SAML:2.0:assertion');
        $xpathPrefix = '/s:Envelope/s:Body/wst:RequestSecurityTokenResponseCollection/wst:RequestSecurityTokenResponse/wst:RequestedSecurityToken';

        $xpathSuffix = '/saml:Assertion';
        $data = $xpath->query($xpathPrefix . $xpathSuffix, $doc);

        if ($data->length > 0) {
            $token = $data->item(0);
        }

        return [$dom, $token];
    }

    protected function configureOptions(OptionsResolver $resolver)
    {
        $resolver
            ->setRequired([
                'certificate_locator',
                'authority_cvr',
                'sts_applies_to',
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
            ])
            ->setInfo('saml_token_expiration_time_offset', 'Offset used when checking if SAML token is expired. By default the SAML token expires 8 hours after being issued.')
            ->setAllowedTypes('certificate_locator', CertificateLocatorInterface::class)
            ->setAllowedTypes('cache', CacheInterface::class);
    }
}
