<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\Command\SF2900;

use ItkDev\Serviceplatformen\Service\Exception\MissingArgumentException;
use ItkDev\Serviceplatformen\Service\Exception\SoapException;
use ItkDev\Serviceplatformen\Service\SF1601\Serializer;
use ItkDev\Serviceplatformen\Service\SF2900\SF2900;
use ItkDev\Serviceplatformen\SF2900\EnumType\AktoerTypeType;
use ItkDev\Serviceplatformen\SF2900\EnumType\DokumenttypeType;
use ItkDev\Serviceplatformen\SF2900\EnumType\FremdriftType;
use ItkDev\Serviceplatformen\SF2900\EnumType\JournalPostRolleType;
use ItkDev\Serviceplatformen\SF2900\EnumType\LivscyklusKodeType;
use ItkDev\Serviceplatformen\SF2900\EnumType\ObjektTypeType;
use ItkDev\Serviceplatformen\SF2900\EnumType\RetningType;
use ItkDev\Serviceplatformen\SF2900\EnumType\VariantRolleType;
use ItkDev\Serviceplatformen\SF2900\StructType\AttributterListeType;
use ItkDev\Serviceplatformen\SF2900\StructType\AttributterType;
use ItkDev\Serviceplatformen\SF2900\StructType\DelAttributterType;
use ItkDev\Serviceplatformen\SF2900\StructType\DistributionDokumentType;
use ItkDev\Serviceplatformen\SF2900\StructType\DistributionJournalPostType;
use ItkDev\Serviceplatformen\SF2900\StructType\DokumentRegistreringType;
use ItkDev\Serviceplatformen\SF2900\StructType\JournalNotatEgenskaberType;
use ItkDev\Serviceplatformen\SF2900\StructType\JournalPostRegistreringType;
use ItkDev\Serviceplatformen\SF2900\StructType\JournalPostRelationsListeType;
use ItkDev\Serviceplatformen\SF2900\StructType\JournalPostType;
use ItkDev\Serviceplatformen\SF2900\StructType\RelationsListe;
use ItkDev\Serviceplatformen\SF2900\StructType\TilstandListeType;
use ItkDev\Serviceplatformen\SF2900\StructType\TilstandType;
use ItkDev\Serviceplatformen\SF2900\StructType\UUID_URN;
use ItkDev\Serviceplatformen\SF2900\StructType\VariantAttributterType;
use ItkDev\Serviceplatformen\SF2900\StructType\VariantListeType;
use ItkDev\Serviceplatformen\SF2900\StructType\VariantType;
use ItkDev\Serviceplatformen\SF2900\StructType\VirkningType;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Exception\InvalidArgumentException;
use Symfony\Component\Console\Exception\InvalidOptionException;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Uid\Uuid;

#[AsCommand(name: 'serviceplatformen:sf2900:fordelingsobjekt-afsend', description: 'Helper script for testing “FordelingsobjektAfsend”.')]
final class FordelingsobjektAfsendCommand extends AbstractCommand
{
    protected function buildHelp(): string
    {
        return implode(PHP_EOL, [
            <<<HELP
Send a fordelingsobjekt

HELP,
            parent::buildHelp(),
        ]);
    }

    protected function getDefinitionItems(): array
    {
        return array_merge(
            parent::getDefinitionItems(),
            [
                new InputOption('type', null, InputOption::VALUE_REQUIRED, 'type', ObjektTypeType::VALUE_JOURNALPOST),
                new InputOption('file', null, InputOption::VALUE_REQUIRED, 'File to send if type is "DOKUMENT"'),
                new InputOption('routing-modtager-aktoer', null, InputOption::VALUE_REQUIRED, 'routing-modtager-aktoer'),
                new InputOption('registrering-it-system', null, InputOption::VALUE_REQUIRED, 'registrering-it-system'),
            ]
        );
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);

        $options = $this->resolveOptions(
            array_filter(
                $input->getOptions(),
                fn (string $name) => isset($this->baseOptions[$name]) || isset($this->commandOptions[$name]),
                ARRAY_FILTER_USE_KEY
            )
        );

        if (null === $options['routing-kle']) {
            throw new InvalidOptionException('Option "routing-kle" is required.');
        }

        $certificateLocator = $this->getCertificateLocator($options['certificate'], $options['certificate-passphrase']);

        $sf2900 = new SF2900(
            [
                'authority_cvr' => $options['sender-id'],
                'certificate_locator' => $certificateLocator,
                'test_mode' => !$options['production'],
                'sftp' => [
                    'host' => $options['sftp-host'],
                    'username' => $options['sftp-username'],
                    'private-key' => $options['sftp-private-key'],
                ],
            ]
        );

        $registreringItSystem = $options['registrering-it-system'];
        $aktoer = $registreringItSystem;

