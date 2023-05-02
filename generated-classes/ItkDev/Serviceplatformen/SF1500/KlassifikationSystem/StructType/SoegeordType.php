<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF1500\KlassifikationSystem\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SoegeordType StructType
 * Meta information extracted from the WSDL
 * - definition: urn:oio:sagdok:klassesoegeord:ADD:3.0.0
 * @subpackage Structs
 */
class SoegeordType extends AbstractStructBase
{
    /**
     * The SoegeordIdentifikator
     * Meta information extracted from the WSDL
     * - base: string
     * - content: soegeordidentifikator
     * - definition: urn:oio:sagdok:soegeordidentifikator:BDD:1.0.0
     * - maxLength: 50
     * - minOccurs: 0
     * - ref: sd:SoegeordIdentifikator
     * @var string|null
     */
    protected ?string $SoegeordIdentifikator = null;
    /**
     * The BeskrivelseTekst
     * Meta information extracted from the WSDL
     * - base: string
     * - content: beskrivelse
     * - definition: urn:oio:sagdok:beskrivelse:BDD:1.0.0
     * - maxLength: 10000
     * - minOccurs: 0
     * - ref: sd:BeskrivelseTekst
     * @var string|null
     */
    protected ?string $BeskrivelseTekst = null;
    /**
     * The SoegeordKategoriTekst
     * Meta information extracted from the WSDL
     * - base: string
     * - content: soegeordskategori
     * - definition: urn:oio:sagdok:soegeordskategori:BDD:1.0.0
     * - maxLength: 1024
     * - minOccurs: 0
     * - ref: sd:SoegeordKategoriTekst
     * @var string|null
     */
    protected ?string $SoegeordKategoriTekst = null;
    /**
     * Constructor method for SoegeordType
     * @uses SoegeordType::setSoegeordIdentifikator()
     * @uses SoegeordType::setBeskrivelseTekst()
     * @uses SoegeordType::setSoegeordKategoriTekst()
     * @param string $soegeordIdentifikator
     * @param string $beskrivelseTekst
     * @param string $soegeordKategoriTekst
     */
    public function __construct(?string $soegeordIdentifikator = null, ?string $beskrivelseTekst = null, ?string $soegeordKategoriTekst = null)
    {
        $this
            ->setSoegeordIdentifikator($soegeordIdentifikator)
            ->setBeskrivelseTekst($beskrivelseTekst)
            ->setSoegeordKategoriTekst($soegeordKategoriTekst);
    }
    /**
     * Get SoegeordIdentifikator value
     * @return string|null
     */
    public function getSoegeordIdentifikator(): ?string
    {
        return $this->SoegeordIdentifikator;
    }
    /**
     * Set SoegeordIdentifikator value
     * @param string $soegeordIdentifikator
     * @return \ItkDev\Serviceplatformen\SF1500\KlassifikationSystem\StructType\SoegeordType
     */
    public function setSoegeordIdentifikator(?string $soegeordIdentifikator = null): self
    {
        // validation for constraint: string
        if (!is_null($soegeordIdentifikator) && !is_string($soegeordIdentifikator)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($soegeordIdentifikator, true), gettype($soegeordIdentifikator)), __LINE__);
        }
        // validation for constraint: maxLength(50)
        if (!is_null($soegeordIdentifikator) && mb_strlen((string) $soegeordIdentifikator) > 50) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 50', mb_strlen((string) $soegeordIdentifikator)), __LINE__);
        }
        $this->SoegeordIdentifikator = $soegeordIdentifikator;
        
        return $this;
    }
    /**
     * Get BeskrivelseTekst value
     * @return string|null
     */
    public function getBeskrivelseTekst(): ?string
    {
        return $this->BeskrivelseTekst;
    }
    /**
     * Set BeskrivelseTekst value
     * @param string $beskrivelseTekst
     * @return \ItkDev\Serviceplatformen\SF1500\KlassifikationSystem\StructType\SoegeordType
     */
    public function setBeskrivelseTekst(?string $beskrivelseTekst = null): self
    {
        // validation for constraint: string
        if (!is_null($beskrivelseTekst) && !is_string($beskrivelseTekst)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($beskrivelseTekst, true), gettype($beskrivelseTekst)), __LINE__);
        }
        // validation for constraint: maxLength(10000)
        if (!is_null($beskrivelseTekst) && mb_strlen((string) $beskrivelseTekst) > 10000) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 10000', mb_strlen((string) $beskrivelseTekst)), __LINE__);
        }
        $this->BeskrivelseTekst = $beskrivelseTekst;
        
        return $this;
    }
    /**
     * Get SoegeordKategoriTekst value
     * @return string|null
     */
    public function getSoegeordKategoriTekst(): ?string
    {
        return $this->SoegeordKategoriTekst;
    }
    /**
     * Set SoegeordKategoriTekst value
     * @param string $soegeordKategoriTekst
     * @return \ItkDev\Serviceplatformen\SF1500\KlassifikationSystem\StructType\SoegeordType
     */
    public function setSoegeordKategoriTekst(?string $soegeordKategoriTekst = null): self
    {
        // validation for constraint: string
        if (!is_null($soegeordKategoriTekst) && !is_string($soegeordKategoriTekst)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($soegeordKategoriTekst, true), gettype($soegeordKategoriTekst)), __LINE__);
        }
        // validation for constraint: maxLength(1024)
        if (!is_null($soegeordKategoriTekst) && mb_strlen((string) $soegeordKategoriTekst) > 1024) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 1024', mb_strlen((string) $soegeordKategoriTekst)), __LINE__);
        }
        $this->SoegeordKategoriTekst = $soegeordKategoriTekst;
        
        return $this;
    }
}
