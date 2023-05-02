<?php

namespace Digitaliseringskataloget\SF1500\Organisation6\Virksomhed;

/**
 * Class representing RegistreringBeskedType
 *
 *
 * XSD Type: RegistreringBeskedType
 */
class RegistreringBeskedType
{
    /**
     * @var string $uUIDIdentifikator
     */
    private $uUIDIdentifikator = null;

    /**
     * @var \Digitaliseringskataloget\SF1500\Organisation6\Virksomhed\Registrering $registrering
     */
    private $registrering = null;

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
     * Gets as registrering
     *
     * @return \Digitaliseringskataloget\SF1500\Organisation6\Virksomhed\Registrering
     */
    public function getRegistrering()
    {
        return $this->registrering;
    }

    /**
     * Sets a new registrering
     *
     * @param \Digitaliseringskataloget\SF1500\Organisation6\Virksomhed\Registrering $registrering
     * @return self
     */
    public function setRegistrering(\Digitaliseringskataloget\SF1500\Organisation6\Virksomhed\Registrering $registrering)
    {
        $this->registrering = $registrering;
        return $this;
    }
}

