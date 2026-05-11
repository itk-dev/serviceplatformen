<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF2900\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AttributterListeType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class AttributterListeType extends AbstractStructBase
{
    /**
     * The Attributter
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var \ItkDev\Serviceplatformen\SF2900\StructType\AttributterType[]
     */
    protected array $Attributter;
    /**
     * Constructor method for AttributterListeType
     * @uses AttributterListeType::setAttributter()
     * @param \ItkDev\Serviceplatformen\SF2900\StructType\AttributterType[] $attributter
     */
    public function __construct(array $attributter)
    {
        $this
            ->setAttributter($attributter);
    }
    /**
     * Get Attributter value
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\AttributterType[]
     */
    public function getAttributter(): array
    {
        return $this->Attributter;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setAttributter method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAttributter method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAttributterForArrayConstraintFromSetAttributter(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $attributterListeTypeAttributterItem) {
            // validation for constraint: itemType
            if (!$attributterListeTypeAttributterItem instanceof \ItkDev\Serviceplatformen\SF2900\StructType\AttributterType) {
                $invalidValues[] = is_object($attributterListeTypeAttributterItem) ? get_class($attributterListeTypeAttributterItem) : sprintf('%s(%s)', gettype($attributterListeTypeAttributterItem), var_export($attributterListeTypeAttributterItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Attributter property can only contain items of type \ItkDev\Serviceplatformen\SF2900\StructType\AttributterType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Attributter value
     * @throws InvalidArgumentException
     * @param \ItkDev\Serviceplatformen\SF2900\StructType\AttributterType[] $attributter
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\AttributterListeType
     */
    public function setAttributter(array $attributter): self
    {
        // validation for constraint: array
        if ('' !== ($attributterArrayErrorMessage = self::validateAttributterForArrayConstraintFromSetAttributter($attributter))) {
            throw new InvalidArgumentException($attributterArrayErrorMessage, __LINE__);
        }
        $this->Attributter = $attributter;
        
        return $this;
    }
    /**
     * Add item to Attributter value
     * @throws InvalidArgumentException
     * @param \ItkDev\Serviceplatformen\SF2900\StructType\AttributterType $item
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\AttributterListeType
     */
    public function addToAttributter(\ItkDev\Serviceplatformen\SF2900\StructType\AttributterType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \ItkDev\Serviceplatformen\SF2900\StructType\AttributterType) {
            throw new InvalidArgumentException(sprintf('The Attributter property can only contain items of type \ItkDev\Serviceplatformen\SF2900\StructType\AttributterType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Attributter[] = $item;
        
        return $this;
    }
}
