<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF1500\OrganisationFunktion\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NulFlerRelationType StructType
 * Meta information extracted from the WSDL
 * - definition: urn:oio:sagdok:nulflerrelation:ADD:1.0.0
 * @subpackage Structs
 */
class NulFlerRelationType extends AbstractStructBase
{
    /**
     * The Virkning
     * Meta information extracted from the WSDL
     * - content: virkning
     * - ref: sd:Virkning
     * @var \ItkDev\Serviceplatformen\SF1500\OrganisationFunktion\StructType\VirkningType|null
     */
    protected ?\ItkDev\Serviceplatformen\SF1500\OrganisationFunktion\StructType\VirkningType $Virkning = null;
    /**
     * The ReferenceID
     * Meta information extracted from the WSDL
     * - content: referenceid
     * - minOccurs: 0
     * - ref: sd:ReferenceID
     * @var \ItkDev\Serviceplatformen\SF1500\OrganisationFunktion\StructType\UnikIdType|null
     */
    protected ?\ItkDev\Serviceplatformen\SF1500\OrganisationFunktion\StructType\UnikIdType $ReferenceID = null;
    /**
     * Constructor method for NulFlerRelationType
     * @uses NulFlerRelationType::setVirkning()
     * @uses NulFlerRelationType::setReferenceID()
     * @param \ItkDev\Serviceplatformen\SF1500\OrganisationFunktion\StructType\VirkningType $virkning
     * @param \ItkDev\Serviceplatformen\SF1500\OrganisationFunktion\StructType\UnikIdType $referenceID
     */
    public function __construct(?\ItkDev\Serviceplatformen\SF1500\OrganisationFunktion\StructType\VirkningType $virkning = null, ?\ItkDev\Serviceplatformen\SF1500\OrganisationFunktion\StructType\UnikIdType $referenceID = null)
    {
        $this
            ->setVirkning($virkning)
            ->setReferenceID($referenceID);
    }
    /**
     * Get Virkning value
     * @return \ItkDev\Serviceplatformen\SF1500\OrganisationFunktion\StructType\VirkningType|null
     */
    public function getVirkning(): ?\ItkDev\Serviceplatformen\SF1500\OrganisationFunktion\StructType\VirkningType
    {
        return $this->Virkning;
    }
    /**
     * Set Virkning value
     * @param \ItkDev\Serviceplatformen\SF1500\OrganisationFunktion\StructType\VirkningType $virkning
     * @return \ItkDev\Serviceplatformen\SF1500\OrganisationFunktion\StructType\NulFlerRelationType
     */
    public function setVirkning(?\ItkDev\Serviceplatformen\SF1500\OrganisationFunktion\StructType\VirkningType $virkning = null): self
    {
        $this->Virkning = $virkning;
        
        return $this;
    }
    /**
     * Get ReferenceID value
     * @return \ItkDev\Serviceplatformen\SF1500\OrganisationFunktion\StructType\UnikIdType|null
     */
    public function getReferenceID(): ?\ItkDev\Serviceplatformen\SF1500\OrganisationFunktion\StructType\UnikIdType
    {
        return $this->ReferenceID;
    }
    /**
     * Set ReferenceID value
     * @param \ItkDev\Serviceplatformen\SF1500\OrganisationFunktion\StructType\UnikIdType $referenceID
     * @return \ItkDev\Serviceplatformen\SF1500\OrganisationFunktion\StructType\NulFlerRelationType
     */
    public function setReferenceID(?\ItkDev\Serviceplatformen\SF1500\OrganisationFunktion\StructType\UnikIdType $referenceID = null): self
    {
        $this->ReferenceID = $referenceID;
        
        return $this;
    }
}
