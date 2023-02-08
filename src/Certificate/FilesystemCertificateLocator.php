<?php

/**
 * This file is part of itk-dev/serviceplatformen.
 *
 * (c) 2020 ITK Development
 *
 * This source file is subject to the MIT license.
 */

namespace ItkDev\Serviceplatformen\Certificate;

use InvalidArgumentException;
use ItkDev\Serviceplatformen\Certificate\Exception\CertificateLocatorException;

/**
 * Class FilesystemCertificateLocator
 */
class FilesystemCertificateLocator extends AbstractCertificateLocator implements CertificateLocatorInterface
{
    private $pathToCertificate;

    /**
     * FilesystemCertificateLocator constructor.
     *
     * @param string $pathToCertificate the absolute path to the certificate.
     * @param string $passphrase
     *
     * @throws InvalidArgumentException
     */
    public function __construct(string $pathToCertificate, string $passphrase = '')
    {
        $this->setPathToCertificate($pathToCertificate);
        parent::__construct($passphrase);
    }

    /**
     * @param string $pathToCertificate the absolute path to the certificate.
     *
     * @throws InvalidArgumentException
     */
    private function setPathToCertificate(string $pathToCertificate)
    {
        if (realpath($pathToCertificate) !== $pathToCertificate) {
            throw new InvalidArgumentException('The provided path is not absolute.');
        }

        if (!is_file($pathToCertificate)) {
            throw new InvalidArgumentException('No file exist at the provided path!');
        }

        $this->pathToCertificate = $pathToCertificate;
    }

    /**
     * @return string
     */
    public function getCertificate(): string
    {
        return file_get_contents($this->pathToCertificate);
    }

    /**
     * {@inheritDoc}
     */
    public function getAbsolutePathToCertificate(): string
    {
        return $this->pathToCertificate;
    }

    /**
     * {@inheritdoc}
     */
    public function getCertificates(): array
    {
        $certificateStoreData = [];
        $passphrase = $this->hasPassphrase()
            ? $this->getPassphrase()
            : null;

        $content = file_get_contents($this->pathToCertificate);
        if (!openssl_pkcs12_read($content, $certificateStoreData, $passphrase)) {
            throw new CertificateLocatorException('Could not read certificate.');
        }

        return $certificateStoreData;
    }

    /**
     * {@inheritdoc}
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
        return parent::jsonSerialize() + [
                'pathToCertificate' => $this->pathToCertificate,
            ];
    }
}
