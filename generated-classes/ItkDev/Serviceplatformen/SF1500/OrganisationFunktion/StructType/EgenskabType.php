<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF1500\OrganisationFunktion\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EgenskabType StructType
 * Meta information extracted from the WSDL
 * - definition: urn:oio:sagdok:organisationfunktionegenskaber:ADD:1.0.0
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
     * @var \ItkDev\Serviceplatformen\SF1500\OrganisationFunktion\StructType\VirkningType|null
     */
    protected ?\ItkDev\Serviceplatformen\SF1500\OrganisationFunktion\StructType\VirkningType $Virkning = null;
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
     * The FunktionNavn
     * Meta information extracted from the WSDL
     * - base: string
     * - content: organisationfunktionsnavn
     * - definition: urn:oio:sagdok:organisationfunktionsnavn:BDD:1.0.0
     * - maxLength: 200
     * - minOccurs: 0
     * - ref: sd:FunktionNavn
     * @var string|null
     */
    protected ?string $FunktionNavn = null;
    /**
     * Constructor method for EgenskabType
     * @uses EgenskabType::setVirkning()
     * @uses EgenskabType::setBrugervendtNoegleTekst()
     * @uses EgenskabType::setFunktionNavn()
     * @param \ItkDev\Serviceplatformen\SF1500\OrganisationFunktion\StructType\VirkningType $virkning
     * @param string $brugervendtNoegleTekst
     * @param string $funktionNavn
     */
    public function __construct(?\ItkDev\Serviceplatformen\SF1500\OrganisationFunktion\StructType\VirkningType $virkning = null, ?string $brugervendtNoegleTekst = null, ?string $funktionNavn = null)
    {
        $this
            ->setVirkning($virkning)
            ->setBrugervendtNoegleTekst($brugervendtNoegleTekst)
            ->setFunktionNavn($funktionNavn);
    }
    /**
     * Get Virkning value
     * @return \ItkDev\Serviceplatformen\SF1500\OrganisationFunktion\StructType\VirkningType|null
     */
    public function getVirkning(): ?\ItkDev\Serviceplatformen\SF1500\OrganisationFunktion\StructType\VirkningType
    {
        return $this->Virkning;
    }
    /**
     * Set Virkning value
     * @param \ItkDev\Serviceplatformen\SF1500\OrganisationFunktion\StructType\VirkningType $virkning
     * @return \ItkDev\Serviceplatformen\SF1500\OrganisationFunktion\StructType\EgenskabType
     */
    public function setVirkning(?\ItkDev\Serviceplatformen\SF1500\OrganisationFunktion\StructType\VirkningType $virkning = null): self
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
     * @return \ItkDev\Serviceplatformen\SF1500\OrganisationFunktion\StructType\EgenskabType
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
     * Get FunktionNavn value
     * @return string|null
     */
    public function getFunktionNavn(): ?string
    {
        return $this->FunktionNavn;
    }
    /**
     * Set FunktionNavn value
     * @param string $funktionNavn
     * @return \ItkDev\Serviceplatformen\SF1500\OrganisationFunktion\StructType\EgenskabType
     */
    public function setFunktionNavn(?string $funktionNavn = null): self
    {
        // validation for constraint: string
        if (!is_null($funktionNavn) && !is_string($funktionNavn)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($funktionNavn, true), gettype($funktionNavn)), __LINE__);
        }
        // validation for constraint: maxLength(200)
        if (!is_null($funktionNavn) && mb_strlen((string) $funktionNavn) > 200) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 200', mb_strlen((string) $funktionNavn)), __LINE__);
        }
        $this->FunktionNavn = $funktionNavn;
        
        return $this;
    }
}
