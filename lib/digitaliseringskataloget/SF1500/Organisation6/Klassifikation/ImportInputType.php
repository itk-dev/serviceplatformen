<?php

namespace Digitaliseringskataloget\SF1500\Organisation6\Klassifikation;

/**
 * Class representing ImportInputType
 *
 *
 * XSD Type: ImportInputType
 */
class ImportInputType
{
    /**
     * @var \Digitaliseringskataloget\SF1500\Organisation6\Klassifikation\Klassifikation $klassifikation
     */
    private $klassifikation = null;

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
}

