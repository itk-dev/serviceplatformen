<?php

namespace Digitaliseringskataloget\SF1500\Organisation6\Organisation;

/**
 * Class representing RelationListeType
 *
 *
 * XSD Type: RelationListeType
 */
class RelationListeType
{
    /**
     * @var \Digitaliseringskataloget\Sagdok3_0_0\Adresser[] $adresser
     */
    private $adresser = [
        
    ];

    /**
     * @var \Digitaliseringskataloget\Sagdok3_0_0\Ansatte[] $ansatte
     */
    private $ansatte = [
        
    ];

    /**
     * @var \Digitaliseringskataloget\Sagdok3_0_0\Branche $branche
     */
    private $branche = null;

    /**
     * @var \Digitaliseringskataloget\Sagdok3_0_0\Organisationstype $organisationstype
     */
    private $organisationstype = null;

    /**
     * @var \Digitaliseringskataloget\Sagdok3_0_0\Myndighed $myndighed
     */
    private $myndighed = null;

    /**
     * @var \Digitaliseringskataloget\Sagdok3_0_0\Myndighedstype $myndighedstype
     */
    private $myndighedstype = null;

    /**
     * @var \Digitaliseringskataloget\Sagdok3_0_0\TilknyttedeOpgaver[] $tilknyttedeOpgaver
     */
    private $tilknyttedeOpgaver = [
        
    ];

    /**
     * @var \Digitaliseringskataloget\Sagdok3_0_0\Overordnet $overordnet
     */
    private $overordnet = null;

    /**
     * @var \Digitaliseringskataloget\Sagdok3_0_0\Produktionsenhed $produktionsenhed
     */
    private $produktionsenhed = null;

    /**
     * @var \Digitaliseringskataloget\Sagdok3_0_0\Skatteenhed $skatteenhed
     */
    private $skatteenhed = null;

    /**
     * @var \Digitaliseringskataloget\Sagdok3_0_0\Tilhoerer $tilhoerer
     */
    private $tilhoerer = null;

    /**
     * @var \Digitaliseringskataloget\Sagdok3_0_0\TilknyttedeBrugere[] $tilknyttedeBrugere
     */
    private $tilknyttedeBrugere = [
        
    ];

    /**
     * @var \Digitaliseringskataloget\Sagdok3_0_0\TilknyttedeEnheder[] $tilknyttedeEnheder
     */
    private $tilknyttedeEnheder = [
        
    ];

    /**
     * @var \Digitaliseringskataloget\Sagdok3_0_0\TilknyttedeFunktioner[] $tilknyttedeFunktioner
     */
    private $tilknyttedeFunktioner = [
        
    ];

    /**
     * @var \Digitaliseringskataloget\Sagdok3_0_0\TilknyttedeInteressefaellesskaber[] $tilknyttedeInteressefaellesskaber
     */
    private $tilknyttedeInteressefaellesskaber = [
        
    ];

    /**
     * @var \Digitaliseringskataloget\Sagdok3_0_0\TilknyttedeOrganisationer[] $tilknyttedeOrganisationer
     */
    private $tilknyttedeOrganisationer = [
        
    ];

    /**
     * @var \Digitaliseringskataloget\Sagdok3_0_0\TilknyttedePersoner[] $tilknyttedePersoner
     */
    private $tilknyttedePersoner = [
        
    ];

    /**
     * @var \Digitaliseringskataloget\Sagdok3_0_0\TilknyttedeItSystemer[] $tilknyttedeItSystemer
     */
    private $tilknyttedeItSystemer = [
        
    ];

    /**
     * @var \Digitaliseringskataloget\Sagdok3_0_0\Virksomhed $virksomhed
     */
    private $virksomhed = null;

    /**
     * @var \Digitaliseringskataloget\Sagdok3_0_0\Virksomhedstype $virksomhedstype
     */
    private $virksomhedstype = null;

    /**
     * @var \Digitaliseringskataloget\Sagdok3_0_0\LokalUdvidelse $lokalUdvidelse
     */
    private $lokalUdvidelse = null;

    /**
     * Adds as adresser
     *
     * @return self
     * @param \Digitaliseringskataloget\Sagdok3_0_0\Adresser $adresser
     */
    public function addToAdresser(\Digitaliseringskataloget\Sagdok3_0_0\Adresser $adresser)
    {
        $this->adresser[] = $adresser;
        return $this;
    }

