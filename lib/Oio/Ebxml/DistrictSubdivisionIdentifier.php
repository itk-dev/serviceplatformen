<?php

namespace Oio\Ebxml;

/**
 * Class representing DistrictSubdivisionIdentifier
 *
 * Name of a village, city or subdivision of a city or district, which is determined as a part of the official address specification for a certain street or specific parts of a street, defined by intervals of street building identifiers (da: house numbers).
 */
class DistrictSubdivisionIdentifier
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

