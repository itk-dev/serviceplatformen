<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF2900\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FordelingsobjektModtagRequestType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class FordelingsobjektModtagRequestType extends AbstractStructBase
{
    /**
     * The anmodning
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \ItkDev\Serviceplatformen\SF2900\StructType\AnmodRequestType
     */
    protected \ItkDev\Serviceplatformen\SF2900\StructType\AnmodRequestType $anmodning;
    /**
     * Constructor method for FordelingsobjektModtagRequestType
     * @uses FordelingsobjektModtagRequestType::setAnmodning()
     * @param \ItkDev\Serviceplatformen\SF2900\StructType\AnmodRequestType $anmodning
     */
    public function __construct(\ItkDev\Serviceplatformen\SF2900\StructType\AnmodRequestType $anmodning)
    {
        $this
            ->setAnmodning($anmodning);
    }
    /**
     * Get anmodning value
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\AnmodRequestType
     */
    public function getAnmodning(): \ItkDev\Serviceplatformen\SF2900\StructType\AnmodRequestType
    {
        return $this->anmodning;
    }
    /**
     * Set anmodning value
     * @param \ItkDev\Serviceplatformen\SF2900\StructType\AnmodRequestType $anmodning
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\FordelingsobjektModtagRequestType
     */
    public function setAnmodning(\ItkDev\Serviceplatformen\SF2900\StructType\AnmodRequestType $anmodning): self
    {
        $this->anmodning = $anmodning;
        
        return $this;
    }
}
