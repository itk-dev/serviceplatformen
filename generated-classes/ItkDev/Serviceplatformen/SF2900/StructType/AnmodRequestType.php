<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF2900\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for anmodRequestType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class AnmodRequestType extends AbstractStructBase
{
    /**
     * The DistributionContext
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \ItkDev\Serviceplatformen\SF2900\StructType\DistributionContextType
     */
    protected \ItkDev\Serviceplatformen\SF2900\StructType\DistributionContextType $DistributionContext;
    /**
     * The DistributionObject
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \ItkDev\Serviceplatformen\SF2900\StructType\DistributionObjectType
     */
    protected \ItkDev\Serviceplatformen\SF2900\StructType\DistributionObjectType $DistributionObject;
    /**
     * Constructor method for anmodRequestType
     * @uses AnmodRequestType::setDistributionContext()
     * @uses AnmodRequestType::setDistributionObject()
     * @param \ItkDev\Serviceplatformen\SF2900\StructType\DistributionContextType $distributionContext
     * @param \ItkDev\Serviceplatformen\SF2900\StructType\DistributionObjectType $distributionObject
     */
    public function __construct(\ItkDev\Serviceplatformen\SF2900\StructType\DistributionContextType $distributionContext, \ItkDev\Serviceplatformen\SF2900\StructType\DistributionObjectType $distributionObject)
    {
        $this
            ->setDistributionContext($distributionContext)
            ->setDistributionObject($distributionObject);
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
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\AnmodRequestType
     */
    public function setDistributionContext(\ItkDev\Serviceplatformen\SF2900\StructType\DistributionContextType $distributionContext): self
    {
        $this->DistributionContext = $distributionContext;
        
        return $this;
    }
    /**
     * Get DistributionObject value
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\DistributionObjectType
     */
    public function getDistributionObject(): \ItkDev\Serviceplatformen\SF2900\StructType\DistributionObjectType
    {
        return $this->DistributionObject;
    }
    /**
     * Set DistributionObject value
     * @param \ItkDev\Serviceplatformen\SF2900\StructType\DistributionObjectType $distributionObject
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\AnmodRequestType
     */
    public function setDistributionObject(\ItkDev\Serviceplatformen\SF2900\StructType\DistributionObjectType $distributionObject): self
    {
        $this->DistributionObject = $distributionObject;
        
        return $this;
    }
}
