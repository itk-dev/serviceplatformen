<?php

namespace Digitaliseringskataloget\SF1500\Organisation6\Facet;

/**
 * Class representing ImportInputType
 *
 *
 * XSD Type: ImportInputType
 */
class ImportInputType
{
    /**
     * @var \Digitaliseringskataloget\SF1500\Organisation6\Facet\Facet $facet
     */
    private $facet = null;

    /**
     * Gets as facet
     *
     * @return \Digitaliseringskataloget\SF1500\Organisation6\Facet\Facet
     */
    public function getFacet()
    {
        return $this->facet;
    }

    /**
     * Sets a new facet
     *
     * @param \Digitaliseringskataloget\SF1500\Organisation6\Facet\Facet $facet
     * @return self
     */
    public function setFacet(\Digitaliseringskataloget\SF1500\Organisation6\Facet\Facet $facet)
    {
        $this->facet = $facet;
        return $this;
    }
}

