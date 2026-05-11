<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF2900\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TilstandType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class TilstandType extends AbstractStructBase
{
    /**
     * The Fremdrift
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $Fremdrift;
    /**
     * The Virkning
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \ItkDev\Serviceplatformen\SF2900\StructType\VirkningType
     */
    protected \ItkDev\Serviceplatformen\SF2900\StructType\VirkningType $Virkning;
    /**
     * Constructor method for TilstandType
     * @uses TilstandType::setFremdrift()
     * @uses TilstandType::setVirkning()
     * @param string $fremdrift
     * @param \ItkDev\Serviceplatformen\SF2900\StructType\VirkningType $virkning
     */
    public function __construct(string $fremdrift, \ItkDev\Serviceplatformen\SF2900\StructType\VirkningType $virkning)
    {
        $this
            ->setFremdrift($fremdrift)
            ->setVirkning($virkning);
    }
    /**
     * Get Fremdrift value
     * @return string
     */
    public function getFremdrift(): string
    {
        return $this->Fremdrift;
    }
    /**
     * Set Fremdrift value
     * @uses \ItkDev\Serviceplatformen\SF2900\EnumType\FremdriftType::valueIsValid()
     * @uses \ItkDev\Serviceplatformen\SF2900\EnumType\FremdriftType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $fremdrift
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\TilstandType
     */
    public function setFremdrift(string $fremdrift): self
    {
        // validation for constraint: enumeration
        if (!\ItkDev\Serviceplatformen\SF2900\EnumType\FremdriftType::valueIsValid($fremdrift)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \ItkDev\Serviceplatformen\SF2900\EnumType\FremdriftType', is_array($fremdrift) ? implode(', ', $fremdrift) : var_export($fremdrift, true), implode(', ', \ItkDev\Serviceplatformen\SF2900\EnumType\FremdriftType::getValidValues())), __LINE__);
        }
        $this->Fremdrift = $fremdrift;
        
        return $this;
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
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\TilstandType
     */
    public function setVirkning(\ItkDev\Serviceplatformen\SF2900\StructType\VirkningType $virkning): self
    {
        $this->Virkning = $virkning;
        
        return $this;
    }
}
