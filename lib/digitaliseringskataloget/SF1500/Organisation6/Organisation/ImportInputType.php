<?php

namespace Digitaliseringskataloget\SF1500\Organisation6\Organisation;

/**
 * Class representing ImportInputType
 *
 *
 * XSD Type: ImportInputType
 */
class ImportInputType
{
    /**
     * @var \Digitaliseringskataloget\SF1500\Organisation6\Organisation\Organisation $organisation
     */
    private $organisation = null;

    /**
     * Gets as organisation
     *
     * @return \Digitaliseringskataloget\SF1500\Organisation6\Organisation\Organisation
     */
    public function getOrganisation()
    {
        return $this->organisation;
    }

    /**
     * Sets a new organisation
     *
     * @param \Digitaliseringskataloget\SF1500\Organisation6\Organisation\Organisation $organisation
     * @return self
     */
    public function setOrganisation(\Digitaliseringskataloget\SF1500\Organisation6\Organisation\Organisation $organisation)
    {
        $this->organisation = $organisation;
        return $this;
    }
}

