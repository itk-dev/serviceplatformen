<?php

/**
 * This file is part of itk-dev/serviceplatformen.
 *
 * (c) 2020 ITK Development
 *
 * This source file is subject to the MIT license.
 */

namespace ItkDev\Serviceplatformen\Command\SF1514;

use GuzzleHttp\Client;
use Http\Adapter\Guzzle6\Client as GuzzleAdapter;
use Http\Factory\Guzzle\RequestFactory;
use ItkDev\AzureKeyVault\Authorisation\VaultToken;
use ItkDev\AzureKeyVault\KeyVault\VaultSecret;
use ItkDev\Serviceplatformen\Certificate\AzureKeyVaultCertificateLocator;
use ItkDev\Serviceplatformen\Certificate\CertificateLocatorInterface;
use ItkDev\Serviceplatformen\Certificate\FilesystemCertificateLocator;
use ItkDev\Serviceplatformen\Service\SF1514\SF1514;
use ItkDev\Serviceplatformen\Service\SoapClient;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Exception\InvalidOptionException;
use Symfony\Component\Console\Input\InputDefinition;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SAMLTokenCommand extends Command
{
    protected static $defaultName = 'serviceplatformen:sf1514:saml-token';

    private array $inputOptions = [];

    protected function configure()
    {
        $inputOptions = [
            new InputOption('production', null, InputOption::VALUE_NONE, 'production mode'),
            new InputOption('certificate', null, InputOption::VALUE_REQUIRED, 'path to certificate'),
            new InputOption('passphrase', null, InputOption::VALUE_OPTIONAL, 'passphrase to certificate'),
            new InputOption('authority-cvr', null, InputOption::VALUE_REQUIRED, 'authority cvr', '55133018'),
            new InputOption('sts-applies-to', null, InputOption::VALUE_REQUIRED, 'service SAML token should apply to'),
        ];
        $this->setDefinition(new InputDefinition($inputOptions));

        $this->setDescription('Helper script for testing “SF1514: Sikkerhed - Hent Token fra Security Token Service”.');

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
 
passphrase:
    the passphrase for p12 certificate, i.e.
    'XYZ'
    defaults to the empty string if not provided

sts-applies-to:
    the service SAML token should grant access to, i.e. SF1500 Organisation
    'http://stoettesystemerne.dk/service/organisation/3'

authority-cvr:
    the authority cvr for which certificate is granted, i.e. Aarhus Kommune
    '55133018'
HELP;

        $this->setHelp($help);

        // Index by option name.
        $this->inputOptions = array_combine(array_map(fn (InputOption $option) => $option->getName(), $inputOptions), $inputOptions);
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $resolver = new OptionsResolver();
        $this->configureOptions($resolver);
        $options = $resolver->resolve(
            array_filter(array_filter($input->getOptions()), fn ($name) => isset($this->inputOptions[$name]), ARRAY_FILTER_USE_KEY)
        );

        $certificateLocator = $this->getCertificateLocator($options['certificate'], $options['passphrase']);

        $soapClient = new SoapClient([
            'cache_expiration_time' => 'tomorrow 7am',
        ]);

        $sf1514Options = [
            'certificate_locator' => $certificateLocator,
            'authority_cvr' => $options['authority-cvr'],
            'sts_applies_to' => $options['sts-applies-to'],
            'test_mode' => !$options['production'],
        ];

        $sf1514 = new SF1514($soapClient, $sf1514Options);

        $token = $sf1514->getSAMLToken();

        if ($token !== null) {
            $output->writeln('Success getting SAML Token with provided information.');
            return static::SUCCESS;
        } else {
            $output->writeln('Could not fetch SAML Token.');
            return static::FAILURE;
        }
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

    private function configureOptions(OptionsResolver $resolver)
    {
        $resolver
            ->setRequired([
                'certificate',
                'passphrase',
                'authority-cvr',
                'sts-applies-to',
            ])
            ->setDefaults([
                'passphrase' => '',
                'production' => false,
            ])
        ;
    }
}
