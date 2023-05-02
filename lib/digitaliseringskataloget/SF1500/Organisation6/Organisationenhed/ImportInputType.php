<?php

namespace Digitaliseringskataloget\SF1500\Organisation6\Organisationenhed;

/**
 * Class representing ImportInputType
 *
 *
 * XSD Type: ImportInputType
 */
class ImportInputType
{
    /**
     * @var \Digitaliseringskataloget\SF1500\Organisation6\Organisationenhed\OrganisationEnhed $organisationEnhed
     */
    private $organisationEnhed = null;

    /**
     * Gets as organisationEnhed
     *
     * @return \Digitaliseringskataloget\SF1500\Organisation6\Organisationenhed\OrganisationEnhed
     */
    public function getOrganisationEnhed()
    {
        return $this->organisationEnhed;
    }

    /**
     * Sets a new organisationEnhed
     *
     * @param \Digitaliseringskataloget\SF1500\Organisation6\Organisationenhed\OrganisationEnhed $organisationEnhed
     * @return self
     */
    public function setOrganisationEnhed(\Digitaliseringskataloget\SF1500\Organisation6\Organisationenhed\OrganisationEnhed $organisationEnhed)
    {
        $this->organisationEnhed = $organisationEnhed;
        return $this;
    }
}

