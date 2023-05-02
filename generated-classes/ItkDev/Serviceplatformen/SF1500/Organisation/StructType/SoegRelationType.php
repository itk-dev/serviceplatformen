<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF1500\Organisation\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SoegRelationType StructType
 * Meta information extracted from the WSDL
 * - definition: urn:oio:sagdok:soegrelation:ADD:1.0.0
 * @subpackage Structs
 */
class SoegRelationType extends AbstractStructBase
{
    /**
     * The SoegVirkning
     * Meta information extracted from the WSDL
     * - content: virkning
     * - minOccurs: 0
     * - ref: sd:SoegVirkning
     * @var \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\SoegVirkningType|null
     */
    protected ?\ItkDev\Serviceplatformen\SF1500\Organisation\StructType\SoegVirkningType $SoegVirkning = null;
    /**
     * The ReferenceID
     * Meta information extracted from the WSDL
     * - content: referenceid
     * - minOccurs: 0
     * - ref: sd:ReferenceID
     * @var \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\UnikIdType|null
     */
    protected ?\ItkDev\Serviceplatformen\SF1500\Organisation\StructType\UnikIdType $ReferenceID = null;
    /**
     * Constructor method for SoegRelationType
     * @uses SoegRelationType::setSoegVirkning()
     * @uses SoegRelationType::setReferenceID()
     * @param \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\SoegVirkningType $soegVirkning
     * @param \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\UnikIdType $referenceID
     */
    public function __construct(?\ItkDev\Serviceplatformen\SF1500\Organisation\StructType\SoegVirkningType $soegVirkning = null, ?\ItkDev\Serviceplatformen\SF1500\Organisation\StructType\UnikIdType $referenceID = null)
    {
        $this
            ->setSoegVirkning($soegVirkning)
            ->setReferenceID($referenceID);
    }
    /**
     * Get SoegVirkning value
     * @return \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\SoegVirkningType|null
     */
    public function getSoegVirkning(): ?\ItkDev\Serviceplatformen\SF1500\Organisation\StructType\SoegVirkningType
    {
        return $this->SoegVirkning;
    }
    /**
     * Set SoegVirkning value
     * @param \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\SoegVirkningType $soegVirkning
     * @return \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\SoegRelationType
     */
    public function setSoegVirkning(?\ItkDev\Serviceplatformen\SF1500\Organisation\StructType\SoegVirkningType $soegVirkning = null): self
    {
        $this->SoegVirkning = $soegVirkning;
        
        return $this;
    }
    /**
     * Get ReferenceID value
     * @return \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\UnikIdType|null
     */
    public function getReferenceID(): ?\ItkDev\Serviceplatformen\SF1500\Organisation\StructType\UnikIdType
    {
        return $this->ReferenceID;
    }
    /**
     * Set ReferenceID value
     * @param \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\UnikIdType $referenceID
     * @return \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\SoegRelationType
     */
    public function setReferenceID(?\ItkDev\Serviceplatformen\SF1500\Organisation\StructType\UnikIdType $referenceID = null): self
    {
        $this->ReferenceID = $referenceID;
        
        return $this;
    }
}
