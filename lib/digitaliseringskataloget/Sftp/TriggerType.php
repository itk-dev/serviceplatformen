<?php

namespace Digitaliseringskataloget\Sftp;

/**
 * Class representing TriggerType
 *
 *
 * XSD Type: TriggerType
 */
class TriggerType
{
    /**
     * @var \Digitaliseringskataloget\Sftp\FileDescriptorType $fileDescriptor
     */
    private $fileDescriptor = null;

    /**
     * @var \Digitaliseringskataloget\Sftp\FileContentDescriptorType $fileContentDescriptor
     */
    private $fileContentDescriptor = null;

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

