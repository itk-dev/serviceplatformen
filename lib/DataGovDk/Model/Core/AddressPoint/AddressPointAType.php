<?php

namespace DataGovDk\Model\Core\AddressPoint;

/**
 * Class representing AddressPointAType
 */
class AddressPointAType
{
    /**
     * @var string $geographicEastingMeasure
     */
    private $geographicEastingMeasure = null;

    /**
     * @var string $geographicNorthingMeasure
     */
    private $geographicNorthingMeasure = null;

    /**
     * @var string $geographicHeightMeasure
     */
    private $geographicHeightMeasure = null;

    /**
     * Gets as geographicEastingMeasure
     *
     * @return string
     */
    public function getGeographicEastingMeasure()
    {
        return $this->geographicEastingMeasure;
    }

    /**
     * Sets a new geographicEastingMeasure
     *
     * @param string $geographicEastingMeasure
     * @return self
     */
    public function setGeographicEastingMeasure($geographicEastingMeasure)
    {
        $this->geographicEastingMeasure = $geographicEastingMeasure;
        return $this;
    }

    /**
     * Gets as geographicNorthingMeasure
     *
     * @return string
     */
    public function getGeographicNorthingMeasure()
    {
        return $this->geographicNorthingMeasure;
    }

    /**
     * Sets a new geographicNorthingMeasure
     *
     * @param string $geographicNorthingMeasure
     * @return self
     */
    public function setGeographicNorthingMeasure($geographicNorthingMeasure)
    {
        $this->geographicNorthingMeasure = $geographicNorthingMeasure;
        return $this;
    }

    /**
     * Gets as geographicHeightMeasure
     *
     * @return string
     */
    public function getGeographicHeightMeasure()
    {
        return $this->geographicHeightMeasure;
    }

    /**
     * Sets a new geographicHeightMeasure
     *
     * @param string $geographicHeightMeasure
     * @return self
     */
    public function setGeographicHeightMeasure($geographicHeightMeasure)
    {
        $this->geographicHeightMeasure = $geographicHeightMeasure;
        return $this;
    }
}

