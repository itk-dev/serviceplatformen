<?php

namespace DigitalPost\MeMo\ContactPoint;

/**
 * Class representing ContactPointAType
 */
class ContactPointAType
{
    /**
     * @var string $contactGroup
     */
    private $contactGroup = null;

    /**
     * @var string $contactPointID
     */
    private $contactPointID = null;

    /**
     * @var string $label
     */
    private $label = null;

    /**
     * @var \DigitalPost\MeMo\ContactInfo[] $contactInfo
     */
    private $contactInfo = [
        
    ];

    /**
     * Gets as contactGroup
     *
     * @return string
     */
    public function getContactGroup()
    {
        return $this->contactGroup;
    }

    /**
     * Sets a new contactGroup
     *
     * @param string $contactGroup
     * @return self
     */
    public function setContactGroup($contactGroup)
    {
        $this->contactGroup = $contactGroup;
        return $this;
    }

    /**
     * Gets as contactPointID
     *
     * @return string
     */
    public function getContactPointID()
    {
        return $this->contactPointID;
    }

    /**
     * Sets a new contactPointID
     *
     * @param string $contactPointID
     * @return self
     */
    public function setContactPointID($contactPointID)
    {
        $this->contactPointID = $contactPointID;
        return $this;
    }

    /**
     * Gets as label
     *
     * @return string
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * Sets a new label
     *
     * @param string $label
     * @return self
     */
    public function setLabel($label)
    {
        $this->label = $label;
        return $this;
    }

    /**
     * Adds as contactInfo
     *
     * @return self
     * @param \DigitalPost\MeMo\ContactInfo $contactInfo
     */
    public function addToContactInfo(\DigitalPost\MeMo\ContactInfo $contactInfo)
    {
        $this->contactInfo[] = $contactInfo;
        return $this;
    }

    /**
     * isset contactInfo
     *
     * @param int|string $index
     * @return bool
     */
    public function issetContactInfo($index)
    {
        return isset($this->contactInfo[$index]);
    }

    /**
     * unset contactInfo
     *
     * @param int|string $index
     * @return void
     */
    public function unsetContactInfo($index)
    {
        unset($this->contactInfo[$index]);
    }

    /**
     * Gets as contactInfo
     *
     * @return \DigitalPost\MeMo\ContactInfo[]
     */
    public function getContactInfo()
    {
        return $this->contactInfo;
    }

    /**
     * Sets a new contactInfo
     *
     * @param \DigitalPost\MeMo\ContactInfo[] $contactInfo
     * @return self
     */
    public function setContactInfo(array $contactInfo = null)
    {
        $this->contactInfo = $contactInfo;
        return $this;
    }
}

