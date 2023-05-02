<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF1500\Myndighed\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MultipleOutputType StructType
 * Meta information extracted from the WSDL
 * - definition: urn:oio:sagdok:multipleoutput:ADD:1.0.0
 * @subpackage Structs
 */
class MultipleOutputType extends AbstractStructBase
{
    /**
     * The UnikRetur
     * Meta information extracted from the WSDL
     * - choice: UnikRetur | StandardRetur
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - content: standardretur
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \ItkDev\Serviceplatformen\SF1500\Myndighed\StructType\UnikReturType[]
     */
    protected ?array $UnikRetur = null;
    /**
     * The StandardRetur
     * Meta information extracted from the WSDL
     * - choice: UnikRetur | StandardRetur
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - content: standardretur
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \ItkDev\Serviceplatformen\SF1500\Myndighed\StructType\StandardReturType[]
     */
    protected ?array $StandardRetur = null;
    /**
     * Constructor method for MultipleOutputType
     * @uses MultipleOutputType::setUnikRetur()
     * @uses MultipleOutputType::setStandardRetur()
     * @param \ItkDev\Serviceplatformen\SF1500\Myndighed\StructType\UnikReturType[] $unikRetur
     * @param \ItkDev\Serviceplatformen\SF1500\Myndighed\StructType\StandardReturType[] $standardRetur
     */
    public function __construct(?array $unikRetur = null, ?array $standardRetur = null)
    {
        $this
            ->setUnikRetur($unikRetur)
            ->setStandardRetur($standardRetur);
    }
    /**
     * Get UnikRetur value
     * @return \ItkDev\Serviceplatformen\SF1500\Myndighed\StructType\UnikReturType[]|null
     */
    public function getUnikRetur(): ?array
    {
        return $this->UnikRetur ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setUnikRetur method
     * This method is willingly generated in order to preserve the one-line inline validation within the setUnikRetur method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateUnikReturForArrayConstraintFromSetUnikRetur(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $multipleOutputTypeUnikReturItem) {
            // validation for constraint: itemType
            if (!$multipleOutputTypeUnikReturItem instanceof \ItkDev\Serviceplatformen\SF1500\Myndighed\StructType\UnikReturType) {
                $invalidValues[] = is_object($multipleOutputTypeUnikReturItem) ? get_class($multipleOutputTypeUnikReturItem) : sprintf('%s(%s)', gettype($multipleOutputTypeUnikReturItem), var_export($multipleOutputTypeUnikReturItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The UnikRetur property can only contain items of type \ItkDev\Serviceplatformen\SF1500\Myndighed\StructType\UnikReturType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setUnikRetur method
     * This method is willingly generated in order to preserve the one-line inline validation within the setUnikRetur method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateUnikReturForChoiceConstraintFromSetUnikRetur($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'StandardRetur',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property UnikRetur can\'t be set as the property %s is already set. Only one property must be set among these properties: UnikRetur, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set UnikRetur value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @throws InvalidArgumentException
     * @param \ItkDev\Serviceplatformen\SF1500\Myndighed\StructType\UnikReturType[] $unikRetur
     * @return \ItkDev\Serviceplatformen\SF1500\Myndighed\StructType\MultipleOutputType
     */
    public function setUnikRetur(?array $unikRetur = null): self
    {
        // validation for constraint: array
        if ('' !== ($unikReturArrayErrorMessage = self::validateUnikReturForArrayConstraintFromSetUnikRetur($unikRetur))) {
            throw new InvalidArgumentException($unikReturArrayErrorMessage, __LINE__);
        }
        // validation for constraint: choice(UnikRetur, StandardRetur)
        if ('' !== ($unikReturChoiceErrorMessage = self::validateUnikReturForChoiceConstraintFromSetUnikRetur($unikRetur))) {
            throw new InvalidArgumentException($unikReturChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($unikRetur) && count($unikRetur) > 1) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 1', count($unikRetur)), __LINE__);
        }
        if (is_null($unikRetur) || (is_array($unikRetur) && empty($unikRetur))) {
            unset($this->UnikRetur);
        } else {
            $this->UnikRetur = $unikRetur;
        }
        
        return $this;
    }
    /**
     * This method is responsible for validating the value(s) passed to the addToUnikRetur method
     * This method is willingly generated in order to preserve the one-line inline validation within the addToUnikRetur method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateItemForChoiceConstraintFromAddToUnikRetur($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'StandardRetur',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property UnikRetur can\'t be set as the property %s is already set. Only one property must be set among these properties: UnikRetur, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Add item to UnikRetur value
     * @throws InvalidArgumentException
     * @param \ItkDev\Serviceplatformen\SF1500\Myndighed\StructType\UnikReturType $item
     * @return \ItkDev\Serviceplatformen\SF1500\Myndighed\StructType\MultipleOutputType
     */
    public function addToUnikRetur(\ItkDev\Serviceplatformen\SF1500\Myndighed\StructType\UnikReturType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \ItkDev\Serviceplatformen\SF1500\Myndighed\StructType\UnikReturType) {
            throw new InvalidArgumentException(sprintf('The UnikRetur property can only contain items of type \ItkDev\Serviceplatformen\SF1500\Myndighed\StructType\UnikReturType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: choice(UnikRetur, StandardRetur)
        if ('' !== ($itemChoiceErrorMessage = self::validateItemForChoiceConstraintFromAddToUnikRetur($item))) {
            throw new InvalidArgumentException($itemChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($this->UnikRetur) && count($this->UnikRetur) >= 1) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 1', count($this->UnikRetur)), __LINE__);
        }
        $this->UnikRetur[] = $item;
        
        return $this;
    }
    /**
     * Get StandardRetur value
     * @return \ItkDev\Serviceplatformen\SF1500\Myndighed\StructType\StandardReturType[]|null
     */
    public function getStandardRetur(): ?array
    {
        return $this->StandardRetur ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setStandardRetur method
     * This method is willingly generated in order to preserve the one-line inline validation within the setStandardRetur method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateStandardReturForArrayConstraintFromSetStandardRetur(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $multipleOutputTypeStandardReturItem) {
            // validation for constraint: itemType
            if (!$multipleOutputTypeStandardReturItem instanceof \ItkDev\Serviceplatformen\SF1500\Myndighed\StructType\StandardReturType) {
                $invalidValues[] = is_object($multipleOutputTypeStandardReturItem) ? get_class($multipleOutputTypeStandardReturItem) : sprintf('%s(%s)', gettype($multipleOutputTypeStandardReturItem), var_export($multipleOutputTypeStandardReturItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The StandardRetur property can only contain items of type \ItkDev\Serviceplatformen\SF1500\Myndighed\StructType\StandardReturType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setStandardRetur method
     * This method is willingly generated in order to preserve the one-line inline validation within the setStandardRetur method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateStandardReturForChoiceConstraintFromSetStandardRetur($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'UnikRetur',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property StandardRetur can\'t be set as the property %s is already set. Only one property must be set among these properties: StandardRetur, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set StandardRetur value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @throws InvalidArgumentException
     * @param \ItkDev\Serviceplatformen\SF1500\Myndighed\StructType\StandardReturType[] $standardRetur
     * @return \ItkDev\Serviceplatformen\SF1500\Myndighed\StructType\MultipleOutputType
     */
    public function setStandardRetur(?array $standardRetur = null): self
    {
        // validation for constraint: array
        if ('' !== ($standardReturArrayErrorMessage = self::validateStandardReturForArrayConstraintFromSetStandardRetur($standardRetur))) {
            throw new InvalidArgumentException($standardReturArrayErrorMessage, __LINE__);
        }
        // validation for constraint: choice(UnikRetur, StandardRetur)
        if ('' !== ($standardReturChoiceErrorMessage = self::validateStandardReturForChoiceConstraintFromSetStandardRetur($standardRetur))) {
            throw new InvalidArgumentException($standardReturChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($standardRetur) && count($standardRetur) > 1) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 1', count($standardRetur)), __LINE__);
        }
        if (is_null($standardRetur) || (is_array($standardRetur) && empty($standardRetur))) {
            unset($this->StandardRetur);
        } else {
            $this->StandardRetur = $standardRetur;
        }
        
        return $this;
    }
    /**
     * This method is responsible for validating the value(s) passed to the addToStandardRetur method
     * This method is willingly generated in order to preserve the one-line inline validation within the addToStandardRetur method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateItemForChoiceConstraintFromAddToStandardRetur($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'UnikRetur',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property StandardRetur can\'t be set as the property %s is already set. Only one property must be set among these properties: StandardRetur, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Add item to StandardRetur value
     * @throws InvalidArgumentException
     * @param \ItkDev\Serviceplatformen\SF1500\Myndighed\StructType\StandardReturType $item
     * @return \ItkDev\Serviceplatformen\SF1500\Myndighed\StructType\MultipleOutputType
     */
    public function addToStandardRetur(\ItkDev\Serviceplatformen\SF1500\Myndighed\StructType\StandardReturType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \ItkDev\Serviceplatformen\SF1500\Myndighed\StructType\StandardReturType) {
            throw new InvalidArgumentException(sprintf('The StandardRetur property can only contain items of type \ItkDev\Serviceplatformen\SF1500\Myndighed\StructType\StandardReturType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: choice(UnikRetur, StandardRetur)
        if ('' !== ($itemChoiceErrorMessage = self::validateItemForChoiceConstraintFromAddToStandardRetur($item))) {
            throw new InvalidArgumentException($itemChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($this->StandardRetur) && count($this->StandardRetur) >= 1) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 1', count($this->StandardRetur)), __LINE__);
        }
        $this->StandardRetur[] = $item;
        
        return $this;
    }
}
