<?php

namespace Digitaliseringskataloget\SF1500\Organisation6\Interessefaellesskab;

use Digitaliseringskataloget\Sagdok3_0_0\BasicOutputType;

/**
 * Class representing LaesOutputType
 *
 *
 * XSD Type: LaesOutputType
 */
class LaesOutputType extends BasicOutputType
{
    /**
     * @var \Digitaliseringskataloget\SF1500\Organisation6\Interessefaellesskab\FiltreretOejebliksbilledeType $filtreretOejebliksbillede
     */
    private $filtreretOejebliksbillede = null;

    /**
     * Gets as filtreretOejebliksbillede
     *
     * @return \Digitaliseringskataloget\SF1500\Organisation6\Interessefaellesskab\FiltreretOejebliksbilledeType
     */
    public function getFiltreretOejebliksbillede()
    {
        return $this->filtreretOejebliksbillede;
    }

    /**
     * Sets a new filtreretOejebliksbillede
     *
     * @param \Digitaliseringskataloget\SF1500\Organisation6\Interessefaellesskab\FiltreretOejebliksbilledeType $filtreretOejebliksbillede
     * @return self
     */
    public function setFiltreretOejebliksbillede(?\Digitaliseringskataloget\SF1500\Organisation6\Interessefaellesskab\FiltreretOejebliksbilledeType $filtreretOejebliksbillede = null)
    {
        $this->filtreretOejebliksbillede = $filtreretOejebliksbillede;
        return $this;
    }
}

