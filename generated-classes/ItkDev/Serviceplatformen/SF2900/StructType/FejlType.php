<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF2900\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FejlType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class FejlType extends AbstractStructBase
{
    /**
     * The FejlKode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $FejlKode;
    /**
     * The FejlTekst
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $FejlTekst;
    /**
     * Constructor method for FejlType
     * @uses FejlType::setFejlKode()
     * @uses FejlType::setFejlTekst()
     * @param string $fejlKode
     * @param string $fejlTekst
     */
    public function __construct(string $fejlKode, string $fejlTekst)
    {
        $this
            ->setFejlKode($fejlKode)
            ->setFejlTekst($fejlTekst);
    }
    /**
     * Get FejlKode value
     * @return string
     */
    public function getFejlKode(): string
    {
        return $this->FejlKode;
    }
    /**
     * Set FejlKode value
     * @param string $fejlKode
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\FejlType
     */
    public function setFejlKode(string $fejlKode): self
    {
        // validation for constraint: string
        if (!is_null($fejlKode) && !is_string($fejlKode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fejlKode, true), gettype($fejlKode)), __LINE__);
        }
        $this->FejlKode = $fejlKode;
        
        return $this;
    }
    /**
     * Get FejlTekst value
     * @return string
     */
    public function getFejlTekst(): string
    {
        return $this->FejlTekst;
    }
    /**
     * Set FejlTekst value
     * @param string $fejlTekst
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\FejlType
     */
    public function setFejlTekst(string $fejlTekst): self
    {
        // validation for constraint: string
        if (!is_null($fejlTekst) && !is_string($fejlTekst)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fejlTekst, true), gettype($fejlTekst)), __LINE__);
        }
        $this->FejlTekst = $fejlTekst;
        
        return $this;
    }
}
