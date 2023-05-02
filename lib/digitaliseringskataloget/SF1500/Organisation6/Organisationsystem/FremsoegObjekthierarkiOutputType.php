<?php

namespace Digitaliseringskataloget\SF1500\Organisation6\Organisationsystem;

use Digitaliseringskataloget\Sagdok3_0_0\BasicOutputType;

/**
 * Class representing FremsoegObjekthierarkiOutputType
 *
 *
 * XSD Type: FremsoegObjekthierarkiOutputType
 */
class FremsoegObjekthierarkiOutputType extends BasicOutputType
{
    /**
     * @var \Digitaliseringskataloget\SF1500\Organisation6\Organisation\FiltreretOejebliksbilledeType[] $organisationer
     */
    private $organisationer = null;

    /**
     * @var \Digitaliseringskataloget\SF1500\Organisation6\Organisationenhed\FiltreretOejebliksbilledeType[] $organisationEnheder
     */
    private $organisationEnheder = null;

    /**
     * @var \Digitaliseringskataloget\SF1500\Organisation6\Organisationfunktion\FiltreretOejebliksbilledeType[] $organisationFunktioner
     */
    private $organisationFunktioner = null;

    /**
     * @var \Digitaliseringskataloget\SF1500\Organisation6\Bruger\FiltreretOejebliksbilledeType[] $brugere
     */
    private $brugere = null;

    /**
     * @var \Digitaliseringskataloget\SF1500\Organisation6\Interessefaellesskab\FiltreretOejebliksbilledeType[] $interessefaellesskaber
     */
    private $interessefaellesskaber = null;

    /**
     * @var \Digitaliseringskataloget\SF1500\Organisation6\Itsystem\FiltreretOejebliksbilledeType[] $itSystemer
     */
    private $itSystemer = null;

    /**
     * Adds as filtreretOejebliksbillede
     *
     * @return self
     * @param \Digitaliseringskataloget\SF1500\Organisation6\Organisation\FiltreretOejebliksbilledeType $filtreretOejebliksbillede
     */
    public function addToOrganisationer(\Digitaliseringskataloget\SF1500\Organisation6\Organisation\FiltreretOejebliksbilledeType $filtreretOejebliksbillede)
    {
        $this->organisationer[] = $filtreretOejebliksbillede;
        return $this;
    }

    /**
     * isset organisationer
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOrganisationer($index)
    {
        return isset($this->organisationer[$index]);
    }

    /**
     * unset organisationer
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOrganisationer($index)
    {
        unset($this->organisationer[$index]);
    }

    /**
     * Gets as organisationer
     *
     * @return \Digitaliseringskataloget\SF1500\Organisation6\Organisation\FiltreretOejebliksbilledeType[]
     */
    public function getOrganisationer()
    {
        return $this->organisationer;
    }

    /**
     * Sets a new organisationer
     *
     * @param \Digitaliseringskataloget\SF1500\Organisation6\Organisation\FiltreretOejebliksbilledeType[] $organisationer
     * @return self
     */
    public function setOrganisationer(array $organisationer)
    {
        $this->organisationer = $organisationer;
        return $this;
    }

    /**
     * Adds as filtreretOejebliksbillede
     *
     * @return self
     * @param \Digitaliseringskataloget\SF1500\Organisation6\Organisationenhed\FiltreretOejebliksbilledeType $filtreretOejebliksbillede
     */
    public function addToOrganisationEnheder(\Digitaliseringskataloget\SF1500\Organisation6\Organisationenhed\FiltreretOejebliksbilledeType $filtreretOejebliksbillede)
    {
        $this->organisationEnheder[] = $filtreretOejebliksbillede;
        return $this;
    }

    /**
     * isset organisationEnheder
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOrganisationEnheder($index)
    {
        return isset($this->organisationEnheder[$index]);
    }

    /**
     * unset organisationEnheder
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOrganisationEnheder($index)
    {
        unset($this->organisationEnheder[$index]);
    }

    /**
     * Gets as organisationEnheder
     *
     * @return \Digitaliseringskataloget\SF1500\Organisation6\Organisationenhed\FiltreretOejebliksbilledeType[]
     */
    public function getOrganisationEnheder()
    {
        return $this->organisationEnheder;
    }

    /**
     * Sets a new organisationEnheder
     *
     * @param \Digitaliseringskataloget\SF1500\Organisation6\Organisationenhed\FiltreretOejebliksbilledeType[] $organisationEnheder
     * @return self
     */
    public function setOrganisationEnheder(array $organisationEnheder)
    {
        $this->organisationEnheder = $organisationEnheder;
        return $this;
    }

    /**
     * Adds as filtreretOejebliksbillede
     *
     * @return self
     * @param \Digitaliseringskataloget\SF1500\Organisation6\Organisationfunktion\FiltreretOejebliksbilledeType $filtreretOejebliksbillede
     */
    public function addToOrganisationFunktioner(\Digitaliseringskataloget\SF1500\Organisation6\Organisationfunktion\FiltreretOejebliksbilledeType $filtreretOejebliksbillede)
    {
        $this->organisationFunktioner[] = $filtreretOejebliksbillede;
        return $this;
    }

