<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF2900\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FordelingskvitteringModtagAnvenderRequestType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class FordelingskvitteringModtagAnvenderRequestType extends AbstractStructBase
{
    /**
     * The Forretningskvittering
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \ItkDev\Serviceplatformen\SF2900\StructType\ForretningskvitteringType
     */
    protected \ItkDev\Serviceplatformen\SF2900\StructType\ForretningskvitteringType $Forretningskvittering;
    /**
     * The DistributionContext
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \ItkDev\Serviceplatformen\SF2900\StructType\DistributionContextType
     */
    protected \ItkDev\Serviceplatformen\SF2900\StructType\DistributionContextType $DistributionContext;
    /**
     * Constructor method for FordelingskvitteringModtagAnvenderRequestType
     * @uses FordelingskvitteringModtagAnvenderRequestType::setForretningskvittering()
     * @uses FordelingskvitteringModtagAnvenderRequestType::setDistributionContext()
     * @param \ItkDev\Serviceplatformen\SF2900\StructType\ForretningskvitteringType $forretningskvittering
     * @param \ItkDev\Serviceplatformen\SF2900\StructType\DistributionContextType $distributionContext
     */
    public function __construct(\ItkDev\Serviceplatformen\SF2900\StructType\ForretningskvitteringType $forretningskvittering, \ItkDev\Serviceplatformen\SF2900\StructType\DistributionContextType $distributionContext)
    {
        $this
            ->setForretningskvittering($forretningskvittering)
            ->setDistributionContext($distributionContext);
    }
    /**
     * Get Forretningskvittering value
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\ForretningskvitteringType
     */
    public function getForretningskvittering(): \ItkDev\Serviceplatformen\SF2900\StructType\ForretningskvitteringType
    {
        return $this->Forretningskvittering;
    }
    /**
     * Set Forretningskvittering value
     * @param \ItkDev\Serviceplatformen\SF2900\StructType\ForretningskvitteringType $forretningskvittering
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\FordelingskvitteringModtagAnvenderRequestType
     */
    public function setForretningskvittering(\ItkDev\Serviceplatformen\SF2900\StructType\ForretningskvitteringType $forretningskvittering): self
    {
        $this->Forretningskvittering = $forretningskvittering;
        
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
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\FordelingskvitteringModtagAnvenderRequestType
     */
    public function setDistributionContext(\ItkDev\Serviceplatformen\SF2900\StructType\DistributionContextType $distributionContext): self
    {
        $this->DistributionContext = $distributionContext;
        
        return $this;
    }
}
