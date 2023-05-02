<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF1500\Person\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UnikIdType StructType
 * Meta information extracted from the WSDL
 * - definition: urn:oio:sagdok:unikid:ADD:1.0.0
 * @subpackage Structs
 */
class UnikIdType extends AbstractStructBase
{
    /**
     * The UUIDIdentifikator
     * Meta information extracted from the WSDL
     * - base: string
     * - choice: UUIDIdentifikator | URNIdentifikator
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - content: uuid
     * - definition: urn:oio:sagdok:uuid:BDD:1.0.0
     * - pattern: [a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}
     * - ref: sd:UUIDIdentifikator
     * @var string|null
     */
    protected ?string $UUIDIdentifikator = null;
    /**
     * The URNIdentifikator
     * Meta information extracted from the WSDL
     * - base: string
     * - choice: UUIDIdentifikator | URNIdentifikator
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - content: urn
     * - definition: urn:oio:sagdok:urn:BDD:1.0.0
     * - maxLength: 255
     * - ref: sd:URNIdentifikator
     * @var string|null
     */
    protected ?string $URNIdentifikator = null;
    /**
     * Constructor method for UnikIdType
     * @uses UnikIdType::setUUIDIdentifikator()
     * @uses UnikIdType::setURNIdentifikator()
     * @param string $uUIDIdentifikator
     * @param string $uRNIdentifikator
     */
    public function __construct(?string $uUIDIdentifikator = null, ?string $uRNIdentifikator = null)
    {
        $this
            ->setUUIDIdentifikator($uUIDIdentifikator)
            ->setURNIdentifikator($uRNIdentifikator);
    }
    /**
     * Get UUIDIdentifikator value
     * @return string|null
     */
    public function getUUIDIdentifikator(): ?string
    {
        return $this->UUIDIdentifikator ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setUUIDIdentifikator method
     * This method is willingly generated in order to preserve the one-line inline validation within the setUUIDIdentifikator method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateUUIDIdentifikatorForChoiceConstraintFromSetUUIDIdentifikator($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'URNIdentifikator',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property UUIDIdentifikator can\'t be set as the property %s is already set. Only one property must be set among these properties: UUIDIdentifikator, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set UUIDIdentifikator value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param string $uUIDIdentifikator
     * @return \ItkDev\Serviceplatformen\SF1500\Person\StructType\UnikIdType
     */
    public function setUUIDIdentifikator(?string $uUIDIdentifikator = null): self
    {
        // validation for constraint: string
        if (!is_null($uUIDIdentifikator) && !is_string($uUIDIdentifikator)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($uUIDIdentifikator, true), gettype($uUIDIdentifikator)), __LINE__);
        }
        // validation for constraint: choice(UUIDIdentifikator, URNIdentifikator)
        if ('' !== ($uUIDIdentifikatorChoiceErrorMessage = self::validateUUIDIdentifikatorForChoiceConstraintFromSetUUIDIdentifikator($uUIDIdentifikator))) {
            throw new InvalidArgumentException($uUIDIdentifikatorChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: pattern([a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12})
        if (!is_null($uUIDIdentifikator) && !preg_match('/[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/', $uUIDIdentifikator)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/', var_export($uUIDIdentifikator, true)), __LINE__);
        }
        if (is_null($uUIDIdentifikator) || (is_array($uUIDIdentifikator) && empty($uUIDIdentifikator))) {
            unset($this->UUIDIdentifikator);
        } else {
            $this->UUIDIdentifikator = $uUIDIdentifikator;
        }
        
        return $this;
    }
    /**
     * Get URNIdentifikator value
     * @return string|null
     */
    public function getURNIdentifikator(): ?string
    {
        return $this->URNIdentifikator ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setURNIdentifikator method
     * This method is willingly generated in order to preserve the one-line inline validation within the setURNIdentifikator method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateURNIdentifikatorForChoiceConstraintFromSetURNIdentifikator($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'UUIDIdentifikator',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property URNIdentifikator can\'t be set as the property %s is already set. Only one property must be set among these properties: URNIdentifikator, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set URNIdentifikator value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param string $uRNIdentifikator
     * @return \ItkDev\Serviceplatformen\SF1500\Person\StructType\UnikIdType
     */
    public function setURNIdentifikator(?string $uRNIdentifikator = null): self
    {
        // validation for constraint: string
        if (!is_null($uRNIdentifikator) && !is_string($uRNIdentifikator)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($uRNIdentifikator, true), gettype($uRNIdentifikator)), __LINE__);
        }
        // validation for constraint: choice(UUIDIdentifikator, URNIdentifikator)
        if ('' !== ($uRNIdentifikatorChoiceErrorMessage = self::validateURNIdentifikatorForChoiceConstraintFromSetURNIdentifikator($uRNIdentifikator))) {
            throw new InvalidArgumentException($uRNIdentifikatorChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: maxLength(255)
        if (!is_null($uRNIdentifikator) && mb_strlen((string) $uRNIdentifikator) > 255) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 255', mb_strlen((string) $uRNIdentifikator)), __LINE__);
        }
        if (is_null($uRNIdentifikator) || (is_array($uRNIdentifikator) && empty($uRNIdentifikator))) {
            unset($this->URNIdentifikator);
        } else {
            $this->URNIdentifikator = $uRNIdentifikator;
        }
        
        return $this;
    }
}
