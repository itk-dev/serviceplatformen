<?php

namespace Digitaliseringskataloget\Sagdok3_0_0;

/**
 * Class representing SagDokObjektType
 *
 *
 * XSD Type: SagDokObjektType
 */
class SagDokObjektType
{
    /**
     * @var string $uUIDIdentifikator
     */
    private $uUIDIdentifikator = null;

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

