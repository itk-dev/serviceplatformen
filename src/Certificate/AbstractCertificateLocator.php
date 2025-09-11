<?php

/**
 * This file is part of itk-dev/serviceplatformen.
 *
 * (c) 2020 ITK Development
 *
 * This source file is subject to the MIT license.
 */

namespace ItkDev\Serviceplatformen\Certificate;

abstract class AbstractCertificateLocator implements CertificateLocatorInterface, \JsonSerializable
{
    protected $passphrase;

    /**
     * AbstractCertificateLocator constructor.
     */
    public function __construct(string $passphrases = '')
    {
        $this->passphrase = $passphrases;
    }

    public function getPassphrase(): string
    {
        return $this->passphrase;
    }

    public function hasPassphrase(): bool
    {
        return !empty($this->passphrase);
    }

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
