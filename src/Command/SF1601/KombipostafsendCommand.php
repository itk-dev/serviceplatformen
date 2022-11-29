<?php

/**
 * This file is part of itk-dev/serviceplatformen.
 *
 * (c) 2020 ITK Development
 *
 * This source file is subject to the MIT license.
 */

namespace ItkDev\Serviceplatformen\Command\SF1601;

use DateTime;
use DigitalPost\MeMo\File;
use DigitalPost\MeMo\MainDocument;
use DigitalPost\MeMo\Message;
use DigitalPost\MeMo\MessageBody;
use DigitalPost\MeMo\MessageHeader;
use DigitalPost\MeMo\Recipient;
use DigitalPost\MeMo\Sender;
use DOMDocument;
use ItkDev\Serviceplatformen\Service\SF1601\Serializer;
use ItkDev\Serviceplatformen\Service\SF1601\SF1601;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputDefinition;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;
use Symfony\Component\Mime\MimeTypes;
use Symfony\Component\OptionsResolver\Exception\InvalidOptionsException;
use Symfony\Component\OptionsResolver\Options;
use Symfony\Component\OptionsResolver\OptionsResolver;

class KombipostafsendCommand extends Command
{
    protected static $defaultName = 'serviceplatformen:sf1601:kombipostafsend';

    private array $inputOptions = [];

    protected function configure()
    {
        $inputOptions = [
            new InputOption('production', null, InputOption::VALUE_NONE, 'production mode'),
            new InputOption('header-label', null, InputOption::VALUE_REQUIRED, 'header-label'),
            new InputOption('recipient-id-type', null, InputOption::VALUE_REQUIRED, 'recipient-id-type', 'CPR'),
            new InputOption('recipient-id', null, InputOption::VALUE_REQUIRED, 'recipient-id'),
            new InputOption('sender-id-type', null, InputOption::VALUE_REQUIRED, 'sender-id-type', 'CVR'),
            new InputOption('sender-id', null, InputOption::VALUE_REQUIRED, 'sender-id'),
            new InputOption('sender-label', null, InputOption::VALUE_REQUIRED, 'sender-label'),
            new InputOption('client-cert-pub-file', null, InputOption::VALUE_REQUIRED, 'client-cert-pub file'),
            new InputOption('client-cert-key-file', null, InputOption::VALUE_REQUIRED, 'client-cert-key file'),
            new InputOption('file', null, InputOption::VALUE_REQUIRED, 'file to send'),
            new InputOption('memo', null, InputOption::VALUE_REQUIRED, 'memo document to send'),
        ];
        $this->setDefinition(new InputDefinition($inputOptions));

        // Index by option name.
        $this->inputOptions = array_combine(array_map(fn (InputOption $option) => $option->getName(), $inputOptions), $inputOptions);
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $io = new SymfonyStyle($input, $output);

        $resolver = new OptionsResolver();
        $this->configureOptions($resolver);
        $options = $resolver->resolve(
            array_filter(array_filter($input->getOptions()), fn ($name) => isset($this->inputOptions[$name]), ARRAY_FILTER_USE_KEY)
        );

        $list = [];
        foreach ($options as $name => $value) {
            $list[] = [$name => $value];
        }
        $io->definitionList(...$list);

        $messageUUID = Serializer::createUuid();
        $messageID = Serializer::createUuid();

        $message = (new Message())
            ->setMessageHeader(
                (new MessageHeader())
                    ->setMessageType('Digital post')
                    ->setMessageType('DIGITALPOST')
                    ->setMessageUUID($messageUUID)
                    ->setMessageID($messageID)
                    ->setLabel($options['header-label'])
                    ->setMandatory(false)
                    ->setLegalNotification(false)
                    ->setSender(
                        (new Sender())
                        ->setIdType($options['sender-id-type'])
                        ->setSenderID($options['sender-id'])
                        ->setLabel($options['sender-label'])
                    )
                    ->setRecipient(
                        (new Recipient())
                        ->setIdType($options['recipient-id-type'])
                        ->setRecipientID($options['recipient-id'])
                    )
            )
        ;

        if (isset($options['file'])) {
            $filename = $options['file'];
            $mimeType = (new MimeTypes())->guessMimeType($filename);

            $message
                ->setMessageBody(
                    (new MessageBody())
                        ->setCreatedDateTime(new DateTime())
                        ->setMainDocument(
                            (new MainDocument())
                                ->setFile([
                                    (new File())
                                        ->setEncodingFormat($mimeType)
                                        ->setLanguage('da')
                                        ->setFilename(basename($filename))
                                        ->setContent(file_get_contents($filename))
                                ])
                        )
                )
            ;
        }

        $service = new SF1601([
            'authority_cvr' => $options['sender-id'],

            'client_cert_pub' => $options['client-cert-pub-file'],
            'client_cert_key' => $options['client-cert-key-file'],

            'test_mode' => !$options['production'],
        ]);

        $transactionId = Serializer::createUuid();
        $response = $service->kombiPostAfsend($transactionId, SF1601::TYPE_DIGITAL_POST, $message);

        $meMoMessage = $service->getLastKombiMeMoMessage();
        $io->writeln($meMoMessage->ownerDocument->saveXML($meMoMessage));

        $dom = new DOMDocument();
        $dom->formatOutput = true;
        $dom->loadXML($response->getContent());

        $headers = [];
        $length = max(...array_map(static fn (string $name) => strlen($name), array_keys($response->getHeaders())));
        foreach ($response->getHeaders() as $name => $values) {
            $headers[] = sprintf('%s: %s', str_pad($name, $length), implode(PHP_EOL, $values));
        }
        $io->definitionList(
            ['transactionId' => $transactionId],
            ['status code' => $response->getStatusCode()],
            ['headers' => implode(PHP_EOL, $headers)],
            ['content' => $dom->saveXML()],
        );

        return static::SUCCESS;
    }

    private function configureOptions(OptionsResolver $resolver)
    {
        $resolver
            ->setRequired([
                'header-label',
                'recipient-id-type',
                'recipient-id',
                'sender-id-type',
                'sender-id',
                'sender-label',
                'client-cert-pub-file',
                'client-cert-key-file',
            ])
            ->setDefaults([
                'production' => false,
                'file' => null,
                'memo' => null,
            ])
            ->setNormalizer('production', static fn (Options $options, $value) => (bool)$value)
            ->setNormalizer('file', static function (Options $options, $value) {
                if (null === $value xor null === $options['memo']) {
                    return $value;
                }

                throw new InvalidOptionsException('One and only one of options "file" or "memo" need to be set');
            })
        ;
    }
}
