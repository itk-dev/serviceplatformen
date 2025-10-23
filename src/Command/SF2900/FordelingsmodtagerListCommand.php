<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\Command\SF2900;

use ItkDev\Serviceplatformen\Service\SF2900\SF2900;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Exception\InvalidOptionException;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;
use Symfony\Component\Yaml\Yaml;

#[AsCommand(name: 'serviceplatformen:sf2900:fordelingsmodtager-list', description: 'Helper script for testing “FordelingsmodtagerList”.')]
final class FordelingsmodtagerListCommand extends AbstractCommand
{
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
            ]
        );

        $result = $sf2900->getModtagerList(
            routingMyndighed: $options['sender-id'],
            routingKLEEmne: $options['routing-kle'],
            routingHandlingFacet: $options['routing-handling-facet'],
        );

        assert(null !== $result);

        foreach ($result->getSystemer()->getSystem() as $system) {
            $io->section($system->getSystemNavn());
            $io->writeln(Yaml::dump(json_decode(json_encode($system), true)));
        }

        return Command::SUCCESS;
    }
}
