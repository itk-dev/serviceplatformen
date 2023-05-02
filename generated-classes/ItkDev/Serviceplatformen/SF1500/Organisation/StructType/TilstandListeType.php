<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF1500\Organisation\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TilstandListeType StructType
 * Meta information extracted from the WSDL
 * - definition: urn:oio:sagdok:organisationtilstandliste:ADD:2.0.0
 * @subpackage Structs
 */
class TilstandListeType extends AbstractStructBase
{
    /**
     * The Gyldighed
     * Meta information extracted from the WSDL
     * - content: gyldighed
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: orgfaelles:Gyldighed
     * @var \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\GyldighedType[]
     */
    protected ?array $Gyldighed = null;
    /**
     * The LokalUdvidelse
     * Meta information extracted from the WSDL
     * - content: lokaludvidelse
     * - minOccurs: 0
     * - ref: sd:LokalUdvidelse
     * @var \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\LokalUdvidelseType|null
     */
    protected ?\ItkDev\Serviceplatformen\SF1500\Organisation\StructType\LokalUdvidelseType $LokalUdvidelse = null;
    /**
     * Constructor method for TilstandListeType
     * @uses TilstandListeType::setGyldighed()
     * @uses TilstandListeType::setLokalUdvidelse()
     * @param \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\GyldighedType[] $gyldighed
     * @param \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\LokalUdvidelseType $lokalUdvidelse
     */
    public function __construct(?array $gyldighed = null, ?\ItkDev\Serviceplatformen\SF1500\Organisation\StructType\LokalUdvidelseType $lokalUdvidelse = null)
    {
        $this
            ->setGyldighed($gyldighed)
            ->setLokalUdvidelse($lokalUdvidelse);
    }
    /**
     * Get Gyldighed value
     * @return \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\GyldighedType[]
     */
    public function getGyldighed(): ?array
    {
        return $this->Gyldighed;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setGyldighed method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGyldighed method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGyldighedForArrayConstraintFromSetGyldighed(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $tilstandListeTypeGyldighedItem) {
            // validation for constraint: itemType
            if (!$tilstandListeTypeGyldighedItem instanceof \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\GyldighedType) {
                $invalidValues[] = is_object($tilstandListeTypeGyldighedItem) ? get_class($tilstandListeTypeGyldighedItem) : sprintf('%s(%s)', gettype($tilstandListeTypeGyldighedItem), var_export($tilstandListeTypeGyldighedItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Gyldighed property can only contain items of type \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\GyldighedType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Gyldighed value
     * @throws InvalidArgumentException
     * @param \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\GyldighedType[] $gyldighed
     * @return \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\TilstandListeType
     */
    public function setGyldighed(?array $gyldighed = null): self
    {
        // validation for constraint: array
        if ('' !== ($gyldighedArrayErrorMessage = self::validateGyldighedForArrayConstraintFromSetGyldighed($gyldighed))) {
            throw new InvalidArgumentException($gyldighedArrayErrorMessage, __LINE__);
        }
        $this->Gyldighed = $gyldighed;
        
        return $this;
    }
    /**
     * Add item to Gyldighed value
     * @throws InvalidArgumentException
     * @param \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\GyldighedType $item
     * @return \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\TilstandListeType
     */
    public function addToGyldighed(\ItkDev\Serviceplatformen\SF1500\Organisation\StructType\GyldighedType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\GyldighedType) {
            throw new InvalidArgumentException(sprintf('The Gyldighed property can only contain items of type \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\GyldighedType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Gyldighed[] = $item;
        
        return $this;
    }
    /**
     * Get LokalUdvidelse value
     * @return \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\LokalUdvidelseType|null
     */
    public function getLokalUdvidelse(): ?\ItkDev\Serviceplatformen\SF1500\Organisation\StructType\LokalUdvidelseType
    {
        return $this->LokalUdvidelse;
    }
    /**
     * Set LokalUdvidelse value
     * @param \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\LokalUdvidelseType $lokalUdvidelse
     * @return \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\TilstandListeType
     */
    public function setLokalUdvidelse(?\ItkDev\Serviceplatformen\SF1500\Organisation\StructType\LokalUdvidelseType $lokalUdvidelse = null): self
    {
        $this->LokalUdvidelse = $lokalUdvidelse;
        
        return $this;
    }
}
