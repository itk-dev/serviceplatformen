<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF2900\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OffentlighedUndtagetType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class OffentlighedUndtagetType extends AbstractStructBase
{
    /**
     * The TitelAlternativTekst
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $TitelAlternativTekst;
    /**
     * The HjemmelTekst
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $HjemmelTekst;
    /**
     * Constructor method for OffentlighedUndtagetType
     * @uses OffentlighedUndtagetType::setTitelAlternativTekst()
     * @uses OffentlighedUndtagetType::setHjemmelTekst()
     * @param string $titelAlternativTekst
     * @param string $hjemmelTekst
     */
    public function __construct(string $titelAlternativTekst, string $hjemmelTekst)
    {
        $this
            ->setTitelAlternativTekst($titelAlternativTekst)
            ->setHjemmelTekst($hjemmelTekst);
    }
    /**
     * Get TitelAlternativTekst value
     * @return string
     */
    public function getTitelAlternativTekst(): string
    {
        return $this->TitelAlternativTekst;
    }
    /**
     * Set TitelAlternativTekst value
     * @param string $titelAlternativTekst
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\OffentlighedUndtagetType
     */
    public function setTitelAlternativTekst(string $titelAlternativTekst): self
    {
        // validation for constraint: string
        if (!is_null($titelAlternativTekst) && !is_string($titelAlternativTekst)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($titelAlternativTekst, true), gettype($titelAlternativTekst)), __LINE__);
        }
        $this->TitelAlternativTekst = $titelAlternativTekst;
        
        return $this;
    }
    /**
     * Get HjemmelTekst value
     * @return string
     */
    public function getHjemmelTekst(): string
    {
        return $this->HjemmelTekst;
    }
    /**
     * Set HjemmelTekst value
     * @param string $hjemmelTekst
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\OffentlighedUndtagetType
     */
    public function setHjemmelTekst(string $hjemmelTekst): self
    {
        // validation for constraint: string
        if (!is_null($hjemmelTekst) && !is_string($hjemmelTekst)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($hjemmelTekst, true), gettype($hjemmelTekst)), __LINE__);
        }
        $this->HjemmelTekst = $hjemmelTekst;
        
        return $this;
    }
}