    /**
     * isset adresser
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAdresser($index)
    {
        return isset($this->adresser[$index]);
    }

    /**
     * unset adresser
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAdresser($index)
    {
        unset($this->adresser[$index]);
    }

    /**
     * Gets as adresser
     *
     * @return \Digitaliseringskataloget\Sagdok3_0_0\Adresser[]
     */
    public function getAdresser()
    {
        return $this->adresser;
    }

    /**
     * Sets a new adresser
     *
     * @param \Digitaliseringskataloget\Sagdok3_0_0\Adresser[] $adresser
     * @return self
     */
    public function setAdresser(array $adresser = null)
    {
        $this->adresser = $adresser;
        return $this;
    }

    /**
     * Adds as ansatte
     *
     * @return self
     * @param \Digitaliseringskataloget\Sagdok3_0_0\Ansatte $ansatte
     */
    public function addToAnsatte(\Digitaliseringskataloget\Sagdok3_0_0\Ansatte $ansatte)
    {
        $this->ansatte[] = $ansatte;
        return $this;
    }

    /**
     * isset ansatte
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAnsatte($index)
    {
        return isset($this->ansatte[$index]);
    }

    /**
     * unset ansatte
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAnsatte($index)
    {
        unset($this->ansatte[$index]);
    }

    /**
     * Gets as ansatte
     *
     * @return \Digitaliseringskataloget\Sagdok3_0_0\Ansatte[]
     */
    public function getAnsatte()
    {
        return $this->ansatte;
    }

    /**
     * Sets a new ansatte
     *
     * @param \Digitaliseringskataloget\Sagdok3_0_0\Ansatte[] $ansatte
     * @return self
     */
    public function setAnsatte(array $ansatte = null)
    {
        $this->ansatte = $ansatte;
        return $this;
    }

    /**
     * Gets as branche
     *
     * @return \Digitaliseringskataloget\Sagdok3_0_0\Branche
     */
    public function getBranche()
    {
        return $this->branche;
    }

    /**
     * Sets a new branche
     *
     * @param \Digitaliseringskataloget\Sagdok3_0_0\Branche $branche
     * @return self
     */
    public function setBranche(?\Digitaliseringskataloget\Sagdok3_0_0\Branche $branche = null)
    {
        $this->branche = $branche;
        return $this;
    }

    /**
     * Gets as organisationstype
     *
     * @return \Digitaliseringskataloget\Sagdok3_0_0\Organisationstype
     */
    public function getOrganisationstype()
    {
        return $this->organisationstype;
    }

    /**
     * Sets a new organisationstype
     *
     * @param \Digitaliseringskataloget\Sagdok3_0_0\Organisationstype $organisationstype
     * @return self
     */
    public function setOrganisationstype(?\Digitaliseringskataloget\Sagdok3_0_0\Organisationstype $organisationstype = null)
    {
        $this->organisationstype = $organisationstype;
        return $this;
    }

    /**
     * Gets as myndighed
     *
     * @return \Digitaliseringskataloget\Sagdok3_0_0\Myndighed
     */
    public function getMyndighed()
    {
        return $this->myndighed;
    }

    /**
     * Sets a new myndighed
     *
     * @param \Digitaliseringskataloget\Sagdok3_0_0\Myndighed $myndighed
     * @return self
     */
    public function setMyndighed(?\Digitaliseringskataloget\Sagdok3_0_0\Myndighed $myndighed = null)
    {
        $this->myndighed = $myndighed;
        return $this;
    }

    /**
     * Gets as myndighedstype
     *
     * @return \Digitaliseringskataloget\Sagdok3_0_0\Myndighedstype
     */
    public function getMyndighedstype()
    {
        return $this->myndighedstype;
    }

    /**
     * Sets a new myndighedstype
     *
     * @param \Digitaliseringskataloget\Sagdok3_0_0\Myndighedstype $myndighedstype
     * @return self
     */
    public function setMyndighedstype(?\Digitaliseringskataloget\Sagdok3_0_0\Myndighedstype $myndighedstype = null)
    {
        $this->myndighedstype = $myndighedstype;
        return $this;
    }

