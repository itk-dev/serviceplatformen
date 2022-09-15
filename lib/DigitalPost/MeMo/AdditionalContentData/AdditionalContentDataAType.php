<?php

namespace DigitalPost\MeMo\AdditionalContentData;

/**
 * Class representing AdditionalContentDataAType
 */
class AdditionalContentDataAType
{
    /**
     * @var string $contentDataType
     */
    private $contentDataType = null;

    /**
     * @var string $contentDataName
     */
    private $contentDataName = null;

    /**
     * @var string $contentDataValue
     */
    private $contentDataValue = null;

    /**
     * Gets as contentDataType
     *
     * @return string
     */
    public function getContentDataType()
    {
        return $this->contentDataType;
    }

    /**
     * Sets a new contentDataType
     *
     * @param string $contentDataType
     * @return self
     */
    public function setContentDataType($contentDataType)
    {
        $this->contentDataType = $contentDataType;
        return $this;
    }

    /**
     * Gets as contentDataName
     *
     * @return string
     */
    public function getContentDataName()
    {
        return $this->contentDataName;
    }

    /**
     * Sets a new contentDataName
     *
     * @param string $contentDataName
     * @return self
     */
    public function setContentDataName($contentDataName)
    {
        $this->contentDataName = $contentDataName;
        return $this;
    }

    /**
     * Gets as contentDataValue
     *
     * @return string
     */
    public function getContentDataValue()
    {
        return $this->contentDataValue;
    }

    /**
     * Sets a new contentDataValue
     *
     * @param string $contentDataValue
     * @return self
     */
    public function setContentDataValue($contentDataValue)
    {
        $this->contentDataValue = $contentDataValue;
        return $this;
    }
}

