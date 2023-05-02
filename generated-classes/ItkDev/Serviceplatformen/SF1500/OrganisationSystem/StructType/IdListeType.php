<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for IdListeType StructType
 * Meta information extracted from the WSDL
 * - definition: urn:oio:sagdok:idliste:ADD:1.0.0
 * @subpackage Structs
 */
class IdListeType extends AbstractStructBase
{
    /**
     * The UUIDIdentifikator
     * Meta information extracted from the WSDL
     * - base: string
     * - content: id
     * - definition: urn:oio:sagdok:uuid:BDD:1.0.0
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - pattern: [a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}
     * - ref: sd:UUIDIdentifikator
     * @var string[]
     */
    protected ?array $UUIDIdentifikator = null;
    /**
     * Constructor method for IdListeType
     * @uses IdListeType::setUUIDIdentifikator()
     * @param string[] $uUIDIdentifikator
     */
    public function __construct(?array $uUIDIdentifikator = null)
    {
        $this
            ->setUUIDIdentifikator($uUIDIdentifikator);
    }
    /**
     * Get UUIDIdentifikator value
     * @return string[]
     */
    public function getUUIDIdentifikator(): ?array
    {
        return $this->UUIDIdentifikator;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setUUIDIdentifikator method
     * This method is willingly generated in order to preserve the one-line inline validation within the setUUIDIdentifikator method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateUUIDIdentifikatorForArrayConstraintFromSetUUIDIdentifikator(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $idListeTypeUUIDIdentifikatorItem) {
            // validation for constraint: itemType
            if (!is_string($idListeTypeUUIDIdentifikatorItem)) {
                $invalidValues[] = is_object($idListeTypeUUIDIdentifikatorItem) ? get_class($idListeTypeUUIDIdentifikatorItem) : sprintf('%s(%s)', gettype($idListeTypeUUIDIdentifikatorItem), var_export($idListeTypeUUIDIdentifikatorItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The UUIDIdentifikator property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setUUIDIdentifikator method
     * This method is willingly generated in order to preserve the one-line inline validation within the setUUIDIdentifikator method
     * This has to validate that the items contained by the array match the defined pattern
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateUUIDIdentifikatorForPatternConstraintFromSetUUIDIdentifikator(?array $values = null): string
    {
        $message = '';
        $invalidValues = [];
        foreach (($values ?? []) as $idListeTypeUUIDIdentifikatorItem) {
            // validation for constraint: pattern([a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12})
            if (!preg_match('/[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/', $idListeTypeUUIDIdentifikatorItem)) {
                $invalidValues[] = var_export($idListeTypeUUIDIdentifikatorItem, true);
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid value(s) %s, please provide literals that are among the set of character sequences denoted by the regular expression /[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/\'', implode(', ', $invalidValues));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set UUIDIdentifikator value
     * @throws InvalidArgumentException
     * @param string[] $uUIDIdentifikator
     * @return \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\IdListeType
     */
    public function setUUIDIdentifikator(?array $uUIDIdentifikator = null): self
    {
        // validation for constraint: array
        if ('' !== ($uUIDIdentifikatorArrayErrorMessage = self::validateUUIDIdentifikatorForArrayConstraintFromSetUUIDIdentifikator($uUIDIdentifikator))) {
            throw new InvalidArgumentException($uUIDIdentifikatorArrayErrorMessage, __LINE__);
        }
        // validation for constraint: pattern([a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12})
        if ('' !== ($uUIDIdentifikatorPatternErrorMessage = self::validateUUIDIdentifikatorForPatternConstraintFromSetUUIDIdentifikator($uUIDIdentifikator))) {
            throw new InvalidArgumentException($uUIDIdentifikatorPatternErrorMessage, __LINE__);
        }
        $this->UUIDIdentifikator = $uUIDIdentifikator;
        
        return $this;
    }
    /**
     * Add item to UUIDIdentifikator value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\IdListeType
     */
    public function addToUUIDIdentifikator(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The UUIDIdentifikator property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: pattern([a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12})
        if (!preg_match('/[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/', $item)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/', var_export($item, true)), __LINE__);
        }
        $this->UUIDIdentifikator[] = $item;
        
        return $this;
    }
}
