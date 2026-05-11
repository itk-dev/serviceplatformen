<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF2900\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ModtagerMedEndpointType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ModtagerMedEndpointType extends AbstractStructBase
{
    /**
     * The SystemMyndighed
     * Meta information extracted from the WSDL
     * - base: xsd:string | string
     * - maxOccurs: 1
     * - minOccurs: 1
     * - pattern: [0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9]
     * @var string
     */
    protected string $SystemMyndighed;
    /**
     * The SystemUUID
     * Meta information extracted from the WSDL
     * - base: string
     * - maxOccurs: 1
     * - minOccurs: 1
     * - pattern: [a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}
     * @var string
     */
    protected string $SystemUUID;
    /**
     * The SystemNavn
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $SystemNavn;
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
     * Constructor method for ModtagerMedEndpointType
     * @uses ModtagerMedEndpointType::setSystemMyndighed()
     * @uses ModtagerMedEndpointType::setSystemUUID()
     * @uses ModtagerMedEndpointType::setSystemNavn()
     * @uses ModtagerMedEndpointType::setRoutingKLEEmne()
     * @uses ModtagerMedEndpointType::setRoutingHandlingFacet()
     * @param string $systemMyndighed
     * @param string $systemUUID
     * @param string $systemNavn
     * @param string $routingKLEEmne
     * @param string $routingHandlingFacet
     */
    public function __construct(string $systemMyndighed, string $systemUUID, string $systemNavn, string $routingKLEEmne, ?string $routingHandlingFacet = null)
    {
        $this
            ->setSystemMyndighed($systemMyndighed)
            ->setSystemUUID($systemUUID)
            ->setSystemNavn($systemNavn)
            ->setRoutingKLEEmne($routingKLEEmne)
            ->setRoutingHandlingFacet($routingHandlingFacet);
    }
    /**
     * Get SystemMyndighed value
     * @return string
     */
    public function getSystemMyndighed(): string
    {
        return $this->SystemMyndighed;
    }
    /**
     * Set SystemMyndighed value
     * @param string $systemMyndighed
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\ModtagerMedEndpointType
     */
    public function setSystemMyndighed(string $systemMyndighed): self
    {
        // validation for constraint: string
        if (!is_null($systemMyndighed) && !is_string($systemMyndighed)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($systemMyndighed, true), gettype($systemMyndighed)), __LINE__);
        }
        // validation for constraint: pattern([0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9])
        if (!is_null($systemMyndighed) && !preg_match('/[0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9]/', (string) $systemMyndighed)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9]/', var_export($systemMyndighed, true)), __LINE__);
        }
        $this->SystemMyndighed = $systemMyndighed;
        
        return $this;
    }
    /**
     * Get SystemUUID value
     * @return string
     */
    public function getSystemUUID(): string
    {
        return $this->SystemUUID;
    }
    /**
     * Set SystemUUID value
     * @param string $systemUUID
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\ModtagerMedEndpointType
     */
    public function setSystemUUID(string $systemUUID): self
    {
        // validation for constraint: string
        if (!is_null($systemUUID) && !is_string($systemUUID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($systemUUID, true), gettype($systemUUID)), __LINE__);
        }
        // validation for constraint: pattern([a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12})
        if (!is_null($systemUUID) && !preg_match('/[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/', (string) $systemUUID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/', var_export($systemUUID, true)), __LINE__);
        }
        $this->SystemUUID = $systemUUID;
        
        return $this;
    }
    /**
     * Get SystemNavn value
     * @return string
     */
    public function getSystemNavn(): string
    {
        return $this->SystemNavn;
    }
    /**
     * Set SystemNavn value
     * @param string $systemNavn
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\ModtagerMedEndpointType
     */
    public function setSystemNavn(string $systemNavn): self
    {
        // validation for constraint: string
        if (!is_null($systemNavn) && !is_string($systemNavn)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($systemNavn, true), gettype($systemNavn)), __LINE__);
        }
        $this->SystemNavn = $systemNavn;
        
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
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\ModtagerMedEndpointType
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
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\ModtagerMedEndpointType
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
