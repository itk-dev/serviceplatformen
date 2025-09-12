<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF2900\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for JournalPartType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class JournalPartType extends AbstractStructBase
{
    /**
     * The Objekttype
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $Objekttype;
    /**
     * The ReferenceID
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \ItkDev\Serviceplatformen\SF2900\StructType\UUID_URN
     */
    protected \ItkDev\Serviceplatformen\SF2900\StructType\UUID_URN $ReferenceID;
    /**
     * Constructor method for JournalPartType
     * @uses JournalPartType::setObjekttype()
     * @uses JournalPartType::setReferenceID()
     * @param string $objekttype
     * @param \ItkDev\Serviceplatformen\SF2900\StructType\UUID_URN $referenceID
     */
    public function __construct(string $objekttype, \ItkDev\Serviceplatformen\SF2900\StructType\UUID_URN $referenceID)
    {
        $this
            ->setObjekttype($objekttype)
            ->setReferenceID($referenceID);
    }
    /**
     * Get Objekttype value
     * @return string
     */
    public function getObjekttype(): string
    {
        return $this->Objekttype;
    }
    /**
     * Set Objekttype value
     * @uses \ItkDev\Serviceplatformen\SF2900\EnumType\JournalPartObjekttypeType::valueIsValid()
     * @uses \ItkDev\Serviceplatformen\SF2900\EnumType\JournalPartObjekttypeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $objekttype
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\JournalPartType
     */
    public function setObjekttype(string $objekttype): self
    {
        // validation for constraint: enumeration
        if (!\ItkDev\Serviceplatformen\SF2900\EnumType\JournalPartObjekttypeType::valueIsValid($objekttype)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \ItkDev\Serviceplatformen\SF2900\EnumType\JournalPartObjekttypeType', is_array($objekttype) ? implode(', ', $objekttype) : var_export($objekttype, true), implode(', ', \ItkDev\Serviceplatformen\SF2900\EnumType\JournalPartObjekttypeType::getValidValues())), __LINE__);
        }
        $this->Objekttype = $objekttype;
        
        return $this;
    }
    /**
     * Get ReferenceID value
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\UUID_URN
     */
    public function getReferenceID(): \ItkDev\Serviceplatformen\SF2900\StructType\UUID_URN
    {
        return $this->ReferenceID;
    }
    /**
     * Set ReferenceID value
     * @param \ItkDev\Serviceplatformen\SF2900\StructType\UUID_URN $referenceID
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\JournalPartType
     */
    public function setReferenceID(\ItkDev\Serviceplatformen\SF2900\StructType\UUID_URN $referenceID): self
    {
        $this->ReferenceID = $referenceID;
        
        return $this;
    }
}
