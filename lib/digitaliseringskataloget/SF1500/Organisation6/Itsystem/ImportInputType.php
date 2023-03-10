<?php

namespace Digitaliseringskataloget\SF1500\Organisation6\Itsystem;

/**
 * Class representing ImportInputType
 *
 *
 * XSD Type: ImportInputType
 */
class ImportInputType
{
    /**
     * @var \Digitaliseringskataloget\SF1500\Organisation6\Itsystem\ItSystem $itSystem
     */
    private $itSystem = null;

    /**
     * Gets as itSystem
     *
     * @return \Digitaliseringskataloget\SF1500\Organisation6\Itsystem\ItSystem
     */
    public function getItSystem()
    {
        return $this->itSystem;
    }

    /**
     * Sets a new itSystem
     *
     * @param \Digitaliseringskataloget\SF1500\Organisation6\Itsystem\ItSystem $itSystem
     * @return self
     */
    public function setItSystem(\Digitaliseringskataloget\SF1500\Organisation6\Itsystem\ItSystem $itSystem)
    {
        $this->itSystem = $itSystem;
        return $this;
    }
}

