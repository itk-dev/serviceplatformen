<?php

/**
 * This file is part of itk-dev/serviceplatformen.
 *
 * (c) 2020 ITK Development
 *
 * This source file is subject to the MIT license.
 */

namespace ItkDev\Serviceplatformen\Command\SF1601;

use GuzzleHttp\Client;
use Http\Adapter\Guzzle6\Client as GuzzleAdapter;
use Http\Factory\Guzzle\RequestFactory;
use ItkDev\AzureKeyVault\Authorisation\VaultToken;
use ItkDev\AzureKeyVault\KeyVault\VaultSecret;
use ItkDev\Serviceplatformen\Certificate\AzureKeyVaultCertificateLocator;
use ItkDev\Serviceplatformen\Certificate\CertificateLocatorInterface;
use ItkDev\Serviceplatformen\Certificate\FilesystemCertificateLocator;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Exception\InvalidOptionException;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\OptionsResolver\OptionsResolver;

abstract class AbstractCommand extends Command
{
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
