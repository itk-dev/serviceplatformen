<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF1500\Klassifikation\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EgenskabType StructType
 * Meta information extracted from the WSDL
 * - definition: urn:oio:sagdok:klassifikationegenskaber:ADD:2.0.0
 * @subpackage Structs
 */
class EgenskabType extends AbstractStructBase
{
    /**
     * The Virkning
     * Meta information extracted from the WSDL
     * - content: virkning
     * - minOccurs: 0
     * - ref: sd:Virkning
     * @var \ItkDev\Serviceplatformen\SF1500\Klassifikation\StructType\VirkningType|null
     */
    protected ?\ItkDev\Serviceplatformen\SF1500\Klassifikation\StructType\VirkningType $Virkning = null;
    /**
     * The BrugervendtNoegleTekst
     * Meta information extracted from the WSDL
     * - base: string
     * - content: brugervendtnoegle
     * - definition: urn:oio:sagdok:brugervendtnoegle:BDD:1.0.0
     * - maxLength: 50
     * - minOccurs: 0
     * - ref: sd:BrugervendtNoegleTekst
     * @var string|null
     */
    protected ?string $BrugervendtNoegleTekst = null;
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
     * The KaldenavnTekst
     * Meta information extracted from the WSDL
     * - base: string
     * - content: kaldenavn
     * - definition: urn:oio:sagdok:kaldenavn:BDD:1.0.0
     * - maxLength: 50
     * - minOccurs: 0
     * - ref: sd:KaldenavnTekst
     * @var string|null
     */
    protected ?string $KaldenavnTekst = null;
    /**
     * The OphavsretTekst
     * Meta information extracted from the WSDL
     * - base: string
     * - content: ophavsret
     * - definition: urn:oio:sagdok:ophavsret:BDD:1.0.0
     * - maxLength: 4096
     * - minOccurs: 0
     * - ref: sd:OphavsretTekst
     * @var string|null
     */
    protected ?string $OphavsretTekst = null;
    /**
     * Constructor method for EgenskabType
     * @uses EgenskabType::setVirkning()
     * @uses EgenskabType::setBrugervendtNoegleTekst()
     * @uses EgenskabType::setTitelTekst()
     * @uses EgenskabType::setBeskrivelseTekst()
     * @uses EgenskabType::setKaldenavnTekst()
     * @uses EgenskabType::setOphavsretTekst()
     * @param \ItkDev\Serviceplatformen\SF1500\Klassifikation\StructType\VirkningType $virkning
     * @param string $brugervendtNoegleTekst
     * @param string $titelTekst
     * @param string $beskrivelseTekst
     * @param string $kaldenavnTekst
     * @param string $ophavsretTekst
     */
    public function __construct(?\ItkDev\Serviceplatformen\SF1500\Klassifikation\StructType\VirkningType $virkning = null, ?string $brugervendtNoegleTekst = null, ?string $titelTekst = null, ?string $beskrivelseTekst = null, ?string $kaldenavnTekst = null, ?string $ophavsretTekst = null)
    {
        $this
            ->setVirkning($virkning)
            ->setBrugervendtNoegleTekst($brugervendtNoegleTekst)
            ->setTitelTekst($titelTekst)
            ->setBeskrivelseTekst($beskrivelseTekst)
            ->setKaldenavnTekst($kaldenavnTekst)
            ->setOphavsretTekst($ophavsretTekst);
    }
    /**
     * Get Virkning value
     * @return \ItkDev\Serviceplatformen\SF1500\Klassifikation\StructType\VirkningType|null
     */
    public function getVirkning(): ?\ItkDev\Serviceplatformen\SF1500\Klassifikation\StructType\VirkningType
    {
        return $this->Virkning;
    }
    /**
     * Set Virkning value
     * @param \ItkDev\Serviceplatformen\SF1500\Klassifikation\StructType\VirkningType $virkning
     * @return \ItkDev\Serviceplatformen\SF1500\Klassifikation\StructType\EgenskabType
     */
    public function setVirkning(?\ItkDev\Serviceplatformen\SF1500\Klassifikation\StructType\VirkningType $virkning = null): self
    {
        $this->Virkning = $virkning;
        
        return $this;
    }
    /**
     * Get BrugervendtNoegleTekst value
     * @return string|null
     */
    public function getBrugervendtNoegleTekst(): ?string
    {
        return $this->BrugervendtNoegleTekst;
    }
    /**
     * Set BrugervendtNoegleTekst value
     * @param string $brugervendtNoegleTekst
     * @return \ItkDev\Serviceplatformen\SF1500\Klassifikation\StructType\EgenskabType
     */
    public function setBrugervendtNoegleTekst(?string $brugervendtNoegleTekst = null): self
    {
        // validation for constraint: string
        if (!is_null($brugervendtNoegleTekst) && !is_string($brugervendtNoegleTekst)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($brugervendtNoegleTekst, true), gettype($brugervendtNoegleTekst)), __LINE__);
        }
        // validation for constraint: maxLength(50)
        if (!is_null($brugervendtNoegleTekst) && mb_strlen((string) $brugervendtNoegleTekst) > 50) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 50', mb_strlen((string) $brugervendtNoegleTekst)), __LINE__);
        }
        $this->BrugervendtNoegleTekst = $brugervendtNoegleTekst;
        
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
     * @return \ItkDev\Serviceplatformen\SF1500\Klassifikation\StructType\EgenskabType
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
     * @return \ItkDev\Serviceplatformen\SF1500\Klassifikation\StructType\EgenskabType
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
     * Get KaldenavnTekst value
     * @return string|null
     */
    public function getKaldenavnTekst(): ?string
    {
        return $this->KaldenavnTekst;
    }
    /**
     * Set KaldenavnTekst value
     * @param string $kaldenavnTekst
     * @return \ItkDev\Serviceplatformen\SF1500\Klassifikation\StructType\EgenskabType
     */
    public function setKaldenavnTekst(?string $kaldenavnTekst = null): self
    {
        // validation for constraint: string
        if (!is_null($kaldenavnTekst) && !is_string($kaldenavnTekst)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($kaldenavnTekst, true), gettype($kaldenavnTekst)), __LINE__);
        }
        // validation for constraint: maxLength(50)
        if (!is_null($kaldenavnTekst) && mb_strlen((string) $kaldenavnTekst) > 50) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 50', mb_strlen((string) $kaldenavnTekst)), __LINE__);
        }
        $this->KaldenavnTekst = $kaldenavnTekst;
        
        return $this;
    }
    /**
     * Get OphavsretTekst value
     * @return string|null
     */
    public function getOphavsretTekst(): ?string
    {
        return $this->OphavsretTekst;
    }
    /**
     * Set OphavsretTekst value
     * @param string $ophavsretTekst
     * @return \ItkDev\Serviceplatformen\SF1500\Klassifikation\StructType\EgenskabType
     */
    public function setOphavsretTekst(?string $ophavsretTekst = null): self
    {
        // validation for constraint: string
        if (!is_null($ophavsretTekst) && !is_string($ophavsretTekst)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ophavsretTekst, true), gettype($ophavsretTekst)), __LINE__);
        }
        // validation for constraint: maxLength(4096)
        if (!is_null($ophavsretTekst) && mb_strlen((string) $ophavsretTekst) > 4096) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 4096', mb_strlen((string) $ophavsretTekst)), __LINE__);
        }
        $this->OphavsretTekst = $ophavsretTekst;
        
        return $this;
    }
}
