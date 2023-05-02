<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF1500\OrganisationAdministration\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SoegInputType StructType
 * Meta information extracted from the WSDL
 * - definition: urn:oio:sagdok:soeginput:ADD:1.0.0
 * @subpackage Structs
 */
class SoegInputType extends AbstractStructBase
{
    /**
     * The FoersteResultatReference
     * Meta information extracted from the WSDL
     * - content: foersteresultat
     * - minOccurs: 0
     * - ref: sd:FoersteResultatReference
     * @var int|null
     */
    protected ?int $FoersteResultatReference = null;
    /**
     * The MaksimalAntalKvantitet
     * Meta information extracted from the WSDL
     * - content: maksimalantalresultater
     * - minOccurs: 0
     * - ref: sd:MaksimalAntalKvantitet
     * @var int|null
     */
    protected ?int $MaksimalAntalKvantitet = null;
    /**
     * The SoegRegistrering
     * Meta information extracted from the WSDL
     * - content: soegregistrering
     * - minOccurs: 0
     * - ref: sd:SoegRegistrering
     * @var \ItkDev\Serviceplatformen\SF1500\OrganisationAdministration\StructType\SoegRegistreringType|null
     */
    protected ?\ItkDev\Serviceplatformen\SF1500\OrganisationAdministration\StructType\SoegRegistreringType $SoegRegistrering = null;
    /**
     * The SoegVirkning
     * Meta information extracted from the WSDL
     * - content: soegvirkning
     * - minOccurs: 0
     * - ref: sd:SoegVirkning
     * @var \ItkDev\Serviceplatformen\SF1500\OrganisationAdministration\StructType\SoegVirkningType|null
     */
    protected ?\ItkDev\Serviceplatformen\SF1500\OrganisationAdministration\StructType\SoegVirkningType $SoegVirkning = null;
    /**
     * Constructor method for SoegInputType
     * @uses SoegInputType::setFoersteResultatReference()
     * @uses SoegInputType::setMaksimalAntalKvantitet()
     * @uses SoegInputType::setSoegRegistrering()
     * @uses SoegInputType::setSoegVirkning()
     * @param int $foersteResultatReference
     * @param int $maksimalAntalKvantitet
     * @param \ItkDev\Serviceplatformen\SF1500\OrganisationAdministration\StructType\SoegRegistreringType $soegRegistrering
     * @param \ItkDev\Serviceplatformen\SF1500\OrganisationAdministration\StructType\SoegVirkningType $soegVirkning
     */
    public function __construct(?int $foersteResultatReference = null, ?int $maksimalAntalKvantitet = null, ?\ItkDev\Serviceplatformen\SF1500\OrganisationAdministration\StructType\SoegRegistreringType $soegRegistrering = null, ?\ItkDev\Serviceplatformen\SF1500\OrganisationAdministration\StructType\SoegVirkningType $soegVirkning = null)
    {
        $this
            ->setFoersteResultatReference($foersteResultatReference)
            ->setMaksimalAntalKvantitet($maksimalAntalKvantitet)
            ->setSoegRegistrering($soegRegistrering)
            ->setSoegVirkning($soegVirkning);
    }
    /**
     * Get FoersteResultatReference value
     * @return int|null
     */
    public function getFoersteResultatReference(): ?int
    {
        return $this->FoersteResultatReference;
    }
    /**
     * Set FoersteResultatReference value
     * @param int $foersteResultatReference
     * @return \ItkDev\Serviceplatformen\SF1500\OrganisationAdministration\StructType\SoegInputType
     */
    public function setFoersteResultatReference(?int $foersteResultatReference = null): self
    {
        // validation for constraint: int
        if (!is_null($foersteResultatReference) && !(is_int($foersteResultatReference) || ctype_digit($foersteResultatReference))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($foersteResultatReference, true), gettype($foersteResultatReference)), __LINE__);
        }
        $this->FoersteResultatReference = $foersteResultatReference;
        
        return $this;
    }
    /**
     * Get MaksimalAntalKvantitet value
     * @return int|null
     */
    public function getMaksimalAntalKvantitet(): ?int
    {
        return $this->MaksimalAntalKvantitet;
    }
    /**
     * Set MaksimalAntalKvantitet value
     * @param int $maksimalAntalKvantitet
     * @return \ItkDev\Serviceplatformen\SF1500\OrganisationAdministration\StructType\SoegInputType
     */
    public function setMaksimalAntalKvantitet(?int $maksimalAntalKvantitet = null): self
    {
        // validation for constraint: int
        if (!is_null($maksimalAntalKvantitet) && !(is_int($maksimalAntalKvantitet) || ctype_digit($maksimalAntalKvantitet))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($maksimalAntalKvantitet, true), gettype($maksimalAntalKvantitet)), __LINE__);
        }
        $this->MaksimalAntalKvantitet = $maksimalAntalKvantitet;
        
        return $this;
    }
    /**
     * Get SoegRegistrering value
     * @return \ItkDev\Serviceplatformen\SF1500\OrganisationAdministration\StructType\SoegRegistreringType|null
     */
    public function getSoegRegistrering(): ?\ItkDev\Serviceplatformen\SF1500\OrganisationAdministration\StructType\SoegRegistreringType
    {
        return $this->SoegRegistrering;
    }
    /**
     * Set SoegRegistrering value
     * @param \ItkDev\Serviceplatformen\SF1500\OrganisationAdministration\StructType\SoegRegistreringType $soegRegistrering
     * @return \ItkDev\Serviceplatformen\SF1500\OrganisationAdministration\StructType\SoegInputType
     */
    public function setSoegRegistrering(?\ItkDev\Serviceplatformen\SF1500\OrganisationAdministration\StructType\SoegRegistreringType $soegRegistrering = null): self
    {
        $this->SoegRegistrering = $soegRegistrering;
        
        return $this;
    }
    /**
     * Get SoegVirkning value
     * @return \ItkDev\Serviceplatformen\SF1500\OrganisationAdministration\StructType\SoegVirkningType|null
     */
    public function getSoegVirkning(): ?\ItkDev\Serviceplatformen\SF1500\OrganisationAdministration\StructType\SoegVirkningType
    {
        return $this->SoegVirkning;
    }
    /**
     * Set SoegVirkning value
     * @param \ItkDev\Serviceplatformen\SF1500\OrganisationAdministration\StructType\SoegVirkningType $soegVirkning
     * @return \ItkDev\Serviceplatformen\SF1500\OrganisationAdministration\StructType\SoegInputType
     */
    public function setSoegVirkning(?\ItkDev\Serviceplatformen\SF1500\OrganisationAdministration\StructType\SoegVirkningType $soegVirkning = null): self
    {
        $this->SoegVirkning = $soegVirkning;
        
        return $this;
    }
}
