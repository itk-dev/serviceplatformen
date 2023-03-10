<?php

namespace Digitaliseringskataloget\Sagdok3_0_0;

/**
 * Class representing UnikIdType
 *
 *
 * XSD Type: UnikIdType
 */
class UnikIdType
{
    /**
     * @var string $uUIDIdentifikator
     */
    private $uUIDIdentifikator = null;

    /**
     * @var string $uRNIdentifikator
     */
    private $uRNIdentifikator = null;

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

    /**
     * Gets as uRNIdentifikator
     *
     * @return string
     */
    public function getURNIdentifikator()
    {
        return $this->uRNIdentifikator;
    }

    /**
     * Sets a new uRNIdentifikator
     *
     * @param string $uRNIdentifikator
     * @return self
     */
    public function setURNIdentifikator($uRNIdentifikator)
    {
        $this->uRNIdentifikator = $uRNIdentifikator;
        return $this;
    }
}

