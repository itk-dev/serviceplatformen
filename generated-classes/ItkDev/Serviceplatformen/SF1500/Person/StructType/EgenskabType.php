<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF1500\Person\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EgenskabType StructType
 * Meta information extracted from the WSDL
 * - definition: urn:oio:sagdok:personegenskaber:ADD:1.0.0
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
     * @var \ItkDev\Serviceplatformen\SF1500\Person\StructType\VirkningType|null
     */
    protected ?\ItkDev\Serviceplatformen\SF1500\Person\StructType\VirkningType $Virkning = null;
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
     * The CPR_NummerTekst
     * Meta information extracted from the WSDL
     * - base: string
     * - content: cprnr
     * - definition: urn:oio:sts:cprnummer:BDD:6
     * - minOccurs: 0
     * - pattern: [0-9]{10}
     * - ref: sts:CPR-NummerTekst
     * @var string|null
     */
    protected ?string $CPR_NummerTekst = null;
    /**
     * The NavnTekst
     * Meta information extracted from the WSDL
     * - base: string
     * - content: navn
     * - maxLength: 100
     * - minOccurs: 0
     * - ref: person:NavnTekst
     * @var string|null
     */
    protected ?string $NavnTekst = null;
    /**
     * Constructor method for EgenskabType
     * @uses EgenskabType::setVirkning()
     * @uses EgenskabType::setBrugervendtNoegleTekst()
     * @uses EgenskabType::setCPR_NummerTekst()
     * @uses EgenskabType::setNavnTekst()
     * @param \ItkDev\Serviceplatformen\SF1500\Person\StructType\VirkningType $virkning
     * @param string $brugervendtNoegleTekst
     * @param string $cPR_NummerTekst
     * @param string $navnTekst
     */
    public function __construct(?\ItkDev\Serviceplatformen\SF1500\Person\StructType\VirkningType $virkning = null, ?string $brugervendtNoegleTekst = null, ?string $cPR_NummerTekst = null, ?string $navnTekst = null)
    {
        $this
            ->setVirkning($virkning)
            ->setBrugervendtNoegleTekst($brugervendtNoegleTekst)
            ->setCPR_NummerTekst($cPR_NummerTekst)
            ->setNavnTekst($navnTekst);
    }
    /**
     * Get Virkning value
     * @return \ItkDev\Serviceplatformen\SF1500\Person\StructType\VirkningType|null
     */
    public function getVirkning(): ?\ItkDev\Serviceplatformen\SF1500\Person\StructType\VirkningType
    {
        return $this->Virkning;
    }
    /**
     * Set Virkning value
     * @param \ItkDev\Serviceplatformen\SF1500\Person\StructType\VirkningType $virkning
     * @return \ItkDev\Serviceplatformen\SF1500\Person\StructType\EgenskabType
     */
    public function setVirkning(?\ItkDev\Serviceplatformen\SF1500\Person\StructType\VirkningType $virkning = null): self
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
     * @return \ItkDev\Serviceplatformen\SF1500\Person\StructType\EgenskabType
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
     * Get CPR_NummerTekst value
     * @return string|null
     */
    public function getCPR_NummerTekst(): ?string
    {
        return $this->{'CPR-NummerTekst'};
    }
    /**
     * Set CPR_NummerTekst value
     * @param string $cPR_NummerTekst
     * @return \ItkDev\Serviceplatformen\SF1500\Person\StructType\EgenskabType
     */
    public function setCPR_NummerTekst(?string $cPR_NummerTekst = null): self
    {
        // validation for constraint: string
        if (!is_null($cPR_NummerTekst) && !is_string($cPR_NummerTekst)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cPR_NummerTekst, true), gettype($cPR_NummerTekst)), __LINE__);
        }
        // validation for constraint: pattern([0-9]{10})
        if (!is_null($cPR_NummerTekst) && !preg_match('/[0-9]{10}/', $cPR_NummerTekst)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[0-9]{10}/', var_export($cPR_NummerTekst, true)), __LINE__);
        }
        $this->CPR_NummerTekst = $this->{'CPR-NummerTekst'} = $cPR_NummerTekst;
        
        return $this;
    }
    /**
     * Get NavnTekst value
     * @return string|null
     */
    public function getNavnTekst(): ?string
    {
        return $this->NavnTekst;
    }
    /**
     * Set NavnTekst value
     * @param string $navnTekst
     * @return \ItkDev\Serviceplatformen\SF1500\Person\StructType\EgenskabType
     */
    public function setNavnTekst(?string $navnTekst = null): self
    {
        // validation for constraint: string
        if (!is_null($navnTekst) && !is_string($navnTekst)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($navnTekst, true), gettype($navnTekst)), __LINE__);
        }
        // validation for constraint: maxLength(100)
        if (!is_null($navnTekst) && mb_strlen((string) $navnTekst) > 100) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 100', mb_strlen((string) $navnTekst)), __LINE__);
        }
        $this->NavnTekst = $navnTekst;
        
        return $this;
    }
}
