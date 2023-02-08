<?php

/**
 * This file is part of itk-dev/serviceplatformen.
 *
 * (c) 2020 ITK Development
 *
 * This source file is subject to the MIT license.
 */

namespace ItkDev\Serviceplatformen\Certificate;

use ItkDev\Serviceplatformen\Certificate\Exception\CertificateLocatorException;

/**
 * Interface CertificateLocatorInterface
 */
interface CertificateLocatorInterface
{
    /**
     * Get the certificate.
     */
    public function getCertificate(): string;

    /**
     * Returns the absolute path to the certificate.
     *
     * @deprecated Use self::getCertificate() to get the certificate and store it in a temporary file if needed.
     *
     * @return string the absolute path to the certificate.
     *
     * @throws CertificateLocatorException
     */
    public function getAbsolutePathToCertificate(): string;

    /**
     * @return string
     */
    public function getPassphrase(): string;

    /**
     * @return bool true if passphrase is present else false.
     */
    public function hasPassphrase(): bool;
}
