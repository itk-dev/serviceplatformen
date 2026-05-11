<?php

namespace Digitaliseringskataloget\Sftp;

/**
 * Class representing FileContentDescriptorType
 *
 *
 * XSD Type: FileContentDescriptorType
 */
class FileContentDescriptorType
{
    /**
     * @var \Digitaliseringskataloget\Sftp\SFTPDynamicRoutingInfoType $sFTPDynamicRoutingInfo
     */
    private $sFTPDynamicRoutingInfo = null;

    /**
     * Gets as sFTPDynamicRoutingInfo
     *
     * @return \Digitaliseringskataloget\Sftp\SFTPDynamicRoutingInfoType
     */
    public function getSFTPDynamicRoutingInfo()
    {
        return $this->sFTPDynamicRoutingInfo;
    }

    /**
     * Sets a new sFTPDynamicRoutingInfo
     *
     * @param \Digitaliseringskataloget\Sftp\SFTPDynamicRoutingInfoType $sFTPDynamicRoutingInfo
     * @return self
     */
    public function setSFTPDynamicRoutingInfo(?\Digitaliseringskataloget\Sftp\SFTPDynamicRoutingInfoType $sFTPDynamicRoutingInfo = null)
    {
        $this->sFTPDynamicRoutingInfo = $sFTPDynamicRoutingInfo;
        return $this;
    }
}

