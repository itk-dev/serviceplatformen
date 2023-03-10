<?php

namespace Digitaliseringskataloget\SF1500\Organisation6\Organisationfunktion;

/**
 * Class representing ImportInputType
 *
 *
 * XSD Type: ImportInputType
 */
class ImportInputType
{
    /**
     * @var \Digitaliseringskataloget\SF1500\Organisation6\Organisationfunktion\OrganisationFunktion $organisationFunktion
     */
    private $organisationFunktion = null;

    /**
     * Gets as organisationFunktion
     *
     * @return \Digitaliseringskataloget\SF1500\Organisation6\Organisationfunktion\OrganisationFunktion
     */
    public function getOrganisationFunktion()
    {
        return $this->organisationFunktion;
    }

    /**
     * Sets a new organisationFunktion
     *
     * @param \Digitaliseringskataloget\SF1500\Organisation6\Organisationfunktion\OrganisationFunktion $organisationFunktion
     * @return self
     */
    public function setOrganisationFunktion(\Digitaliseringskataloget\SF1500\Organisation6\Organisationfunktion\OrganisationFunktion $organisationFunktion)
    {
        $this->organisationFunktion = $organisationFunktion;
        return $this;
    }
}

