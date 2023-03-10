<?php

namespace Digitaliseringskataloget\SF1500\Organisation6\Klassifikationsystem;

/**
 * Class representing KlasserInputType
 *
 *
 * XSD Type: KlasserInputType
 */
class KlasserInputType
{
    /**
     * @var \Digitaliseringskataloget\SF1500\Organisation6\Klasse\Klasse[] $klasse
     */
    private $klasse = [
        
    ];

    /**
     * Adds as klasse
     *
     * @return self
     * @param \Digitaliseringskataloget\SF1500\Organisation6\Klasse\Klasse $klasse
     */
    public function addToKlasse(\Digitaliseringskataloget\SF1500\Organisation6\Klasse\Klasse $klasse)
    {
        $this->klasse[] = $klasse;
        return $this;
    }

    /**
     * isset klasse
     *
     * @param int|string $index
     * @return bool
     */
    public function issetKlasse($index)
    {
        return isset($this->klasse[$index]);
    }

    /**
     * unset klasse
     *
     * @param int|string $index
     * @return void
     */
    public function unsetKlasse($index)
    {
        unset($this->klasse[$index]);
    }

    /**
     * Gets as klasse
     *
     * @return \Digitaliseringskataloget\SF1500\Organisation6\Klasse\Klasse[]
     */
    public function getKlasse()
    {
        return $this->klasse;
    }

    /**
     * Sets a new klasse
     *
     * @param \Digitaliseringskataloget\SF1500\Organisation6\Klasse\Klasse[] $klasse
     * @return self
     */
    public function setKlasse(array $klasse = null)
    {
        $this->klasse = $klasse;
        return $this;
    }
}

