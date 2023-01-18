<?php

namespace DigitalPost\MeMo\AttentionPerson;

/**
 * Class representing AttentionPersonAType
 */
class AttentionPersonAType
{
    /**
     * @var string $personID
     */
    private $personID = null;

    /**
     * @var string $label
     */
    private $label = null;

    /**
     * Gets as personID
     *
     * @return string
     */
    public function getPersonID()
    {
        return $this->personID;
    }

    /**
     * Sets a new personID
     *
     * @param string $personID
     * @return self
     */
    public function setPersonID($personID)
    {
        $this->personID = $personID;
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
}

