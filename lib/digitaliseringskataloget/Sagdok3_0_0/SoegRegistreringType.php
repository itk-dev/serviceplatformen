<?php

namespace Digitaliseringskataloget\Sagdok3_0_0;

/**
 * Class representing SoegRegistreringType
 *
 *
 * XSD Type: SoegRegistreringType
 */
class SoegRegistreringType
{
    /**
     * @var \Digitaliseringskataloget\Sagdok3_0_0\FraTidspunkt $fraTidspunkt
     */
    private $fraTidspunkt = null;

    /**
     * @var \Digitaliseringskataloget\Sagdok3_0_0\TilTidspunkt $tilTidspunkt
     */
    private $tilTidspunkt = null;

    /**
     * @var string $livscyklusKode
     */
    private $livscyklusKode = null;

    /**
     * @var \Digitaliseringskataloget\Sagdok3_0_0\BrugerRef $brugerRef
     */
    private $brugerRef = null;

    /**
     * Gets as fraTidspunkt
     *
     * @return \Digitaliseringskataloget\Sagdok3_0_0\FraTidspunkt
     */
    public function getFraTidspunkt()
    {
        return $this->fraTidspunkt;
    }

    /**
     * Sets a new fraTidspunkt
     *
     * @param \Digitaliseringskataloget\Sagdok3_0_0\FraTidspunkt $fraTidspunkt
     * @return self
     */
    public function setFraTidspunkt(?\Digitaliseringskataloget\Sagdok3_0_0\FraTidspunkt $fraTidspunkt = null)
    {
        $this->fraTidspunkt = $fraTidspunkt;
        return $this;
    }

    /**
     * Gets as tilTidspunkt
     *
     * @return \Digitaliseringskataloget\Sagdok3_0_0\TilTidspunkt
     */
    public function getTilTidspunkt()
    {
        return $this->tilTidspunkt;
    }

    /**
     * Sets a new tilTidspunkt
     *
     * @param \Digitaliseringskataloget\Sagdok3_0_0\TilTidspunkt $tilTidspunkt
     * @return self
     */
    public function setTilTidspunkt(?\Digitaliseringskataloget\Sagdok3_0_0\TilTidspunkt $tilTidspunkt = null)
    {
        $this->tilTidspunkt = $tilTidspunkt;
        return $this;
    }

    /**
     * Gets as livscyklusKode
     *
     * @return string
     */
    public function getLivscyklusKode()
    {
        return $this->livscyklusKode;
    }

    /**
     * Sets a new livscyklusKode
     *
     * @param string $livscyklusKode
     * @return self
     */
    public function setLivscyklusKode($livscyklusKode)
    {
        $this->livscyklusKode = $livscyklusKode;
        return $this;
    }

    /**
     * Gets as brugerRef
     *
     * @return \Digitaliseringskataloget\Sagdok3_0_0\BrugerRef
     */
    public function getBrugerRef()
    {
        return $this->brugerRef;
    }

    /**
     * Sets a new brugerRef
     *
     * @param \Digitaliseringskataloget\Sagdok3_0_0\BrugerRef $brugerRef
     * @return self
     */
    public function setBrugerRef(?\Digitaliseringskataloget\Sagdok3_0_0\BrugerRef $brugerRef = null)
    {
        $this->brugerRef = $brugerRef;
        return $this;
    }
}

