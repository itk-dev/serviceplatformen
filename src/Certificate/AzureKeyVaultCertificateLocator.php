<?php

/**
 * This file is part of itk-dev/serviceplatformen.
 *
 * (c) 2020 ITK Development
 *
 * This source file is subject to the MIT license.
 */

namespace ItkDev\Serviceplatformen\Certificate;

use ItkDev\AzureKeyVault\Exception\SecretException;
use ItkDev\AzureKeyVault\KeyVault\VaultSecret;
use ItkDev\Serviceplatformen\Certificate\Exception\AzureKeyVaultCertificateLocatorException;

class AzureKeyVaultCertificateLocator extends AbstractCertificateLocator implements CertificateLocatorInterface
{
    private $vaultSecret;
    private $certificateName;
    private $version;

    /**
     * AzureKeyVaultCertificateLocator constructor.
     *
     * @param VaultSecret $vaultSecret
     * @param string $certificateName
     * @param string $version
     * @param string $passphrase
     */
    public function __construct(VaultSecret $vaultSecret, string $certificateName, string $version, string $passphrase = '')
    {
        $this->vaultSecret = $vaultSecret;
        $this->certificateName = $certificateName;
        $this->version = $version;
        parent::__construct($passphrase);
    }

    /**
     * {@inheritDoc}
     */
    public function getCertificates(): array
    {
        try {
            $secret = $this->vaultSecret->getSecret($this->certificateName, $this->version);
        } catch (SecretException $e) {
            throw new AzureKeyVaultCertificateLocatorException($e->getMessage(), $e->getCode());
        }

        return $this->getCertificateStoreDataFromSecret($secret->getValue());
    }

    /**
     * {@inheritDoc}
     */
    public function getAbsolutePathToCertificate(): string
    {
        try {
            $secret = $this->vaultSecret->getSecret($this->certificateName, $this->version);
        } catch (SecretException $e) {
            throw new AzureKeyVaultCertificateLocatorException($e->getMessage(), $e->getCode());
        }

        $certificateStoreData = $this->getCertificateStoreDataFromSecret($secret->getValue());
        $certificate = $this->extractCertificateFromStoreData($certificateStoreData);

        return $this->getAbsoluteTmpPathByContent($certificate);
    }

    /**
     * Returns certificate store data from a base64 encoded azure key vault secret value.
     *
     * @param string $secretValue base64 encoded secret value.
     *
     * @return array the certificate store data.
     *
     * @throws AzureKeyVaultCertificateLocatorException
     */
    private function getCertificateStoreDataFromSecret(string $secretValue): array
    {
        $decodedSecretValue = base64_decode($secretValue);
        if (!$decodedSecretValue) {
            throw new AzureKeyVaultCertificateLocatorException('Could not decode secret from key vault.');
        }

        $certificateStoreData = [];
        $passphrase = $this->hasPassphrase()
            ? $this->getPassphrase()
            : '';

        if (!openssl_pkcs12_read($decodedSecretValue, $certificateStoreData, $passphrase)) {
            throw new AzureKeyVaultCertificateLocatorException('Could not read certificate.');
        }

        return $certificateStoreData;
    }

    /**
     * Extracts certificate data from certificate store data generated by openssl_pkcs12_read().
     *
     * @param array $certificateStoreData certificate store data generated by openssl_pkcs12_read().
     *
     * @return string certificate in pem format.
     *
     * @throws AzureKeyVaultCertificateLocatorException
     */
    private function extractCertificateFromStoreData(array $certificateStoreData): string
    {
        if (empty($certificateStoreData['pkey'])) {
            throw new AzureKeyVaultCertificateLocatorException('Missing pkey in certificate store data.');
        }

        if (empty($certificateStoreData['cert'])) {
            throw new AzureKeyVaultCertificateLocatorException('Missing cert in certificate store data.');
        }

        $combinedCertificate = $certificateStoreData['pkey']
            . PHP_EOL
            . $certificateStoreData['cert'];

        if (array_key_exists('extracerts', $certificateStoreData)) {
            $combinedCertificate .= is_array($certificateStoreData['extracerts'])
                ? implode('', $certificateStoreData['extracerts'])
                : $certificateStoreData['extracerts'];
        }

        return $combinedCertificate;
    }

    /**
     * Creates a temporary file with the provided content and returns the absolute path to the temporary file.
     *
     * The file will be removed from the filesystem when no more references exists to the file.
     *
     * @param string $content the content of the temporary file.
     *
     * @return string the absolute path to the temporary file.
     */
    private function getAbsoluteTmpPathByContent(string $content): string
    {
        // Static variables is stored in the global variable area and destroyed during the shutdown phase.
        // This ensures that there are no references to the file when the code has executed and thus is deleted.
        // The variable must be declared static before the temporary file is assigned to the variable or else PHP
        // thinks you are assigning values to a constant.
        static $tmpFile = null;
        $tmpFile = tmpfile();
        fwrite($tmpFile, $content);
        $streamMetaData = stream_get_meta_data($tmpFile);
        return $streamMetaData['uri'];
    }
}
