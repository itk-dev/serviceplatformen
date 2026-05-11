<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF2900\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FordelingsobjektModtagResponseType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class FordelingsobjektModtagResponseType extends AbstractStructBase
{
    /**
     * The ForretningsKvittering
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \ItkDev\Serviceplatformen\SF2900\StructType\ForretningskvitteringType
     */
    protected \ItkDev\Serviceplatformen\SF2900\StructType\ForretningskvitteringType $ForretningsKvittering;
    /**
     * Constructor method for FordelingsobjektModtagResponseType
     * @uses FordelingsobjektModtagResponseType::setForretningsKvittering()
     * @param \ItkDev\Serviceplatformen\SF2900\StructType\ForretningskvitteringType $forretningsKvittering
     */
    public function __construct(\ItkDev\Serviceplatformen\SF2900\StructType\ForretningskvitteringType $forretningsKvittering)
    {
        $this
            ->setForretningsKvittering($forretningsKvittering);
    }
    /**
     * Get ForretningsKvittering value
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\ForretningskvitteringType
     */
    public function getForretningsKvittering(): \ItkDev\Serviceplatformen\SF2900\StructType\ForretningskvitteringType
    {
        return $this->ForretningsKvittering;
    }
    /**
     * Set ForretningsKvittering value
     * @param \ItkDev\Serviceplatformen\SF2900\StructType\ForretningskvitteringType $forretningsKvittering
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\FordelingsobjektModtagResponseType
     */
    public function setForretningsKvittering(\ItkDev\Serviceplatformen\SF2900\StructType\ForretningskvitteringType $forretningsKvittering): self
    {
        $this->ForretningsKvittering = $forretningsKvittering;
        
        return $this;
    }
}
