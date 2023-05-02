<?php

namespace Digitaliseringskataloget\SF1500\Organisation6\Klassifikationsystem;

/**
 * Class representing KlasserOutputType
 *
 *
 * XSD Type: KlasserOutputType
 */
class KlasserOutputType
{
    /**
     * @var \Digitaliseringskataloget\SF1500\Organisation6\Klasse\FiltreretOejebliksbilledeType[] $filtreretOejebliksbillede
     */
    private $filtreretOejebliksbillede = [
        
    ];

    /**
     * Adds as filtreretOejebliksbillede
     *
     * @return self
     * @param \Digitaliseringskataloget\SF1500\Organisation6\Klasse\FiltreretOejebliksbilledeType $filtreretOejebliksbillede
     */
    public function addToFiltreretOejebliksbillede(\Digitaliseringskataloget\SF1500\Organisation6\Klasse\FiltreretOejebliksbilledeType $filtreretOejebliksbillede)
    {
        $this->filtreretOejebliksbillede[] = $filtreretOejebliksbillede;
        return $this;
    }

    /**
     * isset filtreretOejebliksbillede
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFiltreretOejebliksbillede($index)
    {
        return isset($this->filtreretOejebliksbillede[$index]);
    }

    /**
     * unset filtreretOejebliksbillede
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFiltreretOejebliksbillede($index)
    {
        unset($this->filtreretOejebliksbillede[$index]);
    }

    /**
     * Gets as filtreretOejebliksbillede
     *
     * @return \Digitaliseringskataloget\SF1500\Organisation6\Klasse\FiltreretOejebliksbilledeType[]
     */
    public function getFiltreretOejebliksbillede()
    {
        return $this->filtreretOejebliksbillede;
    }

    /**
     * Sets a new filtreretOejebliksbillede
     *
     * @param \Digitaliseringskataloget\SF1500\Organisation6\Klasse\FiltreretOejebliksbilledeType[] $filtreretOejebliksbillede
     * @return self
     */
    public function setFiltreretOejebliksbillede(array $filtreretOejebliksbillede = null)
    {
        $this->filtreretOejebliksbillede = $filtreretOejebliksbillede;
        return $this;
    }
}

