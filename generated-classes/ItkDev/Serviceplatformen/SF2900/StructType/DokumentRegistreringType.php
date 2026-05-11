<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF2900\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DokumentRegistreringType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DokumentRegistreringType extends AbstractStructBase
{
    /**
     * The FraTidsPunkt
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $FraTidsPunkt;
    /**
     * The LivscyklusKode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $LivscyklusKode;
    /**
     * The RegistreringItSystem
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \ItkDev\Serviceplatformen\SF2900\StructType\UUID_URN
     */
    protected \ItkDev\Serviceplatformen\SF2900\StructType\UUID_URN $RegistreringItSystem;
    /**
     * The RelationListe
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \ItkDev\Serviceplatformen\SF2900\StructType\RelationsListe
     */
    protected \ItkDev\Serviceplatformen\SF2900\StructType\RelationsListe $RelationListe;
    /**
     * The TilstandsListe
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var \ItkDev\Serviceplatformen\SF2900\StructType\TilstandListeType[]
     */
    protected array $TilstandsListe;
    /**
     * The AttributListe
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \ItkDev\Serviceplatformen\SF2900\StructType\AttributterListeType
     */
    protected \ItkDev\Serviceplatformen\SF2900\StructType\AttributterListeType $AttributListe;
    /**
     * The ImportTidspunkt
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ImportTidspunkt = null;
    /**
     * The BrugerRef
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ItkDev\Serviceplatformen\SF2900\StructType\UUID_URN|null
     */
    protected ?\ItkDev\Serviceplatformen\SF2900\StructType\UUID_URN $BrugerRef = null;
    /**
     * Constructor method for DokumentRegistreringType
     * @uses DokumentRegistreringType::setFraTidsPunkt()
     * @uses DokumentRegistreringType::setLivscyklusKode()
     * @uses DokumentRegistreringType::setRegistreringItSystem()
     * @uses DokumentRegistreringType::setRelationListe()
     * @uses DokumentRegistreringType::setTilstandsListe()
     * @uses DokumentRegistreringType::setAttributListe()
     * @uses DokumentRegistreringType::setImportTidspunkt()
     * @uses DokumentRegistreringType::setBrugerRef()
     * @param string $fraTidsPunkt
     * @param string $livscyklusKode
     * @param \ItkDev\Serviceplatformen\SF2900\StructType\UUID_URN $registreringItSystem
     * @param \ItkDev\Serviceplatformen\SF2900\StructType\RelationsListe $relationListe
     * @param \ItkDev\Serviceplatformen\SF2900\StructType\TilstandListeType[] $tilstandsListe
     * @param \ItkDev\Serviceplatformen\SF2900\StructType\AttributterListeType $attributListe
     * @param string $importTidspunkt
     * @param \ItkDev\Serviceplatformen\SF2900\StructType\UUID_URN $brugerRef
     */
    public function __construct(string $fraTidsPunkt, string $livscyklusKode, \ItkDev\Serviceplatformen\SF2900\StructType\UUID_URN $registreringItSystem, \ItkDev\Serviceplatformen\SF2900\StructType\RelationsListe $relationListe, array $tilstandsListe, \ItkDev\Serviceplatformen\SF2900\StructType\AttributterListeType $attributListe, ?string $importTidspunkt = null, ?\ItkDev\Serviceplatformen\SF2900\StructType\UUID_URN $brugerRef = null)
    {
        $this
            ->setFraTidsPunkt($fraTidsPunkt)
            ->setLivscyklusKode($livscyklusKode)
            ->setRegistreringItSystem($registreringItSystem)
            ->setRelationListe($relationListe)
            ->setTilstandsListe($tilstandsListe)
            ->setAttributListe($attributListe)
            ->setImportTidspunkt($importTidspunkt)
            ->setBrugerRef($brugerRef);
    }
    /**
     * Get FraTidsPunkt value
     * @return string
     */
    public function getFraTidsPunkt(): string
    {
        return $this->FraTidsPunkt;
    }
    /**
     * Set FraTidsPunkt value
     * @param string $fraTidsPunkt
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\DokumentRegistreringType
     */
    public function setFraTidsPunkt(string $fraTidsPunkt): self
    {
        // validation for constraint: string
        if (!is_null($fraTidsPunkt) && !is_string($fraTidsPunkt)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fraTidsPunkt, true), gettype($fraTidsPunkt)), __LINE__);
        }
        $this->FraTidsPunkt = $fraTidsPunkt;
        
        return $this;
    }
    /**
     * Get LivscyklusKode value
     * @return string
     */
    public function getLivscyklusKode(): string
    {
        return $this->LivscyklusKode;
    }
    /**
     * Set LivscyklusKode value
     * @uses \ItkDev\Serviceplatformen\SF2900\EnumType\LivscyklusKodeType::valueIsValid()
     * @uses \ItkDev\Serviceplatformen\SF2900\EnumType\LivscyklusKodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $livscyklusKode
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\DokumentRegistreringType
     */
    public function setLivscyklusKode(string $livscyklusKode): self
    {
        // validation for constraint: enumeration
        if (!\ItkDev\Serviceplatformen\SF2900\EnumType\LivscyklusKodeType::valueIsValid($livscyklusKode)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \ItkDev\Serviceplatformen\SF2900\EnumType\LivscyklusKodeType', is_array($livscyklusKode) ? implode(', ', $livscyklusKode) : var_export($livscyklusKode, true), implode(', ', \ItkDev\Serviceplatformen\SF2900\EnumType\LivscyklusKodeType::getValidValues())), __LINE__);
        }
        $this->LivscyklusKode = $livscyklusKode;
        
        return $this;
    }
    /**
     * Get RegistreringItSystem value
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\UUID_URN
     */
    public function getRegistreringItSystem(): \ItkDev\Serviceplatformen\SF2900\StructType\UUID_URN
    {
        return $this->RegistreringItSystem;
    }
    /**
     * Set RegistreringItSystem value
     * @param \ItkDev\Serviceplatformen\SF2900\StructType\UUID_URN $registreringItSystem
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\DokumentRegistreringType
     */
    public function setRegistreringItSystem(\ItkDev\Serviceplatformen\SF2900\StructType\UUID_URN $registreringItSystem): self
    {
        $this->RegistreringItSystem = $registreringItSystem;
        
        return $this;
    }
    /**
     * Get RelationListe value
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\RelationsListe
     */
    public function getRelationListe(): \ItkDev\Serviceplatformen\SF2900\StructType\RelationsListe
    {
        return $this->RelationListe;
    }
    /**
     * Set RelationListe value
     * @param \ItkDev\Serviceplatformen\SF2900\StructType\RelationsListe $relationListe
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\DokumentRegistreringType
     */
    public function setRelationListe(\ItkDev\Serviceplatformen\SF2900\StructType\RelationsListe $relationListe): self
    {
        $this->RelationListe = $relationListe;
        
        return $this;
    }
    /**
     * Get TilstandsListe value
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\TilstandListeType[]
     */
    public function getTilstandsListe(): array
    {
        return $this->TilstandsListe;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setTilstandsListe method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTilstandsListe method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTilstandsListeForArrayConstraintFromSetTilstandsListe(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $dokumentRegistreringTypeTilstandsListeItem) {
            // validation for constraint: itemType
            if (!$dokumentRegistreringTypeTilstandsListeItem instanceof \ItkDev\Serviceplatformen\SF2900\StructType\TilstandListeType) {
                $invalidValues[] = is_object($dokumentRegistreringTypeTilstandsListeItem) ? get_class($dokumentRegistreringTypeTilstandsListeItem) : sprintf('%s(%s)', gettype($dokumentRegistreringTypeTilstandsListeItem), var_export($dokumentRegistreringTypeTilstandsListeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The TilstandsListe property can only contain items of type \ItkDev\Serviceplatformen\SF2900\StructType\TilstandListeType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set TilstandsListe value
     * @throws InvalidArgumentException
     * @param \ItkDev\Serviceplatformen\SF2900\StructType\TilstandListeType[] $tilstandsListe
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\DokumentRegistreringType
     */
    public function setTilstandsListe(array $tilstandsListe): self
    {
        // validation for constraint: array
        if ('' !== ($tilstandsListeArrayErrorMessage = self::validateTilstandsListeForArrayConstraintFromSetTilstandsListe($tilstandsListe))) {
            throw new InvalidArgumentException($tilstandsListeArrayErrorMessage, __LINE__);
        }
        $this->TilstandsListe = $tilstandsListe;
        
        return $this;
    }
    /**
     * Add item to TilstandsListe value
     * @throws InvalidArgumentException
     * @param \ItkDev\Serviceplatformen\SF2900\StructType\TilstandListeType $item
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\DokumentRegistreringType
     */
    public function addToTilstandsListe(\ItkDev\Serviceplatformen\SF2900\StructType\TilstandListeType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \ItkDev\Serviceplatformen\SF2900\StructType\TilstandListeType) {
            throw new InvalidArgumentException(sprintf('The TilstandsListe property can only contain items of type \ItkDev\Serviceplatformen\SF2900\StructType\TilstandListeType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->TilstandsListe[] = $item;
        
        return $this;
    }
    /**
     * Get AttributListe value
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\AttributterListeType
     */
    public function getAttributListe(): \ItkDev\Serviceplatformen\SF2900\StructType\AttributterListeType
    {
        return $this->AttributListe;
    }
    /**
     * Set AttributListe value
     * @param \ItkDev\Serviceplatformen\SF2900\StructType\AttributterListeType $attributListe
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\DokumentRegistreringType
     */
    public function setAttributListe(\ItkDev\Serviceplatformen\SF2900\StructType\AttributterListeType $attributListe): self
    {
        $this->AttributListe = $attributListe;
        
        return $this;
    }
    /**
     * Get ImportTidspunkt value
     * @return string|null
     */
    public function getImportTidspunkt(): ?string
    {
        return $this->ImportTidspunkt;
    }
    /**
     * Set ImportTidspunkt value
     * @param string $importTidspunkt
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\DokumentRegistreringType
     */
    public function setImportTidspunkt(?string $importTidspunkt = null): self
    {
        // validation for constraint: string
        if (!is_null($importTidspunkt) && !is_string($importTidspunkt)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($importTidspunkt, true), gettype($importTidspunkt)), __LINE__);
        }
        $this->ImportTidspunkt = $importTidspunkt;
        
        return $this;
    }
    /**
     * Get BrugerRef value
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\UUID_URN|null
     */
    public function getBrugerRef(): ?\ItkDev\Serviceplatformen\SF2900\StructType\UUID_URN
    {
        return $this->BrugerRef;
    }
    /**
     * Set BrugerRef value
     * @param \ItkDev\Serviceplatformen\SF2900\StructType\UUID_URN $brugerRef
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\DokumentRegistreringType
     */
    public function setBrugerRef(?\ItkDev\Serviceplatformen\SF2900\StructType\UUID_URN $brugerRef = null): self
    {
        $this->BrugerRef = $brugerRef;
        
        return $this;
    }
}
