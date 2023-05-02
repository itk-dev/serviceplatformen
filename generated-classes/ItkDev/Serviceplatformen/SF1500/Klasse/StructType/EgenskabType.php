<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF1500\Klasse\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EgenskabType StructType
 * Meta information extracted from the WSDL
 * - definition: urn:oio:sagdok:klasseegenskaber:ADD:2.0.0
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
     * @var \ItkDev\Serviceplatformen\SF1500\Klasse\StructType\VirkningType|null
     */
    protected ?\ItkDev\Serviceplatformen\SF1500\Klasse\StructType\VirkningType $Virkning = null;
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
     * The EksempelTekst
     * Meta information extracted from the WSDL
     * - base: string
     * - content: eksempel
     * - definition: urn:oio:sagdok:klasseeksempel:BDD:1.0.0
     * - maxLength: 4096
     * - minOccurs: 0
     * - ref: sd:EksempelTekst
     * @var string|null
     */
    protected ?string $EksempelTekst = null;
    /**
     * The OmfangTekst
     * Meta information extracted from the WSDL
     * - base: string
     * - content: omfang
     * - definition: urn:oio:sagdok:klasseomfang:BDD:1.0.0
     * - maxLength: 1024
     * - minOccurs: 0
     * - ref: sd:OmfangTekst
     * @var string|null
     */
    protected ?string $OmfangTekst = null;
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
     * The AendringsnotatTekst
     * Meta information extracted from the WSDL
     * - base: string
     * - content: aendringsnotat
     * - definition: urn:oio:sagdok:aendringsnotat:BDD:1.0.0
     * - maxLength: 1024
     * - minOccurs: 0
     * - ref: sd:AendringsnotatTekst
     * @var string|null
     */
    protected ?string $AendringsnotatTekst = null;
    /**
     * The Soegeord
     * Meta information extracted from the WSDL
     * - content: soegeord
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: klasse:Soegeord
     * @var \ItkDev\Serviceplatformen\SF1500\Klasse\StructType\SoegeordType[]
     */
    protected ?array $Soegeord = null;
    /**
     * Constructor method for EgenskabType
     * @uses EgenskabType::setVirkning()
     * @uses EgenskabType::setBrugervendtNoegleTekst()
     * @uses EgenskabType::setBeskrivelseTekst()
     * @uses EgenskabType::setEksempelTekst()
     * @uses EgenskabType::setOmfangTekst()
     * @uses EgenskabType::setTitelTekst()
     * @uses EgenskabType::setRetskildeTekst()
     * @uses EgenskabType::setAendringsnotatTekst()
     * @uses EgenskabType::setSoegeord()
     * @param \ItkDev\Serviceplatformen\SF1500\Klasse\StructType\VirkningType $virkning
     * @param string $brugervendtNoegleTekst
     * @param string $beskrivelseTekst
     * @param string $eksempelTekst
     * @param string $omfangTekst
     * @param string $titelTekst
     * @param string $retskildeTekst
     * @param string $aendringsnotatTekst
     * @param \ItkDev\Serviceplatformen\SF1500\Klasse\StructType\SoegeordType[] $soegeord
     */
    public function __construct(?\ItkDev\Serviceplatformen\SF1500\Klasse\StructType\VirkningType $virkning = null, ?string $brugervendtNoegleTekst = null, ?string $beskrivelseTekst = null, ?string $eksempelTekst = null, ?string $omfangTekst = null, ?string $titelTekst = null, ?string $retskildeTekst = null, ?string $aendringsnotatTekst = null, ?array $soegeord = null)
    {
        $this
            ->setVirkning($virkning)
            ->setBrugervendtNoegleTekst($brugervendtNoegleTekst)
            ->setBeskrivelseTekst($beskrivelseTekst)
            ->setEksempelTekst($eksempelTekst)
            ->setOmfangTekst($omfangTekst)
            ->setTitelTekst($titelTekst)
            ->setRetskildeTekst($retskildeTekst)
            ->setAendringsnotatTekst($aendringsnotatTekst)
            ->setSoegeord($soegeord);
    }
    /**
     * Get Virkning value
     * @return \ItkDev\Serviceplatformen\SF1500\Klasse\StructType\VirkningType|null
     */
    public function getVirkning(): ?\ItkDev\Serviceplatformen\SF1500\Klasse\StructType\VirkningType
    {
        return $this->Virkning;
    }
    /**
     * Set Virkning value
     * @param \ItkDev\Serviceplatformen\SF1500\Klasse\StructType\VirkningType $virkning
     * @return \ItkDev\Serviceplatformen\SF1500\Klasse\StructType\EgenskabType
     */
    public function setVirkning(?\ItkDev\Serviceplatformen\SF1500\Klasse\StructType\VirkningType $virkning = null): self
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
     * @return \ItkDev\Serviceplatformen\SF1500\Klasse\StructType\EgenskabType
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
     * @return \ItkDev\Serviceplatformen\SF1500\Klasse\StructType\EgenskabType
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
     * Get EksempelTekst value
     * @return string|null
     */
    public function getEksempelTekst(): ?string
    {
        return $this->EksempelTekst;
    }
    /**
     * Set EksempelTekst value
     * @param string $eksempelTekst
     * @return \ItkDev\Serviceplatformen\SF1500\Klasse\StructType\EgenskabType
     */
    public function setEksempelTekst(?string $eksempelTekst = null): self
    {
        // validation for constraint: string
        if (!is_null($eksempelTekst) && !is_string($eksempelTekst)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($eksempelTekst, true), gettype($eksempelTekst)), __LINE__);
        }
        // validation for constraint: maxLength(4096)
        if (!is_null($eksempelTekst) && mb_strlen((string) $eksempelTekst) > 4096) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 4096', mb_strlen((string) $eksempelTekst)), __LINE__);
        }
        $this->EksempelTekst = $eksempelTekst;
        
        return $this;
    }
    /**
     * Get OmfangTekst value
     * @return string|null
     */
    public function getOmfangTekst(): ?string
    {
        return $this->OmfangTekst;
    }
    /**
     * Set OmfangTekst value
     * @param string $omfangTekst
     * @return \ItkDev\Serviceplatformen\SF1500\Klasse\StructType\EgenskabType
     */
    public function setOmfangTekst(?string $omfangTekst = null): self
    {
        // validation for constraint: string
        if (!is_null($omfangTekst) && !is_string($omfangTekst)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($omfangTekst, true), gettype($omfangTekst)), __LINE__);
        }
        // validation for constraint: maxLength(1024)
        if (!is_null($omfangTekst) && mb_strlen((string) $omfangTekst) > 1024) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 1024', mb_strlen((string) $omfangTekst)), __LINE__);
        }
        $this->OmfangTekst = $omfangTekst;
        
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
     * @return \ItkDev\Serviceplatformen\SF1500\Klasse\StructType\EgenskabType
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
     * @return \ItkDev\Serviceplatformen\SF1500\Klasse\StructType\EgenskabType
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
    /**
     * Get AendringsnotatTekst value
     * @return string|null
     */
    public function getAendringsnotatTekst(): ?string
    {
        return $this->AendringsnotatTekst;
    }
    /**
     * Set AendringsnotatTekst value
     * @param string $aendringsnotatTekst
     * @return \ItkDev\Serviceplatformen\SF1500\Klasse\StructType\EgenskabType
     */
    public function setAendringsnotatTekst(?string $aendringsnotatTekst = null): self
    {
        // validation for constraint: string
        if (!is_null($aendringsnotatTekst) && !is_string($aendringsnotatTekst)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($aendringsnotatTekst, true), gettype($aendringsnotatTekst)), __LINE__);
        }
        // validation for constraint: maxLength(1024)
        if (!is_null($aendringsnotatTekst) && mb_strlen((string) $aendringsnotatTekst) > 1024) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 1024', mb_strlen((string) $aendringsnotatTekst)), __LINE__);
        }
        $this->AendringsnotatTekst = $aendringsnotatTekst;
        
        return $this;
    }
    /**
     * Get Soegeord value
     * @return \ItkDev\Serviceplatformen\SF1500\Klasse\StructType\SoegeordType[]
     */
    public function getSoegeord(): ?array
    {
        return $this->Soegeord;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setSoegeord method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSoegeord method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSoegeordForArrayConstraintFromSetSoegeord(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $egenskabTypeSoegeordItem) {
            // validation for constraint: itemType
            if (!$egenskabTypeSoegeordItem instanceof \ItkDev\Serviceplatformen\SF1500\Klasse\StructType\SoegeordType) {
                $invalidValues[] = is_object($egenskabTypeSoegeordItem) ? get_class($egenskabTypeSoegeordItem) : sprintf('%s(%s)', gettype($egenskabTypeSoegeordItem), var_export($egenskabTypeSoegeordItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Soegeord property can only contain items of type \ItkDev\Serviceplatformen\SF1500\Klasse\StructType\SoegeordType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Soegeord value
     * @throws InvalidArgumentException
     * @param \ItkDev\Serviceplatformen\SF1500\Klasse\StructType\SoegeordType[] $soegeord
     * @return \ItkDev\Serviceplatformen\SF1500\Klasse\StructType\EgenskabType
     */
    public function setSoegeord(?array $soegeord = null): self
    {
        // validation for constraint: array
        if ('' !== ($soegeordArrayErrorMessage = self::validateSoegeordForArrayConstraintFromSetSoegeord($soegeord))) {
            throw new InvalidArgumentException($soegeordArrayErrorMessage, __LINE__);
        }
        $this->Soegeord = $soegeord;
        
        return $this;
    }
    /**
     * Add item to Soegeord value
     * @throws InvalidArgumentException
     * @param \ItkDev\Serviceplatformen\SF1500\Klasse\StructType\SoegeordType $item
     * @return \ItkDev\Serviceplatformen\SF1500\Klasse\StructType\EgenskabType
     */
    public function addToSoegeord(\ItkDev\Serviceplatformen\SF1500\Klasse\StructType\SoegeordType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \ItkDev\Serviceplatformen\SF1500\Klasse\StructType\SoegeordType) {
            throw new InvalidArgumentException(sprintf('The Soegeord property can only contain items of type \ItkDev\Serviceplatformen\SF1500\Klasse\StructType\SoegeordType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Soegeord[] = $item;
        
        return $this;
    }
}
