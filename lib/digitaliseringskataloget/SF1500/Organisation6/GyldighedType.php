<?php

namespace Digitaliseringskataloget\SF1500\Organisation6;

/**
 * Class representing GyldighedType
 *
 *
 * XSD Type: GyldighedType
 */
class GyldighedType
{
    /**
     * @var \Digitaliseringskataloget\Sagdok3_0_0\Virkning $virkning
     */
    private $virkning = null;

    /**
     * @var string $gyldighedStatusKode
     */
    private $gyldighedStatusKode = null;

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
     * Gets as gyldighedStatusKode
     *
     * @return string
     */
    public function getGyldighedStatusKode()
    {
        return $this->gyldighedStatusKode;
    }

    /**
     * Sets a new gyldighedStatusKode
     *
     * @param string $gyldighedStatusKode
     * @return self
     */
    public function setGyldighedStatusKode($gyldighedStatusKode)
    {
        $this->gyldighedStatusKode = $gyldighedStatusKode;
        return $this;
    }
}

