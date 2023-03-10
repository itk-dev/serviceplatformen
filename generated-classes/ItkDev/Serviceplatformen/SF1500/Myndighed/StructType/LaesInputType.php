<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF1500\Myndighed\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LaesInputType StructType
 * Meta information extracted from the WSDL
 * - definition: urn:oio:sagdok:laesinput:ADD:1.0.0
 * @subpackage Structs
 */
class LaesInputType extends AbstractStructBase
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
     * The VirkningFraFilter
     * Meta information extracted from the WSDL
     * - content: virkningfrafilter
     * - minOccurs: 0
     * - ref: sd:VirkningFraFilter
     * @var \ItkDev\Serviceplatformen\SF1500\Myndighed\StructType\TidspunktType|null
     */
    protected ?\ItkDev\Serviceplatformen\SF1500\Myndighed\StructType\TidspunktType $VirkningFraFilter = null;
    /**
     * The VirkningTilFilter
     * Meta information extracted from the WSDL
     * - content: virkningtilfilter
     * - minOccurs: 0
     * - ref: sd:VirkningTilFilter
     * @var \ItkDev\Serviceplatformen\SF1500\Myndighed\StructType\TidspunktType|null
     */
    protected ?\ItkDev\Serviceplatformen\SF1500\Myndighed\StructType\TidspunktType $VirkningTilFilter = null;
    /**
     * The RegistreringFraFilter
     * Meta information extracted from the WSDL
     * - content: registreringfrafilter
     * - minOccurs: 0
     * - ref: sd:RegistreringFraFilter
     * @var \ItkDev\Serviceplatformen\SF1500\Myndighed\StructType\TidspunktType|null
     */
    protected ?\ItkDev\Serviceplatformen\SF1500\Myndighed\StructType\TidspunktType $RegistreringFraFilter = null;
    /**
     * The RegistreringTilFilter
     * Meta information extracted from the WSDL
     * - content: registreringtilfilter
     * - minOccurs: 0
     * - ref: sd:RegistreringTilFilter
     * @var \ItkDev\Serviceplatformen\SF1500\Myndighed\StructType\TidspunktType|null
     */
    protected ?\ItkDev\Serviceplatformen\SF1500\Myndighed\StructType\TidspunktType $RegistreringTilFilter = null;
    /**
     * Constructor method for LaesInputType
     * @uses LaesInputType::setUUIDIdentifikator()
     * @uses LaesInputType::setVirkningFraFilter()
     * @uses LaesInputType::setVirkningTilFilter()
     * @uses LaesInputType::setRegistreringFraFilter()
     * @uses LaesInputType::setRegistreringTilFilter()
     * @param string $uUIDIdentifikator
     * @param \ItkDev\Serviceplatformen\SF1500\Myndighed\StructType\TidspunktType $virkningFraFilter
     * @param \ItkDev\Serviceplatformen\SF1500\Myndighed\StructType\TidspunktType $virkningTilFilter
     * @param \ItkDev\Serviceplatformen\SF1500\Myndighed\StructType\TidspunktType $registreringFraFilter
     * @param \ItkDev\Serviceplatformen\SF1500\Myndighed\StructType\TidspunktType $registreringTilFilter
     */
    public function __construct(?string $uUIDIdentifikator = null, ?\ItkDev\Serviceplatformen\SF1500\Myndighed\StructType\TidspunktType $virkningFraFilter = null, ?\ItkDev\Serviceplatformen\SF1500\Myndighed\StructType\TidspunktType $virkningTilFilter = null, ?\ItkDev\Serviceplatformen\SF1500\Myndighed\StructType\TidspunktType $registreringFraFilter = null, ?\ItkDev\Serviceplatformen\SF1500\Myndighed\StructType\TidspunktType $registreringTilFilter = null)
    {
        $this
            ->setUUIDIdentifikator($uUIDIdentifikator)
            ->setVirkningFraFilter($virkningFraFilter)
            ->setVirkningTilFilter($virkningTilFilter)
            ->setRegistreringFraFilter($registreringFraFilter)
            ->setRegistreringTilFilter($registreringTilFilter);
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
     * @return \ItkDev\Serviceplatformen\SF1500\Myndighed\StructType\LaesInputType
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
     * Get VirkningFraFilter value
     * @return \ItkDev\Serviceplatformen\SF1500\Myndighed\StructType\TidspunktType|null
     */
    public function getVirkningFraFilter(): ?\ItkDev\Serviceplatformen\SF1500\Myndighed\StructType\TidspunktType
    {
        return $this->VirkningFraFilter;
    }
    /**
     * Set VirkningFraFilter value
     * @param \ItkDev\Serviceplatformen\SF1500\Myndighed\StructType\TidspunktType $virkningFraFilter
     * @return \ItkDev\Serviceplatformen\SF1500\Myndighed\StructType\LaesInputType
     */
    public function setVirkningFraFilter(?\ItkDev\Serviceplatformen\SF1500\Myndighed\StructType\TidspunktType $virkningFraFilter = null): self
    {
        $this->VirkningFraFilter = $virkningFraFilter;
        
        return $this;
    }
    /**
     * Get VirkningTilFilter value
     * @return \ItkDev\Serviceplatformen\SF1500\Myndighed\StructType\TidspunktType|null
     */
    public function getVirkningTilFilter(): ?\ItkDev\Serviceplatformen\SF1500\Myndighed\StructType\TidspunktType
    {
        return $this->VirkningTilFilter;
    }
    /**
     * Set VirkningTilFilter value
     * @param \ItkDev\Serviceplatformen\SF1500\Myndighed\StructType\TidspunktType $virkningTilFilter
     * @return \ItkDev\Serviceplatformen\SF1500\Myndighed\StructType\LaesInputType
     */
    public function setVirkningTilFilter(?\ItkDev\Serviceplatformen\SF1500\Myndighed\StructType\TidspunktType $virkningTilFilter = null): self
    {
        $this->VirkningTilFilter = $virkningTilFilter;
        
        return $this;
    }
    /**
     * Get RegistreringFraFilter value
     * @return \ItkDev\Serviceplatformen\SF1500\Myndighed\StructType\TidspunktType|null
     */
    public function getRegistreringFraFilter(): ?\ItkDev\Serviceplatformen\SF1500\Myndighed\StructType\TidspunktType
    {
        return $this->RegistreringFraFilter;
    }
    /**
     * Set RegistreringFraFilter value
     * @param \ItkDev\Serviceplatformen\SF1500\Myndighed\StructType\TidspunktType $registreringFraFilter
     * @return \ItkDev\Serviceplatformen\SF1500\Myndighed\StructType\LaesInputType
     */
    public function setRegistreringFraFilter(?\ItkDev\Serviceplatformen\SF1500\Myndighed\StructType\TidspunktType $registreringFraFilter = null): self
    {
        $this->RegistreringFraFilter = $registreringFraFilter;
        
        return $this;
    }
    /**
     * Get RegistreringTilFilter value
     * @return \ItkDev\Serviceplatformen\SF1500\Myndighed\StructType\TidspunktType|null
     */
    public function getRegistreringTilFilter(): ?\ItkDev\Serviceplatformen\SF1500\Myndighed\StructType\TidspunktType
    {
        return $this->RegistreringTilFilter;
    }
    /**
     * Set RegistreringTilFilter value
     * @param \ItkDev\Serviceplatformen\SF1500\Myndighed\StructType\TidspunktType $registreringTilFilter
     * @return \ItkDev\Serviceplatformen\SF1500\Myndighed\StructType\LaesInputType
     */
    public function setRegistreringTilFilter(?\ItkDev\Serviceplatformen\SF1500\Myndighed\StructType\TidspunktType $registreringTilFilter = null): self
    {
        $this->RegistreringTilFilter = $registreringTilFilter;
        
        return $this;
    }
}
