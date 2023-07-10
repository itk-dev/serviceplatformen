<?php

/**
 * This file is part of itk-dev/serviceplatformen.
 *
 * (c) 2020 ITK Development
 *
 * This source file is subject to the MIT license.
 */

namespace ItkDev\Serviceplatformen\Command\SF1601;

use ItkDev\Serviceplatformen\Service\SF1601\Serializer;
use ItkDev\Serviceplatformen\Service\SF1601\SF1601;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputDefinition;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PostForespoergCommand extends AbstractCommand
{
    protected static $defaultName = 'serviceplatformen:sf1601:postforespoerg';

    protected function configure()
    {
        $definition = [
            new InputOption('production', null, InputOption::VALUE_NONE, 'production mode'),
            new InputOption('authority-cvr', null, InputOption::VALUE_REQUIRED, 'authority-cvr'),
            new InputOption('certificate', null, InputOption::VALUE_REQUIRED, 'Path to certificate or a query string with Azure Key Vault information (see help for details)'),
            new InputOption('certificate-passphrase', null, InputOption::VALUE_REQUIRED, 'certificate passphrase', ''),
            new InputOption('type', null, InputOption::VALUE_REQUIRED, 'type', 'digitalpost'),
            new InputArgument('identifier', InputArgument::REQUIRED|InputArgument::IS_ARRAY, 'identifier'),
        ];
        $this->setDefinition(new InputDefinition($definition));

        $this->setDescription('Helper script for testing “PostForespørg”.');

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

HELP;

        $this->setHelp(str_replace(
            [
                '%certificate_options%',
            ],
            [
                $this->getOptionsDetails($this->getCertificateOptionsResolver(), '  '),
            ],
            $help
        ));

        $this->buildInputOptions($definition);
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $options = $this->resolveOptions(
            array_filter(
                array_filter($input->getOptions()),
                fn ($name) => isset($this->inputOptions[$name]),
                ARRAY_FILTER_USE_KEY
            )
        );

        $io = new SymfonyStyle($input, $output);
        $certificateLocator = $this->getCertificateLocator($options['certificate'], $options['certificate-passphrase']);

        $service = new SF1601([
            'authority_cvr' => $options['authority-cvr'],
            'certificate_locator' => $certificateLocator,
            'test_mode' => !$options['production'],
        ]);

        $transactionId = Serializer::createUuid();
        $type = $input->getOption('type');
        $identifiers = $input->getArgument('identifier');
        foreach ($identifiers as $identifier) {
            try {
                $response = $service->postForespoerg($transactionId, $type, $identifier);
                $result = $response;
            } catch (\Throwable $throwable) {
                $result = ['message' => $throwable->getMessage()];
            }

            $io->definitionList(
                ['identifier' => $identifier],
                ['result' => json_encode($result, JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE)]
            );
        }

        return static::SUCCESS;
    }

    protected function configureOptions(OptionsResolver $resolver): OptionsResolver
    {
        return
            parent::configureOptions($resolver)->
            setDefault('type', 'digitalpost');
    }
}
