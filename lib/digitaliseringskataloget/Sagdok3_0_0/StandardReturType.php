<?php

namespace Digitaliseringskataloget\Sagdok3_0_0;

/**
 * Class representing StandardReturType
 *
 *
 * XSD Type: StandardReturType
 */
class StandardReturType
{
    /**
     * @var int $statusKode
     */
    private $statusKode = null;

    /**
     * @var string $fejlbeskedTekst
     */
    private $fejlbeskedTekst = null;

    /**
     * Gets as statusKode
     *
     * @return int
     */
    public function getStatusKode()
    {
        return $this->statusKode;
    }

    /**
     * Sets a new statusKode
     *
     * @param int $statusKode
     * @return self
     */
    public function setStatusKode($statusKode)
    {
        $this->statusKode = $statusKode;
        return $this;
    }

    /**
     * Gets as fejlbeskedTekst
     *
     * @return string
     */
    public function getFejlbeskedTekst()
    {
        return $this->fejlbeskedTekst;
    }

    /**
     * Sets a new fejlbeskedTekst
     *
     * @param string $fejlbeskedTekst
     * @return self
     */
    public function setFejlbeskedTekst($fejlbeskedTekst)
    {
        $this->fejlbeskedTekst = $fejlbeskedTekst;
        return $this;
    }
}

