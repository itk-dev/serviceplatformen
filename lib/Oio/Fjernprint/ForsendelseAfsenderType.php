<?php

namespace Oio\Fjernprint;

/**
 * Class representing ForsendelseAfsenderType
 *
 *
 * XSD Type: ForsendelseAfsenderType
 */
class ForsendelseAfsenderType
{
    /**
     * @var \Oio\Fjernprint\AfsenderAdresse $afsenderAdresse
     */
    private $afsenderAdresse = null;

    /**
     * Gets as afsenderAdresse
     *
     * @return \Oio\Fjernprint\AfsenderAdresse
     */
    public function getAfsenderAdresse()
    {
        return $this->afsenderAdresse;
    }

    /**
     * Sets a new afsenderAdresse
     *
     * @param \Oio\Fjernprint\AfsenderAdresse $afsenderAdresse
     * @return self
     */
    public function setAfsenderAdresse(?\Oio\Fjernprint\AfsenderAdresse $afsenderAdresse = null)
    {
        $this->afsenderAdresse = $afsenderAdresse;
        return $this;
    }
}

