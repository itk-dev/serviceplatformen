<?php

namespace Digitaliseringskataloget\SF1500\Organisation6\Klasse;

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
     * @var \Digitaliseringskataloget\Sagdok3_0_0\Erstatter[] $erstatter
     */
    private $erstatter = [
        
    ];

    /**
     * @var \Digitaliseringskataloget\Sagdok3_0_0\Facet $facet
     */
    private $facet = null;

    /**
     * @var \Digitaliseringskataloget\Sagdok3_0_0\LovligeKombinationer[] $lovligeKombinationer
     */
    private $lovligeKombinationer = [
        
    ];

    /**
     * @var \Digitaliseringskataloget\Sagdok3_0_0\Mapninger[] $mapninger
     */
    private $mapninger = [
        
    ];

    /**
     * @var \Digitaliseringskataloget\Sagdok3_0_0\OverordnetKlasse $overordnetKlasse
     */
    private $overordnetKlasse = null;

    /**
     * @var \Digitaliseringskataloget\Sagdok3_0_0\Redaktoerer[] $redaktoerer
     */
    private $redaktoerer = [
        
    ];

    /**
     * @var \Digitaliseringskataloget\Sagdok3_0_0\Sideordnede[] $sideordnede
     */
    private $sideordnede = [
        
    ];

    /**
     * @var \Digitaliseringskataloget\Sagdok3_0_0\Tilfoejelser[] $tilfoejelser
     */
    private $tilfoejelser = [
        
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
     * Adds as erstatter
     *
     * @return self
     * @param \Digitaliseringskataloget\Sagdok3_0_0\Erstatter $erstatter
     */
    public function addToErstatter(\Digitaliseringskataloget\Sagdok3_0_0\Erstatter $erstatter)
    {
        $this->erstatter[] = $erstatter;
        return $this;
    }

    /**
     * isset erstatter
     *
     * @param int|string $index
     * @return bool
     */
    public function issetErstatter($index)
    {
        return isset($this->erstatter[$index]);
    }

    /**
     * unset erstatter
     *
     * @param int|string $index
     * @return void
     */
    public function unsetErstatter($index)
    {
        unset($this->erstatter[$index]);
    }

    /**
     * Gets as erstatter
     *
     * @return \Digitaliseringskataloget\Sagdok3_0_0\Erstatter[]
     */
    public function getErstatter()
    {
        return $this->erstatter;
    }

    /**
     * Sets a new erstatter
     *
     * @param \Digitaliseringskataloget\Sagdok3_0_0\Erstatter[] $erstatter
     * @return self
     */
    public function setErstatter(array $erstatter = null)
    {
        $this->erstatter = $erstatter;
        return $this;
    }

    /**
     * Gets as facet
     *
     * @return \Digitaliseringskataloget\Sagdok3_0_0\Facet
     */
    public function getFacet()
    {
        return $this->facet;
    }

    /**
     * Sets a new facet
     *
     * @param \Digitaliseringskataloget\Sagdok3_0_0\Facet $facet
     * @return self
     */
    public function setFacet(?\Digitaliseringskataloget\Sagdok3_0_0\Facet $facet = null)
    {
        $this->facet = $facet;
        return $this;
    }

    /**
     * Adds as lovligeKombinationer
     *
     * @return self
     * @param \Digitaliseringskataloget\Sagdok3_0_0\LovligeKombinationer $lovligeKombinationer
     */
    public function addToLovligeKombinationer(\Digitaliseringskataloget\Sagdok3_0_0\LovligeKombinationer $lovligeKombinationer)
    {
        $this->lovligeKombinationer[] = $lovligeKombinationer;
        return $this;
    }

    /**
     * isset lovligeKombinationer
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLovligeKombinationer($index)
    {
        return isset($this->lovligeKombinationer[$index]);
    }

    /**
     * unset lovligeKombinationer
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLovligeKombinationer($index)
    {
        unset($this->lovligeKombinationer[$index]);
    }

    /**
     * Gets as lovligeKombinationer
     *
     * @return \Digitaliseringskataloget\Sagdok3_0_0\LovligeKombinationer[]
     */
    public function getLovligeKombinationer()
    {
        return $this->lovligeKombinationer;
    }

    /**
     * Sets a new lovligeKombinationer
     *
     * @param \Digitaliseringskataloget\Sagdok3_0_0\LovligeKombinationer[] $lovligeKombinationer
     * @return self
     */
    public function setLovligeKombinationer(array $lovligeKombinationer = null)
    {
        $this->lovligeKombinationer = $lovligeKombinationer;
        return $this;
    }

    /**
     * Adds as mapninger
     *
     * @return self
     * @param \Digitaliseringskataloget\Sagdok3_0_0\Mapninger $mapninger
     */
    public function addToMapninger(\Digitaliseringskataloget\Sagdok3_0_0\Mapninger $mapninger)
    {
        $this->mapninger[] = $mapninger;
        return $this;
    }

    /**
     * isset mapninger
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMapninger($index)
    {
        return isset($this->mapninger[$index]);
    }

    /**
     * unset mapninger
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMapninger($index)
    {
        unset($this->mapninger[$index]);
    }

    /**
     * Gets as mapninger
     *
     * @return \Digitaliseringskataloget\Sagdok3_0_0\Mapninger[]
     */
    public function getMapninger()
    {
        return $this->mapninger;
    }

    /**
     * Sets a new mapninger
     *
     * @param \Digitaliseringskataloget\Sagdok3_0_0\Mapninger[] $mapninger
     * @return self
     */
    public function setMapninger(array $mapninger = null)
    {
        $this->mapninger = $mapninger;
        return $this;
    }

    /**
     * Gets as overordnetKlasse
     *
     * @return \Digitaliseringskataloget\Sagdok3_0_0\OverordnetKlasse
     */
    public function getOverordnetKlasse()
    {
        return $this->overordnetKlasse;
    }

    /**
     * Sets a new overordnetKlasse
     *
     * @param \Digitaliseringskataloget\Sagdok3_0_0\OverordnetKlasse $overordnetKlasse
     * @return self
     */
    public function setOverordnetKlasse(?\Digitaliseringskataloget\Sagdok3_0_0\OverordnetKlasse $overordnetKlasse = null)
    {
        $this->overordnetKlasse = $overordnetKlasse;
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

    /**
     * Adds as sideordnede
     *
     * @return self
     * @param \Digitaliseringskataloget\Sagdok3_0_0\Sideordnede $sideordnede
     */
    public function addToSideordnede(\Digitaliseringskataloget\Sagdok3_0_0\Sideordnede $sideordnede)
    {
        $this->sideordnede[] = $sideordnede;
        return $this;
    }

    /**
     * isset sideordnede
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSideordnede($index)
    {
        return isset($this->sideordnede[$index]);
    }

    /**
     * unset sideordnede
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSideordnede($index)
    {
        unset($this->sideordnede[$index]);
    }

    /**
     * Gets as sideordnede
     *
     * @return \Digitaliseringskataloget\Sagdok3_0_0\Sideordnede[]
     */
    public function getSideordnede()
    {
        return $this->sideordnede;
    }

    /**
     * Sets a new sideordnede
     *
     * @param \Digitaliseringskataloget\Sagdok3_0_0\Sideordnede[] $sideordnede
     * @return self
     */
    public function setSideordnede(array $sideordnede = null)
    {
        $this->sideordnede = $sideordnede;
        return $this;
    }

    /**
     * Adds as tilfoejelser
     *
     * @return self
     * @param \Digitaliseringskataloget\Sagdok3_0_0\Tilfoejelser $tilfoejelser
     */
    public function addToTilfoejelser(\Digitaliseringskataloget\Sagdok3_0_0\Tilfoejelser $tilfoejelser)
    {
        $this->tilfoejelser[] = $tilfoejelser;
        return $this;
    }

    /**
     * isset tilfoejelser
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTilfoejelser($index)
    {
        return isset($this->tilfoejelser[$index]);
    }

    /**
     * unset tilfoejelser
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTilfoejelser($index)
    {
        unset($this->tilfoejelser[$index]);
    }

    /**
     * Gets as tilfoejelser
     *
     * @return \Digitaliseringskataloget\Sagdok3_0_0\Tilfoejelser[]
     */
    public function getTilfoejelser()
    {
        return $this->tilfoejelser;
    }

    /**
     * Sets a new tilfoejelser
     *
     * @param \Digitaliseringskataloget\Sagdok3_0_0\Tilfoejelser[] $tilfoejelser
     * @return self
     */
    public function setTilfoejelser(array $tilfoejelser = null)
    {
        $this->tilfoejelser = $tilfoejelser;
        return $this;
    }
}

