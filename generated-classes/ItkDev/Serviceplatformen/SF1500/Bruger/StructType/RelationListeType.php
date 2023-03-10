<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF1500\Bruger\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RelationListeType StructType
 * Meta information extracted from the WSDL
 * - definition: urn:oio:sagdok:brugerrelationliste:ADD:2.0.0
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
     * @var \ItkDev\Serviceplatformen\SF1500\Bruger\StructType\AdresseFlerRelationType[]
     */
    protected ?array $Adresser = null;
    /**
     * The BrugerTyper
     * Meta information extracted from the WSDL
     * - content: brugertyper
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: sd:BrugerTyper
     * @var \ItkDev\Serviceplatformen\SF1500\Bruger\StructType\KlasseFlerRelationType[]
     */
    protected ?array $BrugerTyper = null;
    /**
     * The TilknyttedeOpgaver
     * Meta information extracted from the WSDL
     * - content: opgaver
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: sd:TilknyttedeOpgaver
     * @var \ItkDev\Serviceplatformen\SF1500\Bruger\StructType\KlasseFlerRelationType[]
     */
    protected ?array $TilknyttedeOpgaver = null;
    /**
     * The Tilhoerer
     * Meta information extracted from the WSDL
     * - content: tilhoerer
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: sd:Tilhoerer
     * @var \ItkDev\Serviceplatformen\SF1500\Bruger\StructType\OrganisationFlerRelationType|null
     */
    protected ?\ItkDev\Serviceplatformen\SF1500\Bruger\StructType\OrganisationFlerRelationType $Tilhoerer = null;
    /**
     * The TilknyttedeEnheder
     * Meta information extracted from the WSDL
     * - content: tilknyttedeenheder
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: sd:TilknyttedeEnheder
     * @var \ItkDev\Serviceplatformen\SF1500\Bruger\StructType\OrganisationEnhedFlerRelationType[]
     */
    protected ?array $TilknyttedeEnheder = null;
    /**
     * The TilknyttedeFunktioner
     * Meta information extracted from the WSDL
     * - content: tilknyttedefunktioner
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: sd:TilknyttedeFunktioner
     * @var \ItkDev\Serviceplatformen\SF1500\Bruger\StructType\OrganisationFunktionFlerRelationType[]
     */
    protected ?array $TilknyttedeFunktioner = null;
    /**
     * The TilknyttedeInteressefaellesskaber
     * Meta information extracted from the WSDL
     * - content: tilknyttedeinteressefaellesskaber
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: sd:TilknyttedeInteressefaellesskaber
     * @var \ItkDev\Serviceplatformen\SF1500\Bruger\StructType\InteressefaellesskabFlerRelationType[]
     */
    protected ?array $TilknyttedeInteressefaellesskaber = null;
    /**
     * The TilknyttedeOrganisationer
     * Meta information extracted from the WSDL
     * - content: tilknyttedeorganisationer
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: sd:TilknyttedeOrganisationer
     * @var \ItkDev\Serviceplatformen\SF1500\Bruger\StructType\OrganisationFlerRelationType[]
     */
    protected ?array $TilknyttedeOrganisationer = null;
    /**
     * The TilknyttedePersoner
     * Meta information extracted from the WSDL
     * - content: tilknyttedepersoner
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: sd:TilknyttedePersoner
     * @var \ItkDev\Serviceplatformen\SF1500\Bruger\StructType\PersonFlerRelationType[]
     */
    protected ?array $TilknyttedePersoner = null;
    /**
     * The TilknyttedeItSystemer
     * Meta information extracted from the WSDL
     * - content: tilknyttedeitsystemer
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: sd:TilknyttedeItSystemer
     * @var \ItkDev\Serviceplatformen\SF1500\Bruger\StructType\ItSystemFlerRelationType[]
     */
    protected ?array $TilknyttedeItSystemer = null;
    /**
     * The LokalUdvidelse
     * Meta information extracted from the WSDL
     * - content: lokaludvidelse
     * - minOccurs: 0
     * - ref: sd:LokalUdvidelse
     * @var \ItkDev\Serviceplatformen\SF1500\Bruger\StructType\LokalUdvidelseType|null
     */
    protected ?\ItkDev\Serviceplatformen\SF1500\Bruger\StructType\LokalUdvidelseType $LokalUdvidelse = null;
    /**
     * Constructor method for RelationListeType
     * @uses RelationListeType::setAdresser()
     * @uses RelationListeType::setBrugerTyper()
     * @uses RelationListeType::setTilknyttedeOpgaver()
     * @uses RelationListeType::setTilhoerer()
     * @uses RelationListeType::setTilknyttedeEnheder()
     * @uses RelationListeType::setTilknyttedeFunktioner()
     * @uses RelationListeType::setTilknyttedeInteressefaellesskaber()
     * @uses RelationListeType::setTilknyttedeOrganisationer()
     * @uses RelationListeType::setTilknyttedePersoner()
     * @uses RelationListeType::setTilknyttedeItSystemer()
     * @uses RelationListeType::setLokalUdvidelse()
     * @param \ItkDev\Serviceplatformen\SF1500\Bruger\StructType\AdresseFlerRelationType[] $adresser
     * @param \ItkDev\Serviceplatformen\SF1500\Bruger\StructType\KlasseFlerRelationType[] $brugerTyper
     * @param \ItkDev\Serviceplatformen\SF1500\Bruger\StructType\KlasseFlerRelationType[] $tilknyttedeOpgaver
     * @param \ItkDev\Serviceplatformen\SF1500\Bruger\StructType\OrganisationFlerRelationType $tilhoerer
     * @param \ItkDev\Serviceplatformen\SF1500\Bruger\StructType\OrganisationEnhedFlerRelationType[] $tilknyttedeEnheder
     * @param \ItkDev\Serviceplatformen\SF1500\Bruger\StructType\OrganisationFunktionFlerRelationType[] $tilknyttedeFunktioner
     * @param \ItkDev\Serviceplatformen\SF1500\Bruger\StructType\InteressefaellesskabFlerRelationType[] $tilknyttedeInteressefaellesskaber
     * @param \ItkDev\Serviceplatformen\SF1500\Bruger\StructType\OrganisationFlerRelationType[] $tilknyttedeOrganisationer
     * @param \ItkDev\Serviceplatformen\SF1500\Bruger\StructType\PersonFlerRelationType[] $tilknyttedePersoner
     * @param \ItkDev\Serviceplatformen\SF1500\Bruger\StructType\ItSystemFlerRelationType[] $tilknyttedeItSystemer
     * @param \ItkDev\Serviceplatformen\SF1500\Bruger\StructType\LokalUdvidelseType $lokalUdvidelse
     */
    public function __construct(?array $adresser = null, ?array $brugerTyper = null, ?array $tilknyttedeOpgaver = null, ?\ItkDev\Serviceplatformen\SF1500\Bruger\StructType\OrganisationFlerRelationType $tilhoerer = null, ?array $tilknyttedeEnheder = null, ?array $tilknyttedeFunktioner = null, ?array $tilknyttedeInteressefaellesskaber = null, ?array $tilknyttedeOrganisationer = null, ?array $tilknyttedePersoner = null, ?array $tilknyttedeItSystemer = null, ?\ItkDev\Serviceplatformen\SF1500\Bruger\StructType\LokalUdvidelseType $lokalUdvidelse = null)
    {
        $this
            ->setAdresser($adresser)
            ->setBrugerTyper($brugerTyper)
            ->setTilknyttedeOpgaver($tilknyttedeOpgaver)
            ->setTilhoerer($tilhoerer)
            ->setTilknyttedeEnheder($tilknyttedeEnheder)
            ->setTilknyttedeFunktioner($tilknyttedeFunktioner)
            ->setTilknyttedeInteressefaellesskaber($tilknyttedeInteressefaellesskaber)
            ->setTilknyttedeOrganisationer($tilknyttedeOrganisationer)
            ->setTilknyttedePersoner($tilknyttedePersoner)
            ->setTilknyttedeItSystemer($tilknyttedeItSystemer)
            ->setLokalUdvidelse($lokalUdvidelse);
    }
    /**
     * Get Adresser value
     * @return \ItkDev\Serviceplatformen\SF1500\Bruger\StructType\AdresseFlerRelationType[]
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
            if (!$relationListeTypeAdresserItem instanceof \ItkDev\Serviceplatformen\SF1500\Bruger\StructType\AdresseFlerRelationType) {
                $invalidValues[] = is_object($relationListeTypeAdresserItem) ? get_class($relationListeTypeAdresserItem) : sprintf('%s(%s)', gettype($relationListeTypeAdresserItem), var_export($relationListeTypeAdresserItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Adresser property can only contain items of type \ItkDev\Serviceplatformen\SF1500\Bruger\StructType\AdresseFlerRelationType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Adresser value
     * @throws InvalidArgumentException
     * @param \ItkDev\Serviceplatformen\SF1500\Bruger\StructType\AdresseFlerRelationType[] $adresser
     * @return \ItkDev\Serviceplatformen\SF1500\Bruger\StructType\RelationListeType
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
     * @param \ItkDev\Serviceplatformen\SF1500\Bruger\StructType\AdresseFlerRelationType $item
     * @return \ItkDev\Serviceplatformen\SF1500\Bruger\StructType\RelationListeType
     */
    public function addToAdresser(\ItkDev\Serviceplatformen\SF1500\Bruger\StructType\AdresseFlerRelationType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \ItkDev\Serviceplatformen\SF1500\Bruger\StructType\AdresseFlerRelationType) {
            throw new InvalidArgumentException(sprintf('The Adresser property can only contain items of type \ItkDev\Serviceplatformen\SF1500\Bruger\StructType\AdresseFlerRelationType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Adresser[] = $item;
        
        return $this;
    }
    /**
     * Get BrugerTyper value
     * @return \ItkDev\Serviceplatformen\SF1500\Bruger\StructType\KlasseFlerRelationType[]
     */
    public function getBrugerTyper(): ?array
    {
        return $this->BrugerTyper;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setBrugerTyper method
     * This method is willingly generated in order to preserve the one-line inline validation within the setBrugerTyper method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateBrugerTyperForArrayConstraintFromSetBrugerTyper(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $relationListeTypeBrugerTyperItem) {
            // validation for constraint: itemType
            if (!$relationListeTypeBrugerTyperItem instanceof \ItkDev\Serviceplatformen\SF1500\Bruger\StructType\KlasseFlerRelationType) {
                $invalidValues[] = is_object($relationListeTypeBrugerTyperItem) ? get_class($relationListeTypeBrugerTyperItem) : sprintf('%s(%s)', gettype($relationListeTypeBrugerTyperItem), var_export($relationListeTypeBrugerTyperItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The BrugerTyper property can only contain items of type \ItkDev\Serviceplatformen\SF1500\Bruger\StructType\KlasseFlerRelationType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set BrugerTyper value
     * @throws InvalidArgumentException
     * @param \ItkDev\Serviceplatformen\SF1500\Bruger\StructType\KlasseFlerRelationType[] $brugerTyper
     * @return \ItkDev\Serviceplatformen\SF1500\Bruger\StructType\RelationListeType
     */
    public function setBrugerTyper(?array $brugerTyper = null): self
    {
        // validation for constraint: array
        if ('' !== ($brugerTyperArrayErrorMessage = self::validateBrugerTyperForArrayConstraintFromSetBrugerTyper($brugerTyper))) {
            throw new InvalidArgumentException($brugerTyperArrayErrorMessage, __LINE__);
        }
        $this->BrugerTyper = $brugerTyper;
        
        return $this;
    }
    /**
     * Add item to BrugerTyper value
     * @throws InvalidArgumentException
     * @param \ItkDev\Serviceplatformen\SF1500\Bruger\StructType\KlasseFlerRelationType $item
     * @return \ItkDev\Serviceplatformen\SF1500\Bruger\StructType\RelationListeType
     */
    public function addToBrugerTyper(\ItkDev\Serviceplatformen\SF1500\Bruger\StructType\KlasseFlerRelationType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \ItkDev\Serviceplatformen\SF1500\Bruger\StructType\KlasseFlerRelationType) {
            throw new InvalidArgumentException(sprintf('The BrugerTyper property can only contain items of type \ItkDev\Serviceplatformen\SF1500\Bruger\StructType\KlasseFlerRelationType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->BrugerTyper[] = $item;
        
        return $this;
    }
    /**
     * Get TilknyttedeOpgaver value
     * @return \ItkDev\Serviceplatformen\SF1500\Bruger\StructType\KlasseFlerRelationType[]
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
            if (!$relationListeTypeTilknyttedeOpgaverItem instanceof \ItkDev\Serviceplatformen\SF1500\Bruger\StructType\KlasseFlerRelationType) {
                $invalidValues[] = is_object($relationListeTypeTilknyttedeOpgaverItem) ? get_class($relationListeTypeTilknyttedeOpgaverItem) : sprintf('%s(%s)', gettype($relationListeTypeTilknyttedeOpgaverItem), var_export($relationListeTypeTilknyttedeOpgaverItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The TilknyttedeOpgaver property can only contain items of type \ItkDev\Serviceplatformen\SF1500\Bruger\StructType\KlasseFlerRelationType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set TilknyttedeOpgaver value
     * @throws InvalidArgumentException
     * @param \ItkDev\Serviceplatformen\SF1500\Bruger\StructType\KlasseFlerRelationType[] $tilknyttedeOpgaver
     * @return \ItkDev\Serviceplatformen\SF1500\Bruger\StructType\RelationListeType
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
     * @param \ItkDev\Serviceplatformen\SF1500\Bruger\StructType\KlasseFlerRelationType $item
     * @return \ItkDev\Serviceplatformen\SF1500\Bruger\StructType\RelationListeType
     */
    public function addToTilknyttedeOpgaver(\ItkDev\Serviceplatformen\SF1500\Bruger\StructType\KlasseFlerRelationType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \ItkDev\Serviceplatformen\SF1500\Bruger\StructType\KlasseFlerRelationType) {
            throw new InvalidArgumentException(sprintf('The TilknyttedeOpgaver property can only contain items of type \ItkDev\Serviceplatformen\SF1500\Bruger\StructType\KlasseFlerRelationType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->TilknyttedeOpgaver[] = $item;
        
        return $this;
    }
    /**
     * Get Tilhoerer value
     * @return \ItkDev\Serviceplatformen\SF1500\Bruger\StructType\OrganisationFlerRelationType|null
     */
    public function getTilhoerer(): ?\ItkDev\Serviceplatformen\SF1500\Bruger\StructType\OrganisationFlerRelationType
    {
        return $this->Tilhoerer;
    }
    /**
     * Set Tilhoerer value
     * @param \ItkDev\Serviceplatformen\SF1500\Bruger\StructType\OrganisationFlerRelationType $tilhoerer
     * @return \ItkDev\Serviceplatformen\SF1500\Bruger\StructType\RelationListeType
     */
    public function setTilhoerer(?\ItkDev\Serviceplatformen\SF1500\Bruger\StructType\OrganisationFlerRelationType $tilhoerer = null): self
    {
        $this->Tilhoerer = $tilhoerer;
        
        return $this;
    }
    /**
     * Get TilknyttedeEnheder value
     * @return \ItkDev\Serviceplatformen\SF1500\Bruger\StructType\OrganisationEnhedFlerRelationType[]
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
            if (!$relationListeTypeTilknyttedeEnhederItem instanceof \ItkDev\Serviceplatformen\SF1500\Bruger\StructType\OrganisationEnhedFlerRelationType) {
                $invalidValues[] = is_object($relationListeTypeTilknyttedeEnhederItem) ? get_class($relationListeTypeTilknyttedeEnhederItem) : sprintf('%s(%s)', gettype($relationListeTypeTilknyttedeEnhederItem), var_export($relationListeTypeTilknyttedeEnhederItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The TilknyttedeEnheder property can only contain items of type \ItkDev\Serviceplatformen\SF1500\Bruger\StructType\OrganisationEnhedFlerRelationType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set TilknyttedeEnheder value
     * @throws InvalidArgumentException
     * @param \ItkDev\Serviceplatformen\SF1500\Bruger\StructType\OrganisationEnhedFlerRelationType[] $tilknyttedeEnheder
     * @return \ItkDev\Serviceplatformen\SF1500\Bruger\StructType\RelationListeType
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
     * @param \ItkDev\Serviceplatformen\SF1500\Bruger\StructType\OrganisationEnhedFlerRelationType $item
     * @return \ItkDev\Serviceplatformen\SF1500\Bruger\StructType\RelationListeType
     */
    public function addToTilknyttedeEnheder(\ItkDev\Serviceplatformen\SF1500\Bruger\StructType\OrganisationEnhedFlerRelationType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \ItkDev\Serviceplatformen\SF1500\Bruger\StructType\OrganisationEnhedFlerRelationType) {
            throw new InvalidArgumentException(sprintf('The TilknyttedeEnheder property can only contain items of type \ItkDev\Serviceplatformen\SF1500\Bruger\StructType\OrganisationEnhedFlerRelationType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->TilknyttedeEnheder[] = $item;
        
        return $this;
    }
    /**
     * Get TilknyttedeFunktioner value
     * @return \ItkDev\Serviceplatformen\SF1500\Bruger\StructType\OrganisationFunktionFlerRelationType[]
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
            if (!$relationListeTypeTilknyttedeFunktionerItem instanceof \ItkDev\Serviceplatformen\SF1500\Bruger\StructType\OrganisationFunktionFlerRelationType) {
                $invalidValues[] = is_object($relationListeTypeTilknyttedeFunktionerItem) ? get_class($relationListeTypeTilknyttedeFunktionerItem) : sprintf('%s(%s)', gettype($relationListeTypeTilknyttedeFunktionerItem), var_export($relationListeTypeTilknyttedeFunktionerItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The TilknyttedeFunktioner property can only contain items of type \ItkDev\Serviceplatformen\SF1500\Bruger\StructType\OrganisationFunktionFlerRelationType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set TilknyttedeFunktioner value
     * @throws InvalidArgumentException
     * @param \ItkDev\Serviceplatformen\SF1500\Bruger\StructType\OrganisationFunktionFlerRelationType[] $tilknyttedeFunktioner
     * @return \ItkDev\Serviceplatformen\SF1500\Bruger\StructType\RelationListeType
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
     * @param \ItkDev\Serviceplatformen\SF1500\Bruger\StructType\OrganisationFunktionFlerRelationType $item
     * @return \ItkDev\Serviceplatformen\SF1500\Bruger\StructType\RelationListeType
     */
    public function addToTilknyttedeFunktioner(\ItkDev\Serviceplatformen\SF1500\Bruger\StructType\OrganisationFunktionFlerRelationType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \ItkDev\Serviceplatformen\SF1500\Bruger\StructType\OrganisationFunktionFlerRelationType) {
            throw new InvalidArgumentException(sprintf('The TilknyttedeFunktioner property can only contain items of type \ItkDev\Serviceplatformen\SF1500\Bruger\StructType\OrganisationFunktionFlerRelationType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->TilknyttedeFunktioner[] = $item;
        
        return $this;
    }
    /**
     * Get TilknyttedeInteressefaellesskaber value
     * @return \ItkDev\Serviceplatformen\SF1500\Bruger\StructType\InteressefaellesskabFlerRelationType[]
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
            if (!$relationListeTypeTilknyttedeInteressefaellesskaberItem instanceof \ItkDev\Serviceplatformen\SF1500\Bruger\StructType\InteressefaellesskabFlerRelationType) {
                $invalidValues[] = is_object($relationListeTypeTilknyttedeInteressefaellesskaberItem) ? get_class($relationListeTypeTilknyttedeInteressefaellesskaberItem) : sprintf('%s(%s)', gettype($relationListeTypeTilknyttedeInteressefaellesskaberItem), var_export($relationListeTypeTilknyttedeInteressefaellesskaberItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The TilknyttedeInteressefaellesskaber property can only contain items of type \ItkDev\Serviceplatformen\SF1500\Bruger\StructType\InteressefaellesskabFlerRelationType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set TilknyttedeInteressefaellesskaber value
     * @throws InvalidArgumentException
     * @param \ItkDev\Serviceplatformen\SF1500\Bruger\StructType\InteressefaellesskabFlerRelationType[] $tilknyttedeInteressefaellesskaber
     * @return \ItkDev\Serviceplatformen\SF1500\Bruger\StructType\RelationListeType
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
     * @param \ItkDev\Serviceplatformen\SF1500\Bruger\StructType\InteressefaellesskabFlerRelationType $item
     * @return \ItkDev\Serviceplatformen\SF1500\Bruger\StructType\RelationListeType
     */
    public function addToTilknyttedeInteressefaellesskaber(\ItkDev\Serviceplatformen\SF1500\Bruger\StructType\InteressefaellesskabFlerRelationType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \ItkDev\Serviceplatformen\SF1500\Bruger\StructType\InteressefaellesskabFlerRelationType) {
            throw new InvalidArgumentException(sprintf('The TilknyttedeInteressefaellesskaber property can only contain items of type \ItkDev\Serviceplatformen\SF1500\Bruger\StructType\InteressefaellesskabFlerRelationType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->TilknyttedeInteressefaellesskaber[] = $item;
        
        return $this;
    }
    /**
     * Get TilknyttedeOrganisationer value
     * @return \ItkDev\Serviceplatformen\SF1500\Bruger\StructType\OrganisationFlerRelationType[]
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
            if (!$relationListeTypeTilknyttedeOrganisationerItem instanceof \ItkDev\Serviceplatformen\SF1500\Bruger\StructType\OrganisationFlerRelationType) {
                $invalidValues[] = is_object($relationListeTypeTilknyttedeOrganisationerItem) ? get_class($relationListeTypeTilknyttedeOrganisationerItem) : sprintf('%s(%s)', gettype($relationListeTypeTilknyttedeOrganisationerItem), var_export($relationListeTypeTilknyttedeOrganisationerItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The TilknyttedeOrganisationer property can only contain items of type \ItkDev\Serviceplatformen\SF1500\Bruger\StructType\OrganisationFlerRelationType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set TilknyttedeOrganisationer value
     * @throws InvalidArgumentException
     * @param \ItkDev\Serviceplatformen\SF1500\Bruger\StructType\OrganisationFlerRelationType[] $tilknyttedeOrganisationer
     * @return \ItkDev\Serviceplatformen\SF1500\Bruger\StructType\RelationListeType
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
     * @param \ItkDev\Serviceplatformen\SF1500\Bruger\StructType\OrganisationFlerRelationType $item
     * @return \ItkDev\Serviceplatformen\SF1500\Bruger\StructType\RelationListeType
     */
    public function addToTilknyttedeOrganisationer(\ItkDev\Serviceplatformen\SF1500\Bruger\StructType\OrganisationFlerRelationType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \ItkDev\Serviceplatformen\SF1500\Bruger\StructType\OrganisationFlerRelationType) {
            throw new InvalidArgumentException(sprintf('The TilknyttedeOrganisationer property can only contain items of type \ItkDev\Serviceplatformen\SF1500\Bruger\StructType\OrganisationFlerRelationType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->TilknyttedeOrganisationer[] = $item;
        
        return $this;
    }
    /**
     * Get TilknyttedePersoner value
     * @return \ItkDev\Serviceplatformen\SF1500\Bruger\StructType\PersonFlerRelationType[]
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
            if (!$relationListeTypeTilknyttedePersonerItem instanceof \ItkDev\Serviceplatformen\SF1500\Bruger\StructType\PersonFlerRelationType) {
                $invalidValues[] = is_object($relationListeTypeTilknyttedePersonerItem) ? get_class($relationListeTypeTilknyttedePersonerItem) : sprintf('%s(%s)', gettype($relationListeTypeTilknyttedePersonerItem), var_export($relationListeTypeTilknyttedePersonerItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The TilknyttedePersoner property can only contain items of type \ItkDev\Serviceplatformen\SF1500\Bruger\StructType\PersonFlerRelationType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set TilknyttedePersoner value
     * @throws InvalidArgumentException
     * @param \ItkDev\Serviceplatformen\SF1500\Bruger\StructType\PersonFlerRelationType[] $tilknyttedePersoner
     * @return \ItkDev\Serviceplatformen\SF1500\Bruger\StructType\RelationListeType
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
     * @param \ItkDev\Serviceplatformen\SF1500\Bruger\StructType\PersonFlerRelationType $item
     * @return \ItkDev\Serviceplatformen\SF1500\Bruger\StructType\RelationListeType
     */
    public function addToTilknyttedePersoner(\ItkDev\Serviceplatformen\SF1500\Bruger\StructType\PersonFlerRelationType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \ItkDev\Serviceplatformen\SF1500\Bruger\StructType\PersonFlerRelationType) {
            throw new InvalidArgumentException(sprintf('The TilknyttedePersoner property can only contain items of type \ItkDev\Serviceplatformen\SF1500\Bruger\StructType\PersonFlerRelationType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->TilknyttedePersoner[] = $item;
        
        return $this;
    }
    /**
     * Get TilknyttedeItSystemer value
     * @return \ItkDev\Serviceplatformen\SF1500\Bruger\StructType\ItSystemFlerRelationType[]
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
            if (!$relationListeTypeTilknyttedeItSystemerItem instanceof \ItkDev\Serviceplatformen\SF1500\Bruger\StructType\ItSystemFlerRelationType) {
                $invalidValues[] = is_object($relationListeTypeTilknyttedeItSystemerItem) ? get_class($relationListeTypeTilknyttedeItSystemerItem) : sprintf('%s(%s)', gettype($relationListeTypeTilknyttedeItSystemerItem), var_export($relationListeTypeTilknyttedeItSystemerItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The TilknyttedeItSystemer property can only contain items of type \ItkDev\Serviceplatformen\SF1500\Bruger\StructType\ItSystemFlerRelationType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set TilknyttedeItSystemer value
     * @throws InvalidArgumentException
     * @param \ItkDev\Serviceplatformen\SF1500\Bruger\StructType\ItSystemFlerRelationType[] $tilknyttedeItSystemer
     * @return \ItkDev\Serviceplatformen\SF1500\Bruger\StructType\RelationListeType
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
     * @param \ItkDev\Serviceplatformen\SF1500\Bruger\StructType\ItSystemFlerRelationType $item
     * @return \ItkDev\Serviceplatformen\SF1500\Bruger\StructType\RelationListeType
     */
    public function addToTilknyttedeItSystemer(\ItkDev\Serviceplatformen\SF1500\Bruger\StructType\ItSystemFlerRelationType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \ItkDev\Serviceplatformen\SF1500\Bruger\StructType\ItSystemFlerRelationType) {
            throw new InvalidArgumentException(sprintf('The TilknyttedeItSystemer property can only contain items of type \ItkDev\Serviceplatformen\SF1500\Bruger\StructType\ItSystemFlerRelationType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->TilknyttedeItSystemer[] = $item;
        
        return $this;
    }
    /**
     * Get LokalUdvidelse value
     * @return \ItkDev\Serviceplatformen\SF1500\Bruger\StructType\LokalUdvidelseType|null
     */
    public function getLokalUdvidelse(): ?\ItkDev\Serviceplatformen\SF1500\Bruger\StructType\LokalUdvidelseType
    {
        return $this->LokalUdvidelse;
    }
    /**
     * Set LokalUdvidelse value
     * @param \ItkDev\Serviceplatformen\SF1500\Bruger\StructType\LokalUdvidelseType $lokalUdvidelse
     * @return \ItkDev\Serviceplatformen\SF1500\Bruger\StructType\RelationListeType
     */
    public function setLokalUdvidelse(?\ItkDev\Serviceplatformen\SF1500\Bruger\StructType\LokalUdvidelseType $lokalUdvidelse = null): self
    {
        $this->LokalUdvidelse = $lokalUdvidelse;
        
        return $this;
    }
}
