<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF2900\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PartType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PartType extends AbstractStructBase
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
     * The ReferenceID
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \ItkDev\Serviceplatformen\SF2900\StructType\UUID_URN_Tekst
     */
    protected \ItkDev\Serviceplatformen\SF2900\StructType\UUID_URN_Tekst $ReferenceID;
    /**
     * Constructor method for PartType
     * @uses PartType::setObjektType()
     * @uses PartType::setReferenceID()
     * @param string $objektType
     * @param \ItkDev\Serviceplatformen\SF2900\StructType\UUID_URN_Tekst $referenceID
     */
    public function __construct(string $objektType, \ItkDev\Serviceplatformen\SF2900\StructType\UUID_URN_Tekst $referenceID)
    {
        $this
            ->setObjektType($objektType)
            ->setReferenceID($referenceID);
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
     * @uses \ItkDev\Serviceplatformen\SF2900\EnumType\PartObjektTypeType::valueIsValid()
     * @uses \ItkDev\Serviceplatformen\SF2900\EnumType\PartObjektTypeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $objektType
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\PartType
     */
    public function setObjektType(string $objektType): self
    {
        // validation for constraint: enumeration
        if (!\ItkDev\Serviceplatformen\SF2900\EnumType\PartObjektTypeType::valueIsValid($objektType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \ItkDev\Serviceplatformen\SF2900\EnumType\PartObjektTypeType', is_array($objektType) ? implode(', ', $objektType) : var_export($objektType, true), implode(', ', \ItkDev\Serviceplatformen\SF2900\EnumType\PartObjektTypeType::getValidValues())), __LINE__);
        }
        $this->ObjektType = $objektType;
        
        return $this;
    }
    /**
     * Get ReferenceID value
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\UUID_URN_Tekst
     */
    public function getReferenceID(): \ItkDev\Serviceplatformen\SF2900\StructType\UUID_URN_Tekst
    {
        return $this->ReferenceID;
    }
    /**
     * Set ReferenceID value
     * @param \ItkDev\Serviceplatformen\SF2900\StructType\UUID_URN_Tekst $referenceID
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\PartType
     */
    public function setReferenceID(\ItkDev\Serviceplatformen\SF2900\StructType\UUID_URN_Tekst $referenceID): self
    {
        $this->ReferenceID = $referenceID;
        
        return $this;
    }
}
