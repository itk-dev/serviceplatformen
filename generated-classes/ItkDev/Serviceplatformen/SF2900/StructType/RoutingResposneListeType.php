<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF2900\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RoutingResposneListeType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class RoutingResposneListeType extends AbstractStructBase
{
    /**
     * The RoutingModtager
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var \ItkDev\Serviceplatformen\SF2900\StructType\RoutingResponseType[]
     */
    protected array $RoutingModtager;
    /**
     * Constructor method for RoutingResposneListeType
     * @uses RoutingResposneListeType::setRoutingModtager()
     * @param \ItkDev\Serviceplatformen\SF2900\StructType\RoutingResponseType[] $routingModtager
     */
    public function __construct(array $routingModtager)
    {
        $this
            ->setRoutingModtager($routingModtager);
    }
    /**
     * Get RoutingModtager value
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\RoutingResponseType[]
     */
    public function getRoutingModtager(): array
    {
        return $this->RoutingModtager;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setRoutingModtager method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRoutingModtager method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRoutingModtagerForArrayConstraintFromSetRoutingModtager(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $routingResposneListeTypeRoutingModtagerItem) {
            // validation for constraint: itemType
            if (!$routingResposneListeTypeRoutingModtagerItem instanceof \ItkDev\Serviceplatformen\SF2900\StructType\RoutingResponseType) {
                $invalidValues[] = is_object($routingResposneListeTypeRoutingModtagerItem) ? get_class($routingResposneListeTypeRoutingModtagerItem) : sprintf('%s(%s)', gettype($routingResposneListeTypeRoutingModtagerItem), var_export($routingResposneListeTypeRoutingModtagerItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The RoutingModtager property can only contain items of type \ItkDev\Serviceplatformen\SF2900\StructType\RoutingResponseType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set RoutingModtager value
     * @throws InvalidArgumentException
     * @param \ItkDev\Serviceplatformen\SF2900\StructType\RoutingResponseType[] $routingModtager
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\RoutingResposneListeType
     */
    public function setRoutingModtager(array $routingModtager): self
    {
        // validation for constraint: array
        if ('' !== ($routingModtagerArrayErrorMessage = self::validateRoutingModtagerForArrayConstraintFromSetRoutingModtager($routingModtager))) {
            throw new InvalidArgumentException($routingModtagerArrayErrorMessage, __LINE__);
        }
        $this->RoutingModtager = $routingModtager;
        
        return $this;
    }
    /**
     * Add item to RoutingModtager value
     * @throws InvalidArgumentException
     * @param \ItkDev\Serviceplatformen\SF2900\StructType\RoutingResponseType $item
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\RoutingResposneListeType
     */
    public function addToRoutingModtager(\ItkDev\Serviceplatformen\SF2900\StructType\RoutingResponseType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \ItkDev\Serviceplatformen\SF2900\StructType\RoutingResponseType) {
            throw new InvalidArgumentException(sprintf('The RoutingModtager property can only contain items of type \ItkDev\Serviceplatformen\SF2900\StructType\RoutingResponseType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->RoutingModtager[] = $item;
        
        return $this;
    }
}
