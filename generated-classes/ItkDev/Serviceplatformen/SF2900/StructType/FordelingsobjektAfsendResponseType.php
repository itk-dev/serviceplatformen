<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF2900\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FordelingsobjektAfsendResponseType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class FordelingsobjektAfsendResponseType extends AbstractStructBase
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
     * The DistributionContext
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \ItkDev\Serviceplatformen\SF2900\StructType\DistributionContextType
     */
    protected \ItkDev\Serviceplatformen\SF2900\StructType\DistributionContextType $DistributionContext;
    /**
     * Constructor method for FordelingsobjektAfsendResponseType
     * @uses FordelingsobjektAfsendResponseType::setForretningsKvittering()
     * @uses FordelingsobjektAfsendResponseType::setDistributionContext()
     * @param \ItkDev\Serviceplatformen\SF2900\StructType\ForretningskvitteringType $forretningsKvittering
     * @param \ItkDev\Serviceplatformen\SF2900\StructType\DistributionContextType $distributionContext
     */
    public function __construct(\ItkDev\Serviceplatformen\SF2900\StructType\ForretningskvitteringType $forretningsKvittering, \ItkDev\Serviceplatformen\SF2900\StructType\DistributionContextType $distributionContext)
    {
        $this
            ->setForretningsKvittering($forretningsKvittering)
            ->setDistributionContext($distributionContext);
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
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\FordelingsobjektAfsendResponseType
     */
    public function setForretningsKvittering(\ItkDev\Serviceplatformen\SF2900\StructType\ForretningskvitteringType $forretningsKvittering): self
    {
        $this->ForretningsKvittering = $forretningsKvittering;
        
        return $this;
    }
    /**
     * Get DistributionContext value
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\DistributionContextType
     */
    public function getDistributionContext(): \ItkDev\Serviceplatformen\SF2900\StructType\DistributionContextType
    {
        return $this->DistributionContext;
    }
    /**
     * Set DistributionContext value
     * @param \ItkDev\Serviceplatformen\SF2900\StructType\DistributionContextType $distributionContext
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\FordelingsobjektAfsendResponseType
     */
    public function setDistributionContext(\ItkDev\Serviceplatformen\SF2900\StructType\DistributionContextType $distributionContext): self
    {
        $this->DistributionContext = $distributionContext;
        
        return $this;
    }
}
