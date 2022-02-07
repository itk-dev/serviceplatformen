<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF1600\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FejlType StructType
 * @subpackage Structs
 */
class FejlType extends AbstractStructBase
{
    /**
     * The FejlKode
     * Meta information extracted from the WSDL
     * - base: integer
     * - maxInclusive: 9999
     * - minInclusive: 1000
     * - ref: dkal:FejlKode
     * @var int|null
     */
    protected ?int $FejlKode = null;
    /**
     * The FejlTekst
     * Meta information extracted from the WSDL
     * - base: string
     * - maxLength: 2048
     * - ref: dkal:FejlTekst
     * @var string|null
     */
    protected ?string $FejlTekst = null;
    /**
     * The FejlIdentifikator
     * Meta information extracted from the WSDL
     * - base: string
     * - maxLength: 26
     * - minOccurs: 0
     * - ref: dkal:FejlIdentifikator
     * @var string|null
     */
    protected ?string $FejlIdentifikator = null;
    /**
     * Constructor method for FejlType
     * @uses FejlType::setFejlKode()
     * @uses FejlType::setFejlTekst()
     * @uses FejlType::setFejlIdentifikator()
     * @param int $fejlKode
     * @param string $fejlTekst
     * @param string $fejlIdentifikator
     */
    public function __construct(?int $fejlKode = null, ?string $fejlTekst = null, ?string $fejlIdentifikator = null)
    {
        $this
            ->setFejlKode($fejlKode)
            ->setFejlTekst($fejlTekst)
            ->setFejlIdentifikator($fejlIdentifikator);
    }
    /**
     * Get FejlKode value
     * @return int|null
     */
    public function getFejlKode(): ?int
    {
        return $this->FejlKode;
    }
    /**
     * Set FejlKode value
     * @param int $fejlKode
     * @return \ItkDev\Serviceplatformen\SF1600\StructType\FejlType
     */
    public function setFejlKode(?int $fejlKode = null): self
    {
        // validation for constraint: int
        if (!is_null($fejlKode) && !(is_int($fejlKode) || ctype_digit($fejlKode))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($fejlKode, true), gettype($fejlKode)), __LINE__);
        }
        // validation for constraint: maxInclusive(9999)
        if (!is_null($fejlKode) && $fejlKode > 9999) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically less than or equal to 9999', var_export($fejlKode, true)), __LINE__);
        }
        // validation for constraint: minInclusive(1000)
        if (!is_null($fejlKode) && $fejlKode < 1000) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 1000', var_export($fejlKode, true)), __LINE__);
        }
        $this->FejlKode = $fejlKode;
        
        return $this;
    }
    /**
     * Get FejlTekst value
     * @return string|null
     */
    public function getFejlTekst(): ?string
    {
        return $this->FejlTekst;
    }
    /**
     * Set FejlTekst value
     * @param string $fejlTekst
     * @return \ItkDev\Serviceplatformen\SF1600\StructType\FejlType
     */
    public function setFejlTekst(?string $fejlTekst = null): self
    {
        // validation for constraint: string
        if (!is_null($fejlTekst) && !is_string($fejlTekst)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fejlTekst, true), gettype($fejlTekst)), __LINE__);
        }
        // validation for constraint: maxLength(2048)
        if (!is_null($fejlTekst) && mb_strlen((string) $fejlTekst) > 2048) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 2048', mb_strlen((string) $fejlTekst)), __LINE__);
        }
        $this->FejlTekst = $fejlTekst;
        
        return $this;
    }
    /**
     * Get FejlIdentifikator value
     * @return string|null
     */
    public function getFejlIdentifikator(): ?string
    {
        return $this->FejlIdentifikator;
    }
    /**
     * Set FejlIdentifikator value
     * @param string $fejlIdentifikator
     * @return \ItkDev\Serviceplatformen\SF1600\StructType\FejlType
     */
    public function setFejlIdentifikator(?string $fejlIdentifikator = null): self
    {
        // validation for constraint: string
        if (!is_null($fejlIdentifikator) && !is_string($fejlIdentifikator)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fejlIdentifikator, true), gettype($fejlIdentifikator)), __LINE__);
        }
        // validation for constraint: maxLength(26)
        if (!is_null($fejlIdentifikator) && mb_strlen((string) $fejlIdentifikator) > 26) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 26', mb_strlen((string) $fejlIdentifikator)), __LINE__);
        }
        $this->FejlIdentifikator = $fejlIdentifikator;
        
        return $this;
    }
}
