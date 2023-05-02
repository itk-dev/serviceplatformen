<?php

namespace Digitaliseringskataloget\Sagdok3_0_0;

/**
 * Class representing SoegVirkningType
 *
 *
 * XSD Type: SoegVirkningType
 */
class SoegVirkningType
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
     * @var \Digitaliseringskataloget\Sagdok3_0_0\AktoerRef $aktoerRef
     */
    private $aktoerRef = null;

    /**
     * @var string $aktoerTypeKode
     */
    private $aktoerTypeKode = null;

    /**
     * @var string $noteTekst
     */
    private $noteTekst = null;

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
     * Gets as aktoerRef
     *
     * @return \Digitaliseringskataloget\Sagdok3_0_0\AktoerRef
     */
    public function getAktoerRef()
    {
        return $this->aktoerRef;
    }

    /**
     * Sets a new aktoerRef
     *
     * @param \Digitaliseringskataloget\Sagdok3_0_0\AktoerRef $aktoerRef
     * @return self
     */
    public function setAktoerRef(?\Digitaliseringskataloget\Sagdok3_0_0\AktoerRef $aktoerRef = null)
    {
        $this->aktoerRef = $aktoerRef;
        return $this;
    }

    /**
     * Gets as aktoerTypeKode
     *
     * @return string
     */
    public function getAktoerTypeKode()
    {
        return $this->aktoerTypeKode;
    }

    /**
     * Sets a new aktoerTypeKode
     *
     * @param string $aktoerTypeKode
     * @return self
     */
    public function setAktoerTypeKode($aktoerTypeKode)
    {
        $this->aktoerTypeKode = $aktoerTypeKode;
        return $this;
    }

    /**
     * Gets as noteTekst
     *
     * @return string
     */
    public function getNoteTekst()
    {
        return $this->noteTekst;
    }

    /**
     * Sets a new noteTekst
     *
     * @param string $noteTekst
     * @return self
     */
    public function setNoteTekst($noteTekst)
    {
        $this->noteTekst = $noteTekst;
        return $this;
    }
}

