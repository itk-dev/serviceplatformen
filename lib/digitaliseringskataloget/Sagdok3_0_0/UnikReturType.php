<?php

namespace Digitaliseringskataloget\Sagdok3_0_0;

/**
 * Class representing UnikReturType
 *
 *
 * XSD Type: UnikReturType
 */
class UnikReturType extends StandardReturType
{
    /**
     * @var string $type
     */
    private $type = null;

    /**
     * @var string $uUIDIdentifikator
     */
    private $uUIDIdentifikator = null;

    /**
     * Gets as type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * @param string $type
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as uUIDIdentifikator
     *
     * @return string
     */
    public function getUUIDIdentifikator()
    {
        return $this->uUIDIdentifikator;
    }

    /**
     * Sets a new uUIDIdentifikator
     *
     * @param string $uUIDIdentifikator
     * @return self
     */
    public function setUUIDIdentifikator($uUIDIdentifikator)
    {
        $this->uUIDIdentifikator = $uUIDIdentifikator;
        return $this;
    }
}

