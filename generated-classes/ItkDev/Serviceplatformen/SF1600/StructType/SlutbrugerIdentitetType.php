<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF1600\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SlutbrugerIdentitetType StructType
 * @subpackage Structs
 */
class SlutbrugerIdentitetType extends AbstractStructBase
{
    /**
     * The CPRnummerIdentifikator
     * Meta information extracted from the WSDL
     * - base: string
     * - choice: CPRnummerIdentifikator | CVRnummerIdentifikator
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - pattern: ((((0[1-9]|1[0-9]|2[0-9]|3[0-1])(01|03|05|07|08|10|12))|((0[1-9]|1[0-9]|2[0-9]|30)(04|06|09|11))|((0[1-9]|1[0-9]|2[0-9])(02)))[0-9]{6})|0000000000
     * - ref: adir:CPRnummerIdentifikator
     * @var string|null
     */
    protected ?string $CPRnummerIdentifikator = null;
    /**
     * The CVRnummerIdentifikator
     * Meta information extracted from the WSDL
     * - base: string
     * - choice: CPRnummerIdentifikator | CVRnummerIdentifikator
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - length: 8
     * - ref: adir:CVRnummerIdentifikator
     * @var string|null
     */
    protected ?string $CVRnummerIdentifikator = null;
    /**
     * Constructor method for SlutbrugerIdentitetType
     * @uses SlutbrugerIdentitetType::setCPRnummerIdentifikator()
     * @uses SlutbrugerIdentitetType::setCVRnummerIdentifikator()
     * @param string $cPRnummerIdentifikator
     * @param string $cVRnummerIdentifikator
     */
    public function __construct(?string $cPRnummerIdentifikator = null, ?string $cVRnummerIdentifikator = null)
    {
        $this
            ->setCPRnummerIdentifikator($cPRnummerIdentifikator)
            ->setCVRnummerIdentifikator($cVRnummerIdentifikator);
    }
    /**
     * Get CPRnummerIdentifikator value
     * @return string|null
     */
    public function getCPRnummerIdentifikator(): ?string
    {
        return isset($this->CPRnummerIdentifikator) ? $this->CPRnummerIdentifikator : null;
    }
    /**
     * This method is responsible for validating the value passed to the setCPRnummerIdentifikator method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCPRnummerIdentifikator method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateCPRnummerIdentifikatorForChoiceConstraintsFromSetCPRnummerIdentifikator($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'CVRnummerIdentifikator',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property CPRnummerIdentifikator can\'t be set as the property %s is already set. Only one property must be set among these properties: CPRnummerIdentifikator, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set CPRnummerIdentifikator value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param string $cPRnummerIdentifikator
     * @return \ItkDev\Serviceplatformen\SF1600\StructType\SlutbrugerIdentitetType
     */
    public function setCPRnummerIdentifikator(?string $cPRnummerIdentifikator = null): self
    {
        // validation for constraint: string
        if (!is_null($cPRnummerIdentifikator) && !is_string($cPRnummerIdentifikator)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cPRnummerIdentifikator, true), gettype($cPRnummerIdentifikator)), __LINE__);
        }
        // validation for constraint: choice(CPRnummerIdentifikator, CVRnummerIdentifikator)
        if ('' !== ($cPRnummerIdentifikatorChoiceErrorMessage = self::validateCPRnummerIdentifikatorForChoiceConstraintsFromSetCPRnummerIdentifikator($cPRnummerIdentifikator))) {
            throw new InvalidArgumentException($cPRnummerIdentifikatorChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: pattern(((((0[1-9]|1[0-9]|2[0-9]|3[0-1])(01|03|05|07|08|10|12))|((0[1-9]|1[0-9]|2[0-9]|30)(04|06|09|11))|((0[1-9]|1[0-9]|2[0-9])(02)))[0-9]{6})|0000000000)
        if (!is_null($cPRnummerIdentifikator) && !preg_match('/((((0[1-9]|1[0-9]|2[0-9]|3[0-1])(01|03|05|07|08|10|12))|((0[1-9]|1[0-9]|2[0-9]|30)(04|06|09|11))|((0[1-9]|1[0-9]|2[0-9])(02)))[0-9]{6})|0000000000/', $cPRnummerIdentifikator)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /((((0[1-9]|1[0-9]|2[0-9]|3[0-1])(01|03|05|07|08|10|12))|((0[1-9]|1[0-9]|2[0-9]|30)(04|06|09|11))|((0[1-9]|1[0-9]|2[0-9])(02)))[0-9]{6})|0000000000/', var_export($cPRnummerIdentifikator, true)), __LINE__);
        }
        if (is_null($cPRnummerIdentifikator) || (is_array($cPRnummerIdentifikator) && empty($cPRnummerIdentifikator))) {
            unset($this->CPRnummerIdentifikator);
        } else {
            $this->CPRnummerIdentifikator = $cPRnummerIdentifikator;
        }
        
        return $this;
    }
    /**
     * Get CVRnummerIdentifikator value
     * @return string|null
     */
    public function getCVRnummerIdentifikator(): ?string
    {
        return isset($this->CVRnummerIdentifikator) ? $this->CVRnummerIdentifikator : null;
    }
    /**
     * This method is responsible for validating the value passed to the setCVRnummerIdentifikator method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCVRnummerIdentifikator method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateCVRnummerIdentifikatorForChoiceConstraintsFromSetCVRnummerIdentifikator($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'CPRnummerIdentifikator',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property CVRnummerIdentifikator can\'t be set as the property %s is already set. Only one property must be set among these properties: CVRnummerIdentifikator, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set CVRnummerIdentifikator value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param string $cVRnummerIdentifikator
     * @return \ItkDev\Serviceplatformen\SF1600\StructType\SlutbrugerIdentitetType
     */
    public function setCVRnummerIdentifikator(?string $cVRnummerIdentifikator = null): self
    {
        // validation for constraint: string
        if (!is_null($cVRnummerIdentifikator) && !is_string($cVRnummerIdentifikator)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cVRnummerIdentifikator, true), gettype($cVRnummerIdentifikator)), __LINE__);
        }
        // validation for constraint: choice(CPRnummerIdentifikator, CVRnummerIdentifikator)
        if ('' !== ($cVRnummerIdentifikatorChoiceErrorMessage = self::validateCVRnummerIdentifikatorForChoiceConstraintsFromSetCVRnummerIdentifikator($cVRnummerIdentifikator))) {
            throw new InvalidArgumentException($cVRnummerIdentifikatorChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: length(8)
        if (!is_null($cVRnummerIdentifikator) && mb_strlen((string) $cVRnummerIdentifikator) !== 8) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 8', mb_strlen((string) $cVRnummerIdentifikator)), __LINE__);
        }
        if (is_null($cVRnummerIdentifikator) || (is_array($cVRnummerIdentifikator) && empty($cVRnummerIdentifikator))) {
            unset($this->CVRnummerIdentifikator);
        } else {
            $this->CVRnummerIdentifikator = $cVRnummerIdentifikator;
        }
        
        return $this;
    }
}
