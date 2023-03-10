<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF1500\KlassifikationSystem\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FremsoegObjekthierarkiOutputType StructType
 * Meta information extracted from the WSDL
 * - definition: urn:oio:sts:fremsoegobjekthierarkioutputADD:2.0.0
 * @subpackage Structs
 */
class FremsoegObjekthierarkiOutputType extends BasicOutputType
{
    /**
     * The Klassifikationer
     * Meta information extracted from the WSDL
     * - content: klassifikationer
     * - ref: sts:Klassifikationer
     * @var \ItkDev\Serviceplatformen\SF1500\KlassifikationSystem\StructType\KlassifikationerOutputType|null
     */
    protected ?\ItkDev\Serviceplatformen\SF1500\KlassifikationSystem\StructType\KlassifikationerOutputType $Klassifikationer = null;
    /**
     * The Facetter
     * Meta information extracted from the WSDL
     * - content: facetter
     * - ref: sts:Facetter
     * @var \ItkDev\Serviceplatformen\SF1500\KlassifikationSystem\StructType\FacetterOutputType|null
     */
    protected ?\ItkDev\Serviceplatformen\SF1500\KlassifikationSystem\StructType\FacetterOutputType $Facetter = null;
    /**
     * The Klasser
     * Meta information extracted from the WSDL
     * - content: klasser
     * - ref: sts:Klasser
     * @var \ItkDev\Serviceplatformen\SF1500\KlassifikationSystem\StructType\KlasserOutputType|null
     */
    protected ?\ItkDev\Serviceplatformen\SF1500\KlassifikationSystem\StructType\KlasserOutputType $Klasser = null;
    /**
     * Constructor method for FremsoegObjekthierarkiOutputType
     * @uses FremsoegObjekthierarkiOutputType::setKlassifikationer()
     * @uses FremsoegObjekthierarkiOutputType::setFacetter()
     * @uses FremsoegObjekthierarkiOutputType::setKlasser()
     * @param \ItkDev\Serviceplatformen\SF1500\KlassifikationSystem\StructType\KlassifikationerOutputType $klassifikationer
     * @param \ItkDev\Serviceplatformen\SF1500\KlassifikationSystem\StructType\FacetterOutputType $facetter
     * @param \ItkDev\Serviceplatformen\SF1500\KlassifikationSystem\StructType\KlasserOutputType $klasser
     */
    public function __construct(?\ItkDev\Serviceplatformen\SF1500\KlassifikationSystem\StructType\KlassifikationerOutputType $klassifikationer = null, ?\ItkDev\Serviceplatformen\SF1500\KlassifikationSystem\StructType\FacetterOutputType $facetter = null, ?\ItkDev\Serviceplatformen\SF1500\KlassifikationSystem\StructType\KlasserOutputType $klasser = null)
    {
        $this
            ->setKlassifikationer($klassifikationer)
            ->setFacetter($facetter)
            ->setKlasser($klasser);
    }
    /**
     * Get Klassifikationer value
     * @return \ItkDev\Serviceplatformen\SF1500\KlassifikationSystem\StructType\KlassifikationerOutputType|null
     */
    public function getKlassifikationer(): ?\ItkDev\Serviceplatformen\SF1500\KlassifikationSystem\StructType\KlassifikationerOutputType
    {
        return $this->Klassifikationer;
    }
    /**
     * Set Klassifikationer value
     * @param \ItkDev\Serviceplatformen\SF1500\KlassifikationSystem\StructType\KlassifikationerOutputType $klassifikationer
     * @return \ItkDev\Serviceplatformen\SF1500\KlassifikationSystem\StructType\FremsoegObjekthierarkiOutputType
     */
    public function setKlassifikationer(?\ItkDev\Serviceplatformen\SF1500\KlassifikationSystem\StructType\KlassifikationerOutputType $klassifikationer = null): self
    {
        $this->Klassifikationer = $klassifikationer;
        
        return $this;
    }
    /**
     * Get Facetter value
     * @return \ItkDev\Serviceplatformen\SF1500\KlassifikationSystem\StructType\FacetterOutputType|null
     */
    public function getFacetter(): ?\ItkDev\Serviceplatformen\SF1500\KlassifikationSystem\StructType\FacetterOutputType
    {
        return $this->Facetter;
    }
    /**
     * Set Facetter value
     * @param \ItkDev\Serviceplatformen\SF1500\KlassifikationSystem\StructType\FacetterOutputType $facetter
     * @return \ItkDev\Serviceplatformen\SF1500\KlassifikationSystem\StructType\FremsoegObjekthierarkiOutputType
     */
    public function setFacetter(?\ItkDev\Serviceplatformen\SF1500\KlassifikationSystem\StructType\FacetterOutputType $facetter = null): self
    {
        $this->Facetter = $facetter;
        
        return $this;
    }
    /**
     * Get Klasser value
     * @return \ItkDev\Serviceplatformen\SF1500\KlassifikationSystem\StructType\KlasserOutputType|null
     */
    public function getKlasser(): ?\ItkDev\Serviceplatformen\SF1500\KlassifikationSystem\StructType\KlasserOutputType
    {
        return $this->Klasser;
    }
    /**
     * Set Klasser value
     * @param \ItkDev\Serviceplatformen\SF1500\KlassifikationSystem\StructType\KlasserOutputType $klasser
     * @return \ItkDev\Serviceplatformen\SF1500\KlassifikationSystem\StructType\FremsoegObjekthierarkiOutputType
     */
    public function setKlasser(?\ItkDev\Serviceplatformen\SF1500\KlassifikationSystem\StructType\KlasserOutputType $klasser = null): self
    {
        $this->Klasser = $klasser;
        
        return $this;
    }
}
