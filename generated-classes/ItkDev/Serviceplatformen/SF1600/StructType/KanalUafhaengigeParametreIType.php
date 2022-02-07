<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF1600\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for KanalUafhaengigeParametreIType StructType
 * @subpackage Structs
 */
class KanalUafhaengigeParametreIType extends AbstractStructBase
{
    /**
     * The EnhedTekst
     * Meta information extracted from the WSDL
     * - base: string
     * - maxLength: 2000
     * - minOccurs: 0
     * - ref: fjernprint:EnhedTekst
     * @var string|null
     */
    protected ?string $EnhedTekst = null;
    /**
     * The BrugerNavn
     * Meta information extracted from the WSDL
     * - base: string
     * - maxLength: 2000
     * - minLength: 1
     * - ref: fjernprint:BrugerNavn
     * @var string|null
     */
    protected ?string $BrugerNavn = null;
    /**
     * The KonteringsGruppeTekst
     * Meta information extracted from the WSDL
     * - base: string
     * - maxLength: 2000
     * - minOccurs: 0
     * - ref: fjernprint:KonteringsGruppeTekst
     * @var string|null
     */
    protected ?string $KonteringsGruppeTekst = null;
    /**
     * The ForsendelseAfsender
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: fjernprint:ForsendelseAfsender
     * @var \ItkDev\Serviceplatformen\SF1600\StructType\ForsendelseAfsenderType|null
     */
    protected ?\ItkDev\Serviceplatformen\SF1600\StructType\ForsendelseAfsenderType $ForsendelseAfsender = null;
    /**
     * The PaatrykAfsenderAdresseIndikator
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: fjernprint:PaatrykAfsenderAdresseIndikator
     * @var bool|null
     */
    protected ?bool $PaatrykAfsenderAdresseIndikator = null;
    /**
     * The PaatrykModtagerAdresseIndikator
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: fjernprint:PaatrykModtagerAdresseIndikator
     * @var bool|null
     */
    protected ?bool $PaatrykModtagerAdresseIndikator = null;
    /**
     * The PaatrykBrevdatoIndikator
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: fjernprint:PaatrykBrevdatoIndikator
     * @var bool|null
     */
    protected ?bool $PaatrykBrevdatoIndikator = null;
    /**
     * The KanalKode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: fjernprint:KanalKode
     * @var string|null
     */
    protected ?string $KanalKode = null;
    /**
     * The HasteBrevIndikator
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: fjernprint:HasteBrevIndikator
     * @var bool|null
     */
    protected ?bool $HasteBrevIndikator = null;
    /**
     * Constructor method for KanalUafhaengigeParametreIType
     * @uses KanalUafhaengigeParametreIType::setEnhedTekst()
     * @uses KanalUafhaengigeParametreIType::setBrugerNavn()
     * @uses KanalUafhaengigeParametreIType::setKonteringsGruppeTekst()
     * @uses KanalUafhaengigeParametreIType::setForsendelseAfsender()
     * @uses KanalUafhaengigeParametreIType::setPaatrykAfsenderAdresseIndikator()
     * @uses KanalUafhaengigeParametreIType::setPaatrykModtagerAdresseIndikator()
     * @uses KanalUafhaengigeParametreIType::setPaatrykBrevdatoIndikator()
     * @uses KanalUafhaengigeParametreIType::setKanalKode()
     * @uses KanalUafhaengigeParametreIType::setHasteBrevIndikator()
     * @param string $enhedTekst
     * @param string $brugerNavn
     * @param string $konteringsGruppeTekst
     * @param \ItkDev\Serviceplatformen\SF1600\StructType\ForsendelseAfsenderType $forsendelseAfsender
     * @param bool $paatrykAfsenderAdresseIndikator
     * @param bool $paatrykModtagerAdresseIndikator
     * @param bool $paatrykBrevdatoIndikator
     * @param string $kanalKode
     * @param bool $hasteBrevIndikator
     */
    public function __construct(?string $enhedTekst = null, ?string $brugerNavn = null, ?string $konteringsGruppeTekst = null, ?\ItkDev\Serviceplatformen\SF1600\StructType\ForsendelseAfsenderType $forsendelseAfsender = null, ?bool $paatrykAfsenderAdresseIndikator = null, ?bool $paatrykModtagerAdresseIndikator = null, ?bool $paatrykBrevdatoIndikator = null, ?string $kanalKode = null, ?bool $hasteBrevIndikator = null)
    {
        $this
            ->setEnhedTekst($enhedTekst)
            ->setBrugerNavn($brugerNavn)
            ->setKonteringsGruppeTekst($konteringsGruppeTekst)
            ->setForsendelseAfsender($forsendelseAfsender)
            ->setPaatrykAfsenderAdresseIndikator($paatrykAfsenderAdresseIndikator)
            ->setPaatrykModtagerAdresseIndikator($paatrykModtagerAdresseIndikator)
            ->setPaatrykBrevdatoIndikator($paatrykBrevdatoIndikator)
            ->setKanalKode($kanalKode)
            ->setHasteBrevIndikator($hasteBrevIndikator);
    }
    /**
     * Get EnhedTekst value
     * @return string|null
     */
    public function getEnhedTekst(): ?string
    {
        return $this->EnhedTekst;
    }
    /**
     * Set EnhedTekst value
     * @param string $enhedTekst
     * @return \ItkDev\Serviceplatformen\SF1600\StructType\KanalUafhaengigeParametreIType
     */
    public function setEnhedTekst(?string $enhedTekst = null): self
    {
        // validation for constraint: string
        if (!is_null($enhedTekst) && !is_string($enhedTekst)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($enhedTekst, true), gettype($enhedTekst)), __LINE__);
        }
        // validation for constraint: maxLength(2000)
        if (!is_null($enhedTekst) && mb_strlen((string) $enhedTekst) > 2000) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 2000', mb_strlen((string) $enhedTekst)), __LINE__);
        }
        $this->EnhedTekst = $enhedTekst;
        
        return $this;
    }
    /**
     * Get BrugerNavn value
     * @return string|null
     */
    public function getBrugerNavn(): ?string
    {
        return $this->BrugerNavn;
    }
    /**
     * Set BrugerNavn value
     * @param string $brugerNavn
     * @return \ItkDev\Serviceplatformen\SF1600\StructType\KanalUafhaengigeParametreIType
     */
    public function setBrugerNavn(?string $brugerNavn = null): self
    {
        // validation for constraint: string
        if (!is_null($brugerNavn) && !is_string($brugerNavn)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($brugerNavn, true), gettype($brugerNavn)), __LINE__);
        }
        // validation for constraint: maxLength(2000)
        if (!is_null($brugerNavn) && mb_strlen((string) $brugerNavn) > 2000) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 2000', mb_strlen((string) $brugerNavn)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($brugerNavn) && mb_strlen((string) $brugerNavn) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $brugerNavn)), __LINE__);
        }
        $this->BrugerNavn = $brugerNavn;
        
        return $this;
    }
    /**
     * Get KonteringsGruppeTekst value
     * @return string|null
     */
    public function getKonteringsGruppeTekst(): ?string
    {
        return $this->KonteringsGruppeTekst;
    }
    /**
     * Set KonteringsGruppeTekst value
     * @param string $konteringsGruppeTekst
     * @return \ItkDev\Serviceplatformen\SF1600\StructType\KanalUafhaengigeParametreIType
     */
    public function setKonteringsGruppeTekst(?string $konteringsGruppeTekst = null): self
    {
        // validation for constraint: string
        if (!is_null($konteringsGruppeTekst) && !is_string($konteringsGruppeTekst)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($konteringsGruppeTekst, true), gettype($konteringsGruppeTekst)), __LINE__);
        }
        // validation for constraint: maxLength(2000)
        if (!is_null($konteringsGruppeTekst) && mb_strlen((string) $konteringsGruppeTekst) > 2000) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 2000', mb_strlen((string) $konteringsGruppeTekst)), __LINE__);
        }
        $this->KonteringsGruppeTekst = $konteringsGruppeTekst;
        
        return $this;
    }
    /**
     * Get ForsendelseAfsender value
     * @return \ItkDev\Serviceplatformen\SF1600\StructType\ForsendelseAfsenderType|null
     */
    public function getForsendelseAfsender(): ?\ItkDev\Serviceplatformen\SF1600\StructType\ForsendelseAfsenderType
    {
        return $this->ForsendelseAfsender;
    }
    /**
     * Set ForsendelseAfsender value
     * @param \ItkDev\Serviceplatformen\SF1600\StructType\ForsendelseAfsenderType $forsendelseAfsender
     * @return \ItkDev\Serviceplatformen\SF1600\StructType\KanalUafhaengigeParametreIType
     */
    public function setForsendelseAfsender(?\ItkDev\Serviceplatformen\SF1600\StructType\ForsendelseAfsenderType $forsendelseAfsender = null): self
    {
        $this->ForsendelseAfsender = $forsendelseAfsender;
        
        return $this;
    }
    /**
     * Get PaatrykAfsenderAdresseIndikator value
     * @return bool|null
     */
    public function getPaatrykAfsenderAdresseIndikator(): ?bool
    {
        return $this->PaatrykAfsenderAdresseIndikator;
    }
    /**
     * Set PaatrykAfsenderAdresseIndikator value
     * @param bool $paatrykAfsenderAdresseIndikator
     * @return \ItkDev\Serviceplatformen\SF1600\StructType\KanalUafhaengigeParametreIType
     */
    public function setPaatrykAfsenderAdresseIndikator(?bool $paatrykAfsenderAdresseIndikator = null): self
    {
        // validation for constraint: boolean
        if (!is_null($paatrykAfsenderAdresseIndikator) && !is_bool($paatrykAfsenderAdresseIndikator)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($paatrykAfsenderAdresseIndikator, true), gettype($paatrykAfsenderAdresseIndikator)), __LINE__);
        }
        $this->PaatrykAfsenderAdresseIndikator = $paatrykAfsenderAdresseIndikator;
        
        return $this;
    }
    /**
     * Get PaatrykModtagerAdresseIndikator value
     * @return bool|null
     */
    public function getPaatrykModtagerAdresseIndikator(): ?bool
    {
        return $this->PaatrykModtagerAdresseIndikator;
    }
    /**
     * Set PaatrykModtagerAdresseIndikator value
     * @param bool $paatrykModtagerAdresseIndikator
     * @return \ItkDev\Serviceplatformen\SF1600\StructType\KanalUafhaengigeParametreIType
     */
    public function setPaatrykModtagerAdresseIndikator(?bool $paatrykModtagerAdresseIndikator = null): self
    {
        // validation for constraint: boolean
        if (!is_null($paatrykModtagerAdresseIndikator) && !is_bool($paatrykModtagerAdresseIndikator)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($paatrykModtagerAdresseIndikator, true), gettype($paatrykModtagerAdresseIndikator)), __LINE__);
        }
        $this->PaatrykModtagerAdresseIndikator = $paatrykModtagerAdresseIndikator;
        
        return $this;
    }
    /**
     * Get PaatrykBrevdatoIndikator value
     * @return bool|null
     */
    public function getPaatrykBrevdatoIndikator(): ?bool
    {
        return $this->PaatrykBrevdatoIndikator;
    }
    /**
     * Set PaatrykBrevdatoIndikator value
     * @param bool $paatrykBrevdatoIndikator
     * @return \ItkDev\Serviceplatformen\SF1600\StructType\KanalUafhaengigeParametreIType
     */
    public function setPaatrykBrevdatoIndikator(?bool $paatrykBrevdatoIndikator = null): self
    {
        // validation for constraint: boolean
        if (!is_null($paatrykBrevdatoIndikator) && !is_bool($paatrykBrevdatoIndikator)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($paatrykBrevdatoIndikator, true), gettype($paatrykBrevdatoIndikator)), __LINE__);
        }
        $this->PaatrykBrevdatoIndikator = $paatrykBrevdatoIndikator;
        
        return $this;
    }
    /**
     * Get KanalKode value
     * @return string|null
     */
    public function getKanalKode(): ?string
    {
        return $this->KanalKode;
    }
    /**
     * Set KanalKode value
     * @uses \ItkDev\Serviceplatformen\SF1600\EnumType\KanalKodeType::valueIsValid()
     * @uses \ItkDev\Serviceplatformen\SF1600\EnumType\KanalKodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $kanalKode
     * @return \ItkDev\Serviceplatformen\SF1600\StructType\KanalUafhaengigeParametreIType
     */
    public function setKanalKode(?string $kanalKode = null): self
    {
        // validation for constraint: enumeration
        if (!\ItkDev\Serviceplatformen\SF1600\EnumType\KanalKodeType::valueIsValid($kanalKode)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \ItkDev\Serviceplatformen\SF1600\EnumType\KanalKodeType', is_array($kanalKode) ? implode(', ', $kanalKode) : var_export($kanalKode, true), implode(', ', \ItkDev\Serviceplatformen\SF1600\EnumType\KanalKodeType::getValidValues())), __LINE__);
        }
        $this->KanalKode = $kanalKode;
        
        return $this;
    }
    /**
     * Get HasteBrevIndikator value
     * @return bool|null
     */
    public function getHasteBrevIndikator(): ?bool
    {
        return $this->HasteBrevIndikator;
    }
    /**
     * Set HasteBrevIndikator value
     * @param bool $hasteBrevIndikator
     * @return \ItkDev\Serviceplatformen\SF1600\StructType\KanalUafhaengigeParametreIType
     */
    public function setHasteBrevIndikator(?bool $hasteBrevIndikator = null): self
    {
        // validation for constraint: boolean
        if (!is_null($hasteBrevIndikator) && !is_bool($hasteBrevIndikator)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($hasteBrevIndikator, true), gettype($hasteBrevIndikator)), __LINE__);
        }
        $this->HasteBrevIndikator = $hasteBrevIndikator;
        
        return $this;
    }
}
