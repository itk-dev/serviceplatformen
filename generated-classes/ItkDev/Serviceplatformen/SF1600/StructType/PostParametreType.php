<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF1600\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PostParametreType StructType
 * @subpackage Structs
 */
class PostParametreType extends AbstractStructBase
{
    /**
     * The PostKategoriKode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: fjernprint:PostKategoriKode
     * @var string|null
     */
    protected ?string $PostKategoriKode = null;
    /**
     * The AllokeringsIdentifikator
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: fjernprint:AllokeringsIdentifikator
     * @var int|null
     */
    protected ?int $AllokeringsIdentifikator = null;
    /**
     * The ReturposthaandteringHosLeverandoerIndikator
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: fjernprint:ReturposthaandteringHosLeverandoerIndikator
     * @var bool|null
     */
    protected ?bool $ReturposthaandteringHosLeverandoerIndikator = null;
    /**
     * The InformationVedAdresseAendringIndikator
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: fjernprint:InformationVedAdresseAendringIndikator
     * @var bool|null
     */
    protected ?bool $InformationVedAdresseAendringIndikator = null;
    /**
     * The SideKvantitet
     * Meta information extracted from the WSDL
     * - base: integer
     * - minInclusive: 0
     * - minOccurs: 0
     * - ref: fjernprint:SideKvantitet
     * @var int|null
     */
    protected ?int $SideKvantitet = null;
    /**
     * Constructor method for PostParametreType
     * @uses PostParametreType::setPostKategoriKode()
     * @uses PostParametreType::setAllokeringsIdentifikator()
     * @uses PostParametreType::setReturposthaandteringHosLeverandoerIndikator()
     * @uses PostParametreType::setInformationVedAdresseAendringIndikator()
     * @uses PostParametreType::setSideKvantitet()
     * @param string $postKategoriKode
     * @param int $allokeringsIdentifikator
     * @param bool $returposthaandteringHosLeverandoerIndikator
     * @param bool $informationVedAdresseAendringIndikator
     * @param int $sideKvantitet
     */
    public function __construct(?string $postKategoriKode = null, ?int $allokeringsIdentifikator = null, ?bool $returposthaandteringHosLeverandoerIndikator = null, ?bool $informationVedAdresseAendringIndikator = null, ?int $sideKvantitet = null)
    {
        $this
            ->setPostKategoriKode($postKategoriKode)
            ->setAllokeringsIdentifikator($allokeringsIdentifikator)
            ->setReturposthaandteringHosLeverandoerIndikator($returposthaandteringHosLeverandoerIndikator)
            ->setInformationVedAdresseAendringIndikator($informationVedAdresseAendringIndikator)
            ->setSideKvantitet($sideKvantitet);
    }
    /**
     * Get PostKategoriKode value
     * @return string|null
     */
    public function getPostKategoriKode(): ?string
    {
        return $this->PostKategoriKode;
    }
    /**
     * Set PostKategoriKode value
     * @uses \ItkDev\Serviceplatformen\SF1600\EnumType\PostKategoriKodeType::valueIsValid()
     * @uses \ItkDev\Serviceplatformen\SF1600\EnumType\PostKategoriKodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $postKategoriKode
     * @return \ItkDev\Serviceplatformen\SF1600\StructType\PostParametreType
     */
    public function setPostKategoriKode(?string $postKategoriKode = null): self
    {
        // validation for constraint: enumeration
        if (!\ItkDev\Serviceplatformen\SF1600\EnumType\PostKategoriKodeType::valueIsValid($postKategoriKode)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \ItkDev\Serviceplatformen\SF1600\EnumType\PostKategoriKodeType', is_array($postKategoriKode) ? implode(', ', $postKategoriKode) : var_export($postKategoriKode, true), implode(', ', \ItkDev\Serviceplatformen\SF1600\EnumType\PostKategoriKodeType::getValidValues())), __LINE__);
        }
        $this->PostKategoriKode = $postKategoriKode;
        
        return $this;
    }
    /**
     * Get AllokeringsIdentifikator value
     * @return int|null
     */
    public function getAllokeringsIdentifikator(): ?int
    {
        return $this->AllokeringsIdentifikator;
    }
    /**
     * Set AllokeringsIdentifikator value
     * @param int $allokeringsIdentifikator
     * @return \ItkDev\Serviceplatformen\SF1600\StructType\PostParametreType
     */
    public function setAllokeringsIdentifikator(?int $allokeringsIdentifikator = null): self
    {
        // validation for constraint: int
        if (!is_null($allokeringsIdentifikator) && !(is_int($allokeringsIdentifikator) || ctype_digit($allokeringsIdentifikator))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($allokeringsIdentifikator, true), gettype($allokeringsIdentifikator)), __LINE__);
        }
        $this->AllokeringsIdentifikator = $allokeringsIdentifikator;
        
        return $this;
    }
    /**
     * Get ReturposthaandteringHosLeverandoerIndikator value
     * @return bool|null
     */
    public function getReturposthaandteringHosLeverandoerIndikator(): ?bool
    {
        return $this->ReturposthaandteringHosLeverandoerIndikator;
    }
    /**
     * Set ReturposthaandteringHosLeverandoerIndikator value
     * @param bool $returposthaandteringHosLeverandoerIndikator
     * @return \ItkDev\Serviceplatformen\SF1600\StructType\PostParametreType
     */
    public function setReturposthaandteringHosLeverandoerIndikator(?bool $returposthaandteringHosLeverandoerIndikator = null): self
    {
        // validation for constraint: boolean
        if (!is_null($returposthaandteringHosLeverandoerIndikator) && !is_bool($returposthaandteringHosLeverandoerIndikator)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($returposthaandteringHosLeverandoerIndikator, true), gettype($returposthaandteringHosLeverandoerIndikator)), __LINE__);
        }
        $this->ReturposthaandteringHosLeverandoerIndikator = $returposthaandteringHosLeverandoerIndikator;
        
        return $this;
    }
    /**
     * Get InformationVedAdresseAendringIndikator value
     * @return bool|null
     */
    public function getInformationVedAdresseAendringIndikator(): ?bool
    {
        return $this->InformationVedAdresseAendringIndikator;
    }
    /**
     * Set InformationVedAdresseAendringIndikator value
     * @param bool $informationVedAdresseAendringIndikator
     * @return \ItkDev\Serviceplatformen\SF1600\StructType\PostParametreType
     */
    public function setInformationVedAdresseAendringIndikator(?bool $informationVedAdresseAendringIndikator = null): self
    {
        // validation for constraint: boolean
        if (!is_null($informationVedAdresseAendringIndikator) && !is_bool($informationVedAdresseAendringIndikator)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($informationVedAdresseAendringIndikator, true), gettype($informationVedAdresseAendringIndikator)), __LINE__);
        }
        $this->InformationVedAdresseAendringIndikator = $informationVedAdresseAendringIndikator;
        
        return $this;
    }
    /**
     * Get SideKvantitet value
     * @return int|null
     */
    public function getSideKvantitet(): ?int
    {
        return $this->SideKvantitet;
    }
    /**
     * Set SideKvantitet value
     * @param int $sideKvantitet
     * @return \ItkDev\Serviceplatformen\SF1600\StructType\PostParametreType
     */
    public function setSideKvantitet(?int $sideKvantitet = null): self
    {
        // validation for constraint: int
        if (!is_null($sideKvantitet) && !(is_int($sideKvantitet) || ctype_digit($sideKvantitet))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($sideKvantitet, true), gettype($sideKvantitet)), __LINE__);
        }
        // validation for constraint: minInclusive
        if (!is_null($sideKvantitet) && $sideKvantitet < 0) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 0', var_export($sideKvantitet, true)), __LINE__);
        }
        $this->SideKvantitet = $sideKvantitet;
        
        return $this;
    }
}
