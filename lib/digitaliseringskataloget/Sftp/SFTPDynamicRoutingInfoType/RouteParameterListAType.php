<?php

namespace Digitaliseringskataloget\Sftp\SFTPDynamicRoutingInfoType;

/**
 * Class representing RouteParameterListAType
 */
class RouteParameterListAType
{
    /**
     * Supplerende parameter der anvendes i routing, når routing er konfigureret til det.
     * Hvis der skal anvendes en RouteParameter, er det defineret specifikt for den enkelte integration.
     *
     * @var \Digitaliseringskataloget\Sftp\RouteParameterType[] $routeParameter
     */
    private $routeParameter = [
        
    ];

    /**
     * Adds as routeParameter
     *
     * Supplerende parameter der anvendes i routing, når routing er konfigureret til det.
     * Hvis der skal anvendes en RouteParameter, er det defineret specifikt for den enkelte integration.
     *
     * @return self
     * @param \Digitaliseringskataloget\Sftp\RouteParameterType $routeParameter
     */
    public function addToRouteParameter(\Digitaliseringskataloget\Sftp\RouteParameterType $routeParameter)
    {
        $this->routeParameter[] = $routeParameter;
        return $this;
    }

    /**
     * isset routeParameter
     *
     * Supplerende parameter der anvendes i routing, når routing er konfigureret til det.
     * Hvis der skal anvendes en RouteParameter, er det defineret specifikt for den enkelte integration.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRouteParameter($index)
    {
        return isset($this->routeParameter[$index]);
    }

    /**
     * unset routeParameter
     *
     * Supplerende parameter der anvendes i routing, når routing er konfigureret til det.
     * Hvis der skal anvendes en RouteParameter, er det defineret specifikt for den enkelte integration.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRouteParameter($index)
    {
        unset($this->routeParameter[$index]);
    }

    /**
     * Gets as routeParameter
     *
     * Supplerende parameter der anvendes i routing, når routing er konfigureret til det.
     * Hvis der skal anvendes en RouteParameter, er det defineret specifikt for den enkelte integration.
     *
     * @return \Digitaliseringskataloget\Sftp\RouteParameterType[]
     */
    public function getRouteParameter()
    {
        return $this->routeParameter;
    }

    /**
     * Sets a new routeParameter
     *
     * Supplerende parameter der anvendes i routing, når routing er konfigureret til det.
     * Hvis der skal anvendes en RouteParameter, er det defineret specifikt for den enkelte integration.
     *
     * @param \Digitaliseringskataloget\Sftp\RouteParameterType[] $routeParameter
     * @return self
     */
    public function setRouteParameter(array $routeParameter)
    {
        $this->routeParameter = $routeParameter;
        return $this;
    }
}

