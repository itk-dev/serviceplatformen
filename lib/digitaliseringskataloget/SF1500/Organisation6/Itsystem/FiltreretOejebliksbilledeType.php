<?php

namespace Digitaliseringskataloget\SF1500\Organisation6\Itsystem;

/**
 * Class representing FiltreretOejebliksbilledeType
 *
 *
 * XSD Type: FiltreretOejebliksbilledeType
 */
class FiltreretOejebliksbilledeType
{
    /**
     * @var \Digitaliseringskataloget\Sagdok3_0_0\SagDokObjektType $objektType
     */
    private $objektType = null;

    /**
     * @var \Digitaliseringskataloget\SF1500\Organisation6\Itsystem\RegistreringType[] $registrering
     */
    private $registrering = [
        
    ];

    /**
     * Gets as objektType
     *
     * @return \Digitaliseringskataloget\Sagdok3_0_0\SagDokObjektType
     */
    public function getObjektType()
    {
        return $this->objektType;
    }

    /**
     * Sets a new objektType
     *
     * @param \Digitaliseringskataloget\Sagdok3_0_0\SagDokObjektType $objektType
     * @return self
     */
    public function setObjektType(\Digitaliseringskataloget\Sagdok3_0_0\SagDokObjektType $objektType)
    {
        $this->objektType = $objektType;
        return $this;
    }

    /**
     * Adds as registrering
     *
     * @return self
     * @param \Digitaliseringskataloget\SF1500\Organisation6\Itsystem\RegistreringType $registrering
     */
    public function addToRegistrering(\Digitaliseringskataloget\SF1500\Organisation6\Itsystem\RegistreringType $registrering)
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
     * @return \Digitaliseringskataloget\SF1500\Organisation6\Itsystem\RegistreringType[]
     */
    public function getRegistrering()
    {
        return $this->registrering;
    }

    /**
     * Sets a new registrering
     *
     * @param \Digitaliseringskataloget\SF1500\Organisation6\Itsystem\RegistreringType[] $registrering
     * @return self
     */
    public function setRegistrering(array $registrering = null)
    {
        $this->registrering = $registrering;
        return $this;
    }
}

