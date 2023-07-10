<?php

namespace Oio\Fjernprint;

/**
 * Class representing KontaktOplysningType
 *
 *
 * XSD Type: KontaktOplysningType
 */
class KontaktOplysningType
{
    /**
     * @var string $personName
     */
    private $personName = null;

    /**
     * @var string $coNavn
     */
    private $coNavn = null;

    /**
     * @var string $streetName
     */
    private $streetName = null;

    /**
     * @var string $streetBuildingIdentifier
     */
    private $streetBuildingIdentifier = null;

    /**
     * @var string $floorIdentifier
     */
    private $floorIdentifier = null;

    /**
     * @var string $suiteIdentifier
     */
    private $suiteIdentifier = null;

    /**
     * @var string $mailDeliverySublocationIdentifier
     */
    private $mailDeliverySublocationIdentifier = null;

    /**
     * @var string $postCodeIdentifier
     */
    private $postCodeIdentifier = null;

    /**
     * @var string $districtSubdivisionIdentifier
     */
    private $districtSubdivisionIdentifier = null;

    /**
     * @var int $postOfficeBoxIdentifier
     */
    private $postOfficeBoxIdentifier = null;

    /**
     * @var string $postalAddressFirstLineText
     */
    private $postalAddressFirstLineText = null;

    /**
     * @var string $postalAddressSecondLineText
     */
    private $postalAddressSecondLineText = null;

    /**
     * @var string $postalAddressThirdLineText
     */
    private $postalAddressThirdLineText = null;

    /**
     * @var string $postalAddressFourthLineText
     */
    private $postalAddressFourthLineText = null;

    /**
     * @var string $postalAddressFifthLineText
     */
    private $postalAddressFifthLineText = null;

    /**
     * @var string $postalAddressSixthLineText
     */
    private $postalAddressSixthLineText = null;

    /**
     * @var \Oio\Ebxml\CountryIdentificationCode $countryIdentificationCode
     */
    private $countryIdentificationCode = null;

    /**
     * Gets as personName
     *
     * @return string
     */
    public function getPersonName()
    {
        return $this->personName;
    }

    /**
     * Sets a new personName
     *
     * @param string $personName
     * @return self
     */
    public function setPersonName($personName)
    {
        $this->personName = $personName;
        return $this;
    }

    /**
     * Gets as coNavn
     *
     * @return string
     */
    public function getCoNavn()
    {
        return $this->coNavn;
    }

    /**
     * Sets a new coNavn
     *
     * @param string $coNavn
     * @return self
     */
    public function setCoNavn($coNavn)
    {
        $this->coNavn = $coNavn;
        return $this;
    }

    /**
     * Gets as streetName
     *
     * @return string
     */
    public function getStreetName()
    {
        return $this->streetName;
    }

    /**
     * Sets a new streetName
     *
     * @param string $streetName
     * @return self
     */
    public function setStreetName($streetName)
    {
        $this->streetName = $streetName;
        return $this;
    }

    /**
     * Gets as streetBuildingIdentifier
     *
     * @return string
     */
    public function getStreetBuildingIdentifier()
    {
        return $this->streetBuildingIdentifier;
    }

    /**
     * Sets a new streetBuildingIdentifier
     *
     * @param string $streetBuildingIdentifier
     * @return self
     */
    public function setStreetBuildingIdentifier($streetBuildingIdentifier)
    {
        $this->streetBuildingIdentifier = $streetBuildingIdentifier;
        return $this;
    }

    /**
     * Gets as floorIdentifier
     *
     * @return string
     */
    public function getFloorIdentifier()
    {
        return $this->floorIdentifier;
    }

    /**
     * Sets a new floorIdentifier
     *
     * @param string $floorIdentifier
     * @return self
     */
    public function setFloorIdentifier($floorIdentifier)
    {
        $this->floorIdentifier = $floorIdentifier;
        return $this;
    }

    /**
     * Gets as suiteIdentifier
     *
     * @return string
     */
    public function getSuiteIdentifier()
    {
        return $this->suiteIdentifier;
    }

    /**
     * Sets a new suiteIdentifier
     *
     * @param string $suiteIdentifier
     * @return self
     */
    public function setSuiteIdentifier($suiteIdentifier)
    {
        $this->suiteIdentifier = $suiteIdentifier;
        return $this;
    }

    /**
     * Gets as mailDeliverySublocationIdentifier
     *
     * @return string
     */
    public function getMailDeliverySublocationIdentifier()
    {
        return $this->mailDeliverySublocationIdentifier;
    }

    /**
     * Sets a new mailDeliverySublocationIdentifier
     *
     * @param string $mailDeliverySublocationIdentifier
     * @return self
     */
    public function setMailDeliverySublocationIdentifier($mailDeliverySublocationIdentifier)
    {
        $this->mailDeliverySublocationIdentifier = $mailDeliverySublocationIdentifier;
        return $this;
    }

    /**
     * Gets as postCodeIdentifier
     *
     * @return string
     */
    public function getPostCodeIdentifier()
    {
        return $this->postCodeIdentifier;
    }

