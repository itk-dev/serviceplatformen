<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF2900\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FordelingsmodtagerListRequestType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class FordelingsmodtagerListRequestType extends AbstractStructBase
{
    /**
     * The Routing
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \ItkDev\Serviceplatformen\SF2900\StructType\FordelingsmodtagerListRequest
     */
    protected \ItkDev\Serviceplatformen\SF2900\StructType\FordelingsmodtagerListRequest $Routing;
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
     * Constructor method for FordelingsmodtagerListRequestType
     * @uses FordelingsmodtagerListRequestType::setRouting()
     * @uses FordelingsmodtagerListRequestType::setCallContext()
     * @uses FordelingsmodtagerListRequestType::setAuthorityContext()
     * @param \ItkDev\Serviceplatformen\SF2900\StructType\FordelingsmodtagerListRequest $routing
     * @param \ItkDev\Serviceplatformen\SF2900\StructType\CallContextType $callContext
     * @param \ItkDev\Serviceplatformen\SF2900\StructType\AuthorityContextType $authorityContext
     */
    public function __construct(\ItkDev\Serviceplatformen\SF2900\StructType\FordelingsmodtagerListRequest $routing, ?\ItkDev\Serviceplatformen\SF2900\StructType\CallContextType $callContext = null, ?\ItkDev\Serviceplatformen\SF2900\StructType\AuthorityContextType $authorityContext = null)
    {
        $this
            ->setRouting($routing)
            ->setCallContext($callContext)
            ->setAuthorityContext($authorityContext);
    }
    /**
     * Get Routing value
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\FordelingsmodtagerListRequest
     */
    public function getRouting(): \ItkDev\Serviceplatformen\SF2900\StructType\FordelingsmodtagerListRequest
    {
        return $this->Routing;
    }
    /**
     * Set Routing value
     * @param \ItkDev\Serviceplatformen\SF2900\StructType\FordelingsmodtagerListRequest $routing
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\FordelingsmodtagerListRequestType
     */
    public function setRouting(\ItkDev\Serviceplatformen\SF2900\StructType\FordelingsmodtagerListRequest $routing): self
    {
        $this->Routing = $routing;
        
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
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\FordelingsmodtagerListRequestType
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
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\FordelingsmodtagerListRequestType
     */
    public function setAuthorityContext(?\ItkDev\Serviceplatformen\SF2900\StructType\AuthorityContextType $authorityContext = null): self
    {
        $this->AuthorityContext = $authorityContext;
        
        return $this;
    }
}
