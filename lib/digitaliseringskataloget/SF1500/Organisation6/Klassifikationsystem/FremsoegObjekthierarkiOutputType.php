<?php

namespace Digitaliseringskataloget\SF1500\Organisation6\Klassifikationsystem;

use Digitaliseringskataloget\Sagdok3_0_0\BasicOutputType;

/**
 * Class representing FremsoegObjekthierarkiOutputType
 *
 *
 * XSD Type: FremsoegObjekthierarkiOutputType
 */
class FremsoegObjekthierarkiOutputType extends BasicOutputType
{
    /**
     * @var \Digitaliseringskataloget\SF1500\Organisation6\Klassifikation\FiltreretOejebliksbilledeType[] $klassifikationer
     */
    private $klassifikationer = null;

    /**
     * @var \Digitaliseringskataloget\SF1500\Organisation6\Facet\FiltreretOejebliksbilledeType[] $facetter
     */
    private $facetter = null;

    /**
     * @var \Digitaliseringskataloget\SF1500\Organisation6\Klasse\FiltreretOejebliksbilledeType[] $klasser
     */
    private $klasser = null;

    /**
     * Adds as filtreretOejebliksbillede
     *
     * @return self
     * @param \Digitaliseringskataloget\SF1500\Organisation6\Klassifikation\FiltreretOejebliksbilledeType $filtreretOejebliksbillede
     */
    public function addToKlassifikationer(\Digitaliseringskataloget\SF1500\Organisation6\Klassifikation\FiltreretOejebliksbilledeType $filtreretOejebliksbillede)
    {
        $this->klassifikationer[] = $filtreretOejebliksbillede;
        return $this;
    }

    /**
     * isset klassifikationer
     *
     * @param int|string $index
     * @return bool
     */
    public function issetKlassifikationer($index)
    {
        return isset($this->klassifikationer[$index]);
    }

    /**
     * unset klassifikationer
     *
     * @param int|string $index
     * @return void
     */
    public function unsetKlassifikationer($index)
    {
        unset($this->klassifikationer[$index]);
    }

    /**
     * Gets as klassifikationer
     *
     * @return \Digitaliseringskataloget\SF1500\Organisation6\Klassifikation\FiltreretOejebliksbilledeType[]
     */
    public function getKlassifikationer()
    {
        return $this->klassifikationer;
    }

    /**
     * Sets a new klassifikationer
     *
     * @param \Digitaliseringskataloget\SF1500\Organisation6\Klassifikation\FiltreretOejebliksbilledeType[] $klassifikationer
     * @return self
     */
    public function setKlassifikationer(array $klassifikationer)
    {
        $this->klassifikationer = $klassifikationer;
        return $this;
    }

    /**
     * Adds as filtreretOejebliksbillede
     *
     * @return self
     * @param \Digitaliseringskataloget\SF1500\Organisation6\Facet\FiltreretOejebliksbilledeType $filtreretOejebliksbillede
     */
    public function addToFacetter(\Digitaliseringskataloget\SF1500\Organisation6\Facet\FiltreretOejebliksbilledeType $filtreretOejebliksbillede)
    {
        $this->facetter[] = $filtreretOejebliksbillede;
        return $this;
    }

    /**
     * isset facetter
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFacetter($index)
    {
        return isset($this->facetter[$index]);
    }

    /**
     * unset facetter
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFacetter($index)
    {
        unset($this->facetter[$index]);
    }

    /**
     * Gets as facetter
     *
     * @return \Digitaliseringskataloget\SF1500\Organisation6\Facet\FiltreretOejebliksbilledeType[]
     */
    public function getFacetter()
    {
        return $this->facetter;
    }

    /**
     * Sets a new facetter
     *
     * @param \Digitaliseringskataloget\SF1500\Organisation6\Facet\FiltreretOejebliksbilledeType[] $facetter
     * @return self
     */
    public function setFacetter(array $facetter)
    {
        $this->facetter = $facetter;
        return $this;
    }

    /**
     * Adds as filtreretOejebliksbillede
     *
     * @return self
     * @param \Digitaliseringskataloget\SF1500\Organisation6\Klasse\FiltreretOejebliksbilledeType $filtreretOejebliksbillede
     */
    public function addToKlasser(\Digitaliseringskataloget\SF1500\Organisation6\Klasse\FiltreretOejebliksbilledeType $filtreretOejebliksbillede)
    {
        $this->klasser[] = $filtreretOejebliksbillede;
        return $this;
    }

    /**
     * isset klasser
     *
     * @param int|string $index
     * @return bool
     */
    public function issetKlasser($index)
    {
        return isset($this->klasser[$index]);
    }

    /**
     * unset klasser
     *
     * @param int|string $index
     * @return void
     */
    public function unsetKlasser($index)
    {
        unset($this->klasser[$index]);
    }

    /**
     * Gets as klasser
     *
     * @return \Digitaliseringskataloget\SF1500\Organisation6\Klasse\FiltreretOejebliksbilledeType[]
     */
    public function getKlasser()
    {
        return $this->klasser;
    }

    /**
     * Sets a new klasser
     *
     * @param \Digitaliseringskataloget\SF1500\Organisation6\Klasse\FiltreretOejebliksbilledeType[] $klasser
     * @return self
     */
    public function setKlasser(array $klasser)
    {
        $this->klasser = $klasser;
        return $this;
    }
}

