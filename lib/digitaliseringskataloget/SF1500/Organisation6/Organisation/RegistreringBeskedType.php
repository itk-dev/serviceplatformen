<?php

namespace Digitaliseringskataloget\SF1500\Organisation6\Organisation;

/**
 * Class representing RegistreringBeskedType
 *
 *
 * XSD Type: RegistreringBeskedType
 */
class RegistreringBeskedType
{
    /**
     * @var \Digitaliseringskataloget\Sagdok3_0_0\UnikIdType $objektID
     */
    private $objektID = null;

    /**
     * @var \Digitaliseringskataloget\SF1500\Organisation6\Organisation\Registrering $registrering
     */
    private $registrering = null;

    /**
     * Gets as objektID
     *
     * @return \Digitaliseringskataloget\Sagdok3_0_0\UnikIdType
     */
    public function getObjektID()
    {
        return $this->objektID;
    }

    /**
     * Sets a new objektID
     *
     * @param \Digitaliseringskataloget\Sagdok3_0_0\UnikIdType $objektID
     * @return self
     */
    public function setObjektID(\Digitaliseringskataloget\Sagdok3_0_0\UnikIdType $objektID)
    {
        $this->objektID = $objektID;
        return $this;
    }

    /**
     * Gets as registrering
     *
     * @return \Digitaliseringskataloget\SF1500\Organisation6\Organisation\Registrering
     */
    public function getRegistrering()
    {
        return $this->registrering;
    }

    /**
     * Sets a new registrering
     *
     * @param \Digitaliseringskataloget\SF1500\Organisation6\Organisation\Registrering $registrering
     * @return self
     */
    public function setRegistrering(\Digitaliseringskataloget\SF1500\Organisation6\Organisation\Registrering $registrering)
    {
        $this->registrering = $registrering;
        return $this;
    }
}

