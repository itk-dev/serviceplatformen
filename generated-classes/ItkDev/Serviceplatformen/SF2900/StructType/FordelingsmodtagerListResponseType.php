<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF2900\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FordelingsmodtagerListResponseType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class FordelingsmodtagerListResponseType extends AbstractStructBase
{
    /**
     * The Systemer
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \ItkDev\Serviceplatformen\SF2900\StructType\TilgaengeligeModtagereType
     */
    protected \ItkDev\Serviceplatformen\SF2900\StructType\TilgaengeligeModtagereType $Systemer;
    /**
     * Constructor method for FordelingsmodtagerListResponseType
     * @uses FordelingsmodtagerListResponseType::setSystemer()
     * @param \ItkDev\Serviceplatformen\SF2900\StructType\TilgaengeligeModtagereType $systemer
     */
    public function __construct(\ItkDev\Serviceplatformen\SF2900\StructType\TilgaengeligeModtagereType $systemer)
    {
        $this
            ->setSystemer($systemer);
    }
    /**
     * Get Systemer value
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\TilgaengeligeModtagereType
     */
    public function getSystemer(): \ItkDev\Serviceplatformen\SF2900\StructType\TilgaengeligeModtagereType
    {
        return $this->Systemer;
    }
    /**
     * Set Systemer value
     * @param \ItkDev\Serviceplatformen\SF2900\StructType\TilgaengeligeModtagereType $systemer
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\FordelingsmodtagerListResponseType
     */
    public function setSystemer(\ItkDev\Serviceplatformen\SF2900\StructType\TilgaengeligeModtagereType $systemer): self
    {
        $this->Systemer = $systemer;
        
        return $this;
    }
}
