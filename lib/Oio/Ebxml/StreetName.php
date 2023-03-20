<?php

namespace Oio\Ebxml;

/**
 * Class representing StreetName
 *
 * The approved name of a road, a street, a square, a path and the like. Further more street names can be connected to other particularly limited areas like garden associations or summer residence areas without road network, large commercial or institutional areas with a large number of buildings, smaller islands without road network, larger sporting facilities and the like.
 */
class StreetName
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

