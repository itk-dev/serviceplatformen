<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF2900\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VariantAttributterType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class VariantAttributterType extends AbstractStructBase
{
    /**
     * The VariantType
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $VariantType;
    /**
     * The Produktion
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Produktion = null;
    /**
     * The Offentliggoerelse
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $Offentliggoerelse = null;
    /**
     * The Arkivering
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $Arkivering = null;
    /**
     * The DelvistScannet
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $DelvistScannet = null;
    /**
     * Constructor method for VariantAttributterType
     * @uses VariantAttributterType::setVariantType()
     * @uses VariantAttributterType::setProduktion()
     * @uses VariantAttributterType::setOffentliggoerelse()
     * @uses VariantAttributterType::setArkivering()
     * @uses VariantAttributterType::setDelvistScannet()
     * @param string $variantType
     * @param string $produktion
     * @param bool $offentliggoerelse
     * @param bool $arkivering
     * @param bool $delvistScannet
     */
    public function __construct(string $variantType, ?string $produktion = null, ?bool $offentliggoerelse = null, ?bool $arkivering = null, ?bool $delvistScannet = null)
    {
        $this
            ->setVariantType($variantType)
            ->setProduktion($produktion)
            ->setOffentliggoerelse($offentliggoerelse)
            ->setArkivering($arkivering)
            ->setDelvistScannet($delvistScannet);
    }
    /**
     * Get VariantType value
     * @return string
     */
    public function getVariantType(): string
    {
        return $this->VariantType;
    }
    /**
     * Set VariantType value
     * @param string $variantType
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\VariantAttributterType
     */
    public function setVariantType(string $variantType): self
    {
        // validation for constraint: string
        if (!is_null($variantType) && !is_string($variantType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($variantType, true), gettype($variantType)), __LINE__);
        }
        $this->VariantType = $variantType;
        
        return $this;
    }
    /**
     * Get Produktion value
     * @return string|null
     */
    public function getProduktion(): ?string
    {
        return $this->Produktion;
    }
    /**
     * Set Produktion value
     * @param string $produktion
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\VariantAttributterType
     */
    public function setProduktion(?string $produktion = null): self
    {
        // validation for constraint: string
        if (!is_null($produktion) && !is_string($produktion)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($produktion, true), gettype($produktion)), __LINE__);
        }
        $this->Produktion = $produktion;
        
        return $this;
    }
    /**
     * Get Offentliggoerelse value
     * @return bool|null
     */
    public function getOffentliggoerelse(): ?bool
    {
        return $this->Offentliggoerelse;
    }
    /**
     * Set Offentliggoerelse value
     * @param bool $offentliggoerelse
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\VariantAttributterType
     */
    public function setOffentliggoerelse(?bool $offentliggoerelse = null): self
    {
        // validation for constraint: boolean
        if (!is_null($offentliggoerelse) && !is_bool($offentliggoerelse)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($offentliggoerelse, true), gettype($offentliggoerelse)), __LINE__);
        }
        $this->Offentliggoerelse = $offentliggoerelse;
        
        return $this;
    }
    /**
     * Get Arkivering value
     * @return bool|null
     */
    public function getArkivering(): ?bool
    {
        return $this->Arkivering;
    }
    /**
     * Set Arkivering value
     * @param bool $arkivering
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\VariantAttributterType
     */
    public function setArkivering(?bool $arkivering = null): self
    {
        // validation for constraint: boolean
        if (!is_null($arkivering) && !is_bool($arkivering)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($arkivering, true), gettype($arkivering)), __LINE__);
        }
        $this->Arkivering = $arkivering;
        
        return $this;
    }
    /**
     * Get DelvistScannet value
     * @return bool|null
     */
    public function getDelvistScannet(): ?bool
    {
        return $this->DelvistScannet;
    }
    /**
     * Set DelvistScannet value
     * @param bool $delvistScannet
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\VariantAttributterType
     */
    public function setDelvistScannet(?bool $delvistScannet = null): self
    {
        // validation for constraint: boolean
        if (!is_null($delvistScannet) && !is_bool($delvistScannet)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($delvistScannet, true), gettype($delvistScannet)), __LINE__);
        }
        $this->DelvistScannet = $delvistScannet;
        
        return $this;
    }
}
