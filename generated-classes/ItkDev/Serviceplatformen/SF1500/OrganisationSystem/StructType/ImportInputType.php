<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ImportInputType StructType
 * Meta information extracted from the WSDL
 * - definition: urn:oio:sagdok:organisationimportinput:ADD:2.0.0 | urn:oio:sagdok:organisationenhedimportinput:ADD:2.0.0 | urn:oio:sagdok:organisationfunktionimportinput:ADD:2.0.0 | urn:oio:sts:adresseimportinput:ADD:2.0.0 |
 * urn:oio:sts:personimportinput:ADD:2.0.0 | urn:oio:sagdok:brugerimportinput:ADD:2.0.0 | urn:oio:sagdok:interessefaellesskabimportinput:ADD:2.0.0 | urn:oio:sagdok:itsystemimportinput:ADD:2.0.0 | urn:oio:sts:myndighedimportinput:ADD:2.0.0 |
 * urn:oio:sts:virksomhedimportinput:ADD:2.0.0 | urn:oio:sagdok:importinput:ADD:1.0.0
 * @subpackage Structs
 */
class ImportInputType extends AbstractStructBase
{
    /**
     * The NoteTekst
     * Meta information extracted from the WSDL
     * - base: string
     * - content: note
     * - definition: urn:oio:sagdok:note:BDD:1.0.0
     * - maxLength: 1024
     * - minOccurs: 0
     * - ref: sd:NoteTekst
     * @var string|null
     */
    protected ?string $NoteTekst = null;
    /**
     * The Organisation
     * Meta information extracted from the WSDL
     * - content: organisation
     * - ref: org:Organisation
     * @var \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\OrganisationType|null
     */
    protected ?\ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\OrganisationType $Organisation = null;
    /**
     * The OrganisationEnhed
     * Meta information extracted from the WSDL
     * - content: organisationenhed
     * - ref: orgenhed:OrganisationEnhed
     * @var \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\OrganisationEnhedType|null
     */
    protected ?\ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\OrganisationEnhedType $OrganisationEnhed = null;
    /**
     * The OrganisationFunktion
     * Meta information extracted from the WSDL
     * - content: organisationfunktion
     * - ref: orgfunk:OrganisationFunktion
     * @var \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\OrganisationFunktionType|null
     */
    protected ?\ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\OrganisationFunktionType $OrganisationFunktion = null;
    /**
     * The Bruger
     * Meta information extracted from the WSDL
     * - content: bruger
     * - ref: bruger:Bruger
     * @var \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\BrugerType|null
     */
    protected ?\ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\BrugerType $Bruger = null;
    /**
     * The Interessefaellesskab
     * Meta information extracted from the WSDL
     * - content: interessefaellesskab
     * - ref: intfs:Interessefaellesskab
     * @var \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\InteressefaellesskabType|null
     */
    protected ?\ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\InteressefaellesskabType $Interessefaellesskab = null;
    /**
     * The ItSystem
     * Meta information extracted from the WSDL
     * - content: itsystem
     * - ref: itsystem:ItSystem
     * @var \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\ItSystemType|null
     */
    protected ?\ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\ItSystemType $ItSystem = null;
    /**
     * The Adresse
     * Meta information extracted from the WSDL
     * - content: adresse
     * - ref: adresse:Adresse
     * @var \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\AdresseType|null
     */
    protected ?\ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\AdresseType $Adresse = null;
    /**
     * The Myndighed
     * Meta information extracted from the WSDL
     * - content: myndighed
     * - ref: myndighed:Myndighed
     * @var \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\MyndighedType|null
     */
    protected ?\ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\MyndighedType $Myndighed = null;
    /**
     * The Person
     * Meta information extracted from the WSDL
     * - content: person
     * - ref: person:Person
     * @var \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\PersonType|null
     */
    protected ?\ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\PersonType $Person = null;
    /**
     * The Virksomhed
     * Meta information extracted from the WSDL
     * - content: virksomhed
     * - ref: virksomhed:Virksomhed
     * @var \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\VirksomhedType|null
     */
    protected ?\ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\VirksomhedType $Virksomhed = null;
    /**
     * Constructor method for ImportInputType
     * @uses ImportInputType::setNoteTekst()
     * @uses ImportInputType::setOrganisation()
     * @uses ImportInputType::setOrganisationEnhed()
     * @uses ImportInputType::setOrganisationFunktion()
     * @uses ImportInputType::setBruger()
     * @uses ImportInputType::setInteressefaellesskab()
     * @uses ImportInputType::setItSystem()
     * @uses ImportInputType::setAdresse()
     * @uses ImportInputType::setMyndighed()
     * @uses ImportInputType::setPerson()
     * @uses ImportInputType::setVirksomhed()
     * @param string $noteTekst
     * @param \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\OrganisationType $organisation
     * @param \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\OrganisationEnhedType $organisationEnhed
     * @param \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\OrganisationFunktionType $organisationFunktion
     * @param \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\BrugerType $bruger
     * @param \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\InteressefaellesskabType $interessefaellesskab
     * @param \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\ItSystemType $itSystem
     * @param \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\AdresseType $adresse
     * @param \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\MyndighedType $myndighed
     * @param \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\PersonType $person
     * @param \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\VirksomhedType $virksomhed
     */
    public function __construct(?string $noteTekst = null, ?\ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\OrganisationType $organisation = null, ?\ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\OrganisationEnhedType $organisationEnhed = null, ?\ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\OrganisationFunktionType $organisationFunktion = null, ?\ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\BrugerType $bruger = null, ?\ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\InteressefaellesskabType $interessefaellesskab = null, ?\ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\ItSystemType $itSystem = null, ?\ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\AdresseType $adresse = null, ?\ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\MyndighedType $myndighed = null, ?\ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\PersonType $person = null, ?\ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\VirksomhedType $virksomhed = null)
    {
        $this
            ->setNoteTekst($noteTekst)
            ->setOrganisation($organisation)
            ->setOrganisationEnhed($organisationEnhed)
            ->setOrganisationFunktion($organisationFunktion)
            ->setBruger($bruger)
            ->setInteressefaellesskab($interessefaellesskab)
            ->setItSystem($itSystem)
            ->setAdresse($adresse)
            ->setMyndighed($myndighed)
            ->setPerson($person)
            ->setVirksomhed($virksomhed);
    }
    /**
     * Get NoteTekst value
     * @return string|null
     */
    public function getNoteTekst(): ?string
    {
        return $this->NoteTekst;
    }
    /**
     * Set NoteTekst value
     * @param string $noteTekst
     * @return \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\ImportInputType
     */
    public function setNoteTekst(?string $noteTekst = null): self
    {
        // validation for constraint: string
        if (!is_null($noteTekst) && !is_string($noteTekst)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($noteTekst, true), gettype($noteTekst)), __LINE__);
        }
        // validation for constraint: maxLength(1024)
        if (!is_null($noteTekst) && mb_strlen((string) $noteTekst) > 1024) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 1024', mb_strlen((string) $noteTekst)), __LINE__);
        }
        $this->NoteTekst = $noteTekst;
        
        return $this;
    }
    /**
     * Get Organisation value
     * @return \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\OrganisationType|null
     */
    public function getOrganisation(): ?\ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\OrganisationType
    {
        return $this->Organisation;
    }
    /**
     * Set Organisation value
     * @param \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\OrganisationType $organisation
     * @return \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\ImportInputType
     */
    public function setOrganisation(?\ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\OrganisationType $organisation = null): self
    {
        $this->Organisation = $organisation;
        
        return $this;
    }
    /**
     * Get OrganisationEnhed value
     * @return \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\OrganisationEnhedType|null
     */
    public function getOrganisationEnhed(): ?\ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\OrganisationEnhedType
    {
        return $this->OrganisationEnhed;
    }
    /**
     * Set OrganisationEnhed value
     * @param \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\OrganisationEnhedType $organisationEnhed
     * @return \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\ImportInputType
     */
    public function setOrganisationEnhed(?\ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\OrganisationEnhedType $organisationEnhed = null): self
    {
        $this->OrganisationEnhed = $organisationEnhed;
        
        return $this;
    }
    /**
     * Get OrganisationFunktion value
     * @return \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\OrganisationFunktionType|null
     */
    public function getOrganisationFunktion(): ?\ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\OrganisationFunktionType
    {
        return $this->OrganisationFunktion;
    }
    /**
     * Set OrganisationFunktion value
     * @param \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\OrganisationFunktionType $organisationFunktion
     * @return \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\ImportInputType
     */
    public function setOrganisationFunktion(?\ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\OrganisationFunktionType $organisationFunktion = null): self
    {
        $this->OrganisationFunktion = $organisationFunktion;
        
        return $this;
    }
    /**
     * Get Bruger value
     * @return \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\BrugerType|null
     */
    public function getBruger(): ?\ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\BrugerType
    {
        return $this->Bruger;
    }
    /**
     * Set Bruger value
     * @param \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\BrugerType $bruger
     * @return \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\ImportInputType
     */
    public function setBruger(?\ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\BrugerType $bruger = null): self
    {
        $this->Bruger = $bruger;
        
        return $this;
    }
    /**
     * Get Interessefaellesskab value
     * @return \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\InteressefaellesskabType|null
     */
    public function getInteressefaellesskab(): ?\ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\InteressefaellesskabType
    {
        return $this->Interessefaellesskab;
    }
    /**
     * Set Interessefaellesskab value
     * @param \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\InteressefaellesskabType $interessefaellesskab
     * @return \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\ImportInputType
     */
    public function setInteressefaellesskab(?\ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\InteressefaellesskabType $interessefaellesskab = null): self
    {
        $this->Interessefaellesskab = $interessefaellesskab;
        
        return $this;
    }
    /**
     * Get ItSystem value
     * @return \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\ItSystemType|null
     */
    public function getItSystem(): ?\ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\ItSystemType
    {
        return $this->ItSystem;
    }
    /**
     * Set ItSystem value
     * @param \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\ItSystemType $itSystem
     * @return \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\ImportInputType
     */
    public function setItSystem(?\ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\ItSystemType $itSystem = null): self
    {
        $this->ItSystem = $itSystem;
        
        return $this;
    }
    /**
     * Get Adresse value
     * @return \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\AdresseType|null
     */
    public function getAdresse(): ?\ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\AdresseType
    {
        return $this->Adresse;
    }
    /**
     * Set Adresse value
     * @param \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\AdresseType $adresse
     * @return \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\ImportInputType
     */
    public function setAdresse(?\ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\AdresseType $adresse = null): self
    {
        $this->Adresse = $adresse;
        
        return $this;
    }
    /**
     * Get Myndighed value
     * @return \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\MyndighedType|null
     */
    public function getMyndighed(): ?\ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\MyndighedType
    {
        return $this->Myndighed;
    }
    /**
     * Set Myndighed value
     * @param \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\MyndighedType $myndighed
     * @return \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\ImportInputType
     */
    public function setMyndighed(?\ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\MyndighedType $myndighed = null): self
    {
        $this->Myndighed = $myndighed;
        
        return $this;
    }
    /**
     * Get Person value
     * @return \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\PersonType|null
     */
    public function getPerson(): ?\ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\PersonType
    {
        return $this->Person;
    }
    /**
     * Set Person value
     * @param \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\PersonType $person
     * @return \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\ImportInputType
     */
    public function setPerson(?\ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\PersonType $person = null): self
    {
        $this->Person = $person;
        
        return $this;
    }
    /**
     * Get Virksomhed value
     * @return \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\VirksomhedType|null
     */
    public function getVirksomhed(): ?\ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\VirksomhedType
    {
        return $this->Virksomhed;
    }
    /**
     * Set Virksomhed value
     * @param \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\VirksomhedType $virksomhed
     * @return \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\ImportInputType
     */
    public function setVirksomhed(?\ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\VirksomhedType $virksomhed = null): self
    {
        $this->Virksomhed = $virksomhed;
        
        return $this;
    }
}
