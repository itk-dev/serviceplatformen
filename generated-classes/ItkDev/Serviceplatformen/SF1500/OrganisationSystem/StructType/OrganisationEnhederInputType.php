<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OrganisationEnhederInputType StructType
 * Meta information extracted from the WSDL
 * - definition: urn:oio:sts:organisationenheder:ADD:2.0.0
 * @subpackage Structs
 */
class OrganisationEnhederInputType extends AbstractStructBase
{
    /**
     * The OrganisationEnhed
     * Meta information extracted from the WSDL
     * - content: urn:oio:sagdok:organisationenhed:ADD:2.0.0
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: organisationenhed:OrganisationEnhed
     * @var \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\OrganisationEnhedType[]
     */
    protected ?array $OrganisationEnhed = null;
    /**
     * Constructor method for OrganisationEnhederInputType
     * @uses OrganisationEnhederInputType::setOrganisationEnhed()
     * @param \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\OrganisationEnhedType[] $organisationEnhed
     */
    public function __construct(?array $organisationEnhed = null)
    {
        $this
            ->setOrganisationEnhed($organisationEnhed);
    }
    /**
     * Get OrganisationEnhed value
     * @return \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\OrganisationEnhedType[]
     */
    public function getOrganisationEnhed(): ?array
    {
        return $this->OrganisationEnhed;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setOrganisationEnhed method
     * This method is willingly generated in order to preserve the one-line inline validation within the setOrganisationEnhed method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateOrganisationEnhedForArrayConstraintFromSetOrganisationEnhed(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $organisationEnhederInputTypeOrganisationEnhedItem) {
            // validation for constraint: itemType
            if (!$organisationEnhederInputTypeOrganisationEnhedItem instanceof \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\OrganisationEnhedType) {
                $invalidValues[] = is_object($organisationEnhederInputTypeOrganisationEnhedItem) ? get_class($organisationEnhederInputTypeOrganisationEnhedItem) : sprintf('%s(%s)', gettype($organisationEnhederInputTypeOrganisationEnhedItem), var_export($organisationEnhederInputTypeOrganisationEnhedItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The OrganisationEnhed property can only contain items of type \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\OrganisationEnhedType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set OrganisationEnhed value
     * @throws InvalidArgumentException
     * @param \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\OrganisationEnhedType[] $organisationEnhed
     * @return \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\OrganisationEnhederInputType
     */
    public function setOrganisationEnhed(?array $organisationEnhed = null): self
    {
        // validation for constraint: array
        if ('' !== ($organisationEnhedArrayErrorMessage = self::validateOrganisationEnhedForArrayConstraintFromSetOrganisationEnhed($organisationEnhed))) {
            throw new InvalidArgumentException($organisationEnhedArrayErrorMessage, __LINE__);
        }
        $this->OrganisationEnhed = $organisationEnhed;
        
        return $this;
    }
    /**
     * Add item to OrganisationEnhed value
     * @throws InvalidArgumentException
     * @param \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\OrganisationEnhedType $item
     * @return \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\OrganisationEnhederInputType
     */
    public function addToOrganisationEnhed(\ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\OrganisationEnhedType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\OrganisationEnhedType) {
            throw new InvalidArgumentException(sprintf('The OrganisationEnhed property can only contain items of type \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\OrganisationEnhedType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->OrganisationEnhed[] = $item;
        
        return $this;
    }
}
