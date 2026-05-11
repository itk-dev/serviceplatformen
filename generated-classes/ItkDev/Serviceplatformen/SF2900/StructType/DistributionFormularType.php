<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF2900\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DistributionFormularType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DistributionFormularType extends AbstractStructBase
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
     * The Meddelelse
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \ItkDev\Serviceplatformen\SF2900\StructType\MeddelelseType
     */
    protected \ItkDev\Serviceplatformen\SF2900\StructType\MeddelelseType $Meddelelse;
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
     * Constructor method for DistributionFormularType
     * @uses DistributionFormularType::setID()
     * @uses DistributionFormularType::setKLEEmneForslag()
     * @uses DistributionFormularType::setMeddelelse()
     * @uses DistributionFormularType::setHandlingFacetForslag()
     * @param string $iD
     * @param string $kLEEmneForslag
     * @param \ItkDev\Serviceplatformen\SF2900\StructType\MeddelelseType $meddelelse
     * @param string $handlingFacetForslag
     */
    public function __construct(string $iD, string $kLEEmneForslag, \ItkDev\Serviceplatformen\SF2900\StructType\MeddelelseType $meddelelse, ?string $handlingFacetForslag = null)
    {
        $this
            ->setID($iD)
            ->setKLEEmneForslag($kLEEmneForslag)
            ->setMeddelelse($meddelelse)
            ->setHandlingFacetForslag($handlingFacetForslag);
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
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\DistributionFormularType
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
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\DistributionFormularType
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
     * Get Meddelelse value
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\MeddelelseType
     */
    public function getMeddelelse(): \ItkDev\Serviceplatformen\SF2900\StructType\MeddelelseType
    {
        return $this->Meddelelse;
    }
    /**
     * Set Meddelelse value
     * @param \ItkDev\Serviceplatformen\SF2900\StructType\MeddelelseType $meddelelse
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\DistributionFormularType
     */
    public function setMeddelelse(\ItkDev\Serviceplatformen\SF2900\StructType\MeddelelseType $meddelelse): self
    {
        $this->Meddelelse = $meddelelse;
        
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
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\DistributionFormularType
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
}
