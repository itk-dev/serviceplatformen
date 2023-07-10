<?php

/**
 * This file is part of itk-dev/serviceplatformen.
 *
 * (c) 2020 ITK Development
 *
 * This source file is subject to the MIT license.
 */

namespace ItkDev\Serviceplatformen\Service\SF1601;

use DateTimeInterface;
use DigitalPost\MeMo\Message;
use DOMDocument;
use DOMElement;
use DOMText;
use ItkDev\Serviceplatformen\Service\AbstractRESTService;
use ItkDev\Serviceplatformen\Service\Exception\ServiceException;
use ItkDev\Serviceplatformen\Service\SF1601\Exception\InvalidMemoException;
use Oio\Fjernprint\ForsendelseI;
use Symfony\Component\OptionsResolver\Options;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Contracts\HttpClient\ResponseInterface;
use XSLTProcessor;

class SF1601 extends AbstractRESTService
{
    public const TYPE_AUTOMATISK_VALG = 'Automatisk Valg';
    public const TYPE_DIGITAL_POST = 'Digital Post';
    public const TYPE_FYSISK_POST = 'Fysisk Post';
    public const TYPE_NEM_SMS = 'NemSMS';

    public const TYPES = [
        self::TYPE_AUTOMATISK_VALG,
        self::TYPE_DIGITAL_POST,
        self::TYPE_FYSISK_POST,
        self::TYPE_NEM_SMS,
    ];

    // Where the hell are these documented?!
    public const MESSAGE_TYPE_DIGITAL_POST = 'DIGITALPOST';
    public const MESSAGE_TYPE_NEM_SMS = 'NEMSMS';

    public const MESSAGE_TYPES = [
        self::MESSAGE_TYPE_DIGITAL_POST,
        self::MESSAGE_TYPE_NEM_SMS,
    ];

    // @see https://www.digitaliser.dk/resource/6103074/artefact/VejledningtilActionsogfristeriMeMo.pdf?artefact=true&PID=6104122
    public const ACTION_AFTALE = 'AFTALE';
    public const ACTION_BEKRAEFT = 'BEKRAEFT';
    public const ACTION_BETALING = 'BETALING';
    public const ACTION_FORBEREDELSE = 'FORBEREDELSE';
    public const ACTION_INFORMATION = 'INFORMATION';
    public const ACTION_SELVBETJENING = 'SELVBETJENING';
    public const ACTION_TILMELDING = 'TILMELDING';
    public const ACTION_UNDERSKRIV = 'UNDERSKRIV';

    public const ACTIONS = [
        self::ACTION_AFTALE,
        self::ACTION_BEKRAEFT,
        self::ACTION_BETALING,
        self::ACTION_FORBEREDELSE,
        self::ACTION_INFORMATION,
        self::ACTION_SELVBETJENING,
        self::ACTION_TILMELDING,
        self::ACTION_UNDERSKRIV,
    ];

    private ?DOMElement $lastKombiMemoMessage = null;
    private ?DOMElement $lastKombiForsendelse = null;

    protected function configureOptions(OptionsResolver $resolver)
    {
        parent::configureOptions($resolver);
        $resolver->setDefaults([
            'svc_entity_id' => 'http://entityid.kombit.dk/service/kombipostafsend/1',
            'svc_endpoint' => static function (Options $options) {
                return $options['test_mode']
                    ? 'https://exttest.serviceplatformen.dk/service/KombiPostAfsend_1/kombi'
                    : 'https://prod.serviceplatformen.dk/service/KombiPostAfsend_1/kombi';
            },

            // @see https://digitaliseringskataloget.dk/integration/sf1601
            'post_forespoerg_svc_entity_id' => 'http://entityid.kombit.dk/service/postforespoerg/1',
            'post_forespoerg_svc_endpoint' => static function (Options $options) {
                return $options['test_mode']
                    ? 'https://exttest.serviceplatformen.dk/service/PostForespoerg_1'
                    : 'https://prod.serviceplatformen.dk/service/PostForespoerg_1';
            },
        ]);
    }

