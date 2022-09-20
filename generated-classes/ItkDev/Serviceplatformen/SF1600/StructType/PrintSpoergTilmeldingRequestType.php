<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF1600\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PrintSpoergTilmeldingRequestType StructType
 * @subpackage Structs
 */
class PrintSpoergTilmeldingRequestType extends AbstractStructBase
{
    /**
     * The TilmeldingRequest
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \ItkDev\Serviceplatformen\SF1600\StructType\TilmeldingRequestType
     */
    protected \ItkDev\Serviceplatformen\SF1600\StructType\TilmeldingRequestType $TilmeldingRequest;
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
     * Constructor method for PrintSpoergTilmeldingRequestType
     * @uses PrintSpoergTilmeldingRequestType::setTilmeldingRequest()
     * @uses PrintSpoergTilmeldingRequestType::setInvocationContext()
     * @uses PrintSpoergTilmeldingRequestType::setAuthorityContext()
     * @uses PrintSpoergTilmeldingRequestType::setCallContext()
     * @param \ItkDev\Serviceplatformen\SF1600\StructType\TilmeldingRequestType $tilmeldingRequest
     * @param \ItkDev\Serviceplatformen\SF1600\StructType\InvocationContextType $invocationContext
     * @param \ItkDev\Serviceplatformen\SF1600\StructType\AuthorityContextType $authorityContext
     * @param \ItkDev\Serviceplatformen\SF1600\StructType\CallContextType $callContext
     */
    public function __construct(\ItkDev\Serviceplatformen\SF1600\StructType\TilmeldingRequestType $tilmeldingRequest, ?\ItkDev\Serviceplatformen\SF1600\StructType\InvocationContextType $invocationContext = null, ?\ItkDev\Serviceplatformen\SF1600\StructType\AuthorityContextType $authorityContext = null, ?\ItkDev\Serviceplatformen\SF1600\StructType\CallContextType $callContext = null)
    {
        $this
            ->setTilmeldingRequest($tilmeldingRequest)
            ->setInvocationContext($invocationContext)
            ->setAuthorityContext($authorityContext)
            ->setCallContext($callContext);
    }
    /**
     * Get TilmeldingRequest value
     * @return \ItkDev\Serviceplatformen\SF1600\StructType\TilmeldingRequestType
     */
    public function getTilmeldingRequest(): \ItkDev\Serviceplatformen\SF1600\StructType\TilmeldingRequestType
    {
        return $this->TilmeldingRequest;
    }
    /**
     * Set TilmeldingRequest value
     * @param \ItkDev\Serviceplatformen\SF1600\StructType\TilmeldingRequestType $tilmeldingRequest
     * @return \ItkDev\Serviceplatformen\SF1600\StructType\PrintSpoergTilmeldingRequestType
     */
    public function setTilmeldingRequest(\ItkDev\Serviceplatformen\SF1600\StructType\TilmeldingRequestType $tilmeldingRequest): self
    {
        $this->TilmeldingRequest = $tilmeldingRequest;
        
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
     * @return \ItkDev\Serviceplatformen\SF1600\StructType\PrintSpoergTilmeldingRequestType
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
     * @return \ItkDev\Serviceplatformen\SF1600\StructType\PrintSpoergTilmeldingRequestType
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
     * @return \ItkDev\Serviceplatformen\SF1600\StructType\PrintSpoergTilmeldingRequestType
     */
    public function setCallContext(?\ItkDev\Serviceplatformen\SF1600\StructType\CallContextType $callContext = null): self
    {
        $this->CallContext = $callContext;
        
        return $this;
    }
}
