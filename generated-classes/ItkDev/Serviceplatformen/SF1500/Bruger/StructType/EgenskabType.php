<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF1500\Bruger\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EgenskabType StructType
 * Meta information extracted from the WSDL
 * - definition: urn:oio:sagdok:brugeregenskaber:ADD:1.0.0
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
     * @var \ItkDev\Serviceplatformen\SF1500\Bruger\StructType\VirkningType|null
     */
    protected ?\ItkDev\Serviceplatformen\SF1500\Bruger\StructType\VirkningType $Virkning = null;
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
     * The BrugerNavn
     * Meta information extracted from the WSDL
     * - base: string
     * - content: brugernavn
     * - definition: urn:oio:sagdok:brugernavn:BDD:1.0.0
     * - maxLength: 200
     * - minOccurs: 0
     * - ref: sd:BrugerNavn
     * @var string|null
     */
    protected ?string $BrugerNavn = null;
    /**
     * The BrugerTypeTekst
     * Meta information extracted from the WSDL
     * - base: string
     * - content: brugertype
     * - definition: urn:oio:sagdok:brugertype:BDD:1.0.0
     * - maxLength: 50
     * - minOccurs: 0
     * - ref: sd:BrugerTypeTekst
     * @var string|null
     */
    protected ?string $BrugerTypeTekst = null;
    /**
     * Constructor method for EgenskabType
     * @uses EgenskabType::setVirkning()
     * @uses EgenskabType::setBrugervendtNoegleTekst()
     * @uses EgenskabType::setBrugerNavn()
     * @uses EgenskabType::setBrugerTypeTekst()
     * @param \ItkDev\Serviceplatformen\SF1500\Bruger\StructType\VirkningType $virkning
     * @param string $brugervendtNoegleTekst
     * @param string $brugerNavn
     * @param string $brugerTypeTekst
     */
    public function __construct(?\ItkDev\Serviceplatformen\SF1500\Bruger\StructType\VirkningType $virkning = null, ?string $brugervendtNoegleTekst = null, ?string $brugerNavn = null, ?string $brugerTypeTekst = null)
    {
        $this
            ->setVirkning($virkning)
            ->setBrugervendtNoegleTekst($brugervendtNoegleTekst)
            ->setBrugerNavn($brugerNavn)
            ->setBrugerTypeTekst($brugerTypeTekst);
    }
    /**
     * Get Virkning value
     * @return \ItkDev\Serviceplatformen\SF1500\Bruger\StructType\VirkningType|null
     */
    public function getVirkning(): ?\ItkDev\Serviceplatformen\SF1500\Bruger\StructType\VirkningType
    {
        return $this->Virkning;
    }
    /**
     * Set Virkning value
     * @param \ItkDev\Serviceplatformen\SF1500\Bruger\StructType\VirkningType $virkning
     * @return \ItkDev\Serviceplatformen\SF1500\Bruger\StructType\EgenskabType
     */
    public function setVirkning(?\ItkDev\Serviceplatformen\SF1500\Bruger\StructType\VirkningType $virkning = null): self
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
     * @return \ItkDev\Serviceplatformen\SF1500\Bruger\StructType\EgenskabType
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
     * @return \ItkDev\Serviceplatformen\SF1500\Bruger\StructType\EgenskabType
     */
    public function setBrugerNavn(?string $brugerNavn = null): self
    {
        // validation for constraint: string
        if (!is_null($brugerNavn) && !is_string($brugerNavn)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($brugerNavn, true), gettype($brugerNavn)), __LINE__);
        }
        // validation for constraint: maxLength(200)
        if (!is_null($brugerNavn) && mb_strlen((string) $brugerNavn) > 200) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 200', mb_strlen((string) $brugerNavn)), __LINE__);
        }
        $this->BrugerNavn = $brugerNavn;
        
        return $this;
    }
    /**
     * Get BrugerTypeTekst value
     * @return string|null
     */
    public function getBrugerTypeTekst(): ?string
    {
        return $this->BrugerTypeTekst;
    }
    /**
     * Set BrugerTypeTekst value
     * @param string $brugerTypeTekst
     * @return \ItkDev\Serviceplatformen\SF1500\Bruger\StructType\EgenskabType
     */
    public function setBrugerTypeTekst(?string $brugerTypeTekst = null): self
    {
        // validation for constraint: string
        if (!is_null($brugerTypeTekst) && !is_string($brugerTypeTekst)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($brugerTypeTekst, true), gettype($brugerTypeTekst)), __LINE__);
        }
        // validation for constraint: maxLength(50)
        if (!is_null($brugerTypeTekst) && mb_strlen((string) $brugerTypeTekst) > 50) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 50', mb_strlen((string) $brugerTypeTekst)), __LINE__);
        }
        $this->BrugerTypeTekst = $brugerTypeTekst;
        
        return $this;
    }
}
