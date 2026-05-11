<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF2900\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DistributionObjectType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DistributionObjectType extends AbstractStructBase
{
    /**
     * The ObjektType
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $ObjektType;
    /**
     * The ObjektIndhold
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \ItkDev\Serviceplatformen\SF2900\StructType\ObjektIndholdType
     */
    protected \ItkDev\Serviceplatformen\SF2900\StructType\ObjektIndholdType $ObjektIndhold;
    /**
     * Constructor method for DistributionObjectType
     * @uses DistributionObjectType::setObjektType()
     * @uses DistributionObjectType::setObjektIndhold()
     * @param string $objektType
     * @param \ItkDev\Serviceplatformen\SF2900\StructType\ObjektIndholdType $objektIndhold
     */
    public function __construct(string $objektType, \ItkDev\Serviceplatformen\SF2900\StructType\ObjektIndholdType $objektIndhold)
    {
        $this
            ->setObjektType($objektType)
            ->setObjektIndhold($objektIndhold);
    }
    /**
     * Get ObjektType value
     * @return string
     */
    public function getObjektType(): string
    {
        return $this->ObjektType;
    }
    /**
     * Set ObjektType value
     * @uses \ItkDev\Serviceplatformen\SF2900\EnumType\ObjektTypeType::valueIsValid()
     * @uses \ItkDev\Serviceplatformen\SF2900\EnumType\ObjektTypeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $objektType
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\DistributionObjectType
     */
    public function setObjektType(string $objektType): self
    {
        // validation for constraint: enumeration
        if (!\ItkDev\Serviceplatformen\SF2900\EnumType\ObjektTypeType::valueIsValid($objektType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \ItkDev\Serviceplatformen\SF2900\EnumType\ObjektTypeType', is_array($objektType) ? implode(', ', $objektType) : var_export($objektType, true), implode(', ', \ItkDev\Serviceplatformen\SF2900\EnumType\ObjektTypeType::getValidValues())), __LINE__);
        }
        $this->ObjektType = $objektType;
        
        return $this;
    }
    /**
     * Get ObjektIndhold value
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\ObjektIndholdType
     */
    public function getObjektIndhold(): \ItkDev\Serviceplatformen\SF2900\StructType\ObjektIndholdType
    {
        return $this->ObjektIndhold;
    }
    /**
     * Set ObjektIndhold value
     * @param \ItkDev\Serviceplatformen\SF2900\StructType\ObjektIndholdType $objektIndhold
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\DistributionObjectType
     */
    public function setObjektIndhold(\ItkDev\Serviceplatformen\SF2900\StructType\ObjektIndholdType $objektIndhold): self
    {
        $this->ObjektIndhold = $objektIndhold;
        
        return $this;
    }
}