    /**
     * Adds as tilknyttedeOpgaver
     *
     * @return self
     * @param \Digitaliseringskataloget\Sagdok3_0_0\TilknyttedeOpgaver $tilknyttedeOpgaver
     */
    public function addToTilknyttedeOpgaver(\Digitaliseringskataloget\Sagdok3_0_0\TilknyttedeOpgaver $tilknyttedeOpgaver)
    {
        $this->tilknyttedeOpgaver[] = $tilknyttedeOpgaver;
        return $this;
    }

    /**
     * isset tilknyttedeOpgaver
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTilknyttedeOpgaver($index)
    {
        return isset($this->tilknyttedeOpgaver[$index]);
    }

    /**
     * unset tilknyttedeOpgaver
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTilknyttedeOpgaver($index)
    {
        unset($this->tilknyttedeOpgaver[$index]);
    }

    /**
     * Gets as tilknyttedeOpgaver
     *
     * @return \Digitaliseringskataloget\Sagdok3_0_0\TilknyttedeOpgaver[]
     */
    public function getTilknyttedeOpgaver()
    {
        return $this->tilknyttedeOpgaver;
    }

    /**
     * Sets a new tilknyttedeOpgaver
     *
     * @param \Digitaliseringskataloget\Sagdok3_0_0\TilknyttedeOpgaver[] $tilknyttedeOpgaver
     * @return self
     */
    public function setTilknyttedeOpgaver(array $tilknyttedeOpgaver = null)
    {
        $this->tilknyttedeOpgaver = $tilknyttedeOpgaver;
        return $this;
    }

    /**
     * Gets as overordnet
     *
     * @return \Digitaliseringskataloget\Sagdok3_0_0\Overordnet
     */
    public function getOverordnet()
    {
        return $this->overordnet;
    }

    /**
     * Sets a new overordnet
     *
     * @param \Digitaliseringskataloget\Sagdok3_0_0\Overordnet $overordnet
     * @return self
     */
    public function setOverordnet(?\Digitaliseringskataloget\Sagdok3_0_0\Overordnet $overordnet = null)
    {
        $this->overordnet = $overordnet;
        return $this;
    }

    /**
     * Gets as produktionsenhed
     *
     * @return \Digitaliseringskataloget\Sagdok3_0_0\Produktionsenhed
     */
    public function getProduktionsenhed()
    {
        return $this->produktionsenhed;
    }

    /**
     * Sets a new produktionsenhed
     *
     * @param \Digitaliseringskataloget\Sagdok3_0_0\Produktionsenhed $produktionsenhed
     * @return self
     */
    public function setProduktionsenhed(?\Digitaliseringskataloget\Sagdok3_0_0\Produktionsenhed $produktionsenhed = null)
    {
        $this->produktionsenhed = $produktionsenhed;
        return $this;
    }

    /**
     * Gets as skatteenhed
     *
     * @return \Digitaliseringskataloget\Sagdok3_0_0\Skatteenhed
     */
    public function getSkatteenhed()
    {
        return $this->skatteenhed;
    }

    /**
     * Sets a new skatteenhed
     *
     * @param \Digitaliseringskataloget\Sagdok3_0_0\Skatteenhed $skatteenhed
     * @return self
     */
    public function setSkatteenhed(?\Digitaliseringskataloget\Sagdok3_0_0\Skatteenhed $skatteenhed = null)
    {
        $this->skatteenhed = $skatteenhed;
        return $this;
    }

    /**
     * Gets as tilhoerer
     *
     * @return \Digitaliseringskataloget\Sagdok3_0_0\Tilhoerer
     */
    public function getTilhoerer()
    {
        return $this->tilhoerer;
    }

    /**
     * Sets a new tilhoerer
     *
     * @param \Digitaliseringskataloget\Sagdok3_0_0\Tilhoerer $tilhoerer
     * @return self
     */
    public function setTilhoerer(?\Digitaliseringskataloget\Sagdok3_0_0\Tilhoerer $tilhoerer = null)
    {
        $this->tilhoerer = $tilhoerer;
        return $this;
    }

    /**
     * Adds as tilknyttedeBrugere
     *
     * @return self
     * @param \Digitaliseringskataloget\Sagdok3_0_0\TilknyttedeBrugere $tilknyttedeBrugere
     */
    public function addToTilknyttedeBrugere(\Digitaliseringskataloget\Sagdok3_0_0\TilknyttedeBrugere $tilknyttedeBrugere)
    {
        $this->tilknyttedeBrugere[] = $tilknyttedeBrugere;
        return $this;
    }

