<?php

namespace Digitaliseringskataloget\SF1500\Organisation6\Facet;

/**
 * Class representing PubliceretStatusType
 *
 *
 * XSD Type: PubliceretStatusType
 */
class PubliceretStatusType
{
    /**
     * @var \Digitaliseringskataloget\Sagdok3_0_0\Virkning $virkning
     */
    private $virkning = null;

    /**
     * @var bool $erPubliceretIndikator
     */
    private $erPubliceretIndikator = null;

    /**
     * Gets as virkning
     *
     * @return \Digitaliseringskataloget\Sagdok3_0_0\Virkning
     */
    public function getVirkning()
    {
        return $this->virkning;
    }

    /**
     * Sets a new virkning
     *
     * @param \Digitaliseringskataloget\Sagdok3_0_0\Virkning $virkning
     * @return self
     */
    public function setVirkning(?\Digitaliseringskataloget\Sagdok3_0_0\Virkning $virkning = null)
    {
        $this->virkning = $virkning;
        return $this;
    }

    /**
     * Gets as erPubliceretIndikator
     *
     * @return bool
     */
    public function getErPubliceretIndikator()
    {
        return $this->erPubliceretIndikator;
    }

    /**
     * Sets a new erPubliceretIndikator
     *
     * @param bool $erPubliceretIndikator
     * @return self
     */
    public function setErPubliceretIndikator($erPubliceretIndikator)
    {
        $this->erPubliceretIndikator = $erPubliceretIndikator;
        return $this;
    }
}

