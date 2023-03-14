<?php

/**
 * This file is part of itk-dev/serviceplatformen.
 *
 * (c) 2020 ITK Development
 *
 * This source file is subject to the MIT license.
 */

namespace ItkDev\Serviceplatformen\Command\SF1500;

use Composer\Console\Input\InputArgument;
use ItkDev\Serviceplatformen\Service\Exception\SF1500Exception;
use ItkDev\Serviceplatformen\Service\SF1500\Model\AbstractModel;
use Symfony\Component\Console\Exception\RuntimeException;
use Symfony\Component\Console\Input\InputDefinition;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class SF1500ReadCommand extends AbstractSF1500Command
{
    protected static $defaultName = 'serviceplatformen:sf1500:read';

    protected function configure()
    {
        $definition = [
            new InputOption('production', null, InputOption::VALUE_NONE, 'production mode'),
            new InputOption('certificate', null, InputOption::VALUE_REQUIRED, 'path to certificate'),
            new InputOption(
                'certificate-passphrase',
                null,
                InputOption::VALUE_OPTIONAL,
                'passphrase for certificate',
                ''
            ),
            new InputOption('authority-cvr', null, InputOption::VALUE_REQUIRED, 'authority cvr'),
            new InputArgument('type', InputArgument::REQUIRED, 'The object type', null, ['user', 'hest']),
            new InputArgument('id', InputArgument::REQUIRED, 'The object id'),
            new InputOption('fields', null, InputOption::VALUE_REQUIRED, 'List of fields to include'),
        ];
        $this->setDefinition(new InputDefinition($definition));

        $help = <<<HELP

certificate:
    The certificate option can be a file path to a PKCS #12 certificate or a url query string with options for getting the certificate from an Azure Key Vault, e.g. (newlines added for readability and proper url encoding skipped)

    tenant_id=f1d3b517-acac-4902-ae36-aaa32ed814dd
    &client_id=7d711706-4325-47a6-a8c4-b373615c2b75
    &client_secret=6e8551bf-2bb0-46bc-b449-647720120495
    &name=organisation
    &secret=test
    &version=bbcbd812-0d7c-420b-9b93-7318e3769578
    
    If using path option make sure the path is relative to project root to the certificate file, e.g.
    '/app/src/Command/SF1500/certificate.p12'
 
certificate-passphrase:
    the passphrase for p12 certificate, i.e.
    'XYZ'
    defaults to the empty string if not provided

authority-cvr:
    the authority cvr for which certificate is granted, e.g. Aarhus Kommune
    '55133018'

production:
    use --production to use production mode rather than test mode

HELP;

        $this->setHelp($help);

        $this->buildInputOptions($definition);
    }

    /**
     * @throws SF1500Exception
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $options = $this->resolveOptions(
            array_filter(
                array_filter($input->getOptions()),
                fn ($name) => isset($this->inputOptions[$name]),
                ARRAY_FILTER_USE_KEY
            )
        );
        $type = $input->getArgument('type');
        $id = $input->getArgument('id');

        $item = $this->doRead($type, $id, $options);

        $output->writeln(json_encode($item, JSON_PRETTY_PRINT));

        return static::SUCCESS;
    }

    private function doRead(string $type, string $id, array $options): ?AbstractModel
    {
        $fields = preg_split('/\s*,\s*/', $options['fields'] ?? '', PREG_SPLIT_NO_EMPTY);

        switch ($type) {
            case 'adresse':
                return ($this->getAdresseService($options))->laes($id, $fields);
            case 'person':
                return ($this->getPersonService($options))->laes($id, $fields);
            case 'user':
            case 'bruger':
                return ($this->getBrugerService($options))->laes($id, $fields);
        }

        throw new RuntimeException(sprintf('invalid search type: %s', $type));
    }
}
