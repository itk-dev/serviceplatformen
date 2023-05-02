<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF1500\OrganisationFunktion\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SoegRegistreringType StructType
 * Meta information extracted from the WSDL
 * - definition: urn:oio:sagdok:soegregistrering:ADD:1.0.0
 * @subpackage Structs
 */
class SoegRegistreringType extends AbstractStructBase
{
    /**
     * The FraTidspunkt
     * Meta information extracted from the WSDL
     * - content: fratidspunkt
     * - minOccurs: 0
     * - ref: sd:FraTidspunkt
     * @var \ItkDev\Serviceplatformen\SF1500\OrganisationFunktion\StructType\TidspunktType|null
     */
    protected ?\ItkDev\Serviceplatformen\SF1500\OrganisationFunktion\StructType\TidspunktType $FraTidspunkt = null;
    /**
     * The TilTidspunkt
     * Meta information extracted from the WSDL
     * - content: tiltidspunkt
     * - minOccurs: 0
     * - ref: sd:TilTidspunkt
     * @var \ItkDev\Serviceplatformen\SF1500\OrganisationFunktion\StructType\TidspunktType|null
     */
    protected ?\ItkDev\Serviceplatformen\SF1500\OrganisationFunktion\StructType\TidspunktType $TilTidspunkt = null;
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
     * @var \ItkDev\Serviceplatformen\SF1500\OrganisationFunktion\StructType\UnikIdType|null
     */
    protected ?\ItkDev\Serviceplatformen\SF1500\OrganisationFunktion\StructType\UnikIdType $BrugerRef = null;
    /**
     * Constructor method for SoegRegistreringType
     * @uses SoegRegistreringType::setFraTidspunkt()
     * @uses SoegRegistreringType::setTilTidspunkt()
     * @uses SoegRegistreringType::setLivscyklusKode()
     * @uses SoegRegistreringType::setBrugerRef()
     * @param \ItkDev\Serviceplatformen\SF1500\OrganisationFunktion\StructType\TidspunktType $fraTidspunkt
     * @param \ItkDev\Serviceplatformen\SF1500\OrganisationFunktion\StructType\TidspunktType $tilTidspunkt
     * @param string $livscyklusKode
     * @param \ItkDev\Serviceplatformen\SF1500\OrganisationFunktion\StructType\UnikIdType $brugerRef
     */
    public function __construct(?\ItkDev\Serviceplatformen\SF1500\OrganisationFunktion\StructType\TidspunktType $fraTidspunkt = null, ?\ItkDev\Serviceplatformen\SF1500\OrganisationFunktion\StructType\TidspunktType $tilTidspunkt = null, ?string $livscyklusKode = null, ?\ItkDev\Serviceplatformen\SF1500\OrganisationFunktion\StructType\UnikIdType $brugerRef = null)
    {
        $this
            ->setFraTidspunkt($fraTidspunkt)
            ->setTilTidspunkt($tilTidspunkt)
            ->setLivscyklusKode($livscyklusKode)
            ->setBrugerRef($brugerRef);
    }
    /**
     * Get FraTidspunkt value
     * @return \ItkDev\Serviceplatformen\SF1500\OrganisationFunktion\StructType\TidspunktType|null
     */
    public function getFraTidspunkt(): ?\ItkDev\Serviceplatformen\SF1500\OrganisationFunktion\StructType\TidspunktType
    {
        return $this->FraTidspunkt;
    }
    /**
     * Set FraTidspunkt value
     * @param \ItkDev\Serviceplatformen\SF1500\OrganisationFunktion\StructType\TidspunktType $fraTidspunkt
     * @return \ItkDev\Serviceplatformen\SF1500\OrganisationFunktion\StructType\SoegRegistreringType
     */
    public function setFraTidspunkt(?\ItkDev\Serviceplatformen\SF1500\OrganisationFunktion\StructType\TidspunktType $fraTidspunkt = null): self
    {
        $this->FraTidspunkt = $fraTidspunkt;
        
        return $this;
    }
    /**
     * Get TilTidspunkt value
     * @return \ItkDev\Serviceplatformen\SF1500\OrganisationFunktion\StructType\TidspunktType|null
     */
    public function getTilTidspunkt(): ?\ItkDev\Serviceplatformen\SF1500\OrganisationFunktion\StructType\TidspunktType
    {
        return $this->TilTidspunkt;
    }
    /**
     * Set TilTidspunkt value
     * @param \ItkDev\Serviceplatformen\SF1500\OrganisationFunktion\StructType\TidspunktType $tilTidspunkt
     * @return \ItkDev\Serviceplatformen\SF1500\OrganisationFunktion\StructType\SoegRegistreringType
     */
    public function setTilTidspunkt(?\ItkDev\Serviceplatformen\SF1500\OrganisationFunktion\StructType\TidspunktType $tilTidspunkt = null): self
    {
        $this->TilTidspunkt = $tilTidspunkt;
        
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
     * @uses \ItkDev\Serviceplatformen\SF1500\OrganisationFunktion\EnumType\LivscyklusKodeType::valueIsValid()
     * @uses \ItkDev\Serviceplatformen\SF1500\OrganisationFunktion\EnumType\LivscyklusKodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $livscyklusKode
     * @return \ItkDev\Serviceplatformen\SF1500\OrganisationFunktion\StructType\SoegRegistreringType
     */
    public function setLivscyklusKode(?string $livscyklusKode = null): self
    {
        // validation for constraint: enumeration
        if (!\ItkDev\Serviceplatformen\SF1500\OrganisationFunktion\EnumType\LivscyklusKodeType::valueIsValid($livscyklusKode)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \ItkDev\Serviceplatformen\SF1500\OrganisationFunktion\EnumType\LivscyklusKodeType', is_array($livscyklusKode) ? implode(', ', $livscyklusKode) : var_export($livscyklusKode, true), implode(', ', \ItkDev\Serviceplatformen\SF1500\OrganisationFunktion\EnumType\LivscyklusKodeType::getValidValues())), __LINE__);
        }
        $this->LivscyklusKode = $livscyklusKode;
        
        return $this;
    }
    /**
     * Get BrugerRef value
     * @return \ItkDev\Serviceplatformen\SF1500\OrganisationFunktion\StructType\UnikIdType|null
     */
    public function getBrugerRef(): ?\ItkDev\Serviceplatformen\SF1500\OrganisationFunktion\StructType\UnikIdType
    {
        return $this->BrugerRef;
    }
    /**
     * Set BrugerRef value
     * @param \ItkDev\Serviceplatformen\SF1500\OrganisationFunktion\StructType\UnikIdType $brugerRef
     * @return \ItkDev\Serviceplatformen\SF1500\OrganisationFunktion\StructType\SoegRegistreringType
     */
    public function setBrugerRef(?\ItkDev\Serviceplatformen\SF1500\OrganisationFunktion\StructType\UnikIdType $brugerRef = null): self
    {
        $this->BrugerRef = $brugerRef;
        
        return $this;
    }
}
