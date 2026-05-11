<?php

namespace Digitaliseringskataloget\Sftp;

/**
 * Class representing BusinessResponseType
 *
 *
 * XSD Type: BusinessResponseType
 */
class BusinessResponseType
{
    /**
     * @var string $responseMessage
     */
    private $responseMessage = null;

    /**
     * @var \Digitaliseringskataloget\Sftp\ErrorMessageType[] $errorMessage
     */
    private $errorMessage = [
        
    ];

    /**
     * Gets as responseMessage
     *
     * @return string
     */
    public function getResponseMessage()
    {
        return $this->responseMessage;
    }

    /**
     * Sets a new responseMessage
     *
     * @param string $responseMessage
     * @return self
     */
    public function setResponseMessage($responseMessage)
    {
        $this->responseMessage = $responseMessage;
        return $this;
    }

    /**
     * Adds as errorMessage
     *
     * @return self
     * @param \Digitaliseringskataloget\Sftp\ErrorMessageType $errorMessage
     */
    public function addToErrorMessage(\Digitaliseringskataloget\Sftp\ErrorMessageType $errorMessage)
    {
        $this->errorMessage[] = $errorMessage;
        return $this;
    }

    /**
     * isset errorMessage
     *
     * @param int|string $index
     * @return bool
     */
    public function issetErrorMessage($index)
    {
        return isset($this->errorMessage[$index]);
    }

    /**
     * unset errorMessage
     *
     * @param int|string $index
     * @return void
     */
    public function unsetErrorMessage($index)
    {
        unset($this->errorMessage[$index]);
    }

    /**
     * Gets as errorMessage
     *
     * @return \Digitaliseringskataloget\Sftp\ErrorMessageType[]
     */
    public function getErrorMessage()
    {
        return $this->errorMessage;
    }

    /**
     * Sets a new errorMessage
     *
     * @param \Digitaliseringskataloget\Sftp\ErrorMessageType[] $errorMessage
     * @return self
     */
    public function setErrorMessage(?array $errorMessage = null)
    {
        $this->errorMessage = $errorMessage;
        return $this;
    }
}

