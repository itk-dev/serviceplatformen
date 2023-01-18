<?php

namespace WwwFormOnlineDk\FORMdata;

/**
 * Class representing FORMdataAType
 */
class FORMdataAType
{
    /**
     * @var string $taskKey
     */
    private $taskKey = null;

    /**
     * @var string $version
     */
    private $version = null;

    /**
     * @var string $activityFacet
     */
    private $activityFacet = null;

    /**
     * @var string $label
     */
    private $label = null;

    /**
     * Gets as taskKey
     *
     * @return string
     */
    public function getTaskKey()
    {
        return $this->taskKey;
    }

    /**
     * Sets a new taskKey
     *
     * @param string $taskKey
     * @return self
     */
    public function setTaskKey($taskKey)
    {
        $this->taskKey = $taskKey;
        return $this;
    }

    /**
     * Gets as version
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Sets a new version
     *
     * @param string $version
     * @return self
     */
    public function setVersion($version)
    {
        $this->version = $version;
        return $this;
    }

    /**
     * Gets as activityFacet
     *
     * @return string
     */
    public function getActivityFacet()
    {
        return $this->activityFacet;
    }

    /**
     * Sets a new activityFacet
     *
     * @param string $activityFacet
     * @return self
     */
    public function setActivityFacet($activityFacet)
    {
        $this->activityFacet = $activityFacet;
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

