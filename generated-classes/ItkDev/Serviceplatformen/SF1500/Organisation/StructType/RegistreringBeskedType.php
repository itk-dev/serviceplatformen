<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF1500\Organisation\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RegistreringBeskedType StructType
 * Meta information extracted from the WSDL
 * - definition: urn:oio:sagdok:organisationregistreringbesked:ADD:1.0.0
 * @subpackage Structs
 */
class RegistreringBeskedType extends AbstractStructBase
{
    /**
     * The Registrering
     * Meta information extracted from the WSDL
     * - content: registrering
     * - minOccurs: 1
     * - ref: org:Registrering
     * @var \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\RegistreringType
     */
    protected \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\RegistreringType $Registrering;
    /**
     * The ObjektID
     * Meta information extracted from the WSDL
     * - definition: urn:oio:sagdok:referenceid:ASDD:1.0.0
     * @var \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\UnikIdType|null
     */
    protected ?\ItkDev\Serviceplatformen\SF1500\Organisation\StructType\UnikIdType $ObjektID = null;
    /**
     * Constructor method for RegistreringBeskedType
     * @uses RegistreringBeskedType::setRegistrering()
     * @uses RegistreringBeskedType::setObjektID()
     * @param \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\RegistreringType $registrering
     * @param \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\UnikIdType $objektID
     */
    public function __construct(\ItkDev\Serviceplatformen\SF1500\Organisation\StructType\RegistreringType $registrering, ?\ItkDev\Serviceplatformen\SF1500\Organisation\StructType\UnikIdType $objektID = null)
    {
        $this
            ->setRegistrering($registrering)
            ->setObjektID($objektID);
    }
    /**
     * Get Registrering value
     * @return \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\RegistreringType
     */
    public function getRegistrering(): \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\RegistreringType
    {
        return $this->Registrering;
    }
    /**
     * Set Registrering value
     * @param \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\RegistreringType $registrering
     * @return \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\RegistreringBeskedType
     */
    public function setRegistrering(\ItkDev\Serviceplatformen\SF1500\Organisation\StructType\RegistreringType $registrering): self
    {
        $this->Registrering = $registrering;
        
        return $this;
    }
    /**
     * Get ObjektID value
     * @return \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\UnikIdType|null
     */
    public function getObjektID(): ?\ItkDev\Serviceplatformen\SF1500\Organisation\StructType\UnikIdType
    {
        return $this->ObjektID;
    }
    /**
     * Set ObjektID value
     * @param \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\UnikIdType $objektID
     * @return \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\RegistreringBeskedType
     */
    public function setObjektID(?\ItkDev\Serviceplatformen\SF1500\Organisation\StructType\UnikIdType $objektID = null): self
    {
        $this->ObjektID = $objektID;
        
        return $this;
    }
}