    /**
     * Sets a new postCodeIdentifier
     *
     * @param string $postCodeIdentifier
     * @return self
     */
    public function setPostCodeIdentifier($postCodeIdentifier)
    {
        $this->postCodeIdentifier = $postCodeIdentifier;
        return $this;
    }

    /**
     * Gets as districtSubdivisionIdentifier
     *
     * @return string
     */
    public function getDistrictSubdivisionIdentifier()
    {
        return $this->districtSubdivisionIdentifier;
    }

    /**
     * Sets a new districtSubdivisionIdentifier
     *
     * @param string $districtSubdivisionIdentifier
     * @return self
     */
    public function setDistrictSubdivisionIdentifier($districtSubdivisionIdentifier)
    {
        $this->districtSubdivisionIdentifier = $districtSubdivisionIdentifier;
        return $this;
    }

    /**
     * Gets as postOfficeBoxIdentifier
     *
     * @return int
     */
    public function getPostOfficeBoxIdentifier()
    {
        return $this->postOfficeBoxIdentifier;
    }

    /**
     * Sets a new postOfficeBoxIdentifier
     *
     * @param int $postOfficeBoxIdentifier
     * @return self
     */
    public function setPostOfficeBoxIdentifier($postOfficeBoxIdentifier)
    {
        $this->postOfficeBoxIdentifier = $postOfficeBoxIdentifier;
        return $this;
    }

    /**
     * Gets as postalAddressFirstLineText
     *
     * @return string
     */
    public function getPostalAddressFirstLineText()
    {
        return $this->postalAddressFirstLineText;
    }

    /**
     * Sets a new postalAddressFirstLineText
     *
     * @param string $postalAddressFirstLineText
     * @return self
     */
    public function setPostalAddressFirstLineText($postalAddressFirstLineText)
    {
        $this->postalAddressFirstLineText = $postalAddressFirstLineText;
        return $this;
    }

    /**
     * Gets as postalAddressSecondLineText
     *
     * @return string
     */
    public function getPostalAddressSecondLineText()
    {
        return $this->postalAddressSecondLineText;
    }

    /**
     * Sets a new postalAddressSecondLineText
     *
     * @param string $postalAddressSecondLineText
     * @return self
     */
    public function setPostalAddressSecondLineText($postalAddressSecondLineText)
    {
        $this->postalAddressSecondLineText = $postalAddressSecondLineText;
        return $this;
    }

    /**
     * Gets as postalAddressThirdLineText
     *
     * @return string
     */
    public function getPostalAddressThirdLineText()
    {
        return $this->postalAddressThirdLineText;
    }

    /**
     * Sets a new postalAddressThirdLineText
     *
     * @param string $postalAddressThirdLineText
     * @return self
     */
    public function setPostalAddressThirdLineText($postalAddressThirdLineText)
    {
        $this->postalAddressThirdLineText = $postalAddressThirdLineText;
        return $this;
    }

    /**
     * Gets as postalAddressFourthLineText
     *
     * @return string
     */
    public function getPostalAddressFourthLineText()
    {
        return $this->postalAddressFourthLineText;
    }

    /**
     * Sets a new postalAddressFourthLineText
     *
     * @param string $postalAddressFourthLineText
     * @return self
     */
    public function setPostalAddressFourthLineText($postalAddressFourthLineText)
    {
        $this->postalAddressFourthLineText = $postalAddressFourthLineText;
        return $this;
    }

    /**
     * Gets as postalAddressFifthLineText
     *
     * @return string
     */
    public function getPostalAddressFifthLineText()
    {
        return $this->postalAddressFifthLineText;
    }

    /**
     * Sets a new postalAddressFifthLineText
     *
     * @param string $postalAddressFifthLineText
     * @return self
     */
    public function setPostalAddressFifthLineText($postalAddressFifthLineText)
    {
        $this->postalAddressFifthLineText = $postalAddressFifthLineText;
        return $this;
    }

    /**
     * Gets as postalAddressSixthLineText
     *
     * @return string
     */
    public function getPostalAddressSixthLineText()
    {
        return $this->postalAddressSixthLineText;
    }

    /**
     * Sets a new postalAddressSixthLineText
     *
     * @param string $postalAddressSixthLineText
     * @return self
     */
    public function setPostalAddressSixthLineText($postalAddressSixthLineText)
    {
        $this->postalAddressSixthLineText = $postalAddressSixthLineText;
        return $this;
    }

    /**
     * Gets as countryIdentificationCode
     *
     * @return \Oio\Ebxml\CountryIdentificationCode
     */
    public function getCountryIdentificationCode()
    {
        return $this->countryIdentificationCode;
    }

    /**
     * Sets a new countryIdentificationCode
     *
     * @param \Oio\Ebxml\CountryIdentificationCode $countryIdentificationCode
     * @return self
     */
    public function setCountryIdentificationCode(\Oio\Ebxml\CountryIdentificationCode $countryIdentificationCode)
    {
        $this->countryIdentificationCode = $countryIdentificationCode;
        return $this;
    }
}

