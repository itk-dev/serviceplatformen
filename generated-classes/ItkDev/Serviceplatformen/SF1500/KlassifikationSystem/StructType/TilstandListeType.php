<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF1500\KlassifikationSystem\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TilstandListeType StructType
 * Meta information extracted from the WSDL
 * - definition: urn:oio:sagdok:facettilstandliste:ADD:2.0.0 | urn:oio:sagdok:klassetilstandliste:ADD:2.0.0 | urn:oio:sagdok:klassifikationtilstandliste:ADD:2.0.0
 * @subpackage Structs
 */
class TilstandListeType extends AbstractStructBase
{
    /**
     * The PubliceretStatus
     * Meta information extracted from the WSDL
     * - content: publiceret
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: facet:PubliceretStatus | klasse:PubliceretStatus | klassifikation:PubliceretStatus
     * @var \ItkDev\Serviceplatformen\SF1500\KlassifikationSystem\StructType\PubliceretStatusType[]
     */
    protected ?array $PubliceretStatus = null;
    /**
     * Constructor method for TilstandListeType
     * @uses TilstandListeType::setPubliceretStatus()
     * @param \ItkDev\Serviceplatformen\SF1500\KlassifikationSystem\StructType\PubliceretStatusType[] $publiceretStatus
     */
    public function __construct(?array $publiceretStatus = null)
    {
        $this
            ->setPubliceretStatus($publiceretStatus);
    }
    /**
     * Get PubliceretStatus value
     * @return \ItkDev\Serviceplatformen\SF1500\KlassifikationSystem\StructType\PubliceretStatusType[]
     */
    public function getPubliceretStatus(): ?array
    {
        return $this->PubliceretStatus;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setPubliceretStatus method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPubliceretStatus method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePubliceretStatusForArrayConstraintFromSetPubliceretStatus(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $tilstandListeTypePubliceretStatusItem) {
            // validation for constraint: itemType
            if (!$tilstandListeTypePubliceretStatusItem instanceof \ItkDev\Serviceplatformen\SF1500\KlassifikationSystem\StructType\PubliceretStatusType) {
                $invalidValues[] = is_object($tilstandListeTypePubliceretStatusItem) ? get_class($tilstandListeTypePubliceretStatusItem) : sprintf('%s(%s)', gettype($tilstandListeTypePubliceretStatusItem), var_export($tilstandListeTypePubliceretStatusItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The PubliceretStatus property can only contain items of type \ItkDev\Serviceplatformen\SF1500\KlassifikationSystem\StructType\PubliceretStatusType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set PubliceretStatus value
     * @throws InvalidArgumentException
     * @param \ItkDev\Serviceplatformen\SF1500\KlassifikationSystem\StructType\PubliceretStatusType[] $publiceretStatus
     * @return \ItkDev\Serviceplatformen\SF1500\KlassifikationSystem\StructType\TilstandListeType
     */
    public function setPubliceretStatus(?array $publiceretStatus = null): self
    {
        // validation for constraint: array
        if ('' !== ($publiceretStatusArrayErrorMessage = self::validatePubliceretStatusForArrayConstraintFromSetPubliceretStatus($publiceretStatus))) {
            throw new InvalidArgumentException($publiceretStatusArrayErrorMessage, __LINE__);
        }
        $this->PubliceretStatus = $publiceretStatus;
        
        return $this;
    }
    /**
     * Add item to PubliceretStatus value
     * @throws InvalidArgumentException
     * @param \ItkDev\Serviceplatformen\SF1500\KlassifikationSystem\StructType\PubliceretStatusType $item
     * @return \ItkDev\Serviceplatformen\SF1500\KlassifikationSystem\StructType\TilstandListeType
     */
    public function addToPubliceretStatus(\ItkDev\Serviceplatformen\SF1500\KlassifikationSystem\StructType\PubliceretStatusType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \ItkDev\Serviceplatformen\SF1500\KlassifikationSystem\StructType\PubliceretStatusType) {
            throw new InvalidArgumentException(sprintf('The PubliceretStatus property can only contain items of type \ItkDev\Serviceplatformen\SF1500\KlassifikationSystem\StructType\PubliceretStatusType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->PubliceretStatus[] = $item;
        
        return $this;
    }
}
