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
use GuzzleHttp\Client;
use Http\Adapter\Guzzle7\Client as GuzzleAdapter;
use Http\Factory\Guzzle\RequestFactory;
use ItkDev\AzureKeyVault\Authorisation\VaultToken;
use ItkDev\AzureKeyVault\KeyVault\VaultSecret;
use ItkDev\Serviceplatformen\Certificate\AzureKeyVaultCertificateLocator;
use ItkDev\Serviceplatformen\Certificate\CertificateLocatorInterface;
use ItkDev\Serviceplatformen\Certificate\FilesystemCertificateLocator;
use ItkDev\Serviceplatformen\Service\SF1601\Serializer;
use ItkDev\Serviceplatformen\Service\SF1601\SF1601;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Exception\InvalidOptionException;
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
            new InputOption('certificate', null, InputOption::VALUE_REQUIRED, 'Path to certificate or a Azure Key Vault spec'),
            new InputOption('certificate-passphrase', null, InputOption::VALUE_REQUIRED, 'certificate passphrase', ''),
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

        $message = $this->buildMessage($options);

        $certificateLocator = $this->getCertificateLocator($options['certificate'], $options['certificate-passphrase']);

        $service = new SF1601([
            'authority_cvr' => $options['sender-id'],
            'certificate_locator' => $certificateLocator,
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

    private function getCertificateLocator(string $spec, string $passphrase): CertificateLocatorInterface
    {
        if (false !== strpos($spec, '=')) {
            // Check if spec is a colon separated
            parse_str($spec, $options);

            $httpClient = new GuzzleAdapter(new Client());
            $requestFactory = new RequestFactory();

            $vaultToken = new VaultToken($httpClient, $requestFactory);

            $token = $vaultToken->getToken(
                $options['tenant-id'] ?? $options['tenant_id'] ?? null,
                $options['client-id'] ?? $options['client_id'] ?? null,
                $options['client-secret'] ?? $options['client_secret'] ?? null
            );

            $vault = new VaultSecret(
                $httpClient,
                $requestFactory,
                $options['name'] ?? null,
                $token->getAccessToken()
            );

            return new AzureKeyVaultCertificateLocator(
                $vault,
                $options['secret'] ?? null,
                $options['version'] ?? null
            );
        } else {
            $certificatepath = realpath($spec) ?: null;
            if (null === $certificatepath) {
                throw new InvalidOptionException(sprintf('Invalid path %s', $spec));
            }
            return new FilesystemCertificateLocator($certificatepath, $passphrase);
        }
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
                'certificate',
            ])
            ->setDefaults([
                'production' => false,
                'file' => null,
                'memo' => null,
                'certificate-passphrase' => '',
            ])
            ->setNormalizer('production', static fn (Options $options, $value) => (bool)$value)
            ->setNormalizer('file', static function (Options $options, $value) {
                if (null === $value xor null === $options['memo']) {
                    return $value;
                }

                throw new InvalidOptionsException('One and only one of options "file" and "memo" need to be set');
            })
        ;
    }

    private function buildMessage(array $options): Message
    {
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

        return $message;
    }
}