    /**
     * isset tilknyttedeBrugere
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTilknyttedeBrugere($index)
    {
        return isset($this->tilknyttedeBrugere[$index]);
    }

    /**
     * unset tilknyttedeBrugere
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTilknyttedeBrugere($index)
    {
        unset($this->tilknyttedeBrugere[$index]);
    }

    /**
     * Gets as tilknyttedeBrugere
     *
     * @return \Digitaliseringskataloget\Sagdok3_0_0\TilknyttedeBrugere[]
     */
    public function getTilknyttedeBrugere()
    {
        return $this->tilknyttedeBrugere;
    }

    /**
     * Sets a new tilknyttedeBrugere
     *
     * @param \Digitaliseringskataloget\Sagdok3_0_0\TilknyttedeBrugere[] $tilknyttedeBrugere
     * @return self
     */
    public function setTilknyttedeBrugere(array $tilknyttedeBrugere = null)
    {
        $this->tilknyttedeBrugere = $tilknyttedeBrugere;
        return $this;
    }

    /**
     * Adds as tilknyttedeEnheder
     *
     * @return self
     * @param \Digitaliseringskataloget\Sagdok3_0_0\TilknyttedeEnheder $tilknyttedeEnheder
     */
    public function addToTilknyttedeEnheder(\Digitaliseringskataloget\Sagdok3_0_0\TilknyttedeEnheder $tilknyttedeEnheder)
    {
        $this->tilknyttedeEnheder[] = $tilknyttedeEnheder;
        return $this;
    }

    /**
     * isset tilknyttedeEnheder
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTilknyttedeEnheder($index)
    {
        return isset($this->tilknyttedeEnheder[$index]);
    }

    /**
     * unset tilknyttedeEnheder
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTilknyttedeEnheder($index)
    {
        unset($this->tilknyttedeEnheder[$index]);
    }

    /**
     * Gets as tilknyttedeEnheder
     *
     * @return \Digitaliseringskataloget\Sagdok3_0_0\TilknyttedeEnheder[]
     */
    public function getTilknyttedeEnheder()
    {
        return $this->tilknyttedeEnheder;
    }

    /**
     * Sets a new tilknyttedeEnheder
     *
     * @param \Digitaliseringskataloget\Sagdok3_0_0\TilknyttedeEnheder[] $tilknyttedeEnheder
     * @return self
     */
    public function setTilknyttedeEnheder(array $tilknyttedeEnheder = null)
    {
        $this->tilknyttedeEnheder = $tilknyttedeEnheder;
        return $this;
    }

    /**
     * Adds as tilknyttedeFunktioner
     *
     * @return self
     * @param \Digitaliseringskataloget\Sagdok3_0_0\TilknyttedeFunktioner $tilknyttedeFunktioner
     */
    public function addToTilknyttedeFunktioner(\Digitaliseringskataloget\Sagdok3_0_0\TilknyttedeFunktioner $tilknyttedeFunktioner)
    {
        $this->tilknyttedeFunktioner[] = $tilknyttedeFunktioner;
        return $this;
    }

    /**
     * isset tilknyttedeFunktioner
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTilknyttedeFunktioner($index)
    {
        return isset($this->tilknyttedeFunktioner[$index]);
    }

    /**
     * unset tilknyttedeFunktioner
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTilknyttedeFunktioner($index)
    {
        unset($this->tilknyttedeFunktioner[$index]);
    }

    /**
     * Gets as tilknyttedeFunktioner
     *
     * @return \Digitaliseringskataloget\Sagdok3_0_0\TilknyttedeFunktioner[]
     */
    public function getTilknyttedeFunktioner()
    {
        return $this->tilknyttedeFunktioner;
    }

    /**
     * Sets a new tilknyttedeFunktioner
     *
     * @param \Digitaliseringskataloget\Sagdok3_0_0\TilknyttedeFunktioner[] $tilknyttedeFunktioner
     * @return self
     */
    public function setTilknyttedeFunktioner(array $tilknyttedeFunktioner = null)
    {
        $this->tilknyttedeFunktioner = $tilknyttedeFunktioner;
        return $this;
    }

