<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF2900\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DistributionDokumentType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DistributionDokumentType extends AbstractStructBase
{
    /**
     * The ID
     * Meta information extracted from the WSDL
     * - base: string
     * - maxOccurs: 1
     * - minOccurs: 1
     * - pattern: [a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}
     * @var string
     */
    protected string $ID;
    /**
     * The KLEEmneForslag
     * Meta information extracted from the WSDL
     * - base: string
     * - maxOccurs: 1
     * - minOccurs: 1
     * - pattern: [0-9][0-9][.][0-9][0-9][.][0-9][0-9]
     * @var string
     */
    protected string $KLEEmneForslag;
    /**
     * The Registrering
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \ItkDev\Serviceplatformen\SF2900\StructType\DokumentRegistreringType
     */
    protected \ItkDev\Serviceplatformen\SF2900\StructType\DokumentRegistreringType $Registrering;
    /**
     * The HandlingFacetForslag
     * Meta information extracted from the WSDL
     * - base: string
     * - maxOccurs: 1
     * - minOccurs: 0
     * - pattern: [A-Z,Æ,Ø,Å][0-9][0-9]
     * @var string|null
     */
    protected ?string $HandlingFacetForslag = null;
    /**
     * The SagForslag
     * Meta information extracted from the WSDL
     * - base: string
     * - maxOccurs: 1
     * - minOccurs: 0
     * - pattern: [a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}
     * @var string|null
     */
    protected ?string $SagForslag = null;
    /**
     * Constructor method for DistributionDokumentType
     * @uses DistributionDokumentType::setID()
     * @uses DistributionDokumentType::setKLEEmneForslag()
     * @uses DistributionDokumentType::setRegistrering()
     * @uses DistributionDokumentType::setHandlingFacetForslag()
     * @uses DistributionDokumentType::setSagForslag()
     * @param string $iD
     * @param string $kLEEmneForslag
     * @param \ItkDev\Serviceplatformen\SF2900\StructType\DokumentRegistreringType $registrering
     * @param string $handlingFacetForslag
     * @param string $sagForslag
     */
    public function __construct(string $iD, string $kLEEmneForslag, \ItkDev\Serviceplatformen\SF2900\StructType\DokumentRegistreringType $registrering, ?string $handlingFacetForslag = null, ?string $sagForslag = null)
    {
        $this
            ->setID($iD)
            ->setKLEEmneForslag($kLEEmneForslag)
            ->setRegistrering($registrering)
            ->setHandlingFacetForslag($handlingFacetForslag)
            ->setSagForslag($sagForslag);
    }
    /**
     * Get ID value
     * @return string
     */
    public function getID(): string
    {
        return $this->ID;
    }
    /**
     * Set ID value
     * @param string $iD
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\DistributionDokumentType
     */
    public function setID(string $iD): self
    {
        // validation for constraint: string
        if (!is_null($iD) && !is_string($iD)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($iD, true), gettype($iD)), __LINE__);
        }
        // validation for constraint: pattern([a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12})
        if (!is_null($iD) && !preg_match('/[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/', (string) $iD)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/', var_export($iD, true)), __LINE__);
        }
        $this->ID = $iD;
        
        return $this;
    }
    /**
     * Get KLEEmneForslag value
     * @return string
     */
    public function getKLEEmneForslag(): string
    {
        return $this->KLEEmneForslag;
    }
    /**
     * Set KLEEmneForslag value
     * @param string $kLEEmneForslag
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\DistributionDokumentType
     */
    public function setKLEEmneForslag(string $kLEEmneForslag): self
    {
        // validation for constraint: string
        if (!is_null($kLEEmneForslag) && !is_string($kLEEmneForslag)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($kLEEmneForslag, true), gettype($kLEEmneForslag)), __LINE__);
        }
        // validation for constraint: pattern([0-9][0-9][.][0-9][0-9][.][0-9][0-9])
        if (!is_null($kLEEmneForslag) && !preg_match('/[0-9][0-9][.][0-9][0-9][.][0-9][0-9]/', (string) $kLEEmneForslag)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[0-9][0-9][.][0-9][0-9][.][0-9][0-9]/', var_export($kLEEmneForslag, true)), __LINE__);
        }
        $this->KLEEmneForslag = $kLEEmneForslag;
        
        return $this;
    }
    /**
     * Get Registrering value
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\DokumentRegistreringType
     */
    public function getRegistrering(): \ItkDev\Serviceplatformen\SF2900\StructType\DokumentRegistreringType
    {
        return $this->Registrering;
    }
    /**
     * Set Registrering value
     * @param \ItkDev\Serviceplatformen\SF2900\StructType\DokumentRegistreringType $registrering
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\DistributionDokumentType
     */
    public function setRegistrering(\ItkDev\Serviceplatformen\SF2900\StructType\DokumentRegistreringType $registrering): self
    {
        $this->Registrering = $registrering;
        
        return $this;
    }
    /**
     * Get HandlingFacetForslag value
     * @return string|null
     */
    public function getHandlingFacetForslag(): ?string
    {
        return $this->HandlingFacetForslag;
    }
    /**
     * Set HandlingFacetForslag value
     * @param string $handlingFacetForslag
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\DistributionDokumentType
     */
    public function setHandlingFacetForslag(?string $handlingFacetForslag = null): self
    {
        // validation for constraint: string
        if (!is_null($handlingFacetForslag) && !is_string($handlingFacetForslag)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($handlingFacetForslag, true), gettype($handlingFacetForslag)), __LINE__);
        }
        // validation for constraint: pattern([A-Z,Æ,Ø,Å][0-9][0-9])
        if (!is_null($handlingFacetForslag) && !preg_match('/[A-Z,Æ,Ø,Å][0-9][0-9]/', (string) $handlingFacetForslag)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[A-Z,Æ,Ø,Å][0-9][0-9]/', var_export($handlingFacetForslag, true)), __LINE__);
        }
        $this->HandlingFacetForslag = $handlingFacetForslag;
        
        return $this;
    }
    /**
     * Get SagForslag value
     * @return string|null
     */
    public function getSagForslag(): ?string
    {
        return $this->SagForslag;
    }
    /**
     * Set SagForslag value
     * @param string $sagForslag
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\DistributionDokumentType
     */
    public function setSagForslag(?string $sagForslag = null): self
    {
        // validation for constraint: string
        if (!is_null($sagForslag) && !is_string($sagForslag)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sagForslag, true), gettype($sagForslag)), __LINE__);
        }
        // validation for constraint: pattern([a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12})
        if (!is_null($sagForslag) && !preg_match('/[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/', (string) $sagForslag)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/', var_export($sagForslag, true)), __LINE__);
        }
        $this->SagForslag = $sagForslag;
        
        return $this;
    }
}
