<?php

namespace Digitaliseringskataloget\Sagdok3_0_0;

/**
 * Class representing OffentlighedUndtagetType
 *
 *
 * XSD Type: OffentlighedUndtagetType
 */
class OffentlighedUndtagetType
{
    /**
     * @var string $titelAlternativTekst
     */
    private $titelAlternativTekst = null;

    /**
     * @var string $offentlighedUndtagetHjemmelTekst
     */
    private $offentlighedUndtagetHjemmelTekst = null;

    /**
     * Gets as titelAlternativTekst
     *
     * @return string
     */
    public function getTitelAlternativTekst()
    {
        return $this->titelAlternativTekst;
    }

    /**
     * Sets a new titelAlternativTekst
     *
     * @param string $titelAlternativTekst
     * @return self
     */
    public function setTitelAlternativTekst($titelAlternativTekst)
    {
        $this->titelAlternativTekst = $titelAlternativTekst;
        return $this;
    }

    /**
     * Gets as offentlighedUndtagetHjemmelTekst
     *
     * @return string
     */
    public function getOffentlighedUndtagetHjemmelTekst()
    {
        return $this->offentlighedUndtagetHjemmelTekst;
    }

    /**
     * Sets a new offentlighedUndtagetHjemmelTekst
     *
     * @param string $offentlighedUndtagetHjemmelTekst
     * @return self
     */
    public function setOffentlighedUndtagetHjemmelTekst($offentlighedUndtagetHjemmelTekst)
    {
        $this->offentlighedUndtagetHjemmelTekst = $offentlighedUndtagetHjemmelTekst;
        return $this;
    }
}

