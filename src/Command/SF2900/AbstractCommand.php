<?php

/**
 * This file is part of itk-dev/serviceplatformen.
 *
 * (c) 2020 ITK Development
 *
 * This source file is subject to the MIT license.
 */

namespace ItkDev\Serviceplatformen\Command\SF2900;

use ItkDev\Serviceplatformen\Certificate\CertificateLocatorHelper;
use ItkDev\Serviceplatformen\Certificate\CertificateLocatorInterface;
use ItkDev\Serviceplatformen\Service\SF2900\SF2900\SftpHelper;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputDefinition;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

abstract class AbstractCommand extends Command
{
    protected array $baseOptions = [];
    protected array $commandOptionNames = [];
    protected array $commandOptions = [];

    public function __construct(
        protected readonly EventDispatcherInterface $eventDispatcher,
    ) {
        parent::__construct();
    }

    // @todo The “input option” stuff is hard to understand (for me). Rename and refactor.
    // It seems related to options shared between all commands extending the abstract command.
    protected function buildOptions(array $definition): void
    {
        $this->baseOptions = [];
        $this->commandOptionNames = [];

        // Index by option name.
        $options = array_filter($definition, static fn ($item) => $item instanceof InputOption);
        foreach ($options as $option) {
            $name = $option->getName();
            if (in_array($name, $this->commandOptionNames)) {
                $this->commandOptionNames[$name] = $option;
            } else {
                $this->baseOptions[$name] = $option;
            }
        }
    }

    /**
     * @return (InputOption|InputArgument)[]
     */
    protected function getDefinitionItems(): array
    {
        return [
            new InputOption('production', null, InputOption::VALUE_NONE, 'production mode'),
            new InputOption('sender-id', null, InputOption::VALUE_REQUIRED, 'sender-id (CVR)'),
            new InputOption('routing-kle', null, InputOption::VALUE_REQUIRED, 'routing-kle'),
            new InputOption('routing-handling-facet', null, InputOption::VALUE_REQUIRED, 'routing-handling-facet'),
            new InputOption('certificate', null, InputOption::VALUE_REQUIRED, 'Path to certificate or a query string with Azure Key Vault information (see help for details)'),
            new InputOption('certificate-passphrase', null, InputOption::VALUE_REQUIRED, 'certificate passphrase', ''),
            new InputOption('sftp-host', null, InputOption::VALUE_REQUIRED, 'SFTP host', default: 'sftpexttest.serviceplatformen.dk'),
            new InputOption('sftp-username', null, InputOption::VALUE_REQUIRED, 'SFTP username'),
            new InputOption('sftp-private-key', null, InputOption::VALUE_REQUIRED, 'SFTP private key filename'),
        ];
    }

    protected function configure()
    {
        $definition = $this->getDefinitionItems();
        $this->setDefinition(new InputDefinition($definition));

        $help = $this->buildHelp();
        $this->setHelp($help);
        $this->buildOptions($definition);
    }

    protected function buildHelp(): string
    {
        return <<<HELP
Certificates

The certificate option can be a file path to a PKCS #12 certificate or a url query string with options for getting the certificate from an Azure Key Vault, e.g. (newlines added for readability and proper url encoding skipped)

  tenant-id=f1d3b517-acac-4902-ae36-aaa32ed814dd
  &client-id=7d711706-4325-47a6-a8c4-b373615c2b75
  &client-secret=6e8551bf-2bb0-46bc-b449-647720120495
  &name=fordelingskomponent
  &secret=test
  &version=bbcbd812-0d7c-420b-9b93-7318e3769578

HELP;
    }

    protected function getCertificateLocator(string $spec, string $passphrase): CertificateLocatorInterface
    {
        return CertificateLocatorHelper::createCertificateLocator($spec, $passphrase);
    }

    protected function resolveOptions(array $options): array
    {
        return $this->configureOptions(new OptionsResolver())->resolve($options);
    }

    protected function configureOptions(OptionsResolver $resolver): OptionsResolver
    {
        return $resolver
            ->setRequired([
                'certificate',
                'sender-id',
            ])
            ->setDefaults([
                'certificate-passphrase' => '',
                'sftp-host' => 'sftpexttest.serviceplatformen.dk',
                'sftp-username' => null,
                'sftp-private-key' => null,
                'production' => false,
                'routing-kle' => '',
                'routing-handling-facet' => '',
            ])
        ;
    }

    protected function getOptionsDetails(OptionsResolver $resolver, string $indent = '')
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