    /**
     * Adds as tilknyttedeInteressefaellesskaber
     *
     * @return self
     * @param \Digitaliseringskataloget\Sagdok3_0_0\TilknyttedeInteressefaellesskaber $tilknyttedeInteressefaellesskaber
     */
    public function addToTilknyttedeInteressefaellesskaber(\Digitaliseringskataloget\Sagdok3_0_0\TilknyttedeInteressefaellesskaber $tilknyttedeInteressefaellesskaber)
    {
        $this->tilknyttedeInteressefaellesskaber[] = $tilknyttedeInteressefaellesskaber;
        return $this;
    }

    /**
     * isset tilknyttedeInteressefaellesskaber
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTilknyttedeInteressefaellesskaber($index)
    {
        return isset($this->tilknyttedeInteressefaellesskaber[$index]);
    }

    /**
     * unset tilknyttedeInteressefaellesskaber
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTilknyttedeInteressefaellesskaber($index)
    {
        unset($this->tilknyttedeInteressefaellesskaber[$index]);
    }

    /**
     * Gets as tilknyttedeInteressefaellesskaber
     *
     * @return \Digitaliseringskataloget\Sagdok3_0_0\TilknyttedeInteressefaellesskaber[]
     */
    public function getTilknyttedeInteressefaellesskaber()
    {
        return $this->tilknyttedeInteressefaellesskaber;
    }

    /**
     * Sets a new tilknyttedeInteressefaellesskaber
     *
     * @param \Digitaliseringskataloget\Sagdok3_0_0\TilknyttedeInteressefaellesskaber[] $tilknyttedeInteressefaellesskaber
     * @return self
     */
    public function setTilknyttedeInteressefaellesskaber(array $tilknyttedeInteressefaellesskaber = null)
    {
        $this->tilknyttedeInteressefaellesskaber = $tilknyttedeInteressefaellesskaber;
        return $this;
    }

    /**
     * Adds as tilknyttedeOrganisationer
     *
     * @return self
     * @param \Digitaliseringskataloget\Sagdok3_0_0\TilknyttedeOrganisationer $tilknyttedeOrganisationer
     */
    public function addToTilknyttedeOrganisationer(\Digitaliseringskataloget\Sagdok3_0_0\TilknyttedeOrganisationer $tilknyttedeOrganisationer)
    {
        $this->tilknyttedeOrganisationer[] = $tilknyttedeOrganisationer;
        return $this;
    }

    /**
     * isset tilknyttedeOrganisationer
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTilknyttedeOrganisationer($index)
    {
        return isset($this->tilknyttedeOrganisationer[$index]);
    }

    /**
     * unset tilknyttedeOrganisationer
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTilknyttedeOrganisationer($index)
    {
        unset($this->tilknyttedeOrganisationer[$index]);
    }

    /**
     * Gets as tilknyttedeOrganisationer
     *
     * @return \Digitaliseringskataloget\Sagdok3_0_0\TilknyttedeOrganisationer[]
     */
    public function getTilknyttedeOrganisationer()
    {
        return $this->tilknyttedeOrganisationer;
    }

    /**
     * Sets a new tilknyttedeOrganisationer
     *
     * @param \Digitaliseringskataloget\Sagdok3_0_0\TilknyttedeOrganisationer[] $tilknyttedeOrganisationer
     * @return self
     */
    public function setTilknyttedeOrganisationer(array $tilknyttedeOrganisationer = null)
    {
        $this->tilknyttedeOrganisationer = $tilknyttedeOrganisationer;
        return $this;
    }

    /**
     * Adds as tilknyttedePersoner
     *
     * @return self
     * @param \Digitaliseringskataloget\Sagdok3_0_0\TilknyttedePersoner $tilknyttedePersoner
     */
    public function addToTilknyttedePersoner(\Digitaliseringskataloget\Sagdok3_0_0\TilknyttedePersoner $tilknyttedePersoner)
    {
        $this->tilknyttedePersoner[] = $tilknyttedePersoner;
        return $this;
    }

