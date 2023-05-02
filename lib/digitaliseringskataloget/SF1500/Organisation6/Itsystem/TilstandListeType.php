<?php

namespace Digitaliseringskataloget\SF1500\Organisation6\Itsystem;

/**
 * Class representing TilstandListeType
 *
 *
 * XSD Type: TilstandListeType
 */
class TilstandListeType
{
    /**
     * @var \Digitaliseringskataloget\SF1500\Organisation6\Gyldighed[] $gyldighed
     */
    private $gyldighed = [
        
    ];

    /**
     * @var \Digitaliseringskataloget\Sagdok3_0_0\LokalUdvidelse $lokalUdvidelse
     */
    private $lokalUdvidelse = null;

    /**
     * Adds as gyldighed
     *
     * @return self
     * @param \Digitaliseringskataloget\SF1500\Organisation6\Gyldighed $gyldighed
     */
    public function addToGyldighed(\Digitaliseringskataloget\SF1500\Organisation6\Gyldighed $gyldighed)
    {
        $this->gyldighed[] = $gyldighed;
        return $this;
    }

    /**
     * isset gyldighed
     *
     * @param int|string $index
     * @return bool
     */
    public function issetGyldighed($index)
    {
        return isset($this->gyldighed[$index]);
    }

    /**
     * unset gyldighed
     *
     * @param int|string $index
     * @return void
     */
    public function unsetGyldighed($index)
    {
        unset($this->gyldighed[$index]);
    }

    /**
     * Gets as gyldighed
     *
     * @return \Digitaliseringskataloget\SF1500\Organisation6\Gyldighed[]
     */
    public function getGyldighed()
    {
        return $this->gyldighed;
    }

    /**
     * Sets a new gyldighed
     *
     * @param \Digitaliseringskataloget\SF1500\Organisation6\Gyldighed[] $gyldighed
     * @return self
     */
    public function setGyldighed(array $gyldighed = null)
    {
        $this->gyldighed = $gyldighed;
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

