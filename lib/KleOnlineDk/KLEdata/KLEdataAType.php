<?php

namespace KleOnlineDk\KLEdata;

/**
 * Class representing KLEdataAType
 */
class KLEdataAType
{
    /**
     * @var string $subjectKey
     */
    private $subjectKey = null;

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
     * Gets as subjectKey
     *
     * @return string
     */
    public function getSubjectKey()
    {
        return $this->subjectKey;
    }

    /**
     * Sets a new subjectKey
     *
     * @param string $subjectKey
     * @return self
     */
    public function setSubjectKey($subjectKey)
    {
        $this->subjectKey = $subjectKey;
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

