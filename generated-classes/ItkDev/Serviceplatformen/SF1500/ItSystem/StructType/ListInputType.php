<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF1500\ItSystem\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListInputType StructType
 * Meta information extracted from the WSDL
 * - definition: urn:oio:sagdok:listinput:ADD:1.0.0
 * @subpackage Structs
 */
class ListInputType extends AbstractStructBase
{
    /**
     * The UUIDIdentifikator
     * Meta information extracted from the WSDL
     * - base: string
     * - content: uuid
     * - definition: urn:oio:sagdok:uuid:BDD:1.0.0
     * - maxOccurs: unbounded
     * - pattern: [a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}
     * - ref: sd:UUIDIdentifikator
     * @var string[]
     */
    protected ?array $UUIDIdentifikator = null;
    /**
     * The VirkningFraFilter
     * Meta information extracted from the WSDL
     * - content: virkningfrafilter
     * - minOccurs: 0
     * - ref: sd:VirkningFraFilter
     * @var \ItkDev\Serviceplatformen\SF1500\ItSystem\StructType\TidspunktType|null
     */
    protected ?\ItkDev\Serviceplatformen\SF1500\ItSystem\StructType\TidspunktType $VirkningFraFilter = null;
    /**
     * The VirkningTilFilter
     * Meta information extracted from the WSDL
     * - content: virkningtilfilter
     * - minOccurs: 0
     * - ref: sd:VirkningTilFilter
     * @var \ItkDev\Serviceplatformen\SF1500\ItSystem\StructType\TidspunktType|null
     */
    protected ?\ItkDev\Serviceplatformen\SF1500\ItSystem\StructType\TidspunktType $VirkningTilFilter = null;
    /**
     * The RegistreringFraFilter
     * Meta information extracted from the WSDL
     * - content: registreringfrafilter
     * - minOccurs: 0
     * - ref: sd:RegistreringFraFilter
     * @var \ItkDev\Serviceplatformen\SF1500\ItSystem\StructType\TidspunktType|null
     */
    protected ?\ItkDev\Serviceplatformen\SF1500\ItSystem\StructType\TidspunktType $RegistreringFraFilter = null;
    /**
     * The RegistreringTilFilter
     * Meta information extracted from the WSDL
     * - content: registreringtilfilter
     * - minOccurs: 0
     * - ref: sd:RegistreringTilFilter
     * @var \ItkDev\Serviceplatformen\SF1500\ItSystem\StructType\TidspunktType|null
     */
    protected ?\ItkDev\Serviceplatformen\SF1500\ItSystem\StructType\TidspunktType $RegistreringTilFilter = null;
    /**
     * Constructor method for ListInputType
     * @uses ListInputType::setUUIDIdentifikator()
     * @uses ListInputType::setVirkningFraFilter()
     * @uses ListInputType::setVirkningTilFilter()
     * @uses ListInputType::setRegistreringFraFilter()
     * @uses ListInputType::setRegistreringTilFilter()
     * @param string[] $uUIDIdentifikator
     * @param \ItkDev\Serviceplatformen\SF1500\ItSystem\StructType\TidspunktType $virkningFraFilter
     * @param \ItkDev\Serviceplatformen\SF1500\ItSystem\StructType\TidspunktType $virkningTilFilter
     * @param \ItkDev\Serviceplatformen\SF1500\ItSystem\StructType\TidspunktType $registreringFraFilter
     * @param \ItkDev\Serviceplatformen\SF1500\ItSystem\StructType\TidspunktType $registreringTilFilter
     */
    public function __construct(?array $uUIDIdentifikator = null, ?\ItkDev\Serviceplatformen\SF1500\ItSystem\StructType\TidspunktType $virkningFraFilter = null, ?\ItkDev\Serviceplatformen\SF1500\ItSystem\StructType\TidspunktType $virkningTilFilter = null, ?\ItkDev\Serviceplatformen\SF1500\ItSystem\StructType\TidspunktType $registreringFraFilter = null, ?\ItkDev\Serviceplatformen\SF1500\ItSystem\StructType\TidspunktType $registreringTilFilter = null)
    {
        $this
            ->setUUIDIdentifikator($uUIDIdentifikator)
            ->setVirkningFraFilter($virkningFraFilter)
            ->setVirkningTilFilter($virkningTilFilter)
            ->setRegistreringFraFilter($registreringFraFilter)
            ->setRegistreringTilFilter($registreringTilFilter);
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
        foreach ($values as $listInputTypeUUIDIdentifikatorItem) {
            // validation for constraint: itemType
            if (!is_string($listInputTypeUUIDIdentifikatorItem)) {
                $invalidValues[] = is_object($listInputTypeUUIDIdentifikatorItem) ? get_class($listInputTypeUUIDIdentifikatorItem) : sprintf('%s(%s)', gettype($listInputTypeUUIDIdentifikatorItem), var_export($listInputTypeUUIDIdentifikatorItem, true));
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
        foreach (($values ?? []) as $listInputTypeUUIDIdentifikatorItem) {
            // validation for constraint: pattern([a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12})
            if (!preg_match('/[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/', $listInputTypeUUIDIdentifikatorItem)) {
                $invalidValues[] = var_export($listInputTypeUUIDIdentifikatorItem, true);
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
     * @return \ItkDev\Serviceplatformen\SF1500\ItSystem\StructType\ListInputType
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
     * @return \ItkDev\Serviceplatformen\SF1500\ItSystem\StructType\ListInputType
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
    /**
     * Get VirkningFraFilter value
     * @return \ItkDev\Serviceplatformen\SF1500\ItSystem\StructType\TidspunktType|null
     */
    public function getVirkningFraFilter(): ?\ItkDev\Serviceplatformen\SF1500\ItSystem\StructType\TidspunktType
    {
        return $this->VirkningFraFilter;
    }
    /**
     * Set VirkningFraFilter value
     * @param \ItkDev\Serviceplatformen\SF1500\ItSystem\StructType\TidspunktType $virkningFraFilter
     * @return \ItkDev\Serviceplatformen\SF1500\ItSystem\StructType\ListInputType
     */
    public function setVirkningFraFilter(?\ItkDev\Serviceplatformen\SF1500\ItSystem\StructType\TidspunktType $virkningFraFilter = null): self
    {
        $this->VirkningFraFilter = $virkningFraFilter;
        
        return $this;
    }
    /**
     * Get VirkningTilFilter value
     * @return \ItkDev\Serviceplatformen\SF1500\ItSystem\StructType\TidspunktType|null
     */
    public function getVirkningTilFilter(): ?\ItkDev\Serviceplatformen\SF1500\ItSystem\StructType\TidspunktType
    {
        return $this->VirkningTilFilter;
    }
    /**
     * Set VirkningTilFilter value
     * @param \ItkDev\Serviceplatformen\SF1500\ItSystem\StructType\TidspunktType $virkningTilFilter
     * @return \ItkDev\Serviceplatformen\SF1500\ItSystem\StructType\ListInputType
     */
    public function setVirkningTilFilter(?\ItkDev\Serviceplatformen\SF1500\ItSystem\StructType\TidspunktType $virkningTilFilter = null): self
    {
        $this->VirkningTilFilter = $virkningTilFilter;
        
        return $this;
    }
    /**
     * Get RegistreringFraFilter value
     * @return \ItkDev\Serviceplatformen\SF1500\ItSystem\StructType\TidspunktType|null
     */
    public function getRegistreringFraFilter(): ?\ItkDev\Serviceplatformen\SF1500\ItSystem\StructType\TidspunktType
    {
        return $this->RegistreringFraFilter;
    }
    /**
     * Set RegistreringFraFilter value
     * @param \ItkDev\Serviceplatformen\SF1500\ItSystem\StructType\TidspunktType $registreringFraFilter
     * @return \ItkDev\Serviceplatformen\SF1500\ItSystem\StructType\ListInputType
     */
    public function setRegistreringFraFilter(?\ItkDev\Serviceplatformen\SF1500\ItSystem\StructType\TidspunktType $registreringFraFilter = null): self
    {
        $this->RegistreringFraFilter = $registreringFraFilter;
        
        return $this;
    }
    /**
     * Get RegistreringTilFilter value
     * @return \ItkDev\Serviceplatformen\SF1500\ItSystem\StructType\TidspunktType|null
     */
    public function getRegistreringTilFilter(): ?\ItkDev\Serviceplatformen\SF1500\ItSystem\StructType\TidspunktType
    {
        return $this->RegistreringTilFilter;
    }
    /**
     * Set RegistreringTilFilter value
     * @param \ItkDev\Serviceplatformen\SF1500\ItSystem\StructType\TidspunktType $registreringTilFilter
     * @return \ItkDev\Serviceplatformen\SF1500\ItSystem\StructType\ListInputType
     */
    public function setRegistreringTilFilter(?\ItkDev\Serviceplatformen\SF1500\ItSystem\StructType\TidspunktType $registreringTilFilter = null): self
    {
        $this->RegistreringTilFilter = $registreringTilFilter;
        
        return $this;
    }
}
