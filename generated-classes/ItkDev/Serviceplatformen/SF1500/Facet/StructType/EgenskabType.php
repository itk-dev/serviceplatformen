<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF1500\Facet\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EgenskabType StructType
 * Meta information extracted from the WSDL
 * - definition: urn:oio:sagdok:facetegenskaber:ADD:2.0.0
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
     * @var \ItkDev\Serviceplatformen\SF1500\Facet\StructType\VirkningType|null
     */
    protected ?\ItkDev\Serviceplatformen\SF1500\Facet\StructType\VirkningType $Virkning = null;
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
     * The OpbygningTekst
     * Meta information extracted from the WSDL
     * - base: string
     * - content: opbygning
     * - definition: urn:oio:sagdok:opbygning:BDD:1.0.0
     * - maxLength: 1024
     * - minOccurs: 0
     * - ref: sd:OpbygningTekst
     * @var string|null
     */
    protected ?string $OpbygningTekst = null;
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
     * The PlanIdentifikator
     * Meta information extracted from the WSDL
     * - base: string
     * - content: plan
     * - definition: urn:oio:sagdok:plan:BDD:1.0.0
     * - minOccurs: 0
     * - pattern: (100)|[1-9]\d?
     * - ref: sd:PlanIdentifikator
     * @var string|null
     */
    protected ?string $PlanIdentifikator = null;
    /**
     * The SupplementTekst
     * Meta information extracted from the WSDL
     * - base: string
     * - content: supplement
     * - definition: urn:oio:sagdok:supplement:BDD:1.0.0
     * - maxLength: 1024
     * - minOccurs: 0
     * - ref: sd:SupplementTekst
     * @var string|null
     */
    protected ?string $SupplementTekst = null;
    /**
     * The RetskildeTekst
     * Meta information extracted from the WSDL
     * - base: string
     * - content: retskilde
     * - definition: urn:oio:sagdok:retskilde:BDD:1.0.0
     * - maxLength: 4096
     * - minOccurs: 0
     * - ref: sd:RetskildeTekst
     * @var string|null
     */
    protected ?string $RetskildeTekst = null;
    /**
     * Constructor method for EgenskabType
     * @uses EgenskabType::setVirkning()
     * @uses EgenskabType::setBrugervendtNoegleTekst()
     * @uses EgenskabType::setTitelTekst()
     * @uses EgenskabType::setBeskrivelseTekst()
     * @uses EgenskabType::setOpbygningTekst()
     * @uses EgenskabType::setOphavsretTekst()
     * @uses EgenskabType::setPlanIdentifikator()
     * @uses EgenskabType::setSupplementTekst()
     * @uses EgenskabType::setRetskildeTekst()
     * @param \ItkDev\Serviceplatformen\SF1500\Facet\StructType\VirkningType $virkning
     * @param string $brugervendtNoegleTekst
     * @param string $titelTekst
     * @param string $beskrivelseTekst
     * @param string $opbygningTekst
     * @param string $ophavsretTekst
     * @param string $planIdentifikator
     * @param string $supplementTekst
     * @param string $retskildeTekst
     */
    public function __construct(?\ItkDev\Serviceplatformen\SF1500\Facet\StructType\VirkningType $virkning = null, ?string $brugervendtNoegleTekst = null, ?string $titelTekst = null, ?string $beskrivelseTekst = null, ?string $opbygningTekst = null, ?string $ophavsretTekst = null, ?string $planIdentifikator = null, ?string $supplementTekst = null, ?string $retskildeTekst = null)
    {
        $this
            ->setVirkning($virkning)
            ->setBrugervendtNoegleTekst($brugervendtNoegleTekst)
            ->setTitelTekst($titelTekst)
            ->setBeskrivelseTekst($beskrivelseTekst)
            ->setOpbygningTekst($opbygningTekst)
            ->setOphavsretTekst($ophavsretTekst)
            ->setPlanIdentifikator($planIdentifikator)
            ->setSupplementTekst($supplementTekst)
            ->setRetskildeTekst($retskildeTekst);
    }
    /**
     * Get Virkning value
     * @return \ItkDev\Serviceplatformen\SF1500\Facet\StructType\VirkningType|null
     */
    public function getVirkning(): ?\ItkDev\Serviceplatformen\SF1500\Facet\StructType\VirkningType
    {
        return $this->Virkning;
    }
    /**
     * Set Virkning value
     * @param \ItkDev\Serviceplatformen\SF1500\Facet\StructType\VirkningType $virkning
     * @return \ItkDev\Serviceplatformen\SF1500\Facet\StructType\EgenskabType
     */
    public function setVirkning(?\ItkDev\Serviceplatformen\SF1500\Facet\StructType\VirkningType $virkning = null): self
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
     * @return \ItkDev\Serviceplatformen\SF1500\Facet\StructType\EgenskabType
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
     * @return \ItkDev\Serviceplatformen\SF1500\Facet\StructType\EgenskabType
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
     * @return \ItkDev\Serviceplatformen\SF1500\Facet\StructType\EgenskabType
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
     * Get OpbygningTekst value
     * @return string|null
     */
    public function getOpbygningTekst(): ?string
    {
        return $this->OpbygningTekst;
    }
    /**
     * Set OpbygningTekst value
     * @param string $opbygningTekst
     * @return \ItkDev\Serviceplatformen\SF1500\Facet\StructType\EgenskabType
     */
    public function setOpbygningTekst(?string $opbygningTekst = null): self
    {
        // validation for constraint: string
        if (!is_null($opbygningTekst) && !is_string($opbygningTekst)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($opbygningTekst, true), gettype($opbygningTekst)), __LINE__);
        }
        // validation for constraint: maxLength(1024)
        if (!is_null($opbygningTekst) && mb_strlen((string) $opbygningTekst) > 1024) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 1024', mb_strlen((string) $opbygningTekst)), __LINE__);
        }
        $this->OpbygningTekst = $opbygningTekst;
        
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
     * @return \ItkDev\Serviceplatformen\SF1500\Facet\StructType\EgenskabType
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
    /**
     * Get PlanIdentifikator value
     * @return string|null
     */
    public function getPlanIdentifikator(): ?string
    {
        return $this->PlanIdentifikator;
    }
    /**
     * Set PlanIdentifikator value
     * @param string $planIdentifikator
     * @return \ItkDev\Serviceplatformen\SF1500\Facet\StructType\EgenskabType
     */
    public function setPlanIdentifikator(?string $planIdentifikator = null): self
    {
        // validation for constraint: string
        if (!is_null($planIdentifikator) && !is_string($planIdentifikator)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($planIdentifikator, true), gettype($planIdentifikator)), __LINE__);
        }
        // validation for constraint: pattern((100)|[1-9]\d?)
        if (!is_null($planIdentifikator) && !preg_match('/(100)|[1-9]\\d?/', $planIdentifikator)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /(100)|[1-9]\\d?/', var_export($planIdentifikator, true)), __LINE__);
        }
        $this->PlanIdentifikator = $planIdentifikator;
        
        return $this;
    }
    /**
     * Get SupplementTekst value
     * @return string|null
     */
    public function getSupplementTekst(): ?string
    {
        return $this->SupplementTekst;
    }
    /**
     * Set SupplementTekst value
     * @param string $supplementTekst
     * @return \ItkDev\Serviceplatformen\SF1500\Facet\StructType\EgenskabType
     */
    public function setSupplementTekst(?string $supplementTekst = null): self
    {
        // validation for constraint: string
        if (!is_null($supplementTekst) && !is_string($supplementTekst)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($supplementTekst, true), gettype($supplementTekst)), __LINE__);
        }
        // validation for constraint: maxLength(1024)
        if (!is_null($supplementTekst) && mb_strlen((string) $supplementTekst) > 1024) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 1024', mb_strlen((string) $supplementTekst)), __LINE__);
        }
        $this->SupplementTekst = $supplementTekst;
        
        return $this;
    }
    /**
     * Get RetskildeTekst value
     * @return string|null
     */
    public function getRetskildeTekst(): ?string
    {
        return $this->RetskildeTekst;
    }
    /**
     * Set RetskildeTekst value
     * @param string $retskildeTekst
     * @return \ItkDev\Serviceplatformen\SF1500\Facet\StructType\EgenskabType
     */
    public function setRetskildeTekst(?string $retskildeTekst = null): self
    {
        // validation for constraint: string
        if (!is_null($retskildeTekst) && !is_string($retskildeTekst)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($retskildeTekst, true), gettype($retskildeTekst)), __LINE__);
        }
        // validation for constraint: maxLength(4096)
        if (!is_null($retskildeTekst) && mb_strlen((string) $retskildeTekst) > 4096) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 4096', mb_strlen((string) $retskildeTekst)), __LINE__);
        }
        $this->RetskildeTekst = $retskildeTekst;
        
        return $this;
    }
}
