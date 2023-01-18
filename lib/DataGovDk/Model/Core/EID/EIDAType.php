<?php

namespace DataGovDk\Model\Core\EID;

/**
 * Class representing EIDAType
 */
class EIDAType
{
    /**
     * @var string $eID
     */
    private $eID = null;

    /**
     * @var string $label
     */
    private $label = null;

    /**
     * Gets as eID
     *
     * @return string
     */
    public function getEID()
    {
        return $this->eID;
    }

    /**
     * Sets a new eID
     *
     * @param string $eID
     * @return self
     */
    public function setEID($eID)
    {
        $this->eID = $eID;
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

