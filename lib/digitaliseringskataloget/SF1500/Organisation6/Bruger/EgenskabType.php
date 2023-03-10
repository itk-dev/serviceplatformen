<?php

namespace Digitaliseringskataloget\SF1500\Organisation6\Bruger;

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
     * @var string $brugerNavn
     */
    private $brugerNavn = null;

    /**
     * @var string $brugerTypeTekst
     */
    private $brugerTypeTekst = null;

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
     * Gets as brugerNavn
     *
     * @return string
     */
    public function getBrugerNavn()
    {
        return $this->brugerNavn;
    }

    /**
     * Sets a new brugerNavn
     *
     * @param string $brugerNavn
     * @return self
     */
    public function setBrugerNavn($brugerNavn)
    {
        $this->brugerNavn = $brugerNavn;
        return $this;
    }

    /**
     * Gets as brugerTypeTekst
     *
     * @return string
     */
    public function getBrugerTypeTekst()
    {
        return $this->brugerTypeTekst;
    }

    /**
     * Sets a new brugerTypeTekst
     *
     * @param string $brugerTypeTekst
     * @return self
     */
    public function setBrugerTypeTekst($brugerTypeTekst)
    {
        $this->brugerTypeTekst = $brugerTypeTekst;
        return $this;
    }
}

