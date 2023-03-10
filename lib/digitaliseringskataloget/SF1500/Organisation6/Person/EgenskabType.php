<?php

namespace Digitaliseringskataloget\SF1500\Organisation6\Person;

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
     * @var string $cPRNummerTekst
     */
    private $cPRNummerTekst = null;

    /**
     * @var string $navnTekst
     */
    private $navnTekst = null;

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
     * Gets as cPRNummerTekst
     *
     * @return string
     */
    public function getCPRNummerTekst()
    {
        return $this->cPRNummerTekst;
    }

    /**
     * Sets a new cPRNummerTekst
     *
     * @param string $cPRNummerTekst
     * @return self
     */
    public function setCPRNummerTekst($cPRNummerTekst)
    {
        $this->cPRNummerTekst = $cPRNummerTekst;
        return $this;
    }

    /**
     * Gets as navnTekst
     *
     * @return string
     */
    public function getNavnTekst()
    {
        return $this->navnTekst;
    }

    /**
     * Sets a new navnTekst
     *
     * @param string $navnTekst
     * @return self
     */
    public function setNavnTekst($navnTekst)
    {
        $this->navnTekst = $navnTekst;
        return $this;
    }
}

