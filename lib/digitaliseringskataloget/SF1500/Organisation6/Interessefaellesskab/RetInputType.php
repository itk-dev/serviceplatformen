<?php

namespace Digitaliseringskataloget\SF1500\Organisation6\Interessefaellesskab;

use Digitaliseringskataloget\Sagdok3_0_0\RetInputType as RetInputTypeBase;

/**
 * Class representing RetInputType
 *
 *
 * XSD Type: RetInputType
 */
class RetInputType extends RetInputTypeBase
{
    /**
     * @var \Digitaliseringskataloget\SF1500\Organisation6\Interessefaellesskab\AttributListe $attributListe
     */
    private $attributListe = null;

    /**
     * @var \Digitaliseringskataloget\SF1500\Organisation6\Interessefaellesskab\TilstandListe $tilstandListe
     */
    private $tilstandListe = null;

    /**
     * @var \Digitaliseringskataloget\SF1500\Organisation6\Interessefaellesskab\RelationListe $relationListe
     */
    private $relationListe = null;

    /**
     * Gets as attributListe
     *
     * @return \Digitaliseringskataloget\SF1500\Organisation6\Interessefaellesskab\AttributListe
     */
    public function getAttributListe()
    {
        return $this->attributListe;
    }

    /**
     * Sets a new attributListe
     *
     * @param \Digitaliseringskataloget\SF1500\Organisation6\Interessefaellesskab\AttributListe $attributListe
     * @return self
     */
    public function setAttributListe(?\Digitaliseringskataloget\SF1500\Organisation6\Interessefaellesskab\AttributListe $attributListe = null)
    {
        $this->attributListe = $attributListe;
        return $this;
    }

    /**
     * Gets as tilstandListe
     *
     * @return \Digitaliseringskataloget\SF1500\Organisation6\Interessefaellesskab\TilstandListe
     */
    public function getTilstandListe()
    {
        return $this->tilstandListe;
    }

    /**
     * Sets a new tilstandListe
     *
     * @param \Digitaliseringskataloget\SF1500\Organisation6\Interessefaellesskab\TilstandListe $tilstandListe
     * @return self
     */
    public function setTilstandListe(?\Digitaliseringskataloget\SF1500\Organisation6\Interessefaellesskab\TilstandListe $tilstandListe = null)
    {
        $this->tilstandListe = $tilstandListe;
        return $this;
    }

    /**
     * Gets as relationListe
     *
     * @return \Digitaliseringskataloget\SF1500\Organisation6\Interessefaellesskab\RelationListe
     */
    public function getRelationListe()
    {
        return $this->relationListe;
    }

    /**
     * Sets a new relationListe
     *
     * @param \Digitaliseringskataloget\SF1500\Organisation6\Interessefaellesskab\RelationListe $relationListe
     * @return self
     */
    public function setRelationListe(?\Digitaliseringskataloget\SF1500\Organisation6\Interessefaellesskab\RelationListe $relationListe = null)
    {
        $this->relationListe = $relationListe;
        return $this;
    }
}

