<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF1500\Person\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AttributListeType StructType
 * Meta information extracted from the WSDL
 * - definition: urn:oio:sagdok:personattributliste:ADD:2.0.0
 * @subpackage Structs
 */
class AttributListeType extends AbstractStructBase
{
    /**
     * The Egenskab
     * Meta information extracted from the WSDL
     * - content: egenskaber
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: person:Egenskab
     * @var \ItkDev\Serviceplatformen\SF1500\Person\StructType\EgenskabType[]
     */
    protected ?array $Egenskab = null;
    /**
     * Constructor method for AttributListeType
     * @uses AttributListeType::setEgenskab()
     * @param \ItkDev\Serviceplatformen\SF1500\Person\StructType\EgenskabType[] $egenskab
     */
    public function __construct(?array $egenskab = null)
    {
        $this
            ->setEgenskab($egenskab);
    }
    /**
     * Get Egenskab value
     * @return \ItkDev\Serviceplatformen\SF1500\Person\StructType\EgenskabType[]
     */
    public function getEgenskab(): ?array
    {
        return $this->Egenskab;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setEgenskab method
     * This method is willingly generated in order to preserve the one-line inline validation within the setEgenskab method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateEgenskabForArrayConstraintFromSetEgenskab(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $attributListeTypeEgenskabItem) {
            // validation for constraint: itemType
            if (!$attributListeTypeEgenskabItem instanceof \ItkDev\Serviceplatformen\SF1500\Person\StructType\EgenskabType) {
                $invalidValues[] = is_object($attributListeTypeEgenskabItem) ? get_class($attributListeTypeEgenskabItem) : sprintf('%s(%s)', gettype($attributListeTypeEgenskabItem), var_export($attributListeTypeEgenskabItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Egenskab property can only contain items of type \ItkDev\Serviceplatformen\SF1500\Person\StructType\EgenskabType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Egenskab value
     * @throws InvalidArgumentException
     * @param \ItkDev\Serviceplatformen\SF1500\Person\StructType\EgenskabType[] $egenskab
     * @return \ItkDev\Serviceplatformen\SF1500\Person\StructType\AttributListeType
     */
    public function setEgenskab(?array $egenskab = null): self
    {
        // validation for constraint: array
        if ('' !== ($egenskabArrayErrorMessage = self::validateEgenskabForArrayConstraintFromSetEgenskab($egenskab))) {
            throw new InvalidArgumentException($egenskabArrayErrorMessage, __LINE__);
        }
        $this->Egenskab = $egenskab;
        
        return $this;
    }
    /**
     * Add item to Egenskab value
     * @throws InvalidArgumentException
     * @param \ItkDev\Serviceplatformen\SF1500\Person\StructType\EgenskabType $item
     * @return \ItkDev\Serviceplatformen\SF1500\Person\StructType\AttributListeType
     */
    public function addToEgenskab(\ItkDev\Serviceplatformen\SF1500\Person\StructType\EgenskabType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \ItkDev\Serviceplatformen\SF1500\Person\StructType\EgenskabType) {
            throw new InvalidArgumentException(sprintf('The Egenskab property can only contain items of type \ItkDev\Serviceplatformen\SF1500\Person\StructType\EgenskabType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Egenskab[] = $item;
        
        return $this;
    }
}