    /**
     * isset organisationFunktioner
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOrganisationFunktioner($index)
    {
        return isset($this->organisationFunktioner[$index]);
    }

    /**
     * unset organisationFunktioner
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOrganisationFunktioner($index)
    {
        unset($this->organisationFunktioner[$index]);
    }

    /**
     * Gets as organisationFunktioner
     *
     * @return \Digitaliseringskataloget\SF1500\Organisation6\Organisationfunktion\FiltreretOejebliksbilledeType[]
     */
    public function getOrganisationFunktioner()
    {
        return $this->organisationFunktioner;
    }

    /**
     * Sets a new organisationFunktioner
     *
     * @param \Digitaliseringskataloget\SF1500\Organisation6\Organisationfunktion\FiltreretOejebliksbilledeType[] $organisationFunktioner
     * @return self
     */
    public function setOrganisationFunktioner(array $organisationFunktioner)
    {
        $this->organisationFunktioner = $organisationFunktioner;
        return $this;
    }

    /**
     * Adds as filtreretOejebliksbillede
     *
     * @return self
     * @param \Digitaliseringskataloget\SF1500\Organisation6\Bruger\FiltreretOejebliksbilledeType $filtreretOejebliksbillede
     */
    public function addToBrugere(\Digitaliseringskataloget\SF1500\Organisation6\Bruger\FiltreretOejebliksbilledeType $filtreretOejebliksbillede)
    {
        $this->brugere[] = $filtreretOejebliksbillede;
        return $this;
    }

    /**
     * isset brugere
     *
     * @param int|string $index
     * @return bool
     */
    public function issetBrugere($index)
    {
        return isset($this->brugere[$index]);
    }

    /**
     * unset brugere
     *
     * @param int|string $index
     * @return void
     */
    public function unsetBrugere($index)
    {
        unset($this->brugere[$index]);
    }

    /**
     * Gets as brugere
     *
     * @return \Digitaliseringskataloget\SF1500\Organisation6\Bruger\FiltreretOejebliksbilledeType[]
     */
    public function getBrugere()
    {
        return $this->brugere;
    }

    /**
     * Sets a new brugere
     *
     * @param \Digitaliseringskataloget\SF1500\Organisation6\Bruger\FiltreretOejebliksbilledeType[] $brugere
     * @return self
     */
    public function setBrugere(array $brugere)
    {
        $this->brugere = $brugere;
        return $this;
    }

    /**
     * Adds as filtreretOejebliksbillede
     *
     * @return self
     * @param \Digitaliseringskataloget\SF1500\Organisation6\Interessefaellesskab\FiltreretOejebliksbilledeType $filtreretOejebliksbillede
     */
    public function addToInteressefaellesskaber(\Digitaliseringskataloget\SF1500\Organisation6\Interessefaellesskab\FiltreretOejebliksbilledeType $filtreretOejebliksbillede)
    {
        $this->interessefaellesskaber[] = $filtreretOejebliksbillede;
        return $this;
    }

    /**
     * isset interessefaellesskaber
     *
     * @param int|string $index
     * @return bool
     */
    public function issetInteressefaellesskaber($index)
    {
        return isset($this->interessefaellesskaber[$index]);
    }

    /**
     * unset interessefaellesskaber
     *
     * @param int|string $index
     * @return void
     */
    public function unsetInteressefaellesskaber($index)
    {
        unset($this->interessefaellesskaber[$index]);
    }

    /**
     * Gets as interessefaellesskaber
     *
     * @return \Digitaliseringskataloget\SF1500\Organisation6\Interessefaellesskab\FiltreretOejebliksbilledeType[]
     */
    public function getInteressefaellesskaber()
    {
        return $this->interessefaellesskaber;
    }

    /**
     * Sets a new interessefaellesskaber
     *
     * @param \Digitaliseringskataloget\SF1500\Organisation6\Interessefaellesskab\FiltreretOejebliksbilledeType[] $interessefaellesskaber
     * @return self
     */
    public function setInteressefaellesskaber(array $interessefaellesskaber)
    {
        $this->interessefaellesskaber = $interessefaellesskaber;
        return $this;
    }

    /**
     * Adds as filtreretOejebliksbillede
     *
     * @return self
     * @param \Digitaliseringskataloget\SF1500\Organisation6\Itsystem\FiltreretOejebliksbilledeType $filtreretOejebliksbillede
     */
    public function addToItSystemer(\Digitaliseringskataloget\SF1500\Organisation6\Itsystem\FiltreretOejebliksbilledeType $filtreretOejebliksbillede)
    {
        $this->itSystemer[] = $filtreretOejebliksbillede;
        return $this;
    }

    /**
     * isset itSystemer
     *
     * @param int|string $index
     * @return bool
     */
    public function issetItSystemer($index)
    {
        return isset($this->itSystemer[$index]);
    }

    /**
     * unset itSystemer
     *
     * @param int|string $index
     * @return void
     */
    public function unsetItSystemer($index)
    {
        unset($this->itSystemer[$index]);
    }

    /**
     * Gets as itSystemer
     *
     * @return \Digitaliseringskataloget\SF1500\Organisation6\Itsystem\FiltreretOejebliksbilledeType[]
     */
    public function getItSystemer()
    {
        return $this->itSystemer;
    }

    /**
     * Sets a new itSystemer
     *
     * @param \Digitaliseringskataloget\SF1500\Organisation6\Itsystem\FiltreretOejebliksbilledeType[] $itSystemer
     * @return self
     */
    public function setItSystemer(array $itSystemer)
    {
        $this->itSystemer = $itSystemer;
        return $this;
    }
}

