<?php

/**
 * This file is part of itk-dev/serviceplatformen.
 *
 * (c) 2020 ITK Development
 *
 * This source file is subject to the MIT license.
 */

namespace ItkDev\Serviceplatformen\Certificate;

/**
 * Interface CertificateLocatorInterface
 */
interface CertificateLocatorInterface
{
    /**
     * Returns the absolute path to the certificate.
     *
     * @return string the absolute path to the certificate.
     */
    public function getPathToCertificate(): string;

    /**
     * @return string
     */
    public function getPassphrase(): string;

    /**
     * @return bool true if passphrase is present else false.
     */
    public function hasPassphrase(): bool;
}
