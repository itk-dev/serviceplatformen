<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RegistreringBeskedType StructType
 * Meta information extracted from the WSDL
 * - definition: urn:oio:sagdok:organisationregistreringbesked:ADD:1.0.0 | urn:oio:sagdok:organisationenhedregistreringbesked:ADD:1.0.0 | urn:oio:sagdok:organisationfunktionregistreringbesked:ADD:1.0.0 | urn:oio:sts:adresseregistreringbesked:ADD:1.0.0 |
 * urn:oio:sts:personregistreringbesked:ADD:1.0.0 | urn:oio:sagdok:brugerregistreringbesked:ADD:1.0.0 | urn:oio:sagdok:interessefaellesskabregistreringbesked:ADD:1.0.0 | urn:oio:sagdok:itsystemregistreringbesked:ADD:1.0.0 |
 * urn:oio:sts:myndighedregistreringbesked:ADD:1.0.0 | urn:oio:sts:virksomhedregistreringbesked:ADD:1.0.0
 * @subpackage Structs
 */
class RegistreringBeskedType extends AbstractStructBase
{
    /**
     * The Registrering
     * Meta information extracted from the WSDL
     * - content: registrering
     * - minOccurs: 1
     * - ref: org:Registrering | orgenhed:Registrering | orgfunk:Registrering | adresse:Registrering | person:Registrering | bruger:Registrering | intfs:Registrering | itsystem:Registrering | myndighed:Registrering | virksomhed:Registrering
     * @var \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\RegistreringType
     */
    protected \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\RegistreringType $Registrering;
    /**
     * The ObjektID
     * Meta information extracted from the WSDL
     * - definition: urn:oio:sagdok:referenceid:ASDD:1.0.0
     * @var \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\UnikIdType|null
     */
    protected ?\ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\UnikIdType $ObjektID = null;
    /**
     * The UUIDIdentifikator
     * Meta information extracted from the WSDL
     * - base: string
     * - content: uuid
     * - definition: urn:oio:sagdok:uuid:BDD:1.0.0
     * - pattern: [a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}
     * - ref: sd:UUIDIdentifikator
     * @var string|null
     */
    protected ?string $UUIDIdentifikator = null;
    /**
     * Constructor method for RegistreringBeskedType
     * @uses RegistreringBeskedType::setRegistrering()
     * @uses RegistreringBeskedType::setObjektID()
     * @uses RegistreringBeskedType::setUUIDIdentifikator()
     * @param \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\RegistreringType $registrering
     * @param \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\UnikIdType $objektID
     * @param string $uUIDIdentifikator
     */
    public function __construct(\ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\RegistreringType $registrering, ?\ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\UnikIdType $objektID = null, ?string $uUIDIdentifikator = null)
    {
        $this
            ->setRegistrering($registrering)
            ->setObjektID($objektID)
            ->setUUIDIdentifikator($uUIDIdentifikator);
    }
    /**
     * Get Registrering value
     * @return \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\RegistreringType
     */
    public function getRegistrering(): \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\RegistreringType
    {
        return $this->Registrering;
    }
    /**
     * Set Registrering value
     * @param \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\RegistreringType $registrering
     * @return \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\RegistreringBeskedType
     */
    public function setRegistrering(\ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\RegistreringType $registrering): self
    {
        $this->Registrering = $registrering;
        
        return $this;
    }
    /**
     * Get ObjektID value
     * @return \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\UnikIdType|null
     */
    public function getObjektID(): ?\ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\UnikIdType
    {
        return $this->ObjektID;
    }
    /**
     * Set ObjektID value
     * @param \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\UnikIdType $objektID
     * @return \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\RegistreringBeskedType
     */
    public function setObjektID(?\ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\UnikIdType $objektID = null): self
    {
        $this->ObjektID = $objektID;
        
        return $this;
    }
    /**
     * Get UUIDIdentifikator value
     * @return string|null
     */
    public function getUUIDIdentifikator(): ?string
    {
        return $this->UUIDIdentifikator;
    }
    /**
     * Set UUIDIdentifikator value
     * @param string $uUIDIdentifikator
     * @return \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\RegistreringBeskedType
     */
    public function setUUIDIdentifikator(?string $uUIDIdentifikator = null): self
    {
        // validation for constraint: string
        if (!is_null($uUIDIdentifikator) && !is_string($uUIDIdentifikator)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($uUIDIdentifikator, true), gettype($uUIDIdentifikator)), __LINE__);
        }
        // validation for constraint: pattern([a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12})
        if (!is_null($uUIDIdentifikator) && !preg_match('/[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/', $uUIDIdentifikator)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/', var_export($uUIDIdentifikator, true)), __LINE__);
        }
        $this->UUIDIdentifikator = $uUIDIdentifikator;
        
        return $this;
    }
}
