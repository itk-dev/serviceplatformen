<?php

namespace Oio\Fjernprint;

/**
 * Class representing BilagSamlingType
 *
 *
 * XSD Type: BilagSamlingType
 */
class BilagSamlingType
{
    /**
     * @var \Oio\Fjernprint\Bilag[] $bilag
     */
    private $bilag = [
        
    ];

    /**
     * Adds as bilag
     *
     * @return self
     * @param \Oio\Fjernprint\Bilag $bilag
     */
    public function addToBilag(\Oio\Fjernprint\Bilag $bilag)
    {
        $this->bilag[] = $bilag;
        return $this;
    }

    /**
     * isset bilag
     *
     * @param int|string $index
     * @return bool
     */
    public function issetBilag($index)
    {
        return isset($this->bilag[$index]);
    }

    /**
     * unset bilag
     *
     * @param int|string $index
     * @return void
     */
    public function unsetBilag($index)
    {
        unset($this->bilag[$index]);
    }

    /**
     * Gets as bilag
     *
     * @return \Oio\Fjernprint\Bilag[]
     */
    public function getBilag()
    {
        return $this->bilag;
    }

    /**
     * Sets a new bilag
     *
     * @param \Oio\Fjernprint\Bilag[] $bilag
     * @return self
     */
    public function setBilag(array $bilag)
    {
        $this->bilag = $bilag;
        return $this;
    }
}

