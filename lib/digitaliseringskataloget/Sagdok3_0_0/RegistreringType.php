<?php

namespace Digitaliseringskataloget\Sagdok3_0_0;

/**
 * Class representing RegistreringType
 *
 *
 * XSD Type: RegistreringType
 */
class RegistreringType
{
    /**
     * @var string $noteTekst
     */
    private $noteTekst = null;

    /**
     * @var \DateTime $tidspunkt
     */
    private $tidspunkt = null;

    /**
     * @var string $livscyklusKode
     */
    private $livscyklusKode = null;

    /**
     * @var \Digitaliseringskataloget\Sagdok3_0_0\BrugerRef $brugerRef
     */
    private $brugerRef = null;

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

    /**
     * Gets as tidspunkt
     *
     * @return \DateTime
     */
    public function getTidspunkt()
    {
        return $this->tidspunkt;
    }

    /**
     * Sets a new tidspunkt
     *
     * @param \DateTime $tidspunkt
     * @return self
     */
    public function setTidspunkt(?\DateTime $tidspunkt = null)
    {
        $this->tidspunkt = $tidspunkt;
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

