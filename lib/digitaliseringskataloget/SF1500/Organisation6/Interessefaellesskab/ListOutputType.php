<?php

namespace Digitaliseringskataloget\SF1500\Organisation6\Interessefaellesskab;

use Digitaliseringskataloget\Sagdok3_0_0\ListOutputType as ListOutputTypeBase;

/**
 * Class representing ListOutputType
 *
 *
 * XSD Type: ListOutputType
 */
class ListOutputType extends ListOutputTypeBase
{
    /**
     * @var \Digitaliseringskataloget\SF1500\Organisation6\Interessefaellesskab\FiltreretOejebliksbilledeType[] $filtreretOejebliksbillede
     */
    private $filtreretOejebliksbillede = [
        
    ];

    /**
     * Adds as filtreretOejebliksbillede
     *
     * @return self
     * @param \Digitaliseringskataloget\SF1500\Organisation6\Interessefaellesskab\FiltreretOejebliksbilledeType $filtreretOejebliksbillede
     */
    public function addToFiltreretOejebliksbillede(\Digitaliseringskataloget\SF1500\Organisation6\Interessefaellesskab\FiltreretOejebliksbilledeType $filtreretOejebliksbillede)
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
     * @return \Digitaliseringskataloget\SF1500\Organisation6\Interessefaellesskab\FiltreretOejebliksbilledeType[]
     */
    public function getFiltreretOejebliksbillede()
    {
        return $this->filtreretOejebliksbillede;
    }

    /**
     * Sets a new filtreretOejebliksbillede
     *
     * @param \Digitaliseringskataloget\SF1500\Organisation6\Interessefaellesskab\FiltreretOejebliksbilledeType[] $filtreretOejebliksbillede
     * @return self
     */
    public function setFiltreretOejebliksbillede(array $filtreretOejebliksbillede = null)
    {
        $this->filtreretOejebliksbillede = $filtreretOejebliksbillede;
        return $this;
    }
}

