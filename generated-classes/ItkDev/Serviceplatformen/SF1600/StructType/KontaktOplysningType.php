<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF1600\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for KontaktOplysningType StructType
 * @subpackage Structs
 */
class KontaktOplysningType extends AbstractStructBase
{
    /**
     * The PersonName
     * Meta information extracted from the WSDL
     * - ref: itst:PersonName
     * @var string|null
     */
    protected ?string $PersonName = null;
    /**
     * The CoNavn
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: fjernprint:CoNavn
     * @var string|null
     */
    protected ?string $CoNavn = null;
    /**
     * The StreetName
     * Meta information extracted from the WSDL
     * - ref: dkcc2005:StreetName
     * @var string|null
     */
    protected ?string $StreetName = null;
    /**
     * The StreetBuildingIdentifier
     * Meta information extracted from the WSDL
     * - ref: dkcc:StreetBuildingIdentifier
     * @var string|null
     */
    protected ?string $StreetBuildingIdentifier = null;
    /**
     * The FloorIdentifier
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: dkcc:FloorIdentifier
     * @var string|null
     */
    protected ?string $FloorIdentifier = null;
    /**
     * The SuiteIdentifier
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: dkcc:SuiteIdentifier
     * @var string|null
     */
    protected ?string $SuiteIdentifier = null;
    /**
     * The MailDeliverySublocationIdentifier
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: dkcc:MailDeliverySublocationIdentifier
     * @var string|null
     */
    protected ?string $MailDeliverySublocationIdentifier = null;
    /**
     * The PostCodeIdentifier
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: dkcc2005:PostCodeIdentifier
     * @var string|null
     */
    protected ?string $PostCodeIdentifier = null;
    /**
     * The DistrictSubdivisionIdentifier
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: dkcc2005:DistrictSubdivisionIdentifier
     * @var string|null
     */
    protected ?string $DistrictSubdivisionIdentifier = null;
    /**
     * The PostOfficeBoxIdentifier
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: dkcc2005-2:PostOfficeBoxIdentifier
     * @var int|null
     */
    protected ?int $PostOfficeBoxIdentifier = null;
    /**
     * The PostalAddressFirstLineText
     * Meta information extracted from the WSDL
     * - ref: dkcc2005-3:PostalAddressFirstLineText
     * @var string|null
     */
    protected ?string $PostalAddressFirstLineText = null;
    /**
     * The PostalAddressSecondLineText
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: dkcc2005-3:PostalAddressSecondLineText
     * @var string|null
     */
    protected ?string $PostalAddressSecondLineText = null;
    /**
     * The PostalAddressThirdLineText
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: dkcc2005-3:PostalAddressThirdLineText
     * @var string|null
     */
    protected ?string $PostalAddressThirdLineText = null;
    /**
     * The PostalAddressFourthLineText
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: dkcc2005-3:PostalAddressFourthLineText
     * @var string|null
     */
    protected ?string $PostalAddressFourthLineText = null;
    /**
     * The PostalAddressFifthLineText
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: dkcc2005-3:PostalAddressFifthLineText
     * @var string|null
     */
    protected ?string $PostalAddressFifthLineText = null;
    /**
     * The PostalAddressSixthLineText
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: dkcc2005-3:PostalAddressSixthLineText
     * @var string|null
     */
    protected ?string $PostalAddressSixthLineText = null;
    /**
     * The CountryIdentificationCode
     * Meta information extracted from the WSDL
     * - ref: dkcc:CountryIdentificationCode
     * @var \ItkDev\Serviceplatformen\SF1600\StructType\CountryIdentificationCodeType|null
     */
    protected ?\ItkDev\Serviceplatformen\SF1600\StructType\CountryIdentificationCodeType $CountryIdentificationCode = null;
    /**
     * Constructor method for KontaktOplysningType
     * @uses KontaktOplysningType::setPersonName()
     * @uses KontaktOplysningType::setCoNavn()
     * @uses KontaktOplysningType::setStreetName()
     * @uses KontaktOplysningType::setStreetBuildingIdentifier()
     * @uses KontaktOplysningType::setFloorIdentifier()
     * @uses KontaktOplysningType::setSuiteIdentifier()
     * @uses KontaktOplysningType::setMailDeliverySublocationIdentifier()
     * @uses KontaktOplysningType::setPostCodeIdentifier()
     * @uses KontaktOplysningType::setDistrictSubdivisionIdentifier()
     * @uses KontaktOplysningType::setPostOfficeBoxIdentifier()
     * @uses KontaktOplysningType::setPostalAddressFirstLineText()
     * @uses KontaktOplysningType::setPostalAddressSecondLineText()
     * @uses KontaktOplysningType::setPostalAddressThirdLineText()
     * @uses KontaktOplysningType::setPostalAddressFourthLineText()
     * @uses KontaktOplysningType::setPostalAddressFifthLineText()
     * @uses KontaktOplysningType::setPostalAddressSixthLineText()
     * @uses KontaktOplysningType::setCountryIdentificationCode()
     * @param string $personName
     * @param string $coNavn
     * @param string $streetName
     * @param string $streetBuildingIdentifier
     * @param string $floorIdentifier
     * @param string $suiteIdentifier
     * @param string $mailDeliverySublocationIdentifier
     * @param string $postCodeIdentifier
     * @param string $districtSubdivisionIdentifier
     * @param int $postOfficeBoxIdentifier
     * @param string $postalAddressFirstLineText
     * @param string $postalAddressSecondLineText
     * @param string $postalAddressThirdLineText
     * @param string $postalAddressFourthLineText
     * @param string $postalAddressFifthLineText
     * @param string $postalAddressSixthLineText
     * @param \ItkDev\Serviceplatformen\SF1600\StructType\CountryIdentificationCodeType $countryIdentificationCode
     */
    public function __construct(?string $personName = null, ?string $coNavn = null, ?string $streetName = null, ?string $streetBuildingIdentifier = null, ?string $floorIdentifier = null, ?string $suiteIdentifier = null, ?string $mailDeliverySublocationIdentifier = null, ?string $postCodeIdentifier = null, ?string $districtSubdivisionIdentifier = null, ?int $postOfficeBoxIdentifier = null, ?string $postalAddressFirstLineText = null, ?string $postalAddressSecondLineText = null, ?string $postalAddressThirdLineText = null, ?string $postalAddressFourthLineText = null, ?string $postalAddressFifthLineText = null, ?string $postalAddressSixthLineText = null, ?\ItkDev\Serviceplatformen\SF1600\StructType\CountryIdentificationCodeType $countryIdentificationCode = null)
    {
        $this
            ->setPersonName($personName)
            ->setCoNavn($coNavn)
            ->setStreetName($streetName)
            ->setStreetBuildingIdentifier($streetBuildingIdentifier)
            ->setFloorIdentifier($floorIdentifier)
            ->setSuiteIdentifier($suiteIdentifier)
            ->setMailDeliverySublocationIdentifier($mailDeliverySublocationIdentifier)
            ->setPostCodeIdentifier($postCodeIdentifier)
            ->setDistrictSubdivisionIdentifier($districtSubdivisionIdentifier)
            ->setPostOfficeBoxIdentifier($postOfficeBoxIdentifier)
            ->setPostalAddressFirstLineText($postalAddressFirstLineText)
            ->setPostalAddressSecondLineText($postalAddressSecondLineText)
            ->setPostalAddressThirdLineText($postalAddressThirdLineText)
            ->setPostalAddressFourthLineText($postalAddressFourthLineText)
            ->setPostalAddressFifthLineText($postalAddressFifthLineText)
            ->setPostalAddressSixthLineText($postalAddressSixthLineText)
            ->setCountryIdentificationCode($countryIdentificationCode);
    }
    /**
     * Get PersonName value
     * @return string|null
     */
    public function getPersonName(): ?string
    {
        return $this->PersonName;
    }
    /**
     * Set PersonName value
     * @param string $personName
     * @return \ItkDev\Serviceplatformen\SF1600\StructType\KontaktOplysningType
     */
    public function setPersonName(?string $personName = null): self
    {
        // validation for constraint: string
        if (!is_null($personName) && !is_string($personName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($personName, true), gettype($personName)), __LINE__);
        }
        $this->PersonName = $personName;
        
