<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EgenskabType StructType
 * Meta information extracted from the WSDL
 * - definition: urn:oio:sagdok:organisationegenskaber:ADD:2.0.0 | urn:oio:sagdok:organisationenhedegenskaber:ADD:1.0.0 | urn:oio:sagdok:organisationfunktionegenskaber:ADD:1.0.0 | urn:oio:sagdok:adresseegenskaber:ADD:1.0.0 |
 * urn:oio:sagdok:personegenskaber:ADD:1.0.0 | urn:oio:sagdok:brugeregenskaber:ADD:1.0.0 | urn:oio:sagdok:interessefaellesskabegenskaber:ADD:1.0.0 | urn:oio:sagdok:itsystemegenskaber:ADD:1.0.0 | urn:oio:sagdok:myndighedegenskaber:ADD:1.0.0 |
 * urn:oio:sagdok:virksomhedegenskaber:ADD:1.0.0
 * @subpackage Structs
 */
class EgenskabType extends AbstractStructBase
{
    /**
     * The Virkning
     * Meta information extracted from the WSDL
     * - content: virkning
     * - minOccurs: 0
     * - ref: sd:Virkning
     * @var \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\VirkningType|null
     */
    protected ?\ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\VirkningType $Virkning = null;
    /**
     * The BrugervendtNoegleTekst
     * Meta information extracted from the WSDL
     * - base: string
     * - content: brugervendtnoegle
     * - definition: urn:oio:sagdok:brugervendtnoegle:BDD:1.0.0
     * - maxLength: 50
     * - minOccurs: 0
     * - ref: sd:BrugervendtNoegleTekst
     * @var string|null
     */
    protected ?string $BrugervendtNoegleTekst = null;
    /**
     * The OrganisationNavn
     * Meta information extracted from the WSDL
     * - base: string
     * - content: organisationsnavn
     * - definition: urn:oio:sagdok:organisationsnavn:BDD:1.0.0
     * - maxLength: 200
     * - minOccurs: 0
     * - ref: sd:OrganisationNavn
     * @var string|null
     */
    protected ?string $OrganisationNavn = null;
    /**
     * The EnhedNavn
     * Meta information extracted from the WSDL
     * - base: string
     * - content: organisationenhedsnavn
     * - definition: urn:oio:sagdok:organisationenhedsnavn:BDD:1.0.0
     * - maxLength: 200
     * - minOccurs: 0
     * - ref: sd:EnhedNavn
     * @var string|null
     */
    protected ?string $EnhedNavn = null;
    /**
     * The FunktionNavn
     * Meta information extracted from the WSDL
     * - base: string
     * - content: organisationfunktionsnavn
     * - definition: urn:oio:sagdok:organisationfunktionsnavn:BDD:1.0.0
     * - maxLength: 200
     * - minOccurs: 0
     * - ref: sd:FunktionNavn
     * @var string|null
     */
    protected ?string $FunktionNavn = null;
    /**
     * The BrugerNavn
     * Meta information extracted from the WSDL
     * - base: string
     * - content: brugernavn
     * - definition: urn:oio:sagdok:brugernavn:BDD:1.0.0
     * - maxLength: 200
     * - minOccurs: 0
     * - ref: sd:BrugerNavn
     * @var string|null
     */
    protected ?string $BrugerNavn = null;
    /**
     * The BrugerTypeTekst
     * Meta information extracted from the WSDL
     * - base: string
     * - content: brugertype
     * - definition: urn:oio:sagdok:brugertype:BDD:1.0.0
     * - maxLength: 50
     * - minOccurs: 0
     * - ref: sd:BrugerTypeTekst
     * @var string|null
     */
    protected ?string $BrugerTypeTekst = null;
    /**
     * The InteressefaellesskabNavn
     * Meta information extracted from the WSDL
     * - base: string
     * - content: interessefaellesskabsnavn
     * - definition: urn:oio:sagdok:interessefaellesskabsnavn:BDD:1.0.0
     * - maxLength: 200
     * - minOccurs: 0
     * - ref: sd:InteressefaellesskabNavn
     * @var string|null
     */
    protected ?string $InteressefaellesskabNavn = null;
    /**
     * The InteressefaellesskabTypeTekst
     * Meta information extracted from the WSDL
     * - base: string
     * - content: interessefaellesskabstype
     * - definition: urn:oio:sagdok:interessefaellesskabstype:BDD:1.0.0
     * - maxLength: 50
     * - minOccurs: 0
     * - ref: sd:InteressefaellesskabTypeTekst
     * @var string|null
     */
    protected ?string $InteressefaellesskabTypeTekst = null;
    /**
     * The ItSystemNavn
     * Meta information extracted from the WSDL
     * - base: string
     * - content: itsystemnavn
     * - definition: urn:oio:sagdok:itsystemnavn:BDD:1.0.0
     * - maxLength: 200
     * - minOccurs: 0
     * - ref: sd:ItSystemNavn
     * @var string|null
     */
    protected ?string $ItSystemNavn = null;
    /**
     * The ItSystemTypeTekst
     * Meta information extracted from the WSDL
     * - base: string
     * - content: itsystemtype
     * - definition: urn:oio:sagdok:itsystemtype:BDD:1.0.0
     * - maxLength: 50
     * - minOccurs: 0
     * - ref: sd:ItSystemTypeTekst
     * @var string|null
     */
    protected ?string $ItSystemTypeTekst = null;
    /**
     * The KonfigurationReference
     * Meta information extracted from the WSDL
     * - base: string
     * - content: konfigurationselementer
     * - definition: urn:oio:sagdok:konfigurationselementer:BDD:1.0.0
     * - maxLength: 1024
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: sd:KonfigurationReference
     * @var string[]
     */
    protected ?array $KonfigurationReference = null;
    /**
     * The AdresseTekst
     * Meta information extracted from the WSDL
     * - base: string
     * - content: adresse
     * - definition: urn:oio:sts:email:BDD:6
     * - maxLength: 200
     * - minOccurs: 0
     * - ref: sts:AdresseTekst
     * @var string|null
     */
    protected ?string $AdresseTekst = null;
    /**
     * The CVR_NummerTekst
     * Meta information extracted from the WSDL
     * - base: string
     * - content: cvrnr | cvr-nummer
     * - definition: urn:oio:sts:cvrnummer:BDD:6
     * - minOccurs: 0
     * - pattern: [0-9]{8}
     * - ref: sts:CVR-NummerTekst
     * @var string|null
     */
    protected ?string $CVR_NummerTekst = null;
    /**
     * The NavnTekst
     * Meta information extracted from the WSDL
     * - base: string
     * - content: navn
     * - definition: urn:oio:sagdok:shortnavn:ADD:1.0.0 | urn:oio:sts:navn:BDD:6
     * - maxLength: 200
     * - minOccurs: 0
     * - ref: person:NavnTekst | sts:NavnTekst
     * - type: sts:ShortNavnTekst
     * @var string|null
     */
    protected ?string $NavnTekst = null;
    /**
     * The MyndighedsKode
     * Meta information extracted from the WSDL
     * - base: string
     * - content: myndighedskode
     * - definition: urn:oio:sts:email:BDD:6
     * - minOccurs: 0
     * - pattern: [0-9]{3}|[0-9]{4}
     * - ref: sts:MyndighedsKode
     * @var string|null
     */
    protected ?string $MyndighedsKode = null;
    /**
     * The CPR_NummerTekst
     * Meta information extracted from the WSDL
     * - base: string
     * - content: cprnr
     * - definition: urn:oio:sts:cprnummer:BDD:6
     * - minOccurs: 0
     * - pattern: [0-9]{10}
     * - ref: sts:CPR-NummerTekst
     * @var string|null
     */
    protected ?string $CPR_NummerTekst = null;
    /**
     * The SE_NummerTekst
     * Meta information extracted from the WSDL
     * - base: string
     * - content: se-nummer
     * - definition: urn:oio:sts:senummer:BDD:6
     * - minOccurs: 0
     * - pattern: [0-9]{8}
     * - ref: sts:SE-NummerTekst
     * @var string|null
     */
    protected ?string $SE_NummerTekst = null;
    /**
     * The P_NummerTekst
     * Meta information extracted from the WSDL
     * - base: string
     * - content: p-nummer
     * - definition: urn:oio:sts:pnummer:BDD:6
     * - minOccurs: 0
     * - pattern: [0-9]{10}
     * - ref: sts:P-NummerTekst
     * @var string|null
     */
    protected ?string $P_NummerTekst = null;
    /**
     * Constructor method for EgenskabType
     * @uses EgenskabType::setVirkning()
     * @uses EgenskabType::setBrugervendtNoegleTekst()
     * @uses EgenskabType::setOrganisationNavn()
     * @uses EgenskabType::setEnhedNavn()
     * @uses EgenskabType::setFunktionNavn()
     * @uses EgenskabType::setBrugerNavn()
     * @uses EgenskabType::setBrugerTypeTekst()
     * @uses EgenskabType::setInteressefaellesskabNavn()
     * @uses EgenskabType::setInteressefaellesskabTypeTekst()
     * @uses EgenskabType::setItSystemNavn()
     * @uses EgenskabType::setItSystemTypeTekst()
     * @uses EgenskabType::setKonfigurationReference()
     * @uses EgenskabType::setAdresseTekst()
     * @uses EgenskabType::setCVR_NummerTekst()
     * @uses EgenskabType::setNavnTekst()
     * @uses EgenskabType::setMyndighedsKode()
     * @uses EgenskabType::setCPR_NummerTekst()
     * @uses EgenskabType::setSE_NummerTekst()
     * @uses EgenskabType::setP_NummerTekst()
     * @param \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\VirkningType $virkning
     * @param string $brugervendtNoegleTekst
     * @param string $organisationNavn
     * @param string $enhedNavn
     * @param string $funktionNavn
     * @param string $brugerNavn
     * @param string $brugerTypeTekst
     * @param string $interessefaellesskabNavn
     * @param string $interessefaellesskabTypeTekst
     * @param string $itSystemNavn
     * @param string $itSystemTypeTekst
     * @param string[] $konfigurationReference
     * @param string $adresseTekst
     * @param string $cVR_NummerTekst
     * @param string $navnTekst
     * @param string $myndighedsKode
     * @param string $cPR_NummerTekst
     * @param string $sE_NummerTekst
     * @param string $p_NummerTekst
     */
    public function __construct(?\ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\VirkningType $virkning = null, ?string $brugervendtNoegleTekst = null, ?string $organisationNavn = null, ?string $enhedNavn = null, ?string $funktionNavn = null, ?string $brugerNavn = null, ?string $brugerTypeTekst = null, ?string $interessefaellesskabNavn = null, ?string $interessefaellesskabTypeTekst = null, ?string $itSystemNavn = null, ?string $itSystemTypeTekst = null, ?array $konfigurationReference = null, ?string $adresseTekst = null, ?string $cVR_NummerTekst = null, ?string $navnTekst = null, ?string $myndighedsKode = null, ?string $cPR_NummerTekst = null, ?string $sE_NummerTekst = null, ?string $p_NummerTekst = null)
    {
        $this
            ->setVirkning($virkning)
            ->setBrugervendtNoegleTekst($brugervendtNoegleTekst)
            ->setOrganisationNavn($organisationNavn)
            ->setEnhedNavn($enhedNavn)
            ->setFunktionNavn($funktionNavn)
            ->setBrugerNavn($brugerNavn)
            ->setBrugerTypeTekst($brugerTypeTekst)
            ->setInteressefaellesskabNavn($interessefaellesskabNavn)
            ->setInteressefaellesskabTypeTekst($interessefaellesskabTypeTekst)
            ->setItSystemNavn($itSystemNavn)
            ->setItSystemTypeTekst($itSystemTypeTekst)
            ->setKonfigurationReference($konfigurationReference)
            ->setAdresseTekst($adresseTekst)
            ->setCVR_NummerTekst($cVR_NummerTekst)
            ->setNavnTekst($navnTekst)
            ->setMyndighedsKode($myndighedsKode)
            ->setCPR_NummerTekst($cPR_NummerTekst)
            ->setSE_NummerTekst($sE_NummerTekst)
            ->setP_NummerTekst($p_NummerTekst);
    }
    /**
     * Get Virkning value
     * @return \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\VirkningType|null
     */
    public function getVirkning(): ?\ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\VirkningType
    {
        return $this->Virkning;
    }
    /**
     * Set Virkning value
     * @param \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\VirkningType $virkning
     * @return \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\EgenskabType
     */
    public function setVirkning(?\ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\VirkningType $virkning = null): self
    {
        $this->Virkning = $virkning;
        
        return $this;
    }
    /**
     * Get BrugervendtNoegleTekst value
     * @return string|null
     */
    public function getBrugervendtNoegleTekst(): ?string
    {
        return $this->BrugervendtNoegleTekst;
    }
    /**
     * Set BrugervendtNoegleTekst value
     * @param string $brugervendtNoegleTekst
     * @return \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\EgenskabType
     */
    public function setBrugervendtNoegleTekst(?string $brugervendtNoegleTekst = null): self
    {
        // validation for constraint: string
        if (!is_null($brugervendtNoegleTekst) && !is_string($brugervendtNoegleTekst)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($brugervendtNoegleTekst, true), gettype($brugervendtNoegleTekst)), __LINE__);
        }
        // validation for constraint: maxLength(50)
        if (!is_null($brugervendtNoegleTekst) && mb_strlen((string) $brugervendtNoegleTekst) > 50) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 50', mb_strlen((string) $brugervendtNoegleTekst)), __LINE__);
        }
        $this->BrugervendtNoegleTekst = $brugervendtNoegleTekst;
        
        return $this;
    }
    /**
     * Get OrganisationNavn value
     * @return string|null
     */
    public function getOrganisationNavn(): ?string
    {
        return $this->OrganisationNavn;
    }
    /**
     * Set OrganisationNavn value
     * @param string $organisationNavn
     * @return \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\EgenskabType
     */
    public function setOrganisationNavn(?string $organisationNavn = null): self
    {
        // validation for constraint: string
        if (!is_null($organisationNavn) && !is_string($organisationNavn)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($organisationNavn, true), gettype($organisationNavn)), __LINE__);
        }
        // validation for constraint: maxLength(200)
        if (!is_null($organisationNavn) && mb_strlen((string) $organisationNavn) > 200) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 200', mb_strlen((string) $organisationNavn)), __LINE__);
        }
        $this->OrganisationNavn = $organisationNavn;
        
        return $this;
    }
    /**
     * Get EnhedNavn value
     * @return string|null
     */
    public function getEnhedNavn(): ?string
    {
        return $this->EnhedNavn;
    }
    /**
     * Set EnhedNavn value
     * @param string $enhedNavn
     * @return \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\EgenskabType
     */
    public function setEnhedNavn(?string $enhedNavn = null): self
    {
        // validation for constraint: string
        if (!is_null($enhedNavn) && !is_string($enhedNavn)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($enhedNavn, true), gettype($enhedNavn)), __LINE__);
        }
        // validation for constraint: maxLength(200)
        if (!is_null($enhedNavn) && mb_strlen((string) $enhedNavn) > 200) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 200', mb_strlen((string) $enhedNavn)), __LINE__);
        }
        $this->EnhedNavn = $enhedNavn;
        
        return $this;
    }
    /**
     * Get FunktionNavn value
     * @return string|null
     */
    public function getFunktionNavn(): ?string
    {
        return $this->FunktionNavn;
    }
    /**
     * Set FunktionNavn value
     * @param string $funktionNavn
     * @return \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\EgenskabType
     */
    public function setFunktionNavn(?string $funktionNavn = null): self
    {
        // validation for constraint: string
        if (!is_null($funktionNavn) && !is_string($funktionNavn)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($funktionNavn, true), gettype($funktionNavn)), __LINE__);
        }
        // validation for constraint: maxLength(200)
        if (!is_null($funktionNavn) && mb_strlen((string) $funktionNavn) > 200) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 200', mb_strlen((string) $funktionNavn)), __LINE__);
        }
        $this->FunktionNavn = $funktionNavn;
        
        return $this;
    }
    /**
     * Get BrugerNavn value
     * @return string|null
     */
    public function getBrugerNavn(): ?string
    {
        return $this->BrugerNavn;
    }
    /**
     * Set BrugerNavn value
     * @param string $brugerNavn
     * @return \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\EgenskabType
     */
    public function setBrugerNavn(?string $brugerNavn = null): self
    {
        // validation for constraint: string
        if (!is_null($brugerNavn) && !is_string($brugerNavn)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($brugerNavn, true), gettype($brugerNavn)), __LINE__);
        }
        // validation for constraint: maxLength(200)
        if (!is_null($brugerNavn) && mb_strlen((string) $brugerNavn) > 200) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 200', mb_strlen((string) $brugerNavn)), __LINE__);
        }
        $this->BrugerNavn = $brugerNavn;
        
        return $this;
    }
    /**
     * Get BrugerTypeTekst value
     * @return string|null
     */
    public function getBrugerTypeTekst(): ?string
    {
        return $this->BrugerTypeTekst;
    }
    /**
     * Set BrugerTypeTekst value
     * @param string $brugerTypeTekst
     * @return \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\EgenskabType
     */
    public function setBrugerTypeTekst(?string $brugerTypeTekst = null): self
    {
        // validation for constraint: string
        if (!is_null($brugerTypeTekst) && !is_string($brugerTypeTekst)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($brugerTypeTekst, true), gettype($brugerTypeTekst)), __LINE__);
        }
        // validation for constraint: maxLength(50)
        if (!is_null($brugerTypeTekst) && mb_strlen((string) $brugerTypeTekst) > 50) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 50', mb_strlen((string) $brugerTypeTekst)), __LINE__);
        }
        $this->BrugerTypeTekst = $brugerTypeTekst;
        
        return $this;
    }
    /**
     * Get InteressefaellesskabNavn value
     * @return string|null
     */
    public function getInteressefaellesskabNavn(): ?string
    {
        return $this->InteressefaellesskabNavn;
    }
    /**
     * Set InteressefaellesskabNavn value
     * @param string $interessefaellesskabNavn
     * @return \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\EgenskabType
     */
    public function setInteressefaellesskabNavn(?string $interessefaellesskabNavn = null): self
    {
        // validation for constraint: string
        if (!is_null($interessefaellesskabNavn) && !is_string($interessefaellesskabNavn)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($interessefaellesskabNavn, true), gettype($interessefaellesskabNavn)), __LINE__);
        }
        // validation for constraint: maxLength(200)
        if (!is_null($interessefaellesskabNavn) && mb_strlen((string) $interessefaellesskabNavn) > 200) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 200', mb_strlen((string) $interessefaellesskabNavn)), __LINE__);
        }
        $this->InteressefaellesskabNavn = $interessefaellesskabNavn;
        
        return $this;
    }
    /**
     * Get InteressefaellesskabTypeTekst value
     * @return string|null
     */
    public function getInteressefaellesskabTypeTekst(): ?string
    {
        return $this->InteressefaellesskabTypeTekst;
    }
    /**
     * Set InteressefaellesskabTypeTekst value
     * @param string $interessefaellesskabTypeTekst
     * @return \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\EgenskabType
     */
    public function setInteressefaellesskabTypeTekst(?string $interessefaellesskabTypeTekst = null): self
    {
        // validation for constraint: string
        if (!is_null($interessefaellesskabTypeTekst) && !is_string($interessefaellesskabTypeTekst)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($interessefaellesskabTypeTekst, true), gettype($interessefaellesskabTypeTekst)), __LINE__);
        }
        // validation for constraint: maxLength(50)
        if (!is_null($interessefaellesskabTypeTekst) && mb_strlen((string) $interessefaellesskabTypeTekst) > 50) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 50', mb_strlen((string) $interessefaellesskabTypeTekst)), __LINE__);
        }
        $this->InteressefaellesskabTypeTekst = $interessefaellesskabTypeTekst;
        
        return $this;
    }
    /**
     * Get ItSystemNavn value
     * @return string|null
     */
    public function getItSystemNavn(): ?string
    {
        return $this->ItSystemNavn;
    }
    /**
     * Set ItSystemNavn value
     * @param string $itSystemNavn
     * @return \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\EgenskabType
     */
    public function setItSystemNavn(?string $itSystemNavn = null): self
    {
        // validation for constraint: string
        if (!is_null($itSystemNavn) && !is_string($itSystemNavn)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($itSystemNavn, true), gettype($itSystemNavn)), __LINE__);
        }
        // validation for constraint: maxLength(200)
        if (!is_null($itSystemNavn) && mb_strlen((string) $itSystemNavn) > 200) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 200', mb_strlen((string) $itSystemNavn)), __LINE__);
        }
        $this->ItSystemNavn = $itSystemNavn;
        
        return $this;
    }
    /**
     * Get ItSystemTypeTekst value
     * @return string|null
     */
    public function getItSystemTypeTekst(): ?string
    {
        return $this->ItSystemTypeTekst;
    }
    /**
     * Set ItSystemTypeTekst value
     * @param string $itSystemTypeTekst
     * @return \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\EgenskabType
     */
    public function setItSystemTypeTekst(?string $itSystemTypeTekst = null): self
    {
        // validation for constraint: string
        if (!is_null($itSystemTypeTekst) && !is_string($itSystemTypeTekst)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($itSystemTypeTekst, true), gettype($itSystemTypeTekst)), __LINE__);
        }
        // validation for constraint: maxLength(50)
        if (!is_null($itSystemTypeTekst) && mb_strlen((string) $itSystemTypeTekst) > 50) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 50', mb_strlen((string) $itSystemTypeTekst)), __LINE__);
        }
        $this->ItSystemTypeTekst = $itSystemTypeTekst;
        
        return $this;
    }
    /**
     * Get KonfigurationReference value
     * @return string[]
     */
    public function getKonfigurationReference(): ?array
    {
        return $this->KonfigurationReference;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setKonfigurationReference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setKonfigurationReference method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateKonfigurationReferenceForArrayConstraintFromSetKonfigurationReference(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $egenskabTypeKonfigurationReferenceItem) {
            // validation for constraint: itemType
            if (!is_string($egenskabTypeKonfigurationReferenceItem)) {
                $invalidValues[] = is_object($egenskabTypeKonfigurationReferenceItem) ? get_class($egenskabTypeKonfigurationReferenceItem) : sprintf('%s(%s)', gettype($egenskabTypeKonfigurationReferenceItem), var_export($egenskabTypeKonfigurationReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The KonfigurationReference property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setKonfigurationReference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setKonfigurationReference method
     * This has to validate that the items contained by the array match the length constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateKonfigurationReferenceForMaxLengthConstraintFromSetKonfigurationReference(?array $values = null): string
    {
        $message = '';
        $invalidValues = [];
        foreach (($values ?? []) as $egenskabTypeKonfigurationReferenceItem) {
            // validation for constraint: maxLength(1024)
            if (mb_strlen((string) $egenskabTypeKonfigurationReferenceItem) > 1024) {
                $invalidValues[] = var_export($egenskabTypeKonfigurationReferenceItem, true);
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid length for value(s) %s, the number of characters/octets contained by the literal must be less than or equal to 1024', implode(', ', $invalidValues));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set KonfigurationReference value
     * @throws InvalidArgumentException
     * @param string[] $konfigurationReference
     * @return \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\EgenskabType
     */
    public function setKonfigurationReference(?array $konfigurationReference = null): self
    {
        // validation for constraint: array
        if ('' !== ($konfigurationReferenceArrayErrorMessage = self::validateKonfigurationReferenceForArrayConstraintFromSetKonfigurationReference($konfigurationReference))) {
            throw new InvalidArgumentException($konfigurationReferenceArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxLength(1024)
        if ('' !== ($konfigurationReferenceMaxLengthErrorMessage = self::validateKonfigurationReferenceForMaxLengthConstraintFromSetKonfigurationReference($konfigurationReference))) {
            throw new InvalidArgumentException($konfigurationReferenceMaxLengthErrorMessage, __LINE__);
        }
        $this->KonfigurationReference = $konfigurationReference;
        
        return $this;
    }
    /**
     * Add item to KonfigurationReference value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\EgenskabType
     */
    public function addToKonfigurationReference(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The KonfigurationReference property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxLength(1024)
        if (mb_strlen((string) $item) > 1024) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 1024', mb_strlen((string) $item)), __LINE__);
        }
        $this->KonfigurationReference[] = $item;
        
        return $this;
    }
    /**
     * Get AdresseTekst value
     * @return string|null
     */
    public function getAdresseTekst(): ?string
    {
        return $this->AdresseTekst;
    }
    /**
     * Set AdresseTekst value
     * @param string $adresseTekst
     * @return \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\EgenskabType
     */
    public function setAdresseTekst(?string $adresseTekst = null): self
    {
        // validation for constraint: string
        if (!is_null($adresseTekst) && !is_string($adresseTekst)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($adresseTekst, true), gettype($adresseTekst)), __LINE__);
        }
        // validation for constraint: maxLength(200)
        if (!is_null($adresseTekst) && mb_strlen((string) $adresseTekst) > 200) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 200', mb_strlen((string) $adresseTekst)), __LINE__);
        }
        $this->AdresseTekst = $adresseTekst;
        
        return $this;
    }
    /**
     * Get CVR_NummerTekst value
     * @return string|null
     */
    public function getCVR_NummerTekst(): ?string
    {
        return $this->{'CVR-NummerTekst'};
    }
    /**
     * Set CVR_NummerTekst value
     * @param string $cVR_NummerTekst
     * @return \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\EgenskabType
     */
    public function setCVR_NummerTekst(?string $cVR_NummerTekst = null): self
    {
        // validation for constraint: string
        if (!is_null($cVR_NummerTekst) && !is_string($cVR_NummerTekst)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cVR_NummerTekst, true), gettype($cVR_NummerTekst)), __LINE__);
        }
        // validation for constraint: pattern([0-9]{8})
        if (!is_null($cVR_NummerTekst) && !preg_match('/[0-9]{8}/', $cVR_NummerTekst)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[0-9]{8}/', var_export($cVR_NummerTekst, true)), __LINE__);
        }
        $this->CVR_NummerTekst = $this->{'CVR-NummerTekst'} = $cVR_NummerTekst;
        
        return $this;
    }
    /**
     * Get NavnTekst value
     * @return string|null
     */
    public function getNavnTekst(): ?string
    {
        return $this->NavnTekst;
    }
    /**
     * Set NavnTekst value
     * @param string $navnTekst
     * @return \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\EgenskabType
     */
    public function setNavnTekst(?string $navnTekst = null): self
    {
        // validation for constraint: string
        if (!is_null($navnTekst) && !is_string($navnTekst)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($navnTekst, true), gettype($navnTekst)), __LINE__);
        }
        // validation for constraint: maxLength(200)
        if (!is_null($navnTekst) && mb_strlen((string) $navnTekst) > 200) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 200', mb_strlen((string) $navnTekst)), __LINE__);
        }
        $this->NavnTekst = $navnTekst;
        
        return $this;
    }
    /**
     * Get MyndighedsKode value
     * @return string|null
     */
    public function getMyndighedsKode(): ?string
    {
        return $this->MyndighedsKode;
    }
    /**
     * Set MyndighedsKode value
     * @param string $myndighedsKode
     * @return \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\EgenskabType
     */
    public function setMyndighedsKode(?string $myndighedsKode = null): self
    {
        // validation for constraint: string
        if (!is_null($myndighedsKode) && !is_string($myndighedsKode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($myndighedsKode, true), gettype($myndighedsKode)), __LINE__);
        }
        // validation for constraint: pattern([0-9]{3}|[0-9]{4})
        if (!is_null($myndighedsKode) && !preg_match('/[0-9]{3}|[0-9]{4}/', $myndighedsKode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[0-9]{3}|[0-9]{4}/', var_export($myndighedsKode, true)), __LINE__);
        }
        $this->MyndighedsKode = $myndighedsKode;
        
        return $this;
    }
    /**
     * Get CPR_NummerTekst value
     * @return string|null
     */
    public function getCPR_NummerTekst(): ?string
    {
        return $this->{'CPR-NummerTekst'};
    }
    /**
     * Set CPR_NummerTekst value
     * @param string $cPR_NummerTekst
     * @return \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\EgenskabType
     */
    public function setCPR_NummerTekst(?string $cPR_NummerTekst = null): self
    {
        // validation for constraint: string
        if (!is_null($cPR_NummerTekst) && !is_string($cPR_NummerTekst)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cPR_NummerTekst, true), gettype($cPR_NummerTekst)), __LINE__);
        }
        // validation for constraint: pattern([0-9]{10})
        if (!is_null($cPR_NummerTekst) && !preg_match('/[0-9]{10}/', $cPR_NummerTekst)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[0-9]{10}/', var_export($cPR_NummerTekst, true)), __LINE__);
        }
        $this->CPR_NummerTekst = $this->{'CPR-NummerTekst'} = $cPR_NummerTekst;
        
        return $this;
    }
    /**
     * Get SE_NummerTekst value
     * @return string|null
     */
    public function getSE_NummerTekst(): ?string
    {
        return $this->{'SE-NummerTekst'};
    }
    /**
     * Set SE_NummerTekst value
     * @param string $sE_NummerTekst
     * @return \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\EgenskabType
     */
    public function setSE_NummerTekst(?string $sE_NummerTekst = null): self
    {
        // validation for constraint: string
        if (!is_null($sE_NummerTekst) && !is_string($sE_NummerTekst)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sE_NummerTekst, true), gettype($sE_NummerTekst)), __LINE__);
        }
        // validation for constraint: pattern([0-9]{8})
        if (!is_null($sE_NummerTekst) && !preg_match('/[0-9]{8}/', $sE_NummerTekst)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[0-9]{8}/', var_export($sE_NummerTekst, true)), __LINE__);
        }
        $this->SE_NummerTekst = $this->{'SE-NummerTekst'} = $sE_NummerTekst;
        
        return $this;
    }
    /**
     * Get P_NummerTekst value
     * @return string|null
     */
    public function getP_NummerTekst(): ?string
    {
        return $this->{'P-NummerTekst'};
    }
    /**
     * Set P_NummerTekst value
     * @param string $p_NummerTekst
     * @return \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\EgenskabType
     */
    public function setP_NummerTekst(?string $p_NummerTekst = null): self
    {
        // validation for constraint: string
        if (!is_null($p_NummerTekst) && !is_string($p_NummerTekst)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($p_NummerTekst, true), gettype($p_NummerTekst)), __LINE__);
        }
        // validation for constraint: pattern([0-9]{10})
        if (!is_null($p_NummerTekst) && !preg_match('/[0-9]{10}/', $p_NummerTekst)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[0-9]{10}/', var_export($p_NummerTekst, true)), __LINE__);
        }
        $this->P_NummerTekst = $this->{'P-NummerTekst'} = $p_NummerTekst;
        
        return $this;
    }
}
