<?php

/**
 * This file is part of itk-dev/serviceplatformen.
 *
 * (c) 2020 ITK Development
 *
 * This source file is subject to the MIT license.
 */

namespace ItkDev\Serviceplatformen\Command\SF1601;

use DataGovDk\Model\Core\Address;
use DateTime;
use DigitalPost\MeMo\Action;
use DigitalPost\MeMo\AdditionalDocument;
use DigitalPost\MeMo\AttentionData;
use DigitalPost\MeMo\AttentionPerson;
use DigitalPost\MeMo\EntryPoint;
use DigitalPost\MeMo\File;
use DigitalPost\MeMo\MainDocument;
use DigitalPost\MeMo\Message;
use DigitalPost\MeMo\MessageBody;
use DigitalPost\MeMo\MessageHeader;
use DigitalPost\MeMo\Recipient;
use DigitalPost\MeMo\Reservation;
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
use Psr\Log\LoggerAwareInterface;
use Psr\Log\LoggerAwareTrait;
use Psr\Log\LoggerTrait;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Exception\InvalidOptionException;
use Symfony\Component\Console\Input\InputDefinition;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Logger\ConsoleLogger;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;
use Symfony\Component\Mime\MimeTypes;
use Symfony\Component\OptionsResolver\Exception\ExceptionInterface;
use Symfony\Component\OptionsResolver\Exception\InvalidOptionsException;
use Symfony\Component\OptionsResolver\Options;
use Symfony\Component\OptionsResolver\OptionsResolver;

class KombiPostAfsendCommand extends Command implements LoggerAwareInterface
{
    use LoggerAwareTrait;
    use LoggerTrait;

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
            new InputOption('certificate', null, InputOption::VALUE_REQUIRED, 'Path to certificate or a query string with Azure Key Vault information (see help for details)'),
            new InputOption('certificate-passphrase', null, InputOption::VALUE_REQUIRED, 'certificate passphrase', ''),
            new InputOption('file', null, InputOption::VALUE_REQUIRED, 'file to send'),
            new InputOption('memo', null, InputOption::VALUE_REQUIRED, 'memo document to send'),
            new InputOption('attachment', null, InputOption::VALUE_REQUIRED|InputOption::VALUE_IS_ARRAY, 'attachment'),
            new InputOption('action', null, InputOption::VALUE_REQUIRED|InputOption::VALUE_IS_ARRAY, 'action (see help for details)'),
        ];
        $this->setDefinition(new InputDefinition($inputOptions));

        $this->setDescription('Helper script for testing “Næste generation Digital Post”.');

        $help = <<<HELP
Certificates

The certificate option can be a file path to a PKCS #12 certificate or a url query string with options for getting the certificate from an Azure Key Vault, e.g. (newlines added for readability and proper url encoding skipped)

  tenant_id=f1d3b517-acac-4902-ae36-aaa32ed814dd
  &client_id=7d711706-4325-47a6-a8c4-b373615c2b75
  &client_secret=6e8551bf-2bb0-46bc-b449-647720120495
  &name=digital-post
  &secret=test
  &version=bbcbd812-0d7c-420b-9b93-7318e3769578

Certificate options

%certificate_options%


Actions

An action is specified as a url query string with option names and values, e.g. (newlines added for readability and proper url encoding skipped)

  action=INFORMATION
  &label=Læs mere om ITK
  &entrypoint=https://itk.aarhus.dk/
  &endDateTime=+2 days

Action options

%action_options%

See https://www.digitaliser.dk/resource/5248921/ > Vejledning til Actions og frister i MeMo.pdf for (some) details on actions.

