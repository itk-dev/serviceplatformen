<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF1500\KlassifikationSystem\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FacetterInputType StructType
 * Meta information extracted from the WSDL
 * - definition: urn:oio:sts:facetter:ADD:2.0.0
 * @subpackage Structs
 */
class FacetterInputType extends AbstractStructBase
{
    /**
     * The Facet
     * Meta information extracted from the WSDL
     * - content: urn:oio:sagdok:facet:ADD:2.0.0
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: facet:Facet
     * @var \ItkDev\Serviceplatformen\SF1500\KlassifikationSystem\StructType\FacetType[]
     */
    protected ?array $Facet = null;
    /**
     * Constructor method for FacetterInputType
     * @uses FacetterInputType::setFacet()
     * @param \ItkDev\Serviceplatformen\SF1500\KlassifikationSystem\StructType\FacetType[] $facet
     */
    public function __construct(?array $facet = null)
    {
        $this
            ->setFacet($facet);
    }
    /**
     * Get Facet value
     * @return \ItkDev\Serviceplatformen\SF1500\KlassifikationSystem\StructType\FacetType[]
     */
    public function getFacet(): ?array
    {
        return $this->Facet;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setFacet method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFacet method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFacetForArrayConstraintFromSetFacet(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $facetterInputTypeFacetItem) {
            // validation for constraint: itemType
            if (!$facetterInputTypeFacetItem instanceof \ItkDev\Serviceplatformen\SF1500\KlassifikationSystem\StructType\FacetType) {
                $invalidValues[] = is_object($facetterInputTypeFacetItem) ? get_class($facetterInputTypeFacetItem) : sprintf('%s(%s)', gettype($facetterInputTypeFacetItem), var_export($facetterInputTypeFacetItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Facet property can only contain items of type \ItkDev\Serviceplatformen\SF1500\KlassifikationSystem\StructType\FacetType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Facet value
     * @throws InvalidArgumentException
     * @param \ItkDev\Serviceplatformen\SF1500\KlassifikationSystem\StructType\FacetType[] $facet
     * @return \ItkDev\Serviceplatformen\SF1500\KlassifikationSystem\StructType\FacetterInputType
     */
    public function setFacet(?array $facet = null): self
    {
        // validation for constraint: array
        if ('' !== ($facetArrayErrorMessage = self::validateFacetForArrayConstraintFromSetFacet($facet))) {
            throw new InvalidArgumentException($facetArrayErrorMessage, __LINE__);
        }
        $this->Facet = $facet;
        
        return $this;
    }
    /**
     * Add item to Facet value
     * @throws InvalidArgumentException
     * @param \ItkDev\Serviceplatformen\SF1500\KlassifikationSystem\StructType\FacetType $item
     * @return \ItkDev\Serviceplatformen\SF1500\KlassifikationSystem\StructType\FacetterInputType
     */
    public function addToFacet(\ItkDev\Serviceplatformen\SF1500\KlassifikationSystem\StructType\FacetType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \ItkDev\Serviceplatformen\SF1500\KlassifikationSystem\StructType\FacetType) {
            throw new InvalidArgumentException(sprintf('The Facet property can only contain items of type \ItkDev\Serviceplatformen\SF1500\KlassifikationSystem\StructType\FacetType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Facet[] = $item;
        
        return $this;
    }
}
