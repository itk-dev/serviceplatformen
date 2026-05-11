<?php

namespace Digitaliseringskataloget\Sftp;

/**
 * Class representing FileDescriptorType
 *
 *
 * XSD Type: FileDescriptorType
 */
class FileDescriptorType
{
    /**
     * @var string $fileName
     */
    private $fileName = null;

    /**
     * @var int $sizeInBytes
     */
    private $sizeInBytes = null;

    /**
     * @var string $sender
     */
    private $sender = null;

    /**
     * @var string $sendersFileId
     */
    private $sendersFileId = null;

    /**
     * @var string[] $recipients
     */
    private $recipients = [
        
    ];

    /**
     * Gets as fileName
     *
     * @return string
     */
    public function getFileName()
    {
        return $this->fileName;
    }

    /**
     * Sets a new fileName
     *
     * @param string $fileName
     * @return self
     */
    public function setFileName($fileName)
    {
        $this->fileName = $fileName;
        return $this;
    }

    /**
     * Gets as sizeInBytes
     *
     * @return int
     */
    public function getSizeInBytes()
    {
        return $this->sizeInBytes;
    }

    /**
     * Sets a new sizeInBytes
     *
     * @param int $sizeInBytes
     * @return self
     */
    public function setSizeInBytes($sizeInBytes)
    {
        $this->sizeInBytes = $sizeInBytes;
        return $this;
    }

    /**
     * Gets as sender
     *
     * @return string
     */
    public function getSender()
    {
        return $this->sender;
    }

    /**
     * Sets a new sender
     *
     * @param string $sender
     * @return self
     */
    public function setSender($sender)
    {
        $this->sender = $sender;
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
     * Adds as recipients
     *
     * @return self
     * @param string $recipients
     */
    public function addToRecipients($recipients)
    {
        $this->recipients[] = $recipients;
        return $this;
    }

    /**
     * isset recipients
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRecipients($index)
    {
        return isset($this->recipients[$index]);
    }

    /**
     * unset recipients
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRecipients($index)
    {
        unset($this->recipients[$index]);
    }

    /**
     * Gets as recipients
     *
     * @return string[]
     */
    public function getRecipients()
    {
        return $this->recipients;
    }

    /**
     * Sets a new recipients
     *
     * @param string $recipients
     * @return self
     */
    public function setRecipients(array $recipients)
    {
        $this->recipients = $recipients;
        return $this;
    }
}

