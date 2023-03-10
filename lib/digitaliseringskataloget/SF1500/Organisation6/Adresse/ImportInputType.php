<?php

namespace Digitaliseringskataloget\SF1500\Organisation6\Adresse;

/**
 * Class representing ImportInputType
 *
 *
 * XSD Type: ImportInputType
 */
class ImportInputType
{
    /**
     * @var \Digitaliseringskataloget\SF1500\Organisation6\Adresse\Adresse $adresse
     */
    private $adresse = null;

    /**
     * Gets as adresse
     *
     * @return \Digitaliseringskataloget\SF1500\Organisation6\Adresse\Adresse
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Sets a new adresse
     *
     * @param \Digitaliseringskataloget\SF1500\Organisation6\Adresse\Adresse $adresse
     * @return self
     */
    public function setAdresse(\Digitaliseringskataloget\SF1500\Organisation6\Adresse\Adresse $adresse)
    {
        $this->adresse = $adresse;
        return $this;
    }
}

