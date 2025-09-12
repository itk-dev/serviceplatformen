<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF2900\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FordelingsmodtagerValiderRequestType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class FordelingsmodtagerValiderRequestType extends AbstractStructBase
{
    /**
     * The AfsendendeMyndighed
     * Meta information extracted from the WSDL
     * - base: xsd:string | string
     * - maxOccurs: 1
     * - minOccurs: 1
     * - pattern: [0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9]
     * @var string
     */
    protected string $AfsendendeMyndighed;
    /**
     * The RoutingListe
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \ItkDev\Serviceplatformen\SF2900\StructType\RoutingListeType
     */
    protected \ItkDev\Serviceplatformen\SF2900\StructType\RoutingListeType $RoutingListe;
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
     * Constructor method for FordelingsmodtagerValiderRequestType
     * @uses FordelingsmodtagerValiderRequestType::setAfsendendeMyndighed()
     * @uses FordelingsmodtagerValiderRequestType::setRoutingListe()
     * @uses FordelingsmodtagerValiderRequestType::setCallContext()
     * @uses FordelingsmodtagerValiderRequestType::setAuthorityContext()
     * @param string $afsendendeMyndighed
     * @param \ItkDev\Serviceplatformen\SF2900\StructType\RoutingListeType $routingListe
     * @param \ItkDev\Serviceplatformen\SF2900\StructType\CallContextType $callContext
     * @param \ItkDev\Serviceplatformen\SF2900\StructType\AuthorityContextType $authorityContext
     */
    public function __construct(string $afsendendeMyndighed, \ItkDev\Serviceplatformen\SF2900\StructType\RoutingListeType $routingListe, ?\ItkDev\Serviceplatformen\SF2900\StructType\CallContextType $callContext = null, ?\ItkDev\Serviceplatformen\SF2900\StructType\AuthorityContextType $authorityContext = null)
    {
        $this
            ->setAfsendendeMyndighed($afsendendeMyndighed)
            ->setRoutingListe($routingListe)
            ->setCallContext($callContext)
            ->setAuthorityContext($authorityContext);
    }
    /**
     * Get AfsendendeMyndighed value
     * @return string
     */
    public function getAfsendendeMyndighed(): string
    {
        return $this->AfsendendeMyndighed;
    }
    /**
     * Set AfsendendeMyndighed value
     * @param string $afsendendeMyndighed
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\FordelingsmodtagerValiderRequestType
     */
    public function setAfsendendeMyndighed(string $afsendendeMyndighed): self
    {
        // validation for constraint: string
        if (!is_null($afsendendeMyndighed) && !is_string($afsendendeMyndighed)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($afsendendeMyndighed, true), gettype($afsendendeMyndighed)), __LINE__);
        }
        // validation for constraint: pattern([0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9])
        if (!is_null($afsendendeMyndighed) && !preg_match('/[0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9]/', (string) $afsendendeMyndighed)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9]/', var_export($afsendendeMyndighed, true)), __LINE__);
        }
        $this->AfsendendeMyndighed = $afsendendeMyndighed;
        
        return $this;
    }
    /**
     * Get RoutingListe value
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\RoutingListeType
     */
    public function getRoutingListe(): \ItkDev\Serviceplatformen\SF2900\StructType\RoutingListeType
    {
        return $this->RoutingListe;
    }
    /**
     * Set RoutingListe value
     * @param \ItkDev\Serviceplatformen\SF2900\StructType\RoutingListeType $routingListe
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\FordelingsmodtagerValiderRequestType
     */
    public function setRoutingListe(\ItkDev\Serviceplatformen\SF2900\StructType\RoutingListeType $routingListe): self
    {
        $this->RoutingListe = $routingListe;
        
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
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\FordelingsmodtagerValiderRequestType
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
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\FordelingsmodtagerValiderRequestType
     */
    public function setAuthorityContext(?\ItkDev\Serviceplatformen\SF2900\StructType\AuthorityContextType $authorityContext = null): self
    {
        $this->AuthorityContext = $authorityContext;
        
        return $this;
    }
}
