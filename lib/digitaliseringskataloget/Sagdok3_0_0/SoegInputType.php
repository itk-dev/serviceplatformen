<?php

namespace Digitaliseringskataloget\Sagdok3_0_0;

/**
 * Class representing SoegInputType
 *
 *
 * XSD Type: SoegInputType
 */
class SoegInputType
{
    /**
     * @var int $foersteResultatReference
     */
    private $foersteResultatReference = null;

    /**
     * @var int $maksimalAntalKvantitet
     */
    private $maksimalAntalKvantitet = null;

    /**
     * @var \Digitaliseringskataloget\Sagdok3_0_0\SoegRegistrering $soegRegistrering
     */
    private $soegRegistrering = null;

    /**
     * @var \Digitaliseringskataloget\Sagdok3_0_0\SoegVirkning $soegVirkning
     */
    private $soegVirkning = null;

    /**
     * Gets as foersteResultatReference
     *
     * @return int
     */
    public function getFoersteResultatReference()
    {
        return $this->foersteResultatReference;
    }

    /**
     * Sets a new foersteResultatReference
     *
     * @param int $foersteResultatReference
     * @return self
     */
    public function setFoersteResultatReference($foersteResultatReference)
    {
        $this->foersteResultatReference = $foersteResultatReference;
        return $this;
    }

    /**
     * Gets as maksimalAntalKvantitet
     *
     * @return int
     */
    public function getMaksimalAntalKvantitet()
    {
        return $this->maksimalAntalKvantitet;
    }

    /**
     * Sets a new maksimalAntalKvantitet
     *
     * @param int $maksimalAntalKvantitet
     * @return self
     */
    public function setMaksimalAntalKvantitet($maksimalAntalKvantitet)
    {
        $this->maksimalAntalKvantitet = $maksimalAntalKvantitet;
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

