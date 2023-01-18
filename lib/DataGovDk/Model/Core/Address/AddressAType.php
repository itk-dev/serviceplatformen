<?php

namespace DataGovDk\Model\Core\Address;

/**
 * Class representing AddressAType
 */
class AddressAType
{
    /**
     * @var string $id
     */
    private $id = null;

    /**
     * @var string $addressLabel
     */
    private $addressLabel = null;

    /**
     * @var string $houseNumber
     */
    private $houseNumber = null;

    /**
     * @var string $door
     */
    private $door = null;

    /**
     * @var string $floor
     */
    private $floor = null;

    /**
     * @var string $co
     */
    private $co = null;

    /**
     * @var string $zipCode
     */
    private $zipCode = null;

    /**
     * @var string $city
     */
    private $city = null;

    /**
     * @var string $country
     */
    private $country = null;

    /**
     * @var \DataGovDk\Model\Core\AddressPoint $addressPoint
     */
    private $addressPoint = null;

    /**
     * Gets as id
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets a new id
     *
     * @param string $id
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * Gets as addressLabel
     *
     * @return string
     */
    public function getAddressLabel()
    {
        return $this->addressLabel;
    }

    /**
     * Sets a new addressLabel
     *
     * @param string $addressLabel
     * @return self
     */
    public function setAddressLabel($addressLabel)
    {
        $this->addressLabel = $addressLabel;
        return $this;
    }

    /**
     * Gets as houseNumber
     *
     * @return string
     */
    public function getHouseNumber()
    {
        return $this->houseNumber;
    }

    /**
     * Sets a new houseNumber
     *
     * @param string $houseNumber
     * @return self
     */
    public function setHouseNumber($houseNumber)
    {
        $this->houseNumber = $houseNumber;
        return $this;
    }

    /**
     * Gets as door
     *
     * @return string
     */
    public function getDoor()
    {
        return $this->door;
    }

    /**
     * Sets a new door
     *
     * @param string $door
     * @return self
     */
    public function setDoor($door)
    {
        $this->door = $door;
        return $this;
    }

    /**
     * Gets as floor
     *
     * @return string
     */
    public function getFloor()
    {
        return $this->floor;
    }

    /**
     * Sets a new floor
     *
     * @param string $floor
     * @return self
     */
    public function setFloor($floor)
    {
        $this->floor = $floor;
        return $this;
    }

    /**
     * Gets as co
     *
     * @return string
     */
    public function getCo()
    {
        return $this->co;
    }

    /**
     * Sets a new co
     *
     * @param string $co
     * @return self
     */
    public function setCo($co)
    {
        $this->co = $co;
        return $this;
    }

    /**
     * Gets as zipCode
     *
     * @return string
     */
    public function getZipCode()
    {
        return $this->zipCode;
    }

    /**
     * Sets a new zipCode
     *
     * @param string $zipCode
     * @return self
     */
    public function setZipCode($zipCode)
    {
        $this->zipCode = $zipCode;
        return $this;
    }

    /**
     * Gets as city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Sets a new city
     *
     * @param string $city
     * @return self
     */
    public function setCity($city)
    {
        $this->city = $city;
        return $this;
    }

    /**
     * Gets as country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Sets a new country
     *
     * @param string $country
     * @return self
     */
    public function setCountry($country)
    {
        $this->country = $country;
        return $this;
    }

    /**
     * Gets as addressPoint
     *
     * @return \DataGovDk\Model\Core\AddressPoint
     */
    public function getAddressPoint()
    {
        return $this->addressPoint;
    }

    /**
     * Sets a new addressPoint
     *
     * @param \DataGovDk\Model\Core\AddressPoint $addressPoint
     * @return self
     */
    public function setAddressPoint(?\DataGovDk\Model\Core\AddressPoint $addressPoint = null)
    {
        $this->addressPoint = $addressPoint;
        return $this;
    }
}

