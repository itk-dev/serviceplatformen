<?php

/*
 * This file is part of itk-dev/serviceplatformen.
 *
 * (c) 2020 ITK Development
 *
 * This source file is subject to the MIT license.
 */

namespace ItkDev\Serviceplatformen\Certificate;

/**
 * Class FilesystemCertificateLocator
 */
class FilesystemCertificateLocator implements CertificateLocatorInterface
{
    private $pathToCertificate;
    private $passphrase;

    /**
     * FilesystemCertificateLocator constructor.
     *
     * @param string $pathToCertificate
     * @param string $passphrase
     */
    public function __construct(string $pathToCertificate, string $passphrase = '')
    {
        $this->pathToCertificate = $pathToCertificate;
        $this->passphrase = $passphrase;
    }

    /**
     * {@inheritDoc}
     */
    public function getPathToCertificate(): string
    {
        return $this->pathToCertificate;
    }

    /**
     * {@inheritDoc}
     */
    public function getPassphrase(): string
    {
        return $this->passphrase;
    }

    /**
     * {@inheritDoc}
     */
    public function hasPassphrase(): bool
    {
        return empty($this->passphrase);
    }
}
