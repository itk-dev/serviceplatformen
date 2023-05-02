<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF1500\Klasse\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListOutputType StructType
 * Meta information extracted from the WSDL
 * - definition: urn:oio:sagdok:klasselistoutput:ADD:2.0.0 | urn:oio:sagdok:listoutput:ADD:1.0.0
 * @subpackage Structs
 */
class ListOutputType extends AbstractStructBase
{
    /**
     * The StandardRetur
     * Meta information extracted from the WSDL
     * - content: standardretur
     * - ref: sd:StandardRetur
     * @var \ItkDev\Serviceplatformen\SF1500\Klasse\StructType\StandardReturType|null
     */
    protected ?\ItkDev\Serviceplatformen\SF1500\Klasse\StructType\StandardReturType $StandardRetur = null;
    /**
     * The FiltreretOejebliksbillede
     * Meta information extracted from the WSDL
     * - content: filtreretoejebliksbillede
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \ItkDev\Serviceplatformen\SF1500\Klasse\StructType\FiltreretOejebliksbilledeType[]
     */
    protected ?array $FiltreretOejebliksbillede = null;
    /**
     * Constructor method for ListOutputType
     * @uses ListOutputType::setStandardRetur()
     * @uses ListOutputType::setFiltreretOejebliksbillede()
     * @param \ItkDev\Serviceplatformen\SF1500\Klasse\StructType\StandardReturType $standardRetur
     * @param \ItkDev\Serviceplatformen\SF1500\Klasse\StructType\FiltreretOejebliksbilledeType[] $filtreretOejebliksbillede
     */
    public function __construct(?\ItkDev\Serviceplatformen\SF1500\Klasse\StructType\StandardReturType $standardRetur = null, ?array $filtreretOejebliksbillede = null)
    {
        $this
            ->setStandardRetur($standardRetur)
            ->setFiltreretOejebliksbillede($filtreretOejebliksbillede);
    }
    /**
     * Get StandardRetur value
     * @return \ItkDev\Serviceplatformen\SF1500\Klasse\StructType\StandardReturType|null
     */
    public function getStandardRetur(): ?\ItkDev\Serviceplatformen\SF1500\Klasse\StructType\StandardReturType
    {
        return $this->StandardRetur;
    }
    /**
     * Set StandardRetur value
     * @param \ItkDev\Serviceplatformen\SF1500\Klasse\StructType\StandardReturType $standardRetur
     * @return \ItkDev\Serviceplatformen\SF1500\Klasse\StructType\ListOutputType
     */
    public function setStandardRetur(?\ItkDev\Serviceplatformen\SF1500\Klasse\StructType\StandardReturType $standardRetur = null): self
    {
        $this->StandardRetur = $standardRetur;
        
        return $this;
    }
    /**
     * Get FiltreretOejebliksbillede value
     * @return \ItkDev\Serviceplatformen\SF1500\Klasse\StructType\FiltreretOejebliksbilledeType[]
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
        foreach ($values as $listOutputTypeFiltreretOejebliksbilledeItem) {
            // validation for constraint: itemType
            if (!$listOutputTypeFiltreretOejebliksbilledeItem instanceof \ItkDev\Serviceplatformen\SF1500\Klasse\StructType\FiltreretOejebliksbilledeType) {
                $invalidValues[] = is_object($listOutputTypeFiltreretOejebliksbilledeItem) ? get_class($listOutputTypeFiltreretOejebliksbilledeItem) : sprintf('%s(%s)', gettype($listOutputTypeFiltreretOejebliksbilledeItem), var_export($listOutputTypeFiltreretOejebliksbilledeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The FiltreretOejebliksbillede property can only contain items of type \ItkDev\Serviceplatformen\SF1500\Klasse\StructType\FiltreretOejebliksbilledeType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set FiltreretOejebliksbillede value
     * @throws InvalidArgumentException
     * @param \ItkDev\Serviceplatformen\SF1500\Klasse\StructType\FiltreretOejebliksbilledeType[] $filtreretOejebliksbillede
     * @return \ItkDev\Serviceplatformen\SF1500\Klasse\StructType\ListOutputType
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
     * @param \ItkDev\Serviceplatformen\SF1500\Klasse\StructType\FiltreretOejebliksbilledeType $item
     * @return \ItkDev\Serviceplatformen\SF1500\Klasse\StructType\ListOutputType
     */
    public function addToFiltreretOejebliksbillede(\ItkDev\Serviceplatformen\SF1500\Klasse\StructType\FiltreretOejebliksbilledeType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \ItkDev\Serviceplatformen\SF1500\Klasse\StructType\FiltreretOejebliksbilledeType) {
            throw new InvalidArgumentException(sprintf('The FiltreretOejebliksbillede property can only contain items of type \ItkDev\Serviceplatformen\SF1500\Klasse\StructType\FiltreretOejebliksbilledeType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->FiltreretOejebliksbillede[] = $item;
        
        return $this;
    }
}
