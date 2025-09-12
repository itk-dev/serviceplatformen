<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF2900\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DokumentPartListeType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DokumentPartListeType extends AbstractStructBase
{
    /**
     * The DokumentPart
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var \ItkDev\Serviceplatformen\SF2900\StructType\DokumentPartType[]
     */
    protected array $DokumentPart;
    /**
     * Constructor method for DokumentPartListeType
     * @uses DokumentPartListeType::setDokumentPart()
     * @param \ItkDev\Serviceplatformen\SF2900\StructType\DokumentPartType[] $dokumentPart
     */
    public function __construct(array $dokumentPart)
    {
        $this
            ->setDokumentPart($dokumentPart);
    }
    /**
     * Get DokumentPart value
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\DokumentPartType[]
     */
    public function getDokumentPart(): array
    {
        return $this->DokumentPart;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setDokumentPart method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDokumentPart method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDokumentPartForArrayConstraintFromSetDokumentPart(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $dokumentPartListeTypeDokumentPartItem) {
            // validation for constraint: itemType
            if (!$dokumentPartListeTypeDokumentPartItem instanceof \ItkDev\Serviceplatformen\SF2900\StructType\DokumentPartType) {
                $invalidValues[] = is_object($dokumentPartListeTypeDokumentPartItem) ? get_class($dokumentPartListeTypeDokumentPartItem) : sprintf('%s(%s)', gettype($dokumentPartListeTypeDokumentPartItem), var_export($dokumentPartListeTypeDokumentPartItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The DokumentPart property can only contain items of type \ItkDev\Serviceplatformen\SF2900\StructType\DokumentPartType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set DokumentPart value
     * @throws InvalidArgumentException
     * @param \ItkDev\Serviceplatformen\SF2900\StructType\DokumentPartType[] $dokumentPart
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\DokumentPartListeType
     */
    public function setDokumentPart(array $dokumentPart): self
    {
        // validation for constraint: array
        if ('' !== ($dokumentPartArrayErrorMessage = self::validateDokumentPartForArrayConstraintFromSetDokumentPart($dokumentPart))) {
            throw new InvalidArgumentException($dokumentPartArrayErrorMessage, __LINE__);
        }
        $this->DokumentPart = $dokumentPart;
        
        return $this;
    }
    /**
     * Add item to DokumentPart value
     * @throws InvalidArgumentException
     * @param \ItkDev\Serviceplatformen\SF2900\StructType\DokumentPartType $item
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\DokumentPartListeType
     */
    public function addToDokumentPart(\ItkDev\Serviceplatformen\SF2900\StructType\DokumentPartType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \ItkDev\Serviceplatformen\SF2900\StructType\DokumentPartType) {
            throw new InvalidArgumentException(sprintf('The DokumentPart property can only contain items of type \ItkDev\Serviceplatformen\SF2900\StructType\DokumentPartType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->DokumentPart[] = $item;
        
        return $this;
    }
}
