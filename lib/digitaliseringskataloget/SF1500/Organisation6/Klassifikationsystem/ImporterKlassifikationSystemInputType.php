<?php

namespace Digitaliseringskataloget\SF1500\Organisation6\Klassifikationsystem;

/**
 * Class representing ImporterKlassifikationSystemInputType
 *
 *
 * XSD Type: ImporterKlassifikationSystemInputType
 */
class ImporterKlassifikationSystemInputType
{
    /**
     * @var \Digitaliseringskataloget\SF1500\Organisation6\Klassifikation\Klassifikation $klassifikation
     */
    private $klassifikation = null;

    /**
     * @var \Digitaliseringskataloget\SF1500\Organisation6\Facet\Facet[] $facetterInput
     */
    private $facetterInput = null;

    /**
     * @var \Digitaliseringskataloget\SF1500\Organisation6\Klasse\Klasse[] $klasserInput
     */
    private $klasserInput = null;

    /**
     * Gets as klassifikation
     *
     * @return \Digitaliseringskataloget\SF1500\Organisation6\Klassifikation\Klassifikation
     */
    public function getKlassifikation()
    {
        return $this->klassifikation;
    }

    /**
     * Sets a new klassifikation
     *
     * @param \Digitaliseringskataloget\SF1500\Organisation6\Klassifikation\Klassifikation $klassifikation
     * @return self
     */
    public function setKlassifikation(\Digitaliseringskataloget\SF1500\Organisation6\Klassifikation\Klassifikation $klassifikation)
    {
        $this->klassifikation = $klassifikation;
        return $this;
    }

    /**
     * Adds as facet
     *
     * @return self
     * @param \Digitaliseringskataloget\SF1500\Organisation6\Facet\Facet $facet
     */
    public function addToFacetterInput(\Digitaliseringskataloget\SF1500\Organisation6\Facet\Facet $facet)
    {
        $this->facetterInput[] = $facet;
        return $this;
    }

    /**
     * isset facetterInput
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFacetterInput($index)
    {
        return isset($this->facetterInput[$index]);
    }

    /**
     * unset facetterInput
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFacetterInput($index)
    {
        unset($this->facetterInput[$index]);
    }

    /**
     * Gets as facetterInput
     *
     * @return \Digitaliseringskataloget\SF1500\Organisation6\Facet\Facet[]
     */
    public function getFacetterInput()
    {
        return $this->facetterInput;
    }

    /**
     * Sets a new facetterInput
     *
     * @param \Digitaliseringskataloget\SF1500\Organisation6\Facet\Facet[] $facetterInput
     * @return self
     */
    public function setFacetterInput(array $facetterInput)
    {
        $this->facetterInput = $facetterInput;
        return $this;
    }

    /**
     * Adds as klasse
     *
     * @return self
     * @param \Digitaliseringskataloget\SF1500\Organisation6\Klasse\Klasse $klasse
     */
    public function addToKlasserInput(\Digitaliseringskataloget\SF1500\Organisation6\Klasse\Klasse $klasse)
    {
        $this->klasserInput[] = $klasse;
        return $this;
    }

    /**
     * isset klasserInput
     *
     * @param int|string $index
     * @return bool
     */
    public function issetKlasserInput($index)
    {
        return isset($this->klasserInput[$index]);
    }

    /**
     * unset klasserInput
     *
     * @param int|string $index
     * @return void
     */
    public function unsetKlasserInput($index)
    {
        unset($this->klasserInput[$index]);
    }

    /**
     * Gets as klasserInput
     *
     * @return \Digitaliseringskataloget\SF1500\Organisation6\Klasse\Klasse[]
     */
    public function getKlasserInput()
    {
        return $this->klasserInput;
    }

    /**
     * Sets a new klasserInput
     *
     * @param \Digitaliseringskataloget\SF1500\Organisation6\Klasse\Klasse[] $klasserInput
     * @return self
     */
    public function setKlasserInput(array $klasserInput)
    {
        $this->klasserInput = $klasserInput;
        return $this;
    }
}

