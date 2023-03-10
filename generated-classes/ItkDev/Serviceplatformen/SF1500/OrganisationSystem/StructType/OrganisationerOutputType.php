<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OrganisationerOutputType StructType
 * Meta information extracted from the WSDL
 * - definition: urn:oio:sts:organisationer:ADD:2.0.0
 * @subpackage Structs
 */
class OrganisationerOutputType extends AbstractStructBase
{
    /**
     * The FiltreretOejebliksbillede
     * Meta information extracted from the WSDL
     * - content: urn:oio:sagdok:organisation:ADD:2.0.0
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\FiltreretOejebliksbilledeType[]
     */
    protected ?array $FiltreretOejebliksbillede = null;
    /**
     * Constructor method for OrganisationerOutputType
     * @uses OrganisationerOutputType::setFiltreretOejebliksbillede()
     * @param \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\FiltreretOejebliksbilledeType[] $filtreretOejebliksbillede
     */
    public function __construct(?array $filtreretOejebliksbillede = null)
    {
        $this
            ->setFiltreretOejebliksbillede($filtreretOejebliksbillede);
    }
    /**
     * Get FiltreretOejebliksbillede value
     * @return \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\FiltreretOejebliksbilledeType[]
     */
    public function getFiltreretOejebliksbillede(): ?array
    {
        return $this->FiltreretOejebliksbillede;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setFiltreretOejebliksbillede method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFiltreretOejebliksbillede method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFiltreretOejebliksbilledeForArrayConstraintFromSetFiltreretOejebliksbillede(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $organisationerOutputTypeFiltreretOejebliksbilledeItem) {
            // validation for constraint: itemType
            if (!$organisationerOutputTypeFiltreretOejebliksbilledeItem instanceof \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\FiltreretOejebliksbilledeType) {
                $invalidValues[] = is_object($organisationerOutputTypeFiltreretOejebliksbilledeItem) ? get_class($organisationerOutputTypeFiltreretOejebliksbilledeItem) : sprintf('%s(%s)', gettype($organisationerOutputTypeFiltreretOejebliksbilledeItem), var_export($organisationerOutputTypeFiltreretOejebliksbilledeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The FiltreretOejebliksbillede property can only contain items of type \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\FiltreretOejebliksbilledeType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set FiltreretOejebliksbillede value
     * @throws InvalidArgumentException
     * @param \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\FiltreretOejebliksbilledeType[] $filtreretOejebliksbillede
     * @return \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\OrganisationerOutputType
     */
    public function setFiltreretOejebliksbillede(?array $filtreretOejebliksbillede = null): self
    {
        // validation for constraint: array
        if ('' !== ($filtreretOejebliksbilledeArrayErrorMessage = self::validateFiltreretOejebliksbilledeForArrayConstraintFromSetFiltreretOejebliksbillede($filtreretOejebliksbillede))) {
            throw new InvalidArgumentException($filtreretOejebliksbilledeArrayErrorMessage, __LINE__);
        }
        $this->FiltreretOejebliksbillede = $filtreretOejebliksbillede;
        
        return $this;
    }
    /**
     * Add item to FiltreretOejebliksbillede value
     * @throws InvalidArgumentException
     * @param \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\FiltreretOejebliksbilledeType $item
     * @return \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\OrganisationerOutputType
     */
    public function addToFiltreretOejebliksbillede(\ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\FiltreretOejebliksbilledeType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\FiltreretOejebliksbilledeType) {
            throw new InvalidArgumentException(sprintf('The FiltreretOejebliksbillede property can only contain items of type \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\FiltreretOejebliksbilledeType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->FiltreretOejebliksbillede[] = $item;
        
        return $this;
    }
}
