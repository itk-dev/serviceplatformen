<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AnonymiserInputType StructType
 * @subpackage Structs
 */
class AnonymiserInputType extends AbstractStructBase
{
    /**
     * The PersonUUID
     * Meta information extracted from the WSDL
     * - base: string | xsd:string
     * - choice: PersonUUID | PersonCPR
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - minLength: 1
     * - pattern: [a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}
     * @var string|null
     */
    protected ?string $PersonUUID = null;
    /**
     * The PersonCPR
     * Meta information extracted from the WSDL
     * - base: string
     * - choice: PersonUUID | PersonCPR
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - pattern: [0-9]{10}
     * @var string|null
     */
    protected ?string $PersonCPR = null;
    /**
     * Constructor method for AnonymiserInputType
     * @uses AnonymiserInputType::setPersonUUID()
     * @uses AnonymiserInputType::setPersonCPR()
     * @param string $personUUID
     * @param string $personCPR
     */
    public function __construct(?string $personUUID = null, ?string $personCPR = null)
    {
        $this
            ->setPersonUUID($personUUID)
            ->setPersonCPR($personCPR);
    }
    /**
     * Get PersonUUID value
     * @return string|null
     */
    public function getPersonUUID(): ?string
    {
        return $this->PersonUUID ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setPersonUUID method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPersonUUID method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validatePersonUUIDForChoiceConstraintFromSetPersonUUID($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'PersonCPR',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property PersonUUID can\'t be set as the property %s is already set. Only one property must be set among these properties: PersonUUID, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set PersonUUID value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param string $personUUID
     * @return \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\AnonymiserInputType
     */
    public function setPersonUUID(?string $personUUID = null): self
    {
        // validation for constraint: string
        if (!is_null($personUUID) && !is_string($personUUID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($personUUID, true), gettype($personUUID)), __LINE__);
        }
        // validation for constraint: choice(PersonUUID, PersonCPR)
        if ('' !== ($personUUIDChoiceErrorMessage = self::validatePersonUUIDForChoiceConstraintFromSetPersonUUID($personUUID))) {
            throw new InvalidArgumentException($personUUIDChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($personUUID) && mb_strlen((string) $personUUID) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $personUUID)), __LINE__);
        }
        // validation for constraint: pattern([a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12})
        if (!is_null($personUUID) && !preg_match('/[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/', $personUUID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/', var_export($personUUID, true)), __LINE__);
        }
        if (is_null($personUUID) || (is_array($personUUID) && empty($personUUID))) {
            unset($this->PersonUUID);
        } else {
            $this->PersonUUID = $personUUID;
        }
        
        return $this;
    }
    /**
     * Get PersonCPR value
     * @return string|null
     */
    public function getPersonCPR(): ?string
    {
        return $this->PersonCPR ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setPersonCPR method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPersonCPR method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validatePersonCPRForChoiceConstraintFromSetPersonCPR($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'PersonUUID',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property PersonCPR can\'t be set as the property %s is already set. Only one property must be set among these properties: PersonCPR, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set PersonCPR value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param string $personCPR
     * @return \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\AnonymiserInputType
     */
    public function setPersonCPR(?string $personCPR = null): self
    {
        // validation for constraint: string
        if (!is_null($personCPR) && !is_string($personCPR)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($personCPR, true), gettype($personCPR)), __LINE__);
        }
        // validation for constraint: choice(PersonUUID, PersonCPR)
        if ('' !== ($personCPRChoiceErrorMessage = self::validatePersonCPRForChoiceConstraintFromSetPersonCPR($personCPR))) {
            throw new InvalidArgumentException($personCPRChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: pattern([0-9]{10})
        if (!is_null($personCPR) && !preg_match('/[0-9]{10}/', $personCPR)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[0-9]{10}/', var_export($personCPR, true)), __LINE__);
        }
        if (is_null($personCPR) || (is_array($personCPR) && empty($personCPR))) {
            unset($this->PersonCPR);
        } else {
            $this->PersonCPR = $personCPR;
        }
        
        return $this;
    }
}
