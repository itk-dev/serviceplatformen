<?php

/**
 * This file is part of itk-dev/serviceplatformen.
 *
 * (c) 2020 ITK Development
 *
 * This source file is subject to the MIT license.
 */

namespace ItkDev\Serviceplatformen\Certificate;

use phpDocumentor\Reflection\Types\Mixed_;

abstract class AbstractCertificateLocator implements CertificateLocatorInterface, \JsonSerializable
{
    protected $passphrase;

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
        return !empty($this->passphrase);
    }

    /**
     * {@inheritdoc}
     */
    public function jsonSerialize(): mixed
    {
        return [
            'passphrase' => $this->hideSecret($this->passphrase),
        ];
    }

    protected function hideSecret(string $secret): string
    {
        return sprintf('inv-sha1(%s)', sha1($secret));
    }
}