    /**
     * isset tilknyttedePersoner
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTilknyttedePersoner($index)
    {
        return isset($this->tilknyttedePersoner[$index]);
    }

    /**
     * unset tilknyttedePersoner
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTilknyttedePersoner($index)
    {
        unset($this->tilknyttedePersoner[$index]);
    }

    /**
     * Gets as tilknyttedePersoner
     *
     * @return \Digitaliseringskataloget\Sagdok3_0_0\TilknyttedePersoner[]
     */
    public function getTilknyttedePersoner()
    {
        return $this->tilknyttedePersoner;
    }

    /**
     * Sets a new tilknyttedePersoner
     *
     * @param \Digitaliseringskataloget\Sagdok3_0_0\TilknyttedePersoner[] $tilknyttedePersoner
     * @return self
     */
    public function setTilknyttedePersoner(array $tilknyttedePersoner = null)
    {
        $this->tilknyttedePersoner = $tilknyttedePersoner;
        return $this;
    }

    /**
     * Adds as tilknyttedeItSystemer
     *
     * @return self
     * @param \Digitaliseringskataloget\Sagdok3_0_0\TilknyttedeItSystemer $tilknyttedeItSystemer
     */
    public function addToTilknyttedeItSystemer(\Digitaliseringskataloget\Sagdok3_0_0\TilknyttedeItSystemer $tilknyttedeItSystemer)
    {
        $this->tilknyttedeItSystemer[] = $tilknyttedeItSystemer;
        return $this;
    }

    /**
     * isset tilknyttedeItSystemer
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTilknyttedeItSystemer($index)
    {
        return isset($this->tilknyttedeItSystemer[$index]);
    }

    /**
     * unset tilknyttedeItSystemer
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTilknyttedeItSystemer($index)
    {
        unset($this->tilknyttedeItSystemer[$index]);
    }

    /**
     * Gets as tilknyttedeItSystemer
     *
     * @return \Digitaliseringskataloget\Sagdok3_0_0\TilknyttedeItSystemer[]
     */
    public function getTilknyttedeItSystemer()
    {
        return $this->tilknyttedeItSystemer;
    }

    /**
     * Sets a new tilknyttedeItSystemer
     *
     * @param \Digitaliseringskataloget\Sagdok3_0_0\TilknyttedeItSystemer[] $tilknyttedeItSystemer
     * @return self
     */
    public function setTilknyttedeItSystemer(array $tilknyttedeItSystemer = null)
    {
        $this->tilknyttedeItSystemer = $tilknyttedeItSystemer;
        return $this;
    }

    /**
     * Gets as virksomhed
     *
     * @return \Digitaliseringskataloget\Sagdok3_0_0\Virksomhed
     */
    public function getVirksomhed()
    {
        return $this->virksomhed;
    }

    /**
     * Sets a new virksomhed
     *
     * @param \Digitaliseringskataloget\Sagdok3_0_0\Virksomhed $virksomhed
     * @return self
     */
    public function setVirksomhed(?\Digitaliseringskataloget\Sagdok3_0_0\Virksomhed $virksomhed = null)
    {
        $this->virksomhed = $virksomhed;
        return $this;
    }

    /**
     * Gets as virksomhedstype
     *
     * @return \Digitaliseringskataloget\Sagdok3_0_0\Virksomhedstype
     */
    public function getVirksomhedstype()
    {
        return $this->virksomhedstype;
    }

    /**
     * Sets a new virksomhedstype
     *
     * @param \Digitaliseringskataloget\Sagdok3_0_0\Virksomhedstype $virksomhedstype
     * @return self
     */
    public function setVirksomhedstype(?\Digitaliseringskataloget\Sagdok3_0_0\Virksomhedstype $virksomhedstype = null)
    {
        $this->virksomhedstype = $virksomhedstype;
        return $this;
    }

    /**
     * Gets as lokalUdvidelse
     *
     * @return \Digitaliseringskataloget\Sagdok3_0_0\LokalUdvidelse
     */
    public function getLokalUdvidelse()
    {
        return $this->lokalUdvidelse;
    }

    /**
     * Sets a new lokalUdvidelse
     *
     * @param \Digitaliseringskataloget\Sagdok3_0_0\LokalUdvidelse $lokalUdvidelse
     * @return self
     */
    public function setLokalUdvidelse(?\Digitaliseringskataloget\Sagdok3_0_0\LokalUdvidelse $lokalUdvidelse = null)
    {
        $this->lokalUdvidelse = $lokalUdvidelse;
        return $this;
    }
}
