<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF1500\Myndighed\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RegistreringType StructType
 * Meta information extracted from the WSDL
 * - definition: urn:oio:sagdok:myndighedregistrering:ADD:2.0.0 | urn:oio:sagdok:registrering:ADD:2.0.0
 * @subpackage Structs
 */
class RegistreringType extends AbstractStructBase
{
    /**
     * The NoteTekst
     * Meta information extracted from the WSDL
     * - base: string
     * - content: note
     * - definition: urn:oio:sagdok:note:BDD:1.0.0
     * - maxLength: 1024
     * - minOccurs: 0
     * - ref: sd:NoteTekst
     * @var string|null
     */
    protected ?string $NoteTekst = null;
    /**
     * The Tidspunkt
     * Meta information extracted from the WSDL
     * - content: tidsstempeldatotid
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Tidspunkt = null;
    /**
     * The LivscyklusKode
     * Meta information extracted from the WSDL
     * - content: livscyklus
     * - minOccurs: 0
     * - ref: sd:LivscyklusKode
     * @var string|null
     */
    protected ?string $LivscyklusKode = null;
    /**
     * The BrugerRef
     * Meta information extracted from the WSDL
     * - content: brugerref
     * - minOccurs: 0
     * - ref: sd:BrugerRef
     * @var \ItkDev\Serviceplatformen\SF1500\Myndighed\StructType\UnikIdType|null
     */
    protected ?\ItkDev\Serviceplatformen\SF1500\Myndighed\StructType\UnikIdType $BrugerRef = null;
    /**
     * The AttributListe
     * Meta information extracted from the WSDL
     * - content: attributter
     * - ref: myndighed:AttributListe
     * @var \ItkDev\Serviceplatformen\SF1500\Myndighed\StructType\AttributListeType|null
     */
    protected ?\ItkDev\Serviceplatformen\SF1500\Myndighed\StructType\AttributListeType $AttributListe = null;
    /**
     * The TilstandListe
     * Meta information extracted from the WSDL
     * - content: tilstande
     * - ref: myndighed:TilstandListe
     * @var \ItkDev\Serviceplatformen\SF1500\Myndighed\StructType\TilstandListeType|null
     */
    protected ?\ItkDev\Serviceplatformen\SF1500\Myndighed\StructType\TilstandListeType $TilstandListe = null;
    /**
     * The RelationListe
     * Meta information extracted from the WSDL
     * - content: relationer
     * - ref: myndighed:RelationListe
     * @var \ItkDev\Serviceplatformen\SF1500\Myndighed\StructType\RelationListeType|null
     */
    protected ?\ItkDev\Serviceplatformen\SF1500\Myndighed\StructType\RelationListeType $RelationListe = null;
    /**
     * Constructor method for RegistreringType
     * @uses RegistreringType::setNoteTekst()
     * @uses RegistreringType::setTidspunkt()
     * @uses RegistreringType::setLivscyklusKode()
     * @uses RegistreringType::setBrugerRef()
     * @uses RegistreringType::setAttributListe()
     * @uses RegistreringType::setTilstandListe()
     * @uses RegistreringType::setRelationListe()
     * @param string $noteTekst
     * @param string $tidspunkt
     * @param string $livscyklusKode
     * @param \ItkDev\Serviceplatformen\SF1500\Myndighed\StructType\UnikIdType $brugerRef
     * @param \ItkDev\Serviceplatformen\SF1500\Myndighed\StructType\AttributListeType $attributListe
     * @param \ItkDev\Serviceplatformen\SF1500\Myndighed\StructType\TilstandListeType $tilstandListe
     * @param \ItkDev\Serviceplatformen\SF1500\Myndighed\StructType\RelationListeType $relationListe
     */
    public function __construct(?string $noteTekst = null, ?string $tidspunkt = null, ?string $livscyklusKode = null, ?\ItkDev\Serviceplatformen\SF1500\Myndighed\StructType\UnikIdType $brugerRef = null, ?\ItkDev\Serviceplatformen\SF1500\Myndighed\StructType\AttributListeType $attributListe = null, ?\ItkDev\Serviceplatformen\SF1500\Myndighed\StructType\TilstandListeType $tilstandListe = null, ?\ItkDev\Serviceplatformen\SF1500\Myndighed\StructType\RelationListeType $relationListe = null)
    {
        $this
            ->setNoteTekst($noteTekst)
            ->setTidspunkt($tidspunkt)
            ->setLivscyklusKode($livscyklusKode)
            ->setBrugerRef($brugerRef)
            ->setAttributListe($attributListe)
            ->setTilstandListe($tilstandListe)
            ->setRelationListe($relationListe);
    }
    /**
     * Get NoteTekst value
     * @return string|null
     */
    public function getNoteTekst(): ?string
    {
        return $this->NoteTekst;
    }
    /**
     * Set NoteTekst value
     * @param string $noteTekst
     * @return \ItkDev\Serviceplatformen\SF1500\Myndighed\StructType\RegistreringType
     */
    public function setNoteTekst(?string $noteTekst = null): self
    {
        // validation for constraint: string
        if (!is_null($noteTekst) && !is_string($noteTekst)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($noteTekst, true), gettype($noteTekst)), __LINE__);
        }
        // validation for constraint: maxLength(1024)
        if (!is_null($noteTekst) && mb_strlen((string) $noteTekst) > 1024) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 1024', mb_strlen((string) $noteTekst)), __LINE__);
        }
        $this->NoteTekst = $noteTekst;
        
        return $this;
    }
    /**
     * Get Tidspunkt value
     * @return string|null
     */
    public function getTidspunkt(): ?string
    {
        return $this->Tidspunkt;
    }
    /**
     * Set Tidspunkt value
     * @param string $tidspunkt
     * @return \ItkDev\Serviceplatformen\SF1500\Myndighed\StructType\RegistreringType
     */
    public function setTidspunkt(?string $tidspunkt = null): self
    {
        // validation for constraint: string
        if (!is_null($tidspunkt) && !is_string($tidspunkt)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tidspunkt, true), gettype($tidspunkt)), __LINE__);
        }
        $this->Tidspunkt = $tidspunkt;
        
        return $this;
    }
    /**
     * Get LivscyklusKode value
     * @return string|null
     */
    public function getLivscyklusKode(): ?string
    {
        return $this->LivscyklusKode;
    }
    /**
     * Set LivscyklusKode value
     * @uses \ItkDev\Serviceplatformen\SF1500\Myndighed\EnumType\LivscyklusKodeType::valueIsValid()
     * @uses \ItkDev\Serviceplatformen\SF1500\Myndighed\EnumType\LivscyklusKodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $livscyklusKode
     * @return \ItkDev\Serviceplatformen\SF1500\Myndighed\StructType\RegistreringType
     */
    public function setLivscyklusKode(?string $livscyklusKode = null): self
    {
        // validation for constraint: enumeration
        if (!\ItkDev\Serviceplatformen\SF1500\Myndighed\EnumType\LivscyklusKodeType::valueIsValid($livscyklusKode)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \ItkDev\Serviceplatformen\SF1500\Myndighed\EnumType\LivscyklusKodeType', is_array($livscyklusKode) ? implode(', ', $livscyklusKode) : var_export($livscyklusKode, true), implode(', ', \ItkDev\Serviceplatformen\SF1500\Myndighed\EnumType\LivscyklusKodeType::getValidValues())), __LINE__);
        }
        $this->LivscyklusKode = $livscyklusKode;
        
        return $this;
    }
    /**
     * Get BrugerRef value
     * @return \ItkDev\Serviceplatformen\SF1500\Myndighed\StructType\UnikIdType|null
     */
    public function getBrugerRef(): ?\ItkDev\Serviceplatformen\SF1500\Myndighed\StructType\UnikIdType
    {
        return $this->BrugerRef;
    }
    /**
     * Set BrugerRef value
     * @param \ItkDev\Serviceplatformen\SF1500\Myndighed\StructType\UnikIdType $brugerRef
     * @return \ItkDev\Serviceplatformen\SF1500\Myndighed\StructType\RegistreringType
     */
    public function setBrugerRef(?\ItkDev\Serviceplatformen\SF1500\Myndighed\StructType\UnikIdType $brugerRef = null): self
    {
        $this->BrugerRef = $brugerRef;
        
        return $this;
    }
    /**
     * Get AttributListe value
     * @return \ItkDev\Serviceplatformen\SF1500\Myndighed\StructType\AttributListeType|null
     */
    public function getAttributListe(): ?\ItkDev\Serviceplatformen\SF1500\Myndighed\StructType\AttributListeType
    {
        return $this->AttributListe;
    }
    /**
     * Set AttributListe value
     * @param \ItkDev\Serviceplatformen\SF1500\Myndighed\StructType\AttributListeType $attributListe
     * @return \ItkDev\Serviceplatformen\SF1500\Myndighed\StructType\RegistreringType
     */
    public function setAttributListe(?\ItkDev\Serviceplatformen\SF1500\Myndighed\StructType\AttributListeType $attributListe = null): self
    {
        $this->AttributListe = $attributListe;
        
        return $this;
    }
    /**
     * Get TilstandListe value
     * @return \ItkDev\Serviceplatformen\SF1500\Myndighed\StructType\TilstandListeType|null
     */
    public function getTilstandListe(): ?\ItkDev\Serviceplatformen\SF1500\Myndighed\StructType\TilstandListeType
    {
        return $this->TilstandListe;
    }
    /**
     * Set TilstandListe value
     * @param \ItkDev\Serviceplatformen\SF1500\Myndighed\StructType\TilstandListeType $tilstandListe
     * @return \ItkDev\Serviceplatformen\SF1500\Myndighed\StructType\RegistreringType
     */
    public function setTilstandListe(?\ItkDev\Serviceplatformen\SF1500\Myndighed\StructType\TilstandListeType $tilstandListe = null): self
    {
        $this->TilstandListe = $tilstandListe;
        
        return $this;
    }
    /**
     * Get RelationListe value
     * @return \ItkDev\Serviceplatformen\SF1500\Myndighed\StructType\RelationListeType|null
     */
    public function getRelationListe(): ?\ItkDev\Serviceplatformen\SF1500\Myndighed\StructType\RelationListeType
    {
        return $this->RelationListe;
    }
    /**
     * Set RelationListe value
     * @param \ItkDev\Serviceplatformen\SF1500\Myndighed\StructType\RelationListeType $relationListe
     * @return \ItkDev\Serviceplatformen\SF1500\Myndighed\StructType\RegistreringType
     */
    public function setRelationListe(?\ItkDev\Serviceplatformen\SF1500\Myndighed\StructType\RelationListeType $relationListe = null): self
    {
        $this->RelationListe = $relationListe;
        
        return $this;
    }
}
