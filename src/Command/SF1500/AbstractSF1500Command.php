<?php

/**
 * This file is part of itk-dev/serviceplatformen.
 *
 * (c) 2020 ITK Development
 *
 * This source file is subject to the MIT license.
 */

namespace ItkDev\Serviceplatformen\Command\SF1500;

use GuzzleHttp\Client;
use Http\Adapter\Guzzle6\Client as GuzzleAdapter;
use Http\Factory\Guzzle\RequestFactory;
use ItkDev\AzureKeyVault\Authorisation\VaultToken;
use ItkDev\AzureKeyVault\KeyVault\VaultSecret;
use ItkDev\Serviceplatformen\Certificate\AzureKeyVaultCertificateLocator;
use ItkDev\Serviceplatformen\Certificate\CertificateLocatorInterface;
use ItkDev\Serviceplatformen\Certificate\FilesystemCertificateLocator;
use ItkDev\Serviceplatformen\Service\SF1500\AdresseService;
use ItkDev\Serviceplatformen\Service\SF1500\BrugerService;
use ItkDev\Serviceplatformen\Service\SF1500\PersonService;
use ItkDev\Serviceplatformen\Service\SF1500\SF1500;
use ItkDev\Serviceplatformen\Service\SF1500\SF1500XMLBuilder;
use ItkDev\Serviceplatformen\Service\SF1514\SF1514;
use ItkDev\Serviceplatformen\Service\SoapClient;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Exception\InvalidOptionException;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\PropertyAccess\PropertyAccessor;

class AbstractSF1500Command extends Command
{
    const SF1500_SERVICE_ENDPOINT = 'http://stoettesystemerne.dk/service/organisation/3';
    protected array $inputOptions = [];

    protected function buildInputOptions(array $definition): array
    {
        $options = array_filter($definition, static fn ($item) => $item instanceof InputOption);
        // Index by option name.
        $this->inputOptions = array_combine(
            array_map(static fn (InputOption $option) => $option->getName(), $options),
            $options
        );

        return $this->inputOptions;
    }

    /**
     * @template T of SF1500
     * @param class-string<T> $className
     * @return T
     */
    protected function getService(string $className, array $options): SF1500
    {
        $certificateLocator = $this->getCertificateLocator($options['certificate'], $options['certificate-passphrase']);

        $soapClient = new SoapClient([
            'cache_expiration_time' => ['7am', 'tomorrow 7am'],
        ]);

        $serviceOptions = [
            'certificate_locator' => $certificateLocator,
            'authority_cvr' => $options['authority-cvr'],
            'sts_applies_to' => self::SF1500_SERVICE_ENDPOINT,
            'test_mode' => !$options['production'],
        ];

        $sf1514 = new SF1514($soapClient, $serviceOptions);

        $sf1500XMLBuilder = new SF1500XMLBuilder();

        unset($serviceOptions['sts_applies_to']);

        return new $className($soapClient, $sf1514, $sf1500XMLBuilder, new PropertyAccessor(), $serviceOptions);
    }

    protected function getAdresseService(array $options): AdresseService
    {
        $service = $this->getService(AdresseService::class, $options);
        assert($service instanceof AdresseService);

        return $service;
    }

    protected function getPersonService(array $options): PersonService
    {
        $service = $this->getService(PersonService::class, $options);
        assert($service instanceof PersonService);

        return $service;
    }

    protected function getBrugerService(array $options): BrugerService
    {
        $service = $this->getService(BrugerService::class, $options);
        assert($service instanceof BrugerService);

        return $service;
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
                'authority-cvr',
            ])
            ->setDefaults([
                'certificate-passphrase' => '',
                'production' => false,
            ])
        ;
    }
}
