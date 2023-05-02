<?php

namespace Digitaliseringskataloget\SF1500\Organisation6\Organisationenhed;

use Digitaliseringskataloget\Sagdok3_0_0\OpretInputType as OpretInputTypeBase;

/**
 * Class representing OpretInputType
 *
 *
 * XSD Type: OpretInputType
 */
class OpretInputType extends OpretInputTypeBase
{
    /**
     * @var \Digitaliseringskataloget\SF1500\Organisation6\Organisationenhed\AttributListe $attributListe
     */
    private $attributListe = null;

    /**
     * @var \Digitaliseringskataloget\SF1500\Organisation6\Organisationenhed\TilstandListe $tilstandListe
     */
    private $tilstandListe = null;

    /**
     * @var \Digitaliseringskataloget\SF1500\Organisation6\Organisationenhed\RelationListe $relationListe
     */
    private $relationListe = null;

    /**
     * Gets as attributListe
     *
     * @return \Digitaliseringskataloget\SF1500\Organisation6\Organisationenhed\AttributListe
     */
    public function getAttributListe()
    {
        return $this->attributListe;
    }

    /**
     * Sets a new attributListe
     *
     * @param \Digitaliseringskataloget\SF1500\Organisation6\Organisationenhed\AttributListe $attributListe
     * @return self
     */
    public function setAttributListe(\Digitaliseringskataloget\SF1500\Organisation6\Organisationenhed\AttributListe $attributListe)
    {
        $this->attributListe = $attributListe;
        return $this;
    }

    /**
     * Gets as tilstandListe
     *
     * @return \Digitaliseringskataloget\SF1500\Organisation6\Organisationenhed\TilstandListe
     */
    public function getTilstandListe()
    {
        return $this->tilstandListe;
    }

    /**
     * Sets a new tilstandListe
     *
     * @param \Digitaliseringskataloget\SF1500\Organisation6\Organisationenhed\TilstandListe $tilstandListe
     * @return self
     */
    public function setTilstandListe(\Digitaliseringskataloget\SF1500\Organisation6\Organisationenhed\TilstandListe $tilstandListe)
    {
        $this->tilstandListe = $tilstandListe;
        return $this;
    }

    /**
     * Gets as relationListe
     *
     * @return \Digitaliseringskataloget\SF1500\Organisation6\Organisationenhed\RelationListe
     */
    public function getRelationListe()
    {
        return $this->relationListe;
    }

    /**
     * Sets a new relationListe
     *
     * @param \Digitaliseringskataloget\SF1500\Organisation6\Organisationenhed\RelationListe $relationListe
     * @return self
     */
    public function setRelationListe(\Digitaliseringskataloget\SF1500\Organisation6\Organisationenhed\RelationListe $relationListe)
    {
        $this->relationListe = $relationListe;
        return $this;
    }
}

