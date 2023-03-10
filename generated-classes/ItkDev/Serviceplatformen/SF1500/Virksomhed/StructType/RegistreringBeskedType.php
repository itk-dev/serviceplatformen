<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF1500\Virksomhed\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RegistreringBeskedType StructType
 * Meta information extracted from the WSDL
 * - definition: urn:oio:sts:virksomhedregistreringbesked:ADD:1.0.0
 * @subpackage Structs
 */
class RegistreringBeskedType extends AbstractStructBase
{
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
     * The Registrering
     * Meta information extracted from the WSDL
     * - content: registrering
     * - ref: virksomhed:Registrering
     * @var \ItkDev\Serviceplatformen\SF1500\Virksomhed\StructType\RegistreringType|null
     */
    protected ?\ItkDev\Serviceplatformen\SF1500\Virksomhed\StructType\RegistreringType $Registrering = null;
    /**
     * Constructor method for RegistreringBeskedType
     * @uses RegistreringBeskedType::setUUIDIdentifikator()
     * @uses RegistreringBeskedType::setRegistrering()
     * @param string $uUIDIdentifikator
     * @param \ItkDev\Serviceplatformen\SF1500\Virksomhed\StructType\RegistreringType $registrering
     */
    public function __construct(?string $uUIDIdentifikator = null, ?\ItkDev\Serviceplatformen\SF1500\Virksomhed\StructType\RegistreringType $registrering = null)
    {
        $this
            ->setUUIDIdentifikator($uUIDIdentifikator)
            ->setRegistrering($registrering);
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
     * @return \ItkDev\Serviceplatformen\SF1500\Virksomhed\StructType\RegistreringBeskedType
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
    /**
     * Get Registrering value
     * @return \ItkDev\Serviceplatformen\SF1500\Virksomhed\StructType\RegistreringType|null
     */
    public function getRegistrering(): ?\ItkDev\Serviceplatformen\SF1500\Virksomhed\StructType\RegistreringType
    {
        return $this->Registrering;
    }
    /**
     * Set Registrering value
     * @param \ItkDev\Serviceplatformen\SF1500\Virksomhed\StructType\RegistreringType $registrering
     * @return \ItkDev\Serviceplatformen\SF1500\Virksomhed\StructType\RegistreringBeskedType
     */
    public function setRegistrering(?\ItkDev\Serviceplatformen\SF1500\Virksomhed\StructType\RegistreringType $registrering = null): self
    {
        $this->Registrering = $registrering;
        
        return $this;
    }
}
