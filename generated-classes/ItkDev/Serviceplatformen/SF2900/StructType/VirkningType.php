<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF2900\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VirkningType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class VirkningType extends AbstractStructBase
{
    /**
     * The Aktoer
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \ItkDev\Serviceplatformen\SF2900\StructType\UUID_URN
     */
    protected \ItkDev\Serviceplatformen\SF2900\StructType\UUID_URN $Aktoer;
    /**
     * The AktoerType
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $AktoerType;
    /**
     * The FraTidspunkt
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $FraTidspunkt = null;
    /**
     * The TilTidspunkt
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $TilTidspunkt = null;
    /**
     * The NoteTekst
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $NoteTekst = null;
    /**
     * Constructor method for VirkningType
     * @uses VirkningType::setAktoer()
     * @uses VirkningType::setAktoerType()
     * @uses VirkningType::setFraTidspunkt()
     * @uses VirkningType::setTilTidspunkt()
     * @uses VirkningType::setNoteTekst()
     * @param \ItkDev\Serviceplatformen\SF2900\StructType\UUID_URN $aktoer
     * @param string $aktoerType
     * @param string $fraTidspunkt
     * @param string $tilTidspunkt
     * @param string $noteTekst
     */
    public function __construct(\ItkDev\Serviceplatformen\SF2900\StructType\UUID_URN $aktoer, string $aktoerType, ?string $fraTidspunkt = null, ?string $tilTidspunkt = null, ?string $noteTekst = null)
    {
        $this
            ->setAktoer($aktoer)
            ->setAktoerType($aktoerType)
            ->setFraTidspunkt($fraTidspunkt)
            ->setTilTidspunkt($tilTidspunkt)
            ->setNoteTekst($noteTekst);
    }
    /**
     * Get Aktoer value
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\UUID_URN
     */
    public function getAktoer(): \ItkDev\Serviceplatformen\SF2900\StructType\UUID_URN
    {
        return $this->Aktoer;
    }
    /**
     * Set Aktoer value
     * @param \ItkDev\Serviceplatformen\SF2900\StructType\UUID_URN $aktoer
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\VirkningType
     */
    public function setAktoer(\ItkDev\Serviceplatformen\SF2900\StructType\UUID_URN $aktoer): self
    {
        $this->Aktoer = $aktoer;
        
        return $this;
    }
    /**
     * Get AktoerType value
     * @return string
     */
    public function getAktoerType(): string
    {
        return $this->AktoerType;
    }
    /**
     * Set AktoerType value
     * @uses \ItkDev\Serviceplatformen\SF2900\EnumType\AktoerTypeType::valueIsValid()
     * @uses \ItkDev\Serviceplatformen\SF2900\EnumType\AktoerTypeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $aktoerType
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\VirkningType
     */
    public function setAktoerType(string $aktoerType): self
    {
        // validation for constraint: enumeration
        if (!\ItkDev\Serviceplatformen\SF2900\EnumType\AktoerTypeType::valueIsValid($aktoerType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \ItkDev\Serviceplatformen\SF2900\EnumType\AktoerTypeType', is_array($aktoerType) ? implode(', ', $aktoerType) : var_export($aktoerType, true), implode(', ', \ItkDev\Serviceplatformen\SF2900\EnumType\AktoerTypeType::getValidValues())), __LINE__);
        }
        $this->AktoerType = $aktoerType;
        
        return $this;
    }
    /**
     * Get FraTidspunkt value
     * @return string|null
     */
    public function getFraTidspunkt(): ?string
    {
        return $this->FraTidspunkt;
    }
    /**
     * Set FraTidspunkt value
     * @param string $fraTidspunkt
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\VirkningType
     */
    public function setFraTidspunkt(?string $fraTidspunkt = null): self
    {
        // validation for constraint: string
        if (!is_null($fraTidspunkt) && !is_string($fraTidspunkt)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fraTidspunkt, true), gettype($fraTidspunkt)), __LINE__);
        }
        $this->FraTidspunkt = $fraTidspunkt;
        
        return $this;
    }
    /**
     * Get TilTidspunkt value
     * @return string|null
     */
    public function getTilTidspunkt(): ?string
    {
        return $this->TilTidspunkt;
    }
    /**
     * Set TilTidspunkt value
     * @param string $tilTidspunkt
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\VirkningType
     */
    public function setTilTidspunkt(?string $tilTidspunkt = null): self
    {
        // validation for constraint: string
        if (!is_null($tilTidspunkt) && !is_string($tilTidspunkt)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tilTidspunkt, true), gettype($tilTidspunkt)), __LINE__);
        }
        $this->TilTidspunkt = $tilTidspunkt;
        
        return $this;
    }
    /**
     * Get NoteTekst value
     * @return string|null
     */
    public function getNoteTekst(): ?string
    {
        return $this->NoteTekst;
    }
    /**
     * Set NoteTekst value
     * @param string $noteTekst
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\VirkningType
     */
    public function setNoteTekst(?string $noteTekst = null): self
    {
        // validation for constraint: string
        if (!is_null($noteTekst) && !is_string($noteTekst)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($noteTekst, true), gettype($noteTekst)), __LINE__);
        }
        $this->NoteTekst = $noteTekst;
        
        return $this;
    }
}
