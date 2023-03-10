<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF1500\Myndighed\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SoegSagDokObjektType StructType
 * Meta information extracted from the WSDL
 * - definition: urn:oio:sagdok:soegsagdokobjekt:ADD:1.0.0
 * @subpackage Structs
 */
class SoegSagDokObjektType extends AbstractStructBase
{
    /**
     * The UUIDIdentifikator
     * Meta information extracted from the WSDL
     * - base: string
     * - content: uuid
     * - definition: urn:oio:sagdok:uuid:BDD:1.0.0
     * - minOccurs: 0
     * - pattern: [a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}
     * - ref: sd:UUIDIdentifikator
     * @var string|null
     */
    protected ?string $UUIDIdentifikator = null;
    /**
     * The SoegRegistrering
     * Meta information extracted from the WSDL
     * - content: registrering
     * - minOccurs: 0
     * - ref: sd:SoegRegistrering
     * @var \ItkDev\Serviceplatformen\SF1500\Myndighed\StructType\SoegRegistreringType|null
     */
    protected ?\ItkDev\Serviceplatformen\SF1500\Myndighed\StructType\SoegRegistreringType $SoegRegistrering = null;
    /**
     * The SoegVirkning
     * Meta information extracted from the WSDL
     * - content: virkning
     * - minOccurs: 0
     * - ref: sd:SoegVirkning
     * @var \ItkDev\Serviceplatformen\SF1500\Myndighed\StructType\SoegVirkningType|null
     */
    protected ?\ItkDev\Serviceplatformen\SF1500\Myndighed\StructType\SoegVirkningType $SoegVirkning = null;
    /**
     * Constructor method for SoegSagDokObjektType
     * @uses SoegSagDokObjektType::setUUIDIdentifikator()
     * @uses SoegSagDokObjektType::setSoegRegistrering()
     * @uses SoegSagDokObjektType::setSoegVirkning()
     * @param string $uUIDIdentifikator
     * @param \ItkDev\Serviceplatformen\SF1500\Myndighed\StructType\SoegRegistreringType $soegRegistrering
     * @param \ItkDev\Serviceplatformen\SF1500\Myndighed\StructType\SoegVirkningType $soegVirkning
     */
    public function __construct(?string $uUIDIdentifikator = null, ?\ItkDev\Serviceplatformen\SF1500\Myndighed\StructType\SoegRegistreringType $soegRegistrering = null, ?\ItkDev\Serviceplatformen\SF1500\Myndighed\StructType\SoegVirkningType $soegVirkning = null)
    {
        $this
            ->setUUIDIdentifikator($uUIDIdentifikator)
            ->setSoegRegistrering($soegRegistrering)
            ->setSoegVirkning($soegVirkning);
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
     * @return \ItkDev\Serviceplatformen\SF1500\Myndighed\StructType\SoegSagDokObjektType
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
     * Get SoegRegistrering value
     * @return \ItkDev\Serviceplatformen\SF1500\Myndighed\StructType\SoegRegistreringType|null
     */
    public function getSoegRegistrering(): ?\ItkDev\Serviceplatformen\SF1500\Myndighed\StructType\SoegRegistreringType
    {
        return $this->SoegRegistrering;
    }
    /**
     * Set SoegRegistrering value
     * @param \ItkDev\Serviceplatformen\SF1500\Myndighed\StructType\SoegRegistreringType $soegRegistrering
     * @return \ItkDev\Serviceplatformen\SF1500\Myndighed\StructType\SoegSagDokObjektType
     */
    public function setSoegRegistrering(?\ItkDev\Serviceplatformen\SF1500\Myndighed\StructType\SoegRegistreringType $soegRegistrering = null): self
    {
        $this->SoegRegistrering = $soegRegistrering;
        
        return $this;
    }
    /**
     * Get SoegVirkning value
     * @return \ItkDev\Serviceplatformen\SF1500\Myndighed\StructType\SoegVirkningType|null
     */
    public function getSoegVirkning(): ?\ItkDev\Serviceplatformen\SF1500\Myndighed\StructType\SoegVirkningType
    {
        return $this->SoegVirkning;
    }
    /**
     * Set SoegVirkning value
     * @param \ItkDev\Serviceplatformen\SF1500\Myndighed\StructType\SoegVirkningType $soegVirkning
     * @return \ItkDev\Serviceplatformen\SF1500\Myndighed\StructType\SoegSagDokObjektType
     */
    public function setSoegVirkning(?\ItkDev\Serviceplatformen\SF1500\Myndighed\StructType\SoegVirkningType $soegVirkning = null): self
    {
        $this->SoegVirkning = $soegVirkning;
        
        return $this;
    }
}
