<?php

namespace Digitaliseringskataloget\SF1500\Organisation6\Organisationfunktion;

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
     * @var string $funktionNavn
     */
    private $funktionNavn = null;

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
     * Gets as funktionNavn
     *
     * @return string
     */
    public function getFunktionNavn()
    {
        return $this->funktionNavn;
    }

    /**
     * Sets a new funktionNavn
     *
     * @param string $funktionNavn
     * @return self
     */
    public function setFunktionNavn($funktionNavn)
    {
        $this->funktionNavn = $funktionNavn;
        return $this;
    }
}

