<?php

namespace Digitaliseringskataloget\SF1500\Organisation6\Facet;

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
     * @var \Digitaliseringskataloget\Sagdok3_0_0\FacetTilhoerer $facetTilhoerer
     */
    private $facetTilhoerer = null;

    /**
     * @var \Digitaliseringskataloget\Sagdok3_0_0\Redaktoerer[] $redaktoerer
     */
    private $redaktoerer = [
        
    ];

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

    /**
     * Gets as facetTilhoerer
     *
     * @return \Digitaliseringskataloget\Sagdok3_0_0\FacetTilhoerer
     */
    public function getFacetTilhoerer()
    {
        return $this->facetTilhoerer;
    }

    /**
     * Sets a new facetTilhoerer
     *
     * @param \Digitaliseringskataloget\Sagdok3_0_0\FacetTilhoerer $facetTilhoerer
     * @return self
     */
    public function setFacetTilhoerer(?\Digitaliseringskataloget\Sagdok3_0_0\FacetTilhoerer $facetTilhoerer = null)
    {
        $this->facetTilhoerer = $facetTilhoerer;
        return $this;
    }

    /**
     * Adds as redaktoerer
     *
     * @return self
     * @param \Digitaliseringskataloget\Sagdok3_0_0\Redaktoerer $redaktoerer
     */
    public function addToRedaktoerer(\Digitaliseringskataloget\Sagdok3_0_0\Redaktoerer $redaktoerer)
    {
        $this->redaktoerer[] = $redaktoerer;
        return $this;
    }

    /**
     * isset redaktoerer
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRedaktoerer($index)
    {
        return isset($this->redaktoerer[$index]);
    }

    /**
     * unset redaktoerer
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRedaktoerer($index)
    {
        unset($this->redaktoerer[$index]);
    }

    /**
     * Gets as redaktoerer
     *
     * @return \Digitaliseringskataloget\Sagdok3_0_0\Redaktoerer[]
     */
    public function getRedaktoerer()
    {
        return $this->redaktoerer;
    }

    /**
     * Sets a new redaktoerer
     *
     * @param \Digitaliseringskataloget\Sagdok3_0_0\Redaktoerer[] $redaktoerer
     * @return self
     */
    public function setRedaktoerer(array $redaktoerer = null)
    {
        $this->redaktoerer = $redaktoerer;
        return $this;
    }
}

