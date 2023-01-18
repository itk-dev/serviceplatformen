<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF1600\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ErrorType StructType
 * @subpackage Structs
 */
class ErrorType extends AbstractStructBase
{
    /**
     * The ErrorCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $ErrorCode;
    /**
     * The ErrorText
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $ErrorText;
    /**
     * Constructor method for ErrorType
     * @uses ErrorType::setErrorCode()
     * @uses ErrorType::setErrorText()
     * @param string $errorCode
     * @param string $errorText
     */
    public function __construct(string $errorCode, string $errorText)
    {
        $this
            ->setErrorCode($errorCode)
            ->setErrorText($errorText);
    }
    /**
     * Get ErrorCode value
     * @return string
     */
    public function getErrorCode(): string
    {
        return $this->ErrorCode;
    }
    /**
     * Set ErrorCode value
     * @param string $errorCode
     * @return \ItkDev\Serviceplatformen\SF1600\StructType\ErrorType
     */
    public function setErrorCode(string $errorCode): self
    {
        // validation for constraint: string
        if (!is_null($errorCode) && !is_string($errorCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($errorCode, true), gettype($errorCode)), __LINE__);
        }
        $this->ErrorCode = $errorCode;
        
        return $this;
    }
    /**
     * Get ErrorText value
     * @return string
     */
    public function getErrorText(): string
    {
        return $this->ErrorText;
    }
    /**
     * Set ErrorText value
     * @param string $errorText
     * @return \ItkDev\Serviceplatformen\SF1600\StructType\ErrorType
     */
    public function setErrorText(string $errorText): self
    {
        // validation for constraint: string
        if (!is_null($errorText) && !is_string($errorText)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($errorText, true), gettype($errorText)), __LINE__);
        }
        $this->ErrorText = $errorText;
        
        return $this;
    }
}
