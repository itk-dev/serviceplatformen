<?php

namespace Oio\Ebxml;

/**
 * Class representing DistrictName
 *
 * Declares the name of a postal district in plain text.
 * The field contains 20 positions, which enables it to fit a window envelope
 * together with the postal code and one free position in addition. The postal
 * district is defined by municipalitycode, roadcode, postalcode, housenumber
 * from/to together with a code, which declares whether the roadsection in
 * question contains even or uneven housenumbers.
 */
class DistrictName
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

