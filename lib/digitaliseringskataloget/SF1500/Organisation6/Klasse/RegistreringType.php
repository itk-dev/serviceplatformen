<?php

namespace Digitaliseringskataloget\SF1500\Organisation6\Klasse;

use Digitaliseringskataloget\Sagdok3_0_0\RegistreringType as RegistreringTypeBase;

/**
 * Class representing RegistreringType
 *
 *
 * XSD Type: RegistreringType
 */
class RegistreringType extends RegistreringTypeBase
{
    /**
     * @var \Digitaliseringskataloget\SF1500\Organisation6\Klasse\Egenskab[] $attributListe
     */
    private $attributListe = null;

    /**
     * @var \Digitaliseringskataloget\SF1500\Organisation6\Klasse\PubliceretStatus[] $tilstandListe
     */
    private $tilstandListe = null;

    /**
     * @var \Digitaliseringskataloget\SF1500\Organisation6\Klasse\RelationListe $relationListe
     */
    private $relationListe = null;

    /**
     * Adds as egenskab
     *
     * @return self
     * @param \Digitaliseringskataloget\SF1500\Organisation6\Klasse\Egenskab $egenskab
     */
    public function addToAttributListe(\Digitaliseringskataloget\SF1500\Organisation6\Klasse\Egenskab $egenskab)
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
     * @return \Digitaliseringskataloget\SF1500\Organisation6\Klasse\Egenskab[]
     */
    public function getAttributListe()
    {
        return $this->attributListe;
    }

    /**
     * Sets a new attributListe
     *
     * @param \Digitaliseringskataloget\SF1500\Organisation6\Klasse\Egenskab[] $attributListe
     * @return self
     */
    public function setAttributListe(array $attributListe)
    {
        $this->attributListe = $attributListe;
        return $this;
    }

    /**
     * Adds as publiceretStatus
     *
     * @return self
     * @param \Digitaliseringskataloget\SF1500\Organisation6\Klasse\PubliceretStatus $publiceretStatus
     */
    public function addToTilstandListe(\Digitaliseringskataloget\SF1500\Organisation6\Klasse\PubliceretStatus $publiceretStatus)
    {
        $this->tilstandListe[] = $publiceretStatus;
        return $this;
    }

    /**
     * isset tilstandListe
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTilstandListe($index)
    {
        return isset($this->tilstandListe[$index]);
    }

    /**
     * unset tilstandListe
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTilstandListe($index)
    {
        unset($this->tilstandListe[$index]);
    }

    /**
     * Gets as tilstandListe
     *
     * @return \Digitaliseringskataloget\SF1500\Organisation6\Klasse\PubliceretStatus[]
     */
    public function getTilstandListe()
    {
        return $this->tilstandListe;
    }

    /**
     * Sets a new tilstandListe
     *
     * @param \Digitaliseringskataloget\SF1500\Organisation6\Klasse\PubliceretStatus[] $tilstandListe
     * @return self
     */
    public function setTilstandListe(array $tilstandListe)
    {
        $this->tilstandListe = $tilstandListe;
        return $this;
    }

    /**
     * Gets as relationListe
     *
     * @return \Digitaliseringskataloget\SF1500\Organisation6\Klasse\RelationListe
     */
    public function getRelationListe()
    {
        return $this->relationListe;
    }

    /**
     * Sets a new relationListe
     *
     * @param \Digitaliseringskataloget\SF1500\Organisation6\Klasse\RelationListe $relationListe
     * @return self
     */
    public function setRelationListe(\Digitaliseringskataloget\SF1500\Organisation6\Klasse\RelationListe $relationListe)
    {
        $this->relationListe = $relationListe;
        return $this;
    }
}

