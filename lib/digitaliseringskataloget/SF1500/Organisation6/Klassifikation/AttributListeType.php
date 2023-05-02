<?php

namespace Digitaliseringskataloget\SF1500\Organisation6\Klassifikation;

/**
 * Class representing AttributListeType
 *
 *
 * XSD Type: AttributListeType
 */
class AttributListeType
{
    /**
     * @var \Digitaliseringskataloget\SF1500\Organisation6\Klassifikation\Egenskab[] $egenskab
     */
    private $egenskab = [
        
    ];

    /**
     * Adds as egenskab
     *
     * @return self
     * @param \Digitaliseringskataloget\SF1500\Organisation6\Klassifikation\Egenskab $egenskab
     */
    public function addToEgenskab(\Digitaliseringskataloget\SF1500\Organisation6\Klassifikation\Egenskab $egenskab)
    {
        $this->egenskab[] = $egenskab;
        return $this;
    }

    /**
     * isset egenskab
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEgenskab($index)
    {
        return isset($this->egenskab[$index]);
    }

    /**
     * unset egenskab
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEgenskab($index)
    {
        unset($this->egenskab[$index]);
    }

    /**
     * Gets as egenskab
     *
     * @return \Digitaliseringskataloget\SF1500\Organisation6\Klassifikation\Egenskab[]
     */
    public function getEgenskab()
    {
        return $this->egenskab;
    }

    /**
     * Sets a new egenskab
     *
     * @param \Digitaliseringskataloget\SF1500\Organisation6\Klassifikation\Egenskab[] $egenskab
     * @return self
     */
    public function setEgenskab(array $egenskab = null)
    {
        $this->egenskab = $egenskab;
        return $this;
    }
}

