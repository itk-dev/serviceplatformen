<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF1600\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AuthorityContextType StructType
 * @subpackage Structs
 */
class AuthorityContextType extends AbstractStructBase
{
    /**
     * The MunicipalityCVR
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxOccurs: 1
     * - minOccurs: 1
     * - pattern: [0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9]
     * @var string
     */
    protected string $MunicipalityCVR;
    /**
     * Constructor method for AuthorityContextType
     * @uses AuthorityContextType::setMunicipalityCVR()
     * @param string $municipalityCVR
     */
    public function __construct(string $municipalityCVR)
    {
        $this
            ->setMunicipalityCVR($municipalityCVR);
    }
    /**
     * Get MunicipalityCVR value
     * @return string
     */
    public function getMunicipalityCVR(): string
    {
        return $this->MunicipalityCVR;
    }
    /**
     * Set MunicipalityCVR value
     * @param string $municipalityCVR
     * @return \ItkDev\Serviceplatformen\SF1600\StructType\AuthorityContextType
     */
    public function setMunicipalityCVR(string $municipalityCVR): self
    {
        // validation for constraint: string
        if (!is_null($municipalityCVR) && !is_string($municipalityCVR)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($municipalityCVR, true), gettype($municipalityCVR)), __LINE__);
        }
        // validation for constraint: pattern([0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9])
        if (!is_null($municipalityCVR) && !preg_match('/[0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9]/', $municipalityCVR)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9]/', var_export($municipalityCVR, true)), __LINE__);
        }
        $this->MunicipalityCVR = $municipalityCVR;
        
        return $this;
    }
}
