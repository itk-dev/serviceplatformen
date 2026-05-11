<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF2900\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TransportkvitteringType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class TransportkvitteringType extends AbstractStructBase
{
    /**
     * The TransportValideringsKode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $TransportValideringsKode;
    /**
     * The Begrundelse
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Begrundelse = null;
    /**
     * The FejlListe
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ItkDev\Serviceplatformen\SF2900\StructType\FejlListeType|null
     */
    protected ?\ItkDev\Serviceplatformen\SF2900\StructType\FejlListeType $FejlListe = null;
    /**
     * Constructor method for TransportkvitteringType
     * @uses TransportkvitteringType::setTransportValideringsKode()
     * @uses TransportkvitteringType::setBegrundelse()
     * @uses TransportkvitteringType::setFejlListe()
     * @param string $transportValideringsKode
     * @param string $begrundelse
     * @param \ItkDev\Serviceplatformen\SF2900\StructType\FejlListeType $fejlListe
     */
    public function __construct(string $transportValideringsKode, ?string $begrundelse = null, ?\ItkDev\Serviceplatformen\SF2900\StructType\FejlListeType $fejlListe = null)
    {
        $this
            ->setTransportValideringsKode($transportValideringsKode)
            ->setBegrundelse($begrundelse)
            ->setFejlListe($fejlListe);
    }
    /**
     * Get TransportValideringsKode value
     * @return string
     */
    public function getTransportValideringsKode(): string
    {
        return $this->TransportValideringsKode;
    }
    /**
     * Set TransportValideringsKode value
     * @uses \ItkDev\Serviceplatformen\SF2900\EnumType\TransportValideringsKodeType::valueIsValid()
     * @uses \ItkDev\Serviceplatformen\SF2900\EnumType\TransportValideringsKodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $transportValideringsKode
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\TransportkvitteringType
     */
    public function setTransportValideringsKode(string $transportValideringsKode): self
    {
        // validation for constraint: enumeration
        if (!\ItkDev\Serviceplatformen\SF2900\EnumType\TransportValideringsKodeType::valueIsValid($transportValideringsKode)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \ItkDev\Serviceplatformen\SF2900\EnumType\TransportValideringsKodeType', is_array($transportValideringsKode) ? implode(', ', $transportValideringsKode) : var_export($transportValideringsKode, true), implode(', ', \ItkDev\Serviceplatformen\SF2900\EnumType\TransportValideringsKodeType::getValidValues())), __LINE__);
        }
        $this->TransportValideringsKode = $transportValideringsKode;
        
        return $this;
    }
    /**
     * Get Begrundelse value
     * @return string|null
     */
    public function getBegrundelse(): ?string
    {
        return $this->Begrundelse;
    }
    /**
     * Set Begrundelse value
     * @param string $begrundelse
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\TransportkvitteringType
     */
    public function setBegrundelse(?string $begrundelse = null): self
    {
        // validation for constraint: string
        if (!is_null($begrundelse) && !is_string($begrundelse)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($begrundelse, true), gettype($begrundelse)), __LINE__);
        }
        $this->Begrundelse = $begrundelse;
        
        return $this;
    }
    /**
     * Get FejlListe value
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\FejlListeType|null
     */
    public function getFejlListe(): ?\ItkDev\Serviceplatformen\SF2900\StructType\FejlListeType
    {
        return $this->FejlListe;
    }
    /**
     * Set FejlListe value
     * @param \ItkDev\Serviceplatformen\SF2900\StructType\FejlListeType $fejlListe
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\TransportkvitteringType
     */
    public function setFejlListe(?\ItkDev\Serviceplatformen\SF2900\StructType\FejlListeType $fejlListe = null): self
    {
        $this->FejlListe = $fejlListe;
        
        return $this;
    }
}
