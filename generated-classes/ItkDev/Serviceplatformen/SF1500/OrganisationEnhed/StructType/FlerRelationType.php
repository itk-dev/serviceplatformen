<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF1500\OrganisationEnhed\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FlerRelationType StructType
 * Meta information extracted from the WSDL
 * - definition: urn:oio:sagdok:flerrelation:ADD:2.0.0
 * @subpackage Structs
 */
class FlerRelationType extends AbstractStructBase
{
    /**
     * The Virkning
     * Meta information extracted from the WSDL
     * - content: virkning
     * - minOccurs: 0
     * - ref: sd:Virkning
     * @var \ItkDev\Serviceplatformen\SF1500\OrganisationEnhed\StructType\VirkningType|null
     */
    protected ?\ItkDev\Serviceplatformen\SF1500\OrganisationEnhed\StructType\VirkningType $Virkning = null;
    /**
     * The ReferenceID
     * Meta information extracted from the WSDL
     * - content: referenceid
     * - minOccurs: 0
     * - ref: sd:ReferenceID
     * @var \ItkDev\Serviceplatformen\SF1500\OrganisationEnhed\StructType\UnikIdType|null
     */
    protected ?\ItkDev\Serviceplatformen\SF1500\OrganisationEnhed\StructType\UnikIdType $ReferenceID = null;
    /**
     * Constructor method for FlerRelationType
     * @uses FlerRelationType::setVirkning()
     * @uses FlerRelationType::setReferenceID()
     * @param \ItkDev\Serviceplatformen\SF1500\OrganisationEnhed\StructType\VirkningType $virkning
     * @param \ItkDev\Serviceplatformen\SF1500\OrganisationEnhed\StructType\UnikIdType $referenceID
     */
    public function __construct(?\ItkDev\Serviceplatformen\SF1500\OrganisationEnhed\StructType\VirkningType $virkning = null, ?\ItkDev\Serviceplatformen\SF1500\OrganisationEnhed\StructType\UnikIdType $referenceID = null)
    {
        $this
            ->setVirkning($virkning)
            ->setReferenceID($referenceID);
    }
    /**
     * Get Virkning value
     * @return \ItkDev\Serviceplatformen\SF1500\OrganisationEnhed\StructType\VirkningType|null
     */
    public function getVirkning(): ?\ItkDev\Serviceplatformen\SF1500\OrganisationEnhed\StructType\VirkningType
    {
        return $this->Virkning;
    }
    /**
     * Set Virkning value
     * @param \ItkDev\Serviceplatformen\SF1500\OrganisationEnhed\StructType\VirkningType $virkning
     * @return \ItkDev\Serviceplatformen\SF1500\OrganisationEnhed\StructType\FlerRelationType
     */
    public function setVirkning(?\ItkDev\Serviceplatformen\SF1500\OrganisationEnhed\StructType\VirkningType $virkning = null): self
    {
        $this->Virkning = $virkning;
        
        return $this;
    }
    /**
     * Get ReferenceID value
     * @return \ItkDev\Serviceplatformen\SF1500\OrganisationEnhed\StructType\UnikIdType|null
     */
    public function getReferenceID(): ?\ItkDev\Serviceplatformen\SF1500\OrganisationEnhed\StructType\UnikIdType
    {
        return $this->ReferenceID;
    }
    /**
     * Set ReferenceID value
     * @param \ItkDev\Serviceplatformen\SF1500\OrganisationEnhed\StructType\UnikIdType $referenceID
     * @return \ItkDev\Serviceplatformen\SF1500\OrganisationEnhed\StructType\FlerRelationType
     */
    public function setReferenceID(?\ItkDev\Serviceplatformen\SF1500\OrganisationEnhed\StructType\UnikIdType $referenceID = null): self
    {
        $this->ReferenceID = $referenceID;
        
        return $this;
    }
}
