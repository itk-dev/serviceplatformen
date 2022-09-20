<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF1600\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DokumentParametreType StructType
 * @subpackage Structs
 */
class DokumentParametreType extends AbstractStructBase
{
    /**
     * The TitelTekst
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: sd:TitelTekst
     * @var string|null
     */
    protected ?string $TitelTekst = null;
    /**
     * The UUIDIdentifikator
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: sd:UUIDIdentifikator
     * @var string|null
     */
    protected ?string $UUIDIdentifikator = null;
    /**
     * The BrevDato
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: sd:BrevDato
     * @var string|null
     */
    protected ?string $BrevDato = null;
    /**
     * The MeddelelsesFormatObjekt
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: fjernprint:MeddelelsesFormatObjekt
     * @var \ItkDev\Serviceplatformen\SF1600\StructType\MeddelelsesFormatObjektType|null
     */
    protected ?\ItkDev\Serviceplatformen\SF1600\StructType\MeddelelsesFormatObjektType $MeddelelsesFormatObjekt = null;
    /**
     * Constructor method for DokumentParametreType
     * @uses DokumentParametreType::setTitelTekst()
     * @uses DokumentParametreType::setUUIDIdentifikator()
     * @uses DokumentParametreType::setBrevDato()
     * @uses DokumentParametreType::setMeddelelsesFormatObjekt()
     * @param string $titelTekst
     * @param string $uUIDIdentifikator
     * @param string $brevDato
     * @param \ItkDev\Serviceplatformen\SF1600\StructType\MeddelelsesFormatObjektType $meddelelsesFormatObjekt
     */
    public function __construct(?string $titelTekst = null, ?string $uUIDIdentifikator = null, ?string $brevDato = null, ?\ItkDev\Serviceplatformen\SF1600\StructType\MeddelelsesFormatObjektType $meddelelsesFormatObjekt = null)
    {
        $this
            ->setTitelTekst($titelTekst)
            ->setUUIDIdentifikator($uUIDIdentifikator)
            ->setBrevDato($brevDato)
            ->setMeddelelsesFormatObjekt($meddelelsesFormatObjekt);
    }
    /**
     * Get TitelTekst value
     * @return string|null
     */
    public function getTitelTekst(): ?string
    {
        return $this->TitelTekst;
    }
    /**
     * Set TitelTekst value
     * @param string $titelTekst
     * @return \ItkDev\Serviceplatformen\SF1600\StructType\DokumentParametreType
     */
    public function setTitelTekst(?string $titelTekst = null): self
    {
        // validation for constraint: string
        if (!is_null($titelTekst) && !is_string($titelTekst)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($titelTekst, true), gettype($titelTekst)), __LINE__);
        }
        $this->TitelTekst = $titelTekst;
        
        return $this;
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
     * @return \ItkDev\Serviceplatformen\SF1600\StructType\DokumentParametreType
     */
    public function setUUIDIdentifikator(?string $uUIDIdentifikator = null): self
    {
        // validation for constraint: string
        if (!is_null($uUIDIdentifikator) && !is_string($uUIDIdentifikator)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($uUIDIdentifikator, true), gettype($uUIDIdentifikator)), __LINE__);
        }
        $this->UUIDIdentifikator = $uUIDIdentifikator;
        
        return $this;
    }
    /**
     * Get BrevDato value
     * @return string|null
     */
    public function getBrevDato(): ?string
    {
        return $this->BrevDato;
    }
    /**
     * Set BrevDato value
     * @param string $brevDato
     * @return \ItkDev\Serviceplatformen\SF1600\StructType\DokumentParametreType
     */
    public function setBrevDato(?string $brevDato = null): self
    {
        // validation for constraint: string
        if (!is_null($brevDato) && !is_string($brevDato)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($brevDato, true), gettype($brevDato)), __LINE__);
        }
        $this->BrevDato = $brevDato;
        
        return $this;
    }
    /**
     * Get MeddelelsesFormatObjekt value
     * @return \ItkDev\Serviceplatformen\SF1600\StructType\MeddelelsesFormatObjektType|null
     */
    public function getMeddelelsesFormatObjekt(): ?\ItkDev\Serviceplatformen\SF1600\StructType\MeddelelsesFormatObjektType
    {
        return $this->MeddelelsesFormatObjekt;
    }
    /**
     * Set MeddelelsesFormatObjekt value
     * @param \ItkDev\Serviceplatformen\SF1600\StructType\MeddelelsesFormatObjektType $meddelelsesFormatObjekt
     * @return \ItkDev\Serviceplatformen\SF1600\StructType\DokumentParametreType
     */
    public function setMeddelelsesFormatObjekt(?\ItkDev\Serviceplatformen\SF1600\StructType\MeddelelsesFormatObjektType $meddelelsesFormatObjekt = null): self
    {
        $this->MeddelelsesFormatObjekt = $meddelelsesFormatObjekt;
        
        return $this;
    }
}
