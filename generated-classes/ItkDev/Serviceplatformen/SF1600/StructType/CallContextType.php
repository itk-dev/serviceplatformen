<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF1600\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CallContextType StructType
 * @subpackage Structs
 */
class CallContextType extends AbstractStructBase
{
    /**
     * The OnBehalfOfUser
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 255
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: tns:OnBehalfOfUser
     * @var string|null
     */
    protected ?string $OnBehalfOfUser = null;
    /**
     * The CallersServiceCallIdentifier
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 255
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: tns:CallersServiceCallIdentifier
     * @var string|null
     */
    protected ?string $CallersServiceCallIdentifier = null;
    /**
     * The AccountingInfo
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 255
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: tns:AccountingInfo
     * @var string|null
     */
    protected ?string $AccountingInfo = null;
    /**
     * Constructor method for CallContextType
     * @uses CallContextType::setOnBehalfOfUser()
     * @uses CallContextType::setCallersServiceCallIdentifier()
     * @uses CallContextType::setAccountingInfo()
     * @param string $onBehalfOfUser
     * @param string $callersServiceCallIdentifier
     * @param string $accountingInfo
     */
    public function __construct(?string $onBehalfOfUser = null, ?string $callersServiceCallIdentifier = null, ?string $accountingInfo = null)
    {
        $this
            ->setOnBehalfOfUser($onBehalfOfUser)
            ->setCallersServiceCallIdentifier($callersServiceCallIdentifier)
            ->setAccountingInfo($accountingInfo);
    }
    /**
     * Get OnBehalfOfUser value
     * @return string|null
     */
    public function getOnBehalfOfUser(): ?string
    {
        return $this->OnBehalfOfUser;
    }
    /**
     * Set OnBehalfOfUser value
     * @param string $onBehalfOfUser
     * @return \ItkDev\Serviceplatformen\SF1600\StructType\CallContextType
     */
    public function setOnBehalfOfUser(?string $onBehalfOfUser = null): self
    {
        // validation for constraint: string
        if (!is_null($onBehalfOfUser) && !is_string($onBehalfOfUser)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($onBehalfOfUser, true), gettype($onBehalfOfUser)), __LINE__);
        }
        // validation for constraint: maxLength(255)
        if (!is_null($onBehalfOfUser) && mb_strlen((string) $onBehalfOfUser) > 255) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 255', mb_strlen((string) $onBehalfOfUser)), __LINE__);
        }
        $this->OnBehalfOfUser = $onBehalfOfUser;
        
        return $this;
    }
    /**
     * Get CallersServiceCallIdentifier value
     * @return string|null
     */
    public function getCallersServiceCallIdentifier(): ?string
    {
        return $this->CallersServiceCallIdentifier;
    }
    /**
     * Set CallersServiceCallIdentifier value
     * @param string $callersServiceCallIdentifier
     * @return \ItkDev\Serviceplatformen\SF1600\StructType\CallContextType
     */
    public function setCallersServiceCallIdentifier(?string $callersServiceCallIdentifier = null): self
    {
        // validation for constraint: string
        if (!is_null($callersServiceCallIdentifier) && !is_string($callersServiceCallIdentifier)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($callersServiceCallIdentifier, true), gettype($callersServiceCallIdentifier)), __LINE__);
        }
        // validation for constraint: maxLength(255)
        if (!is_null($callersServiceCallIdentifier) && mb_strlen((string) $callersServiceCallIdentifier) > 255) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 255', mb_strlen((string) $callersServiceCallIdentifier)), __LINE__);
        }
        $this->CallersServiceCallIdentifier = $callersServiceCallIdentifier;
        
        return $this;
    }
    /**
     * Get AccountingInfo value
     * @return string|null
     */
    public function getAccountingInfo(): ?string
    {
        return $this->AccountingInfo;
    }
    /**
     * Set AccountingInfo value
     * @param string $accountingInfo
     * @return \ItkDev\Serviceplatformen\SF1600\StructType\CallContextType
     */
    public function setAccountingInfo(?string $accountingInfo = null): self
    {
        // validation for constraint: string
        if (!is_null($accountingInfo) && !is_string($accountingInfo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountingInfo, true), gettype($accountingInfo)), __LINE__);
        }
        // validation for constraint: maxLength(255)
        if (!is_null($accountingInfo) && mb_strlen((string) $accountingInfo) > 255) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 255', mb_strlen((string) $accountingInfo)), __LINE__);
        }
        $this->AccountingInfo = $accountingInfo;
        
        return $this;
    }
}
