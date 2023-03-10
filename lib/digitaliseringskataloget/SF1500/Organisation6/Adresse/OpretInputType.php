<?php

namespace Digitaliseringskataloget\SF1500\Organisation6\Adresse;

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
     * @var \Digitaliseringskataloget\SF1500\Organisation6\Adresse\Egenskab[] $attributListe
     */
    private $attributListe = null;

    /**
     * @var \Digitaliseringskataloget\SF1500\Organisation6\Adresse\TilstandListe $tilstandListe
     */
    private $tilstandListe = null;

    /**
     * @var \Digitaliseringskataloget\SF1500\Organisation6\Adresse\RelationListe $relationListe
     */
    private $relationListe = null;

    /**
     * Adds as egenskab
     *
     * @return self
     * @param \Digitaliseringskataloget\SF1500\Organisation6\Adresse\Egenskab $egenskab
     */
    public function addToAttributListe(\Digitaliseringskataloget\SF1500\Organisation6\Adresse\Egenskab $egenskab)
    {
        $this->attributListe[] = $egenskab;
        return $this;
    }

    /**
     * isset attributListe
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAttributListe($index)
    {
        return isset($this->attributListe[$index]);
    }

    /**
     * unset attributListe
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAttributListe($index)
    {
        unset($this->attributListe[$index]);
    }

    /**
     * Gets as attributListe
     *
     * @return \Digitaliseringskataloget\SF1500\Organisation6\Adresse\Egenskab[]
     */
    public function getAttributListe()
    {
        return $this->attributListe;
    }

    /**
     * Sets a new attributListe
     *
     * @param \Digitaliseringskataloget\SF1500\Organisation6\Adresse\Egenskab[] $attributListe
     * @return self
     */
    public function setAttributListe(array $attributListe = null)
    {
        $this->attributListe = $attributListe;
        return $this;
    }

    /**
     * Gets as tilstandListe
     *
     * @return \Digitaliseringskataloget\SF1500\Organisation6\Adresse\TilstandListe
     */
    public function getTilstandListe()
    {
        return $this->tilstandListe;
    }

    /**
     * Sets a new tilstandListe
     *
     * @param \Digitaliseringskataloget\SF1500\Organisation6\Adresse\TilstandListe $tilstandListe
     * @return self
     */
    public function setTilstandListe(?\Digitaliseringskataloget\SF1500\Organisation6\Adresse\TilstandListe $tilstandListe = null)
    {
        $this->tilstandListe = $tilstandListe;
        return $this;
    }

    /**
     * Gets as relationListe
     *
     * @return \Digitaliseringskataloget\SF1500\Organisation6\Adresse\RelationListe
     */
    public function getRelationListe()
    {
        return $this->relationListe;
    }

    /**
     * Sets a new relationListe
     *
     * @param \Digitaliseringskataloget\SF1500\Organisation6\Adresse\RelationListe $relationListe
     * @return self
     */
    public function setRelationListe(?\Digitaliseringskataloget\SF1500\Organisation6\Adresse\RelationListe $relationListe = null)
    {
        $this->relationListe = $relationListe;
        return $this;
    }
}

