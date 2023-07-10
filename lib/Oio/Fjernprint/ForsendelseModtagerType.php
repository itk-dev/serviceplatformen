<?php

namespace Oio\Fjernprint;

/**
 * Class representing ForsendelseModtagerType
 *
 *
 * XSD Type: ForsendelseModtagerType
 */
class ForsendelseModtagerType
{
    /**
     * @var \Oio\Dkal\AfsendelseModtager $afsendelseModtager
     */
    private $afsendelseModtager = null;

    /**
     * @var \Oio\Fjernprint\ModtagerAdresse $modtagerAdresse
     */
    private $modtagerAdresse = null;

    /**
     * Gets as afsendelseModtager
     *
     * @return \Oio\Dkal\AfsendelseModtager
     */
    public function getAfsendelseModtager()
    {
        return $this->afsendelseModtager;
    }

    /**
     * Sets a new afsendelseModtager
     *
     * @param \Oio\Dkal\AfsendelseModtager $afsendelseModtager
     * @return self
     */
    public function setAfsendelseModtager(?\Oio\Dkal\AfsendelseModtager $afsendelseModtager = null)
    {
        $this->afsendelseModtager = $afsendelseModtager;
        return $this;
    }

    /**
     * Gets as modtagerAdresse
     *
     * @return \Oio\Fjernprint\ModtagerAdresse
     */
    public function getModtagerAdresse()
    {
        return $this->modtagerAdresse;
    }

    /**
     * Sets a new modtagerAdresse
     *
     * @param \Oio\Fjernprint\ModtagerAdresse $modtagerAdresse
     * @return self
     */
    public function setModtagerAdresse(?\Oio\Fjernprint\ModtagerAdresse $modtagerAdresse = null)
    {
        $this->modtagerAdresse = $modtagerAdresse;
        return $this;
    }
}

