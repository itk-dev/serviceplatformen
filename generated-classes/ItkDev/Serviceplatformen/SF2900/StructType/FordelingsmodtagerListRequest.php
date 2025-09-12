<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF2900\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FordelingsmodtagerListRequest StructType
 * Meta information extracted from the WSDL
 * - type: tns:FordelingsmodtagerListRequestType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class FordelingsmodtagerListRequest extends AbstractStructBase
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
     * The RoutingMyndighed
     * Meta information extracted from the WSDL
     * - base: xsd:string | string
     * - maxOccurs: 1
     * - minOccurs: 1
     * - pattern: [0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9]
     * @var string
     */
    protected string $RoutingMyndighed;
    /**
     * The RoutingKLEEmne
     * Meta information extracted from the WSDL
     * - base: string
     * - maxOccurs: 1
     * - minOccurs: 1
     * - pattern: [0-9][0-9][.][0-9][0-9][.][0-9][0-9]
     * @var string
     */
    protected string $RoutingKLEEmne;
    /**
     * The RoutingHandlingFacet
     * Meta information extracted from the WSDL
     * - base: string
     * - maxOccurs: 1
     * - minOccurs: 0
     * - pattern: [A-Z,Æ,Ø,Å][0-9][0-9]
     * @var string|null
     */
    protected ?string $RoutingHandlingFacet = null;
    /**
     * Constructor method for FordelingsmodtagerListRequest
     * @uses FordelingsmodtagerListRequest::setAfsendendeMyndighed()
     * @uses FordelingsmodtagerListRequest::setRoutingMyndighed()
     * @uses FordelingsmodtagerListRequest::setRoutingKLEEmne()
     * @uses FordelingsmodtagerListRequest::setRoutingHandlingFacet()
     * @param string $afsendendeMyndighed
     * @param string $routingMyndighed
     * @param string $routingKLEEmne
     * @param string $routingHandlingFacet
     */
    public function __construct(string $afsendendeMyndighed, string $routingMyndighed, string $routingKLEEmne, ?string $routingHandlingFacet = null)
    {
        $this
            ->setAfsendendeMyndighed($afsendendeMyndighed)
            ->setRoutingMyndighed($routingMyndighed)
            ->setRoutingKLEEmne($routingKLEEmne)
            ->setRoutingHandlingFacet($routingHandlingFacet);
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
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\FordelingsmodtagerListRequest
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
     * Get RoutingMyndighed value
     * @return string
     */
    public function getRoutingMyndighed(): string
    {
        return $this->RoutingMyndighed;
    }
    /**
     * Set RoutingMyndighed value
     * @param string $routingMyndighed
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\FordelingsmodtagerListRequest
     */
    public function setRoutingMyndighed(string $routingMyndighed): self
    {
        // validation for constraint: string
        if (!is_null($routingMyndighed) && !is_string($routingMyndighed)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($routingMyndighed, true), gettype($routingMyndighed)), __LINE__);
        }
        // validation for constraint: pattern([0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9])
        if (!is_null($routingMyndighed) && !preg_match('/[0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9]/', (string) $routingMyndighed)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9]/', var_export($routingMyndighed, true)), __LINE__);
        }
        $this->RoutingMyndighed = $routingMyndighed;
        
        return $this;
    }
    /**
     * Get RoutingKLEEmne value
     * @return string
     */
    public function getRoutingKLEEmne(): string
    {
        return $this->RoutingKLEEmne;
    }
    /**
     * Set RoutingKLEEmne value
     * @param string $routingKLEEmne
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\FordelingsmodtagerListRequest
     */
    public function setRoutingKLEEmne(string $routingKLEEmne): self
    {
        // validation for constraint: string
        if (!is_null($routingKLEEmne) && !is_string($routingKLEEmne)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($routingKLEEmne, true), gettype($routingKLEEmne)), __LINE__);
        }
        // validation for constraint: pattern([0-9][0-9][.][0-9][0-9][.][0-9][0-9])
        if (!is_null($routingKLEEmne) && !preg_match('/[0-9][0-9][.][0-9][0-9][.][0-9][0-9]/', (string) $routingKLEEmne)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[0-9][0-9][.][0-9][0-9][.][0-9][0-9]/', var_export($routingKLEEmne, true)), __LINE__);
        }
        $this->RoutingKLEEmne = $routingKLEEmne;
        
        return $this;
    }
    /**
     * Get RoutingHandlingFacet value
     * @return string|null
     */
    public function getRoutingHandlingFacet(): ?string
    {
        return $this->RoutingHandlingFacet;
    }
    /**
     * Set RoutingHandlingFacet value
     * @param string $routingHandlingFacet
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\FordelingsmodtagerListRequest
     */
    public function setRoutingHandlingFacet(?string $routingHandlingFacet = null): self
    {
        // validation for constraint: string
        if (!is_null($routingHandlingFacet) && !is_string($routingHandlingFacet)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($routingHandlingFacet, true), gettype($routingHandlingFacet)), __LINE__);
        }
        // validation for constraint: pattern([A-Z,Æ,Ø,Å][0-9][0-9])
        if (!is_null($routingHandlingFacet) && !preg_match('/[A-Z,Æ,Ø,Å][0-9][0-9]/', (string) $routingHandlingFacet)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[A-Z,Æ,Ø,Å][0-9][0-9]/', var_export($routingHandlingFacet, true)), __LINE__);
        }
        $this->RoutingHandlingFacet = $routingHandlingFacet;
        
        return $this;
    }
}
