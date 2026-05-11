<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF2900\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FordelingsobjektAfsendRequestType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class FordelingsobjektAfsendRequestType extends AbstractStructBase
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
     * Constructor method for FordelingsobjektAfsendRequestType
     * @uses FordelingsobjektAfsendRequestType::setAnmodning()
     * @uses FordelingsobjektAfsendRequestType::setCallContext()
     * @uses FordelingsobjektAfsendRequestType::setAuthorityContext()
     * @param \ItkDev\Serviceplatformen\SF2900\StructType\AnmodRequestType $anmodning
     * @param \ItkDev\Serviceplatformen\SF2900\StructType\CallContextType $callContext
     * @param \ItkDev\Serviceplatformen\SF2900\StructType\AuthorityContextType $authorityContext
     */
    public function __construct(\ItkDev\Serviceplatformen\SF2900\StructType\AnmodRequestType $anmodning, ?\ItkDev\Serviceplatformen\SF2900\StructType\CallContextType $callContext = null, ?\ItkDev\Serviceplatformen\SF2900\StructType\AuthorityContextType $authorityContext = null)
    {
        $this
            ->setAnmodning($anmodning)
            ->setCallContext($callContext)
            ->setAuthorityContext($authorityContext);
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
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\FordelingsobjektAfsendRequestType
     */
    public function setAnmodning(\ItkDev\Serviceplatformen\SF2900\StructType\AnmodRequestType $anmodning): self
    {
        $this->anmodning = $anmodning;
        
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
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\FordelingsobjektAfsendRequestType
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
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\FordelingsobjektAfsendRequestType
     */
    public function setAuthorityContext(?\ItkDev\Serviceplatformen\SF2900\StructType\AuthorityContextType $authorityContext = null): self
    {
        $this->AuthorityContext = $authorityContext;
        
        return $this;
    }
}
