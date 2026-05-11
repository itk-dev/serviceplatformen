<?php

namespace Digitaliseringskataloget\Sftp;

/**
 * Class representing ErrorMessageType
 *
 *
 * XSD Type: ErrorMessage
 */
class ErrorMessageType
{
    /**
     * @var int $errorCode
     */
    private $errorCode = null;

    /**
     * @var string $errorCodeDescription
     */
    private $errorCodeDescription = null;

    /**
     * @var string $errorDescription
     */
    private $errorDescription = null;

    /**
     * Gets as errorCode
     *
     * @return int
     */
    public function getErrorCode()
    {
        return $this->errorCode;
    }

    /**
     * Sets a new errorCode
     *
     * @param int $errorCode
     * @return self
     */
    public function setErrorCode($errorCode)
    {
        $this->errorCode = $errorCode;
        return $this;
    }

    /**
     * Gets as errorCodeDescription
     *
     * @return string
     */
    public function getErrorCodeDescription()
    {
        return $this->errorCodeDescription;
    }

    /**
     * Sets a new errorCodeDescription
     *
     * @param string $errorCodeDescription
     * @return self
     */
    public function setErrorCodeDescription($errorCodeDescription)
    {
        $this->errorCodeDescription = $errorCodeDescription;
        return $this;
    }

    /**
     * Gets as errorDescription
     *
     * @return string
     */
    public function getErrorDescription()
    {
        return $this->errorDescription;
    }

    /**
     * Sets a new errorDescription
     *
     * @param string $errorDescription
     * @return self
     */
    public function setErrorDescription($errorDescription)
    {
        $this->errorDescription = $errorDescription;
        return $this;
    }
}

