<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF1600\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PrintAfsendBrevRequestType StructType
 * @subpackage Structs
 */
class PrintAfsendBrevRequestType extends AbstractStructBase
{
    /**
     * The BrevSPBody
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \ItkDev\Serviceplatformen\SF1600\StructType\BrevSPBodyType
     */
    protected \ItkDev\Serviceplatformen\SF1600\StructType\BrevSPBodyType $BrevSPBody;
    /**
     * The InvocationContext
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: invctx:InvocationContext
     * @var \ItkDev\Serviceplatformen\SF1600\StructType\InvocationContextType|null
     */
    protected ?\ItkDev\Serviceplatformen\SF1600\StructType\InvocationContextType $InvocationContext = null;
    /**
     * The AuthorityContext
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: authctx:AuthorityContext
     * @var \ItkDev\Serviceplatformen\SF1600\StructType\AuthorityContextType|null
     */
    protected ?\ItkDev\Serviceplatformen\SF1600\StructType\AuthorityContextType $AuthorityContext = null;
    /**
     * The CallContext
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: callctx:CallContext
     * @var \ItkDev\Serviceplatformen\SF1600\StructType\CallContextType|null
     */
    protected ?\ItkDev\Serviceplatformen\SF1600\StructType\CallContextType $CallContext = null;
    /**
     * Constructor method for PrintAfsendBrevRequestType
     * @uses PrintAfsendBrevRequestType::setBrevSPBody()
     * @uses PrintAfsendBrevRequestType::setInvocationContext()
     * @uses PrintAfsendBrevRequestType::setAuthorityContext()
     * @uses PrintAfsendBrevRequestType::setCallContext()
     * @param \ItkDev\Serviceplatformen\SF1600\StructType\BrevSPBodyType $brevSPBody
     * @param \ItkDev\Serviceplatformen\SF1600\StructType\InvocationContextType $invocationContext
     * @param \ItkDev\Serviceplatformen\SF1600\StructType\AuthorityContextType $authorityContext
     * @param \ItkDev\Serviceplatformen\SF1600\StructType\CallContextType $callContext
     */
    public function __construct(\ItkDev\Serviceplatformen\SF1600\StructType\BrevSPBodyType $brevSPBody, ?\ItkDev\Serviceplatformen\SF1600\StructType\InvocationContextType $invocationContext = null, ?\ItkDev\Serviceplatformen\SF1600\StructType\AuthorityContextType $authorityContext = null, ?\ItkDev\Serviceplatformen\SF1600\StructType\CallContextType $callContext = null)
    {
        $this
            ->setBrevSPBody($brevSPBody)
            ->setInvocationContext($invocationContext)
            ->setAuthorityContext($authorityContext)
            ->setCallContext($callContext);
    }
    /**
     * Get BrevSPBody value
     * @return \ItkDev\Serviceplatformen\SF1600\StructType\BrevSPBodyType
     */
    public function getBrevSPBody(): \ItkDev\Serviceplatformen\SF1600\StructType\BrevSPBodyType
    {
        return $this->BrevSPBody;
    }
    /**
     * Set BrevSPBody value
     * @param \ItkDev\Serviceplatformen\SF1600\StructType\BrevSPBodyType $brevSPBody
     * @return \ItkDev\Serviceplatformen\SF1600\StructType\PrintAfsendBrevRequestType
     */
    public function setBrevSPBody(\ItkDev\Serviceplatformen\SF1600\StructType\BrevSPBodyType $brevSPBody): self
    {
        $this->BrevSPBody = $brevSPBody;
        
        return $this;
    }
    /**
     * Get InvocationContext value
     * @return \ItkDev\Serviceplatformen\SF1600\StructType\InvocationContextType|null
     */
    public function getInvocationContext(): ?\ItkDev\Serviceplatformen\SF1600\StructType\InvocationContextType
    {
        return $this->InvocationContext;
    }
    /**
     * Set InvocationContext value
     * @param \ItkDev\Serviceplatformen\SF1600\StructType\InvocationContextType $invocationContext
     * @return \ItkDev\Serviceplatformen\SF1600\StructType\PrintAfsendBrevRequestType
     */
    public function setInvocationContext(?\ItkDev\Serviceplatformen\SF1600\StructType\InvocationContextType $invocationContext = null): self
    {
        $this->InvocationContext = $invocationContext;
        
        return $this;
    }
    /**
     * Get AuthorityContext value
     * @return \ItkDev\Serviceplatformen\SF1600\StructType\AuthorityContextType|null
     */
    public function getAuthorityContext(): ?\ItkDev\Serviceplatformen\SF1600\StructType\AuthorityContextType
    {
        return $this->AuthorityContext;
    }
    /**
     * Set AuthorityContext value
     * @param \ItkDev\Serviceplatformen\SF1600\StructType\AuthorityContextType $authorityContext
     * @return \ItkDev\Serviceplatformen\SF1600\StructType\PrintAfsendBrevRequestType
     */
    public function setAuthorityContext(?\ItkDev\Serviceplatformen\SF1600\StructType\AuthorityContextType $authorityContext = null): self
    {
        $this->AuthorityContext = $authorityContext;
        
        return $this;
    }
    /**
     * Get CallContext value
     * @return \ItkDev\Serviceplatformen\SF1600\StructType\CallContextType|null
     */
    public function getCallContext(): ?\ItkDev\Serviceplatformen\SF1600\StructType\CallContextType
    {
        return $this->CallContext;
    }
    /**
     * Set CallContext value
     * @param \ItkDev\Serviceplatformen\SF1600\StructType\CallContextType $callContext
     * @return \ItkDev\Serviceplatformen\SF1600\StructType\PrintAfsendBrevRequestType
     */
    public function setCallContext(?\ItkDev\Serviceplatformen\SF1600\StructType\CallContextType $callContext = null): self
    {
        $this->CallContext = $callContext;
        
        return $this;
    }
}
