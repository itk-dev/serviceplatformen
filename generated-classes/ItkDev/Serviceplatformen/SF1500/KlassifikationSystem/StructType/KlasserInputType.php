<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF1500\KlassifikationSystem\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for KlasserInputType StructType
 * Meta information extracted from the WSDL
 * - definition: urn:oio:sts:klasser:ADD:2.0.0
 * @subpackage Structs
 */
class KlasserInputType extends AbstractStructBase
{
    /**
     * The Klasse
     * Meta information extracted from the WSDL
     * - content: urn:oio:sagdok:klasse:ADD:2.0.0
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: klasse:Klasse
     * @var \ItkDev\Serviceplatformen\SF1500\KlassifikationSystem\StructType\KlasseType[]
     */
    protected ?array $Klasse = null;
    /**
     * Constructor method for KlasserInputType
     * @uses KlasserInputType::setKlasse()
     * @param \ItkDev\Serviceplatformen\SF1500\KlassifikationSystem\StructType\KlasseType[] $klasse
     */
    public function __construct(?array $klasse = null)
    {
        $this
            ->setKlasse($klasse);
    }
    /**
     * Get Klasse value
     * @return \ItkDev\Serviceplatformen\SF1500\KlassifikationSystem\StructType\KlasseType[]
     */
    public function getKlasse(): ?array
    {
        return $this->Klasse;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setKlasse method
     * This method is willingly generated in order to preserve the one-line inline validation within the setKlasse method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateKlasseForArrayConstraintFromSetKlasse(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $klasserInputTypeKlasseItem) {
            // validation for constraint: itemType
            if (!$klasserInputTypeKlasseItem instanceof \ItkDev\Serviceplatformen\SF1500\KlassifikationSystem\StructType\KlasseType) {
                $invalidValues[] = is_object($klasserInputTypeKlasseItem) ? get_class($klasserInputTypeKlasseItem) : sprintf('%s(%s)', gettype($klasserInputTypeKlasseItem), var_export($klasserInputTypeKlasseItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Klasse property can only contain items of type \ItkDev\Serviceplatformen\SF1500\KlassifikationSystem\StructType\KlasseType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Klasse value
     * @throws InvalidArgumentException
     * @param \ItkDev\Serviceplatformen\SF1500\KlassifikationSystem\StructType\KlasseType[] $klasse
     * @return \ItkDev\Serviceplatformen\SF1500\KlassifikationSystem\StructType\KlasserInputType
     */
    public function setKlasse(?array $klasse = null): self
    {
        // validation for constraint: array
        if ('' !== ($klasseArrayErrorMessage = self::validateKlasseForArrayConstraintFromSetKlasse($klasse))) {
            throw new InvalidArgumentException($klasseArrayErrorMessage, __LINE__);
        }
        $this->Klasse = $klasse;
        
        return $this;
    }
    /**
     * Add item to Klasse value
     * @throws InvalidArgumentException
     * @param \ItkDev\Serviceplatformen\SF1500\KlassifikationSystem\StructType\KlasseType $item
     * @return \ItkDev\Serviceplatformen\SF1500\KlassifikationSystem\StructType\KlasserInputType
     */
    public function addToKlasse(\ItkDev\Serviceplatformen\SF1500\KlassifikationSystem\StructType\KlasseType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \ItkDev\Serviceplatformen\SF1500\KlassifikationSystem\StructType\KlasseType) {
            throw new InvalidArgumentException(sprintf('The Klasse property can only contain items of type \ItkDev\Serviceplatformen\SF1500\KlassifikationSystem\StructType\KlasseType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Klasse[] = $item;
        
        return $this;
    }
}
