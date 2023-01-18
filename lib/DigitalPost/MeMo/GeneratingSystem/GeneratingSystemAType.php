<?php

namespace DigitalPost\MeMo\GeneratingSystem;

/**
 * Class representing GeneratingSystemAType
 */
class GeneratingSystemAType
{
    /**
     * @var string $generatingSystemID
     */
    private $generatingSystemID = null;

    /**
     * @var string $label
     */
    private $label = null;

    /**
     * Gets as generatingSystemID
     *
     * @return string
     */
    public function getGeneratingSystemID()
    {
        return $this->generatingSystemID;
    }

    /**
     * Sets a new generatingSystemID
     *
     * @param string $generatingSystemID
     * @return self
     */
    public function setGeneratingSystemID($generatingSystemID)
    {
        $this->generatingSystemID = $generatingSystemID;
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

