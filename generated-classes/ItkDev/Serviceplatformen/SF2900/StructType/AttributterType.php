<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF2900\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AttributterType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class AttributterType extends AbstractStructBase
{
    /**
     * The BrugervendtNoegleTekst
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $BrugervendtNoegleTekst;
    /**
     * The TitelTekst
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $TitelTekst;
    /**
     * The BeskrivelseTekst
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $BeskrivelseTekst;
    /**
     * The Dokumenttype
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $Dokumenttype;
    /**
     * The Retning
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $Retning;
    /**
     * The Brevdato
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $Brevdato;
    /**
     * The Virkning
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \ItkDev\Serviceplatformen\SF2900\StructType\VirkningType
     */
    protected \ItkDev\Serviceplatformen\SF2900\StructType\VirkningType $Virkning;
    /**
     * The Fristdato
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Fristdato = null;
    /**
     * The VersionIdentifikator
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $VersionIdentifikator = null;
    /**
     * The UnderversionIdentificator
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $UnderversionIdentificator = null;
    /**
     * The KassationskodeTekst
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $KassationskodeTekst = null;
    /**
     * The OffentlighedUndtaget
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ItkDev\Serviceplatformen\SF2900\StructType\OffentlighedUndtagetType|null
     */
    protected ?\ItkDev\Serviceplatformen\SF2900\StructType\OffentlighedUndtagetType $OffentlighedUndtaget = null;
    /**
     * Constructor method for AttributterType
     * @uses AttributterType::setBrugervendtNoegleTekst()
     * @uses AttributterType::setTitelTekst()
     * @uses AttributterType::setBeskrivelseTekst()
     * @uses AttributterType::setDokumenttype()
     * @uses AttributterType::setRetning()
     * @uses AttributterType::setBrevdato()
     * @uses AttributterType::setVirkning()
     * @uses AttributterType::setFristdato()
     * @uses AttributterType::setVersionIdentifikator()
     * @uses AttributterType::setUnderversionIdentificator()
     * @uses AttributterType::setKassationskodeTekst()
     * @uses AttributterType::setOffentlighedUndtaget()
     * @param string $brugervendtNoegleTekst
     * @param string $titelTekst
     * @param string $beskrivelseTekst
     * @param string $dokumenttype
     * @param string $retning
     * @param string $brevdato
     * @param \ItkDev\Serviceplatformen\SF2900\StructType\VirkningType $virkning
     * @param string $fristdato
     * @param int $versionIdentifikator
     * @param int $underversionIdentificator
     * @param string $kassationskodeTekst
     * @param \ItkDev\Serviceplatformen\SF2900\StructType\OffentlighedUndtagetType $offentlighedUndtaget
     */
    public function __construct(string $brugervendtNoegleTekst, string $titelTekst, string $beskrivelseTekst, string $dokumenttype, string $retning, string $brevdato, \ItkDev\Serviceplatformen\SF2900\StructType\VirkningType $virkning, ?string $fristdato = null, ?int $versionIdentifikator = null, ?int $underversionIdentificator = null, ?string $kassationskodeTekst = null, ?\ItkDev\Serviceplatformen\SF2900\StructType\OffentlighedUndtagetType $offentlighedUndtaget = null)
    {
        $this
            ->setBrugervendtNoegleTekst($brugervendtNoegleTekst)
            ->setTitelTekst($titelTekst)
            ->setBeskrivelseTekst($beskrivelseTekst)
            ->setDokumenttype($dokumenttype)
            ->setRetning($retning)
            ->setBrevdato($brevdato)
            ->setVirkning($virkning)
            ->setFristdato($fristdato)
            ->setVersionIdentifikator($versionIdentifikator)
            ->setUnderversionIdentificator($underversionIdentificator)
            ->setKassationskodeTekst($kassationskodeTekst)
            ->setOffentlighedUndtaget($offentlighedUndtaget);
    }
    /**
     * Get BrugervendtNoegleTekst value
     * @return string
     */
    public function getBrugervendtNoegleTekst(): string
    {
        return $this->BrugervendtNoegleTekst;
    }
    /**
     * Set BrugervendtNoegleTekst value
     * @param string $brugervendtNoegleTekst
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\AttributterType
     */
    public function setBrugervendtNoegleTekst(string $brugervendtNoegleTekst): self
    {
        // validation for constraint: string
        if (!is_null($brugervendtNoegleTekst) && !is_string($brugervendtNoegleTekst)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($brugervendtNoegleTekst, true), gettype($brugervendtNoegleTekst)), __LINE__);
        }
        $this->BrugervendtNoegleTekst = $brugervendtNoegleTekst;
        
        return $this;
    }
    /**
     * Get TitelTekst value
     * @return string
     */
    public function getTitelTekst(): string
    {
        return $this->TitelTekst;
    }
    /**
     * Set TitelTekst value
     * @param string $titelTekst
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\AttributterType
     */
    public function setTitelTekst(string $titelTekst): self
    {
        // validation for constraint: string
        if (!is_null($titelTekst) && !is_string($titelTekst)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($titelTekst, true), gettype($titelTekst)), __LINE__);
        }
        $this->TitelTekst = $titelTekst;
        
        return $this;
    }
    /**
     * Get BeskrivelseTekst value
     * @return string
     */
    public function getBeskrivelseTekst(): string
    {
        return $this->BeskrivelseTekst;
    }
    /**
     * Set BeskrivelseTekst value
     * @param string $beskrivelseTekst
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\AttributterType
     */
    public function setBeskrivelseTekst(string $beskrivelseTekst): self
    {
        // validation for constraint: string
        if (!is_null($beskrivelseTekst) && !is_string($beskrivelseTekst)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($beskrivelseTekst, true), gettype($beskrivelseTekst)), __LINE__);
        }
        $this->BeskrivelseTekst = $beskrivelseTekst;
        
        return $this;
    }
    /**
     * Get Dokumenttype value
     * @return string
     */
    public function getDokumenttype(): string
    {
        return $this->Dokumenttype;
    }
    /**
     * Set Dokumenttype value
     * @uses \ItkDev\Serviceplatformen\SF2900\EnumType\DokumenttypeType::valueIsValid()
     * @uses \ItkDev\Serviceplatformen\SF2900\EnumType\DokumenttypeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $dokumenttype
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\AttributterType
     */
    public function setDokumenttype(string $dokumenttype): self
    {
        // validation for constraint: enumeration
        if (!\ItkDev\Serviceplatformen\SF2900\EnumType\DokumenttypeType::valueIsValid($dokumenttype)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \ItkDev\Serviceplatformen\SF2900\EnumType\DokumenttypeType', is_array($dokumenttype) ? implode(', ', $dokumenttype) : var_export($dokumenttype, true), implode(', ', \ItkDev\Serviceplatformen\SF2900\EnumType\DokumenttypeType::getValidValues())), __LINE__);
        }
        $this->Dokumenttype = $dokumenttype;
        
        return $this;
    }
    /**
     * Get Retning value
     * @return string
     */
    public function getRetning(): string
    {
        return $this->Retning;
    }
    /**
     * Set Retning value
     * @uses \ItkDev\Serviceplatformen\SF2900\EnumType\RetningType::valueIsValid()
     * @uses \ItkDev\Serviceplatformen\SF2900\EnumType\RetningType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $retning
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\AttributterType
     */
    public function setRetning(string $retning): self
    {
        // validation for constraint: enumeration
        if (!\ItkDev\Serviceplatformen\SF2900\EnumType\RetningType::valueIsValid($retning)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \ItkDev\Serviceplatformen\SF2900\EnumType\RetningType', is_array($retning) ? implode(', ', $retning) : var_export($retning, true), implode(', ', \ItkDev\Serviceplatformen\SF2900\EnumType\RetningType::getValidValues())), __LINE__);
        }
        $this->Retning = $retning;
        
        return $this;
    }
    /**
     * Get Brevdato value
     * @return string
     */
    public function getBrevdato(): string
    {
        return $this->Brevdato;
    }
    /**
     * Set Brevdato value
     * @param string $brevdato
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\AttributterType
     */
    public function setBrevdato(string $brevdato): self
    {
        // validation for constraint: string
        if (!is_null($brevdato) && !is_string($brevdato)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($brevdato, true), gettype($brevdato)), __LINE__);
        }
        $this->Brevdato = $brevdato;
        
        return $this;
    }
    /**
     * Get Virkning value
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\VirkningType
     */
    public function getVirkning(): \ItkDev\Serviceplatformen\SF2900\StructType\VirkningType
    {
        return $this->Virkning;
    }
    /**
     * Set Virkning value
     * @param \ItkDev\Serviceplatformen\SF2900\StructType\VirkningType $virkning
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\AttributterType
     */
    public function setVirkning(\ItkDev\Serviceplatformen\SF2900\StructType\VirkningType $virkning): self
    {
        $this->Virkning = $virkning;
        
        return $this;
    }
    /**
     * Get Fristdato value
     * @return string|null
     */
    public function getFristdato(): ?string
    {
        return $this->Fristdato;
    }
    /**
     * Set Fristdato value
     * @param string $fristdato
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\AttributterType
     */
    public function setFristdato(?string $fristdato = null): self
    {
        // validation for constraint: string
        if (!is_null($fristdato) && !is_string($fristdato)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fristdato, true), gettype($fristdato)), __LINE__);
        }
        $this->Fristdato = $fristdato;
        
        return $this;
    }
    /**
     * Get VersionIdentifikator value
     * @return int|null
     */
    public function getVersionIdentifikator(): ?int
    {
        return $this->VersionIdentifikator;
    }
    /**
     * Set VersionIdentifikator value
     * @param int $versionIdentifikator
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\AttributterType
     */
    public function setVersionIdentifikator(?int $versionIdentifikator = null): self
    {
        // validation for constraint: int
        if (!is_null($versionIdentifikator) && !(is_int($versionIdentifikator) || ctype_digit($versionIdentifikator))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($versionIdentifikator, true), gettype($versionIdentifikator)), __LINE__);
        }
        $this->VersionIdentifikator = $versionIdentifikator;
        
        return $this;
    }
    /**
     * Get UnderversionIdentificator value
     * @return int|null
     */
    public function getUnderversionIdentificator(): ?int
    {
        return $this->UnderversionIdentificator;
    }
    /**
     * Set UnderversionIdentificator value
     * @param int $underversionIdentificator
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\AttributterType
     */
    public function setUnderversionIdentificator(?int $underversionIdentificator = null): self
    {
        // validation for constraint: int
        if (!is_null($underversionIdentificator) && !(is_int($underversionIdentificator) || ctype_digit($underversionIdentificator))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($underversionIdentificator, true), gettype($underversionIdentificator)), __LINE__);
        }
        $this->UnderversionIdentificator = $underversionIdentificator;
        
        return $this;
    }
    /**
     * Get KassationskodeTekst value
     * @return string|null
     */
    public function getKassationskodeTekst(): ?string
    {
        return $this->KassationskodeTekst;
    }
    /**
     * Set KassationskodeTekst value
     * @param string $kassationskodeTekst
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\AttributterType
     */
    public function setKassationskodeTekst(?string $kassationskodeTekst = null): self
    {
        // validation for constraint: string
        if (!is_null($kassationskodeTekst) && !is_string($kassationskodeTekst)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($kassationskodeTekst, true), gettype($kassationskodeTekst)), __LINE__);
        }
        $this->KassationskodeTekst = $kassationskodeTekst;
        
        return $this;
    }
    /**
     * Get OffentlighedUndtaget value
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\OffentlighedUndtagetType|null
     */
    public function getOffentlighedUndtaget(): ?\ItkDev\Serviceplatformen\SF2900\StructType\OffentlighedUndtagetType
    {
        return $this->OffentlighedUndtaget;
    }
    /**
     * Set OffentlighedUndtaget value
     * @param \ItkDev\Serviceplatformen\SF2900\StructType\OffentlighedUndtagetType $offentlighedUndtaget
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\AttributterType
     */
    public function setOffentlighedUndtaget(?\ItkDev\Serviceplatformen\SF2900\StructType\OffentlighedUndtagetType $offentlighedUndtaget = null): self
    {
        $this->OffentlighedUndtaget = $offentlighedUndtaget;
        
        return $this;
    }
}
