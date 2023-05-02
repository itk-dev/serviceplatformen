<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF1500\KlassifikationSystem\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ImportOutputElementType StructType
 * Meta information extracted from the WSDL
 * - definition: urn:oio:sagdok:stsimportoutputelement:ADD:2.0.0
 * @subpackage Structs
 */
class ImportOutputElementType extends BasicOutputType
{
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
     * The ObjektType
     * Meta information extracted from the WSDL
     * - content: objekttype
     * @var string|null
     */
    protected ?string $ObjektType = null;
    /**
     * Constructor method for ImportOutputElementType
     * @uses ImportOutputElementType::setUUIDIdentifikator()
     * @uses ImportOutputElementType::setObjektType()
     * @param string $uUIDIdentifikator
     * @param string $objektType
     */
    public function __construct(?string $uUIDIdentifikator = null, ?string $objektType = null)
    {
        $this
            ->setUUIDIdentifikator($uUIDIdentifikator)
            ->setObjektType($objektType);
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
     * @return \ItkDev\Serviceplatformen\SF1500\KlassifikationSystem\StructType\ImportOutputElementType
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
    /**
     * Get ObjektType value
     * @return string|null
     */
    public function getObjektType(): ?string
    {
        return $this->ObjektType;
    }
    /**
     * Set ObjektType value
     * @uses \ItkDev\Serviceplatformen\SF1500\KlassifikationSystem\EnumType\KlassifikationObjektType::valueIsValid()
     * @uses \ItkDev\Serviceplatformen\SF1500\KlassifikationSystem\EnumType\KlassifikationObjektType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $objektType
     * @return \ItkDev\Serviceplatformen\SF1500\KlassifikationSystem\StructType\ImportOutputElementType
     */
    public function setObjektType(?string $objektType = null): self
    {
        // validation for constraint: enumeration
        if (!\ItkDev\Serviceplatformen\SF1500\KlassifikationSystem\EnumType\KlassifikationObjektType::valueIsValid($objektType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \ItkDev\Serviceplatformen\SF1500\KlassifikationSystem\EnumType\KlassifikationObjektType', is_array($objektType) ? implode(', ', $objektType) : var_export($objektType, true), implode(', ', \ItkDev\Serviceplatformen\SF1500\KlassifikationSystem\EnumType\KlassifikationObjektType::getValidValues())), __LINE__);
        }
        $this->ObjektType = $objektType;
        
        return $this;
    }
}
