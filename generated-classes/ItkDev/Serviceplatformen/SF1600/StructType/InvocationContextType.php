<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF1600\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for InvocationContextType StructType
 * @subpackage Structs
 */
class InvocationContextType extends AbstractStructBase
{
    /**
     * The ServiceAgreementUUID
     * Meta information extracted from the WSDL
     * - base: xsd:string | string | tns:UUIDtype
     * - maxOccurs: 1
     * - minOccurs: 1
     * - pattern: [a-f0-9]{8}-[a-f0-9]{4}-[a-f0-9]{4}-[a-f0-9]{4}-[a-f0-9]{12} | [0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}
     * - ref: tns:ServiceAgreementUUID
     * @var string
     */
    protected string $ServiceAgreementUUID;
    /**
     * The UserSystemUUID
     * Meta information extracted from the WSDL
     * - base: xsd:string | string | tns:UUIDtype
     * - maxOccurs: 1
     * - minOccurs: 1
     * - pattern: [a-f0-9]{8}-[a-f0-9]{4}-[a-f0-9]{4}-[a-f0-9]{4}-[a-f0-9]{12} | [0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}
     * - ref: tns:UserSystemUUID
     * @var string
     */
    protected string $UserSystemUUID;
    /**
     * The UserUUID
     * Meta information extracted from the WSDL
     * - base: xsd:string | string | tns:UUIDtype
     * - maxOccurs: 1
     * - minOccurs: 1
     * - pattern: [a-f0-9]{8}-[a-f0-9]{4}-[a-f0-9]{4}-[a-f0-9]{4}-[a-f0-9]{12} | [0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}
     * - ref: tns:UserUUID
     * @var string
     */
    protected string $UserUUID;
    /**
     * The ServiceUUID
     * Meta information extracted from the WSDL
     * - base: xsd:string | string | tns:UUIDtype
     * - maxOccurs: 1
     * - minOccurs: 1
     * - pattern: [a-f0-9]{8}-[a-f0-9]{4}-[a-f0-9]{4}-[a-f0-9]{4}-[a-f0-9]{12} | [0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}
     * - ref: tns:ServiceUUID
     * @var string
     */
    protected string $ServiceUUID;
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
     * Constructor method for InvocationContextType
     * @uses InvocationContextType::setServiceAgreementUUID()
     * @uses InvocationContextType::setUserSystemUUID()
     * @uses InvocationContextType::setUserUUID()
     * @uses InvocationContextType::setServiceUUID()
     * @uses InvocationContextType::setOnBehalfOfUser()
     * @uses InvocationContextType::setCallersServiceCallIdentifier()
     * @uses InvocationContextType::setAccountingInfo()
     * @param string $serviceAgreementUUID
     * @param string $userSystemUUID
     * @param string $userUUID
     * @param string $serviceUUID
     * @param string $onBehalfOfUser
     * @param string $callersServiceCallIdentifier
     * @param string $accountingInfo
     */
    public function __construct(string $serviceAgreementUUID, string $userSystemUUID, string $userUUID, string $serviceUUID, ?string $onBehalfOfUser = null, ?string $callersServiceCallIdentifier = null, ?string $accountingInfo = null)
    {
        $this
            ->setServiceAgreementUUID($serviceAgreementUUID)
            ->setUserSystemUUID($userSystemUUID)
            ->setUserUUID($userUUID)
            ->setServiceUUID($serviceUUID)
            ->setOnBehalfOfUser($onBehalfOfUser)
            ->setCallersServiceCallIdentifier($callersServiceCallIdentifier)
            ->setAccountingInfo($accountingInfo);
    }
    /**
     * Get ServiceAgreementUUID value
     * @return string
     */
    public function getServiceAgreementUUID(): string
    {
        return $this->ServiceAgreementUUID;
    }
    /**
     * Set ServiceAgreementUUID value
     * @param string $serviceAgreementUUID
     * @return \ItkDev\Serviceplatformen\SF1600\StructType\InvocationContextType
     */
    public function setServiceAgreementUUID(string $serviceAgreementUUID): self
    {
        // validation for constraint: string
        if (!is_null($serviceAgreementUUID) && !is_string($serviceAgreementUUID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($serviceAgreementUUID, true), gettype($serviceAgreementUUID)), __LINE__);
        }
        // validation for constraint: pattern([a-f0-9]{8}-[a-f0-9]{4}-[a-f0-9]{4}-[a-f0-9]{4}-[a-f0-9]{12}, [0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12})
        if (!is_null($serviceAgreementUUID) && !preg_match('/[a-f0-9]{8}-[a-f0-9]{4}-[a-f0-9]{4}-[a-f0-9]{4}-[a-f0-9]{12}|[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}/', $serviceAgreementUUID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[a-f0-9]{8}-[a-f0-9]{4}-[a-f0-9]{4}-[a-f0-9]{4}-[a-f0-9]{12}|[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}/', var_export($serviceAgreementUUID, true)), __LINE__);
        }
        $this->ServiceAgreementUUID = $serviceAgreementUUID;
        
        return $this;
    }
    /**
     * Get UserSystemUUID value
     * @return string
     */
    public function getUserSystemUUID(): string
    {
        return $this->UserSystemUUID;
    }
    /**
     * Set UserSystemUUID value
     * @param string $userSystemUUID
     * @return \ItkDev\Serviceplatformen\SF1600\StructType\InvocationContextType
     */
    public function setUserSystemUUID(string $userSystemUUID): self
    {
        // validation for constraint: string
        if (!is_null($userSystemUUID) && !is_string($userSystemUUID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($userSystemUUID, true), gettype($userSystemUUID)), __LINE__);
        }
        // validation for constraint: pattern([a-f0-9]{8}-[a-f0-9]{4}-[a-f0-9]{4}-[a-f0-9]{4}-[a-f0-9]{12}, [0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12})
        if (!is_null($userSystemUUID) && !preg_match('/[a-f0-9]{8}-[a-f0-9]{4}-[a-f0-9]{4}-[a-f0-9]{4}-[a-f0-9]{12}|[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}/', $userSystemUUID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[a-f0-9]{8}-[a-f0-9]{4}-[a-f0-9]{4}-[a-f0-9]{4}-[a-f0-9]{12}|[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}/', var_export($userSystemUUID, true)), __LINE__);
        }
        $this->UserSystemUUID = $userSystemUUID;
        
        return $this;
    }
    /**
     * Get UserUUID value
     * @return string
     */
    public function getUserUUID(): string
    {
        return $this->UserUUID;
    }
    /**
     * Set UserUUID value
     * @param string $userUUID
     * @return \ItkDev\Serviceplatformen\SF1600\StructType\InvocationContextType
     */
    public function setUserUUID(string $userUUID): self
    {
        // validation for constraint: string
        if (!is_null($userUUID) && !is_string($userUUID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($userUUID, true), gettype($userUUID)), __LINE__);
        }
        // validation for constraint: pattern([a-f0-9]{8}-[a-f0-9]{4}-[a-f0-9]{4}-[a-f0-9]{4}-[a-f0-9]{12}, [0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12})
        if (!is_null($userUUID) && !preg_match('/[a-f0-9]{8}-[a-f0-9]{4}-[a-f0-9]{4}-[a-f0-9]{4}-[a-f0-9]{12}|[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}/', $userUUID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[a-f0-9]{8}-[a-f0-9]{4}-[a-f0-9]{4}-[a-f0-9]{4}-[a-f0-9]{12}|[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}/', var_export($userUUID, true)), __LINE__);
        }
        $this->UserUUID = $userUUID;
        
        return $this;
    }
    /**
     * Get ServiceUUID value
     * @return string
     */
    public function getServiceUUID(): string
    {
        return $this->ServiceUUID;
    }
    /**
     * Set ServiceUUID value
     * @param string $serviceUUID
     * @return \ItkDev\Serviceplatformen\SF1600\StructType\InvocationContextType
     */
    public function setServiceUUID(string $serviceUUID): self
    {
        // validation for constraint: string
        if (!is_null($serviceUUID) && !is_string($serviceUUID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($serviceUUID, true), gettype($serviceUUID)), __LINE__);
        }
        // validation for constraint: pattern([a-f0-9]{8}-[a-f0-9]{4}-[a-f0-9]{4}-[a-f0-9]{4}-[a-f0-9]{12}, [0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12})
        if (!is_null($serviceUUID) && !preg_match('/[a-f0-9]{8}-[a-f0-9]{4}-[a-f0-9]{4}-[a-f0-9]{4}-[a-f0-9]{12}|[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}/', $serviceUUID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[a-f0-9]{8}-[a-f0-9]{4}-[a-f0-9]{4}-[a-f0-9]{4}-[a-f0-9]{12}|[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}/', var_export($serviceUUID, true)), __LINE__);
        }
        $this->ServiceUUID = $serviceUUID;
        
        return $this;
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
     * @return \ItkDev\Serviceplatformen\SF1600\StructType\InvocationContextType
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
     * @return \ItkDev\Serviceplatformen\SF1600\StructType\InvocationContextType
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
     * @return \ItkDev\Serviceplatformen\SF1600\StructType\InvocationContextType
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
