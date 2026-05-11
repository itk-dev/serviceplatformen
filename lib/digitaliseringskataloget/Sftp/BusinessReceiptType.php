<?php

namespace Digitaliseringskataloget\Sftp;

/**
 * Class representing BusinessReceiptType
 *
 *
 * XSD Type: BusinessReceiptType
 */
class BusinessReceiptType
{
    /**
     * @var string $fileTransferUUID
     */
    private $fileTransferUUID = null;

    /**
     * @var string $filename
     */
    private $filename = null;

    /**
     * @var string $recipient
     */
    private $recipient = null;

    /**
     * @var string $fileAcceptance
     */
    private $fileAcceptance = null;

    /**
     * @var string $reason
     */
    private $reason = null;

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
     * Gets as filename
     *
     * @return string
     */
    public function getFilename()
    {
        return $this->filename;
    }

    /**
     * Sets a new filename
     *
     * @param string $filename
     * @return self
     */
    public function setFilename($filename)
    {
        $this->filename = $filename;
        return $this;
    }

    /**
     * Gets as recipient
     *
     * @return string
     */
    public function getRecipient()
    {
        return $this->recipient;
    }

    /**
     * Sets a new recipient
     *
     * @param string $recipient
     * @return self
     */
    public function setRecipient($recipient)
    {
        $this->recipient = $recipient;
        return $this;
    }

    /**
     * Gets as fileAcceptance
     *
     * @return string
     */
    public function getFileAcceptance()
    {
        return $this->fileAcceptance;
    }

    /**
     * Sets a new fileAcceptance
     *
     * @param string $fileAcceptance
     * @return self
     */
    public function setFileAcceptance($fileAcceptance)
    {
        $this->fileAcceptance = $fileAcceptance;
        return $this;
    }

    /**
     * Gets as reason
     *
     * @return string
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * Sets a new reason
     *
     * @param string $reason
     * @return self
     */
    public function setReason($reason)
    {
        $this->reason = $reason;
        return $this;
    }
}

