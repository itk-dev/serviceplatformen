<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF1500\Adresse\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UnikReturType StructType
 * Meta information extracted from the WSDL
 * - definition: urn:oio:sagdok:unikeretur:ADD:1.0.0
 * @subpackage Structs
 */
class UnikReturType extends StandardReturType
{
    /**
     * The Type
     * Meta information extracted from the WSDL
     * - content: type
     * @var string|null
     */
    protected ?string $Type = null;
    /**
     * The UUIDIdentifikator
     * Meta information extracted from the WSDL
     * - base: string
     * - content: uuid
     * - definition: urn:oio:sagdok:uuid:BDD:1.0.0
     * - pattern: [a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}
     * - ref: sd:UUIDIdentifikator
     * @var string|null
     */
    protected ?string $UUIDIdentifikator = null;
    /**
     * Constructor method for UnikReturType
     * @uses UnikReturType::setType()
     * @uses UnikReturType::setUUIDIdentifikator()
     * @param string $type
     * @param string $uUIDIdentifikator
     */
    public function __construct(?string $type = null, ?string $uUIDIdentifikator = null)
    {
        $this
            ->setType($type)
            ->setUUIDIdentifikator($uUIDIdentifikator);
    }
    /**
     * Get Type value
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @param string $type
     * @return \ItkDev\Serviceplatformen\SF1500\Adresse\StructType\UnikReturType
     */
    public function setType(?string $type = null): self
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($type, true), gettype($type)), __LINE__);
        }
        $this->Type = $type;
        
        return $this;
    }
    /**
     * Get UUIDIdentifikator value
     * @return string|null
     */
    public function getUUIDIdentifikator(): ?string
    {
        return $this->UUIDIdentifikator;
    }
    /**
     * Set UUIDIdentifikator value
     * @param string $uUIDIdentifikator
     * @return \ItkDev\Serviceplatformen\SF1500\Adresse\StructType\UnikReturType
     */
    public function setUUIDIdentifikator(?string $uUIDIdentifikator = null): self
    {
        // validation for constraint: string
        if (!is_null($uUIDIdentifikator) && !is_string($uUIDIdentifikator)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($uUIDIdentifikator, true), gettype($uUIDIdentifikator)), __LINE__);
        }
        // validation for constraint: pattern([a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12})
        if (!is_null($uUIDIdentifikator) && !preg_match('/[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/', $uUIDIdentifikator)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/', var_export($uUIDIdentifikator, true)), __LINE__);
        }
        $this->UUIDIdentifikator = $uUIDIdentifikator;
        
        return $this;
    }
}
