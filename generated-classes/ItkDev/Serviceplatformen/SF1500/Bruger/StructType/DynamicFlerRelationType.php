<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF1500\Bruger\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DynamicFlerRelationType StructType
 * @subpackage Structs
 */
class DynamicFlerRelationType extends FlerRelationType
{
    /**
     * The Rolle
     * Meta information extracted from the WSDL
     * - content: rolle
     * - minOccurs: 1
     * @var \ItkDev\Serviceplatformen\SF1500\Bruger\StructType\UuidLabelInputType
     */
    protected \ItkDev\Serviceplatformen\SF1500\Bruger\StructType\UuidLabelInputType $Rolle;
    /**
     * The Type
     * Meta information extracted from the WSDL
     * - content: type
     * - minOccurs: 1
     * @var \ItkDev\Serviceplatformen\SF1500\Bruger\StructType\UuidLabelInputType
     */
    protected \ItkDev\Serviceplatformen\SF1500\Bruger\StructType\UuidLabelInputType $Type;
    /**
     * The Indeks
     * Meta information extracted from the WSDL
     * - content: indeks
     * - minOccurs: 1
     * @var string
     */
    protected string $Indeks;
    /**
     * Constructor method for DynamicFlerRelationType
     * @uses DynamicFlerRelationType::setRolle()
     * @uses DynamicFlerRelationType::setType()
     * @uses DynamicFlerRelationType::setIndeks()
     * @param \ItkDev\Serviceplatformen\SF1500\Bruger\StructType\UuidLabelInputType $rolle
     * @param \ItkDev\Serviceplatformen\SF1500\Bruger\StructType\UuidLabelInputType $type
     * @param string $indeks
     */
    public function __construct(\ItkDev\Serviceplatformen\SF1500\Bruger\StructType\UuidLabelInputType $rolle, \ItkDev\Serviceplatformen\SF1500\Bruger\StructType\UuidLabelInputType $type, string $indeks)
    {
        $this
            ->setRolle($rolle)
            ->setType($type)
            ->setIndeks($indeks);
    }
    /**
     * Get Rolle value
     * @return \ItkDev\Serviceplatformen\SF1500\Bruger\StructType\UuidLabelInputType
     */
    public function getRolle(): \ItkDev\Serviceplatformen\SF1500\Bruger\StructType\UuidLabelInputType
    {
        return $this->Rolle;
    }
    /**
     * Set Rolle value
     * @param \ItkDev\Serviceplatformen\SF1500\Bruger\StructType\UuidLabelInputType $rolle
     * @return \ItkDev\Serviceplatformen\SF1500\Bruger\StructType\DynamicFlerRelationType
     */
    public function setRolle(\ItkDev\Serviceplatformen\SF1500\Bruger\StructType\UuidLabelInputType $rolle): self
    {
        $this->Rolle = $rolle;
        
        return $this;
    }
    /**
     * Get Type value
     * @return \ItkDev\Serviceplatformen\SF1500\Bruger\StructType\UuidLabelInputType
     */
    public function getType(): \ItkDev\Serviceplatformen\SF1500\Bruger\StructType\UuidLabelInputType
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @param \ItkDev\Serviceplatformen\SF1500\Bruger\StructType\UuidLabelInputType $type
     * @return \ItkDev\Serviceplatformen\SF1500\Bruger\StructType\DynamicFlerRelationType
     */
    public function setType(\ItkDev\Serviceplatformen\SF1500\Bruger\StructType\UuidLabelInputType $type): self
    {
        $this->Type = $type;
        
        return $this;
    }
    /**
     * Get Indeks value
     * @return string
     */
    public function getIndeks(): string
    {
        return $this->Indeks;
    }
    /**
     * Set Indeks value
     * @param string $indeks
     * @return \ItkDev\Serviceplatformen\SF1500\Bruger\StructType\DynamicFlerRelationType
     */
    public function setIndeks(string $indeks): self
    {
        // validation for constraint: string
        if (!is_null($indeks) && !is_string($indeks)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($indeks, true), gettype($indeks)), __LINE__);
        }
        $this->Indeks = $indeks;
        
        return $this;
    }
}