HELP;

        $this->setHelp(str_replace(
            [
                '%action_options%',
                '%certificate_options%',
            ],
            [
                $this->getOptionsDetails($this->getActionOptionsResolver(), '  '),
                $this->getOptionsDetails($this->getCertificateOptionsResolver(), '  '),
            ],
            $help
        ));

        // Index by option name.
        $this->inputOptions = array_combine(array_map(fn (InputOption $option) => $option->getName(), $inputOptions), $inputOptions);
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $this->setLogger(new ConsoleLogger($output));

        $io = new SymfonyStyle($input, $output);

        $resolver = new OptionsResolver();
        $this->configureOptions($resolver);
        $options = $resolver->resolve(
            array_filter(array_filter($input->getOptions()), fn ($name) => isset($this->inputOptions[$name]), ARRAY_FILTER_USE_KEY)
        );

        $list = [];
        foreach ($options as $name => $value) {
            $list[] = [$name => is_scalar($value) ? $value : json_encode($value)];
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

        $dom = Serializer::loadXML($response->getContent());
        $dom->formatOutput = true;

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

    private function buildAction(string $spec): Action
    {
        parse_str($spec, $options);
        $resolver = $this->getActionOptionsResolver();
        try {
            $options = $resolver->resolve($options);
        } catch (ExceptionInterface $exception) {
            throw new InvalidOptionException(sprintf(
                'Invalid action %s: %s',
                json_encode($spec),
                $exception->getMessage()
            ));
        }

        $this->debug(var_export(['action options' => $options], true));

        $action = (new Action())
            ->setActionCode($options['action'])
            ->setLabel($options['label']);
        if (SF1601::ACTION_AFTALE === $options['action']) {
            $reservation = (new Reservation())
                ->setStartDateTime(new DateTime('+2 days'))
                ->setEndDateTime(new DateTime('+2 days 1 hour'))
                ->setLocation('Meeting room 1')
                ->setAbstract('Abstract')
                ->setDescription('Description')
                ->setOrganizerName('Organizer')
                ->setOrganizerMail('organizer@example.com')
                ->setReservationUUID(Serializer::createUuid());
            $action->setReservation($reservation);
        } elseif ($options['entrypoint']) {
            $action->setEntryPoint(
                (new EntryPoint())
                    ->setUrl($options['entrypoint'])
            );
        }

        if ($options['endDateTime']) {
            $action->setEndDateTime(new \DateTime($options['endDateTime']));
        }

        $this->debug(var_export(['action' => $action], true));

        return $action;
    }

    private function getCertificateLocator(string $spec, string $passphrase): CertificateLocatorInterface
    {
        if (false !== strpos($spec, '=')) {
            parse_str($spec, $options);
            $resolver = $this->getCertificateOptionsResolver();
            $options = $resolver->resolve($options);

            $httpClient = new GuzzleAdapter(new Client());
            $requestFactory = new RequestFactory();

            $vaultToken = new VaultToken($httpClient, $requestFactory);

            $token = $vaultToken->getToken(
                $options['tenant-id'],
                $options['client-id'],
                $options['client-secret'],
            );

            $vault = new VaultSecret(
                $httpClient,
                $requestFactory,
                $options['name'],
                $token->getAccessToken()
            );

            return new AzureKeyVaultCertificateLocator(
                $vault,
                $options['secret'],
                $options['version'],
                $passphrase
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
                'attachment' => null,
                'action' => null,
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

        $message = new Message();

        $sender = (new Sender())
            ->setIdType($options['sender-id-type'])
            ->setSenderID($options['sender-id'])
            ->setLabel($options['sender-label']);

        $recipient = (new Recipient())
            ->setIdType($options['recipient-id-type'])
            ->setRecipientID($options['recipient-id']);

        $recipient->setLabel('Anders And');
        $address = (new Address())
            ->setAddressLabel('Paradisæblevej')
            ->setHouseNumber('13')
            ->setFloor('st.')
            ->setDoor('mf.')
            ->setZipCode('1234')
            ->setCity('Andeby')
            ->setCountry('DA')
        ;
        $attentionData = (new AttentionData())
            ->setAttentionPerson(
                (new AttentionPerson())
                ->setLabel($recipient->getLabel())
                ->setPersonID($options['recipient-id'])
            )
            ->setAddress($address);

        $recipient->setAttentionData($attentionData);

        $messageHeader = (new MessageHeader())
                    ->setMessageType(SF1601::MESSAGE_TYPE_DIGITAL_POST)
                    ->setMessageUUID($messageUUID)
                    ->setMessageID($messageID)
                    ->setLabel($options['header-label'])
                    ->setMandatory(false)
                    ->setLegalNotification(false)
                    ->setSender($sender)
                    ->setRecipient($recipient);

        $message->setMessageHeader($messageHeader);

        $body = (new MessageBody())
            ->setCreatedDateTime(new DateTime());

        if (isset($options['file'])) {
            $mimeTypes = new MimeTypes();

            $filename = $options['file'];
            $mainDocument = (new MainDocument())
                ->setFile([
                    (new File())
                        ->setEncodingFormat($mimeTypes->guessMimeType($filename))
                        ->setLanguage('da')
                        ->setFilename(basename($filename))
                        ->setContent(file_get_contents($filename))
                ]);

            if ($options['action']) {
                foreach ($options['action'] as $spec) {
                    $action = $this->buildAction($spec);
                    if (null !== $action) {
                        $mainDocument->addToAction($action);
                    }
                }
            }

            $body->setMainDocument($mainDocument);

            if (!empty($options['attachment'])) {
                foreach ($options['attachment'] as $index => $filename) {
                    $additionalDocument = (new AdditionalDocument())
                        ->setLabel(sprintf('Attachment %d', $index+1))
                        ->setFile([
                            (new File())
                                ->setEncodingFormat($mimeTypes->guessMimeType($filename))
                                ->setLanguage('da')
                                ->setFilename(basename($filename))
                                ->setContent(file_get_contents($filename))
                        ]);
                    $body->addToAdditionalDocument($additionalDocument);
                }
            }
        } elseif (isset($options['memo'])) {
        }

        $message->setMessageBody($body);

        return $message;
    }

    public function log($level, \Stringable|string $message, array $context = []): void
    {
        $this->logger->log($level, $message, $context);
    }

    private function getActionOptionsResolver(): OptionsResolver
    {
        $resolver = new OptionsResolver();
        $resolver
            ->setRequired([
                'action',
                'label',
            ])
            ->setDefaults([
                'endDateTime' => null,
                'entrypoint' => null,
            ])
            ->setInfo('action', sprintf('The action name (one of %s)', implode(', ', SF1601::ACTIONS)))
            ->setInfo('label', 'The action label')
            ->setInfo('endDateTime', 'The end time e.g. "2022-12-02" or "14 days"')
            ->setInfo('entrypoint', 'The entry point (an URL)')
            ->setAllowedValues('action', static function ($value) {
                return in_array($value, SF1601::ACTIONS, true);
            })
            ->setNormalizer('entrypoint', static function (Options $options, $value) {
                if (null === $value && SF1601::ACTION_AFTALE !== $options['action']) {
                    throw new InvalidOptionsException(sprintf(
                        'Action entrypoint is required for all actions but %s',
                        SF1601::ACTION_AFTALE
                    ));
                }

                return $value;
            });

        return $resolver;
    }

    private function getCertificateOptionsResolver(): OptionsResolver
    {
        $resolver = new OptionsResolver();
        $resolver
            ->setRequired([
                'tenant-id',
                'client-id',
                'client-secret',
                'name',
                'secret',
                'version',
            ])
            ->setInfo('tenant-id', 'The tenant id')
            ->setInfo('client-id', 'The client id')
            ->setInfo('client-secret', 'The client secret')
            ->setInfo('name', 'The certificate name')
            ->setInfo('secret', 'The certificate secret')
            ->setInfo('version', 'The certificate version')
        ;

        return $resolver;
    }

    private function getOptionsDetails(OptionsResolver $resolver, string $indent = '')
    {
        $lines = [];
        $options = $resolver->getDefinedOptions();

        $maxOptionLength = max(...array_map('strlen', $options));
        foreach ($options as $option) {
            $info = $resolver->getInfo($option);
            $lines[] = $info ? sprintf('%s  %s', str_pad($option, $maxOptionLength), $info) : $option;
        }

        return implode(PHP_EOL, array_map(static function ($line) use ($indent) {
            return $indent.$line;
        }, $lines));
    }
}
