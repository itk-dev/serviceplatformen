<?php

namespace Digitaliseringskataloget\Sagdok3_0_0;

/**
 * Class representing LaesInputType
 *
 *
 * XSD Type: LaesInputType
 */
class LaesInputType
{
    /**
     * @var string $uUIDIdentifikator
     */
    private $uUIDIdentifikator = null;

    /**
     * @var \Digitaliseringskataloget\Sagdok3_0_0\VirkningFraFilter $virkningFraFilter
     */
    private $virkningFraFilter = null;

    /**
     * @var \Digitaliseringskataloget\Sagdok3_0_0\VirkningTilFilter $virkningTilFilter
     */
    private $virkningTilFilter = null;

    /**
     * @var \Digitaliseringskataloget\Sagdok3_0_0\RegistreringFraFilter $registreringFraFilter
     */
    private $registreringFraFilter = null;

    /**
     * @var \Digitaliseringskataloget\Sagdok3_0_0\RegistreringTilFilter $registreringTilFilter
     */
    private $registreringTilFilter = null;

    /**
     * Gets as uUIDIdentifikator
     *
     * @return string
     */
    public function getUUIDIdentifikator()
    {
        return $this->uUIDIdentifikator;
    }

    /**
     * Sets a new uUIDIdentifikator
     *
     * @param string $uUIDIdentifikator
     * @return self
     */
    public function setUUIDIdentifikator($uUIDIdentifikator)
    {
        $this->uUIDIdentifikator = $uUIDIdentifikator;
        return $this;
    }

    /**
     * Gets as virkningFraFilter
     *
     * @return \Digitaliseringskataloget\Sagdok3_0_0\VirkningFraFilter
     */
    public function getVirkningFraFilter()
    {
        return $this->virkningFraFilter;
    }

    /**
     * Sets a new virkningFraFilter
     *
     * @param \Digitaliseringskataloget\Sagdok3_0_0\VirkningFraFilter $virkningFraFilter
     * @return self
     */
    public function setVirkningFraFilter(?\Digitaliseringskataloget\Sagdok3_0_0\VirkningFraFilter $virkningFraFilter = null)
    {
        $this->virkningFraFilter = $virkningFraFilter;
        return $this;
    }

    /**
     * Gets as virkningTilFilter
     *
     * @return \Digitaliseringskataloget\Sagdok3_0_0\VirkningTilFilter
     */
    public function getVirkningTilFilter()
    {
        return $this->virkningTilFilter;
    }

    /**
     * Sets a new virkningTilFilter
     *
     * @param \Digitaliseringskataloget\Sagdok3_0_0\VirkningTilFilter $virkningTilFilter
     * @return self
     */
    public function setVirkningTilFilter(?\Digitaliseringskataloget\Sagdok3_0_0\VirkningTilFilter $virkningTilFilter = null)
    {
        $this->virkningTilFilter = $virkningTilFilter;
        return $this;
    }

    /**
     * Gets as registreringFraFilter
     *
     * @return \Digitaliseringskataloget\Sagdok3_0_0\RegistreringFraFilter
     */
    public function getRegistreringFraFilter()
    {
        return $this->registreringFraFilter;
    }

    /**
     * Sets a new registreringFraFilter
     *
     * @param \Digitaliseringskataloget\Sagdok3_0_0\RegistreringFraFilter $registreringFraFilter
     * @return self
     */
    public function setRegistreringFraFilter(?\Digitaliseringskataloget\Sagdok3_0_0\RegistreringFraFilter $registreringFraFilter = null)
    {
        $this->registreringFraFilter = $registreringFraFilter;
        return $this;
    }

    /**
     * Gets as registreringTilFilter
     *
     * @return \Digitaliseringskataloget\Sagdok3_0_0\RegistreringTilFilter
     */
    public function getRegistreringTilFilter()
    {
        return $this->registreringTilFilter;
    }

    /**
     * Sets a new registreringTilFilter
     *
     * @param \Digitaliseringskataloget\Sagdok3_0_0\RegistreringTilFilter $registreringTilFilter
     * @return self
     */
    public function setRegistreringTilFilter(?\Digitaliseringskataloget\Sagdok3_0_0\RegistreringTilFilter $registreringTilFilter = null)
    {
        $this->registreringTilFilter = $registreringTilFilter;
        return $this;
    }
}

