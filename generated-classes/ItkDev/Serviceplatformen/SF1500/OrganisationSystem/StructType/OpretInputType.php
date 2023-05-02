<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OpretInputType StructType
 * Meta information extracted from the WSDL
 * - definition: urn:oio:sagdok:organisationopretinput:ADD:2.0.0 | urn:oio:sagdok:organisationenhedopretinput:ADD:2.0.0 | urn:oio:sagdok:organisationfunktionopretinput:ADD:2.0.0 | urn:oio:sts:adresseopretinput:ADD:2.0.0 |
 * urn:oio:sts:personopretinput:ADD:2.0.0 | urn:oio:sagdok:brugeropretinput:ADD:2.0.0 | urn:oio:sagdok:interessefaellesskabopretinput:ADD:2.0.0 | urn:oio:sagdok:itsystemopretinput:ADD:2.0.0 | urn:oio:sts:myndighedopretinput:ADD:2.0.0 |
 * urn:oio:sts:virksomhedopretinput:ADD:2.0.0 | urn:oio:sagdok:opretinput:ADD:1.0.0
 * @subpackage Structs
 */
class OpretInputType extends AbstractStructBase
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
     * The AttributListe
     * Meta information extracted from the WSDL
     * - content: attributter
     * - minOccurs: 0
     * - ref: org:AttributListe | orgenhed:AttributListe | orgfunk:AttributListe | adresse:AttributListe | person:AttributListe | bruger:AttributListe | intfs:AttributListe | itsystem:AttributListe | myndighed:AttributListe | virksomhed:AttributListe
     * @var \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\AttributListeType|null
     */
    protected ?\ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\AttributListeType $AttributListe = null;
    /**
     * The TilstandListe
     * Meta information extracted from the WSDL
     * - content: tilstande
     * - minOccurs: 0
     * - ref: org:TilstandListe | orgenhed:TilstandListe | orgfunk:TilstandListe | adresse:TilstandListe | person:TilstandListe | bruger:TilstandListe | intfs:TilstandListe | itsystem:TilstandListe | myndighed:TilstandListe | virksomhed:TilstandListe
     * @var \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\TilstandListeType|null
     */
    protected ?\ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\TilstandListeType $TilstandListe = null;
    /**
     * The RelationListe
     * Meta information extracted from the WSDL
     * - content: relationer
     * - minOccurs: 0
     * - ref: org:RelationListe | orgenhed:RelationListe | orgfunk:RelationListe | adresse:RelationListe | person:RelationListe | bruger:RelationListe | intfs:RelationListe | itsystem:RelationListe | myndighed:RelationListe | virksomhed:RelationListe
     * @var \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\RelationListeType|null
     */
    protected ?\ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\RelationListeType $RelationListe = null;
    /**
     * Constructor method for OpretInputType
     * @uses OpretInputType::setNoteTekst()
     * @uses OpretInputType::setAttributListe()
     * @uses OpretInputType::setTilstandListe()
     * @uses OpretInputType::setRelationListe()
     * @param string $noteTekst
     * @param \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\AttributListeType $attributListe
     * @param \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\TilstandListeType $tilstandListe
     * @param \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\RelationListeType $relationListe
     */
    public function __construct(?string $noteTekst = null, ?\ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\AttributListeType $attributListe = null, ?\ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\TilstandListeType $tilstandListe = null, ?\ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\RelationListeType $relationListe = null)
    {
        $this
            ->setNoteTekst($noteTekst)
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
     * @return \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\OpretInputType
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
     * Get AttributListe value
     * @return \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\AttributListeType|null
     */
    public function getAttributListe(): ?\ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\AttributListeType
    {
        return $this->AttributListe;
    }
    /**
     * Set AttributListe value
     * @param \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\AttributListeType $attributListe
     * @return \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\OpretInputType
     */
    public function setAttributListe(?\ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\AttributListeType $attributListe = null): self
    {
        $this->AttributListe = $attributListe;
        
        return $this;
    }
    /**
     * Get TilstandListe value
     * @return \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\TilstandListeType|null
     */
    public function getTilstandListe(): ?\ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\TilstandListeType
    {
        return $this->TilstandListe;
    }
    /**
     * Set TilstandListe value
     * @param \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\TilstandListeType $tilstandListe
     * @return \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\OpretInputType
     */
    public function setTilstandListe(?\ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\TilstandListeType $tilstandListe = null): self
    {
        $this->TilstandListe = $tilstandListe;
        
        return $this;
    }
    /**
     * Get RelationListe value
     * @return \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\RelationListeType|null
     */
    public function getRelationListe(): ?\ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\RelationListeType
    {
        return $this->RelationListe;
    }
    /**
     * Set RelationListe value
     * @param \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\RelationListeType $relationListe
     * @return \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\OpretInputType
     */
    public function setRelationListe(?\ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\RelationListeType $relationListe = null): self
    {
        $this->RelationListe = $relationListe;
        
        return $this;
    }
}
