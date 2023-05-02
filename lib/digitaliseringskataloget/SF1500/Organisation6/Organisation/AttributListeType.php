<?php

namespace Digitaliseringskataloget\SF1500\Organisation6\Organisation;

/**
 * Class representing AttributListeType
 *
 *
 * XSD Type: AttributListeType
 */
class AttributListeType
{
    /**
     * @var \Digitaliseringskataloget\SF1500\Organisation6\Organisation\Egenskab[] $egenskab
     */
    private $egenskab = [
        
    ];

    /**
     * @var \Digitaliseringskataloget\Sagdok3_0_0\LokalUdvidelse $lokalUdvidelse
     */
    private $lokalUdvidelse = null;

    /**
     * Adds as egenskab
     *
     * @return self
     * @param \Digitaliseringskataloget\SF1500\Organisation6\Organisation\Egenskab $egenskab
     */
    public function addToEgenskab(\Digitaliseringskataloget\SF1500\Organisation6\Organisation\Egenskab $egenskab)
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
     * @return \Digitaliseringskataloget\SF1500\Organisation6\Organisation\Egenskab[]
     */
    public function getEgenskab()
    {
        return $this->egenskab;
    }

    /**
     * Sets a new egenskab
     *
     * @param \Digitaliseringskataloget\SF1500\Organisation6\Organisation\Egenskab[] $egenskab
     * @return self
     */
    public function setEgenskab(array $egenskab = null)
    {
        $this->egenskab = $egenskab;
        return $this;
    }

    /**
     * Gets as lokalUdvidelse
     *
     * @return \Digitaliseringskataloget\Sagdok3_0_0\LokalUdvidelse
     */
    public function getLokalUdvidelse()
    {
        return $this->lokalUdvidelse;
    }

    /**
     * Sets a new lokalUdvidelse
     *
     * @param \Digitaliseringskataloget\Sagdok3_0_0\LokalUdvidelse $lokalUdvidelse
     * @return self
     */
    public function setLokalUdvidelse(?\Digitaliseringskataloget\Sagdok3_0_0\LokalUdvidelse $lokalUdvidelse = null)
    {
        $this->lokalUdvidelse = $lokalUdvidelse;
        return $this;
    }
}

