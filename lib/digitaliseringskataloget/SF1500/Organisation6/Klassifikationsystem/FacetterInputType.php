<?php

namespace Digitaliseringskataloget\SF1500\Organisation6\Klassifikationsystem;

/**
 * Class representing FacetterInputType
 *
 *
 * XSD Type: FacetterInputType
 */
class FacetterInputType
{
    /**
     * @var \Digitaliseringskataloget\SF1500\Organisation6\Facet\Facet[] $facet
     */
    private $facet = [
        
    ];

    /**
     * Adds as facet
     *
     * @return self
     * @param \Digitaliseringskataloget\SF1500\Organisation6\Facet\Facet $facet
     */
    public function addToFacet(\Digitaliseringskataloget\SF1500\Organisation6\Facet\Facet $facet)
    {
        $this->facet[] = $facet;
        return $this;
    }

    /**
     * isset facet
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFacet($index)
    {
        return isset($this->facet[$index]);
    }

    /**
     * unset facet
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFacet($index)
    {
        unset($this->facet[$index]);
    }

    /**
     * Gets as facet
     *
     * @return \Digitaliseringskataloget\SF1500\Organisation6\Facet\Facet[]
     */
    public function getFacet()
    {
        return $this->facet;
    }

    /**
     * Sets a new facet
     *
     * @param \Digitaliseringskataloget\SF1500\Organisation6\Facet\Facet[] $facet
     * @return self
     */
    public function setFacet(array $facet = null)
    {
        $this->facet = $facet;
        return $this;
    }
}

