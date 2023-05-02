<?php

namespace Digitaliseringskataloget\SF1500\Organisation6\Bruger;

/**
 * Class representing ImportInputType
 *
 *
 * XSD Type: ImportInputType
 */
class ImportInputType
{
    /**
     * @var \Digitaliseringskataloget\SF1500\Organisation6\Bruger\Bruger $bruger
     */
    private $bruger = null;

    /**
     * Gets as bruger
     *
     * @return \Digitaliseringskataloget\SF1500\Organisation6\Bruger\Bruger
     */
    public function getBruger()
    {
        return $this->bruger;
    }

    /**
     * Sets a new bruger
     *
     * @param \Digitaliseringskataloget\SF1500\Organisation6\Bruger\Bruger $bruger
     * @return self
     */
    public function setBruger(\Digitaliseringskataloget\SF1500\Organisation6\Bruger\Bruger $bruger)
    {
        $this->bruger = $bruger;
        return $this;
    }
}

