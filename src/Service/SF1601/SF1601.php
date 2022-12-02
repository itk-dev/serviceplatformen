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
use DOMXPath;
use ItkDev\Serviceplatformen\Service\AbstractRESTService;
use ItkDev\Serviceplatformen\Service\Exception\ServiceException;
use ItkDev\Serviceplatformen\Service\SF1601\Exception\InvalidMemoException;
use Symfony\Component\OptionsResolver\Options;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Contracts\HttpClient\ResponseInterface;

class SF1601 extends AbstractRESTService
{
    public const TYPE_AUTOMATISK_VALG = 'Automatisk Valg';
    public const TYPE_FYSISK_POST = 'Fysisk Post';
    public const TYPE_DIGITAL_POST = 'Digital Post';
    public const TYPE_NEM_SMS = 'NemSMS';

    // @see https://www.digitaliser.dk/resource/6103074/artefact/VejledningtilActionsogfristeriMeMo.pdf?artefact=true&PID=6104122
    public const ACTION_AFTALE = 'AFTALE';
    public const ACTION_BETALING = 'BETALING';
    public const ACTION_SELVBETJENING = 'SELVBETJENING';
    public const ACTION_INFORMATION = 'INFORMATION';
    public const ACTION_UNDERSKRIV = 'UNDERSKRIV';
    public const ACTION_BEKRAEFT = 'BEKRAEFT';
    public const ACTION_FORBEREDELSE = 'FORBEREDELSE';
    public const ACTION_TILMELDING = 'TILMELDING';

    public const ACTIONS = [
        self::ACTION_AFTALE,
        self::ACTION_BETALING,
        self::ACTION_SELVBETJENING,
        self::ACTION_INFORMATION,
        self::ACTION_UNDERSKRIV,
        self::ACTION_BEKRAEFT,
        self::ACTION_FORBEREDELSE,
        self::ACTION_TILMELDING,
    ];

    private ?DOMElement $lastKombiMemoMessage = null;

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
        ]);
    }

    public function kombiPostAfsend(string $transactionId, string $type, Message $message, DateTimeInterface $transactionTid = null): ResponseInterface
    {
        $document = $this->buildKombiRequestDocument($type, $message);
        $xpath = new DOMXPath($document);
        $xpath->registerNamespace('memo', 'https://DigitalPost.dk/MeMo-1');
        foreach ($xpath->query('//memo:Message') as $element) {
            $this->lastKombiMemoMessage = $element;
            break;
        }

        $response = $this->call('POST', $this->getOption('svc_endpoint'), [
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

    /**
     * @return DOMElement|null
     */
    public function getLastKombiMeMoMessage(): ?DOMElement
    {
        return $this->lastKombiMemoMessage;
    }

    private function buildKombiRequestDocument(string $type, Message $message): DOMDocument
    {
        if (!in_array($type, [self::TYPE_AUTOMATISK_VALG, self::TYPE_DIGITAL_POST, self::TYPE_FYSISK_POST, self::TYPE_NEM_SMS])) {
            throw new ServiceException(sprintf('Invalid type: %s', $type));
        }

        // Build kombi document.
        $document = new DOMDocument();
        $document->loadXML('<kombi_request><KombiValgKode/></kombi_request>');
        // Set KombiValgKode.
        $document->documentElement->firstChild->appendChild(new DOMText($type));

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

        return $document;
    }
}
