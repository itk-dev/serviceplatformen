<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF1500\Myndighed\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UuidLabelInputType StructType
 * Meta information extracted from the WSDL
 * - definition: urn:oio:sagdok:unikidwithlabel:ADD:1.0.0
 * @subpackage Structs
 */
class UuidLabelInputType extends UnikIdType
{
    /**
     * The Label
     * Meta information extracted from the WSDL
     * - content: label
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Label = null;
    /**
     * Constructor method for UuidLabelInputType
     * @uses UuidLabelInputType::setLabel()
     * @param string $label
     */
    public function __construct(?string $label = null)
    {
        $this
            ->setLabel($label);
    }
    /**
     * Get Label value
     * @return string|null
     */
    public function getLabel(): ?string
    {
        return $this->Label;
    }
    /**
     * Set Label value
     * @param string $label
     * @return \ItkDev\Serviceplatformen\SF1500\Myndighed\StructType\UuidLabelInputType
     */
    public function setLabel(?string $label = null): self
    {
        // validation for constraint: string
        if (!is_null($label) && !is_string($label)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($label, true), gettype($label)), __LINE__);
        }
        $this->Label = $label;
        
        return $this;
    }
}
