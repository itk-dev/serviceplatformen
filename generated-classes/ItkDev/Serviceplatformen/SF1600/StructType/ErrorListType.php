<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF1600\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ErrorListType StructType
 * @subpackage Structs
 */
class ErrorListType extends AbstractStructBase
{
    /**
     * The Error
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var \ItkDev\Serviceplatformen\SF1600\StructType\ErrorType[]
     */
    protected array $Error;
    /**
     * Constructor method for ErrorListType
     * @uses ErrorListType::setError()
     * @param \ItkDev\Serviceplatformen\SF1600\StructType\ErrorType[] $error
     */
    public function __construct(array $error)
    {
        $this
            ->setError($error);
    }
    /**
     * Get Error value
     * @return \ItkDev\Serviceplatformen\SF1600\StructType\ErrorType[]
     */
    public function getError(): array
    {
        return $this->Error;
    }
    /**
     * This method is responsible for validating the values passed to the setError method
     * This method is willingly generated in order to preserve the one-line inline validation within the setError method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateErrorForArrayConstraintsFromSetError(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $errorListTypeErrorItem) {
            // validation for constraint: itemType
            if (!$errorListTypeErrorItem instanceof \ItkDev\Serviceplatformen\SF1600\StructType\ErrorType) {
                $invalidValues[] = is_object($errorListTypeErrorItem) ? get_class($errorListTypeErrorItem) : sprintf('%s(%s)', gettype($errorListTypeErrorItem), var_export($errorListTypeErrorItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Error property can only contain items of type \ItkDev\Serviceplatformen\SF1600\StructType\ErrorType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Error value
     * @throws InvalidArgumentException
     * @param \ItkDev\Serviceplatformen\SF1600\StructType\ErrorType[] $error
     * @return \ItkDev\Serviceplatformen\SF1600\StructType\ErrorListType
     */
    public function setError(array $error): self
    {
        // validation for constraint: array
        if ('' !== ($errorArrayErrorMessage = self::validateErrorForArrayConstraintsFromSetError($error))) {
            throw new InvalidArgumentException($errorArrayErrorMessage, __LINE__);
        }
        $this->Error = $error;
        
        return $this;
    }
    /**
     * Add item to Error value
     * @throws InvalidArgumentException
     * @param \ItkDev\Serviceplatformen\SF1600\StructType\ErrorType $item
     * @return \ItkDev\Serviceplatformen\SF1600\StructType\ErrorListType
     */
    public function addToError(\ItkDev\Serviceplatformen\SF1600\StructType\ErrorType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \ItkDev\Serviceplatformen\SF1600\StructType\ErrorType) {
            throw new InvalidArgumentException(sprintf('The Error property can only contain items of type \ItkDev\Serviceplatformen\SF1600\StructType\ErrorType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Error[] = $item;
        
        return $this;
    }
}
