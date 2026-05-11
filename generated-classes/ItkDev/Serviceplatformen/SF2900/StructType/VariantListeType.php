<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF2900\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VariantListeType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class VariantListeType extends AbstractStructBase
{
    /**
     * The Variant
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var \ItkDev\Serviceplatformen\SF2900\StructType\VariantType[]
     */
    protected array $Variant;
    /**
     * Constructor method for VariantListeType
     * @uses VariantListeType::setVariant()
     * @param \ItkDev\Serviceplatformen\SF2900\StructType\VariantType[] $variant
     */
    public function __construct(array $variant)
    {
        $this
            ->setVariant($variant);
    }
    /**
     * Get Variant value
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\VariantType[]
     */
    public function getVariant(): array
    {
        return $this->Variant;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setVariant method
     * This method is willingly generated in order to preserve the one-line inline validation within the setVariant method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateVariantForArrayConstraintFromSetVariant(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $variantListeTypeVariantItem) {
            // validation for constraint: itemType
            if (!$variantListeTypeVariantItem instanceof \ItkDev\Serviceplatformen\SF2900\StructType\VariantType) {
                $invalidValues[] = is_object($variantListeTypeVariantItem) ? get_class($variantListeTypeVariantItem) : sprintf('%s(%s)', gettype($variantListeTypeVariantItem), var_export($variantListeTypeVariantItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Variant property can only contain items of type \ItkDev\Serviceplatformen\SF2900\StructType\VariantType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Variant value
     * @throws InvalidArgumentException
     * @param \ItkDev\Serviceplatformen\SF2900\StructType\VariantType[] $variant
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\VariantListeType
     */
    public function setVariant(array $variant): self
    {
        // validation for constraint: array
        if ('' !== ($variantArrayErrorMessage = self::validateVariantForArrayConstraintFromSetVariant($variant))) {
            throw new InvalidArgumentException($variantArrayErrorMessage, __LINE__);
        }
        $this->Variant = $variant;
        
        return $this;
    }
    /**
     * Add item to Variant value
     * @throws InvalidArgumentException
     * @param \ItkDev\Serviceplatformen\SF2900\StructType\VariantType $item
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\VariantListeType
     */
    public function addToVariant(\ItkDev\Serviceplatformen\SF2900\StructType\VariantType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \ItkDev\Serviceplatformen\SF2900\StructType\VariantType) {
            throw new InvalidArgumentException(sprintf('The Variant property can only contain items of type \ItkDev\Serviceplatformen\SF2900\StructType\VariantType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Variant[] = $item;
        
        return $this;
    }
}
