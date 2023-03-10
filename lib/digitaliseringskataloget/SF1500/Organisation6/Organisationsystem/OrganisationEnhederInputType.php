<?php

namespace Digitaliseringskataloget\SF1500\Organisation6\Organisationsystem;

/**
 * Class representing OrganisationEnhederInputType
 *
 *
 * XSD Type: OrganisationEnhederInputType
 */
class OrganisationEnhederInputType
{
    /**
     * @var \Digitaliseringskataloget\SF1500\Organisation6\Organisationenhed\OrganisationEnhed[] $organisationEnhed
     */
    private $organisationEnhed = [
        
    ];

    /**
     * Adds as organisationEnhed
     *
     * @return self
     * @param \Digitaliseringskataloget\SF1500\Organisation6\Organisationenhed\OrganisationEnhed $organisationEnhed
     */
    public function addToOrganisationEnhed(\Digitaliseringskataloget\SF1500\Organisation6\Organisationenhed\OrganisationEnhed $organisationEnhed)
    {
        $this->organisationEnhed[] = $organisationEnhed;
        return $this;
    }

    /**
     * isset organisationEnhed
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOrganisationEnhed($index)
    {
        return isset($this->organisationEnhed[$index]);
    }

    /**
     * unset organisationEnhed
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOrganisationEnhed($index)
    {
        unset($this->organisationEnhed[$index]);
    }

    /**
     * Gets as organisationEnhed
     *
     * @return \Digitaliseringskataloget\SF1500\Organisation6\Organisationenhed\OrganisationEnhed[]
     */
    public function getOrganisationEnhed()
    {
        return $this->organisationEnhed;
    }

    /**
     * Sets a new organisationEnhed
     *
     * @param \Digitaliseringskataloget\SF1500\Organisation6\Organisationenhed\OrganisationEnhed[] $organisationEnhed
     * @return self
     */
    public function setOrganisationEnhed(array $organisationEnhed = null)
    {
        $this->organisationEnhed = $organisationEnhed;
        return $this;
    }
}

