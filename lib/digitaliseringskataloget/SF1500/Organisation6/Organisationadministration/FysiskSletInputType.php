<?php

namespace Digitaliseringskataloget\SF1500\Organisation6\Organisationadministration;

/**
 * Class representing FysiskSletInputType
 *
 *
 * XSD Type: FysiskSletInputType
 */
class FysiskSletInputType
{
    /**
     * @var string $organisationUUID
     */
    private $organisationUUID = null;

    /**
     * @var string $organisationEnhedUUID
     */
    private $organisationEnhedUUID = null;

    /**
     * Gets as organisationUUID
     *
     * @return string
     */
    public function getOrganisationUUID()
    {
        return $this->organisationUUID;
    }

    /**
     * Sets a new organisationUUID
     *
     * @param string $organisationUUID
     * @return self
     */
    public function setOrganisationUUID($organisationUUID)
    {
        $this->organisationUUID = $organisationUUID;
        return $this;
    }

    /**
     * Gets as organisationEnhedUUID
     *
     * @return string
     */
    public function getOrganisationEnhedUUID()
    {
        return $this->organisationEnhedUUID;
    }

    /**
     * Sets a new organisationEnhedUUID
     *
     * @param string $organisationEnhedUUID
     * @return self
     */
    public function setOrganisationEnhedUUID($organisationEnhedUUID)
    {
        $this->organisationEnhedUUID = $organisationEnhedUUID;
        return $this;
    }
}

