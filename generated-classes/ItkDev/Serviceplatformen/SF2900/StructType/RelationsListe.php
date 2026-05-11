<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF2900\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RelationsListe StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class RelationsListe extends AbstractStructBase
{
    /**
     * The VariantListe
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \ItkDev\Serviceplatformen\SF2900\StructType\VariantListeType
     */
    protected \ItkDev\Serviceplatformen\SF2900\StructType\VariantListeType $VariantListe;
    /**
     * The DokumentPartListe
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ItkDev\Serviceplatformen\SF2900\StructType\DokumentPartListeType|null
     */
    protected ?\ItkDev\Serviceplatformen\SF2900\StructType\DokumentPartListeType $DokumentPartListe = null;
    /**
     * Constructor method for RelationsListe
     * @uses RelationsListe::setVariantListe()
     * @uses RelationsListe::setDokumentPartListe()
     * @param \ItkDev\Serviceplatformen\SF2900\StructType\VariantListeType $variantListe
     * @param \ItkDev\Serviceplatformen\SF2900\StructType\DokumentPartListeType $dokumentPartListe
     */
    public function __construct(\ItkDev\Serviceplatformen\SF2900\StructType\VariantListeType $variantListe, ?\ItkDev\Serviceplatformen\SF2900\StructType\DokumentPartListeType $dokumentPartListe = null)
    {
        $this
            ->setVariantListe($variantListe)
            ->setDokumentPartListe($dokumentPartListe);
    }
    /**
     * Get VariantListe value
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\VariantListeType
     */
    public function getVariantListe(): \ItkDev\Serviceplatformen\SF2900\StructType\VariantListeType
    {
        return $this->VariantListe;
    }
    /**
     * Set VariantListe value
     * @param \ItkDev\Serviceplatformen\SF2900\StructType\VariantListeType $variantListe
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\RelationsListe
     */
    public function setVariantListe(\ItkDev\Serviceplatformen\SF2900\StructType\VariantListeType $variantListe): self
    {
        $this->VariantListe = $variantListe;
        
        return $this;
    }
    /**
     * Get DokumentPartListe value
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\DokumentPartListeType|null
     */
    public function getDokumentPartListe(): ?\ItkDev\Serviceplatformen\SF2900\StructType\DokumentPartListeType
    {
        return $this->DokumentPartListe;
    }
    /**
     * Set DokumentPartListe value
     * @param \ItkDev\Serviceplatformen\SF2900\StructType\DokumentPartListeType $dokumentPartListe
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\RelationsListe
     */
    public function setDokumentPartListe(?\ItkDev\Serviceplatformen\SF2900\StructType\DokumentPartListeType $dokumentPartListe = null): self
    {
        $this->DokumentPartListe = $dokumentPartListe;
        
        return $this;
    }
}
