<?php

namespace Digitaliseringskataloget\SF1500\Organisation6\Myndighed;

/**
 * Class representing ImportInputType
 *
 *
 * XSD Type: ImportInputType
 */
class ImportInputType
{
    /**
     * @var \Digitaliseringskataloget\SF1500\Organisation6\Myndighed\Myndighed $myndighed
     */
    private $myndighed = null;

    /**
     * Gets as myndighed
     *
     * @return \Digitaliseringskataloget\SF1500\Organisation6\Myndighed\Myndighed
     */
    public function getMyndighed()
    {
        return $this->myndighed;
    }

    /**
     * Sets a new myndighed
     *
     * @param \Digitaliseringskataloget\SF1500\Organisation6\Myndighed\Myndighed $myndighed
     * @return self
     */
    public function setMyndighed(\Digitaliseringskataloget\SF1500\Organisation6\Myndighed\Myndighed $myndighed)
    {
        $this->myndighed = $myndighed;
        return $this;
    }
}

