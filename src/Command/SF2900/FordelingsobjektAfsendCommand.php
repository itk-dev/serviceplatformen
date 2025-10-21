<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\Command\SF2900;

use ItkDev\Serviceplatformen\Service\SF1601\Serializer;
use ItkDev\Serviceplatformen\Service\SF2900\SF2900;
use ItkDev\Serviceplatformen\Service\SF2900\Type;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

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
                new InputOption('type', null, InputOption::VALUE_REQUIRED, 'type', Type::Journalnotat->value),
            ]
        );
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $options = $this->resolveOptions(
            array_filter(
                array_filter($input->getOptions()),
                fn (string $name) => isset($this->baseOptions[$name]),
                ARRAY_FILTER_USE_KEY
            )
        );

        $io = new SymfonyStyle($input, $output);
        $certificateLocator = $this->getCertificateLocator($options['certificate'], $options['certificate-passphrase']);

        $sf2900 = new SF2900([
            'authority_cvr' => $options['sender-id'],
            'certificate_locator' => $certificateLocator,
            'test_mode' => !$options['production'],
        ]);
        $transactionId = Serializer::createUuid();
        $sf2900->afsend(
            $transactionId,
            Type::Journalnotat,
            routingMyndighed: $options['sender-id'],
            routingKLEEmne: $options['routing-kle'] ?? ''
        );

        return Command::SUCCESS;
    }
}