        return $this;
    }
    /**
     * Get CoNavn value
     * @return string|null
     */
    public function getCoNavn(): ?string
    {
        return $this->CoNavn;
    }
    /**
     * Set CoNavn value
     * @param string $coNavn
     * @return \ItkDev\Serviceplatformen\SF1600\StructType\KontaktOplysningType
     */
    public function setCoNavn(?string $coNavn = null): self
    {
        // validation for constraint: string
        if (!is_null($coNavn) && !is_string($coNavn)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($coNavn, true), gettype($coNavn)), __LINE__);
        }
        $this->CoNavn = $coNavn;
        
        return $this;
    }
    /**
     * Get StreetName value
     * @return string|null
     */
    public function getStreetName(): ?string
    {
        return $this->StreetName;
    }
    /**
     * Set StreetName value
     * @param string $streetName
     * @return \ItkDev\Serviceplatformen\SF1600\StructType\KontaktOplysningType
     */
    public function setStreetName(?string $streetName = null): self
    {
        // validation for constraint: string
        if (!is_null($streetName) && !is_string($streetName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($streetName, true), gettype($streetName)), __LINE__);
        }
        $this->StreetName = $streetName;
        
        return $this;
    }
    /**
     * Get StreetBuildingIdentifier value
     * @return string|null
     */
    public function getStreetBuildingIdentifier(): ?string
    {
        return $this->StreetBuildingIdentifier;
    }
    /**
     * Set StreetBuildingIdentifier value
     * @param string $streetBuildingIdentifier
     * @return \ItkDev\Serviceplatformen\SF1600\StructType\KontaktOplysningType
     */
    public function setStreetBuildingIdentifier(?string $streetBuildingIdentifier = null): self
    {
        // validation for constraint: string
        if (!is_null($streetBuildingIdentifier) && !is_string($streetBuildingIdentifier)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($streetBuildingIdentifier, true), gettype($streetBuildingIdentifier)), __LINE__);
        }
        $this->StreetBuildingIdentifier = $streetBuildingIdentifier;
        
        return $this;
    }
    /**
     * Get FloorIdentifier value
     * @return string|null
     */
    public function getFloorIdentifier(): ?string
    {
        return $this->FloorIdentifier;
    }
    /**
     * Set FloorIdentifier value
     * @param string $floorIdentifier
     * @return \ItkDev\Serviceplatformen\SF1600\StructType\KontaktOplysningType
     */
    public function setFloorIdentifier(?string $floorIdentifier = null): self
    {
        // validation for constraint: string
        if (!is_null($floorIdentifier) && !is_string($floorIdentifier)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($floorIdentifier, true), gettype($floorIdentifier)), __LINE__);
        }
        $this->FloorIdentifier = $floorIdentifier;
        
        return $this;
    }
    /**
     * Get SuiteIdentifier value
     * @return string|null
     */
    public function getSuiteIdentifier(): ?string
    {
        return $this->SuiteIdentifier;
    }
    /**
     * Set SuiteIdentifier value
     * @param string $suiteIdentifier
     * @return \ItkDev\Serviceplatformen\SF1600\StructType\KontaktOplysningType
     */
    public function setSuiteIdentifier(?string $suiteIdentifier = null): self
    {
        // validation for constraint: string
        if (!is_null($suiteIdentifier) && !is_string($suiteIdentifier)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($suiteIdentifier, true), gettype($suiteIdentifier)), __LINE__);
        }
        $this->SuiteIdentifier = $suiteIdentifier;
        
        return $this;
    }
    /**
     * Get MailDeliverySublocationIdentifier value
     * @return string|null
     */
    public function getMailDeliverySublocationIdentifier(): ?string
    {
        return $this->MailDeliverySublocationIdentifier;
    }
    /**
     * Set MailDeliverySublocationIdentifier value
     * @param string $mailDeliverySublocationIdentifier
     * @return \ItkDev\Serviceplatformen\SF1600\StructType\KontaktOplysningType
     */
    public function setMailDeliverySublocationIdentifier(?string $mailDeliverySublocationIdentifier = null): self
    {
        // validation for constraint: string
        if (!is_null($mailDeliverySublocationIdentifier) && !is_string($mailDeliverySublocationIdentifier)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mailDeliverySublocationIdentifier, true), gettype($mailDeliverySublocationIdentifier)), __LINE__);
        }
        $this->MailDeliverySublocationIdentifier = $mailDeliverySublocationIdentifier;
        
        return $this;
    }
    /**
     * Get PostCodeIdentifier value
     * @return string|null
     */
    public function getPostCodeIdentifier(): ?string
    {
        return $this->PostCodeIdentifier;
    }
    /**
     * Set PostCodeIdentifier value
     * @param string $postCodeIdentifier
     * @return \ItkDev\Serviceplatformen\SF1600\StructType\KontaktOplysningType
     */
    public function setPostCodeIdentifier(?string $postCodeIdentifier = null): self
    {
        // validation for constraint: string
        if (!is_null($postCodeIdentifier) && !is_string($postCodeIdentifier)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($postCodeIdentifier, true), gettype($postCodeIdentifier)), __LINE__);
        }
        $this->PostCodeIdentifier = $postCodeIdentifier;
        
        return $this;
    }
    /**
     * Get DistrictSubdivisionIdentifier value
     * @return string|null
     */
    public function getDistrictSubdivisionIdentifier(): ?string
    {
        return $this->DistrictSubdivisionIdentifier;
    }
    /**
     * Set DistrictSubdivisionIdentifier value
     * @param string $districtSubdivisionIdentifier
     * @return \ItkDev\Serviceplatformen\SF1600\StructType\KontaktOplysningType
     */
    public function setDistrictSubdivisionIdentifier(?string $districtSubdivisionIdentifier = null): self
    {
        // validation for constraint: string
        if (!is_null($districtSubdivisionIdentifier) && !is_string($districtSubdivisionIdentifier)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($districtSubdivisionIdentifier, true), gettype($districtSubdivisionIdentifier)), __LINE__);
        }
        $this->DistrictSubdivisionIdentifier = $districtSubdivisionIdentifier;
        
        return $this;
    }
    /**
     * Get PostOfficeBoxIdentifier value
     * @return int|null
     */
    public function getPostOfficeBoxIdentifier(): ?int
    {
        return $this->PostOfficeBoxIdentifier;
    }
    /**
     * Set PostOfficeBoxIdentifier value
     * @param int $postOfficeBoxIdentifier
     * @return \ItkDev\Serviceplatformen\SF1600\StructType\KontaktOplysningType
     */
    public function setPostOfficeBoxIdentifier(?int $postOfficeBoxIdentifier = null): self
    {
        // validation for constraint: int
        if (!is_null($postOfficeBoxIdentifier) && !(is_int($postOfficeBoxIdentifier) || ctype_digit($postOfficeBoxIdentifier))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($postOfficeBoxIdentifier, true), gettype($postOfficeBoxIdentifier)), __LINE__);
        }
        $this->PostOfficeBoxIdentifier = $postOfficeBoxIdentifier;
        
        return $this;
    }
    /**
     * Get PostalAddressFirstLineText value
     * @return string|null
     */
    public function getPostalAddressFirstLineText(): ?string
    {
        return $this->PostalAddressFirstLineText;
    }
    /**
     * Set PostalAddressFirstLineText value
     * @param string $postalAddressFirstLineText
     * @return \ItkDev\Serviceplatformen\SF1600\StructType\KontaktOplysningType
     */
    public function setPostalAddressFirstLineText(?string $postalAddressFirstLineText = null): self
    {
        // validation for constraint: string
        if (!is_null($postalAddressFirstLineText) && !is_string($postalAddressFirstLineText)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($postalAddressFirstLineText, true), gettype($postalAddressFirstLineText)), __LINE__);
        }
        $this->PostalAddressFirstLineText = $postalAddressFirstLineText;
        
        return $this;
    }
    /**
     * Get PostalAddressSecondLineText value
     * @return string|null
     */
    public function getPostalAddressSecondLineText(): ?string
    {
        return $this->PostalAddressSecondLineText;
    }
    /**
     * Set PostalAddressSecondLineText value
     * @param string $postalAddressSecondLineText
     * @return \ItkDev\Serviceplatformen\SF1600\StructType\KontaktOplysningType
     */
    public function setPostalAddressSecondLineText(?string $postalAddressSecondLineText = null): self
    {
        // validation for constraint: string
        if (!is_null($postalAddressSecondLineText) && !is_string($postalAddressSecondLineText)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($postalAddressSecondLineText, true), gettype($postalAddressSecondLineText)), __LINE__);
        }
        $this->PostalAddressSecondLineText = $postalAddressSecondLineText;
        
        return $this;
    }
    /**
     * Get PostalAddressThirdLineText value
     * @return string|null
     */
    public function getPostalAddressThirdLineText(): ?string
    {
        return $this->PostalAddressThirdLineText;
    }
    /**
     * Set PostalAddressThirdLineText value
     * @param string $postalAddressThirdLineText
     * @return \ItkDev\Serviceplatformen\SF1600\StructType\KontaktOplysningType
     */
    public function setPostalAddressThirdLineText(?string $postalAddressThirdLineText = null): self
    {
        // validation for constraint: string
        if (!is_null($postalAddressThirdLineText) && !is_string($postalAddressThirdLineText)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($postalAddressThirdLineText, true), gettype($postalAddressThirdLineText)), __LINE__);
        }
        $this->PostalAddressThirdLineText = $postalAddressThirdLineText;
        
        return $this;
    }
    /**
     * Get PostalAddressFourthLineText value
     * @return string|null
     */
    public function getPostalAddressFourthLineText(): ?string
    {
        return $this->PostalAddressFourthLineText;
    }
    /**
     * Set PostalAddressFourthLineText value
     * @param string $postalAddressFourthLineText
     * @return \ItkDev\Serviceplatformen\SF1600\StructType\KontaktOplysningType
     */
    public function setPostalAddressFourthLineText(?string $postalAddressFourthLineText = null): self
    {
        // validation for constraint: string
        if (!is_null($postalAddressFourthLineText) && !is_string($postalAddressFourthLineText)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($postalAddressFourthLineText, true), gettype($postalAddressFourthLineText)), __LINE__);
        }
        $this->PostalAddressFourthLineText = $postalAddressFourthLineText;
        
        return $this;
    }
    /**
     * Get PostalAddressFifthLineText value
     * @return string|null
     */
    public function getPostalAddressFifthLineText(): ?string
    {
        return $this->PostalAddressFifthLineText;
    }
    /**
     * Set PostalAddressFifthLineText value
     * @param string $postalAddressFifthLineText
     * @return \ItkDev\Serviceplatformen\SF1600\StructType\KontaktOplysningType
     */
    public function setPostalAddressFifthLineText(?string $postalAddressFifthLineText = null): self
    {
        // validation for constraint: string
        if (!is_null($postalAddressFifthLineText) && !is_string($postalAddressFifthLineText)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($postalAddressFifthLineText, true), gettype($postalAddressFifthLineText)), __LINE__);
        }
        $this->PostalAddressFifthLineText = $postalAddressFifthLineText;
        
        return $this;
    }
    /**
     * Get PostalAddressSixthLineText value
     * @return string|null
     */
    public function getPostalAddressSixthLineText(): ?string
    {
        return $this->PostalAddressSixthLineText;
    }
    /**
     * Set PostalAddressSixthLineText value
     * @param string $postalAddressSixthLineText
     * @return \ItkDev\Serviceplatformen\SF1600\StructType\KontaktOplysningType
     */
    public function setPostalAddressSixthLineText(?string $postalAddressSixthLineText = null): self
    {
        // validation for constraint: string
        if (!is_null($postalAddressSixthLineText) && !is_string($postalAddressSixthLineText)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($postalAddressSixthLineText, true), gettype($postalAddressSixthLineText)), __LINE__);
        }
        $this->PostalAddressSixthLineText = $postalAddressSixthLineText;
        
        return $this;
    }
    /**
     * Get CountryIdentificationCode value
     * @return \ItkDev\Serviceplatformen\SF1600\StructType\CountryIdentificationCodeType|null
     */
    public function getCountryIdentificationCode(): ?\ItkDev\Serviceplatformen\SF1600\StructType\CountryIdentificationCodeType
    {
        return $this->CountryIdentificationCode;
    }
    /**
     * Set CountryIdentificationCode value
     * @param \ItkDev\Serviceplatformen\SF1600\StructType\CountryIdentificationCodeType $countryIdentificationCode
     * @return \ItkDev\Serviceplatformen\SF1600\StructType\KontaktOplysningType
     */
    public function setCountryIdentificationCode(?\ItkDev\Serviceplatformen\SF1600\StructType\CountryIdentificationCodeType $countryIdentificationCode = null): self
    {
        $this->CountryIdentificationCode = $countryIdentificationCode;
        
        return $this;
    }
}
