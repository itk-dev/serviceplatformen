<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF2900\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VariantType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class VariantType extends AbstractStructBase
{
    /**
     * The Virkning
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \ItkDev\Serviceplatformen\SF2900\StructType\VirkningType
     */
    protected \ItkDev\Serviceplatformen\SF2900\StructType\VirkningType $Virkning;
    /**
     * The Rolle
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $Rolle;
    /**
     * The Indeks
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $Indeks;
    /**
     * The VariantAttributter
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \ItkDev\Serviceplatformen\SF2900\StructType\VariantAttributterType
     */
    protected \ItkDev\Serviceplatformen\SF2900\StructType\VariantAttributterType $VariantAttributter;
    /**
     * The DelAttributter
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \ItkDev\Serviceplatformen\SF2900\StructType\DelAttributterType
     */
    protected \ItkDev\Serviceplatformen\SF2900\StructType\DelAttributterType $DelAttributter;
    /**
     * Constructor method for VariantType
     * @uses VariantType::setVirkning()
     * @uses VariantType::setRolle()
     * @uses VariantType::setIndeks()
     * @uses VariantType::setVariantAttributter()
     * @uses VariantType::setDelAttributter()
     * @param \ItkDev\Serviceplatformen\SF2900\StructType\VirkningType $virkning
     * @param string $rolle
     * @param string $indeks
     * @param \ItkDev\Serviceplatformen\SF2900\StructType\VariantAttributterType $variantAttributter
     * @param \ItkDev\Serviceplatformen\SF2900\StructType\DelAttributterType $delAttributter
     */
    public function __construct(\ItkDev\Serviceplatformen\SF2900\StructType\VirkningType $virkning, string $rolle, string $indeks, \ItkDev\Serviceplatformen\SF2900\StructType\VariantAttributterType $variantAttributter, \ItkDev\Serviceplatformen\SF2900\StructType\DelAttributterType $delAttributter)
    {
        $this
            ->setVirkning($virkning)
            ->setRolle($rolle)
            ->setIndeks($indeks)
            ->setVariantAttributter($variantAttributter)
            ->setDelAttributter($delAttributter);
    }
    /**
     * Get Virkning value
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\VirkningType
     */
    public function getVirkning(): \ItkDev\Serviceplatformen\SF2900\StructType\VirkningType
    {
        return $this->Virkning;
    }
    /**
     * Set Virkning value
     * @param \ItkDev\Serviceplatformen\SF2900\StructType\VirkningType $virkning
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\VariantType
     */
    public function setVirkning(\ItkDev\Serviceplatformen\SF2900\StructType\VirkningType $virkning): self
    {
        $this->Virkning = $virkning;
        
        return $this;
    }
    /**
     * Get Rolle value
     * @return string
     */
    public function getRolle(): string
    {
        return $this->Rolle;
    }
    /**
     * Set Rolle value
     * @uses \ItkDev\Serviceplatformen\SF2900\EnumType\VariantRolleType::valueIsValid()
     * @uses \ItkDev\Serviceplatformen\SF2900\EnumType\VariantRolleType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $rolle
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\VariantType
     */
    public function setRolle(string $rolle): self
    {
        // validation for constraint: enumeration
        if (!\ItkDev\Serviceplatformen\SF2900\EnumType\VariantRolleType::valueIsValid($rolle)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \ItkDev\Serviceplatformen\SF2900\EnumType\VariantRolleType', is_array($rolle) ? implode(', ', $rolle) : var_export($rolle, true), implode(', ', \ItkDev\Serviceplatformen\SF2900\EnumType\VariantRolleType::getValidValues())), __LINE__);
        }
        $this->Rolle = $rolle;
        
        return $this;
    }
    /**
     * Get Indeks value
     * @return string
     */
    public function getIndeks(): string
    {
        return $this->Indeks;
    }
    /**
     * Set Indeks value
     * @param string $indeks
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\VariantType
     */
    public function setIndeks(string $indeks): self
    {
        // validation for constraint: string
        if (!is_null($indeks) && !is_string($indeks)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($indeks, true), gettype($indeks)), __LINE__);
        }
        $this->Indeks = $indeks;
        
        return $this;
    }
    /**
     * Get VariantAttributter value
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\VariantAttributterType
     */
    public function getVariantAttributter(): \ItkDev\Serviceplatformen\SF2900\StructType\VariantAttributterType
    {
        return $this->VariantAttributter;
    }
    /**
     * Set VariantAttributter value
     * @param \ItkDev\Serviceplatformen\SF2900\StructType\VariantAttributterType $variantAttributter
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\VariantType
     */
    public function setVariantAttributter(\ItkDev\Serviceplatformen\SF2900\StructType\VariantAttributterType $variantAttributter): self
    {
        $this->VariantAttributter = $variantAttributter;
        
        return $this;
    }
    /**
     * Get DelAttributter value
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\DelAttributterType
     */
    public function getDelAttributter(): \ItkDev\Serviceplatformen\SF2900\StructType\DelAttributterType
    {
        return $this->DelAttributter;
    }
    /**
     * Set DelAttributter value
     * @param \ItkDev\Serviceplatformen\SF2900\StructType\DelAttributterType $delAttributter
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\VariantType
     */
    public function setDelAttributter(\ItkDev\Serviceplatformen\SF2900\StructType\DelAttributterType $delAttributter): self
    {
        $this->DelAttributter = $delAttributter;
        
        return $this;
    }
}
