<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF1500\Klasse\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RelationListeType StructType
 * Meta information extracted from the WSDL
 * - definition: urn:oio:sagdok:klasserelationliste:ADD:2.0.0
 * @subpackage Structs
 */
class RelationListeType extends AbstractStructBase
{
    /**
     * The Ansvarlig
     * Meta information extracted from the WSDL
     * - content: ansvarlig
     * - minOccurs: 0
     * - ref: sd:Ansvarlig
     * @var \ItkDev\Serviceplatformen\SF1500\Klasse\StructType\AktoerRelationType|null
     */
    protected ?\ItkDev\Serviceplatformen\SF1500\Klasse\StructType\AktoerRelationType $Ansvarlig = null;
    /**
     * The Ejer
     * Meta information extracted from the WSDL
     * - content: ejer
     * - minOccurs: 0
     * - ref: sd:Ejer
     * @var \ItkDev\Serviceplatformen\SF1500\Klasse\StructType\AktoerRelationType|null
     */
    protected ?\ItkDev\Serviceplatformen\SF1500\Klasse\StructType\AktoerRelationType $Ejer = null;
    /**
     * The Erstatter
     * Meta information extracted from the WSDL
     * - content: erstatter
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: sd:Erstatter
     * @var \ItkDev\Serviceplatformen\SF1500\Klasse\StructType\KlasseFlerRelationType[]
     */
    protected ?array $Erstatter = null;
    /**
     * The Facet
     * Meta information extracted from the WSDL
     * - content: facet
     * - minOccurs: 0
     * - ref: sd:Facet
     * @var \ItkDev\Serviceplatformen\SF1500\Klasse\StructType\FacetRelationType|null
     */
    protected ?\ItkDev\Serviceplatformen\SF1500\Klasse\StructType\FacetRelationType $Facet = null;
    /**
     * The LovligeKombinationer
     * Meta information extracted from the WSDL
     * - content: lovligekombinationer
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: sd:LovligeKombinationer
     * @var \ItkDev\Serviceplatformen\SF1500\Klasse\StructType\KlasseFlerRelationType[]
     */
    protected ?array $LovligeKombinationer = null;
    /**
     * The Mapninger
     * Meta information extracted from the WSDL
     * - content: mapninger
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: sd:Mapninger
     * @var \ItkDev\Serviceplatformen\SF1500\Klasse\StructType\KlasseFlerRelationType[]
     */
    protected ?array $Mapninger = null;
    /**
     * The OverordnetKlasse
     * Meta information extracted from the WSDL
     * - content: overordnetklasse
     * - minOccurs: 0
     * - ref: sd:OverordnetKlasse
     * @var \ItkDev\Serviceplatformen\SF1500\Klasse\StructType\KlasseRelationType|null
     */
    protected ?\ItkDev\Serviceplatformen\SF1500\Klasse\StructType\KlasseRelationType $OverordnetKlasse = null;
    /**
     * The Redaktoerer
     * Meta information extracted from the WSDL
     * - content: redaktoerer
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: sd:Redaktoerer
     * @var \ItkDev\Serviceplatformen\SF1500\Klasse\StructType\AktoerFlerRelationType[]
     */
    protected ?array $Redaktoerer = null;
    /**
     * The Sideordnede
     * Meta information extracted from the WSDL
     * - content: sideordnede
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: sd:Sideordnede
     * @var \ItkDev\Serviceplatformen\SF1500\Klasse\StructType\KlasseFlerRelationType[]
     */
    protected ?array $Sideordnede = null;
    /**
     * The Tilfoejelser
     * Meta information extracted from the WSDL
     * - content: tilfoejelser
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: sd:Tilfoejelser
     * @var \ItkDev\Serviceplatformen\SF1500\Klasse\StructType\KlasseFlerRelationType[]
     */
    protected ?array $Tilfoejelser = null;
    /**
     * Constructor method for RelationListeType
     * @uses RelationListeType::setAnsvarlig()
     * @uses RelationListeType::setEjer()
     * @uses RelationListeType::setErstatter()
     * @uses RelationListeType::setFacet()
     * @uses RelationListeType::setLovligeKombinationer()
     * @uses RelationListeType::setMapninger()
     * @uses RelationListeType::setOverordnetKlasse()
     * @uses RelationListeType::setRedaktoerer()
     * @uses RelationListeType::setSideordnede()
     * @uses RelationListeType::setTilfoejelser()
     * @param \ItkDev\Serviceplatformen\SF1500\Klasse\StructType\AktoerRelationType $ansvarlig
     * @param \ItkDev\Serviceplatformen\SF1500\Klasse\StructType\AktoerRelationType $ejer
     * @param \ItkDev\Serviceplatformen\SF1500\Klasse\StructType\KlasseFlerRelationType[] $erstatter
     * @param \ItkDev\Serviceplatformen\SF1500\Klasse\StructType\FacetRelationType $facet
     * @param \ItkDev\Serviceplatformen\SF1500\Klasse\StructType\KlasseFlerRelationType[] $lovligeKombinationer
     * @param \ItkDev\Serviceplatformen\SF1500\Klasse\StructType\KlasseFlerRelationType[] $mapninger
     * @param \ItkDev\Serviceplatformen\SF1500\Klasse\StructType\KlasseRelationType $overordnetKlasse
     * @param \ItkDev\Serviceplatformen\SF1500\Klasse\StructType\AktoerFlerRelationType[] $redaktoerer
     * @param \ItkDev\Serviceplatformen\SF1500\Klasse\StructType\KlasseFlerRelationType[] $sideordnede
     * @param \ItkDev\Serviceplatformen\SF1500\Klasse\StructType\KlasseFlerRelationType[] $tilfoejelser
     */
    public function __construct(?\ItkDev\Serviceplatformen\SF1500\Klasse\StructType\AktoerRelationType $ansvarlig = null, ?\ItkDev\Serviceplatformen\SF1500\Klasse\StructType\AktoerRelationType $ejer = null, ?array $erstatter = null, ?\ItkDev\Serviceplatformen\SF1500\Klasse\StructType\FacetRelationType $facet = null, ?array $lovligeKombinationer = null, ?array $mapninger = null, ?\ItkDev\Serviceplatformen\SF1500\Klasse\StructType\KlasseRelationType $overordnetKlasse = null, ?array $redaktoerer = null, ?array $sideordnede = null, ?array $tilfoejelser = null)
    {
        $this
            ->setAnsvarlig($ansvarlig)
            ->setEjer($ejer)
            ->setErstatter($erstatter)
            ->setFacet($facet)
            ->setLovligeKombinationer($lovligeKombinationer)
            ->setMapninger($mapninger)
            ->setOverordnetKlasse($overordnetKlasse)
            ->setRedaktoerer($redaktoerer)
            ->setSideordnede($sideordnede)
            ->setTilfoejelser($tilfoejelser);
    }
    /**
     * Get Ansvarlig value
     * @return \ItkDev\Serviceplatformen\SF1500\Klasse\StructType\AktoerRelationType|null
     */
    public function getAnsvarlig(): ?\ItkDev\Serviceplatformen\SF1500\Klasse\StructType\AktoerRelationType
    {
        return $this->Ansvarlig;
    }
    /**
     * Set Ansvarlig value
     * @param \ItkDev\Serviceplatformen\SF1500\Klasse\StructType\AktoerRelationType $ansvarlig
     * @return \ItkDev\Serviceplatformen\SF1500\Klasse\StructType\RelationListeType
     */
    public function setAnsvarlig(?\ItkDev\Serviceplatformen\SF1500\Klasse\StructType\AktoerRelationType $ansvarlig = null): self
    {
        $this->Ansvarlig = $ansvarlig;
        
        return $this;
    }
    /**
     * Get Ejer value
     * @return \ItkDev\Serviceplatformen\SF1500\Klasse\StructType\AktoerRelationType|null
     */
    public function getEjer(): ?\ItkDev\Serviceplatformen\SF1500\Klasse\StructType\AktoerRelationType
    {
        return $this->Ejer;
    }
    /**
     * Set Ejer value
     * @param \ItkDev\Serviceplatformen\SF1500\Klasse\StructType\AktoerRelationType $ejer
     * @return \ItkDev\Serviceplatformen\SF1500\Klasse\StructType\RelationListeType
     */
    public function setEjer(?\ItkDev\Serviceplatformen\SF1500\Klasse\StructType\AktoerRelationType $ejer = null): self
    {
        $this->Ejer = $ejer;
        
        return $this;
    }
    /**
     * Get Erstatter value
     * @return \ItkDev\Serviceplatformen\SF1500\Klasse\StructType\KlasseFlerRelationType[]
     */
    public function getErstatter(): ?array
    {
        return $this->Erstatter;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setErstatter method
     * This method is willingly generated in order to preserve the one-line inline validation within the setErstatter method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateErstatterForArrayConstraintFromSetErstatter(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $relationListeTypeErstatterItem) {
            // validation for constraint: itemType
            if (!$relationListeTypeErstatterItem instanceof \ItkDev\Serviceplatformen\SF1500\Klasse\StructType\KlasseFlerRelationType) {
                $invalidValues[] = is_object($relationListeTypeErstatterItem) ? get_class($relationListeTypeErstatterItem) : sprintf('%s(%s)', gettype($relationListeTypeErstatterItem), var_export($relationListeTypeErstatterItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Erstatter property can only contain items of type \ItkDev\Serviceplatformen\SF1500\Klasse\StructType\KlasseFlerRelationType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Erstatter value
     * @throws InvalidArgumentException
     * @param \ItkDev\Serviceplatformen\SF1500\Klasse\StructType\KlasseFlerRelationType[] $erstatter
     * @return \ItkDev\Serviceplatformen\SF1500\Klasse\StructType\RelationListeType
     */
    public function setErstatter(?array $erstatter = null): self
    {
        // validation for constraint: array
        if ('' !== ($erstatterArrayErrorMessage = self::validateErstatterForArrayConstraintFromSetErstatter($erstatter))) {
            throw new InvalidArgumentException($erstatterArrayErrorMessage, __LINE__);
        }
        $this->Erstatter = $erstatter;
        
        return $this;
    }
    /**
     * Add item to Erstatter value
     * @throws InvalidArgumentException
     * @param \ItkDev\Serviceplatformen\SF1500\Klasse\StructType\KlasseFlerRelationType $item
     * @return \ItkDev\Serviceplatformen\SF1500\Klasse\StructType\RelationListeType
     */
    public function addToErstatter(\ItkDev\Serviceplatformen\SF1500\Klasse\StructType\KlasseFlerRelationType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \ItkDev\Serviceplatformen\SF1500\Klasse\StructType\KlasseFlerRelationType) {
            throw new InvalidArgumentException(sprintf('The Erstatter property can only contain items of type \ItkDev\Serviceplatformen\SF1500\Klasse\StructType\KlasseFlerRelationType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Erstatter[] = $item;
        
        return $this;
    }
    /**
     * Get Facet value
     * @return \ItkDev\Serviceplatformen\SF1500\Klasse\StructType\FacetRelationType|null
     */
    public function getFacet(): ?\ItkDev\Serviceplatformen\SF1500\Klasse\StructType\FacetRelationType
    {
        return $this->Facet;
    }
    /**
     * Set Facet value
     * @param \ItkDev\Serviceplatformen\SF1500\Klasse\StructType\FacetRelationType $facet
     * @return \ItkDev\Serviceplatformen\SF1500\Klasse\StructType\RelationListeType
     */
    public function setFacet(?\ItkDev\Serviceplatformen\SF1500\Klasse\StructType\FacetRelationType $facet = null): self
    {
        $this->Facet = $facet;
        
        return $this;
    }
    /**
     * Get LovligeKombinationer value
     * @return \ItkDev\Serviceplatformen\SF1500\Klasse\StructType\KlasseFlerRelationType[]
     */
    public function getLovligeKombinationer(): ?array
    {
        return $this->LovligeKombinationer;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setLovligeKombinationer method
     * This method is willingly generated in order to preserve the one-line inline validation within the setLovligeKombinationer method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateLovligeKombinationerForArrayConstraintFromSetLovligeKombinationer(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $relationListeTypeLovligeKombinationerItem) {
            // validation for constraint: itemType
            if (!$relationListeTypeLovligeKombinationerItem instanceof \ItkDev\Serviceplatformen\SF1500\Klasse\StructType\KlasseFlerRelationType) {
                $invalidValues[] = is_object($relationListeTypeLovligeKombinationerItem) ? get_class($relationListeTypeLovligeKombinationerItem) : sprintf('%s(%s)', gettype($relationListeTypeLovligeKombinationerItem), var_export($relationListeTypeLovligeKombinationerItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The LovligeKombinationer property can only contain items of type \ItkDev\Serviceplatformen\SF1500\Klasse\StructType\KlasseFlerRelationType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set LovligeKombinationer value
     * @throws InvalidArgumentException
     * @param \ItkDev\Serviceplatformen\SF1500\Klasse\StructType\KlasseFlerRelationType[] $lovligeKombinationer
     * @return \ItkDev\Serviceplatformen\SF1500\Klasse\StructType\RelationListeType
     */
    public function setLovligeKombinationer(?array $lovligeKombinationer = null): self
    {
        // validation for constraint: array
        if ('' !== ($lovligeKombinationerArrayErrorMessage = self::validateLovligeKombinationerForArrayConstraintFromSetLovligeKombinationer($lovligeKombinationer))) {
            throw new InvalidArgumentException($lovligeKombinationerArrayErrorMessage, __LINE__);
        }
        $this->LovligeKombinationer = $lovligeKombinationer;
        
        return $this;
    }
    /**
     * Add item to LovligeKombinationer value
     * @throws InvalidArgumentException
     * @param \ItkDev\Serviceplatformen\SF1500\Klasse\StructType\KlasseFlerRelationType $item
     * @return \ItkDev\Serviceplatformen\SF1500\Klasse\StructType\RelationListeType
     */
    public function addToLovligeKombinationer(\ItkDev\Serviceplatformen\SF1500\Klasse\StructType\KlasseFlerRelationType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \ItkDev\Serviceplatformen\SF1500\Klasse\StructType\KlasseFlerRelationType) {
            throw new InvalidArgumentException(sprintf('The LovligeKombinationer property can only contain items of type \ItkDev\Serviceplatformen\SF1500\Klasse\StructType\KlasseFlerRelationType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->LovligeKombinationer[] = $item;
        
        return $this;
    }
    /**
     * Get Mapninger value
     * @return \ItkDev\Serviceplatformen\SF1500\Klasse\StructType\KlasseFlerRelationType[]
     */
    public function getMapninger(): ?array
    {
        return $this->Mapninger;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMapninger method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMapninger method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMapningerForArrayConstraintFromSetMapninger(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $relationListeTypeMapningerItem) {
            // validation for constraint: itemType
            if (!$relationListeTypeMapningerItem instanceof \ItkDev\Serviceplatformen\SF1500\Klasse\StructType\KlasseFlerRelationType) {
                $invalidValues[] = is_object($relationListeTypeMapningerItem) ? get_class($relationListeTypeMapningerItem) : sprintf('%s(%s)', gettype($relationListeTypeMapningerItem), var_export($relationListeTypeMapningerItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Mapninger property can only contain items of type \ItkDev\Serviceplatformen\SF1500\Klasse\StructType\KlasseFlerRelationType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Mapninger value
     * @throws InvalidArgumentException
     * @param \ItkDev\Serviceplatformen\SF1500\Klasse\StructType\KlasseFlerRelationType[] $mapninger
     * @return \ItkDev\Serviceplatformen\SF1500\Klasse\StructType\RelationListeType
     */
    public function setMapninger(?array $mapninger = null): self
    {
        // validation for constraint: array
        if ('' !== ($mapningerArrayErrorMessage = self::validateMapningerForArrayConstraintFromSetMapninger($mapninger))) {
            throw new InvalidArgumentException($mapningerArrayErrorMessage, __LINE__);
        }
        $this->Mapninger = $mapninger;
        
        return $this;
    }
    /**
     * Add item to Mapninger value
     * @throws InvalidArgumentException
     * @param \ItkDev\Serviceplatformen\SF1500\Klasse\StructType\KlasseFlerRelationType $item
     * @return \ItkDev\Serviceplatformen\SF1500\Klasse\StructType\RelationListeType
     */
    public function addToMapninger(\ItkDev\Serviceplatformen\SF1500\Klasse\StructType\KlasseFlerRelationType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \ItkDev\Serviceplatformen\SF1500\Klasse\StructType\KlasseFlerRelationType) {
            throw new InvalidArgumentException(sprintf('The Mapninger property can only contain items of type \ItkDev\Serviceplatformen\SF1500\Klasse\StructType\KlasseFlerRelationType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Mapninger[] = $item;
        
        return $this;
    }
    /**
     * Get OverordnetKlasse value
     * @return \ItkDev\Serviceplatformen\SF1500\Klasse\StructType\KlasseRelationType|null
     */
    public function getOverordnetKlasse(): ?\ItkDev\Serviceplatformen\SF1500\Klasse\StructType\KlasseRelationType
    {
        return $this->OverordnetKlasse;
    }
    /**
     * Set OverordnetKlasse value
     * @param \ItkDev\Serviceplatformen\SF1500\Klasse\StructType\KlasseRelationType $overordnetKlasse
     * @return \ItkDev\Serviceplatformen\SF1500\Klasse\StructType\RelationListeType
     */
    public function setOverordnetKlasse(?\ItkDev\Serviceplatformen\SF1500\Klasse\StructType\KlasseRelationType $overordnetKlasse = null): self
    {
        $this->OverordnetKlasse = $overordnetKlasse;
        
        return $this;
    }
    /**
     * Get Redaktoerer value
     * @return \ItkDev\Serviceplatformen\SF1500\Klasse\StructType\AktoerFlerRelationType[]
     */
    public function getRedaktoerer(): ?array
    {
        return $this->Redaktoerer;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setRedaktoerer method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRedaktoerer method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRedaktoererForArrayConstraintFromSetRedaktoerer(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $relationListeTypeRedaktoererItem) {
            // validation for constraint: itemType
            if (!$relationListeTypeRedaktoererItem instanceof \ItkDev\Serviceplatformen\SF1500\Klasse\StructType\AktoerFlerRelationType) {
                $invalidValues[] = is_object($relationListeTypeRedaktoererItem) ? get_class($relationListeTypeRedaktoererItem) : sprintf('%s(%s)', gettype($relationListeTypeRedaktoererItem), var_export($relationListeTypeRedaktoererItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Redaktoerer property can only contain items of type \ItkDev\Serviceplatformen\SF1500\Klasse\StructType\AktoerFlerRelationType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Redaktoerer value
     * @throws InvalidArgumentException
     * @param \ItkDev\Serviceplatformen\SF1500\Klasse\StructType\AktoerFlerRelationType[] $redaktoerer
     * @return \ItkDev\Serviceplatformen\SF1500\Klasse\StructType\RelationListeType
     */
    public function setRedaktoerer(?array $redaktoerer = null): self
    {
        // validation for constraint: array
        if ('' !== ($redaktoererArrayErrorMessage = self::validateRedaktoererForArrayConstraintFromSetRedaktoerer($redaktoerer))) {
            throw new InvalidArgumentException($redaktoererArrayErrorMessage, __LINE__);
        }
        $this->Redaktoerer = $redaktoerer;
        
        return $this;
    }
    /**
     * Add item to Redaktoerer value
     * @throws InvalidArgumentException
     * @param \ItkDev\Serviceplatformen\SF1500\Klasse\StructType\AktoerFlerRelationType $item
     * @return \ItkDev\Serviceplatformen\SF1500\Klasse\StructType\RelationListeType
     */
    public function addToRedaktoerer(\ItkDev\Serviceplatformen\SF1500\Klasse\StructType\AktoerFlerRelationType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \ItkDev\Serviceplatformen\SF1500\Klasse\StructType\AktoerFlerRelationType) {
            throw new InvalidArgumentException(sprintf('The Redaktoerer property can only contain items of type \ItkDev\Serviceplatformen\SF1500\Klasse\StructType\AktoerFlerRelationType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Redaktoerer[] = $item;
        
        return $this;
    }
    /**
     * Get Sideordnede value
     * @return \ItkDev\Serviceplatformen\SF1500\Klasse\StructType\KlasseFlerRelationType[]
     */
    public function getSideordnede(): ?array
    {
        return $this->Sideordnede;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setSideordnede method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSideordnede method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSideordnedeForArrayConstraintFromSetSideordnede(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $relationListeTypeSideordnedeItem) {
            // validation for constraint: itemType
            if (!$relationListeTypeSideordnedeItem instanceof \ItkDev\Serviceplatformen\SF1500\Klasse\StructType\KlasseFlerRelationType) {
                $invalidValues[] = is_object($relationListeTypeSideordnedeItem) ? get_class($relationListeTypeSideordnedeItem) : sprintf('%s(%s)', gettype($relationListeTypeSideordnedeItem), var_export($relationListeTypeSideordnedeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Sideordnede property can only contain items of type \ItkDev\Serviceplatformen\SF1500\Klasse\StructType\KlasseFlerRelationType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Sideordnede value
     * @throws InvalidArgumentException
     * @param \ItkDev\Serviceplatformen\SF1500\Klasse\StructType\KlasseFlerRelationType[] $sideordnede
     * @return \ItkDev\Serviceplatformen\SF1500\Klasse\StructType\RelationListeType
     */
    public function setSideordnede(?array $sideordnede = null): self
    {
        // validation for constraint: array
        if ('' !== ($sideordnedeArrayErrorMessage = self::validateSideordnedeForArrayConstraintFromSetSideordnede($sideordnede))) {
            throw new InvalidArgumentException($sideordnedeArrayErrorMessage, __LINE__);
        }
        $this->Sideordnede = $sideordnede;
        
        return $this;
    }
    /**
     * Add item to Sideordnede value
     * @throws InvalidArgumentException
     * @param \ItkDev\Serviceplatformen\SF1500\Klasse\StructType\KlasseFlerRelationType $item
     * @return \ItkDev\Serviceplatformen\SF1500\Klasse\StructType\RelationListeType
     */
    public function addToSideordnede(\ItkDev\Serviceplatformen\SF1500\Klasse\StructType\KlasseFlerRelationType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \ItkDev\Serviceplatformen\SF1500\Klasse\StructType\KlasseFlerRelationType) {
            throw new InvalidArgumentException(sprintf('The Sideordnede property can only contain items of type \ItkDev\Serviceplatformen\SF1500\Klasse\StructType\KlasseFlerRelationType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Sideordnede[] = $item;
        
        return $this;
    }
    /**
     * Get Tilfoejelser value
     * @return \ItkDev\Serviceplatformen\SF1500\Klasse\StructType\KlasseFlerRelationType[]
     */
    public function getTilfoejelser(): ?array
    {
        return $this->Tilfoejelser;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setTilfoejelser method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTilfoejelser method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTilfoejelserForArrayConstraintFromSetTilfoejelser(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $relationListeTypeTilfoejelserItem) {
            // validation for constraint: itemType
            if (!$relationListeTypeTilfoejelserItem instanceof \ItkDev\Serviceplatformen\SF1500\Klasse\StructType\KlasseFlerRelationType) {
                $invalidValues[] = is_object($relationListeTypeTilfoejelserItem) ? get_class($relationListeTypeTilfoejelserItem) : sprintf('%s(%s)', gettype($relationListeTypeTilfoejelserItem), var_export($relationListeTypeTilfoejelserItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Tilfoejelser property can only contain items of type \ItkDev\Serviceplatformen\SF1500\Klasse\StructType\KlasseFlerRelationType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Tilfoejelser value
     * @throws InvalidArgumentException
     * @param \ItkDev\Serviceplatformen\SF1500\Klasse\StructType\KlasseFlerRelationType[] $tilfoejelser
     * @return \ItkDev\Serviceplatformen\SF1500\Klasse\StructType\RelationListeType
     */
    public function setTilfoejelser(?array $tilfoejelser = null): self
    {
        // validation for constraint: array
        if ('' !== ($tilfoejelserArrayErrorMessage = self::validateTilfoejelserForArrayConstraintFromSetTilfoejelser($tilfoejelser))) {
            throw new InvalidArgumentException($tilfoejelserArrayErrorMessage, __LINE__);
        }
        $this->Tilfoejelser = $tilfoejelser;
        
        return $this;
    }
    /**
     * Add item to Tilfoejelser value
     * @throws InvalidArgumentException
     * @param \ItkDev\Serviceplatformen\SF1500\Klasse\StructType\KlasseFlerRelationType $item
     * @return \ItkDev\Serviceplatformen\SF1500\Klasse\StructType\RelationListeType
     */
    public function addToTilfoejelser(\ItkDev\Serviceplatformen\SF1500\Klasse\StructType\KlasseFlerRelationType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \ItkDev\Serviceplatformen\SF1500\Klasse\StructType\KlasseFlerRelationType) {
            throw new InvalidArgumentException(sprintf('The Tilfoejelser property can only contain items of type \ItkDev\Serviceplatformen\SF1500\Klasse\StructType\KlasseFlerRelationType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Tilfoejelser[] = $item;
        
        return $this;
    }
}
