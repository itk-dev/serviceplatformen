<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF1500\KlassifikationSystem\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SoegJournalPostRelationType StructType
 * Meta information extracted from the WSDL
 * - definition: urn:oio:sagdok:soegjournalpostrelation:ADD:1.0.0
 * @subpackage Structs
 */
class SoegJournalPostRelationType extends SoegRelationType
{
    /**
     * The JournalPostIdentifikator
     * Meta information extracted from the WSDL
     * - content: journalpostid
     * - minOccurs: 0
     * - ref: sd:JournalPostIdentifikator
     * @var string|null
     */
    protected ?string $JournalPostIdentifikator = null;
    /**
     * The TitelTekst
     * Meta information extracted from the WSDL
     * - base: string
     * - content: titel
     * - definition: urn:oio:sagdok:titel:BDD:1.0.0
     * - maxLength: 300
     * - minOccurs: 0
     * - ref: sd:TitelTekst
     * @var string|null
     */
    protected ?string $TitelTekst = null;
    /**
     * The IndeksIdentifikator
     * Meta information extracted from the WSDL
     * - content: indeks
     * - minOccurs: 0
     * - ref: sd:IndeksIdentifikator
     * @var int|null
     */
    protected ?int $IndeksIdentifikator = null;
    /**
     * The OffentlighedUndtaget
     * Meta information extracted from the WSDL
     * - content: offentlighedundtaget
     * - minOccurs: 0
     * - ref: sd:OffentlighedUndtaget
     * @var \ItkDev\Serviceplatformen\SF1500\KlassifikationSystem\StructType\OffentlighedUndtagetType|null
     */
    protected ?\ItkDev\Serviceplatformen\SF1500\KlassifikationSystem\StructType\OffentlighedUndtagetType $OffentlighedUndtaget = null;
    /**
     * The TilhoersforholdKode
     * Meta information extracted from the WSDL
     * - content: tilhoersforhold
     * - minOccurs: 0
     * - ref: sd:TilhoersforholdKode
     * @var string|null
     */
    protected ?string $TilhoersforholdKode = null;
    /**
     * Constructor method for SoegJournalPostRelationType
     * @uses SoegJournalPostRelationType::setJournalPostIdentifikator()
     * @uses SoegJournalPostRelationType::setTitelTekst()
     * @uses SoegJournalPostRelationType::setIndeksIdentifikator()
     * @uses SoegJournalPostRelationType::setOffentlighedUndtaget()
     * @uses SoegJournalPostRelationType::setTilhoersforholdKode()
     * @param string $journalPostIdentifikator
     * @param string $titelTekst
     * @param int $indeksIdentifikator
     * @param \ItkDev\Serviceplatformen\SF1500\KlassifikationSystem\StructType\OffentlighedUndtagetType $offentlighedUndtaget
     * @param string $tilhoersforholdKode
     */
    public function __construct(?string $journalPostIdentifikator = null, ?string $titelTekst = null, ?int $indeksIdentifikator = null, ?\ItkDev\Serviceplatformen\SF1500\KlassifikationSystem\StructType\OffentlighedUndtagetType $offentlighedUndtaget = null, ?string $tilhoersforholdKode = null)
    {
        $this
            ->setJournalPostIdentifikator($journalPostIdentifikator)
            ->setTitelTekst($titelTekst)
            ->setIndeksIdentifikator($indeksIdentifikator)
            ->setOffentlighedUndtaget($offentlighedUndtaget)
            ->setTilhoersforholdKode($tilhoersforholdKode);
    }
    /**
     * Get JournalPostIdentifikator value
     * @return string|null
     */
    public function getJournalPostIdentifikator(): ?string
    {
        return $this->JournalPostIdentifikator;
    }
    /**
     * Set JournalPostIdentifikator value
     * @param string $journalPostIdentifikator
     * @return \ItkDev\Serviceplatformen\SF1500\KlassifikationSystem\StructType\SoegJournalPostRelationType
     */
    public function setJournalPostIdentifikator(?string $journalPostIdentifikator = null): self
    {
        // validation for constraint: string
        if (!is_null($journalPostIdentifikator) && !is_string($journalPostIdentifikator)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($journalPostIdentifikator, true), gettype($journalPostIdentifikator)), __LINE__);
        }
        $this->JournalPostIdentifikator = $journalPostIdentifikator;
        
        return $this;
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
     * @return \ItkDev\Serviceplatformen\SF1500\KlassifikationSystem\StructType\SoegJournalPostRelationType
     */
    public function setTitelTekst(?string $titelTekst = null): self
    {
        // validation for constraint: string
        if (!is_null($titelTekst) && !is_string($titelTekst)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($titelTekst, true), gettype($titelTekst)), __LINE__);
        }
        // validation for constraint: maxLength(300)
        if (!is_null($titelTekst) && mb_strlen((string) $titelTekst) > 300) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 300', mb_strlen((string) $titelTekst)), __LINE__);
        }
        $this->TitelTekst = $titelTekst;
        
        return $this;
    }
    /**
     * Get IndeksIdentifikator value
     * @return int|null
     */
    public function getIndeksIdentifikator(): ?int
    {
        return $this->IndeksIdentifikator;
    }
    /**
     * Set IndeksIdentifikator value
     * @param int $indeksIdentifikator
     * @return \ItkDev\Serviceplatformen\SF1500\KlassifikationSystem\StructType\SoegJournalPostRelationType
     */
    public function setIndeksIdentifikator(?int $indeksIdentifikator = null): self
    {
        // validation for constraint: int
        if (!is_null($indeksIdentifikator) && !(is_int($indeksIdentifikator) || ctype_digit($indeksIdentifikator))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($indeksIdentifikator, true), gettype($indeksIdentifikator)), __LINE__);
        }
        $this->IndeksIdentifikator = $indeksIdentifikator;
        
        return $this;
    }
    /**
     * Get OffentlighedUndtaget value
     * @return \ItkDev\Serviceplatformen\SF1500\KlassifikationSystem\StructType\OffentlighedUndtagetType|null
     */
    public function getOffentlighedUndtaget(): ?\ItkDev\Serviceplatformen\SF1500\KlassifikationSystem\StructType\OffentlighedUndtagetType
    {
        return $this->OffentlighedUndtaget;
    }
    /**
     * Set OffentlighedUndtaget value
     * @param \ItkDev\Serviceplatformen\SF1500\KlassifikationSystem\StructType\OffentlighedUndtagetType $offentlighedUndtaget
     * @return \ItkDev\Serviceplatformen\SF1500\KlassifikationSystem\StructType\SoegJournalPostRelationType
     */
    public function setOffentlighedUndtaget(?\ItkDev\Serviceplatformen\SF1500\KlassifikationSystem\StructType\OffentlighedUndtagetType $offentlighedUndtaget = null): self
    {
        $this->OffentlighedUndtaget = $offentlighedUndtaget;
        
        return $this;
    }
    /**
     * Get TilhoersforholdKode value
     * @return string|null
     */
    public function getTilhoersforholdKode(): ?string
    {
        return $this->TilhoersforholdKode;
    }
    /**
     * Set TilhoersforholdKode value
     * @uses \ItkDev\Serviceplatformen\SF1500\KlassifikationSystem\EnumType\TilhoersforholdKodeType::valueIsValid()
     * @uses \ItkDev\Serviceplatformen\SF1500\KlassifikationSystem\EnumType\TilhoersforholdKodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $tilhoersforholdKode
     * @return \ItkDev\Serviceplatformen\SF1500\KlassifikationSystem\StructType\SoegJournalPostRelationType
     */
    public function setTilhoersforholdKode(?string $tilhoersforholdKode = null): self
    {
        // validation for constraint: enumeration
        if (!\ItkDev\Serviceplatformen\SF1500\KlassifikationSystem\EnumType\TilhoersforholdKodeType::valueIsValid($tilhoersforholdKode)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \ItkDev\Serviceplatformen\SF1500\KlassifikationSystem\EnumType\TilhoersforholdKodeType', is_array($tilhoersforholdKode) ? implode(', ', $tilhoersforholdKode) : var_export($tilhoersforholdKode, true), implode(', ', \ItkDev\Serviceplatformen\SF1500\KlassifikationSystem\EnumType\TilhoersforholdKodeType::getValidValues())), __LINE__);
        }
        $this->TilhoersforholdKode = $tilhoersforholdKode;
        
        return $this;
    }
}
