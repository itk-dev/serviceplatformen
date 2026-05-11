<?php

namespace Digitaliseringskataloget\Sftp;

/**
 * Class representing TechnicalReceiptType
 *
 *
 * XSD Type: TechnicalReceiptType
 */
class TechnicalReceiptType
{
    /**
     * @var string $fileTransferUUID
     */
    private $fileTransferUUID = null;

    /**
     * @var string $sendersFileId
     */
    private $sendersFileId = null;

    /**
     * @var \Digitaliseringskataloget\Sftp\ReceiptType $receipt
     */
    private $receipt = null;

    /**
     * @var \Digitaliseringskataloget\Sftp\ErrorMessageType[] $errorMessage
     */
    private $errorMessage = [
        
    ];

    /**
     * Gets as fileTransferUUID
     *
     * @return string
     */
    public function getFileTransferUUID()
    {
        return $this->fileTransferUUID;
    }

    /**
     * Sets a new fileTransferUUID
     *
     * @param string $fileTransferUUID
     * @return self
     */
    public function setFileTransferUUID($fileTransferUUID)
    {
        $this->fileTransferUUID = $fileTransferUUID;
        return $this;
    }

    /**
     * Gets as sendersFileId
     *
     * @return string
     */
    public function getSendersFileId()
    {
        return $this->sendersFileId;
    }

    /**
     * Sets a new sendersFileId
     *
     * @param string $sendersFileId
     * @return self
     */
    public function setSendersFileId($sendersFileId)
    {
        $this->sendersFileId = $sendersFileId;
        return $this;
    }

    /**
     * Gets as receipt
     *
     * @return \Digitaliseringskataloget\Sftp\ReceiptType
     */
    public function getReceipt()
    {
        return $this->receipt;
    }

    /**
     * Sets a new receipt
     *
     * @param \Digitaliseringskataloget\Sftp\ReceiptType $receipt
     * @return self
     */
    public function setReceipt(?\Digitaliseringskataloget\Sftp\ReceiptType $receipt = null)
    {
        $this->receipt = $receipt;
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

