<?php

namespace Digitaliseringskataloget\SF1500\Organisation6\Klassifikationsystem;

use Digitaliseringskataloget\Sagdok3_0_0\BasicOutputType;

/**
 * Class representing ImportOutputElementType
 *
 *
 * XSD Type: ImportOutputElementType
 */
class ImportOutputElementType extends BasicOutputType
{
    /**
     * @var string $uUIDIdentifikator
     */
    private $uUIDIdentifikator = null;

    /**
     * @var string $objektType
     */
    private $objektType = null;

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
     * Gets as objektType
     *
     * @return string
     */
    public function getObjektType()
    {
        return $this->objektType;
    }

    /**
     * Sets a new objektType
     *
     * @param string $objektType
     * @return self
     */
    public function setObjektType($objektType)
    {
        $this->objektType = $objektType;
        return $this;
    }
}

