<?php

namespace Digitaliseringskataloget\SF1500\Organisation6\Bruger;

use Digitaliseringskataloget\SF1500\Organisation6\AktoerType;

/**
 * Class representing BrugerType
 *
 *
 * XSD Type: BrugerType
 */
class BrugerType extends AktoerType
{
    /**
     * @var \Digitaliseringskataloget\SF1500\Organisation6\Bruger\Registrering[] $registrering
     */
    private $registrering = [
        
    ];

    /**
     * Adds as registrering
     *
     * @return self
     * @param \Digitaliseringskataloget\SF1500\Organisation6\Bruger\Registrering $registrering
     */
    public function addToRegistrering(\Digitaliseringskataloget\SF1500\Organisation6\Bruger\Registrering $registrering)
    {
        $this->registrering[] = $registrering;
        return $this;
    }

    /**
     * isset registrering
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRegistrering($index)
    {
        return isset($this->registrering[$index]);
    }

    /**
     * unset registrering
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRegistrering($index)
    {
        unset($this->registrering[$index]);
    }

    /**
     * Gets as registrering
     *
     * @return \Digitaliseringskataloget\SF1500\Organisation6\Bruger\Registrering[]
     */
    public function getRegistrering()
    {
        return $this->registrering;
    }

    /**
     * Sets a new registrering
     *
     * @param \Digitaliseringskataloget\SF1500\Organisation6\Bruger\Registrering[] $registrering
     * @return self
     */
    public function setRegistrering(array $registrering)
    {
        $this->registrering = $registrering;
        return $this;
    }
}

