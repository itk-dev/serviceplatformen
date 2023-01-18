<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF1600\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CountryIdentificationCodeType StructType
 * @subpackage Structs
 */
class CountryIdentificationCodeType extends AbstractStructBase
{
    /**
     * The _
     * @var string|null
     */
    protected ?string $_ = null;
    /**
     * The scheme
     * @var string|null
     */
    protected ?string $scheme = null;
    /**
     * Constructor method for CountryIdentificationCodeType
     * @uses CountryIdentificationCodeType::set_()
     * @uses CountryIdentificationCodeType::setScheme()
     * @param string $_
     * @param string $scheme
     */
    public function __construct(?string $_ = null, ?string $scheme = null)
    {
        $this
            ->set_($_)
            ->setScheme($scheme);
    }
    /**
     * Get _ value
     * @return string|null
     */
    public function get_(): ?string
    {
        return $this->_;
    }
    /**
     * Set _ value
     * @param string $_
     * @return \ItkDev\Serviceplatformen\SF1600\StructType\CountryIdentificationCodeType
     */
    public function set_(?string $_ = null): self
    {
        // validation for constraint: string
        if (!is_null($_) && !is_string($_)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($_, true), gettype($_)), __LINE__);
        }
        $this->_ = $_;
        
        return $this;
    }
    /**
     * Get scheme value
     * @return string|null
     */
    public function getScheme(): ?string
    {
        return $this->scheme;
    }
    /**
     * Set scheme value
     * @param string $scheme
     * @return \ItkDev\Serviceplatformen\SF1600\StructType\CountryIdentificationCodeType
     */
    public function setScheme(?string $scheme = null): self
    {
        // validation for constraint: string
        if (!is_null($scheme) && !is_string($scheme)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($scheme, true), gettype($scheme)), __LINE__);
        }
        $this->scheme = $scheme;
        
        return $this;
    }
}
