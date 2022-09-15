<?php

namespace DigitalPost\MeMo\ContentResponsible;

/**
 * Class representing ContentResponsibleAType
 */
class ContentResponsibleAType
{
    /**
     * @var string $contentResponsibleID
     */
    private $contentResponsibleID = null;

    /**
     * @var string $label
     */
    private $label = null;

    /**
     * Gets as contentResponsibleID
     *
     * @return string
     */
    public function getContentResponsibleID()
    {
        return $this->contentResponsibleID;
    }

    /**
     * Sets a new contentResponsibleID
     *
     * @param string $contentResponsibleID
     * @return self
     */
    public function setContentResponsibleID($contentResponsibleID)
    {
        $this->contentResponsibleID = $contentResponsibleID;
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

