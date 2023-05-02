<?php

namespace Digitaliseringskataloget\Sagdok3_0_0;

/**
 * Class representing TidspunktType
 *
 *
 * XSD Type: TidspunktType
 */
class TidspunktType
{
    /**
     * @var \DateTime $tidsstempelDatoTid
     */
    private $tidsstempelDatoTid = null;

    /**
     * @var bool $graenseIndikator
     */
    private $graenseIndikator = null;

    /**
     * Gets as tidsstempelDatoTid
     *
     * @return \DateTime
     */
    public function getTidsstempelDatoTid()
    {
        return $this->tidsstempelDatoTid;
    }

    /**
     * Sets a new tidsstempelDatoTid
     *
     * @param \DateTime $tidsstempelDatoTid
     * @return self
     */
    public function setTidsstempelDatoTid(?\DateTime $tidsstempelDatoTid = null)
    {
        $this->tidsstempelDatoTid = $tidsstempelDatoTid;
        return $this;
    }

    /**
     * Gets as graenseIndikator
     *
     * @return bool
     */
    public function getGraenseIndikator()
    {
        return $this->graenseIndikator;
    }

    /**
     * Sets a new graenseIndikator
     *
     * @param bool $graenseIndikator
     * @return self
     */
    public function setGraenseIndikator($graenseIndikator)
    {
        $this->graenseIndikator = $graenseIndikator;
        return $this;
    }
}

