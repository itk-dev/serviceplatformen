<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF2900\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for JournalPostRegistreringType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class JournalPostRegistreringType extends AbstractStructBase
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
     * @var \ItkDev\Serviceplatformen\SF2900\StructType\JournalPostRelationsListeType
     */
    protected \ItkDev\Serviceplatformen\SF2900\StructType\JournalPostRelationsListeType $RelationListe;
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
     * Constructor method for JournalPostRegistreringType
     * @uses JournalPostRegistreringType::setFraTidsPunkt()
     * @uses JournalPostRegistreringType::setLivscyklusKode()
     * @uses JournalPostRegistreringType::setRegistreringItSystem()
     * @uses JournalPostRegistreringType::setRelationListe()
     * @uses JournalPostRegistreringType::setImportTidspunkt()
     * @uses JournalPostRegistreringType::setBrugerRef()
     * @param string $fraTidsPunkt
     * @param string $livscyklusKode
     * @param \ItkDev\Serviceplatformen\SF2900\StructType\UUID_URN $registreringItSystem
     * @param \ItkDev\Serviceplatformen\SF2900\StructType\JournalPostRelationsListeType $relationListe
     * @param string $importTidspunkt
     * @param \ItkDev\Serviceplatformen\SF2900\StructType\UUID_URN $brugerRef
     */
    public function __construct(string $fraTidsPunkt, string $livscyklusKode, \ItkDev\Serviceplatformen\SF2900\StructType\UUID_URN $registreringItSystem, \ItkDev\Serviceplatformen\SF2900\StructType\JournalPostRelationsListeType $relationListe, ?string $importTidspunkt = null, ?\ItkDev\Serviceplatformen\SF2900\StructType\UUID_URN $brugerRef = null)
    {
        $this
            ->setFraTidsPunkt($fraTidsPunkt)
            ->setLivscyklusKode($livscyklusKode)
            ->setRegistreringItSystem($registreringItSystem)
            ->setRelationListe($relationListe)
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
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\JournalPostRegistreringType
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
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\JournalPostRegistreringType
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
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\JournalPostRegistreringType
     */
    public function setRegistreringItSystem(\ItkDev\Serviceplatformen\SF2900\StructType\UUID_URN $registreringItSystem): self
    {
        $this->RegistreringItSystem = $registreringItSystem;
        
        return $this;
    }
    /**
     * Get RelationListe value
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\JournalPostRelationsListeType
     */
    public function getRelationListe(): \ItkDev\Serviceplatformen\SF2900\StructType\JournalPostRelationsListeType
    {
        return $this->RelationListe;
    }
    /**
     * Set RelationListe value
     * @param \ItkDev\Serviceplatformen\SF2900\StructType\JournalPostRelationsListeType $relationListe
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\JournalPostRegistreringType
     */
    public function setRelationListe(\ItkDev\Serviceplatformen\SF2900\StructType\JournalPostRelationsListeType $relationListe): self
    {
        $this->RelationListe = $relationListe;
        
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
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\JournalPostRegistreringType
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
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\JournalPostRegistreringType
     */
    public function setBrugerRef(?\ItkDev\Serviceplatformen\SF2900\StructType\UUID_URN $brugerRef = null): self
    {
        $this->BrugerRef = $brugerRef;
        
        return $this;
    }
}
