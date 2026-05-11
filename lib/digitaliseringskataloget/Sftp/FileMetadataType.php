<?php

namespace Digitaliseringskataloget\Sftp;

/**
 * Class representing FileMetadataType
 *
 *
 * XSD Type: FileMetadataType
 */
class FileMetadataType
{
    /**
     * @var string $fileTransferUUID
     */
    private $fileTransferUUID = null;

    /**
     * @var \Digitaliseringskataloget\Sftp\FileDescriptorType $fileDescriptor
     */
    private $fileDescriptor = null;

    /**
     * @var \Digitaliseringskataloget\Sftp\FileContentDescriptorType $fileContentDescriptor
     */
    private $fileContentDescriptor = null;

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
     * Gets as fileDescriptor
     *
     * @return \Digitaliseringskataloget\Sftp\FileDescriptorType
     */
    public function getFileDescriptor()
    {
        return $this->fileDescriptor;
    }

    /**
     * Sets a new fileDescriptor
     *
     * @param \Digitaliseringskataloget\Sftp\FileDescriptorType $fileDescriptor
     * @return self
     */
    public function setFileDescriptor(\Digitaliseringskataloget\Sftp\FileDescriptorType $fileDescriptor)
    {
        $this->fileDescriptor = $fileDescriptor;
        return $this;
    }

    /**
     * Gets as fileContentDescriptor
     *
     * @return \Digitaliseringskataloget\Sftp\FileContentDescriptorType
     */
    public function getFileContentDescriptor()
    {
        return $this->fileContentDescriptor;
    }

    /**
     * Sets a new fileContentDescriptor
     *
     * @param \Digitaliseringskataloget\Sftp\FileContentDescriptorType $fileContentDescriptor
     * @return self
     */
    public function setFileContentDescriptor(\Digitaliseringskataloget\Sftp\FileContentDescriptorType $fileContentDescriptor)
    {
        $this->fileContentDescriptor = $fileContentDescriptor;
        return $this;
    }
}

