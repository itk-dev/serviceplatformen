<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF1500\Klassifikation\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RequestHeaderType StructType
 * @subpackage Structs
 */
class RequestHeaderType extends AbstractStructBase
{
    /**
     * The TransactionUUID
     * Meta information extracted from the WSDL
     * - base: tns:UUIDType
     * - minLength: 1
     * - ref: tns:TransactionUUID
     * @var string|null
     */
    protected ?string $TransactionUUID = null;
    /**
     * Constructor method for RequestHeaderType
     * @uses RequestHeaderType::setTransactionUUID()
     * @param string $transactionUUID
     */
    public function __construct(?string $transactionUUID = null)
    {
        $this
            ->setTransactionUUID($transactionUUID);
    }
    /**
     * Get TransactionUUID value
     * @return string|null
     */
    public function getTransactionUUID(): ?string
    {
        return $this->TransactionUUID;
    }
    /**
     * Set TransactionUUID value
     * @param string $transactionUUID
     * @return \ItkDev\Serviceplatformen\SF1500\Klassifikation\StructType\RequestHeaderType
     */
    public function setTransactionUUID(?string $transactionUUID = null): self
    {
        // validation for constraint: string
        if (!is_null($transactionUUID) && !is_string($transactionUUID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($transactionUUID, true), gettype($transactionUUID)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($transactionUUID) && mb_strlen((string) $transactionUUID) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $transactionUUID)), __LINE__);
        }
        $this->TransactionUUID = $transactionUUID;
        
        return $this;
    }
}
