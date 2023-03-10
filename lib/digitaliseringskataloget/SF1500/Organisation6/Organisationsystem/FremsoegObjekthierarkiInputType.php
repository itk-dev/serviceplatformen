<?php

namespace Digitaliseringskataloget\SF1500\Organisation6\Organisationsystem;

use Digitaliseringskataloget\Sagdok3_0_0\SoegInputType;

/**
 * Class representing FremsoegObjekthierarkiInputType
 *
 *
 * XSD Type: FremsoegObjekthierarkiInputType
 */
class FremsoegObjekthierarkiInputType extends SoegInputType
{
    /**
     * @var \Digitaliseringskataloget\SF1500\Organisation6\Organisationsystem\OrganisationSoegEgenskab $organisationSoegEgenskab
     */
    private $organisationSoegEgenskab = null;

    /**
     * @var \Digitaliseringskataloget\SF1500\Organisation6\Organisationsystem\OrganisationEnhedSoegEgenskab $organisationEnhedSoegEgenskab
     */
    private $organisationEnhedSoegEgenskab = null;

    /**
     * @var \Digitaliseringskataloget\SF1500\Organisation6\Organisationsystem\OrganisationFunktionSoegEgenskab $organisationFunktionSoegEgenskab
     */
    private $organisationFunktionSoegEgenskab = null;

    /**
     * @var \Digitaliseringskataloget\SF1500\Organisation6\Organisationsystem\BrugerSoegEgenskab $brugerSoegEgenskab
     */
    private $brugerSoegEgenskab = null;

    /**
     * @var \Digitaliseringskataloget\SF1500\Organisation6\Organisationsystem\InteressefaellesskabSoegEgenskab $interessefaellesskabSoegEgenskab
     */
    private $interessefaellesskabSoegEgenskab = null;

    /**
     * @var \Digitaliseringskataloget\SF1500\Organisation6\Organisationsystem\ItSystemSoegEgenskab $itSystemSoegEgenskab
     */
    private $itSystemSoegEgenskab = null;

    /**
     * Gets as organisationSoegEgenskab
     *
     * @return \Digitaliseringskataloget\SF1500\Organisation6\Organisationsystem\OrganisationSoegEgenskab
     */
    public function getOrganisationSoegEgenskab()
    {
        return $this->organisationSoegEgenskab;
    }

    /**
     * Sets a new organisationSoegEgenskab
     *
     * @param \Digitaliseringskataloget\SF1500\Organisation6\Organisationsystem\OrganisationSoegEgenskab $organisationSoegEgenskab
     * @return self
     */
    public function setOrganisationSoegEgenskab(?\Digitaliseringskataloget\SF1500\Organisation6\Organisationsystem\OrganisationSoegEgenskab $organisationSoegEgenskab = null)
    {
        $this->organisationSoegEgenskab = $organisationSoegEgenskab;
        return $this;
    }

    /**
     * Gets as organisationEnhedSoegEgenskab
     *
     * @return \Digitaliseringskataloget\SF1500\Organisation6\Organisationsystem\OrganisationEnhedSoegEgenskab
     */
    public function getOrganisationEnhedSoegEgenskab()
    {
        return $this->organisationEnhedSoegEgenskab;
    }

    /**
     * Sets a new organisationEnhedSoegEgenskab
     *
     * @param \Digitaliseringskataloget\SF1500\Organisation6\Organisationsystem\OrganisationEnhedSoegEgenskab $organisationEnhedSoegEgenskab
     * @return self
     */
    public function setOrganisationEnhedSoegEgenskab(?\Digitaliseringskataloget\SF1500\Organisation6\Organisationsystem\OrganisationEnhedSoegEgenskab $organisationEnhedSoegEgenskab = null)
    {
        $this->organisationEnhedSoegEgenskab = $organisationEnhedSoegEgenskab;
        return $this;
    }

    /**
     * Gets as organisationFunktionSoegEgenskab
     *
     * @return \Digitaliseringskataloget\SF1500\Organisation6\Organisationsystem\OrganisationFunktionSoegEgenskab
     */
    public function getOrganisationFunktionSoegEgenskab()
    {
        return $this->organisationFunktionSoegEgenskab;
    }

    /**
     * Sets a new organisationFunktionSoegEgenskab
     *
     * @param \Digitaliseringskataloget\SF1500\Organisation6\Organisationsystem\OrganisationFunktionSoegEgenskab $organisationFunktionSoegEgenskab
     * @return self
     */
    public function setOrganisationFunktionSoegEgenskab(?\Digitaliseringskataloget\SF1500\Organisation6\Organisationsystem\OrganisationFunktionSoegEgenskab $organisationFunktionSoegEgenskab = null)
    {
        $this->organisationFunktionSoegEgenskab = $organisationFunktionSoegEgenskab;
        return $this;
    }

    /**
     * Gets as brugerSoegEgenskab
     *
     * @return \Digitaliseringskataloget\SF1500\Organisation6\Organisationsystem\BrugerSoegEgenskab
     */
    public function getBrugerSoegEgenskab()
    {
        return $this->brugerSoegEgenskab;
    }

    /**
     * Sets a new brugerSoegEgenskab
     *
     * @param \Digitaliseringskataloget\SF1500\Organisation6\Organisationsystem\BrugerSoegEgenskab $brugerSoegEgenskab
     * @return self
     */
    public function setBrugerSoegEgenskab(?\Digitaliseringskataloget\SF1500\Organisation6\Organisationsystem\BrugerSoegEgenskab $brugerSoegEgenskab = null)
    {
        $this->brugerSoegEgenskab = $brugerSoegEgenskab;
        return $this;
    }

    /**
     * Gets as interessefaellesskabSoegEgenskab
     *
     * @return \Digitaliseringskataloget\SF1500\Organisation6\Organisationsystem\InteressefaellesskabSoegEgenskab
     */
    public function getInteressefaellesskabSoegEgenskab()
    {
        return $this->interessefaellesskabSoegEgenskab;
    }

    /**
     * Sets a new interessefaellesskabSoegEgenskab
     *
     * @param \Digitaliseringskataloget\SF1500\Organisation6\Organisationsystem\InteressefaellesskabSoegEgenskab $interessefaellesskabSoegEgenskab
     * @return self
     */
    public function setInteressefaellesskabSoegEgenskab(?\Digitaliseringskataloget\SF1500\Organisation6\Organisationsystem\InteressefaellesskabSoegEgenskab $interessefaellesskabSoegEgenskab = null)
    {
        $this->interessefaellesskabSoegEgenskab = $interessefaellesskabSoegEgenskab;
        return $this;
    }

    /**
     * Gets as itSystemSoegEgenskab
     *
     * @return \Digitaliseringskataloget\SF1500\Organisation6\Organisationsystem\ItSystemSoegEgenskab
     */
    public function getItSystemSoegEgenskab()
    {
        return $this->itSystemSoegEgenskab;
    }

    /**
     * Sets a new itSystemSoegEgenskab
     *
     * @param \Digitaliseringskataloget\SF1500\Organisation6\Organisationsystem\ItSystemSoegEgenskab $itSystemSoegEgenskab
     * @return self
     */
    public function setItSystemSoegEgenskab(?\Digitaliseringskataloget\SF1500\Organisation6\Organisationsystem\ItSystemSoegEgenskab $itSystemSoegEgenskab = null)
    {
        $this->itSystemSoegEgenskab = $itSystemSoegEgenskab;
        return $this;
    }
}

