<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF1500\Facet\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RetInputType StructType
 * Meta information extracted from the WSDL
 * - definition: urn:oio:sagdok:facetretinput:ADD:2.0.0 | urn:oio:sagdok:retinput:ADD:1.0.0
 * @subpackage Structs
 */
class RetInputType extends AbstractStructBase
{
    /**
     * The UUIDIdentifikator
     * Meta information extracted from the WSDL
     * - base: string
     * - content: uuid
     * - definition: urn:oio:sagdok:uuid:BDD:1.0.0
     * - pattern: [a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}
     * - ref: sd:UUIDIdentifikator
     * @var string|null
     */
    protected ?string $UUIDIdentifikator = null;
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
     * - ref: facet:AttributListe
     * @var \ItkDev\Serviceplatformen\SF1500\Facet\StructType\AttributListeType|null
     */
    protected ?\ItkDev\Serviceplatformen\SF1500\Facet\StructType\AttributListeType $AttributListe = null;
    /**
     * The TilstandListe
     * Meta information extracted from the WSDL
     * - content: tilstande
     * - minOccurs: 0
     * - ref: facet:TilstandListe
     * @var \ItkDev\Serviceplatformen\SF1500\Facet\StructType\TilstandListeType|null
     */
    protected ?\ItkDev\Serviceplatformen\SF1500\Facet\StructType\TilstandListeType $TilstandListe = null;
    /**
     * The RelationListe
     * Meta information extracted from the WSDL
     * - content: relationer
     * - minOccurs: 0
     * - ref: facet:RelationListe
     * @var \ItkDev\Serviceplatformen\SF1500\Facet\StructType\RelationListeType|null
     */
    protected ?\ItkDev\Serviceplatformen\SF1500\Facet\StructType\RelationListeType $RelationListe = null;
    /**
     * Constructor method for RetInputType
     * @uses RetInputType::setUUIDIdentifikator()
     * @uses RetInputType::setNoteTekst()
     * @uses RetInputType::setAttributListe()
     * @uses RetInputType::setTilstandListe()
     * @uses RetInputType::setRelationListe()
     * @param string $uUIDIdentifikator
     * @param string $noteTekst
     * @param \ItkDev\Serviceplatformen\SF1500\Facet\StructType\AttributListeType $attributListe
     * @param \ItkDev\Serviceplatformen\SF1500\Facet\StructType\TilstandListeType $tilstandListe
     * @param \ItkDev\Serviceplatformen\SF1500\Facet\StructType\RelationListeType $relationListe
     */
    public function __construct(?string $uUIDIdentifikator = null, ?string $noteTekst = null, ?\ItkDev\Serviceplatformen\SF1500\Facet\StructType\AttributListeType $attributListe = null, ?\ItkDev\Serviceplatformen\SF1500\Facet\StructType\TilstandListeType $tilstandListe = null, ?\ItkDev\Serviceplatformen\SF1500\Facet\StructType\RelationListeType $relationListe = null)
    {
        $this
            ->setUUIDIdentifikator($uUIDIdentifikator)
            ->setNoteTekst($noteTekst)
            ->setAttributListe($attributListe)
            ->setTilstandListe($tilstandListe)
            ->setRelationListe($relationListe);
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
     * @return \ItkDev\Serviceplatformen\SF1500\Facet\StructType\RetInputType
     */
    public function setUUIDIdentifikator(?string $uUIDIdentifikator = null): self
    {
        // validation for constraint: string
        if (!is_null($uUIDIdentifikator) && !is_string($uUIDIdentifikator)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($uUIDIdentifikator, true), gettype($uUIDIdentifikator)), __LINE__);
        }
        // validation for constraint: pattern([a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12})
        if (!is_null($uUIDIdentifikator) && !preg_match('/[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/', $uUIDIdentifikator)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/', var_export($uUIDIdentifikator, true)), __LINE__);
        }
        $this->UUIDIdentifikator = $uUIDIdentifikator;
        
        return $this;
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
     * @return \ItkDev\Serviceplatformen\SF1500\Facet\StructType\RetInputType
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
     * @return \ItkDev\Serviceplatformen\SF1500\Facet\StructType\AttributListeType|null
     */
    public function getAttributListe(): ?\ItkDev\Serviceplatformen\SF1500\Facet\StructType\AttributListeType
    {
        return $this->AttributListe;
    }
    /**
     * Set AttributListe value
     * @param \ItkDev\Serviceplatformen\SF1500\Facet\StructType\AttributListeType $attributListe
     * @return \ItkDev\Serviceplatformen\SF1500\Facet\StructType\RetInputType
     */
    public function setAttributListe(?\ItkDev\Serviceplatformen\SF1500\Facet\StructType\AttributListeType $attributListe = null): self
    {
        $this->AttributListe = $attributListe;
        
        return $this;
    }
    /**
     * Get TilstandListe value
     * @return \ItkDev\Serviceplatformen\SF1500\Facet\StructType\TilstandListeType|null
     */
    public function getTilstandListe(): ?\ItkDev\Serviceplatformen\SF1500\Facet\StructType\TilstandListeType
    {
        return $this->TilstandListe;
    }
    /**
     * Set TilstandListe value
     * @param \ItkDev\Serviceplatformen\SF1500\Facet\StructType\TilstandListeType $tilstandListe
     * @return \ItkDev\Serviceplatformen\SF1500\Facet\StructType\RetInputType
     */
    public function setTilstandListe(?\ItkDev\Serviceplatformen\SF1500\Facet\StructType\TilstandListeType $tilstandListe = null): self
    {
        $this->TilstandListe = $tilstandListe;
        
        return $this;
    }
    /**
     * Get RelationListe value
     * @return \ItkDev\Serviceplatformen\SF1500\Facet\StructType\RelationListeType|null
     */
    public function getRelationListe(): ?\ItkDev\Serviceplatformen\SF1500\Facet\StructType\RelationListeType
    {
        return $this->RelationListe;
    }
    /**
     * Set RelationListe value
     * @param \ItkDev\Serviceplatformen\SF1500\Facet\StructType\RelationListeType $relationListe
     * @return \ItkDev\Serviceplatformen\SF1500\Facet\StructType\RetInputType
     */
    public function setRelationListe(?\ItkDev\Serviceplatformen\SF1500\Facet\StructType\RelationListeType $relationListe = null): self
    {
        $this->RelationListe = $relationListe;
        
        return $this;
    }
}
