<?php

namespace Digitaliseringskataloget\Sagdok3_0_0;

/**
 * Class representing ListOutputType
 *
 *
 * XSD Type: ListOutputType
 */
class ListOutputType
{
    /**
     * @var \Digitaliseringskataloget\Sagdok3_0_0\StandardRetur $standardRetur
     */
    private $standardRetur = null;

    /**
     * Gets as standardRetur
     *
     * @return \Digitaliseringskataloget\Sagdok3_0_0\StandardRetur
     */
    public function getStandardRetur()
    {
        return $this->standardRetur;
    }

    /**
     * Sets a new standardRetur
     *
     * @param \Digitaliseringskataloget\Sagdok3_0_0\StandardRetur $standardRetur
     * @return self
     */
    public function setStandardRetur(\Digitaliseringskataloget\Sagdok3_0_0\StandardRetur $standardRetur)
    {
        $this->standardRetur = $standardRetur;
        return $this;
    }
}

