<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF1500\Organisation\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RelationListeType StructType
 * Meta information extracted from the WSDL
 * - definition: urn:oio:sagdok:organisationrelationliste:ADD:2.0.0
 * @subpackage Structs
 */
class RelationListeType extends AbstractStructBase
{
    /**
     * The Adresser
     * Meta information extracted from the WSDL
     * - content: adresser
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: sd:Adresser
     * @var \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\AdresseFlerRelationType[]
     */
    protected ?array $Adresser = null;
    /**
     * The Ansatte
     * Meta information extracted from the WSDL
     * - content: ansatte
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: sd:Ansatte
     * @var \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\PersonFlerRelationType[]
     */
    protected ?array $Ansatte = null;
    /**
     * The Branche
     * Meta information extracted from the WSDL
     * - content: branche
     * - minOccurs: 0
     * - ref: sd:Branche
     * @var \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\KlasseRelationType|null
     */
    protected ?\ItkDev\Serviceplatformen\SF1500\Organisation\StructType\KlasseRelationType $Branche = null;
    /**
     * The Organisationstype
     * Meta information extracted from the WSDL
     * - content: organisationstype
     * - minOccurs: 0
     * - ref: sd:Organisationstype
     * @var \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\KlasseRelationType|null
     */
    protected ?\ItkDev\Serviceplatformen\SF1500\Organisation\StructType\KlasseRelationType $Organisationstype = null;
    /**
     * The Myndighed
     * Meta information extracted from the WSDL
     * - content: myndighed
     * - minOccurs: 0
     * - ref: sd:Myndighed
     * @var \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\MyndighedRelationType|null
     */
    protected ?\ItkDev\Serviceplatformen\SF1500\Organisation\StructType\MyndighedRelationType $Myndighed = null;
    /**
     * The Myndighedstype
     * Meta information extracted from the WSDL
     * - content: myndighedstype
     * - minOccurs: 0
     * - ref: sd:Myndighedstype
     * @var \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\KlasseRelationType|null
     */
    protected ?\ItkDev\Serviceplatformen\SF1500\Organisation\StructType\KlasseRelationType $Myndighedstype = null;
    /**
     * The TilknyttedeOpgaver
     * Meta information extracted from the WSDL
     * - content: opgaver
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: sd:TilknyttedeOpgaver
     * @var \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\KlasseFlerRelationType[]
     */
    protected ?array $TilknyttedeOpgaver = null;
    /**
     * The Overordnet
     * Meta information extracted from the WSDL
     * - content: overordnet
     * - minOccurs: 0
     * - ref: sd:Overordnet
     * @var \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\OrganisationEnhedRelationType|null
     */
    protected ?\ItkDev\Serviceplatformen\SF1500\Organisation\StructType\OrganisationEnhedRelationType $Overordnet = null;
    /**
     * The Produktionsenhed
     * Meta information extracted from the WSDL
     * - content: produktionsenhed
     * - minOccurs: 0
     * - ref: sd:Produktionsenhed
     * @var \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\VirksomhedRelationType|null
     */
    protected ?\ItkDev\Serviceplatformen\SF1500\Organisation\StructType\VirksomhedRelationType $Produktionsenhed = null;
    /**
     * The Skatteenhed
     * Meta information extracted from the WSDL
     * - content: skatteenhed
     * - minOccurs: 0
     * - ref: sd:Skatteenhed
     * @var \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\VirksomhedRelationType|null
     */
    protected ?\ItkDev\Serviceplatformen\SF1500\Organisation\StructType\VirksomhedRelationType $Skatteenhed = null;
    /**
     * The Tilhoerer
     * Meta information extracted from the WSDL
     * - content: tilhoerer
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: sd:Tilhoerer
     * @var \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\OrganisationFlerRelationType|null
     */
    protected ?\ItkDev\Serviceplatformen\SF1500\Organisation\StructType\OrganisationFlerRelationType $Tilhoerer = null;
    /**
     * The TilknyttedeBrugere
     * Meta information extracted from the WSDL
     * - content: tilknyttedebrugere
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: sd:TilknyttedeBrugere
     * @var \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\BrugerFlerRelationType[]
     */
    protected ?array $TilknyttedeBrugere = null;
    /**
     * The TilknyttedeEnheder
     * Meta information extracted from the WSDL
     * - content: tilknyttedeenheder
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: sd:TilknyttedeEnheder
     * @var \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\OrganisationEnhedFlerRelationType[]
     */
    protected ?array $TilknyttedeEnheder = null;
    /**
     * The TilknyttedeFunktioner
     * Meta information extracted from the WSDL
     * - content: tilknyttedefunktioner
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: sd:TilknyttedeFunktioner
     * @var \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\OrganisationFunktionFlerRelationType[]
     */
    protected ?array $TilknyttedeFunktioner = null;
    /**
     * The TilknyttedeInteressefaellesskaber
     * Meta information extracted from the WSDL
     * - content: tilknyttedeinteressefaellesskaber
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: sd:TilknyttedeInteressefaellesskaber
     * @var \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\InteressefaellesskabFlerRelationType[]
     */
    protected ?array $TilknyttedeInteressefaellesskaber = null;
    /**
     * The TilknyttedeOrganisationer
     * Meta information extracted from the WSDL
     * - content: tilknyttedeorganisationer
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: sd:TilknyttedeOrganisationer
     * @var \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\OrganisationFlerRelationType[]
     */
    protected ?array $TilknyttedeOrganisationer = null;
    /**
     * The TilknyttedePersoner
     * Meta information extracted from the WSDL
     * - content: tilknyttedepersoner
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: sd:TilknyttedePersoner
     * @var \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\PersonFlerRelationType[]
     */
    protected ?array $TilknyttedePersoner = null;
    /**
     * The TilknyttedeItSystemer
     * Meta information extracted from the WSDL
     * - content: tilknyttedeitsystemer
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: sd:TilknyttedeItSystemer
     * @var \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\ItSystemFlerRelationType[]
     */
    protected ?array $TilknyttedeItSystemer = null;
    /**
     * The Virksomhed
     * Meta information extracted from the WSDL
     * - content: virksomhed
     * - minOccurs: 0
     * - ref: sd:Virksomhed
     * @var \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\VirksomhedRelationType|null
     */
    protected ?\ItkDev\Serviceplatformen\SF1500\Organisation\StructType\VirksomhedRelationType $Virksomhed = null;
    /**
     * The Virksomhedstype
     * Meta information extracted from the WSDL
     * - content: virksomhedstype
     * - minOccurs: 0
     * - ref: sd:Virksomhedstype
     * @var \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\KlasseRelationType|null
     */
    protected ?\ItkDev\Serviceplatformen\SF1500\Organisation\StructType\KlasseRelationType $Virksomhedstype = null;
    /**
     * The LokalUdvidelse
     * Meta information extracted from the WSDL
     * - content: lokaludvidelse
     * - minOccurs: 0
     * - ref: sd:LokalUdvidelse
     * @var \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\LokalUdvidelseType|null
     */
    protected ?\ItkDev\Serviceplatformen\SF1500\Organisation\StructType\LokalUdvidelseType $LokalUdvidelse = null;
    /**
     * Constructor method for RelationListeType
     * @uses RelationListeType::setAdresser()
     * @uses RelationListeType::setAnsatte()
     * @uses RelationListeType::setBranche()
     * @uses RelationListeType::setOrganisationstype()
     * @uses RelationListeType::setMyndighed()
     * @uses RelationListeType::setMyndighedstype()
     * @uses RelationListeType::setTilknyttedeOpgaver()
     * @uses RelationListeType::setOverordnet()
     * @uses RelationListeType::setProduktionsenhed()
     * @uses RelationListeType::setSkatteenhed()
     * @uses RelationListeType::setTilhoerer()
     * @uses RelationListeType::setTilknyttedeBrugere()
     * @uses RelationListeType::setTilknyttedeEnheder()
     * @uses RelationListeType::setTilknyttedeFunktioner()
     * @uses RelationListeType::setTilknyttedeInteressefaellesskaber()
     * @uses RelationListeType::setTilknyttedeOrganisationer()
     * @uses RelationListeType::setTilknyttedePersoner()
     * @uses RelationListeType::setTilknyttedeItSystemer()
     * @uses RelationListeType::setVirksomhed()
     * @uses RelationListeType::setVirksomhedstype()
     * @uses RelationListeType::setLokalUdvidelse()
     * @param \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\AdresseFlerRelationType[] $adresser
     * @param \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\PersonFlerRelationType[] $ansatte
     * @param \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\KlasseRelationType $branche
     * @param \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\KlasseRelationType $organisationstype
     * @param \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\MyndighedRelationType $myndighed
     * @param \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\KlasseRelationType $myndighedstype
     * @param \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\KlasseFlerRelationType[] $tilknyttedeOpgaver
     * @param \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\OrganisationEnhedRelationType $overordnet
     * @param \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\VirksomhedRelationType $produktionsenhed
     * @param \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\VirksomhedRelationType $skatteenhed
     * @param \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\OrganisationFlerRelationType $tilhoerer
     * @param \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\BrugerFlerRelationType[] $tilknyttedeBrugere
     * @param \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\OrganisationEnhedFlerRelationType[] $tilknyttedeEnheder
     * @param \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\OrganisationFunktionFlerRelationType[] $tilknyttedeFunktioner
     * @param \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\InteressefaellesskabFlerRelationType[] $tilknyttedeInteressefaellesskaber
     * @param \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\OrganisationFlerRelationType[] $tilknyttedeOrganisationer
     * @param \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\PersonFlerRelationType[] $tilknyttedePersoner
     * @param \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\ItSystemFlerRelationType[] $tilknyttedeItSystemer
     * @param \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\VirksomhedRelationType $virksomhed
     * @param \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\KlasseRelationType $virksomhedstype
     * @param \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\LokalUdvidelseType $lokalUdvidelse
     */
    public function __construct(?array $adresser = null, ?array $ansatte = null, ?\ItkDev\Serviceplatformen\SF1500\Organisation\StructType\KlasseRelationType $branche = null, ?\ItkDev\Serviceplatformen\SF1500\Organisation\StructType\KlasseRelationType $organisationstype = null, ?\ItkDev\Serviceplatformen\SF1500\Organisation\StructType\MyndighedRelationType $myndighed = null, ?\ItkDev\Serviceplatformen\SF1500\Organisation\StructType\KlasseRelationType $myndighedstype = null, ?array $tilknyttedeOpgaver = null, ?\ItkDev\Serviceplatformen\SF1500\Organisation\StructType\OrganisationEnhedRelationType $overordnet = null, ?\ItkDev\Serviceplatformen\SF1500\Organisation\StructType\VirksomhedRelationType $produktionsenhed = null, ?\ItkDev\Serviceplatformen\SF1500\Organisation\StructType\VirksomhedRelationType $skatteenhed = null, ?\ItkDev\Serviceplatformen\SF1500\Organisation\StructType\OrganisationFlerRelationType $tilhoerer = null, ?array $tilknyttedeBrugere = null, ?array $tilknyttedeEnheder = null, ?array $tilknyttedeFunktioner = null, ?array $tilknyttedeInteressefaellesskaber = null, ?array $tilknyttedeOrganisationer = null, ?array $tilknyttedePersoner = null, ?array $tilknyttedeItSystemer = null, ?\ItkDev\Serviceplatformen\SF1500\Organisation\StructType\VirksomhedRelationType $virksomhed = null, ?\ItkDev\Serviceplatformen\SF1500\Organisation\StructType\KlasseRelationType $virksomhedstype = null, ?\ItkDev\Serviceplatformen\SF1500\Organisation\StructType\LokalUdvidelseType $lokalUdvidelse = null)
    {
        $this
            ->setAdresser($adresser)
            ->setAnsatte($ansatte)
            ->setBranche($branche)
            ->setOrganisationstype($organisationstype)
            ->setMyndighed($myndighed)
            ->setMyndighedstype($myndighedstype)
            ->setTilknyttedeOpgaver($tilknyttedeOpgaver)
            ->setOverordnet($overordnet)
            ->setProduktionsenhed($produktionsenhed)
            ->setSkatteenhed($skatteenhed)
            ->setTilhoerer($tilhoerer)
            ->setTilknyttedeBrugere($tilknyttedeBrugere)
            ->setTilknyttedeEnheder($tilknyttedeEnheder)
            ->setTilknyttedeFunktioner($tilknyttedeFunktioner)
            ->setTilknyttedeInteressefaellesskaber($tilknyttedeInteressefaellesskaber)
            ->setTilknyttedeOrganisationer($tilknyttedeOrganisationer)
            ->setTilknyttedePersoner($tilknyttedePersoner)
            ->setTilknyttedeItSystemer($tilknyttedeItSystemer)
            ->setVirksomhed($virksomhed)
            ->setVirksomhedstype($virksomhedstype)
            ->setLokalUdvidelse($lokalUdvidelse);
    }
    /**
     * Get Adresser value
     * @return \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\AdresseFlerRelationType[]
     */
    public function getAdresser(): ?array
    {
        return $this->Adresser;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setAdresser method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAdresser method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAdresserForArrayConstraintFromSetAdresser(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $relationListeTypeAdresserItem) {
            // validation for constraint: itemType
            if (!$relationListeTypeAdresserItem instanceof \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\AdresseFlerRelationType) {
                $invalidValues[] = is_object($relationListeTypeAdresserItem) ? get_class($relationListeTypeAdresserItem) : sprintf('%s(%s)', gettype($relationListeTypeAdresserItem), var_export($relationListeTypeAdresserItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Adresser property can only contain items of type \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\AdresseFlerRelationType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Adresser value
     * @throws InvalidArgumentException
     * @param \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\AdresseFlerRelationType[] $adresser
     * @return \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\RelationListeType
     */
    public function setAdresser(?array $adresser = null): self
    {
        // validation for constraint: array
        if ('' !== ($adresserArrayErrorMessage = self::validateAdresserForArrayConstraintFromSetAdresser($adresser))) {
            throw new InvalidArgumentException($adresserArrayErrorMessage, __LINE__);
        }
        $this->Adresser = $adresser;
        
        return $this;
    }
    /**
     * Add item to Adresser value
     * @throws InvalidArgumentException
     * @param \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\AdresseFlerRelationType $item
     * @return \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\RelationListeType
     */
    public function addToAdresser(\ItkDev\Serviceplatformen\SF1500\Organisation\StructType\AdresseFlerRelationType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\AdresseFlerRelationType) {
            throw new InvalidArgumentException(sprintf('The Adresser property can only contain items of type \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\AdresseFlerRelationType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Adresser[] = $item;
        
        return $this;
    }
    /**
     * Get Ansatte value
     * @return \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\PersonFlerRelationType[]
     */
    public function getAnsatte(): ?array
    {
        return $this->Ansatte;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setAnsatte method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAnsatte method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAnsatteForArrayConstraintFromSetAnsatte(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $relationListeTypeAnsatteItem) {
            // validation for constraint: itemType
            if (!$relationListeTypeAnsatteItem instanceof \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\PersonFlerRelationType) {
                $invalidValues[] = is_object($relationListeTypeAnsatteItem) ? get_class($relationListeTypeAnsatteItem) : sprintf('%s(%s)', gettype($relationListeTypeAnsatteItem), var_export($relationListeTypeAnsatteItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Ansatte property can only contain items of type \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\PersonFlerRelationType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Ansatte value
     * @throws InvalidArgumentException
     * @param \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\PersonFlerRelationType[] $ansatte
     * @return \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\RelationListeType
     */
    public function setAnsatte(?array $ansatte = null): self
    {
        // validation for constraint: array
        if ('' !== ($ansatteArrayErrorMessage = self::validateAnsatteForArrayConstraintFromSetAnsatte($ansatte))) {
            throw new InvalidArgumentException($ansatteArrayErrorMessage, __LINE__);
        }
        $this->Ansatte = $ansatte;
        
        return $this;
    }
    /**
     * Add item to Ansatte value
     * @throws InvalidArgumentException
     * @param \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\PersonFlerRelationType $item
     * @return \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\RelationListeType
     */
    public function addToAnsatte(\ItkDev\Serviceplatformen\SF1500\Organisation\StructType\PersonFlerRelationType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\PersonFlerRelationType) {
            throw new InvalidArgumentException(sprintf('The Ansatte property can only contain items of type \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\PersonFlerRelationType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Ansatte[] = $item;
        
        return $this;
    }
    /**
     * Get Branche value
     * @return \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\KlasseRelationType|null
     */
    public function getBranche(): ?\ItkDev\Serviceplatformen\SF1500\Organisation\StructType\KlasseRelationType
    {
        return $this->Branche;
    }
    /**
     * Set Branche value
     * @param \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\KlasseRelationType $branche
     * @return \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\RelationListeType
     */
    public function setBranche(?\ItkDev\Serviceplatformen\SF1500\Organisation\StructType\KlasseRelationType $branche = null): self
    {
        $this->Branche = $branche;
        
        return $this;
    }
    /**
     * Get Organisationstype value
     * @return \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\KlasseRelationType|null
     */
    public function getOrganisationstype(): ?\ItkDev\Serviceplatformen\SF1500\Organisation\StructType\KlasseRelationType
    {
        return $this->Organisationstype;
    }
    /**
     * Set Organisationstype value
     * @param \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\KlasseRelationType $organisationstype
     * @return \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\RelationListeType
     */
    public function setOrganisationstype(?\ItkDev\Serviceplatformen\SF1500\Organisation\StructType\KlasseRelationType $organisationstype = null): self
    {
        $this->Organisationstype = $organisationstype;
        
        return $this;
    }
    /**
     * Get Myndighed value
     * @return \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\MyndighedRelationType|null
     */
    public function getMyndighed(): ?\ItkDev\Serviceplatformen\SF1500\Organisation\StructType\MyndighedRelationType
    {
        return $this->Myndighed;
    }
    /**
     * Set Myndighed value
     * @param \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\MyndighedRelationType $myndighed
     * @return \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\RelationListeType
     */
    public function setMyndighed(?\ItkDev\Serviceplatformen\SF1500\Organisation\StructType\MyndighedRelationType $myndighed = null): self
    {
        $this->Myndighed = $myndighed;
        
        return $this;
    }
    /**
     * Get Myndighedstype value
     * @return \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\KlasseRelationType|null
     */
    public function getMyndighedstype(): ?\ItkDev\Serviceplatformen\SF1500\Organisation\StructType\KlasseRelationType
    {
        return $this->Myndighedstype;
    }
    /**
     * Set Myndighedstype value
     * @param \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\KlasseRelationType $myndighedstype
     * @return \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\RelationListeType
     */
    public function setMyndighedstype(?\ItkDev\Serviceplatformen\SF1500\Organisation\StructType\KlasseRelationType $myndighedstype = null): self
    {
        $this->Myndighedstype = $myndighedstype;
        
        return $this;
    }
    /**
     * Get TilknyttedeOpgaver value
     * @return \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\KlasseFlerRelationType[]
     */
    public function getTilknyttedeOpgaver(): ?array
    {
        return $this->TilknyttedeOpgaver;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setTilknyttedeOpgaver method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTilknyttedeOpgaver method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTilknyttedeOpgaverForArrayConstraintFromSetTilknyttedeOpgaver(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $relationListeTypeTilknyttedeOpgaverItem) {
            // validation for constraint: itemType
            if (!$relationListeTypeTilknyttedeOpgaverItem instanceof \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\KlasseFlerRelationType) {
                $invalidValues[] = is_object($relationListeTypeTilknyttedeOpgaverItem) ? get_class($relationListeTypeTilknyttedeOpgaverItem) : sprintf('%s(%s)', gettype($relationListeTypeTilknyttedeOpgaverItem), var_export($relationListeTypeTilknyttedeOpgaverItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The TilknyttedeOpgaver property can only contain items of type \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\KlasseFlerRelationType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set TilknyttedeOpgaver value
     * @throws InvalidArgumentException
     * @param \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\KlasseFlerRelationType[] $tilknyttedeOpgaver
     * @return \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\RelationListeType
     */
    public function setTilknyttedeOpgaver(?array $tilknyttedeOpgaver = null): self
    {
        // validation for constraint: array
        if ('' !== ($tilknyttedeOpgaverArrayErrorMessage = self::validateTilknyttedeOpgaverForArrayConstraintFromSetTilknyttedeOpgaver($tilknyttedeOpgaver))) {
            throw new InvalidArgumentException($tilknyttedeOpgaverArrayErrorMessage, __LINE__);
        }
        $this->TilknyttedeOpgaver = $tilknyttedeOpgaver;
        
        return $this;
    }
    /**
     * Add item to TilknyttedeOpgaver value
     * @throws InvalidArgumentException
     * @param \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\KlasseFlerRelationType $item
     * @return \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\RelationListeType
     */
    public function addToTilknyttedeOpgaver(\ItkDev\Serviceplatformen\SF1500\Organisation\StructType\KlasseFlerRelationType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\KlasseFlerRelationType) {
            throw new InvalidArgumentException(sprintf('The TilknyttedeOpgaver property can only contain items of type \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\KlasseFlerRelationType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->TilknyttedeOpgaver[] = $item;
        
        return $this;
    }
    /**
     * Get Overordnet value
     * @return \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\OrganisationEnhedRelationType|null
     */
    public function getOverordnet(): ?\ItkDev\Serviceplatformen\SF1500\Organisation\StructType\OrganisationEnhedRelationType
    {
        return $this->Overordnet;
    }
    /**
     * Set Overordnet value
     * @param \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\OrganisationEnhedRelationType $overordnet
     * @return \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\RelationListeType
     */
    public function setOverordnet(?\ItkDev\Serviceplatformen\SF1500\Organisation\StructType\OrganisationEnhedRelationType $overordnet = null): self
    {
        $this->Overordnet = $overordnet;
        
        return $this;
    }
    /**
     * Get Produktionsenhed value
     * @return \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\VirksomhedRelationType|null
     */
    public function getProduktionsenhed(): ?\ItkDev\Serviceplatformen\SF1500\Organisation\StructType\VirksomhedRelationType
    {
        return $this->Produktionsenhed;
    }
    /**
     * Set Produktionsenhed value
     * @param \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\VirksomhedRelationType $produktionsenhed
     * @return \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\RelationListeType
     */
    public function setProduktionsenhed(?\ItkDev\Serviceplatformen\SF1500\Organisation\StructType\VirksomhedRelationType $produktionsenhed = null): self
    {
        $this->Produktionsenhed = $produktionsenhed;
        
        return $this;
    }
    /**
     * Get Skatteenhed value
     * @return \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\VirksomhedRelationType|null
     */
    public function getSkatteenhed(): ?\ItkDev\Serviceplatformen\SF1500\Organisation\StructType\VirksomhedRelationType
    {
        return $this->Skatteenhed;
    }
    /**
     * Set Skatteenhed value
     * @param \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\VirksomhedRelationType $skatteenhed
     * @return \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\RelationListeType
     */
    public function setSkatteenhed(?\ItkDev\Serviceplatformen\SF1500\Organisation\StructType\VirksomhedRelationType $skatteenhed = null): self
    {
        $this->Skatteenhed = $skatteenhed;
        
        return $this;
    }
    /**
     * Get Tilhoerer value
     * @return \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\OrganisationFlerRelationType|null
     */
    public function getTilhoerer(): ?\ItkDev\Serviceplatformen\SF1500\Organisation\StructType\OrganisationFlerRelationType
    {
        return $this->Tilhoerer;
    }
    /**
     * Set Tilhoerer value
     * @param \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\OrganisationFlerRelationType $tilhoerer
     * @return \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\RelationListeType
     */
    public function setTilhoerer(?\ItkDev\Serviceplatformen\SF1500\Organisation\StructType\OrganisationFlerRelationType $tilhoerer = null): self
    {
        $this->Tilhoerer = $tilhoerer;
        
        return $this;
    }
    /**
     * Get TilknyttedeBrugere value
     * @return \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\BrugerFlerRelationType[]
     */
    public function getTilknyttedeBrugere(): ?array
    {
        return $this->TilknyttedeBrugere;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setTilknyttedeBrugere method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTilknyttedeBrugere method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTilknyttedeBrugereForArrayConstraintFromSetTilknyttedeBrugere(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $relationListeTypeTilknyttedeBrugereItem) {
            // validation for constraint: itemType
            if (!$relationListeTypeTilknyttedeBrugereItem instanceof \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\BrugerFlerRelationType) {
                $invalidValues[] = is_object($relationListeTypeTilknyttedeBrugereItem) ? get_class($relationListeTypeTilknyttedeBrugereItem) : sprintf('%s(%s)', gettype($relationListeTypeTilknyttedeBrugereItem), var_export($relationListeTypeTilknyttedeBrugereItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The TilknyttedeBrugere property can only contain items of type \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\BrugerFlerRelationType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set TilknyttedeBrugere value
     * @throws InvalidArgumentException
     * @param \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\BrugerFlerRelationType[] $tilknyttedeBrugere
     * @return \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\RelationListeType
     */
    public function setTilknyttedeBrugere(?array $tilknyttedeBrugere = null): self
    {
        // validation for constraint: array
        if ('' !== ($tilknyttedeBrugereArrayErrorMessage = self::validateTilknyttedeBrugereForArrayConstraintFromSetTilknyttedeBrugere($tilknyttedeBrugere))) {
            throw new InvalidArgumentException($tilknyttedeBrugereArrayErrorMessage, __LINE__);
        }
        $this->TilknyttedeBrugere = $tilknyttedeBrugere;
        
        return $this;
    }
    /**
     * Add item to TilknyttedeBrugere value
     * @throws InvalidArgumentException
     * @param \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\BrugerFlerRelationType $item
     * @return \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\RelationListeType
     */
    public function addToTilknyttedeBrugere(\ItkDev\Serviceplatformen\SF1500\Organisation\StructType\BrugerFlerRelationType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\BrugerFlerRelationType) {
            throw new InvalidArgumentException(sprintf('The TilknyttedeBrugere property can only contain items of type \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\BrugerFlerRelationType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->TilknyttedeBrugere[] = $item;
        
        return $this;
    }
    /**
     * Get TilknyttedeEnheder value
     * @return \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\OrganisationEnhedFlerRelationType[]
     */
    public function getTilknyttedeEnheder(): ?array
    {
        return $this->TilknyttedeEnheder;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setTilknyttedeEnheder method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTilknyttedeEnheder method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTilknyttedeEnhederForArrayConstraintFromSetTilknyttedeEnheder(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $relationListeTypeTilknyttedeEnhederItem) {
            // validation for constraint: itemType
            if (!$relationListeTypeTilknyttedeEnhederItem instanceof \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\OrganisationEnhedFlerRelationType) {
                $invalidValues[] = is_object($relationListeTypeTilknyttedeEnhederItem) ? get_class($relationListeTypeTilknyttedeEnhederItem) : sprintf('%s(%s)', gettype($relationListeTypeTilknyttedeEnhederItem), var_export($relationListeTypeTilknyttedeEnhederItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The TilknyttedeEnheder property can only contain items of type \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\OrganisationEnhedFlerRelationType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set TilknyttedeEnheder value
     * @throws InvalidArgumentException
     * @param \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\OrganisationEnhedFlerRelationType[] $tilknyttedeEnheder
     * @return \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\RelationListeType
     */
    public function setTilknyttedeEnheder(?array $tilknyttedeEnheder = null): self
    {
        // validation for constraint: array
        if ('' !== ($tilknyttedeEnhederArrayErrorMessage = self::validateTilknyttedeEnhederForArrayConstraintFromSetTilknyttedeEnheder($tilknyttedeEnheder))) {
            throw new InvalidArgumentException($tilknyttedeEnhederArrayErrorMessage, __LINE__);
        }
        $this->TilknyttedeEnheder = $tilknyttedeEnheder;
        
        return $this;
    }
    /**
     * Add item to TilknyttedeEnheder value
     * @throws InvalidArgumentException
     * @param \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\OrganisationEnhedFlerRelationType $item
     * @return \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\RelationListeType
     */
    public function addToTilknyttedeEnheder(\ItkDev\Serviceplatformen\SF1500\Organisation\StructType\OrganisationEnhedFlerRelationType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\OrganisationEnhedFlerRelationType) {
            throw new InvalidArgumentException(sprintf('The TilknyttedeEnheder property can only contain items of type \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\OrganisationEnhedFlerRelationType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->TilknyttedeEnheder[] = $item;
        
        return $this;
    }
    /**
     * Get TilknyttedeFunktioner value
     * @return \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\OrganisationFunktionFlerRelationType[]
     */
    public function getTilknyttedeFunktioner(): ?array
    {
        return $this->TilknyttedeFunktioner;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setTilknyttedeFunktioner method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTilknyttedeFunktioner method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTilknyttedeFunktionerForArrayConstraintFromSetTilknyttedeFunktioner(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $relationListeTypeTilknyttedeFunktionerItem) {
            // validation for constraint: itemType
            if (!$relationListeTypeTilknyttedeFunktionerItem instanceof \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\OrganisationFunktionFlerRelationType) {
                $invalidValues[] = is_object($relationListeTypeTilknyttedeFunktionerItem) ? get_class($relationListeTypeTilknyttedeFunktionerItem) : sprintf('%s(%s)', gettype($relationListeTypeTilknyttedeFunktionerItem), var_export($relationListeTypeTilknyttedeFunktionerItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The TilknyttedeFunktioner property can only contain items of type \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\OrganisationFunktionFlerRelationType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set TilknyttedeFunktioner value
     * @throws InvalidArgumentException
     * @param \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\OrganisationFunktionFlerRelationType[] $tilknyttedeFunktioner
     * @return \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\RelationListeType
     */
    public function setTilknyttedeFunktioner(?array $tilknyttedeFunktioner = null): self
    {
        // validation for constraint: array
        if ('' !== ($tilknyttedeFunktionerArrayErrorMessage = self::validateTilknyttedeFunktionerForArrayConstraintFromSetTilknyttedeFunktioner($tilknyttedeFunktioner))) {
            throw new InvalidArgumentException($tilknyttedeFunktionerArrayErrorMessage, __LINE__);
        }
        $this->TilknyttedeFunktioner = $tilknyttedeFunktioner;
        
        return $this;
    }
    /**
     * Add item to TilknyttedeFunktioner value
     * @throws InvalidArgumentException
     * @param \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\OrganisationFunktionFlerRelationType $item
     * @return \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\RelationListeType
     */
    public function addToTilknyttedeFunktioner(\ItkDev\Serviceplatformen\SF1500\Organisation\StructType\OrganisationFunktionFlerRelationType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\OrganisationFunktionFlerRelationType) {
            throw new InvalidArgumentException(sprintf('The TilknyttedeFunktioner property can only contain items of type \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\OrganisationFunktionFlerRelationType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->TilknyttedeFunktioner[] = $item;
        
        return $this;
    }
    /**
     * Get TilknyttedeInteressefaellesskaber value
     * @return \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\InteressefaellesskabFlerRelationType[]
     */
    public function getTilknyttedeInteressefaellesskaber(): ?array
    {
        return $this->TilknyttedeInteressefaellesskaber;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setTilknyttedeInteressefaellesskaber method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTilknyttedeInteressefaellesskaber method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTilknyttedeInteressefaellesskaberForArrayConstraintFromSetTilknyttedeInteressefaellesskaber(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $relationListeTypeTilknyttedeInteressefaellesskaberItem) {
            // validation for constraint: itemType
            if (!$relationListeTypeTilknyttedeInteressefaellesskaberItem instanceof \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\InteressefaellesskabFlerRelationType) {
                $invalidValues[] = is_object($relationListeTypeTilknyttedeInteressefaellesskaberItem) ? get_class($relationListeTypeTilknyttedeInteressefaellesskaberItem) : sprintf('%s(%s)', gettype($relationListeTypeTilknyttedeInteressefaellesskaberItem), var_export($relationListeTypeTilknyttedeInteressefaellesskaberItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The TilknyttedeInteressefaellesskaber property can only contain items of type \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\InteressefaellesskabFlerRelationType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set TilknyttedeInteressefaellesskaber value
     * @throws InvalidArgumentException
     * @param \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\InteressefaellesskabFlerRelationType[] $tilknyttedeInteressefaellesskaber
     * @return \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\RelationListeType
     */
    public function setTilknyttedeInteressefaellesskaber(?array $tilknyttedeInteressefaellesskaber = null): self
    {
        // validation for constraint: array
        if ('' !== ($tilknyttedeInteressefaellesskaberArrayErrorMessage = self::validateTilknyttedeInteressefaellesskaberForArrayConstraintFromSetTilknyttedeInteressefaellesskaber($tilknyttedeInteressefaellesskaber))) {
            throw new InvalidArgumentException($tilknyttedeInteressefaellesskaberArrayErrorMessage, __LINE__);
        }
        $this->TilknyttedeInteressefaellesskaber = $tilknyttedeInteressefaellesskaber;
        
        return $this;
    }
    /**
     * Add item to TilknyttedeInteressefaellesskaber value
     * @throws InvalidArgumentException
     * @param \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\InteressefaellesskabFlerRelationType $item
     * @return \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\RelationListeType
     */
    public function addToTilknyttedeInteressefaellesskaber(\ItkDev\Serviceplatformen\SF1500\Organisation\StructType\InteressefaellesskabFlerRelationType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\InteressefaellesskabFlerRelationType) {
            throw new InvalidArgumentException(sprintf('The TilknyttedeInteressefaellesskaber property can only contain items of type \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\InteressefaellesskabFlerRelationType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->TilknyttedeInteressefaellesskaber[] = $item;
        
        return $this;
    }
    /**
     * Get TilknyttedeOrganisationer value
     * @return \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\OrganisationFlerRelationType[]
     */
    public function getTilknyttedeOrganisationer(): ?array
    {
        return $this->TilknyttedeOrganisationer;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setTilknyttedeOrganisationer method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTilknyttedeOrganisationer method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTilknyttedeOrganisationerForArrayConstraintFromSetTilknyttedeOrganisationer(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $relationListeTypeTilknyttedeOrganisationerItem) {
            // validation for constraint: itemType
            if (!$relationListeTypeTilknyttedeOrganisationerItem instanceof \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\OrganisationFlerRelationType) {
                $invalidValues[] = is_object($relationListeTypeTilknyttedeOrganisationerItem) ? get_class($relationListeTypeTilknyttedeOrganisationerItem) : sprintf('%s(%s)', gettype($relationListeTypeTilknyttedeOrganisationerItem), var_export($relationListeTypeTilknyttedeOrganisationerItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The TilknyttedeOrganisationer property can only contain items of type \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\OrganisationFlerRelationType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set TilknyttedeOrganisationer value
     * @throws InvalidArgumentException
     * @param \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\OrganisationFlerRelationType[] $tilknyttedeOrganisationer
     * @return \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\RelationListeType
     */
    public function setTilknyttedeOrganisationer(?array $tilknyttedeOrganisationer = null): self
    {
        // validation for constraint: array
        if ('' !== ($tilknyttedeOrganisationerArrayErrorMessage = self::validateTilknyttedeOrganisationerForArrayConstraintFromSetTilknyttedeOrganisationer($tilknyttedeOrganisationer))) {
            throw new InvalidArgumentException($tilknyttedeOrganisationerArrayErrorMessage, __LINE__);
        }
        $this->TilknyttedeOrganisationer = $tilknyttedeOrganisationer;
        
        return $this;
    }
    /**
     * Add item to TilknyttedeOrganisationer value
     * @throws InvalidArgumentException
     * @param \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\OrganisationFlerRelationType $item
     * @return \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\RelationListeType
     */
    public function addToTilknyttedeOrganisationer(\ItkDev\Serviceplatformen\SF1500\Organisation\StructType\OrganisationFlerRelationType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\OrganisationFlerRelationType) {
            throw new InvalidArgumentException(sprintf('The TilknyttedeOrganisationer property can only contain items of type \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\OrganisationFlerRelationType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->TilknyttedeOrganisationer[] = $item;
        
        return $this;
    }
    /**
     * Get TilknyttedePersoner value
     * @return \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\PersonFlerRelationType[]
     */
    public function getTilknyttedePersoner(): ?array
    {
        return $this->TilknyttedePersoner;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setTilknyttedePersoner method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTilknyttedePersoner method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTilknyttedePersonerForArrayConstraintFromSetTilknyttedePersoner(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $relationListeTypeTilknyttedePersonerItem) {
            // validation for constraint: itemType
            if (!$relationListeTypeTilknyttedePersonerItem instanceof \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\PersonFlerRelationType) {
                $invalidValues[] = is_object($relationListeTypeTilknyttedePersonerItem) ? get_class($relationListeTypeTilknyttedePersonerItem) : sprintf('%s(%s)', gettype($relationListeTypeTilknyttedePersonerItem), var_export($relationListeTypeTilknyttedePersonerItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The TilknyttedePersoner property can only contain items of type \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\PersonFlerRelationType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set TilknyttedePersoner value
     * @throws InvalidArgumentException
     * @param \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\PersonFlerRelationType[] $tilknyttedePersoner
     * @return \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\RelationListeType
     */
    public function setTilknyttedePersoner(?array $tilknyttedePersoner = null): self
    {
        // validation for constraint: array
        if ('' !== ($tilknyttedePersonerArrayErrorMessage = self::validateTilknyttedePersonerForArrayConstraintFromSetTilknyttedePersoner($tilknyttedePersoner))) {
            throw new InvalidArgumentException($tilknyttedePersonerArrayErrorMessage, __LINE__);
        }
        $this->TilknyttedePersoner = $tilknyttedePersoner;
        
        return $this;
    }
    /**
     * Add item to TilknyttedePersoner value
     * @throws InvalidArgumentException
     * @param \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\PersonFlerRelationType $item
     * @return \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\RelationListeType
     */
    public function addToTilknyttedePersoner(\ItkDev\Serviceplatformen\SF1500\Organisation\StructType\PersonFlerRelationType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\PersonFlerRelationType) {
            throw new InvalidArgumentException(sprintf('The TilknyttedePersoner property can only contain items of type \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\PersonFlerRelationType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->TilknyttedePersoner[] = $item;
        
        return $this;
    }
    /**
     * Get TilknyttedeItSystemer value
     * @return \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\ItSystemFlerRelationType[]
     */
    public function getTilknyttedeItSystemer(): ?array
    {
        return $this->TilknyttedeItSystemer;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setTilknyttedeItSystemer method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTilknyttedeItSystemer method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTilknyttedeItSystemerForArrayConstraintFromSetTilknyttedeItSystemer(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $relationListeTypeTilknyttedeItSystemerItem) {
            // validation for constraint: itemType
            if (!$relationListeTypeTilknyttedeItSystemerItem instanceof \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\ItSystemFlerRelationType) {
                $invalidValues[] = is_object($relationListeTypeTilknyttedeItSystemerItem) ? get_class($relationListeTypeTilknyttedeItSystemerItem) : sprintf('%s(%s)', gettype($relationListeTypeTilknyttedeItSystemerItem), var_export($relationListeTypeTilknyttedeItSystemerItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The TilknyttedeItSystemer property can only contain items of type \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\ItSystemFlerRelationType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set TilknyttedeItSystemer value
     * @throws InvalidArgumentException
     * @param \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\ItSystemFlerRelationType[] $tilknyttedeItSystemer
     * @return \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\RelationListeType
     */
    public function setTilknyttedeItSystemer(?array $tilknyttedeItSystemer = null): self
    {
        // validation for constraint: array
        if ('' !== ($tilknyttedeItSystemerArrayErrorMessage = self::validateTilknyttedeItSystemerForArrayConstraintFromSetTilknyttedeItSystemer($tilknyttedeItSystemer))) {
            throw new InvalidArgumentException($tilknyttedeItSystemerArrayErrorMessage, __LINE__);
        }
        $this->TilknyttedeItSystemer = $tilknyttedeItSystemer;
        
        return $this;
    }
    /**
     * Add item to TilknyttedeItSystemer value
     * @throws InvalidArgumentException
     * @param \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\ItSystemFlerRelationType $item
     * @return \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\RelationListeType
     */
    public function addToTilknyttedeItSystemer(\ItkDev\Serviceplatformen\SF1500\Organisation\StructType\ItSystemFlerRelationType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\ItSystemFlerRelationType) {
            throw new InvalidArgumentException(sprintf('The TilknyttedeItSystemer property can only contain items of type \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\ItSystemFlerRelationType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->TilknyttedeItSystemer[] = $item;
        
        return $this;
    }
    /**
     * Get Virksomhed value
     * @return \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\VirksomhedRelationType|null
     */
    public function getVirksomhed(): ?\ItkDev\Serviceplatformen\SF1500\Organisation\StructType\VirksomhedRelationType
    {
        return $this->Virksomhed;
    }
    /**
     * Set Virksomhed value
     * @param \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\VirksomhedRelationType $virksomhed
     * @return \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\RelationListeType
     */
    public function setVirksomhed(?\ItkDev\Serviceplatformen\SF1500\Organisation\StructType\VirksomhedRelationType $virksomhed = null): self
    {
        $this->Virksomhed = $virksomhed;
        
        return $this;
    }
    /**
     * Get Virksomhedstype value
     * @return \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\KlasseRelationType|null
     */
    public function getVirksomhedstype(): ?\ItkDev\Serviceplatformen\SF1500\Organisation\StructType\KlasseRelationType
    {
        return $this->Virksomhedstype;
    }
    /**
     * Set Virksomhedstype value
     * @param \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\KlasseRelationType $virksomhedstype
     * @return \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\RelationListeType
     */
    public function setVirksomhedstype(?\ItkDev\Serviceplatformen\SF1500\Organisation\StructType\KlasseRelationType $virksomhedstype = null): self
    {
        $this->Virksomhedstype = $virksomhedstype;
        
        return $this;
    }
    /**
     * Get LokalUdvidelse value
     * @return \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\LokalUdvidelseType|null
     */
    public function getLokalUdvidelse(): ?\ItkDev\Serviceplatformen\SF1500\Organisation\StructType\LokalUdvidelseType
    {
        return $this->LokalUdvidelse;
    }
    /**
     * Set LokalUdvidelse value
     * @param \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\LokalUdvidelseType $lokalUdvidelse
     * @return \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\RelationListeType
     */
    public function setLokalUdvidelse(?\ItkDev\Serviceplatformen\SF1500\Organisation\StructType\LokalUdvidelseType $lokalUdvidelse = null): self
    {
        $this->LokalUdvidelse = $lokalUdvidelse;
        
        return $this;
    }
}
