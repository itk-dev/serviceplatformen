<?php

namespace Digitaliseringskataloget\SF1500\Organisation6\Organisation;

use Digitaliseringskataloget\Sagdok3_0_0\SoegInputType as SoegInputTypeBase;

/**
 * Class representing SoegInputType
 *
 *
 * XSD Type: SoegInputType
 */
class SoegInputType extends SoegInputTypeBase
{
    /**
     * @var \Digitaliseringskataloget\SF1500\Organisation6\Organisation\AttributListe $attributListe
     */
    private $attributListe = null;

    /**
     * @var \Digitaliseringskataloget\SF1500\Organisation6\Organisation\TilstandListe $tilstandListe
     */
    private $tilstandListe = null;

    /**
     * @var \Digitaliseringskataloget\SF1500\Organisation6\Organisation\RelationListe $relationListe
     */
    private $relationListe = null;

    /**
     * Gets as attributListe
     *
     * @return \Digitaliseringskataloget\SF1500\Organisation6\Organisation\AttributListe
     */
    public function getAttributListe()
    {
        return $this->attributListe;
    }

    /**
     * Sets a new attributListe
     *
     * @param \Digitaliseringskataloget\SF1500\Organisation6\Organisation\AttributListe $attributListe
     * @return self
     */
    public function setAttributListe(\Digitaliseringskataloget\SF1500\Organisation6\Organisation\AttributListe $attributListe)
    {
        $this->attributListe = $attributListe;
        return $this;
    }

    /**
     * Gets as tilstandListe
     *
     * @return \Digitaliseringskataloget\SF1500\Organisation6\Organisation\TilstandListe
     */
    public function getTilstandListe()
    {
        return $this->tilstandListe;
    }

    /**
     * Sets a new tilstandListe
     *
     * @param \Digitaliseringskataloget\SF1500\Organisation6\Organisation\TilstandListe $tilstandListe
     * @return self
     */
    public function setTilstandListe(\Digitaliseringskataloget\SF1500\Organisation6\Organisation\TilstandListe $tilstandListe)
    {
        $this->tilstandListe = $tilstandListe;
        return $this;
    }

    /**
     * Gets as relationListe
     *
     * @return \Digitaliseringskataloget\SF1500\Organisation6\Organisation\RelationListe
     */
    public function getRelationListe()
    {
        return $this->relationListe;
    }

    /**
     * Sets a new relationListe
     *
     * @param \Digitaliseringskataloget\SF1500\Organisation6\Organisation\RelationListe $relationListe
     * @return self
     */
    public function setRelationListe(\Digitaliseringskataloget\SF1500\Organisation6\Organisation\RelationListe $relationListe)
    {
        $this->relationListe = $relationListe;
        return $this;
    }
}

