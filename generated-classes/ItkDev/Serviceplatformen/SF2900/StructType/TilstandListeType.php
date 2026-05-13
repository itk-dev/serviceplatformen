<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF2900\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TilstandListeType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class TilstandListeType extends AbstractStructBase
{
    /**
     * The Tilstand
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var \ItkDev\Serviceplatformen\SF2900\StructType\TilstandType[]
     */
    protected array $Tilstand;
    /**
     * Constructor method for TilstandListeType
     * @uses TilstandListeType::setTilstand()
     * @param \ItkDev\Serviceplatformen\SF2900\StructType\TilstandType[] $tilstand
     */
    public function __construct(array $tilstand)
    {
        $this
            ->setTilstand($tilstand);
    }
    /**
     * Get Tilstand value
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\TilstandType[]
     */
    public function getTilstand(): array
    {
        return $this->Tilstand;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setTilstand method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTilstand method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTilstandForArrayConstraintFromSetTilstand(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $tilstandListeTypeTilstandItem) {
            // validation for constraint: itemType
            if (!$tilstandListeTypeTilstandItem instanceof \ItkDev\Serviceplatformen\SF2900\StructType\TilstandType) {
                $invalidValues[] = is_object($tilstandListeTypeTilstandItem) ? get_class($tilstandListeTypeTilstandItem) : sprintf('%s(%s)', gettype($tilstandListeTypeTilstandItem), var_export($tilstandListeTypeTilstandItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Tilstand property can only contain items of type \ItkDev\Serviceplatformen\SF2900\StructType\TilstandType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Tilstand value
     * @throws InvalidArgumentException
     * @param \ItkDev\Serviceplatformen\SF2900\StructType\TilstandType[] $tilstand
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\TilstandListeType
     */
    public function setTilstand(array $tilstand): self
    {
        // validation for constraint: array
        if ('' !== ($tilstandArrayErrorMessage = self::validateTilstandForArrayConstraintFromSetTilstand($tilstand))) {
            throw new InvalidArgumentException($tilstandArrayErrorMessage, __LINE__);
        }
        $this->Tilstand = $tilstand;
        
        return $this;
    }
    /**
     * Add item to Tilstand value
     * @throws InvalidArgumentException
     * @param \ItkDev\Serviceplatformen\SF2900\StructType\TilstandType $item
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\TilstandListeType
     */
    public function addToTilstand(\ItkDev\Serviceplatformen\SF2900\StructType\TilstandType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \ItkDev\Serviceplatformen\SF2900\StructType\TilstandType) {
            throw new InvalidArgumentException(sprintf('The Tilstand property can only contain items of type \ItkDev\Serviceplatformen\SF2900\StructType\TilstandType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Tilstand[] = $item;
        
        return $this;
    }
}
