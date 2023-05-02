<?php

namespace Digitaliseringskataloget\SF1500\Organisation6\Klassifikation;

/**
 * Class representing RelationListeType
 *
 *
 * XSD Type: RelationListeType
 */
class RelationListeType
{
    /**
     * @var \Digitaliseringskataloget\Sagdok3_0_0\Ansvarlig $ansvarlig
     */
    private $ansvarlig = null;

    /**
     * @var \Digitaliseringskataloget\Sagdok3_0_0\Ejer $ejer
     */
    private $ejer = null;

    /**
     * Gets as ansvarlig
     *
     * @return \Digitaliseringskataloget\Sagdok3_0_0\Ansvarlig
     */
    public function getAnsvarlig()
    {
        return $this->ansvarlig;
    }

    /**
     * Sets a new ansvarlig
     *
     * @param \Digitaliseringskataloget\Sagdok3_0_0\Ansvarlig $ansvarlig
     * @return self
     */
    public function setAnsvarlig(?\Digitaliseringskataloget\Sagdok3_0_0\Ansvarlig $ansvarlig = null)
    {
        $this->ansvarlig = $ansvarlig;
        return $this;
    }

    /**
     * Gets as ejer
     *
     * @return \Digitaliseringskataloget\Sagdok3_0_0\Ejer
     */
    public function getEjer()
    {
        return $this->ejer;
    }

    /**
     * Sets a new ejer
     *
     * @param \Digitaliseringskataloget\Sagdok3_0_0\Ejer $ejer
     * @return self
     */
    public function setEjer(?\Digitaliseringskataloget\Sagdok3_0_0\Ejer $ejer = null)
    {
        $this->ejer = $ejer;
        return $this;
    }
}

