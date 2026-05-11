<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF2900\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UUID_URN_Tekst StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class UUID_URN_Tekst extends AbstractStructBase
{
    /**
     * The UUID
     * Meta information extracted from the WSDL
     * - base: string
     * - choice: UUID | URN | Tekst
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - pattern: [a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}
     * @var string|null
     */
    protected ?string $UUID = null;
    /**
     * The URN
     * Meta information extracted from the WSDL
     * - base: string
     * - choice: UUID | URN | Tekst
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - pattern: [uU][rR][nN]:[a-zA-Z0-9][a-zA-Z0-9-]{0,30}[a-zA-Z0-9]:[a-zA-Z0-9\(\)+,\\\-.:=@;$_!*'%/?#]+
     * @var string|null
     */
    protected ?string $URN = null;
    /**
     * The Tekst
     * Meta information extracted from the WSDL
     * - choice: UUID | URN | Tekst
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * @var string|null
     */
    protected ?string $Tekst = null;
    /**
     * Constructor method for UUID_URN_Tekst
     * @uses UUID_URN_Tekst::setUUID()
     * @uses UUID_URN_Tekst::setURN()
     * @uses UUID_URN_Tekst::setTekst()
     * @param string $uUID
     * @param string $uRN
     * @param string $tekst
     */
    public function __construct(?string $uUID = null, ?string $uRN = null, ?string $tekst = null)
    {
        $this
            ->setUUID($uUID)
            ->setURN($uRN)
            ->setTekst($tekst);
    }
    /**
     * Get UUID value
     * @return string|null
     */
    public function getUUID(): ?string
    {
        return $this->UUID ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setUUID method
     * This method is willingly generated in order to preserve the one-line inline validation within the setUUID method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateUUIDForChoiceConstraintFromSetUUID($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'URN',
            'Tekst',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property UUID can\'t be set as the property %s is already set. Only one property must be set among these properties: UUID, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set UUID value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param string $uUID
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\UUID_URN_Tekst
     */
    public function setUUID(?string $uUID = null): self
    {
        // validation for constraint: string
        if (!is_null($uUID) && !is_string($uUID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($uUID, true), gettype($uUID)), __LINE__);
        }
        // validation for constraint: choice(UUID, URN, Tekst)
        if ('' !== ($uUIDChoiceErrorMessage = self::validateUUIDForChoiceConstraintFromSetUUID($uUID))) {
            throw new InvalidArgumentException($uUIDChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: pattern([a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12})
        if (!is_null($uUID) && !preg_match('/[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/', (string) $uUID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/', var_export($uUID, true)), __LINE__);
        }
        if (is_null($uUID) || (is_array($uUID) && empty($uUID))) {
            unset($this->UUID);
        } else {
            $this->UUID = $uUID;
        }
        
        return $this;
    }
    /**
     * Get URN value
     * @return string|null
     */
    public function getURN(): ?string
    {
        return $this->URN ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setURN method
     * This method is willingly generated in order to preserve the one-line inline validation within the setURN method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateURNForChoiceConstraintFromSetURN($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'UUID',
            'Tekst',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property URN can\'t be set as the property %s is already set. Only one property must be set among these properties: URN, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set URN value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param string $uRN
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\UUID_URN_Tekst
     */
    public function setURN(?string $uRN = null): self
    {
        // validation for constraint: string
        if (!is_null($uRN) && !is_string($uRN)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($uRN, true), gettype($uRN)), __LINE__);
        }
        // validation for constraint: choice(UUID, URN, Tekst)
        if ('' !== ($uRNChoiceErrorMessage = self::validateURNForChoiceConstraintFromSetURN($uRN))) {
            throw new InvalidArgumentException($uRNChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: pattern([uU][rR][nN]:[a-zA-Z0-9][a-zA-Z0-9-]{0,30}[a-zA-Z0-9]:[a-zA-Z0-9\(\)+,\\\-.:=@;$_!*'%/?#]+)
        if (!is_null($uRN) && !preg_match('/[uU][rR][nN]:[a-zA-Z0-9][a-zA-Z0-9-]{0,30}[a-zA-Z0-9]:[a-zA-Z0-9\\(\\)+,\\\\\\-.:=@;$_!*\'%\/?#]+/', (string) $uRN)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[uU][rR][nN]:[a-zA-Z0-9][a-zA-Z0-9-]{0,30}[a-zA-Z0-9]:[a-zA-Z0-9\\(\\)+,\\\\\\-.:=@;$_!*\'%\/?#]+/', var_export($uRN, true)), __LINE__);
        }
        if (is_null($uRN) || (is_array($uRN) && empty($uRN))) {
            unset($this->URN);
        } else {
            $this->URN = $uRN;
        }
        
        return $this;
    }
    /**
     * Get Tekst value
     * @return string|null
     */
    public function getTekst(): ?string
    {
        return $this->Tekst ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setTekst method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTekst method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateTekstForChoiceConstraintFromSetTekst($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'UUID',
            'URN',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property Tekst can\'t be set as the property %s is already set. Only one property must be set among these properties: Tekst, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set Tekst value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param string $tekst
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\UUID_URN_Tekst
     */
    public function setTekst(?string $tekst = null): self
    {
        // validation for constraint: string
        if (!is_null($tekst) && !is_string($tekst)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tekst, true), gettype($tekst)), __LINE__);
        }
        // validation for constraint: choice(UUID, URN, Tekst)
        if ('' !== ($tekstChoiceErrorMessage = self::validateTekstForChoiceConstraintFromSetTekst($tekst))) {
            throw new InvalidArgumentException($tekstChoiceErrorMessage, __LINE__);
        }
        if (is_null($tekst) || (is_array($tekst) && empty($tekst))) {
            unset($this->Tekst);
        } else {
            $this->Tekst = $tekst;
        }
        
        return $this;
    }
}
