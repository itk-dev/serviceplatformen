<?php

namespace Digitaliseringskataloget\Sftp;

/**
 * Class representing SFTPDynamicRoutingInfoType
 *
 *
 * XSD Type: SFTPDynamicRoutingInfoType
 */
class SFTPDynamicRoutingInfoType
{
    /**
     * @var string $infRef
     */
    private $infRef = null;

    /**
     * @var string $senderItSystem
     */
    private $senderItSystem = null;

    /**
     * @var string $senderAuthority
     */
    private $senderAuthority = null;

    /**
     * @var string $transactionId
     */
    private $transactionId = null;

    /**
     * @var \DateTime $senderTimestamp
     */
    private $senderTimestamp = null;

    /**
     * @var string $recipientItSystem
     */
    private $recipientItSystem = null;

    /**
     * @var string $recipientAuthority
     */
    private $recipientAuthority = null;

    /**
     * @var \Digitaliseringskataloget\Sftp\RouteParameterType[] $routeParameterList
     */
    private $routeParameterList = null;

    /**
     * Gets as infRef
     *
     * @return string
     */
    public function getInfRef()
    {
        return $this->infRef;
    }

    /**
     * Sets a new infRef
     *
     * @param string $infRef
     * @return self
     */
    public function setInfRef($infRef)
    {
        $this->infRef = $infRef;
        return $this;
    }

    /**
     * Gets as senderItSystem
     *
     * @return string
     */
    public function getSenderItSystem()
    {
        return $this->senderItSystem;
    }

    /**
     * Sets a new senderItSystem
     *
     * @param string $senderItSystem
     * @return self
     */
    public function setSenderItSystem($senderItSystem)
    {
        $this->senderItSystem = $senderItSystem;
        return $this;
    }

    /**
     * Gets as senderAuthority
     *
     * @return string
     */
    public function getSenderAuthority()
    {
        return $this->senderAuthority;
    }

    /**
     * Sets a new senderAuthority
     *
     * @param string $senderAuthority
     * @return self
     */
    public function setSenderAuthority($senderAuthority)
    {
        $this->senderAuthority = $senderAuthority;
        return $this;
    }

    /**
     * Gets as transactionId
     *
     * @return string
     */
    public function getTransactionId()
    {
        return $this->transactionId;
    }

    /**
     * Sets a new transactionId
     *
     * @param string $transactionId
     * @return self
     */
    public function setTransactionId($transactionId)
    {
        $this->transactionId = $transactionId;
        return $this;
    }

    /**
     * Gets as senderTimestamp
     *
     * @return \DateTime
     */
    public function getSenderTimestamp()
    {
        return $this->senderTimestamp;
    }

    /**
     * Sets a new senderTimestamp
     *
     * @param \DateTime $senderTimestamp
     * @return self
     */
    public function setSenderTimestamp(\DateTime $senderTimestamp)
    {
        $this->senderTimestamp = $senderTimestamp;
        return $this;
    }

    /**
     * Gets as recipientItSystem
     *
     * @return string
     */
    public function getRecipientItSystem()
    {
        return $this->recipientItSystem;
    }

    /**
     * Sets a new recipientItSystem
     *
     * @param string $recipientItSystem
     * @return self
     */
    public function setRecipientItSystem($recipientItSystem)
    {
        $this->recipientItSystem = $recipientItSystem;
        return $this;
    }

    /**
     * Gets as recipientAuthority
     *
     * @return string
     */
    public function getRecipientAuthority()
    {
        return $this->recipientAuthority;
    }

    /**
     * Sets a new recipientAuthority
     *
     * @param string $recipientAuthority
     * @return self
     */
    public function setRecipientAuthority($recipientAuthority)
    {
        $this->recipientAuthority = $recipientAuthority;
        return $this;
    }

    /**
     * Adds as routeParameter
     *
     * @return self
     * @param \Digitaliseringskataloget\Sftp\RouteParameterType $routeParameter
     */
    public function addToRouteParameterList(\Digitaliseringskataloget\Sftp\RouteParameterType $routeParameter)
    {
        $this->routeParameterList[] = $routeParameter;
        return $this;
    }

    /**
     * isset routeParameterList
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRouteParameterList($index)
    {
        return isset($this->routeParameterList[$index]);
    }

    /**
     * unset routeParameterList
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRouteParameterList($index)
    {
        unset($this->routeParameterList[$index]);
    }

    /**
     * Gets as routeParameterList
     *
     * @return \Digitaliseringskataloget\Sftp\RouteParameterType[]
     */
    public function getRouteParameterList()
    {
        return $this->routeParameterList;
    }

    /**
     * Sets a new routeParameterList
     *
     * @param \Digitaliseringskataloget\Sftp\RouteParameterType[] $routeParameterList
     * @return self
     */
    public function setRouteParameterList(?array $routeParameterList = null)
    {
        $this->routeParameterList = $routeParameterList;
        return $this;
    }
}

