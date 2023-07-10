<?php

namespace Oio\Fjernprint;

/**
 * Class representing PrintParametreType
 *
 *
 * XSD Type: PrintParametreType
 */
class PrintParametreType
{
    /**
     * @var string $simplexDuplexKode
     */
    private $simplexDuplexKode = null;

    /**
     * @var string $farveSHKode
     */
    private $farveSHKode = null;

    /**
     * @var string $kuvertTypeKode
     */
    private $kuvertTypeKode = null;

    /**
     * Gets as simplexDuplexKode
     *
     * @return string
     */
    public function getSimplexDuplexKode()
    {
        return $this->simplexDuplexKode;
    }

    /**
     * Sets a new simplexDuplexKode
     *
     * @param string $simplexDuplexKode
     * @return self
     */
    public function setSimplexDuplexKode($simplexDuplexKode)
    {
        $this->simplexDuplexKode = $simplexDuplexKode;
        return $this;
    }

    /**
     * Gets as farveSHKode
     *
     * @return string
     */
    public function getFarveSHKode()
    {
        return $this->farveSHKode;
    }

    /**
     * Sets a new farveSHKode
     *
     * @param string $farveSHKode
     * @return self
     */
    public function setFarveSHKode($farveSHKode)
    {
        $this->farveSHKode = $farveSHKode;
        return $this;
    }

    /**
     * Gets as kuvertTypeKode
     *
     * @return string
     */
    public function getKuvertTypeKode()
    {
        return $this->kuvertTypeKode;
    }

    /**
     * Sets a new kuvertTypeKode
     *
     * @param string $kuvertTypeKode
     * @return self
     */
    public function setKuvertTypeKode($kuvertTypeKode)
    {
        $this->kuvertTypeKode = $kuvertTypeKode;
        return $this;
    }
}

