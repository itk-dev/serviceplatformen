<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF1500\Adresse\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EgenskabType StructType
 * Meta information extracted from the WSDL
 * - definition: urn:oio:sagdok:adresseegenskaber:ADD:1.0.0
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
     * @var \ItkDev\Serviceplatformen\SF1500\Adresse\StructType\VirkningType|null
     */
    protected ?\ItkDev\Serviceplatformen\SF1500\Adresse\StructType\VirkningType $Virkning = null;
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
     * The AdresseTekst
     * Meta information extracted from the WSDL
     * - base: string
     * - content: adresse
     * - definition: urn:oio:sts:email:BDD:6
     * - maxLength: 200
     * - minOccurs: 0
     * - ref: sts:AdresseTekst
     * @var string|null
     */
    protected ?string $AdresseTekst = null;
    /**
     * Constructor method for EgenskabType
     * @uses EgenskabType::setVirkning()
     * @uses EgenskabType::setBrugervendtNoegleTekst()
     * @uses EgenskabType::setAdresseTekst()
     * @param \ItkDev\Serviceplatformen\SF1500\Adresse\StructType\VirkningType $virkning
     * @param string $brugervendtNoegleTekst
     * @param string $adresseTekst
     */
    public function __construct(?\ItkDev\Serviceplatformen\SF1500\Adresse\StructType\VirkningType $virkning = null, ?string $brugervendtNoegleTekst = null, ?string $adresseTekst = null)
    {
        $this
            ->setVirkning($virkning)
            ->setBrugervendtNoegleTekst($brugervendtNoegleTekst)
            ->setAdresseTekst($adresseTekst);
    }
    /**
     * Get Virkning value
     * @return \ItkDev\Serviceplatformen\SF1500\Adresse\StructType\VirkningType|null
     */
    public function getVirkning(): ?\ItkDev\Serviceplatformen\SF1500\Adresse\StructType\VirkningType
    {
        return $this->Virkning;
    }
    /**
     * Set Virkning value
     * @param \ItkDev\Serviceplatformen\SF1500\Adresse\StructType\VirkningType $virkning
     * @return \ItkDev\Serviceplatformen\SF1500\Adresse\StructType\EgenskabType
     */
    public function setVirkning(?\ItkDev\Serviceplatformen\SF1500\Adresse\StructType\VirkningType $virkning = null): self
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
     * @return \ItkDev\Serviceplatformen\SF1500\Adresse\StructType\EgenskabType
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
     * Get AdresseTekst value
     * @return string|null
     */
    public function getAdresseTekst(): ?string
    {
        return $this->AdresseTekst;
    }
    /**
     * Set AdresseTekst value
     * @param string $adresseTekst
     * @return \ItkDev\Serviceplatformen\SF1500\Adresse\StructType\EgenskabType
     */
    public function setAdresseTekst(?string $adresseTekst = null): self
    {
        // validation for constraint: string
        if (!is_null($adresseTekst) && !is_string($adresseTekst)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($adresseTekst, true), gettype($adresseTekst)), __LINE__);
        }
        // validation for constraint: maxLength(200)
        if (!is_null($adresseTekst) && mb_strlen((string) $adresseTekst) > 200) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 200', mb_strlen((string) $adresseTekst)), __LINE__);
        }
        $this->AdresseTekst = $adresseTekst;
        
        return $this;
    }
}
