<?php

namespace Digitaliseringskataloget\Sagdok3_0_0;

/**
 * Class representing SoegOutputType
 *
 *
 * XSD Type: SoegOutputType
 */
class SoegOutputType
{
    /**
     * @var \Digitaliseringskataloget\Sagdok3_0_0\StandardRetur $standardRetur
     */
    private $standardRetur = null;

    /**
     * @var string[] $idListe
     */
    private $idListe = null;

    /**
     * Gets as standardRetur
     *
     * @return \Digitaliseringskataloget\Sagdok3_0_0\StandardRetur
     */
    public function getStandardRetur()
    {
        return $this->standardRetur;
    }

    /**
     * Sets a new standardRetur
     *
     * @param \Digitaliseringskataloget\Sagdok3_0_0\StandardRetur $standardRetur
     * @return self
     */
    public function setStandardRetur(\Digitaliseringskataloget\Sagdok3_0_0\StandardRetur $standardRetur)
    {
        $this->standardRetur = $standardRetur;
        return $this;
    }

    /**
     * Adds as uUIDIdentifikator
     *
     * @return self
     * @param string $uUIDIdentifikator
     */
    public function addToIdListe($uUIDIdentifikator)
    {
        $this->idListe[] = $uUIDIdentifikator;
        return $this;
    }

    /**
     * isset idListe
     *
     * @param int|string $index
     * @return bool
     */
    public function issetIdListe($index)
    {
        return isset($this->idListe[$index]);
    }

    /**
     * unset idListe
     *
     * @param int|string $index
     * @return void
     */
    public function unsetIdListe($index)
    {
        unset($this->idListe[$index]);
    }

    /**
     * Gets as idListe
     *
     * @return string[]
     */
    public function getIdListe()
    {
        return $this->idListe;
    }

    /**
     * Sets a new idListe
     *
     * @param string $idListe
     * @return self
     */
    public function setIdListe(array $idListe = null)
    {
        $this->idListe = $idListe;
        return $this;
    }
}

