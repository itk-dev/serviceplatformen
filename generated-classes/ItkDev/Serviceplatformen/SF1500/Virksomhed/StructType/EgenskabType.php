<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF1500\Virksomhed\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EgenskabType StructType
 * Meta information extracted from the WSDL
 * - definition: urn:oio:sagdok:virksomhedegenskaber:ADD:1.0.0
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
     * @var \ItkDev\Serviceplatformen\SF1500\Virksomhed\StructType\VirkningType|null
     */
    protected ?\ItkDev\Serviceplatformen\SF1500\Virksomhed\StructType\VirkningType $Virkning = null;
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
     * The CVR_NummerTekst
     * Meta information extracted from the WSDL
     * - base: string
     * - content: cvr-nummer
     * - definition: urn:oio:sts:cvrnummer:BDD:6
     * - minOccurs: 0
     * - pattern: [0-9]{8}
     * - ref: sts:CVR-NummerTekst
     * @var string|null
     */
    protected ?string $CVR_NummerTekst = null;
    /**
     * The SE_NummerTekst
     * Meta information extracted from the WSDL
     * - base: string
     * - content: se-nummer
     * - definition: urn:oio:sts:senummer:BDD:6
     * - minOccurs: 0
     * - pattern: [0-9]{8}
     * - ref: sts:SE-NummerTekst
     * @var string|null
     */
    protected ?string $SE_NummerTekst = null;
    /**
     * The P_NummerTekst
     * Meta information extracted from the WSDL
     * - base: string
     * - content: p-nummer
     * - definition: urn:oio:sts:pnummer:BDD:6
     * - minOccurs: 0
     * - pattern: [0-9]{10}
     * - ref: sts:P-NummerTekst
     * @var string|null
     */
    protected ?string $P_NummerTekst = null;
    /**
     * The NavnTekst
     * Meta information extracted from the WSDL
     * - base: string
     * - content: navn
     * - definition: urn:oio:sts:navn:BDD:6
     * - maxLength: 200
     * - minOccurs: 0
     * - ref: sts:NavnTekst
     * @var string|null
     */
    protected ?string $NavnTekst = null;
    /**
     * Constructor method for EgenskabType
     * @uses EgenskabType::setVirkning()
     * @uses EgenskabType::setBrugervendtNoegleTekst()
     * @uses EgenskabType::setCVR_NummerTekst()
     * @uses EgenskabType::setSE_NummerTekst()
     * @uses EgenskabType::setP_NummerTekst()
     * @uses EgenskabType::setNavnTekst()
     * @param \ItkDev\Serviceplatformen\SF1500\Virksomhed\StructType\VirkningType $virkning
     * @param string $brugervendtNoegleTekst
     * @param string $cVR_NummerTekst
     * @param string $sE_NummerTekst
     * @param string $p_NummerTekst
     * @param string $navnTekst
     */
    public function __construct(?\ItkDev\Serviceplatformen\SF1500\Virksomhed\StructType\VirkningType $virkning = null, ?string $brugervendtNoegleTekst = null, ?string $cVR_NummerTekst = null, ?string $sE_NummerTekst = null, ?string $p_NummerTekst = null, ?string $navnTekst = null)
    {
        $this
            ->setVirkning($virkning)
            ->setBrugervendtNoegleTekst($brugervendtNoegleTekst)
            ->setCVR_NummerTekst($cVR_NummerTekst)
            ->setSE_NummerTekst($sE_NummerTekst)
            ->setP_NummerTekst($p_NummerTekst)
            ->setNavnTekst($navnTekst);
    }
    /**
     * Get Virkning value
     * @return \ItkDev\Serviceplatformen\SF1500\Virksomhed\StructType\VirkningType|null
     */
    public function getVirkning(): ?\ItkDev\Serviceplatformen\SF1500\Virksomhed\StructType\VirkningType
    {
        return $this->Virkning;
    }
    /**
     * Set Virkning value
     * @param \ItkDev\Serviceplatformen\SF1500\Virksomhed\StructType\VirkningType $virkning
     * @return \ItkDev\Serviceplatformen\SF1500\Virksomhed\StructType\EgenskabType
     */
    public function setVirkning(?\ItkDev\Serviceplatformen\SF1500\Virksomhed\StructType\VirkningType $virkning = null): self
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
     * @return \ItkDev\Serviceplatformen\SF1500\Virksomhed\StructType\EgenskabType
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
     * Get CVR_NummerTekst value
     * @return string|null
     */
    public function getCVR_NummerTekst(): ?string
    {
        return $this->{'CVR-NummerTekst'};
    }
    /**
     * Set CVR_NummerTekst value
     * @param string $cVR_NummerTekst
     * @return \ItkDev\Serviceplatformen\SF1500\Virksomhed\StructType\EgenskabType
     */
    public function setCVR_NummerTekst(?string $cVR_NummerTekst = null): self
    {
        // validation for constraint: string
        if (!is_null($cVR_NummerTekst) && !is_string($cVR_NummerTekst)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cVR_NummerTekst, true), gettype($cVR_NummerTekst)), __LINE__);
        }
        // validation for constraint: pattern([0-9]{8})
        if (!is_null($cVR_NummerTekst) && !preg_match('/[0-9]{8}/', $cVR_NummerTekst)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[0-9]{8}/', var_export($cVR_NummerTekst, true)), __LINE__);
        }
        $this->CVR_NummerTekst = $this->{'CVR-NummerTekst'} = $cVR_NummerTekst;
        
        return $this;
    }
    /**
     * Get SE_NummerTekst value
     * @return string|null
     */
    public function getSE_NummerTekst(): ?string
    {
        return $this->{'SE-NummerTekst'};
    }
    /**
     * Set SE_NummerTekst value
     * @param string $sE_NummerTekst
     * @return \ItkDev\Serviceplatformen\SF1500\Virksomhed\StructType\EgenskabType
     */
    public function setSE_NummerTekst(?string $sE_NummerTekst = null): self
    {
        // validation for constraint: string
        if (!is_null($sE_NummerTekst) && !is_string($sE_NummerTekst)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sE_NummerTekst, true), gettype($sE_NummerTekst)), __LINE__);
        }
        // validation for constraint: pattern([0-9]{8})
        if (!is_null($sE_NummerTekst) && !preg_match('/[0-9]{8}/', $sE_NummerTekst)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[0-9]{8}/', var_export($sE_NummerTekst, true)), __LINE__);
        }
        $this->SE_NummerTekst = $this->{'SE-NummerTekst'} = $sE_NummerTekst;
        
        return $this;
    }
    /**
     * Get P_NummerTekst value
     * @return string|null
     */
    public function getP_NummerTekst(): ?string
    {
        return $this->{'P-NummerTekst'};
    }
    /**
     * Set P_NummerTekst value
     * @param string $p_NummerTekst
     * @return \ItkDev\Serviceplatformen\SF1500\Virksomhed\StructType\EgenskabType
     */
    public function setP_NummerTekst(?string $p_NummerTekst = null): self
    {
        // validation for constraint: string
        if (!is_null($p_NummerTekst) && !is_string($p_NummerTekst)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($p_NummerTekst, true), gettype($p_NummerTekst)), __LINE__);
        }
        // validation for constraint: pattern([0-9]{10})
        if (!is_null($p_NummerTekst) && !preg_match('/[0-9]{10}/', $p_NummerTekst)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[0-9]{10}/', var_export($p_NummerTekst, true)), __LINE__);
        }
        $this->P_NummerTekst = $this->{'P-NummerTekst'} = $p_NummerTekst;
        
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
     * @return \ItkDev\Serviceplatformen\SF1500\Virksomhed\StructType\EgenskabType
     */
    public function setNavnTekst(?string $navnTekst = null): self
    {
        // validation for constraint: string
        if (!is_null($navnTekst) && !is_string($navnTekst)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($navnTekst, true), gettype($navnTekst)), __LINE__);
        }
        // validation for constraint: maxLength(200)
        if (!is_null($navnTekst) && mb_strlen((string) $navnTekst) > 200) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 200', mb_strlen((string) $navnTekst)), __LINE__);
        }
        $this->NavnTekst = $navnTekst;
        
        return $this;
    }
}
