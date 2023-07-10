<?php

namespace Oio\Ebxml;

/**
 * Class representing StreetBuildingIdentifier
 *
 * Numeric identification (da: house number ~ 'husnummer') including an optional letter, which identifies a certain access to a building, a plot/piece of land or a plant etc. based on the named road or street which gives access hereto. The identifier is determined in increasing numerical and letter order along the road, normally with even numbers on the right side and odd numbers on the left side of the road.
 */
class StreetBuildingIdentifier
{
    /**
     * @var string $__value
     */
    private $__value = null;

    /**
     * Construct
     *
     * @param string $value
     */
    public function __construct($value)
    {
        $this->value($value);
    }

    /**
     * Gets or sets the inner value
     *
     * @param string $value
     * @return string
     */
    public function value()
    {
        if ($args = func_get_args()) {
            $this->__value = $args[0];
        }
        return $this->__value;
    }

    /**
     * Gets a string value
     *
     * @return string
     */
    public function __toString()
    {
        return strval($this->__value);
    }
}

