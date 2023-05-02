<?php

namespace Digitaliseringskataloget\SF1500\Organisation6\Itsystem;

/**
 * Class representing EgenskabType
 *
 *
 * XSD Type: EgenskabType
 */
class EgenskabType
{
    /**
     * @var \Digitaliseringskataloget\Sagdok3_0_0\Virkning $virkning
     */
    private $virkning = null;

    /**
     * @var string $brugervendtNoegleTekst
     */
    private $brugervendtNoegleTekst = null;

    /**
     * @var string $itSystemNavn
     */
    private $itSystemNavn = null;

    /**
     * @var string $itSystemTypeTekst
     */
    private $itSystemTypeTekst = null;

    /**
     * @var string[] $konfigurationReference
     */
    private $konfigurationReference = [
        
    ];

    /**
     * Gets as virkning
     *
     * @return \Digitaliseringskataloget\Sagdok3_0_0\Virkning
     */
    public function getVirkning()
    {
        return $this->virkning;
    }

    /**
     * Sets a new virkning
     *
     * @param \Digitaliseringskataloget\Sagdok3_0_0\Virkning $virkning
     * @return self
     */
    public function setVirkning(?\Digitaliseringskataloget\Sagdok3_0_0\Virkning $virkning = null)
    {
        $this->virkning = $virkning;
        return $this;
    }

    /**
     * Gets as brugervendtNoegleTekst
     *
     * @return string
     */
    public function getBrugervendtNoegleTekst()
    {
        return $this->brugervendtNoegleTekst;
    }

    /**
     * Sets a new brugervendtNoegleTekst
     *
     * @param string $brugervendtNoegleTekst
     * @return self
     */
    public function setBrugervendtNoegleTekst($brugervendtNoegleTekst)
    {
        $this->brugervendtNoegleTekst = $brugervendtNoegleTekst;
        return $this;
    }

    /**
     * Gets as itSystemNavn
     *
     * @return string
     */
    public function getItSystemNavn()
    {
        return $this->itSystemNavn;
    }

    /**
     * Sets a new itSystemNavn
     *
     * @param string $itSystemNavn
     * @return self
     */
    public function setItSystemNavn($itSystemNavn)
    {
        $this->itSystemNavn = $itSystemNavn;
        return $this;
    }

    /**
     * Gets as itSystemTypeTekst
     *
     * @return string
     */
    public function getItSystemTypeTekst()
    {
        return $this->itSystemTypeTekst;
    }

    /**
     * Sets a new itSystemTypeTekst
     *
     * @param string $itSystemTypeTekst
     * @return self
     */
    public function setItSystemTypeTekst($itSystemTypeTekst)
    {
        $this->itSystemTypeTekst = $itSystemTypeTekst;
        return $this;
    }

    /**
     * Adds as konfigurationReference
     *
     * @return self
     * @param string $konfigurationReference
     */
    public function addToKonfigurationReference($konfigurationReference)
    {
        $this->konfigurationReference[] = $konfigurationReference;
        return $this;
    }

    /**
     * isset konfigurationReference
     *
     * @param int|string $index
     * @return bool
     */
    public function issetKonfigurationReference($index)
    {
        return isset($this->konfigurationReference[$index]);
    }

    /**
     * unset konfigurationReference
     *
     * @param int|string $index
     * @return void
     */
    public function unsetKonfigurationReference($index)
    {
        unset($this->konfigurationReference[$index]);
    }

    /**
     * Gets as konfigurationReference
     *
     * @return string[]
     */
    public function getKonfigurationReference()
    {
        return $this->konfigurationReference;
    }

    /**
     * Sets a new konfigurationReference
     *
     * @param string $konfigurationReference
     * @return self
     */
    public function setKonfigurationReference(array $konfigurationReference = null)
    {
        $this->konfigurationReference = $konfigurationReference;
        return $this;
    }
}

