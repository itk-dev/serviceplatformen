<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF1600\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TransaktionsParametreIType StructType
 * @subpackage Structs
 */
class TransaktionsParametreIType extends AbstractStructBase
{
    /**
     * The TransaktionsDatoTid
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: fjernprint:TransaktionsDatoTid
     * @var string|null
     */
    protected ?string $TransaktionsDatoTid = null;
    /**
     * The MasseForsendelseIdentifikator
     * Meta information extracted from the WSDL
     * - base: string
     * - maxLength: 38
     * - maxOccurs: 1
     * - minLength: 1
     * - minOccurs: 0
     * - ref: fjernprint:MasseForsendelseIdentifikator
     * @var string|null
     */
    protected ?string $MasseForsendelseIdentifikator = null;
    /**
     * The KvitteringsTypeKode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: fjernprint:KvitteringsTypeKode
     * @var string|null
     */
    protected ?string $KvitteringsTypeKode = null;
    /**
     * The KvitteringsEmail
     * Meta information extracted from the WSDL
     * - base: string
     * - maxOccurs: 1
     * - minOccurs: 0
     * - pattern: ([^>\(\)\[\]\\,;:@\s]{0,191}@[^>\(\)\[\]\\,;:@\s]{1,64})
     * - ref: fjernprint:KvitteringsEmail
     * @var string|null
     */
    protected ?string $KvitteringsEmail = null;
    /**
     * Constructor method for TransaktionsParametreIType
     * @uses TransaktionsParametreIType::setTransaktionsDatoTid()
     * @uses TransaktionsParametreIType::setMasseForsendelseIdentifikator()
     * @uses TransaktionsParametreIType::setKvitteringsTypeKode()
     * @uses TransaktionsParametreIType::setKvitteringsEmail()
     * @param string $transaktionsDatoTid
     * @param string $masseForsendelseIdentifikator
     * @param string $kvitteringsTypeKode
     * @param string $kvitteringsEmail
     */
    public function __construct(?string $transaktionsDatoTid = null, ?string $masseForsendelseIdentifikator = null, ?string $kvitteringsTypeKode = null, ?string $kvitteringsEmail = null)
    {
        $this
            ->setTransaktionsDatoTid($transaktionsDatoTid)
            ->setMasseForsendelseIdentifikator($masseForsendelseIdentifikator)
            ->setKvitteringsTypeKode($kvitteringsTypeKode)
            ->setKvitteringsEmail($kvitteringsEmail);
    }
    /**
     * Get TransaktionsDatoTid value
     * @return string|null
     */
    public function getTransaktionsDatoTid(): ?string
    {
        return $this->TransaktionsDatoTid;
    }
    /**
     * Set TransaktionsDatoTid value
     * @param string $transaktionsDatoTid
     * @return \ItkDev\Serviceplatformen\SF1600\StructType\TransaktionsParametreIType
     */
    public function setTransaktionsDatoTid(?string $transaktionsDatoTid = null): self
    {
        // validation for constraint: string
        if (!is_null($transaktionsDatoTid) && !is_string($transaktionsDatoTid)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($transaktionsDatoTid, true), gettype($transaktionsDatoTid)), __LINE__);
        }
        $this->TransaktionsDatoTid = $transaktionsDatoTid;
        
        return $this;
    }
    /**
     * Get MasseForsendelseIdentifikator value
     * @return string|null
     */
    public function getMasseForsendelseIdentifikator(): ?string
    {
        return $this->MasseForsendelseIdentifikator;
    }
    /**
     * Set MasseForsendelseIdentifikator value
     * @param string $masseForsendelseIdentifikator
     * @return \ItkDev\Serviceplatformen\SF1600\StructType\TransaktionsParametreIType
     */
    public function setMasseForsendelseIdentifikator(?string $masseForsendelseIdentifikator = null): self
    {
        // validation for constraint: string
        if (!is_null($masseForsendelseIdentifikator) && !is_string($masseForsendelseIdentifikator)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($masseForsendelseIdentifikator, true), gettype($masseForsendelseIdentifikator)), __LINE__);
        }
        // validation for constraint: maxLength(38)
        if (!is_null($masseForsendelseIdentifikator) && mb_strlen((string) $masseForsendelseIdentifikator) > 38) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 38', mb_strlen((string) $masseForsendelseIdentifikator)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($masseForsendelseIdentifikator) && mb_strlen((string) $masseForsendelseIdentifikator) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $masseForsendelseIdentifikator)), __LINE__);
        }
        $this->MasseForsendelseIdentifikator = $masseForsendelseIdentifikator;
        
        return $this;
    }
    /**
     * Get KvitteringsTypeKode value
     * @return string|null
     */
    public function getKvitteringsTypeKode(): ?string
    {
        return $this->KvitteringsTypeKode;
    }
    /**
     * Set KvitteringsTypeKode value
     * @uses \ItkDev\Serviceplatformen\SF1600\EnumType\KvitteringsTypeKodeType::valueIsValid()
     * @uses \ItkDev\Serviceplatformen\SF1600\EnumType\KvitteringsTypeKodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $kvitteringsTypeKode
     * @return \ItkDev\Serviceplatformen\SF1600\StructType\TransaktionsParametreIType
     */
    public function setKvitteringsTypeKode(?string $kvitteringsTypeKode = null): self
    {
        // validation for constraint: enumeration
        if (!\ItkDev\Serviceplatformen\SF1600\EnumType\KvitteringsTypeKodeType::valueIsValid($kvitteringsTypeKode)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \ItkDev\Serviceplatformen\SF1600\EnumType\KvitteringsTypeKodeType', is_array($kvitteringsTypeKode) ? implode(', ', $kvitteringsTypeKode) : var_export($kvitteringsTypeKode, true), implode(', ', \ItkDev\Serviceplatformen\SF1600\EnumType\KvitteringsTypeKodeType::getValidValues())), __LINE__);
        }
        $this->KvitteringsTypeKode = $kvitteringsTypeKode;
        
        return $this;
    }
    /**
     * Get KvitteringsEmail value
     * @return string|null
     */
    public function getKvitteringsEmail(): ?string
    {
        return $this->KvitteringsEmail;
    }
    /**
     * Set KvitteringsEmail value
     * @param string $kvitteringsEmail
     * @return \ItkDev\Serviceplatformen\SF1600\StructType\TransaktionsParametreIType
     */
    public function setKvitteringsEmail(?string $kvitteringsEmail = null): self
    {
        // validation for constraint: string
        if (!is_null($kvitteringsEmail) && !is_string($kvitteringsEmail)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($kvitteringsEmail, true), gettype($kvitteringsEmail)), __LINE__);
        }
        // validation for constraint: pattern(([^>\(\)\[\]\\,;:@\s]{0,191}@[^>\(\)\[\]\\,;:@\s]{1,64}))
        if (!is_null($kvitteringsEmail) && !preg_match('/([^>\\(\\)\\[\\]\\\\,;:@\\s]{0,191}@[^>\\(\\)\\[\\]\\\\,;:@\\s]{1,64})/', $kvitteringsEmail)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /([^>\\(\\)\\[\\]\\\\,;:@\\s]{0,191}@[^>\\(\\)\\[\\]\\\\,;:@\\s]{1,64})/', var_export($kvitteringsEmail, true)), __LINE__);
        }
        $this->KvitteringsEmail = $kvitteringsEmail;
        
        return $this;
    }
}
