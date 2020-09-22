<?php

/**
 * This file is part of itk-dev/serviceplatformen.
 *
 * (c) 2020 ITK Development
 *
 * This source file is subject to the MIT license.
 */

namespace ItkDev\Serviceplatformen\Certificate;

abstract class AbstractCertificateLocator implements CertificateLocatorInterface
{
    private $passphrase;

    /**
     * AbstractCertificateLocator constructor.
     *
     * @param string $passphrases
     */
    public function __construct(string $passphrases = '')
    {
        $this->passphrase = $passphrases;
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
