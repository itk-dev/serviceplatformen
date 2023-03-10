<?php

namespace Digitaliseringskataloget\SF1500\Organisation6\Organisationfunktion;

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
     * @var \Digitaliseringskataloget\SF1500\Organisation6\Organisationfunktion\AttributListe $attributListe
     */
    private $attributListe = null;

    /**
     * @var \Digitaliseringskataloget\SF1500\Organisation6\Organisationfunktion\TilstandListe $tilstandListe
     */
    private $tilstandListe = null;

    /**
     * @var \Digitaliseringskataloget\SF1500\Organisation6\Organisationfunktion\RelationListe $relationListe
     */
    private $relationListe = null;

    /**
     * Gets as attributListe
     *
     * @return \Digitaliseringskataloget\SF1500\Organisation6\Organisationfunktion\AttributListe
     */
    public function getAttributListe()
    {
        return $this->attributListe;
    }

    /**
     * Sets a new attributListe
     *
     * @param \Digitaliseringskataloget\SF1500\Organisation6\Organisationfunktion\AttributListe $attributListe
     * @return self
     */
    public function setAttributListe(\Digitaliseringskataloget\SF1500\Organisation6\Organisationfunktion\AttributListe $attributListe)
    {
        $this->attributListe = $attributListe;
        return $this;
    }

    /**
     * Gets as tilstandListe
     *
     * @return \Digitaliseringskataloget\SF1500\Organisation6\Organisationfunktion\TilstandListe
     */
    public function getTilstandListe()
    {
        return $this->tilstandListe;
    }

    /**
     * Sets a new tilstandListe
     *
     * @param \Digitaliseringskataloget\SF1500\Organisation6\Organisationfunktion\TilstandListe $tilstandListe
     * @return self
     */
    public function setTilstandListe(\Digitaliseringskataloget\SF1500\Organisation6\Organisationfunktion\TilstandListe $tilstandListe)
    {
        $this->tilstandListe = $tilstandListe;
        return $this;
    }

    /**
     * Gets as relationListe
     *
     * @return \Digitaliseringskataloget\SF1500\Organisation6\Organisationfunktion\RelationListe
     */
    public function getRelationListe()
    {
        return $this->relationListe;
    }

    /**
     * Sets a new relationListe
     *
     * @param \Digitaliseringskataloget\SF1500\Organisation6\Organisationfunktion\RelationListe $relationListe
     * @return self
     */
    public function setRelationListe(\Digitaliseringskataloget\SF1500\Organisation6\Organisationfunktion\RelationListe $relationListe)
    {
        $this->relationListe = $relationListe;
        return $this;
    }
}

