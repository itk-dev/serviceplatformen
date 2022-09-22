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
use DOMText;
use ItkDev\Serviceplatformen\Service\AbstractRESTService;
use ItkDev\Serviceplatformen\Service\Exception\ServiceException;
use Symfony\Component\OptionsResolver\Options;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SF1601 extends AbstractRESTService
{
    public const TYPE_AUTOMATISK_VALG = 'Automatisk Valg';
    public const TYPE_FYSISK_POST = 'Fysisk Post';
    public const TYPE_DIGITAL_POST = 'Digital Post';
    public const TYPE_NEM_SMS = 'NemSMS';

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

    public function kombiPostAfsend(string $transactionId, string $type, Message $message, DateTimeInterface $transactionTid = null)
    {
        $document = $this->buildKombiRequest($type, $message);

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

    private function buildKombiRequest(string $type, Message $message)
    {
        if (!in_array($type, [self::TYPE_AUTOMATISK_VALG, self::TYPE_DIGITAL_POST, self::TYPE_FYSISK_POST, self::TYPE_NEM_SMS])) {
            throw new ServiceException(sprintf('Invalid type: %s', $type));
        }

        // Build kombi document.
        $document = new DOMDocument();
        $document->loadXML('<kombi_request><KombiValgKode/></kombi_request>');
        // Set KombiValgKode.
        $document->documentElement->firstChild->appendChild(new DOMText($type));

        // Serialize message and import and append it to kombi_request element.
        $messageDocument = new DOMDocument();
        $messageDocument->loadXML((new Serializer())->serialize($message));

        $document->documentElement->appendChild($document->importNode($messageDocument->documentElement, true));

        return $document;
    }
}
