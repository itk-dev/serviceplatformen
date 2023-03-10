<?php

namespace Digitaliseringskataloget\SF1500\Organisation6\Interessefaellesskab;

/**
 * Class representing ImportInputType
 *
 *
 * XSD Type: ImportInputType
 */
class ImportInputType
{
    /**
     * @var \Digitaliseringskataloget\SF1500\Organisation6\Interessefaellesskab\Interessefaellesskab $interessefaellesskab
     */
    private $interessefaellesskab = null;

    /**
     * Gets as interessefaellesskab
     *
     * @return \Digitaliseringskataloget\SF1500\Organisation6\Interessefaellesskab\Interessefaellesskab
     */
    public function getInteressefaellesskab()
    {
        return $this->interessefaellesskab;
    }

    /**
     * Sets a new interessefaellesskab
     *
     * @param \Digitaliseringskataloget\SF1500\Organisation6\Interessefaellesskab\Interessefaellesskab $interessefaellesskab
     * @return self
     */
    public function setInteressefaellesskab(\Digitaliseringskataloget\SF1500\Organisation6\Interessefaellesskab\Interessefaellesskab $interessefaellesskab)
    {
        $this->interessefaellesskab = $interessefaellesskab;
        return $this;
    }
}

