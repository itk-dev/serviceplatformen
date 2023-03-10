<?php

namespace Digitaliseringskataloget\SF1500\Organisation6\Klassifikationsystem;

use Digitaliseringskataloget\Sagdok3_0_0\SoegInputType;

/**
 * Class representing FremsoegObjekthierarkiInputType
 *
 *
 * XSD Type: FremsoegObjekthierarkiInputType
 */
class FremsoegObjekthierarkiInputType extends SoegInputType
{
    /**
     * @var \Digitaliseringskataloget\SF1500\Organisation6\Klassifikationsystem\KlassifikationSoegEgenskab $klassifikationSoegEgenskab
     */
    private $klassifikationSoegEgenskab = null;

    /**
     * @var \Digitaliseringskataloget\SF1500\Organisation6\Klassifikationsystem\FacetSoegEgenskab $facetSoegEgenskab
     */
    private $facetSoegEgenskab = null;

    /**
     * @var \Digitaliseringskataloget\SF1500\Organisation6\Klassifikationsystem\KlasseSoegEgenskab $klasseSoegEgenskab
     */
    private $klasseSoegEgenskab = null;

    /**
     * Gets as klassifikationSoegEgenskab
     *
     * @return \Digitaliseringskataloget\SF1500\Organisation6\Klassifikationsystem\KlassifikationSoegEgenskab
     */
    public function getKlassifikationSoegEgenskab()
    {
        return $this->klassifikationSoegEgenskab;
    }

    /**
     * Sets a new klassifikationSoegEgenskab
     *
     * @param \Digitaliseringskataloget\SF1500\Organisation6\Klassifikationsystem\KlassifikationSoegEgenskab $klassifikationSoegEgenskab
     * @return self
     */
    public function setKlassifikationSoegEgenskab(?\Digitaliseringskataloget\SF1500\Organisation6\Klassifikationsystem\KlassifikationSoegEgenskab $klassifikationSoegEgenskab = null)
    {
        $this->klassifikationSoegEgenskab = $klassifikationSoegEgenskab;
        return $this;
    }

    /**
     * Gets as facetSoegEgenskab
     *
     * @return \Digitaliseringskataloget\SF1500\Organisation6\Klassifikationsystem\FacetSoegEgenskab
     */
    public function getFacetSoegEgenskab()
    {
        return $this->facetSoegEgenskab;
    }

    /**
     * Sets a new facetSoegEgenskab
     *
     * @param \Digitaliseringskataloget\SF1500\Organisation6\Klassifikationsystem\FacetSoegEgenskab $facetSoegEgenskab
     * @return self
     */
    public function setFacetSoegEgenskab(?\Digitaliseringskataloget\SF1500\Organisation6\Klassifikationsystem\FacetSoegEgenskab $facetSoegEgenskab = null)
    {
        $this->facetSoegEgenskab = $facetSoegEgenskab;
        return $this;
    }

    /**
     * Gets as klasseSoegEgenskab
     *
     * @return \Digitaliseringskataloget\SF1500\Organisation6\Klassifikationsystem\KlasseSoegEgenskab
     */
    public function getKlasseSoegEgenskab()
    {
        return $this->klasseSoegEgenskab;
    }

    /**
     * Sets a new klasseSoegEgenskab
     *
     * @param \Digitaliseringskataloget\SF1500\Organisation6\Klassifikationsystem\KlasseSoegEgenskab $klasseSoegEgenskab
     * @return self
     */
    public function setKlasseSoegEgenskab(?\Digitaliseringskataloget\SF1500\Organisation6\Klassifikationsystem\KlasseSoegEgenskab $klasseSoegEgenskab = null)
    {
        $this->klasseSoegEgenskab = $klasseSoegEgenskab;
        return $this;
    }
}

