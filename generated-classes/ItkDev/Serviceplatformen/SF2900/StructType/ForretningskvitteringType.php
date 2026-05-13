<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF2900\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ForretningskvitteringType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ForretningskvitteringType extends AbstractStructBase
{
    /**
     * The ForretningsValideringsKode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $ForretningsValideringsKode;
    /**
     * The Kvitteringstype
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $Kvitteringstype;
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
     * Constructor method for ForretningskvitteringType
     * @uses ForretningskvitteringType::setForretningsValideringsKode()
     * @uses ForretningskvitteringType::setKvitteringstype()
     * @uses ForretningskvitteringType::setBegrundelse()
     * @uses ForretningskvitteringType::setFejlListe()
     * @param string $forretningsValideringsKode
     * @param string $kvitteringstype
     * @param string $begrundelse
     * @param \ItkDev\Serviceplatformen\SF2900\StructType\FejlListeType $fejlListe
     */
    public function __construct(string $forretningsValideringsKode, string $kvitteringstype, ?string $begrundelse = null, ?\ItkDev\Serviceplatformen\SF2900\StructType\FejlListeType $fejlListe = null)
    {
        $this
            ->setForretningsValideringsKode($forretningsValideringsKode)
            ->setKvitteringstype($kvitteringstype)
            ->setBegrundelse($begrundelse)
            ->setFejlListe($fejlListe);
    }
    /**
     * Get ForretningsValideringsKode value
     * @return string
     */
    public function getForretningsValideringsKode(): string
    {
        return $this->ForretningsValideringsKode;
    }
    /**
     * Set ForretningsValideringsKode value
     * @uses \ItkDev\Serviceplatformen\SF2900\EnumType\ForretningsValideringsKodeType::valueIsValid()
     * @uses \ItkDev\Serviceplatformen\SF2900\EnumType\ForretningsValideringsKodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $forretningsValideringsKode
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\ForretningskvitteringType
     */
    public function setForretningsValideringsKode(string $forretningsValideringsKode): self
    {
        // validation for constraint: enumeration
        if (!\ItkDev\Serviceplatformen\SF2900\EnumType\ForretningsValideringsKodeType::valueIsValid($forretningsValideringsKode)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \ItkDev\Serviceplatformen\SF2900\EnumType\ForretningsValideringsKodeType', is_array($forretningsValideringsKode) ? implode(', ', $forretningsValideringsKode) : var_export($forretningsValideringsKode, true), implode(', ', \ItkDev\Serviceplatformen\SF2900\EnumType\ForretningsValideringsKodeType::getValidValues())), __LINE__);
        }
        $this->ForretningsValideringsKode = $forretningsValideringsKode;
        
        return $this;
    }
    /**
     * Get Kvitteringstype value
     * @return string
     */
    public function getKvitteringstype(): string
    {
        return $this->Kvitteringstype;
    }
    /**
     * Set Kvitteringstype value
     * @uses \ItkDev\Serviceplatformen\SF2900\EnumType\KvitteringstypeType::valueIsValid()
     * @uses \ItkDev\Serviceplatformen\SF2900\EnumType\KvitteringstypeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $kvitteringstype
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\ForretningskvitteringType
     */
    public function setKvitteringstype(string $kvitteringstype): self
    {
        // validation for constraint: enumeration
        if (!\ItkDev\Serviceplatformen\SF2900\EnumType\KvitteringstypeType::valueIsValid($kvitteringstype)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \ItkDev\Serviceplatformen\SF2900\EnumType\KvitteringstypeType', is_array($kvitteringstype) ? implode(', ', $kvitteringstype) : var_export($kvitteringstype, true), implode(', ', \ItkDev\Serviceplatformen\SF2900\EnumType\KvitteringstypeType::getValidValues())), __LINE__);
        }
        $this->Kvitteringstype = $kvitteringstype;
        
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
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\ForretningskvitteringType
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
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\ForretningskvitteringType
     */
    public function setFejlListe(?\ItkDev\Serviceplatformen\SF2900\StructType\FejlListeType $fejlListe = null): self
    {
        $this->FejlListe = $fejlListe;
        
        return $this;
    }
}
