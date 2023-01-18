<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF1600\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BilagSamlingType StructType
 * @subpackage Structs
 */
class BilagSamlingType extends AbstractStructBase
{
    /**
     * The Bilag
     * Meta information extracted from the WSDL
     * - maxOccurs: 100
     * - ref: fjernprint:Bilag
     * @var \ItkDev\Serviceplatformen\SF1600\StructType\BilagType[]
     */
    protected ?array $Bilag = null;
    /**
     * Constructor method for BilagSamlingType
     * @uses BilagSamlingType::setBilag()
     * @param \ItkDev\Serviceplatformen\SF1600\StructType\BilagType[] $bilag
     */
    public function __construct(?array $bilag = null)
    {
        $this
            ->setBilag($bilag);
    }
    /**
     * Get Bilag value
     * @return \ItkDev\Serviceplatformen\SF1600\StructType\BilagType[]
     */
    public function getBilag(): ?array
    {
        return $this->Bilag;
    }
    /**
     * This method is responsible for validating the values passed to the setBilag method
     * This method is willingly generated in order to preserve the one-line inline validation within the setBilag method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateBilagForArrayConstraintsFromSetBilag(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $bilagSamlingTypeBilagItem) {
            // validation for constraint: itemType
            if (!$bilagSamlingTypeBilagItem instanceof \ItkDev\Serviceplatformen\SF1600\StructType\BilagType) {
                $invalidValues[] = is_object($bilagSamlingTypeBilagItem) ? get_class($bilagSamlingTypeBilagItem) : sprintf('%s(%s)', gettype($bilagSamlingTypeBilagItem), var_export($bilagSamlingTypeBilagItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Bilag property can only contain items of type \ItkDev\Serviceplatformen\SF1600\StructType\BilagType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Bilag value
     * @throws InvalidArgumentException
     * @param \ItkDev\Serviceplatformen\SF1600\StructType\BilagType[] $bilag
     * @return \ItkDev\Serviceplatformen\SF1600\StructType\BilagSamlingType
     */
    public function setBilag(?array $bilag = null): self
    {
        // validation for constraint: array
        if ('' !== ($bilagArrayErrorMessage = self::validateBilagForArrayConstraintsFromSetBilag($bilag))) {
            throw new InvalidArgumentException($bilagArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(100)
        if (is_array($bilag) && count($bilag) > 100) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 100', count($bilag)), __LINE__);
        }
        $this->Bilag = $bilag;
        
        return $this;
    }
    /**
     * Add item to Bilag value
     * @throws InvalidArgumentException
     * @param \ItkDev\Serviceplatformen\SF1600\StructType\BilagType $item
     * @return \ItkDev\Serviceplatformen\SF1600\StructType\BilagSamlingType
     */
    public function addToBilag(\ItkDev\Serviceplatformen\SF1600\StructType\BilagType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \ItkDev\Serviceplatformen\SF1600\StructType\BilagType) {
            throw new InvalidArgumentException(sprintf('The Bilag property can only contain items of type \ItkDev\Serviceplatformen\SF1600\StructType\BilagType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(100)
        if (is_array($this->Bilag) && count($this->Bilag) >= 100) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 100', count($this->Bilag)), __LINE__);
        }
        $this->Bilag[] = $item;
        
        return $this;
    }
}
