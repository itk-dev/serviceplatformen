<?php

namespace WwwGs1Dk\Gs1Standarder\Identifikation\GlnGlobalLocationNumber\GlobalLocationNumber;

/**
 * Class representing GlobalLocationNumberAType
 */
class GlobalLocationNumberAType
{
    /**
     * @var int $globalLocationNumber
     */
    private $globalLocationNumber = null;

    /**
     * @var string $location
     */
    private $location = null;

    /**
     * Gets as globalLocationNumber
     *
     * @return int
     */
    public function getGlobalLocationNumber()
    {
        return $this->globalLocationNumber;
    }

    /**
     * Sets a new globalLocationNumber
     *
     * @param int $globalLocationNumber
     * @return self
     */
    public function setGlobalLocationNumber($globalLocationNumber)
    {
        $this->globalLocationNumber = $globalLocationNumber;
        return $this;
    }

    /**
     * Gets as location
     *
     * @return string
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Sets a new location
     *
     * @param string $location
     * @return self
     */
    public function setLocation($location)
    {
        $this->location = $location;
        return $this;
    }
}

