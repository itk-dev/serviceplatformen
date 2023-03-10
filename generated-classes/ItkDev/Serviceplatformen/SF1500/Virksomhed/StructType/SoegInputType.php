<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF1500\Virksomhed\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SoegInputType StructType
 * Meta information extracted from the WSDL
 * - definition: urn:oio:sts:virksomhedsoeginput:ADD:2.0.0 | urn:oio:sagdok:soeginput:ADD:1.0.0
 * @subpackage Structs
 */
class SoegInputType extends AbstractStructBase
{
    /**
     * The FoersteResultatReference
     * Meta information extracted from the WSDL
     * - content: foersteresultat
     * - minOccurs: 0
     * - ref: sd:FoersteResultatReference
     * @var int|null
     */
    protected ?int $FoersteResultatReference = null;
    /**
     * The MaksimalAntalKvantitet
     * Meta information extracted from the WSDL
     * - content: maksimalantalresultater
     * - minOccurs: 0
     * - ref: sd:MaksimalAntalKvantitet
     * @var int|null
     */
    protected ?int $MaksimalAntalKvantitet = null;
    /**
     * The SoegRegistrering
     * Meta information extracted from the WSDL
     * - content: soegregistrering
     * - minOccurs: 0
     * - ref: sd:SoegRegistrering
     * @var \ItkDev\Serviceplatformen\SF1500\Virksomhed\StructType\SoegRegistreringType|null
     */
    protected ?\ItkDev\Serviceplatformen\SF1500\Virksomhed\StructType\SoegRegistreringType $SoegRegistrering = null;
    /**
     * The SoegVirkning
     * Meta information extracted from the WSDL
     * - content: soegvirkning
     * - minOccurs: 0
     * - ref: sd:SoegVirkning
     * @var \ItkDev\Serviceplatformen\SF1500\Virksomhed\StructType\SoegVirkningType|null
     */
    protected ?\ItkDev\Serviceplatformen\SF1500\Virksomhed\StructType\SoegVirkningType $SoegVirkning = null;
    /**
     * The AttributListe
     * Meta information extracted from the WSDL
     * - content: soegattributter
     * - ref: virksomhed:AttributListe
     * @var \ItkDev\Serviceplatformen\SF1500\Virksomhed\StructType\AttributListeType|null
     */
    protected ?\ItkDev\Serviceplatformen\SF1500\Virksomhed\StructType\AttributListeType $AttributListe = null;
    /**
     * The TilstandListe
     * Meta information extracted from the WSDL
     * - content: soegtilstande
     * - ref: virksomhed:TilstandListe
     * @var \ItkDev\Serviceplatformen\SF1500\Virksomhed\StructType\TilstandListeType|null
     */
    protected ?\ItkDev\Serviceplatformen\SF1500\Virksomhed\StructType\TilstandListeType $TilstandListe = null;
    /**
     * The RelationListe
     * Meta information extracted from the WSDL
     * - content: soegrelationer
     * - ref: virksomhed:RelationListe
     * @var \ItkDev\Serviceplatformen\SF1500\Virksomhed\StructType\RelationListeType|null
     */
    protected ?\ItkDev\Serviceplatformen\SF1500\Virksomhed\StructType\RelationListeType $RelationListe = null;
    /**
     * Constructor method for SoegInputType
     * @uses SoegInputType::setFoersteResultatReference()
     * @uses SoegInputType::setMaksimalAntalKvantitet()
     * @uses SoegInputType::setSoegRegistrering()
     * @uses SoegInputType::setSoegVirkning()
     * @uses SoegInputType::setAttributListe()
     * @uses SoegInputType::setTilstandListe()
     * @uses SoegInputType::setRelationListe()
     * @param int $foersteResultatReference
     * @param int $maksimalAntalKvantitet
     * @param \ItkDev\Serviceplatformen\SF1500\Virksomhed\StructType\SoegRegistreringType $soegRegistrering
     * @param \ItkDev\Serviceplatformen\SF1500\Virksomhed\StructType\SoegVirkningType $soegVirkning
     * @param \ItkDev\Serviceplatformen\SF1500\Virksomhed\StructType\AttributListeType $attributListe
     * @param \ItkDev\Serviceplatformen\SF1500\Virksomhed\StructType\TilstandListeType $tilstandListe
     * @param \ItkDev\Serviceplatformen\SF1500\Virksomhed\StructType\RelationListeType $relationListe
     */
    public function __construct(?int $foersteResultatReference = null, ?int $maksimalAntalKvantitet = null, ?\ItkDev\Serviceplatformen\SF1500\Virksomhed\StructType\SoegRegistreringType $soegRegistrering = null, ?\ItkDev\Serviceplatformen\SF1500\Virksomhed\StructType\SoegVirkningType $soegVirkning = null, ?\ItkDev\Serviceplatformen\SF1500\Virksomhed\StructType\AttributListeType $attributListe = null, ?\ItkDev\Serviceplatformen\SF1500\Virksomhed\StructType\TilstandListeType $tilstandListe = null, ?\ItkDev\Serviceplatformen\SF1500\Virksomhed\StructType\RelationListeType $relationListe = null)
    {
        $this
            ->setFoersteResultatReference($foersteResultatReference)
            ->setMaksimalAntalKvantitet($maksimalAntalKvantitet)
            ->setSoegRegistrering($soegRegistrering)
            ->setSoegVirkning($soegVirkning)
            ->setAttributListe($attributListe)
            ->setTilstandListe($tilstandListe)
            ->setRelationListe($relationListe);
    }
    /**
     * Get FoersteResultatReference value
     * @return int|null
     */
    public function getFoersteResultatReference(): ?int
    {
        return $this->FoersteResultatReference;
    }
    /**
     * Set FoersteResultatReference value
     * @param int $foersteResultatReference
     * @return \ItkDev\Serviceplatformen\SF1500\Virksomhed\StructType\SoegInputType
     */
    public function setFoersteResultatReference(?int $foersteResultatReference = null): self
    {
        // validation for constraint: int
        if (!is_null($foersteResultatReference) && !(is_int($foersteResultatReference) || ctype_digit($foersteResultatReference))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($foersteResultatReference, true), gettype($foersteResultatReference)), __LINE__);
        }
        $this->FoersteResultatReference = $foersteResultatReference;
        
        return $this;
    }
    /**
     * Get MaksimalAntalKvantitet value
     * @return int|null
     */
    public function getMaksimalAntalKvantitet(): ?int
    {
        return $this->MaksimalAntalKvantitet;
    }
    /**
     * Set MaksimalAntalKvantitet value
     * @param int $maksimalAntalKvantitet
     * @return \ItkDev\Serviceplatformen\SF1500\Virksomhed\StructType\SoegInputType
     */
    public function setMaksimalAntalKvantitet(?int $maksimalAntalKvantitet = null): self
    {
        // validation for constraint: int
        if (!is_null($maksimalAntalKvantitet) && !(is_int($maksimalAntalKvantitet) || ctype_digit($maksimalAntalKvantitet))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($maksimalAntalKvantitet, true), gettype($maksimalAntalKvantitet)), __LINE__);
        }
        $this->MaksimalAntalKvantitet = $maksimalAntalKvantitet;
        
        return $this;
    }
    /**
     * Get SoegRegistrering value
     * @return \ItkDev\Serviceplatformen\SF1500\Virksomhed\StructType\SoegRegistreringType|null
     */
    public function getSoegRegistrering(): ?\ItkDev\Serviceplatformen\SF1500\Virksomhed\StructType\SoegRegistreringType
    {
        return $this->SoegRegistrering;
    }
    /**
     * Set SoegRegistrering value
     * @param \ItkDev\Serviceplatformen\SF1500\Virksomhed\StructType\SoegRegistreringType $soegRegistrering
     * @return \ItkDev\Serviceplatformen\SF1500\Virksomhed\StructType\SoegInputType
     */
    public function setSoegRegistrering(?\ItkDev\Serviceplatformen\SF1500\Virksomhed\StructType\SoegRegistreringType $soegRegistrering = null): self
    {
        $this->SoegRegistrering = $soegRegistrering;
        
        return $this;
    }
    /**
     * Get SoegVirkning value
     * @return \ItkDev\Serviceplatformen\SF1500\Virksomhed\StructType\SoegVirkningType|null
     */
    public function getSoegVirkning(): ?\ItkDev\Serviceplatformen\SF1500\Virksomhed\StructType\SoegVirkningType
    {
        return $this->SoegVirkning;
    }
    /**
     * Set SoegVirkning value
     * @param \ItkDev\Serviceplatformen\SF1500\Virksomhed\StructType\SoegVirkningType $soegVirkning
     * @return \ItkDev\Serviceplatformen\SF1500\Virksomhed\StructType\SoegInputType
     */
    public function setSoegVirkning(?\ItkDev\Serviceplatformen\SF1500\Virksomhed\StructType\SoegVirkningType $soegVirkning = null): self
    {
        $this->SoegVirkning = $soegVirkning;
        
        return $this;
    }
    /**
     * Get AttributListe value
     * @return \ItkDev\Serviceplatformen\SF1500\Virksomhed\StructType\AttributListeType|null
     */
    public function getAttributListe(): ?\ItkDev\Serviceplatformen\SF1500\Virksomhed\StructType\AttributListeType
    {
        return $this->AttributListe;
    }
    /**
     * Set AttributListe value
     * @param \ItkDev\Serviceplatformen\SF1500\Virksomhed\StructType\AttributListeType $attributListe
     * @return \ItkDev\Serviceplatformen\SF1500\Virksomhed\StructType\SoegInputType
     */
    public function setAttributListe(?\ItkDev\Serviceplatformen\SF1500\Virksomhed\StructType\AttributListeType $attributListe = null): self
    {
        $this->AttributListe = $attributListe;
        
        return $this;
    }
    /**
     * Get TilstandListe value
     * @return \ItkDev\Serviceplatformen\SF1500\Virksomhed\StructType\TilstandListeType|null
     */
    public function getTilstandListe(): ?\ItkDev\Serviceplatformen\SF1500\Virksomhed\StructType\TilstandListeType
    {
        return $this->TilstandListe;
    }
    /**
     * Set TilstandListe value
     * @param \ItkDev\Serviceplatformen\SF1500\Virksomhed\StructType\TilstandListeType $tilstandListe
     * @return \ItkDev\Serviceplatformen\SF1500\Virksomhed\StructType\SoegInputType
     */
    public function setTilstandListe(?\ItkDev\Serviceplatformen\SF1500\Virksomhed\StructType\TilstandListeType $tilstandListe = null): self
    {
        $this->TilstandListe = $tilstandListe;
        
        return $this;
    }
    /**
     * Get RelationListe value
     * @return \ItkDev\Serviceplatformen\SF1500\Virksomhed\StructType\RelationListeType|null
     */
    public function getRelationListe(): ?\ItkDev\Serviceplatformen\SF1500\Virksomhed\StructType\RelationListeType
    {
        return $this->RelationListe;
    }
    /**
     * Set RelationListe value
     * @param \ItkDev\Serviceplatformen\SF1500\Virksomhed\StructType\RelationListeType $relationListe
     * @return \ItkDev\Serviceplatformen\SF1500\Virksomhed\StructType\SoegInputType
     */
    public function setRelationListe(?\ItkDev\Serviceplatformen\SF1500\Virksomhed\StructType\RelationListeType $relationListe = null): self
    {
        $this->RelationListe = $relationListe;
        
        return $this;
    }
}