    public function postForespoerg(string $transactionId, string $type, string $identifier, DateTimeInterface $transactionTid = null): array
    {
        $entityId = $this->getOption('post_forespoerg_svc_entity_id');
        $url = $this->getOption('post_forespoerg_svc_endpoint') . '/' . $type;
        $response = $this->call($entityId, 'GET', $url, [
            'query' => [
                // This almost matches the documented keys …
                (8 === strlen($identifier) ? 'cvrNumber' : 'cprNumber') => $identifier,
            ],
            'transactionId' => $transactionId,
            'transactionTid' => $transactionTid,
        ]);

        return $response->toArray();
    }

    public function kombiPostAfsend(string $transactionId, string $type, ?Message $message, ?ForsendelseI $forsendelse = null, DateTimeInterface $transactionTid = null): ResponseInterface
    {
        $document = $this->buildKombiRequestDocument($type, $message, $forsendelse);

        // Serviceplatformen doesn't understand XML namespaces!
        $xsldoc = new DOMDocument();
        $xsldoc->load(__DIR__.'/resources/namespaces.xslt');
        $xsl = new XSLTProcessor();
        $xsl->importStyleSheet($xsldoc);
        $document = $xsl->transformToDoc($document);

        $this->lastKombiMemoMessage = null;
        foreach ($document->getElementsByTagNameNS('https://DigitalPost.dk/MeMo-1', 'Message') as $element) {
            $this->lastKombiMemoMessage = $element;
            break;
        }

        $this->lastKombiForsendelse = null;
        foreach ($document->getElementsByTagNameNS('urn:oio:fjernprint:1.0.0', 'ForsendelseISamling') as $element) {
            $this->lastKombiForsendelse = $element;
            break;
        }

        $entityId = $this->getOption('svc_entity_id');
        $url = $this->getOption('svc_endpoint');
        $response = $this->call($entityId, 'POST', $url, [
                'headers' => [
                    'content-type' => 'application/xml',
                    'accept' => 'application/xml',
                ],
                'body' => $document->saveXML(),
                'transactionId' => $transactionId,
                'transactionTid' => $transactionTid,
            ]);

        return $response;
    }

    public function getLastKombiMeMoMessage(): ?DOMElement
    {
        return $this->lastKombiMemoMessage;
    }

    public function getLastKombiForsendelse(): ?DOMElement
    {
        return $this->lastKombiForsendelse;
    }

    private function buildKombiRequestDocument(string $type, ?Message $message, ?ForsendelseI $forsendelse): DOMDocument
    {
        if (!in_array($type, [self::TYPE_AUTOMATISK_VALG, self::TYPE_DIGITAL_POST, self::TYPE_FYSISK_POST, self::TYPE_NEM_SMS])) {
            throw new ServiceException(sprintf('Invalid type: %s', $type));
        }

        // Build kombi document.
        $document = new DOMDocument();
        $document->loadXML('<kombi_request><KombiValgKode/></kombi_request>');
        // Set KombiValgKode.
        $document->documentElement->firstChild->appendChild(new DOMText($type));

        if (null !== $message) {
            // Set default values on some required attributes.
            if (empty($message->getMemoVersion())) {
                $message->setMemoVersion(1.1);
            }
            if (empty($message->getMemoSchVersion())) {
                $message->setMemoSchVersion('1.1.0');
            }

            // Validate message
            $header = $message->getMessageHeader();
            // We ignore some PHPStan errors due to generated code not having correct return type annotations.
            // @phpstan-ignore-next-line
            if (empty($header)) {
                throw new InvalidMemoException('MeMo message must have a header');
            }
            if (empty($header->getLabel())) {
                throw new InvalidMemoException('MeMo message header must have a label');
            }
            // @phpstan-ignore-next-line
            if (empty($header->getSender()) || empty($header->getSender()->getLabel())) {
                throw new InvalidMemoException('MeMo message header must have a sender with a label');
            }

            // Serialize message and import and append it to kombi_request element.
            $messageDocument = new DOMDocument();
            $messageDocument->loadXML((new Serializer())->serialize($message));

            $document->documentElement->appendChild($document->importNode($messageDocument->documentElement, true));
        }

        if (null !== $forsendelse) {
            $forsendelseSamling = $document->createElementNS('urn:oio:fjernprint:1.0.0', 'ForsendelseISamling');

            $forsendelseDocument = new DOMDocument();
            $forsendelseDocument->loadXML((new Serializer())->serialize($forsendelse));
            $forsendelseSamling->appendChild($document->importNode($forsendelseDocument->documentElement, true));

            $document->documentElement->appendChild($forsendelseSamling);
        }

        return $document;
    }
}
