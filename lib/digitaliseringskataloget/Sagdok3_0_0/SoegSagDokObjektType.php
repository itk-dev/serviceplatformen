<?php

namespace Digitaliseringskataloget\Sagdok3_0_0;

/**
 * Class representing SoegSagDokObjektType
 *
 *
 * XSD Type: SoegSagDokObjektType
 */
class SoegSagDokObjektType
{
    /**
     * @var string $uUIDIdentifikator
     */
    private $uUIDIdentifikator = null;

    /**
     * @var \Digitaliseringskataloget\Sagdok3_0_0\SoegRegistrering $soegRegistrering
     */
    private $soegRegistrering = null;

    /**
     * @var \Digitaliseringskataloget\Sagdok3_0_0\SoegVirkning $soegVirkning
     */
    private $soegVirkning = null;

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
     * Gets as soegRegistrering
     *
     * @return \Digitaliseringskataloget\Sagdok3_0_0\SoegRegistrering
     */
    public function getSoegRegistrering()
    {
        return $this->soegRegistrering;
    }

    /**
     * Sets a new soegRegistrering
     *
     * @param \Digitaliseringskataloget\Sagdok3_0_0\SoegRegistrering $soegRegistrering
     * @return self
     */
    public function setSoegRegistrering(?\Digitaliseringskataloget\Sagdok3_0_0\SoegRegistrering $soegRegistrering = null)
    {
        $this->soegRegistrering = $soegRegistrering;
        return $this;
    }

    /**
     * Gets as soegVirkning
     *
     * @return \Digitaliseringskataloget\Sagdok3_0_0\SoegVirkning
     */
    public function getSoegVirkning()
    {
        return $this->soegVirkning;
    }

    /**
     * Sets a new soegVirkning
     *
     * @param \Digitaliseringskataloget\Sagdok3_0_0\SoegVirkning $soegVirkning
     * @return self
     */
    public function setSoegVirkning(?\Digitaliseringskataloget\Sagdok3_0_0\SoegVirkning $soegVirkning = null)
    {
        $this->soegVirkning = $soegVirkning;
        return $this;
    }
}

