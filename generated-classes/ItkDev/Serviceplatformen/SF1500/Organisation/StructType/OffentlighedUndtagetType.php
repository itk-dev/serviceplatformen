<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF1500\Organisation\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OffentlighedUndtagetType StructType
 * Meta information extracted from the WSDL
 * - definition: urn:oio:sagdok:offentlighedundtaget:ADD:1.0.0
 * @subpackage Structs
 */
class OffentlighedUndtagetType extends AbstractStructBase
{
    /**
     * The TitelAlternativTekst
     * Meta information extracted from the WSDL
     * - content: alternativtitel
     * - ref: sd:TitelAlternativTekst
     * @var string|null
     */
    protected ?string $TitelAlternativTekst = null;
    /**
     * The OffentlighedUndtagetHjemmelTekst
     * Meta information extracted from the WSDL
     * - content: offentlighedundtagethjemmel
     * - ref: sd:OffentlighedUndtagetHjemmelTekst
     * @var string|null
     */
    protected ?string $OffentlighedUndtagetHjemmelTekst = null;
    /**
     * Constructor method for OffentlighedUndtagetType
     * @uses OffentlighedUndtagetType::setTitelAlternativTekst()
     * @uses OffentlighedUndtagetType::setOffentlighedUndtagetHjemmelTekst()
     * @param string $titelAlternativTekst
     * @param string $offentlighedUndtagetHjemmelTekst
     */
    public function __construct(?string $titelAlternativTekst = null, ?string $offentlighedUndtagetHjemmelTekst = null)
    {
        $this
            ->setTitelAlternativTekst($titelAlternativTekst)
            ->setOffentlighedUndtagetHjemmelTekst($offentlighedUndtagetHjemmelTekst);
    }
    /**
     * Get TitelAlternativTekst value
     * @return string|null
     */
    public function getTitelAlternativTekst(): ?string
    {
        return $this->TitelAlternativTekst;
    }
    /**
     * Set TitelAlternativTekst value
     * @param string $titelAlternativTekst
     * @return \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\OffentlighedUndtagetType
     */
    public function setTitelAlternativTekst(?string $titelAlternativTekst = null): self
    {
        // validation for constraint: string
        if (!is_null($titelAlternativTekst) && !is_string($titelAlternativTekst)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($titelAlternativTekst, true), gettype($titelAlternativTekst)), __LINE__);
        }
        $this->TitelAlternativTekst = $titelAlternativTekst;
        
        return $this;
    }
    /**
     * Get OffentlighedUndtagetHjemmelTekst value
     * @return string|null
     */
    public function getOffentlighedUndtagetHjemmelTekst(): ?string
    {
        return $this->OffentlighedUndtagetHjemmelTekst;
    }
    /**
     * Set OffentlighedUndtagetHjemmelTekst value
     * @param string $offentlighedUndtagetHjemmelTekst
     * @return \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\OffentlighedUndtagetType
     */
    public function setOffentlighedUndtagetHjemmelTekst(?string $offentlighedUndtagetHjemmelTekst = null): self
    {
        // validation for constraint: string
        if (!is_null($offentlighedUndtagetHjemmelTekst) && !is_string($offentlighedUndtagetHjemmelTekst)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($offentlighedUndtagetHjemmelTekst, true), gettype($offentlighedUndtagetHjemmelTekst)), __LINE__);
        }
        $this->OffentlighedUndtagetHjemmelTekst = $offentlighedUndtagetHjemmelTekst;
        
        return $this;
    }
}
