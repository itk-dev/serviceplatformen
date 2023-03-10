<?php

namespace Digitaliseringskataloget\SF1500\Organisation6\Organisationsystem;

/**
 * Class representing ImporterOrganisationSystemInputType
 *
 *
 * XSD Type: ImporterOrganisationSystemInputType
 */
class ImporterOrganisationSystemInputType
{
    /**
     * @var \Digitaliseringskataloget\SF1500\Organisation6\Organisation\Organisation $organisation
     */
    private $organisation = null;

    /**
     * @var \Digitaliseringskataloget\SF1500\Organisation6\Organisationenhed\OrganisationEnhed[] $organisationEnhederInput
     */
    private $organisationEnhederInput = null;

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

    /**
     * Adds as organisationEnhed
     *
     * @return self
     * @param \Digitaliseringskataloget\SF1500\Organisation6\Organisationenhed\OrganisationEnhed $organisationEnhed
     */
    public function addToOrganisationEnhederInput(\Digitaliseringskataloget\SF1500\Organisation6\Organisationenhed\OrganisationEnhed $organisationEnhed)
    {
        $this->organisationEnhederInput[] = $organisationEnhed;
        return $this;
    }

    /**
     * isset organisationEnhederInput
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOrganisationEnhederInput($index)
    {
        return isset($this->organisationEnhederInput[$index]);
    }

    /**
     * unset organisationEnhederInput
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOrganisationEnhederInput($index)
    {
        unset($this->organisationEnhederInput[$index]);
    }

    /**
     * Gets as organisationEnhederInput
     *
     * @return \Digitaliseringskataloget\SF1500\Organisation6\Organisationenhed\OrganisationEnhed[]
     */
    public function getOrganisationEnhederInput()
    {
        return $this->organisationEnhederInput;
    }

    /**
     * Sets a new organisationEnhederInput
     *
     * @param \Digitaliseringskataloget\SF1500\Organisation6\Organisationenhed\OrganisationEnhed[] $organisationEnhederInput
     * @return self
     */
    public function setOrganisationEnhederInput(array $organisationEnhederInput)
    {
        $this->organisationEnhederInput = $organisationEnhederInput;
        return $this;
    }
}

