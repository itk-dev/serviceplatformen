<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF1500\ItSystem\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TidspunktType StructType
 * Meta information extracted from the WSDL
 * - definition: urn:oio:sagdok:tidspunkt:ADD:2.0.0
 * @subpackage Structs
 */
class TidspunktType extends AbstractStructBase
{
    /**
     * The TidsstempelDatoTid
     * Meta information extracted from the WSDL
     * - choice: TidsstempelDatoTid | GraenseIndikator
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - content: tidsstempel
     * - ref: sd:TidsstempelDatoTid
     * @var string|null
     */
    protected ?string $TidsstempelDatoTid = null;
    /**
     * The GraenseIndikator
     * Meta information extracted from the WSDL
     * - choice: TidsstempelDatoTid | GraenseIndikator
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - content: graense
     * - ref: sd:GraenseIndikator
     * @var bool|null
     */
    protected ?bool $GraenseIndikator = null;
    /**
     * Constructor method for TidspunktType
     * @uses TidspunktType::setTidsstempelDatoTid()
     * @uses TidspunktType::setGraenseIndikator()
     * @param string $tidsstempelDatoTid
     * @param bool $graenseIndikator
     */
    public function __construct(?string $tidsstempelDatoTid = null, ?bool $graenseIndikator = null)
    {
        $this
            ->setTidsstempelDatoTid($tidsstempelDatoTid)
            ->setGraenseIndikator($graenseIndikator);
    }
    /**
     * Get TidsstempelDatoTid value
     * @return string|null
     */
    public function getTidsstempelDatoTid(): ?string
    {
        return $this->TidsstempelDatoTid ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setTidsstempelDatoTid method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTidsstempelDatoTid method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateTidsstempelDatoTidForChoiceConstraintFromSetTidsstempelDatoTid($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'GraenseIndikator',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property TidsstempelDatoTid can\'t be set as the property %s is already set. Only one property must be set among these properties: TidsstempelDatoTid, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set TidsstempelDatoTid value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param string $tidsstempelDatoTid
     * @return \ItkDev\Serviceplatformen\SF1500\ItSystem\StructType\TidspunktType
     */
    public function setTidsstempelDatoTid(?string $tidsstempelDatoTid = null): self
    {
        // validation for constraint: string
        if (!is_null($tidsstempelDatoTid) && !is_string($tidsstempelDatoTid)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tidsstempelDatoTid, true), gettype($tidsstempelDatoTid)), __LINE__);
        }
        // validation for constraint: choice(TidsstempelDatoTid, GraenseIndikator)
        if ('' !== ($tidsstempelDatoTidChoiceErrorMessage = self::validateTidsstempelDatoTidForChoiceConstraintFromSetTidsstempelDatoTid($tidsstempelDatoTid))) {
            throw new InvalidArgumentException($tidsstempelDatoTidChoiceErrorMessage, __LINE__);
        }
        if (is_null($tidsstempelDatoTid) || (is_array($tidsstempelDatoTid) && empty($tidsstempelDatoTid))) {
            unset($this->TidsstempelDatoTid);
        } else {
            $this->TidsstempelDatoTid = $tidsstempelDatoTid;
        }
        
        return $this;
    }
    /**
     * Get GraenseIndikator value
     * @return bool|null
     */
    public function getGraenseIndikator(): ?bool
    {
        return $this->GraenseIndikator ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setGraenseIndikator method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGraenseIndikator method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateGraenseIndikatorForChoiceConstraintFromSetGraenseIndikator($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'TidsstempelDatoTid',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property GraenseIndikator can\'t be set as the property %s is already set. Only one property must be set among these properties: GraenseIndikator, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set GraenseIndikator value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param bool $graenseIndikator
     * @return \ItkDev\Serviceplatformen\SF1500\ItSystem\StructType\TidspunktType
     */
    public function setGraenseIndikator(?bool $graenseIndikator = null): self
    {
        // validation for constraint: boolean
        if (!is_null($graenseIndikator) && !is_bool($graenseIndikator)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($graenseIndikator, true), gettype($graenseIndikator)), __LINE__);
        }
        // validation for constraint: choice(TidsstempelDatoTid, GraenseIndikator)
        if ('' !== ($graenseIndikatorChoiceErrorMessage = self::validateGraenseIndikatorForChoiceConstraintFromSetGraenseIndikator($graenseIndikator))) {
            throw new InvalidArgumentException($graenseIndikatorChoiceErrorMessage, __LINE__);
        }
        if (is_null($graenseIndikator) || (is_array($graenseIndikator) && empty($graenseIndikator))) {
            unset($this->GraenseIndikator);
        } else {
            $this->GraenseIndikator = $graenseIndikator;
        }
        
        return $this;
    }
}
