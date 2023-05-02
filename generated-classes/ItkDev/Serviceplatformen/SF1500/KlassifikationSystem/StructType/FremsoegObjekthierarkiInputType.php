<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF1500\KlassifikationSystem\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FremsoegObjekthierarkiInputType StructType
 * Meta information extracted from the WSDL
 * - definition: urn:oio:sts:fremsoegobjekthierarkiinputADD:2.0.0
 * @subpackage Structs
 */
class FremsoegObjekthierarkiInputType extends SoegInputType
{
    /**
     * The KlassifikationSoegEgenskab
     * Meta information extracted from the WSDL
     * - content: klassifikationegenskaber
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: sts:KlassifikationSoegEgenskab
     * @var \ItkDev\Serviceplatformen\SF1500\KlassifikationSystem\StructType\EgenskabType|null
     */
    protected ?\ItkDev\Serviceplatformen\SF1500\KlassifikationSystem\StructType\EgenskabType $KlassifikationSoegEgenskab = null;
    /**
     * The FacetSoegEgenskab
     * Meta information extracted from the WSDL
     * - content: facetegenskaber
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: sts:FacetSoegEgenskab
     * @var \ItkDev\Serviceplatformen\SF1500\KlassifikationSystem\StructType\EgenskabType|null
     */
    protected ?\ItkDev\Serviceplatformen\SF1500\KlassifikationSystem\StructType\EgenskabType $FacetSoegEgenskab = null;
    /**
     * The KlasseSoegEgenskab
     * Meta information extracted from the WSDL
     * - content: klasseegenskaber
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: sts:KlasseSoegEgenskab
     * @var \ItkDev\Serviceplatformen\SF1500\KlassifikationSystem\StructType\EgenskabType|null
     */
    protected ?\ItkDev\Serviceplatformen\SF1500\KlassifikationSystem\StructType\EgenskabType $KlasseSoegEgenskab = null;
    /**
     * Constructor method for FremsoegObjekthierarkiInputType
     * @uses FremsoegObjekthierarkiInputType::setKlassifikationSoegEgenskab()
     * @uses FremsoegObjekthierarkiInputType::setFacetSoegEgenskab()
     * @uses FremsoegObjekthierarkiInputType::setKlasseSoegEgenskab()
     * @param \ItkDev\Serviceplatformen\SF1500\KlassifikationSystem\StructType\EgenskabType $klassifikationSoegEgenskab
     * @param \ItkDev\Serviceplatformen\SF1500\KlassifikationSystem\StructType\EgenskabType $facetSoegEgenskab
     * @param \ItkDev\Serviceplatformen\SF1500\KlassifikationSystem\StructType\EgenskabType $klasseSoegEgenskab
     */
    public function __construct(?\ItkDev\Serviceplatformen\SF1500\KlassifikationSystem\StructType\EgenskabType $klassifikationSoegEgenskab = null, ?\ItkDev\Serviceplatformen\SF1500\KlassifikationSystem\StructType\EgenskabType $facetSoegEgenskab = null, ?\ItkDev\Serviceplatformen\SF1500\KlassifikationSystem\StructType\EgenskabType $klasseSoegEgenskab = null)
    {
        $this
            ->setKlassifikationSoegEgenskab($klassifikationSoegEgenskab)
            ->setFacetSoegEgenskab($facetSoegEgenskab)
            ->setKlasseSoegEgenskab($klasseSoegEgenskab);
    }
    /**
     * Get KlassifikationSoegEgenskab value
     * @return \ItkDev\Serviceplatformen\SF1500\KlassifikationSystem\StructType\EgenskabType|null
     */
    public function getKlassifikationSoegEgenskab(): ?\ItkDev\Serviceplatformen\SF1500\KlassifikationSystem\StructType\EgenskabType
    {
        return $this->KlassifikationSoegEgenskab;
    }
    /**
     * Set KlassifikationSoegEgenskab value
     * @param \ItkDev\Serviceplatformen\SF1500\KlassifikationSystem\StructType\EgenskabType $klassifikationSoegEgenskab
     * @return \ItkDev\Serviceplatformen\SF1500\KlassifikationSystem\StructType\FremsoegObjekthierarkiInputType
     */
    public function setKlassifikationSoegEgenskab(?\ItkDev\Serviceplatformen\SF1500\KlassifikationSystem\StructType\EgenskabType $klassifikationSoegEgenskab = null): self
    {
        $this->KlassifikationSoegEgenskab = $klassifikationSoegEgenskab;
        
        return $this;
    }
    /**
     * Get FacetSoegEgenskab value
     * @return \ItkDev\Serviceplatformen\SF1500\KlassifikationSystem\StructType\EgenskabType|null
     */
    public function getFacetSoegEgenskab(): ?\ItkDev\Serviceplatformen\SF1500\KlassifikationSystem\StructType\EgenskabType
    {
        return $this->FacetSoegEgenskab;
    }
    /**
     * Set FacetSoegEgenskab value
     * @param \ItkDev\Serviceplatformen\SF1500\KlassifikationSystem\StructType\EgenskabType $facetSoegEgenskab
     * @return \ItkDev\Serviceplatformen\SF1500\KlassifikationSystem\StructType\FremsoegObjekthierarkiInputType
     */
    public function setFacetSoegEgenskab(?\ItkDev\Serviceplatformen\SF1500\KlassifikationSystem\StructType\EgenskabType $facetSoegEgenskab = null): self
    {
        $this->FacetSoegEgenskab = $facetSoegEgenskab;
        
        return $this;
    }
    /**
     * Get KlasseSoegEgenskab value
     * @return \ItkDev\Serviceplatformen\SF1500\KlassifikationSystem\StructType\EgenskabType|null
     */
    public function getKlasseSoegEgenskab(): ?\ItkDev\Serviceplatformen\SF1500\KlassifikationSystem\StructType\EgenskabType
    {
        return $this->KlasseSoegEgenskab;
    }
    /**
     * Set KlasseSoegEgenskab value
     * @param \ItkDev\Serviceplatformen\SF1500\KlassifikationSystem\StructType\EgenskabType $klasseSoegEgenskab
     * @return \ItkDev\Serviceplatformen\SF1500\KlassifikationSystem\StructType\FremsoegObjekthierarkiInputType
     */
    public function setKlasseSoegEgenskab(?\ItkDev\Serviceplatformen\SF1500\KlassifikationSystem\StructType\EgenskabType $klasseSoegEgenskab = null): self
    {
        $this->KlasseSoegEgenskab = $klasseSoegEgenskab;
        
        return $this;
    }
}
