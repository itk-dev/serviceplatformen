<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF2900\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RoutingType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class RoutingType extends AbstractStructBase
{
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
     * The RoutingModtagerAktoer
     * Meta information extracted from the WSDL
     * - base: string
     * - maxOccurs: 1
     * - minOccurs: 1
     * - pattern: [a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}
     * @var string
     */
    protected string $RoutingModtagerAktoer;
    /**
     * Constructor method for RoutingType
     * @uses RoutingType::setRoutingMyndighed()
     * @uses RoutingType::setRoutingModtagerAktoer()
     * @param string $routingMyndighed
     * @param string $routingModtagerAktoer
     */
    public function __construct(string $routingMyndighed, string $routingModtagerAktoer)
    {
        $this
            ->setRoutingMyndighed($routingMyndighed)
            ->setRoutingModtagerAktoer($routingModtagerAktoer);
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
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\RoutingType
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
     * Get RoutingModtagerAktoer value
     * @return string
     */
    public function getRoutingModtagerAktoer(): string
    {
        return $this->RoutingModtagerAktoer;
    }
    /**
     * Set RoutingModtagerAktoer value
     * @param string $routingModtagerAktoer
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\RoutingType
     */
    public function setRoutingModtagerAktoer(string $routingModtagerAktoer): self
    {
        // validation for constraint: string
        if (!is_null($routingModtagerAktoer) && !is_string($routingModtagerAktoer)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($routingModtagerAktoer, true), gettype($routingModtagerAktoer)), __LINE__);
        }
        // validation for constraint: pattern([a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12})
        if (!is_null($routingModtagerAktoer) && !preg_match('/[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/', (string) $routingModtagerAktoer)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/', var_export($routingModtagerAktoer, true)), __LINE__);
        }
        $this->RoutingModtagerAktoer = $routingModtagerAktoer;
        
        return $this;
    }
}
