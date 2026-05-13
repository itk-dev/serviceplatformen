<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF2900\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RoutingKLEInfo StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class RoutingKLEInfo extends AbstractStructBase
{
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
     * Constructor method for RoutingKLEInfo
     * @uses RoutingKLEInfo::setRoutingKLEEmne()
     * @uses RoutingKLEInfo::setRoutingHandlingFacet()
     * @param string $routingKLEEmne
     * @param string $routingHandlingFacet
     */
    public function __construct(string $routingKLEEmne, ?string $routingHandlingFacet = null)
    {
        $this
            ->setRoutingKLEEmne($routingKLEEmne)
            ->setRoutingHandlingFacet($routingHandlingFacet);
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
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\RoutingKLEInfo
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
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\RoutingKLEInfo
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
