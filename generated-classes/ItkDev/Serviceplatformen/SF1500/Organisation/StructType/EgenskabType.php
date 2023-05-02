<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF1500\Organisation\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EgenskabType StructType
 * Meta information extracted from the WSDL
 * - definition: urn:oio:sagdok:organisationegenskaber:ADD:2.0.0
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
     * @var \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\VirkningType|null
     */
    protected ?\ItkDev\Serviceplatformen\SF1500\Organisation\StructType\VirkningType $Virkning = null;
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
     * The OrganisationNavn
     * Meta information extracted from the WSDL
     * - base: string
     * - content: organisationsnavn
     * - definition: urn:oio:sagdok:organisationsnavn:BDD:1.0.0
     * - maxLength: 200
     * - minOccurs: 0
     * - ref: sd:OrganisationNavn
     * @var string|null
     */
    protected ?string $OrganisationNavn = null;
    /**
     * Constructor method for EgenskabType
     * @uses EgenskabType::setVirkning()
     * @uses EgenskabType::setBrugervendtNoegleTekst()
     * @uses EgenskabType::setOrganisationNavn()
     * @param \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\VirkningType $virkning
     * @param string $brugervendtNoegleTekst
     * @param string $organisationNavn
     */
    public function __construct(?\ItkDev\Serviceplatformen\SF1500\Organisation\StructType\VirkningType $virkning = null, ?string $brugervendtNoegleTekst = null, ?string $organisationNavn = null)
    {
        $this
            ->setVirkning($virkning)
            ->setBrugervendtNoegleTekst($brugervendtNoegleTekst)
            ->setOrganisationNavn($organisationNavn);
    }
    /**
     * Get Virkning value
     * @return \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\VirkningType|null
     */
    public function getVirkning(): ?\ItkDev\Serviceplatformen\SF1500\Organisation\StructType\VirkningType
    {
        return $this->Virkning;
    }
    /**
     * Set Virkning value
     * @param \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\VirkningType $virkning
     * @return \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\EgenskabType
     */
    public function setVirkning(?\ItkDev\Serviceplatformen\SF1500\Organisation\StructType\VirkningType $virkning = null): self
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
     * @return \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\EgenskabType
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
     * Get OrganisationNavn value
     * @return string|null
     */
    public function getOrganisationNavn(): ?string
    {
        return $this->OrganisationNavn;
    }
    /**
     * Set OrganisationNavn value
     * @param string $organisationNavn
     * @return \ItkDev\Serviceplatformen\SF1500\Organisation\StructType\EgenskabType
     */
    public function setOrganisationNavn(?string $organisationNavn = null): self
    {
        // validation for constraint: string
        if (!is_null($organisationNavn) && !is_string($organisationNavn)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($organisationNavn, true), gettype($organisationNavn)), __LINE__);
        }
        // validation for constraint: maxLength(200)
        if (!is_null($organisationNavn) && mb_strlen((string) $organisationNavn) > 200) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 200', mb_strlen((string) $organisationNavn)), __LINE__);
        }
        $this->OrganisationNavn = $organisationNavn;
        
        return $this;
    }
}
