<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF2900\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for tilgaengeligeModtagereType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class TilgaengeligeModtagereType extends AbstractStructBase
{
    /**
     * The System
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \ItkDev\Serviceplatformen\SF2900\StructType\ModtagerMedEndpointType[]
     */
    protected ?array $System = null;
    /**
     * Constructor method for tilgaengeligeModtagereType
     * @uses TilgaengeligeModtagereType::setSystem()
     * @param \ItkDev\Serviceplatformen\SF2900\StructType\ModtagerMedEndpointType[] $system
     */
    public function __construct(?array $system = null)
    {
        $this
            ->setSystem($system);
    }
    /**
     * Get System value
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\ModtagerMedEndpointType[]
     */
    public function getSystem(): ?array
    {
        return $this->System;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setSystem method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSystem method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSystemForArrayConstraintFromSetSystem(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $tilgaengeligeModtagereTypeSystemItem) {
            // validation for constraint: itemType
            if (!$tilgaengeligeModtagereTypeSystemItem instanceof \ItkDev\Serviceplatformen\SF2900\StructType\ModtagerMedEndpointType) {
                $invalidValues[] = is_object($tilgaengeligeModtagereTypeSystemItem) ? get_class($tilgaengeligeModtagereTypeSystemItem) : sprintf('%s(%s)', gettype($tilgaengeligeModtagereTypeSystemItem), var_export($tilgaengeligeModtagereTypeSystemItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The System property can only contain items of type \ItkDev\Serviceplatformen\SF2900\StructType\ModtagerMedEndpointType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set System value
     * @throws InvalidArgumentException
     * @param \ItkDev\Serviceplatformen\SF2900\StructType\ModtagerMedEndpointType[] $system
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\TilgaengeligeModtagereType
     */
    public function setSystem(?array $system = null): self
    {
        // validation for constraint: array
        if ('' !== ($systemArrayErrorMessage = self::validateSystemForArrayConstraintFromSetSystem($system))) {
            throw new InvalidArgumentException($systemArrayErrorMessage, __LINE__);
        }
        $this->System = $system;
        
        return $this;
    }
    /**
     * Add item to System value
     * @throws InvalidArgumentException
     * @param \ItkDev\Serviceplatformen\SF2900\StructType\ModtagerMedEndpointType $item
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\TilgaengeligeModtagereType
     */
    public function addToSystem(\ItkDev\Serviceplatformen\SF2900\StructType\ModtagerMedEndpointType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \ItkDev\Serviceplatformen\SF2900\StructType\ModtagerMedEndpointType) {
            throw new InvalidArgumentException(sprintf('The System property can only contain items of type \ItkDev\Serviceplatformen\SF2900\StructType\ModtagerMedEndpointType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->System[] = $item;
        
        return $this;
    }
}
