<?php

namespace Digitaliseringskataloget\SF1500\Organisation6\Virksomhed;

/**
 * Class representing ImportInputType
 *
 *
 * XSD Type: ImportInputType
 */
class ImportInputType
{
    /**
     * @var \Digitaliseringskataloget\SF1500\Organisation6\Virksomhed\Virksomhed $virksomhed
     */
    private $virksomhed = null;

    /**
     * Gets as virksomhed
     *
     * @return \Digitaliseringskataloget\SF1500\Organisation6\Virksomhed\Virksomhed
     */
    public function getVirksomhed()
    {
        return $this->virksomhed;
    }

    /**
     * Sets a new virksomhed
     *
     * @param \Digitaliseringskataloget\SF1500\Organisation6\Virksomhed\Virksomhed $virksomhed
     * @return self
     */
    public function setVirksomhed(\Digitaliseringskataloget\SF1500\Organisation6\Virksomhed\Virksomhed $virksomhed)
    {
        $this->virksomhed = $virksomhed;
        return $this;
    }
}