        $id = Serializer::createUuid();
        $now = new \DateTimeImmutable();
        $type = $options['type'];
        $document = match ($type) {
            ObjektTypeType::VALUE_JOURNALPOST => new DistributionJournalPostType(
                iD: $id,
                kLEEmneForslag: $options['routing-kle'],
                registrering: new JournalPostRegistreringType(
                    fraTidsPunkt: SF2900::formatDateTime($now),
                    livscyklusKode: LivscyklusKodeType::VALUE_OPRETTET,
                    registreringItSystem: new UUID_URN($registreringItSystem),
                    relationListe: new JournalPostRelationsListeType([
                        new JournalPostType(
                            virkning: new VirkningType(
                                aktoer: new UUID_URN($aktoer),
                                aktoerType: AktoerTypeType::VALUE_IT_SYSTEM,
                                // fraTidsPunkt: null,
                                // tilTidspunkt: null,
                                // noteTekst: null,
                            ),
                            rolle: JournalPostRolleType::VALUE_JOURNALPOST,
                            // @todo What is "indeks"?
                            indeks: '1',
                            journalnotatAttributter: new JournalNotatEgenskaberType(
                                notat: __FILE__,
                                titel: __METHOD__,
                            )
                        ),
                    ])
                ),
            ),

            ObjektTypeType::VALUE_DOKUMENT => new DistributionDokumentType(
                iD: $id,
                kLEEmneForslag: $options['routing-kle'],
                // handlingFacetForslag: null,
                registrering: new DokumentRegistreringType(
                    fraTidsPunkt: SF2900::formatDateTime($now),
                    livscyklusKode: LivscyklusKodeType::VALUE_OPRETTET,
                    registreringItSystem: new UUID_URN($registreringItSystem),
                    relationListe: new RelationsListe(
                        variantListe: new VariantListeType([
                            new VariantType(
                                virkning: new VirkningType(
                                    aktoer: new UUID_URN($aktoer),
                                    aktoerType: AktoerTypeType::VALUE_IT_SYSTEM,
                                    // fraTidsPunkt: null,
                                    // tilTidspunkt: null,
                                    // noteTekst: null,
                                ),
                                rolle: VariantRolleType::VALUE_VARIANT,
                                indeks: '1',
                                variantAttributter: new VariantAttributterType(
                                    variantType: 'PDF',
                                ),
                                delAttributter: new DelAttributterType(
                                    delTekst: 'Hele dokumentet',
                                ),
                            ),
                        ]),
                    ),
                    tilstandsListe: [
                        new TilstandListeType(
                            tilstand: [
                                new TilstandType(
                                    // @todo
                                    fremdrift: FremdriftType::VALUE_ENDELIGT,
                                    virkning: new VirkningType(
                                        aktoer: new UUID_URN($aktoer),
                                        aktoerType: AktoerTypeType::VALUE_IT_SYSTEM,
                                        // fraTidsPunkt: null,
                                        // tilTidspunkt: null,
                                        // noteTekst: null,
                                    ),
                                ),
                            ]
                        ),
                    ],
                    attributListe: new AttributterListeType([
                        new AttributterType(
                            brugervendtNoegleTekst: __METHOD__,
                            titelTekst: __FILE__,
                            beskrivelseTekst: __FILE__,
                            dokumenttype: DokumenttypeType::VALUE_ANDEN,
                            retning: RetningType::VALUE_UDGAAENDE,
                            brevdato: SF2900::formatDate($now),
                            virkning: new VirkningType(
                                aktoer: new UUID_URN($aktoer),
                                aktoerType: AktoerTypeType::VALUE_IT_SYSTEM,
                                // fraTidsPunkt: null,
                                // tilTidspunkt: null,
                                // noteTekst: null,
                            ),
                        ),
                    ]),
                    // importTidspunkt: null,
                    // brugerRef: null,
                )
            ),

            // ObjektTypeType::VALUE_FORMULAR => '',

            default => throw new InvalidArgumentException(sprintf('Invalid type: %s', $type)),
        };

        $dokumentFilNavn = null;
        if ($document instanceof DistributionDokumentType) {
            $file = $options['file'];
            if (null === $file) {
                throw new MissingArgumentException('File is required');
            }
            $dokumentFilNavn = $sf2900->sftp()->putFile($file);
        }

        $transactionId = Serializer::createUuid();
        try {
            $result = $sf2900->afsend(
                transactionId: $transactionId,
                type: $type,
                document: $document,
                routingMyndighed: $options['sender-id'],
                routingKLEEmne: $options['routing-kle'],
                routingHandlingFacet: $options['routing-handling-facet'],
                routingModtagerAktoer: $options['routing-modtager-aktoer'],
                dokumentFilNavn: $dokumentFilNavn,
            );
            $io->writeln(var_export($result, true));
        } catch (SoapException $exception) {
            $io->writeln($exception->getRequest());
            $io->error($exception->getResponse());

            throw $exception;
        }

        return Command::SUCCESS;
    }

    protected function configureOptions(OptionsResolver $resolver): OptionsResolver
    {
        return parent::configureOptions($resolver)
            ->setDefault('type', ObjektTypeType::VALUE_JOURNALPOST)
            ->setDefault('file', null)
            ->setDefault('routing-modtager-aktoer', null)
            ->setAllowedValues('routing-modtager-aktoer', static function (?string $value): bool {
                if (null !== $value) {
                    try {
                        new Uuid($value);
                    } catch (\Exception) {
                        return false;
                    }
                }

                return true;
            })
            ->setRequired('registrering-it-system')
            ->setAllowedTypes('registrering-it-system', 'string')
            ->setAllowedValues('registrering-it-system', static function (string $value): bool {
                try {
                    new Uuid($value);
                } catch (\Exception) {
                    return false;
                }

                return true;
            });
    }
}
