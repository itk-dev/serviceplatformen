<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF1500\Klasse\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VirkningType StructType
 * Meta information extracted from the WSDL
 * - definition: urn:oio:sagdok:virkning:ADD:2.0.0
 * @subpackage Structs
 */
class VirkningType extends AbstractStructBase
{
    /**
     * The FraTidspunkt
     * Meta information extracted from the WSDL
     * - content: fratidspunkt
     * - minOccurs: 0
     * - ref: sd:FraTidspunkt
     * @var \ItkDev\Serviceplatformen\SF1500\Klasse\StructType\TidspunktType|null
     */
    protected ?\ItkDev\Serviceplatformen\SF1500\Klasse\StructType\TidspunktType $FraTidspunkt = null;
    /**
     * The TilTidspunkt
     * Meta information extracted from the WSDL
     * - content: tiltidspunkt
     * - minOccurs: 0
     * - ref: sd:TilTidspunkt
     * @var \ItkDev\Serviceplatformen\SF1500\Klasse\StructType\TidspunktType|null
     */
    protected ?\ItkDev\Serviceplatformen\SF1500\Klasse\StructType\TidspunktType $TilTidspunkt = null;
    /**
     * The AktoerRef
     * Meta information extracted from the WSDL
     * - content: aktoerref
     * - minOccurs: 0
     * - ref: sd:AktoerRef
     * @var \ItkDev\Serviceplatformen\SF1500\Klasse\StructType\UnikIdType|null
     */
    protected ?\ItkDev\Serviceplatformen\SF1500\Klasse\StructType\UnikIdType $AktoerRef = null;
    /**
     * The AktoerTypeKode
     * Meta information extracted from the WSDL
     * - content: aktoertype
     * - minOccurs: 0
     * - ref: sd:AktoerTypeKode
     * @var string|null
     */
    protected ?string $AktoerTypeKode = null;
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
     * Constructor method for VirkningType
     * @uses VirkningType::setFraTidspunkt()
     * @uses VirkningType::setTilTidspunkt()
     * @uses VirkningType::setAktoerRef()
     * @uses VirkningType::setAktoerTypeKode()
     * @uses VirkningType::setNoteTekst()
     * @param \ItkDev\Serviceplatformen\SF1500\Klasse\StructType\TidspunktType $fraTidspunkt
     * @param \ItkDev\Serviceplatformen\SF1500\Klasse\StructType\TidspunktType $tilTidspunkt
     * @param \ItkDev\Serviceplatformen\SF1500\Klasse\StructType\UnikIdType $aktoerRef
     * @param string $aktoerTypeKode
     * @param string $noteTekst
     */
    public function __construct(?\ItkDev\Serviceplatformen\SF1500\Klasse\StructType\TidspunktType $fraTidspunkt = null, ?\ItkDev\Serviceplatformen\SF1500\Klasse\StructType\TidspunktType $tilTidspunkt = null, ?\ItkDev\Serviceplatformen\SF1500\Klasse\StructType\UnikIdType $aktoerRef = null, ?string $aktoerTypeKode = null, ?string $noteTekst = null)
    {
        $this
            ->setFraTidspunkt($fraTidspunkt)
            ->setTilTidspunkt($tilTidspunkt)
            ->setAktoerRef($aktoerRef)
            ->setAktoerTypeKode($aktoerTypeKode)
            ->setNoteTekst($noteTekst);
    }
    /**
     * Get FraTidspunkt value
     * @return \ItkDev\Serviceplatformen\SF1500\Klasse\StructType\TidspunktType|null
     */
    public function getFraTidspunkt(): ?\ItkDev\Serviceplatformen\SF1500\Klasse\StructType\TidspunktType
    {
        return $this->FraTidspunkt;
    }
    /**
     * Set FraTidspunkt value
     * @param \ItkDev\Serviceplatformen\SF1500\Klasse\StructType\TidspunktType $fraTidspunkt
     * @return \ItkDev\Serviceplatformen\SF1500\Klasse\StructType\VirkningType
     */
    public function setFraTidspunkt(?\ItkDev\Serviceplatformen\SF1500\Klasse\StructType\TidspunktType $fraTidspunkt = null): self
    {
        $this->FraTidspunkt = $fraTidspunkt;
        
        return $this;
    }
    /**
     * Get TilTidspunkt value
     * @return \ItkDev\Serviceplatformen\SF1500\Klasse\StructType\TidspunktType|null
     */
    public function getTilTidspunkt(): ?\ItkDev\Serviceplatformen\SF1500\Klasse\StructType\TidspunktType
    {
        return $this->TilTidspunkt;
    }
    /**
     * Set TilTidspunkt value
     * @param \ItkDev\Serviceplatformen\SF1500\Klasse\StructType\TidspunktType $tilTidspunkt
     * @return \ItkDev\Serviceplatformen\SF1500\Klasse\StructType\VirkningType
     */
    public function setTilTidspunkt(?\ItkDev\Serviceplatformen\SF1500\Klasse\StructType\TidspunktType $tilTidspunkt = null): self
    {
        $this->TilTidspunkt = $tilTidspunkt;
        
        return $this;
    }
    /**
     * Get AktoerRef value
     * @return \ItkDev\Serviceplatformen\SF1500\Klasse\StructType\UnikIdType|null
     */
    public function getAktoerRef(): ?\ItkDev\Serviceplatformen\SF1500\Klasse\StructType\UnikIdType
    {
        return $this->AktoerRef;
    }
    /**
     * Set AktoerRef value
     * @param \ItkDev\Serviceplatformen\SF1500\Klasse\StructType\UnikIdType $aktoerRef
     * @return \ItkDev\Serviceplatformen\SF1500\Klasse\StructType\VirkningType
     */
    public function setAktoerRef(?\ItkDev\Serviceplatformen\SF1500\Klasse\StructType\UnikIdType $aktoerRef = null): self
    {
        $this->AktoerRef = $aktoerRef;
        
        return $this;
    }
    /**
     * Get AktoerTypeKode value
     * @return string|null
     */
    public function getAktoerTypeKode(): ?string
    {
        return $this->AktoerTypeKode;
    }
    /**
     * Set AktoerTypeKode value
     * @uses \ItkDev\Serviceplatformen\SF1500\Klasse\EnumType\AktoerTypeKodeType::valueIsValid()
     * @uses \ItkDev\Serviceplatformen\SF1500\Klasse\EnumType\AktoerTypeKodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $aktoerTypeKode
     * @return \ItkDev\Serviceplatformen\SF1500\Klasse\StructType\VirkningType
     */
    public function setAktoerTypeKode(?string $aktoerTypeKode = null): self
    {
        // validation for constraint: enumeration
        if (!\ItkDev\Serviceplatformen\SF1500\Klasse\EnumType\AktoerTypeKodeType::valueIsValid($aktoerTypeKode)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \ItkDev\Serviceplatformen\SF1500\Klasse\EnumType\AktoerTypeKodeType', is_array($aktoerTypeKode) ? implode(', ', $aktoerTypeKode) : var_export($aktoerTypeKode, true), implode(', ', \ItkDev\Serviceplatformen\SF1500\Klasse\EnumType\AktoerTypeKodeType::getValidValues())), __LINE__);
        }
        $this->AktoerTypeKode = $aktoerTypeKode;
        
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
     * @return \ItkDev\Serviceplatformen\SF1500\Klasse\StructType\VirkningType
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
}
