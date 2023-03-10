<?php

namespace Digitaliseringskataloget\Sagdok3_0_0;

/**
 * Class representing MultipleOutputType
 *
 *
 * XSD Type: MultipleOutputType
 */
class MultipleOutputType
{
    /**
     * @var \Digitaliseringskataloget\Sagdok3_0_0\UnikReturType[] $unikRetur
     */
    private $unikRetur = [
        
    ];

    /**
     * @var \Digitaliseringskataloget\Sagdok3_0_0\StandardReturType[] $standardRetur
     */
    private $standardRetur = [
        
    ];

    /**
     * Adds as unikRetur
     *
     * @return self
     * @param \Digitaliseringskataloget\Sagdok3_0_0\UnikReturType $unikRetur
     */
    public function addToUnikRetur(\Digitaliseringskataloget\Sagdok3_0_0\UnikReturType $unikRetur)
    {
        $this->unikRetur[] = $unikRetur;
        return $this;
    }

    /**
     * isset unikRetur
     *
     * @param int|string $index
     * @return bool
     */
    public function issetUnikRetur($index)
    {
        return isset($this->unikRetur[$index]);
    }

    /**
     * unset unikRetur
     *
     * @param int|string $index
     * @return void
     */
    public function unsetUnikRetur($index)
    {
        unset($this->unikRetur[$index]);
    }

    /**
     * Gets as unikRetur
     *
     * @return \Digitaliseringskataloget\Sagdok3_0_0\UnikReturType[]
     */
    public function getUnikRetur()
    {
        return $this->unikRetur;
    }

    /**
     * Sets a new unikRetur
     *
     * @param \Digitaliseringskataloget\Sagdok3_0_0\UnikReturType[] $unikRetur
     * @return self
     */
    public function setUnikRetur(array $unikRetur = null)
    {
        $this->unikRetur = $unikRetur;
        return $this;
    }

    /**
     * Adds as standardRetur
     *
     * @return self
     * @param \Digitaliseringskataloget\Sagdok3_0_0\StandardReturType $standardRetur
     */
    public function addToStandardRetur(\Digitaliseringskataloget\Sagdok3_0_0\StandardReturType $standardRetur)
    {
        $this->standardRetur[] = $standardRetur;
        return $this;
    }

    /**
     * isset standardRetur
     *
     * @param int|string $index
     * @return bool
     */
    public function issetStandardRetur($index)
    {
        return isset($this->standardRetur[$index]);
    }

    /**
     * unset standardRetur
     *
     * @param int|string $index
     * @return void
     */
    public function unsetStandardRetur($index)
    {
        unset($this->standardRetur[$index]);
    }

    /**
     * Gets as standardRetur
     *
     * @return \Digitaliseringskataloget\Sagdok3_0_0\StandardReturType[]
     */
    public function getStandardRetur()
    {
        return $this->standardRetur;
    }

    /**
     * Sets a new standardRetur
     *
     * @param \Digitaliseringskataloget\Sagdok3_0_0\StandardReturType[] $standardRetur
     * @return self
     */
    public function setStandardRetur(array $standardRetur = null)
    {
        $this->standardRetur = $standardRetur;
        return $this;
    }
}

