<?php

namespace ItkDev\Serviceplatformen\Command\SF2900;

use GuzzleHttp\Client;
use Http\Adapter\Guzzle7\Client as GuzzleAdapter;
use Http\Factory\Guzzle\RequestFactory;
use ItkDev\AzureKeyVault\Authorisation\VaultToken;
use ItkDev\AzureKeyVault\KeyVault\VaultSecret;
use ItkDev\Serviceplatformen\Certificate\AzureKeyVaultCertificateLocator;
use ItkDev\Serviceplatformen\Certificate\CertificateLocatorInterface;
use ItkDev\Serviceplatformen\Certificate\FilesystemCertificateLocator;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Exception\InvalidOptionException;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputDefinition;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\OptionsResolver\OptionsResolver;

abstract class AbstractCommand extends Command
{
    protected array $baseOptions = [];
    protected array $commandOptionNames = [];
    protected array $commandOptions = [];

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
            new InputOption('certificate', null, InputOption::VALUE_REQUIRED, 'Path to certificate or a query string with Azure Key Vault information (see help for details)'),
            new InputOption('certificate-passphrase', null, InputOption::VALUE_REQUIRED, 'certificate passphrase', ''),
            new InputOption('routing-kle', null, InputOption::VALUE_REQUIRED, 'routing-kle'),
            new InputOption('routing-handling-facet', null, InputOption::VALUE_REQUIRED, 'routing-handling-facet'),
        ];
    }

    protected function configure()
    {
        $definition = $this->getDefinitionItems();
        $this->setDefinition(new InputDefinition($definition));

        $help = $this->buildHelp();
        $this->setHelp(str_replace(
            [
                '%certificate_options%',
            ],
            [
                $this->getOptionsDetails($this->getCertificateOptionsResolver(), '  '),
            ],
            $help
        ));

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

Certificate options

%certificate_options%

HELP;
    }

    protected function getCertificateLocator(string $spec, string $passphrase): CertificateLocatorInterface
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

    protected function getCertificateOptionsResolver(): OptionsResolver
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
