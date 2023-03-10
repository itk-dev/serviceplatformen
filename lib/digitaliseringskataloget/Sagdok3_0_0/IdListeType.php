<?php

namespace Digitaliseringskataloget\Sagdok3_0_0;

/**
 * Class representing IdListeType
 *
 *
 * XSD Type: IdListeType
 */
class IdListeType
{
    /**
     * @var string[] $uUIDIdentifikator
     */
    private $uUIDIdentifikator = [
        
    ];

    /**
     * Adds as uUIDIdentifikator
     *
     * @return self
     * @param string $uUIDIdentifikator
     */
    public function addToUUIDIdentifikator($uUIDIdentifikator)
    {
        $this->uUIDIdentifikator[] = $uUIDIdentifikator;
        return $this;
    }

    /**
     * isset uUIDIdentifikator
     *
     * @param int|string $index
     * @return bool
     */
    public function issetUUIDIdentifikator($index)
    {
        return isset($this->uUIDIdentifikator[$index]);
    }

    /**
     * unset uUIDIdentifikator
     *
     * @param int|string $index
     * @return void
     */
    public function unsetUUIDIdentifikator($index)
    {
        unset($this->uUIDIdentifikator[$index]);
    }

    /**
     * Gets as uUIDIdentifikator
     *
     * @return string[]
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
    public function setUUIDIdentifikator(array $uUIDIdentifikator = null)
    {
        $this->uUIDIdentifikator = $uUIDIdentifikator;
        return $this;
    }
}

