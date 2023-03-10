<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF1500\Facet\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RelationListeType StructType
 * Meta information extracted from the WSDL
 * - definition: urn:oio:sagdok:facetrelationliste:ADD:2.0.0
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
     * @var \ItkDev\Serviceplatformen\SF1500\Facet\StructType\AktoerRelationType|null
     */
    protected ?\ItkDev\Serviceplatformen\SF1500\Facet\StructType\AktoerRelationType $Ansvarlig = null;
    /**
     * The Ejer
     * Meta information extracted from the WSDL
     * - content: ejer
     * - minOccurs: 0
     * - ref: sd:Ejer
     * @var \ItkDev\Serviceplatformen\SF1500\Facet\StructType\AktoerRelationType|null
     */
    protected ?\ItkDev\Serviceplatformen\SF1500\Facet\StructType\AktoerRelationType $Ejer = null;
    /**
     * The FacetTilhoerer
     * Meta information extracted from the WSDL
     * - content: facettilhoerer
     * - minOccurs: 0
     * - ref: sd:FacetTilhoerer
     * @var \ItkDev\Serviceplatformen\SF1500\Facet\StructType\KlassifikationRelationType|null
     */
    protected ?\ItkDev\Serviceplatformen\SF1500\Facet\StructType\KlassifikationRelationType $FacetTilhoerer = null;
    /**
     * The Redaktoerer
     * Meta information extracted from the WSDL
     * - content: redaktoerer
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: sd:Redaktoerer
     * @var \ItkDev\Serviceplatformen\SF1500\Facet\StructType\AktoerFlerRelationType[]
     */
    protected ?array $Redaktoerer = null;
    /**
     * Constructor method for RelationListeType
     * @uses RelationListeType::setAnsvarlig()
     * @uses RelationListeType::setEjer()
     * @uses RelationListeType::setFacetTilhoerer()
     * @uses RelationListeType::setRedaktoerer()
     * @param \ItkDev\Serviceplatformen\SF1500\Facet\StructType\AktoerRelationType $ansvarlig
     * @param \ItkDev\Serviceplatformen\SF1500\Facet\StructType\AktoerRelationType $ejer
     * @param \ItkDev\Serviceplatformen\SF1500\Facet\StructType\KlassifikationRelationType $facetTilhoerer
     * @param \ItkDev\Serviceplatformen\SF1500\Facet\StructType\AktoerFlerRelationType[] $redaktoerer
     */
    public function __construct(?\ItkDev\Serviceplatformen\SF1500\Facet\StructType\AktoerRelationType $ansvarlig = null, ?\ItkDev\Serviceplatformen\SF1500\Facet\StructType\AktoerRelationType $ejer = null, ?\ItkDev\Serviceplatformen\SF1500\Facet\StructType\KlassifikationRelationType $facetTilhoerer = null, ?array $redaktoerer = null)
    {
        $this
            ->setAnsvarlig($ansvarlig)
            ->setEjer($ejer)
            ->setFacetTilhoerer($facetTilhoerer)
            ->setRedaktoerer($redaktoerer);
    }
    /**
     * Get Ansvarlig value
     * @return \ItkDev\Serviceplatformen\SF1500\Facet\StructType\AktoerRelationType|null
     */
    public function getAnsvarlig(): ?\ItkDev\Serviceplatformen\SF1500\Facet\StructType\AktoerRelationType
    {
        return $this->Ansvarlig;
    }
    /**
     * Set Ansvarlig value
     * @param \ItkDev\Serviceplatformen\SF1500\Facet\StructType\AktoerRelationType $ansvarlig
     * @return \ItkDev\Serviceplatformen\SF1500\Facet\StructType\RelationListeType
     */
    public function setAnsvarlig(?\ItkDev\Serviceplatformen\SF1500\Facet\StructType\AktoerRelationType $ansvarlig = null): self
    {
        $this->Ansvarlig = $ansvarlig;
        
        return $this;
    }
    /**
     * Get Ejer value
     * @return \ItkDev\Serviceplatformen\SF1500\Facet\StructType\AktoerRelationType|null
     */
    public function getEjer(): ?\ItkDev\Serviceplatformen\SF1500\Facet\StructType\AktoerRelationType
    {
        return $this->Ejer;
    }
    /**
     * Set Ejer value
     * @param \ItkDev\Serviceplatformen\SF1500\Facet\StructType\AktoerRelationType $ejer
     * @return \ItkDev\Serviceplatformen\SF1500\Facet\StructType\RelationListeType
     */
    public function setEjer(?\ItkDev\Serviceplatformen\SF1500\Facet\StructType\AktoerRelationType $ejer = null): self
    {
        $this->Ejer = $ejer;
        
        return $this;
    }
    /**
     * Get FacetTilhoerer value
     * @return \ItkDev\Serviceplatformen\SF1500\Facet\StructType\KlassifikationRelationType|null
     */
    public function getFacetTilhoerer(): ?\ItkDev\Serviceplatformen\SF1500\Facet\StructType\KlassifikationRelationType
    {
        return $this->FacetTilhoerer;
    }
    /**
     * Set FacetTilhoerer value
     * @param \ItkDev\Serviceplatformen\SF1500\Facet\StructType\KlassifikationRelationType $facetTilhoerer
     * @return \ItkDev\Serviceplatformen\SF1500\Facet\StructType\RelationListeType
     */
    public function setFacetTilhoerer(?\ItkDev\Serviceplatformen\SF1500\Facet\StructType\KlassifikationRelationType $facetTilhoerer = null): self
    {
        $this->FacetTilhoerer = $facetTilhoerer;
        
        return $this;
    }
    /**
     * Get Redaktoerer value
     * @return \ItkDev\Serviceplatformen\SF1500\Facet\StructType\AktoerFlerRelationType[]
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
            if (!$relationListeTypeRedaktoererItem instanceof \ItkDev\Serviceplatformen\SF1500\Facet\StructType\AktoerFlerRelationType) {
                $invalidValues[] = is_object($relationListeTypeRedaktoererItem) ? get_class($relationListeTypeRedaktoererItem) : sprintf('%s(%s)', gettype($relationListeTypeRedaktoererItem), var_export($relationListeTypeRedaktoererItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Redaktoerer property can only contain items of type \ItkDev\Serviceplatformen\SF1500\Facet\StructType\AktoerFlerRelationType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Redaktoerer value
     * @throws InvalidArgumentException
     * @param \ItkDev\Serviceplatformen\SF1500\Facet\StructType\AktoerFlerRelationType[] $redaktoerer
     * @return \ItkDev\Serviceplatformen\SF1500\Facet\StructType\RelationListeType
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
     * @param \ItkDev\Serviceplatformen\SF1500\Facet\StructType\AktoerFlerRelationType $item
     * @return \ItkDev\Serviceplatformen\SF1500\Facet\StructType\RelationListeType
     */
    public function addToRedaktoerer(\ItkDev\Serviceplatformen\SF1500\Facet\StructType\AktoerFlerRelationType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \ItkDev\Serviceplatformen\SF1500\Facet\StructType\AktoerFlerRelationType) {
            throw new InvalidArgumentException(sprintf('The Redaktoerer property can only contain items of type \ItkDev\Serviceplatformen\SF1500\Facet\StructType\AktoerFlerRelationType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Redaktoerer[] = $item;
        
        return $this;
    }
}
