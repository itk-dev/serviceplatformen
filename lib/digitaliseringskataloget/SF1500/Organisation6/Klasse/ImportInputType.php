<?php

namespace Digitaliseringskataloget\SF1500\Organisation6\Klasse;

/**
 * Class representing ImportInputType
 *
 *
 * XSD Type: ImportInputType
 */
class ImportInputType
{
    /**
     * @var \Digitaliseringskataloget\SF1500\Organisation6\Klasse\Klasse $klasse
     */
    private $klasse = null;

    /**
     * Gets as klasse
     *
     * @return \Digitaliseringskataloget\SF1500\Organisation6\Klasse\Klasse
     */
    public function getKlasse()
    {
        return $this->klasse;
    }

    /**
     * Sets a new klasse
     *
     * @param \Digitaliseringskataloget\SF1500\Organisation6\Klasse\Klasse $klasse
     * @return self
     */
    public function setKlasse(\Digitaliseringskataloget\SF1500\Organisation6\Klasse\Klasse $klasse)
    {
        $this->klasse = $klasse;
        return $this;
    }
}

