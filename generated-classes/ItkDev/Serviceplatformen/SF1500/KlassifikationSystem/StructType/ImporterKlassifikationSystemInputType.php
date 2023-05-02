<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF1500\KlassifikationSystem\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ImporterKlassifikationSystemInputType StructType
 * Meta information extracted from the WSDL
 * - definition: urn:oio:sts:klassifikationssystemimportinputtype:ADD:2.0.0
 * @subpackage Structs
 */
class ImporterKlassifikationSystemInputType extends AbstractStructBase
{
    /**
     * The Klassifikation
     * Meta information extracted from the WSDL
     * - content: urn:oio:sagdok:klassifikation:ADD:2.0.0
     * - maxOccurs: 1
     * - minOccurs: 1
     * - ref: klassifikation:Klassifikation
     * @var \ItkDev\Serviceplatformen\SF1500\KlassifikationSystem\StructType\KlassifikationType
     */
    protected \ItkDev\Serviceplatformen\SF1500\KlassifikationSystem\StructType\KlassifikationType $Klassifikation;
    /**
     * The FacetterInput
     * Meta information extracted from the WSDL
     * - content: facetter
     * - ref: sts:FacetterInput
     * @var \ItkDev\Serviceplatformen\SF1500\KlassifikationSystem\StructType\FacetterInputType|null
     */
    protected ?\ItkDev\Serviceplatformen\SF1500\KlassifikationSystem\StructType\FacetterInputType $FacetterInput = null;
    /**
     * The KlasserInput
     * Meta information extracted from the WSDL
     * - content: klasser
     * - ref: sts:KlasserInput
     * @var \ItkDev\Serviceplatformen\SF1500\KlassifikationSystem\StructType\KlasserInputType|null
     */
    protected ?\ItkDev\Serviceplatformen\SF1500\KlassifikationSystem\StructType\KlasserInputType $KlasserInput = null;
    /**
     * Constructor method for ImporterKlassifikationSystemInputType
     * @uses ImporterKlassifikationSystemInputType::setKlassifikation()
     * @uses ImporterKlassifikationSystemInputType::setFacetterInput()
     * @uses ImporterKlassifikationSystemInputType::setKlasserInput()
     * @param \ItkDev\Serviceplatformen\SF1500\KlassifikationSystem\StructType\KlassifikationType $klassifikation
     * @param \ItkDev\Serviceplatformen\SF1500\KlassifikationSystem\StructType\FacetterInputType $facetterInput
     * @param \ItkDev\Serviceplatformen\SF1500\KlassifikationSystem\StructType\KlasserInputType $klasserInput
     */
    public function __construct(\ItkDev\Serviceplatformen\SF1500\KlassifikationSystem\StructType\KlassifikationType $klassifikation, ?\ItkDev\Serviceplatformen\SF1500\KlassifikationSystem\StructType\FacetterInputType $facetterInput = null, ?\ItkDev\Serviceplatformen\SF1500\KlassifikationSystem\StructType\KlasserInputType $klasserInput = null)
    {
        $this
            ->setKlassifikation($klassifikation)
            ->setFacetterInput($facetterInput)
            ->setKlasserInput($klasserInput);
    }
    /**
     * Get Klassifikation value
     * @return \ItkDev\Serviceplatformen\SF1500\KlassifikationSystem\StructType\KlassifikationType
     */
    public function getKlassifikation(): \ItkDev\Serviceplatformen\SF1500\KlassifikationSystem\StructType\KlassifikationType
    {
        return $this->Klassifikation;
    }
    /**
     * Set Klassifikation value
     * @param \ItkDev\Serviceplatformen\SF1500\KlassifikationSystem\StructType\KlassifikationType $klassifikation
     * @return \ItkDev\Serviceplatformen\SF1500\KlassifikationSystem\StructType\ImporterKlassifikationSystemInputType
     */
    public function setKlassifikation(\ItkDev\Serviceplatformen\SF1500\KlassifikationSystem\StructType\KlassifikationType $klassifikation): self
    {
        $this->Klassifikation = $klassifikation;
        
        return $this;
    }
    /**
     * Get FacetterInput value
     * @return \ItkDev\Serviceplatformen\SF1500\KlassifikationSystem\StructType\FacetterInputType|null
     */
    public function getFacetterInput(): ?\ItkDev\Serviceplatformen\SF1500\KlassifikationSystem\StructType\FacetterInputType
    {
        return $this->FacetterInput;
    }
    /**
     * Set FacetterInput value
     * @param \ItkDev\Serviceplatformen\SF1500\KlassifikationSystem\StructType\FacetterInputType $facetterInput
     * @return \ItkDev\Serviceplatformen\SF1500\KlassifikationSystem\StructType\ImporterKlassifikationSystemInputType
     */
    public function setFacetterInput(?\ItkDev\Serviceplatformen\SF1500\KlassifikationSystem\StructType\FacetterInputType $facetterInput = null): self
    {
        $this->FacetterInput = $facetterInput;
        
        return $this;
    }
    /**
     * Get KlasserInput value
     * @return \ItkDev\Serviceplatformen\SF1500\KlassifikationSystem\StructType\KlasserInputType|null
     */
    public function getKlasserInput(): ?\ItkDev\Serviceplatformen\SF1500\KlassifikationSystem\StructType\KlasserInputType
    {
        return $this->KlasserInput;
    }
    /**
     * Set KlasserInput value
     * @param \ItkDev\Serviceplatformen\SF1500\KlassifikationSystem\StructType\KlasserInputType $klasserInput
     * @return \ItkDev\Serviceplatformen\SF1500\KlassifikationSystem\StructType\ImporterKlassifikationSystemInputType
     */
    public function setKlasserInput(?\ItkDev\Serviceplatformen\SF1500\KlassifikationSystem\StructType\KlasserInputType $klasserInput = null): self
    {
        $this->KlasserInput = $klasserInput;
        
        return $this;
    }
}
