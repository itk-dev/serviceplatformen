<?php

namespace Oio\Ebxml;

/**
 * Class representing CountryIdentificationCodeType
 *
 * The country code based on the 4 diffent schemes.
 * Landeidentifikations kode baseret på de 4 forskellige formater.
 * XSD Type: CountryIdentificationCodeType
 */
class CountryIdentificationCodeType
{
    /**
     * @var string $__value
     */
    private $__value = null;

    /**
     * @var string $scheme
     */
    private $scheme = null;

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

    /**
     * Gets as scheme
     *
     * @return string
     */
    public function getScheme()
    {
        return $this->scheme;
    }

    /**
     * Sets a new scheme
     *
     * @param string $scheme
     * @return self
     */
    public function setScheme($scheme)
    {
        $this->scheme = $scheme;
        return $this;
    }
}

