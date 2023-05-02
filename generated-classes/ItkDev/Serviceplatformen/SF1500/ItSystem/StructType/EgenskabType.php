<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF1500\ItSystem\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EgenskabType StructType
 * Meta information extracted from the WSDL
 * - definition: urn:oio:sagdok:itsystemegenskaber:ADD:1.0.0
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
     * @var \ItkDev\Serviceplatformen\SF1500\ItSystem\StructType\VirkningType|null
     */
    protected ?\ItkDev\Serviceplatformen\SF1500\ItSystem\StructType\VirkningType $Virkning = null;
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
     * The ItSystemNavn
     * Meta information extracted from the WSDL
     * - base: string
     * - content: itsystemnavn
     * - definition: urn:oio:sagdok:itsystemnavn:BDD:1.0.0
     * - maxLength: 200
     * - minOccurs: 0
     * - ref: sd:ItSystemNavn
     * @var string|null
     */
    protected ?string $ItSystemNavn = null;
    /**
     * The ItSystemTypeTekst
     * Meta information extracted from the WSDL
     * - base: string
     * - content: itsystemtype
     * - definition: urn:oio:sagdok:itsystemtype:BDD:1.0.0
     * - maxLength: 50
     * - minOccurs: 0
     * - ref: sd:ItSystemTypeTekst
     * @var string|null
     */
    protected ?string $ItSystemTypeTekst = null;
    /**
     * The KonfigurationReference
     * Meta information extracted from the WSDL
     * - base: string
     * - content: konfigurationselementer
     * - definition: urn:oio:sagdok:konfigurationselementer:BDD:1.0.0
     * - maxLength: 1024
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: sd:KonfigurationReference
     * @var string[]
     */
    protected ?array $KonfigurationReference = null;
    /**
     * Constructor method for EgenskabType
     * @uses EgenskabType::setVirkning()
     * @uses EgenskabType::setBrugervendtNoegleTekst()
     * @uses EgenskabType::setItSystemNavn()
     * @uses EgenskabType::setItSystemTypeTekst()
     * @uses EgenskabType::setKonfigurationReference()
     * @param \ItkDev\Serviceplatformen\SF1500\ItSystem\StructType\VirkningType $virkning
     * @param string $brugervendtNoegleTekst
     * @param string $itSystemNavn
     * @param string $itSystemTypeTekst
     * @param string[] $konfigurationReference
     */
    public function __construct(?\ItkDev\Serviceplatformen\SF1500\ItSystem\StructType\VirkningType $virkning = null, ?string $brugervendtNoegleTekst = null, ?string $itSystemNavn = null, ?string $itSystemTypeTekst = null, ?array $konfigurationReference = null)
    {
        $this
            ->setVirkning($virkning)
            ->setBrugervendtNoegleTekst($brugervendtNoegleTekst)
            ->setItSystemNavn($itSystemNavn)
            ->setItSystemTypeTekst($itSystemTypeTekst)
            ->setKonfigurationReference($konfigurationReference);
    }
    /**
     * Get Virkning value
     * @return \ItkDev\Serviceplatformen\SF1500\ItSystem\StructType\VirkningType|null
     */
    public function getVirkning(): ?\ItkDev\Serviceplatformen\SF1500\ItSystem\StructType\VirkningType
    {
        return $this->Virkning;
    }
    /**
     * Set Virkning value
     * @param \ItkDev\Serviceplatformen\SF1500\ItSystem\StructType\VirkningType $virkning
     * @return \ItkDev\Serviceplatformen\SF1500\ItSystem\StructType\EgenskabType
     */
    public function setVirkning(?\ItkDev\Serviceplatformen\SF1500\ItSystem\StructType\VirkningType $virkning = null): self
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
     * @return \ItkDev\Serviceplatformen\SF1500\ItSystem\StructType\EgenskabType
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
     * Get ItSystemNavn value
     * @return string|null
     */
    public function getItSystemNavn(): ?string
    {
        return $this->ItSystemNavn;
    }
    /**
     * Set ItSystemNavn value
     * @param string $itSystemNavn
     * @return \ItkDev\Serviceplatformen\SF1500\ItSystem\StructType\EgenskabType
     */
    public function setItSystemNavn(?string $itSystemNavn = null): self
    {
        // validation for constraint: string
        if (!is_null($itSystemNavn) && !is_string($itSystemNavn)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($itSystemNavn, true), gettype($itSystemNavn)), __LINE__);
        }
        // validation for constraint: maxLength(200)
        if (!is_null($itSystemNavn) && mb_strlen((string) $itSystemNavn) > 200) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 200', mb_strlen((string) $itSystemNavn)), __LINE__);
        }
        $this->ItSystemNavn = $itSystemNavn;
        
        return $this;
    }
    /**
     * Get ItSystemTypeTekst value
     * @return string|null
     */
    public function getItSystemTypeTekst(): ?string
    {
        return $this->ItSystemTypeTekst;
    }
    /**
     * Set ItSystemTypeTekst value
     * @param string $itSystemTypeTekst
     * @return \ItkDev\Serviceplatformen\SF1500\ItSystem\StructType\EgenskabType
     */
    public function setItSystemTypeTekst(?string $itSystemTypeTekst = null): self
    {
        // validation for constraint: string
        if (!is_null($itSystemTypeTekst) && !is_string($itSystemTypeTekst)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($itSystemTypeTekst, true), gettype($itSystemTypeTekst)), __LINE__);
        }
        // validation for constraint: maxLength(50)
        if (!is_null($itSystemTypeTekst) && mb_strlen((string) $itSystemTypeTekst) > 50) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 50', mb_strlen((string) $itSystemTypeTekst)), __LINE__);
        }
        $this->ItSystemTypeTekst = $itSystemTypeTekst;
        
        return $this;
    }
    /**
     * Get KonfigurationReference value
     * @return string[]
     */
    public function getKonfigurationReference(): ?array
    {
        return $this->KonfigurationReference;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setKonfigurationReference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setKonfigurationReference method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateKonfigurationReferenceForArrayConstraintFromSetKonfigurationReference(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $egenskabTypeKonfigurationReferenceItem) {
            // validation for constraint: itemType
            if (!is_string($egenskabTypeKonfigurationReferenceItem)) {
                $invalidValues[] = is_object($egenskabTypeKonfigurationReferenceItem) ? get_class($egenskabTypeKonfigurationReferenceItem) : sprintf('%s(%s)', gettype($egenskabTypeKonfigurationReferenceItem), var_export($egenskabTypeKonfigurationReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The KonfigurationReference property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setKonfigurationReference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setKonfigurationReference method
     * This has to validate that the items contained by the array match the length constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateKonfigurationReferenceForMaxLengthConstraintFromSetKonfigurationReference(?array $values = null): string
    {
        $message = '';
        $invalidValues = [];
        foreach (($values ?? []) as $egenskabTypeKonfigurationReferenceItem) {
            // validation for constraint: maxLength(1024)
            if (mb_strlen((string) $egenskabTypeKonfigurationReferenceItem) > 1024) {
                $invalidValues[] = var_export($egenskabTypeKonfigurationReferenceItem, true);
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid length for value(s) %s, the number of characters/octets contained by the literal must be less than or equal to 1024', implode(', ', $invalidValues));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set KonfigurationReference value
     * @throws InvalidArgumentException
     * @param string[] $konfigurationReference
     * @return \ItkDev\Serviceplatformen\SF1500\ItSystem\StructType\EgenskabType
     */
    public function setKonfigurationReference(?array $konfigurationReference = null): self
    {
        // validation for constraint: array
        if ('' !== ($konfigurationReferenceArrayErrorMessage = self::validateKonfigurationReferenceForArrayConstraintFromSetKonfigurationReference($konfigurationReference))) {
            throw new InvalidArgumentException($konfigurationReferenceArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxLength(1024)
        if ('' !== ($konfigurationReferenceMaxLengthErrorMessage = self::validateKonfigurationReferenceForMaxLengthConstraintFromSetKonfigurationReference($konfigurationReference))) {
            throw new InvalidArgumentException($konfigurationReferenceMaxLengthErrorMessage, __LINE__);
        }
        $this->KonfigurationReference = $konfigurationReference;
        
        return $this;
    }
    /**
     * Add item to KonfigurationReference value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \ItkDev\Serviceplatformen\SF1500\ItSystem\StructType\EgenskabType
     */
    public function addToKonfigurationReference(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The KonfigurationReference property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxLength(1024)
        if (mb_strlen((string) $item) > 1024) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 1024', mb_strlen((string) $item)), __LINE__);
        }
        $this->KonfigurationReference[] = $item;
        
        return $this;
    }
}
