<?php

namespace Digitaliseringskataloget\SF1500\Organisation6\Virksomhed;

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
     * @var string $cVRNummerTekst
     */
    private $cVRNummerTekst = null;

    /**
     * @var string $sENummerTekst
     */
    private $sENummerTekst = null;

    /**
     * @var string $pNummerTekst
     */
    private $pNummerTekst = null;

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
     * Gets as cVRNummerTekst
     *
     * @return string
     */
    public function getCVRNummerTekst()
    {
        return $this->cVRNummerTekst;
    }

    /**
     * Sets a new cVRNummerTekst
     *
     * @param string $cVRNummerTekst
     * @return self
     */
    public function setCVRNummerTekst($cVRNummerTekst)
    {
        $this->cVRNummerTekst = $cVRNummerTekst;
        return $this;
    }

    /**
     * Gets as sENummerTekst
     *
     * @return string
     */
    public function getSENummerTekst()
    {
        return $this->sENummerTekst;
    }

    /**
     * Sets a new sENummerTekst
     *
     * @param string $sENummerTekst
     * @return self
     */
    public function setSENummerTekst($sENummerTekst)
    {
        $this->sENummerTekst = $sENummerTekst;
        return $this;
    }

    /**
     * Gets as pNummerTekst
     *
     * @return string
     */
    public function getPNummerTekst()
    {
        return $this->pNummerTekst;
    }

    /**
     * Sets a new pNummerTekst
     *
     * @param string $pNummerTekst
     * @return self
     */
    public function setPNummerTekst($pNummerTekst)
    {
        $this->pNummerTekst = $pNummerTekst;
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

