<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF2900\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RoutingListeType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class RoutingListeType extends AbstractStructBase
{
    /**
     * The Routing
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var \ItkDev\Serviceplatformen\SF2900\StructType\RoutingType[]
     */
    protected array $Routing;
    /**
     * Constructor method for RoutingListeType
     * @uses RoutingListeType::setRouting()
     * @param \ItkDev\Serviceplatformen\SF2900\StructType\RoutingType[] $routing
     */
    public function __construct(array $routing)
    {
        $this
            ->setRouting($routing);
    }
    /**
     * Get Routing value
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\RoutingType[]
     */
    public function getRouting(): array
    {
        return $this->Routing;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setRouting method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRouting method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRoutingForArrayConstraintFromSetRouting(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $routingListeTypeRoutingItem) {
            // validation for constraint: itemType
            if (!$routingListeTypeRoutingItem instanceof \ItkDev\Serviceplatformen\SF2900\StructType\RoutingType) {
                $invalidValues[] = is_object($routingListeTypeRoutingItem) ? get_class($routingListeTypeRoutingItem) : sprintf('%s(%s)', gettype($routingListeTypeRoutingItem), var_export($routingListeTypeRoutingItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Routing property can only contain items of type \ItkDev\Serviceplatformen\SF2900\StructType\RoutingType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Routing value
     * @throws InvalidArgumentException
     * @param \ItkDev\Serviceplatformen\SF2900\StructType\RoutingType[] $routing
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\RoutingListeType
     */
    public function setRouting(array $routing): self
    {
        // validation for constraint: array
        if ('' !== ($routingArrayErrorMessage = self::validateRoutingForArrayConstraintFromSetRouting($routing))) {
            throw new InvalidArgumentException($routingArrayErrorMessage, __LINE__);
        }
        $this->Routing = $routing;
        
        return $this;
    }
    /**
     * Add item to Routing value
     * @throws InvalidArgumentException
     * @param \ItkDev\Serviceplatformen\SF2900\StructType\RoutingType $item
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\RoutingListeType
     */
    public function addToRouting(\ItkDev\Serviceplatformen\SF2900\StructType\RoutingType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \ItkDev\Serviceplatformen\SF2900\StructType\RoutingType) {
            throw new InvalidArgumentException(sprintf('The Routing property can only contain items of type \ItkDev\Serviceplatformen\SF2900\StructType\RoutingType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Routing[] = $item;
        
        return $this;
    }
}
