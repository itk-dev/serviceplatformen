<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF1600\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DigitalPostParametreType StructType
 * @subpackage Structs
 */
class DigitalPostParametreType extends AbstractStructBase
{
    /**
     * The AfsendelseDatoTid
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: dkal:AfsendelseDatoTid
     * @var string|null
     */
    protected ?string $AfsendelseDatoTid = null;
    /**
     * The MeddelelseIndholdstypeIdentifikator
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: dkal:MeddelelseIndholdstypeIdentifikator
     * @var int|null
     */
    protected ?int $MeddelelseIndholdstypeIdentifikator = null;
    /**
     * The MeddelelseSvarTypeNavn
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: dkal:MeddelelseSvarTypeNavn
     * @var string|null
     */
    protected ?string $MeddelelseSvarTypeNavn = null;
    /**
     * The MeddelelseSvarPostkasseIdentifikator
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: dkal:MeddelelseSvarPostkasseIdentifikator
     * @var int|null
     */
    protected ?int $MeddelelseSvarPostkasseIdentifikator = null;
    /**
     * The MeddelelseSvarEmneIdentifikator
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: dkal:MeddelelseSvarEmneIdentifikator
     * @var int|null
     */
    protected ?int $MeddelelseSvarEmneIdentifikator = null;
    /**
     * The MeddelelseFESDmetadata
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: dkal:MeddelelseFESDmetadata
     * @var \ItkDev\Serviceplatformen\SF1600\StructType\MeddelelseFESDmetadataType|null
     */
    protected ?\ItkDev\Serviceplatformen\SF1600\StructType\MeddelelseFESDmetadataType $MeddelelseFESDmetadata = null;
    /**
     * The MedsendDokumentRegistreringIndikator
     * Meta information extracted from the WSDL
     * - ref: fjernprint:MedsendDokumentRegistreringIndikator
     * @var bool|null
     */
    protected ?bool $MedsendDokumentRegistreringIndikator = null;
    /**
     * Constructor method for DigitalPostParametreType
     * @uses DigitalPostParametreType::setAfsendelseDatoTid()
     * @uses DigitalPostParametreType::setMeddelelseIndholdstypeIdentifikator()
     * @uses DigitalPostParametreType::setMeddelelseSvarTypeNavn()
     * @uses DigitalPostParametreType::setMeddelelseSvarPostkasseIdentifikator()
     * @uses DigitalPostParametreType::setMeddelelseSvarEmneIdentifikator()
     * @uses DigitalPostParametreType::setMeddelelseFESDmetadata()
     * @uses DigitalPostParametreType::setMedsendDokumentRegistreringIndikator()
     * @param string $afsendelseDatoTid
     * @param int $meddelelseIndholdstypeIdentifikator
     * @param string $meddelelseSvarTypeNavn
     * @param int $meddelelseSvarPostkasseIdentifikator
     * @param int $meddelelseSvarEmneIdentifikator
     * @param \ItkDev\Serviceplatformen\SF1600\StructType\MeddelelseFESDmetadataType $meddelelseFESDmetadata
     * @param bool $medsendDokumentRegistreringIndikator
     */
    public function __construct(?string $afsendelseDatoTid = null, ?int $meddelelseIndholdstypeIdentifikator = null, ?string $meddelelseSvarTypeNavn = null, ?int $meddelelseSvarPostkasseIdentifikator = null, ?int $meddelelseSvarEmneIdentifikator = null, ?\ItkDev\Serviceplatformen\SF1600\StructType\MeddelelseFESDmetadataType $meddelelseFESDmetadata = null, ?bool $medsendDokumentRegistreringIndikator = null)
    {
        $this
            ->setAfsendelseDatoTid($afsendelseDatoTid)
            ->setMeddelelseIndholdstypeIdentifikator($meddelelseIndholdstypeIdentifikator)
            ->setMeddelelseSvarTypeNavn($meddelelseSvarTypeNavn)
            ->setMeddelelseSvarPostkasseIdentifikator($meddelelseSvarPostkasseIdentifikator)
            ->setMeddelelseSvarEmneIdentifikator($meddelelseSvarEmneIdentifikator)
            ->setMeddelelseFESDmetadata($meddelelseFESDmetadata)
            ->setMedsendDokumentRegistreringIndikator($medsendDokumentRegistreringIndikator);
    }
    /**
     * Get AfsendelseDatoTid value
     * @return string|null
     */
    public function getAfsendelseDatoTid(): ?string
    {
        return $this->AfsendelseDatoTid;
    }
    /**
     * Set AfsendelseDatoTid value
     * @param string $afsendelseDatoTid
     * @return \ItkDev\Serviceplatformen\SF1600\StructType\DigitalPostParametreType
     */
    public function setAfsendelseDatoTid(?string $afsendelseDatoTid = null): self
    {
        // validation for constraint: string
        if (!is_null($afsendelseDatoTid) && !is_string($afsendelseDatoTid)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($afsendelseDatoTid, true), gettype($afsendelseDatoTid)), __LINE__);
        }
        $this->AfsendelseDatoTid = $afsendelseDatoTid;
        
        return $this;
    }
    /**
     * Get MeddelelseIndholdstypeIdentifikator value
     * @return int|null
     */
    public function getMeddelelseIndholdstypeIdentifikator(): ?int
    {
        return $this->MeddelelseIndholdstypeIdentifikator;
    }
    /**
     * Set MeddelelseIndholdstypeIdentifikator value
     * @param int $meddelelseIndholdstypeIdentifikator
     * @return \ItkDev\Serviceplatformen\SF1600\StructType\DigitalPostParametreType
     */
    public function setMeddelelseIndholdstypeIdentifikator(?int $meddelelseIndholdstypeIdentifikator = null): self
    {
        // validation for constraint: int
        if (!is_null($meddelelseIndholdstypeIdentifikator) && !(is_int($meddelelseIndholdstypeIdentifikator) || ctype_digit($meddelelseIndholdstypeIdentifikator))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($meddelelseIndholdstypeIdentifikator, true), gettype($meddelelseIndholdstypeIdentifikator)), __LINE__);
        }
        $this->MeddelelseIndholdstypeIdentifikator = $meddelelseIndholdstypeIdentifikator;
        
        return $this;
    }
    /**
     * Get MeddelelseSvarTypeNavn value
     * @return string|null
     */
    public function getMeddelelseSvarTypeNavn(): ?string
    {
        return $this->MeddelelseSvarTypeNavn;
    }
    /**
     * Set MeddelelseSvarTypeNavn value
     * @uses \ItkDev\Serviceplatformen\SF1600\EnumType\MeddelelseSvarTypeNavnType::valueIsValid()
     * @uses \ItkDev\Serviceplatformen\SF1600\EnumType\MeddelelseSvarTypeNavnType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $meddelelseSvarTypeNavn
     * @return \ItkDev\Serviceplatformen\SF1600\StructType\DigitalPostParametreType
     */
    public function setMeddelelseSvarTypeNavn(?string $meddelelseSvarTypeNavn = null): self
    {
        // validation for constraint: enumeration
        if (!\ItkDev\Serviceplatformen\SF1600\EnumType\MeddelelseSvarTypeNavnType::valueIsValid($meddelelseSvarTypeNavn)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \ItkDev\Serviceplatformen\SF1600\EnumType\MeddelelseSvarTypeNavnType', is_array($meddelelseSvarTypeNavn) ? implode(', ', $meddelelseSvarTypeNavn) : var_export($meddelelseSvarTypeNavn, true), implode(', ', \ItkDev\Serviceplatformen\SF1600\EnumType\MeddelelseSvarTypeNavnType::getValidValues())), __LINE__);
        }
        $this->MeddelelseSvarTypeNavn = $meddelelseSvarTypeNavn;
        
        return $this;
    }
    /**
     * Get MeddelelseSvarPostkasseIdentifikator value
     * @return int|null
     */
    public function getMeddelelseSvarPostkasseIdentifikator(): ?int
    {
        return $this->MeddelelseSvarPostkasseIdentifikator;
    }
    /**
     * Set MeddelelseSvarPostkasseIdentifikator value
     * @param int $meddelelseSvarPostkasseIdentifikator
     * @return \ItkDev\Serviceplatformen\SF1600\StructType\DigitalPostParametreType
     */
    public function setMeddelelseSvarPostkasseIdentifikator(?int $meddelelseSvarPostkasseIdentifikator = null): self
    {
        // validation for constraint: int
        if (!is_null($meddelelseSvarPostkasseIdentifikator) && !(is_int($meddelelseSvarPostkasseIdentifikator) || ctype_digit($meddelelseSvarPostkasseIdentifikator))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($meddelelseSvarPostkasseIdentifikator, true), gettype($meddelelseSvarPostkasseIdentifikator)), __LINE__);
        }
        $this->MeddelelseSvarPostkasseIdentifikator = $meddelelseSvarPostkasseIdentifikator;
        
        return $this;
    }
    /**
     * Get MeddelelseSvarEmneIdentifikator value
     * @return int|null
     */
    public function getMeddelelseSvarEmneIdentifikator(): ?int
    {
        return $this->MeddelelseSvarEmneIdentifikator;
    }
    /**
     * Set MeddelelseSvarEmneIdentifikator value
     * @param int $meddelelseSvarEmneIdentifikator
     * @return \ItkDev\Serviceplatformen\SF1600\StructType\DigitalPostParametreType
     */
    public function setMeddelelseSvarEmneIdentifikator(?int $meddelelseSvarEmneIdentifikator = null): self
    {
        // validation for constraint: int
        if (!is_null($meddelelseSvarEmneIdentifikator) && !(is_int($meddelelseSvarEmneIdentifikator) || ctype_digit($meddelelseSvarEmneIdentifikator))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($meddelelseSvarEmneIdentifikator, true), gettype($meddelelseSvarEmneIdentifikator)), __LINE__);
        }
        $this->MeddelelseSvarEmneIdentifikator = $meddelelseSvarEmneIdentifikator;
        
        return $this;
    }
    /**
     * Get MeddelelseFESDmetadata value
     * @return \ItkDev\Serviceplatformen\SF1600\StructType\MeddelelseFESDmetadataType|null
     */
    public function getMeddelelseFESDmetadata(): ?\ItkDev\Serviceplatformen\SF1600\StructType\MeddelelseFESDmetadataType
    {
        return $this->MeddelelseFESDmetadata;
    }
    /**
     * Set MeddelelseFESDmetadata value
     * @param \ItkDev\Serviceplatformen\SF1600\StructType\MeddelelseFESDmetadataType $meddelelseFESDmetadata
     * @return \ItkDev\Serviceplatformen\SF1600\StructType\DigitalPostParametreType
     */
    public function setMeddelelseFESDmetadata(?\ItkDev\Serviceplatformen\SF1600\StructType\MeddelelseFESDmetadataType $meddelelseFESDmetadata = null): self
    {
        $this->MeddelelseFESDmetadata = $meddelelseFESDmetadata;
        
        return $this;
    }
    /**
     * Get MedsendDokumentRegistreringIndikator value
     * @return bool|null
     */
    public function getMedsendDokumentRegistreringIndikator(): ?bool
    {
        return $this->MedsendDokumentRegistreringIndikator;
    }
    /**
     * Set MedsendDokumentRegistreringIndikator value
     * @param bool $medsendDokumentRegistreringIndikator
     * @return \ItkDev\Serviceplatformen\SF1600\StructType\DigitalPostParametreType
     */
    public function setMedsendDokumentRegistreringIndikator(?bool $medsendDokumentRegistreringIndikator = null): self
    {
        // validation for constraint: boolean
        if (!is_null($medsendDokumentRegistreringIndikator) && !is_bool($medsendDokumentRegistreringIndikator)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($medsendDokumentRegistreringIndikator, true), gettype($medsendDokumentRegistreringIndikator)), __LINE__);
        }
        $this->MedsendDokumentRegistreringIndikator = $medsendDokumentRegistreringIndikator;
        
        return $this;
    }
}
