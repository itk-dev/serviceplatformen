<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF1500\OrganisationAdministration\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RegistreringType StructType
 * Meta information extracted from the WSDL
 * - definition: urn:oio:sagdok:registrering:ADD:2.0.0
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
     * @var \ItkDev\Serviceplatformen\SF1500\OrganisationAdministration\StructType\UnikIdType|null
     */
    protected ?\ItkDev\Serviceplatformen\SF1500\OrganisationAdministration\StructType\UnikIdType $BrugerRef = null;
    /**
     * Constructor method for RegistreringType
     * @uses RegistreringType::setNoteTekst()
     * @uses RegistreringType::setTidspunkt()
     * @uses RegistreringType::setLivscyklusKode()
     * @uses RegistreringType::setBrugerRef()
     * @param string $noteTekst
     * @param string $tidspunkt
     * @param string $livscyklusKode
     * @param \ItkDev\Serviceplatformen\SF1500\OrganisationAdministration\StructType\UnikIdType $brugerRef
     */
    public function __construct(?string $noteTekst = null, ?string $tidspunkt = null, ?string $livscyklusKode = null, ?\ItkDev\Serviceplatformen\SF1500\OrganisationAdministration\StructType\UnikIdType $brugerRef = null)
    {
        $this
            ->setNoteTekst($noteTekst)
            ->setTidspunkt($tidspunkt)
            ->setLivscyklusKode($livscyklusKode)
            ->setBrugerRef($brugerRef);
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
     * @return \ItkDev\Serviceplatformen\SF1500\OrganisationAdministration\StructType\RegistreringType
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
     * @return \ItkDev\Serviceplatformen\SF1500\OrganisationAdministration\StructType\RegistreringType
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
     * @uses \ItkDev\Serviceplatformen\SF1500\OrganisationAdministration\EnumType\LivscyklusKodeType::valueIsValid()
     * @uses \ItkDev\Serviceplatformen\SF1500\OrganisationAdministration\EnumType\LivscyklusKodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $livscyklusKode
     * @return \ItkDev\Serviceplatformen\SF1500\OrganisationAdministration\StructType\RegistreringType
     */
    public function setLivscyklusKode(?string $livscyklusKode = null): self
    {
        // validation for constraint: enumeration
        if (!\ItkDev\Serviceplatformen\SF1500\OrganisationAdministration\EnumType\LivscyklusKodeType::valueIsValid($livscyklusKode)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \ItkDev\Serviceplatformen\SF1500\OrganisationAdministration\EnumType\LivscyklusKodeType', is_array($livscyklusKode) ? implode(', ', $livscyklusKode) : var_export($livscyklusKode, true), implode(', ', \ItkDev\Serviceplatformen\SF1500\OrganisationAdministration\EnumType\LivscyklusKodeType::getValidValues())), __LINE__);
        }
        $this->LivscyklusKode = $livscyklusKode;
        
        return $this;
    }
    /**
     * Get BrugerRef value
     * @return \ItkDev\Serviceplatformen\SF1500\OrganisationAdministration\StructType\UnikIdType|null
     */
    public function getBrugerRef(): ?\ItkDev\Serviceplatformen\SF1500\OrganisationAdministration\StructType\UnikIdType
    {
        return $this->BrugerRef;
    }
    /**
     * Set BrugerRef value
     * @param \ItkDev\Serviceplatformen\SF1500\OrganisationAdministration\StructType\UnikIdType $brugerRef
     * @return \ItkDev\Serviceplatformen\SF1500\OrganisationAdministration\StructType\RegistreringType
     */
    public function setBrugerRef(?\ItkDev\Serviceplatformen\SF1500\OrganisationAdministration\StructType\UnikIdType $brugerRef = null): self
    {
        $this->BrugerRef = $brugerRef;
        
        return $this;
    }
}
