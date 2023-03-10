<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF1500\ItSystem\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OpretInputType StructType
 * Meta information extracted from the WSDL
 * - definition: urn:oio:sagdok:itsystemopretinput:ADD:2.0.0 | urn:oio:sagdok:opretinput:ADD:1.0.0
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
     * - ref: itsystem:AttributListe
     * @var \ItkDev\Serviceplatformen\SF1500\ItSystem\StructType\AttributListeType|null
     */
    protected ?\ItkDev\Serviceplatformen\SF1500\ItSystem\StructType\AttributListeType $AttributListe = null;
    /**
     * The TilstandListe
     * Meta information extracted from the WSDL
     * - content: tilstande
     * - ref: itsystem:TilstandListe
     * @var \ItkDev\Serviceplatformen\SF1500\ItSystem\StructType\TilstandListeType|null
     */
    protected ?\ItkDev\Serviceplatformen\SF1500\ItSystem\StructType\TilstandListeType $TilstandListe = null;
    /**
     * The RelationListe
     * Meta information extracted from the WSDL
     * - content: relationer
     * - ref: itsystem:RelationListe
     * @var \ItkDev\Serviceplatformen\SF1500\ItSystem\StructType\RelationListeType|null
     */
    protected ?\ItkDev\Serviceplatformen\SF1500\ItSystem\StructType\RelationListeType $RelationListe = null;
    /**
     * Constructor method for OpretInputType
     * @uses OpretInputType::setNoteTekst()
     * @uses OpretInputType::setAttributListe()
     * @uses OpretInputType::setTilstandListe()
     * @uses OpretInputType::setRelationListe()
     * @param string $noteTekst
     * @param \ItkDev\Serviceplatformen\SF1500\ItSystem\StructType\AttributListeType $attributListe
     * @param \ItkDev\Serviceplatformen\SF1500\ItSystem\StructType\TilstandListeType $tilstandListe
     * @param \ItkDev\Serviceplatformen\SF1500\ItSystem\StructType\RelationListeType $relationListe
     */
    public function __construct(?string $noteTekst = null, ?\ItkDev\Serviceplatformen\SF1500\ItSystem\StructType\AttributListeType $attributListe = null, ?\ItkDev\Serviceplatformen\SF1500\ItSystem\StructType\TilstandListeType $tilstandListe = null, ?\ItkDev\Serviceplatformen\SF1500\ItSystem\StructType\RelationListeType $relationListe = null)
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
     * @return \ItkDev\Serviceplatformen\SF1500\ItSystem\StructType\OpretInputType
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
     * @return \ItkDev\Serviceplatformen\SF1500\ItSystem\StructType\AttributListeType|null
     */
    public function getAttributListe(): ?\ItkDev\Serviceplatformen\SF1500\ItSystem\StructType\AttributListeType
    {
        return $this->AttributListe;
    }
    /**
     * Set AttributListe value
     * @param \ItkDev\Serviceplatformen\SF1500\ItSystem\StructType\AttributListeType $attributListe
     * @return \ItkDev\Serviceplatformen\SF1500\ItSystem\StructType\OpretInputType
     */
    public function setAttributListe(?\ItkDev\Serviceplatformen\SF1500\ItSystem\StructType\AttributListeType $attributListe = null): self
    {
        $this->AttributListe = $attributListe;
        
        return $this;
    }
    /**
     * Get TilstandListe value
     * @return \ItkDev\Serviceplatformen\SF1500\ItSystem\StructType\TilstandListeType|null
     */
    public function getTilstandListe(): ?\ItkDev\Serviceplatformen\SF1500\ItSystem\StructType\TilstandListeType
    {
        return $this->TilstandListe;
    }
    /**
     * Set TilstandListe value
     * @param \ItkDev\Serviceplatformen\SF1500\ItSystem\StructType\TilstandListeType $tilstandListe
     * @return \ItkDev\Serviceplatformen\SF1500\ItSystem\StructType\OpretInputType
     */
    public function setTilstandListe(?\ItkDev\Serviceplatformen\SF1500\ItSystem\StructType\TilstandListeType $tilstandListe = null): self
    {
        $this->TilstandListe = $tilstandListe;
        
        return $this;
    }
    /**
     * Get RelationListe value
     * @return \ItkDev\Serviceplatformen\SF1500\ItSystem\StructType\RelationListeType|null
     */
    public function getRelationListe(): ?\ItkDev\Serviceplatformen\SF1500\ItSystem\StructType\RelationListeType
    {
        return $this->RelationListe;
    }
    /**
     * Set RelationListe value
     * @param \ItkDev\Serviceplatformen\SF1500\ItSystem\StructType\RelationListeType $relationListe
     * @return \ItkDev\Serviceplatformen\SF1500\ItSystem\StructType\OpretInputType
     */
    public function setRelationListe(?\ItkDev\Serviceplatformen\SF1500\ItSystem\StructType\RelationListeType $relationListe = null): self
    {
        $this->RelationListe = $relationListe;
        
        return $this;
    }
}
