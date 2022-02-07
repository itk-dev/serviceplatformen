<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF1600\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BilagType StructType
 * @subpackage Structs
 */
class BilagType extends AbstractStructBase
{
    /**
     * The BilagNavn
     * Meta information extracted from the WSDL
     * - base: string
     * - maxLength: 300
     * - ref: fjernprint:BilagNavn
     * @var string|null
     */
    protected ?string $BilagNavn = null;
    /**
     * The FilformatNavn
     * Meta information extracted from the WSDL
     * - base: string
     * - maxLength: 10
     * - ref: dkal:FilformatNavn
     * @var string|null
     */
    protected ?string $FilformatNavn = null;
    /**
     * The BilagSorteringsIndeksIdentifikator
     * Meta information extracted from the WSDL
     * - ref: fjernprint:BilagSorteringsIndeksIdentifikator
     * @var int|null
     */
    protected ?int $BilagSorteringsIndeksIdentifikator = null;
    /**
     * The BilagIdentifikator
     * Meta information extracted from the WSDL
     * - base: string
     * - choice: BilagIdentifikator | VedhaeftningIndholdData
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxLength: 10
     * - ref: dkal:BilagIdentifikator
     * @var string|null
     */
    protected ?string $BilagIdentifikator = null;
    /**
     * The VedhaeftningIndholdData
     * Meta information extracted from the WSDL
     * - choice: BilagIdentifikator | VedhaeftningIndholdData
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - ref: dkal:VedhaeftningIndholdData
     * @var string|null
     */
    protected ?string $VedhaeftningIndholdData = null;
    /**
     * The VedhaeftningIndholdURLreference
     * Meta information extracted from the WSDL
     * - ref: dkal:VedhaeftningIndholdURLreference
     * @var string|null
     */
    protected ?string $VedhaeftningIndholdURLreference = null;
    /**
     * The VedhaeftSomIndholdDataIndikator
     * Meta information extracted from the WSDL
     * - ref: fjernprint:VedhaeftSomIndholdDataIndikator
     * @var bool|null
     */
    protected ?bool $VedhaeftSomIndholdDataIndikator = null;
    /**
     * Constructor method for BilagType
     * @uses BilagType::setBilagNavn()
     * @uses BilagType::setFilformatNavn()
     * @uses BilagType::setBilagSorteringsIndeksIdentifikator()
     * @uses BilagType::setBilagIdentifikator()
     * @uses BilagType::setVedhaeftningIndholdData()
     * @uses BilagType::setVedhaeftningIndholdURLreference()
     * @uses BilagType::setVedhaeftSomIndholdDataIndikator()
     * @param string $bilagNavn
     * @param string $filformatNavn
     * @param int $bilagSorteringsIndeksIdentifikator
     * @param string $bilagIdentifikator
     * @param string $vedhaeftningIndholdData
     * @param string $vedhaeftningIndholdURLreference
     * @param bool $vedhaeftSomIndholdDataIndikator
     */
    public function __construct(?string $bilagNavn = null, ?string $filformatNavn = null, ?int $bilagSorteringsIndeksIdentifikator = null, ?string $bilagIdentifikator = null, ?string $vedhaeftningIndholdData = null, ?string $vedhaeftningIndholdURLreference = null, ?bool $vedhaeftSomIndholdDataIndikator = null)
    {
        $this
            ->setBilagNavn($bilagNavn)
            ->setFilformatNavn($filformatNavn)
            ->setBilagSorteringsIndeksIdentifikator($bilagSorteringsIndeksIdentifikator)
            ->setBilagIdentifikator($bilagIdentifikator)
            ->setVedhaeftningIndholdData($vedhaeftningIndholdData)
            ->setVedhaeftningIndholdURLreference($vedhaeftningIndholdURLreference)
            ->setVedhaeftSomIndholdDataIndikator($vedhaeftSomIndholdDataIndikator);
    }
    /**
     * Get BilagNavn value
     * @return string|null
     */
    public function getBilagNavn(): ?string
    {
        return $this->BilagNavn;
    }
    /**
     * Set BilagNavn value
     * @param string $bilagNavn
     * @return \ItkDev\Serviceplatformen\SF1600\StructType\BilagType
     */
    public function setBilagNavn(?string $bilagNavn = null): self
    {
        // validation for constraint: string
        if (!is_null($bilagNavn) && !is_string($bilagNavn)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bilagNavn, true), gettype($bilagNavn)), __LINE__);
        }
        // validation for constraint: maxLength(300)
        if (!is_null($bilagNavn) && mb_strlen((string) $bilagNavn) > 300) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 300', mb_strlen((string) $bilagNavn)), __LINE__);
        }
        $this->BilagNavn = $bilagNavn;
        
        return $this;
    }
    /**
     * Get FilformatNavn value
     * @return string|null
     */
    public function getFilformatNavn(): ?string
    {
        return $this->FilformatNavn;
    }
    /**
     * Set FilformatNavn value
     * @param string $filformatNavn
     * @return \ItkDev\Serviceplatformen\SF1600\StructType\BilagType
     */
    public function setFilformatNavn(?string $filformatNavn = null): self
    {
        // validation for constraint: string
        if (!is_null($filformatNavn) && !is_string($filformatNavn)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($filformatNavn, true), gettype($filformatNavn)), __LINE__);
        }
        // validation for constraint: maxLength(10)
        if (!is_null($filformatNavn) && mb_strlen((string) $filformatNavn) > 10) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 10', mb_strlen((string) $filformatNavn)), __LINE__);
        }
        $this->FilformatNavn = $filformatNavn;
        
        return $this;
    }
    /**
     * Get BilagSorteringsIndeksIdentifikator value
     * @return int|null
     */
    public function getBilagSorteringsIndeksIdentifikator(): ?int
    {
        return $this->BilagSorteringsIndeksIdentifikator;
    }
    /**
     * Set BilagSorteringsIndeksIdentifikator value
     * @param int $bilagSorteringsIndeksIdentifikator
     * @return \ItkDev\Serviceplatformen\SF1600\StructType\BilagType
     */
    public function setBilagSorteringsIndeksIdentifikator(?int $bilagSorteringsIndeksIdentifikator = null): self
    {
        // validation for constraint: int
        if (!is_null($bilagSorteringsIndeksIdentifikator) && !(is_int($bilagSorteringsIndeksIdentifikator) || ctype_digit($bilagSorteringsIndeksIdentifikator))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($bilagSorteringsIndeksIdentifikator, true), gettype($bilagSorteringsIndeksIdentifikator)), __LINE__);
        }
        $this->BilagSorteringsIndeksIdentifikator = $bilagSorteringsIndeksIdentifikator;
        
        return $this;
    }
    /**
     * Get BilagIdentifikator value
     * @return string|null
     */
    public function getBilagIdentifikator(): ?string
    {
        return isset($this->BilagIdentifikator) ? $this->BilagIdentifikator : null;
    }
    /**
     * This method is responsible for validating the value passed to the setBilagIdentifikator method
     * This method is willingly generated in order to preserve the one-line inline validation within the setBilagIdentifikator method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateBilagIdentifikatorForChoiceConstraintsFromSetBilagIdentifikator($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'VedhaeftningIndholdData',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property BilagIdentifikator can\'t be set as the property %s is already set. Only one property must be set among these properties: BilagIdentifikator, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set BilagIdentifikator value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param string $bilagIdentifikator
     * @return \ItkDev\Serviceplatformen\SF1600\StructType\BilagType
     */
    public function setBilagIdentifikator(?string $bilagIdentifikator = null): self
    {
        // validation for constraint: string
        if (!is_null($bilagIdentifikator) && !is_string($bilagIdentifikator)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bilagIdentifikator, true), gettype($bilagIdentifikator)), __LINE__);
        }
        // validation for constraint: choice(BilagIdentifikator, VedhaeftningIndholdData)
        if ('' !== ($bilagIdentifikatorChoiceErrorMessage = self::validateBilagIdentifikatorForChoiceConstraintsFromSetBilagIdentifikator($bilagIdentifikator))) {
            throw new InvalidArgumentException($bilagIdentifikatorChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: maxLength(10)
        if (!is_null($bilagIdentifikator) && mb_strlen((string) $bilagIdentifikator) > 10) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 10', mb_strlen((string) $bilagIdentifikator)), __LINE__);
        }
        if (is_null($bilagIdentifikator) || (is_array($bilagIdentifikator) && empty($bilagIdentifikator))) {
            unset($this->BilagIdentifikator);
        } else {
            $this->BilagIdentifikator = $bilagIdentifikator;
        }
        
        return $this;
    }
    /**
     * Get VedhaeftningIndholdData value
     * @return string|null
     */
    public function getVedhaeftningIndholdData(): ?string
    {
        return isset($this->VedhaeftningIndholdData) ? $this->VedhaeftningIndholdData : null;
    }
    /**
     * This method is responsible for validating the value passed to the setVedhaeftningIndholdData method
     * This method is willingly generated in order to preserve the one-line inline validation within the setVedhaeftningIndholdData method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateVedhaeftningIndholdDataForChoiceConstraintsFromSetVedhaeftningIndholdData($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'BilagIdentifikator',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property VedhaeftningIndholdData can\'t be set as the property %s is already set. Only one property must be set among these properties: VedhaeftningIndholdData, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set VedhaeftningIndholdData value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param string $vedhaeftningIndholdData
     * @return \ItkDev\Serviceplatformen\SF1600\StructType\BilagType
     */
    public function setVedhaeftningIndholdData(?string $vedhaeftningIndholdData = null): self
    {
        // validation for constraint: string
        if (!is_null($vedhaeftningIndholdData) && !is_string($vedhaeftningIndholdData)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($vedhaeftningIndholdData, true), gettype($vedhaeftningIndholdData)), __LINE__);
        }
        // validation for constraint: choice(BilagIdentifikator, VedhaeftningIndholdData)
        if ('' !== ($vedhaeftningIndholdDataChoiceErrorMessage = self::validateVedhaeftningIndholdDataForChoiceConstraintsFromSetVedhaeftningIndholdData($vedhaeftningIndholdData))) {
            throw new InvalidArgumentException($vedhaeftningIndholdDataChoiceErrorMessage, __LINE__);
        }
        if (is_null($vedhaeftningIndholdData) || (is_array($vedhaeftningIndholdData) && empty($vedhaeftningIndholdData))) {
            unset($this->VedhaeftningIndholdData);
        } else {
            $this->VedhaeftningIndholdData = $vedhaeftningIndholdData;
        }
        
        return $this;
    }
    /**
     * Get VedhaeftningIndholdURLreference value
     * @return string|null
     */
    public function getVedhaeftningIndholdURLreference(): ?string
    {
        return $this->VedhaeftningIndholdURLreference;
    }
    /**
     * Set VedhaeftningIndholdURLreference value
     * @param string $vedhaeftningIndholdURLreference
     * @return \ItkDev\Serviceplatformen\SF1600\StructType\BilagType
     */
    public function setVedhaeftningIndholdURLreference(?string $vedhaeftningIndholdURLreference = null): self
    {
        // validation for constraint: string
        if (!is_null($vedhaeftningIndholdURLreference) && !is_string($vedhaeftningIndholdURLreference)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($vedhaeftningIndholdURLreference, true), gettype($vedhaeftningIndholdURLreference)), __LINE__);
        }
        $this->VedhaeftningIndholdURLreference = $vedhaeftningIndholdURLreference;
        
        return $this;
    }
    /**
     * Get VedhaeftSomIndholdDataIndikator value
     * @return bool|null
     */
    public function getVedhaeftSomIndholdDataIndikator(): ?bool
    {
        return $this->VedhaeftSomIndholdDataIndikator;
    }
    /**
     * Set VedhaeftSomIndholdDataIndikator value
     * @param bool $vedhaeftSomIndholdDataIndikator
     * @return \ItkDev\Serviceplatformen\SF1600\StructType\BilagType
     */
    public function setVedhaeftSomIndholdDataIndikator(?bool $vedhaeftSomIndholdDataIndikator = null): self
    {
        // validation for constraint: boolean
        if (!is_null($vedhaeftSomIndholdDataIndikator) && !is_bool($vedhaeftSomIndholdDataIndikator)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($vedhaeftSomIndholdDataIndikator, true), gettype($vedhaeftSomIndholdDataIndikator)), __LINE__);
        }
        $this->VedhaeftSomIndholdDataIndikator = $vedhaeftSomIndholdDataIndikator;
        
        return $this;
    }
}
