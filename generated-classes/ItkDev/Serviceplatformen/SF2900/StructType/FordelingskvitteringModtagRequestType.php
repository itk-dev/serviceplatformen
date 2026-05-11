<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF2900\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FordelingskvitteringModtagRequestType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class FordelingskvitteringModtagRequestType extends AbstractStructBase
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
     * The CallContext
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: callctx:CallContext
     * @var \ItkDev\Serviceplatformen\SF2900\StructType\CallContextType|null
     */
    protected ?\ItkDev\Serviceplatformen\SF2900\StructType\CallContextType $CallContext = null;
    /**
     * The AuthorityContext
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: authctx:AuthorityContext
     * @var \ItkDev\Serviceplatformen\SF2900\StructType\AuthorityContextType|null
     */
    protected ?\ItkDev\Serviceplatformen\SF2900\StructType\AuthorityContextType $AuthorityContext = null;
    /**
     * Constructor method for FordelingskvitteringModtagRequestType
     * @uses FordelingskvitteringModtagRequestType::setForretningskvittering()
     * @uses FordelingskvitteringModtagRequestType::setDistributionContext()
     * @uses FordelingskvitteringModtagRequestType::setCallContext()
     * @uses FordelingskvitteringModtagRequestType::setAuthorityContext()
     * @param \ItkDev\Serviceplatformen\SF2900\StructType\ForretningskvitteringType $forretningskvittering
     * @param \ItkDev\Serviceplatformen\SF2900\StructType\DistributionContextType $distributionContext
     * @param \ItkDev\Serviceplatformen\SF2900\StructType\CallContextType $callContext
     * @param \ItkDev\Serviceplatformen\SF2900\StructType\AuthorityContextType $authorityContext
     */
    public function __construct(\ItkDev\Serviceplatformen\SF2900\StructType\ForretningskvitteringType $forretningskvittering, \ItkDev\Serviceplatformen\SF2900\StructType\DistributionContextType $distributionContext, ?\ItkDev\Serviceplatformen\SF2900\StructType\CallContextType $callContext = null, ?\ItkDev\Serviceplatformen\SF2900\StructType\AuthorityContextType $authorityContext = null)
    {
        $this
            ->setForretningskvittering($forretningskvittering)
            ->setDistributionContext($distributionContext)
            ->setCallContext($callContext)
            ->setAuthorityContext($authorityContext);
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
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\FordelingskvitteringModtagRequestType
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
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\FordelingskvitteringModtagRequestType
     */
    public function setDistributionContext(\ItkDev\Serviceplatformen\SF2900\StructType\DistributionContextType $distributionContext): self
    {
        $this->DistributionContext = $distributionContext;
        
        return $this;
    }
    /**
     * Get CallContext value
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\CallContextType|null
     */
    public function getCallContext(): ?\ItkDev\Serviceplatformen\SF2900\StructType\CallContextType
    {
        return $this->CallContext;
    }
    /**
     * Set CallContext value
     * @param \ItkDev\Serviceplatformen\SF2900\StructType\CallContextType $callContext
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\FordelingskvitteringModtagRequestType
     */
    public function setCallContext(?\ItkDev\Serviceplatformen\SF2900\StructType\CallContextType $callContext = null): self
    {
        $this->CallContext = $callContext;
        
        return $this;
    }
    /**
     * Get AuthorityContext value
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\AuthorityContextType|null
     */
    public function getAuthorityContext(): ?\ItkDev\Serviceplatformen\SF2900\StructType\AuthorityContextType
    {
        return $this->AuthorityContext;
    }
    /**
     * Set AuthorityContext value
     * @param \ItkDev\Serviceplatformen\SF2900\StructType\AuthorityContextType $authorityContext
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\FordelingskvitteringModtagRequestType
     */
    public function setAuthorityContext(?\ItkDev\Serviceplatformen\SF2900\StructType\AuthorityContextType $authorityContext = null): self
    {
        $this->AuthorityContext = $authorityContext;
        
        return $this;
    }
}
