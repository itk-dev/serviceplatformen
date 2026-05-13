<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF2900\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FejlListeType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class FejlListeType extends AbstractStructBase
{
    /**
     * The Fejl
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \ItkDev\Serviceplatformen\SF2900\StructType\FejlType[]
     */
    protected ?array $Fejl = null;
    /**
     * Constructor method for FejlListeType
     * @uses FejlListeType::setFejl()
     * @param \ItkDev\Serviceplatformen\SF2900\StructType\FejlType[] $fejl
     */
    public function __construct(?array $fejl = null)
    {
        $this
            ->setFejl($fejl);
    }
    /**
     * Get Fejl value
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\FejlType[]
     */
    public function getFejl(): ?array
    {
        return $this->Fejl;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setFejl method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFejl method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFejlForArrayConstraintFromSetFejl(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $fejlListeTypeFejlItem) {
            // validation for constraint: itemType
            if (!$fejlListeTypeFejlItem instanceof \ItkDev\Serviceplatformen\SF2900\StructType\FejlType) {
                $invalidValues[] = is_object($fejlListeTypeFejlItem) ? get_class($fejlListeTypeFejlItem) : sprintf('%s(%s)', gettype($fejlListeTypeFejlItem), var_export($fejlListeTypeFejlItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Fejl property can only contain items of type \ItkDev\Serviceplatformen\SF2900\StructType\FejlType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Fejl value
     * @throws InvalidArgumentException
     * @param \ItkDev\Serviceplatformen\SF2900\StructType\FejlType[] $fejl
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\FejlListeType
     */
    public function setFejl(?array $fejl = null): self
    {
        // validation for constraint: array
        if ('' !== ($fejlArrayErrorMessage = self::validateFejlForArrayConstraintFromSetFejl($fejl))) {
            throw new InvalidArgumentException($fejlArrayErrorMessage, __LINE__);
        }
        $this->Fejl = $fejl;
        
        return $this;
    }
    /**
     * Add item to Fejl value
     * @throws InvalidArgumentException
     * @param \ItkDev\Serviceplatformen\SF2900\StructType\FejlType $item
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\FejlListeType
     */
    public function addToFejl(\ItkDev\Serviceplatformen\SF2900\StructType\FejlType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \ItkDev\Serviceplatformen\SF2900\StructType\FejlType) {
            throw new InvalidArgumentException(sprintf('The Fejl property can only contain items of type \ItkDev\Serviceplatformen\SF2900\StructType\FejlType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Fejl[] = $item;
        
        return $this;
    }
}
