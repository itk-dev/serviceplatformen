<?php

namespace Oio\Fjernprint;

/**
 * Class representing TransaktionsParametreIType
 *
 *
 * XSD Type: TransaktionsParametreIType
 */
class TransaktionsParametreIType
{
    /**
     * @var \DateTime $transaktionsDatoTid
     */
    private $transaktionsDatoTid = null;

    /**
     * @var string $masseForsendelseIdentifikator
     */
    private $masseForsendelseIdentifikator = null;

    /**
     * @var string $kvitteringsTypeKode
     */
    private $kvitteringsTypeKode = null;

    /**
     * @var string $kvitteringsEmail
     */
    private $kvitteringsEmail = null;

    /**
     * Gets as transaktionsDatoTid
     *
     * @return \DateTime
     */
    public function getTransaktionsDatoTid()
    {
        return $this->transaktionsDatoTid;
    }

    /**
     * Sets a new transaktionsDatoTid
     *
     * @param \DateTime $transaktionsDatoTid
     * @return self
     */
    public function setTransaktionsDatoTid(?\DateTime $transaktionsDatoTid = null)
    {
        $this->transaktionsDatoTid = $transaktionsDatoTid;
        return $this;
    }

    /**
     * Gets as masseForsendelseIdentifikator
     *
     * @return string
     */
    public function getMasseForsendelseIdentifikator()
    {
        return $this->masseForsendelseIdentifikator;
    }

    /**
     * Sets a new masseForsendelseIdentifikator
     *
     * @param string $masseForsendelseIdentifikator
     * @return self
     */
    public function setMasseForsendelseIdentifikator($masseForsendelseIdentifikator)
    {
        $this->masseForsendelseIdentifikator = $masseForsendelseIdentifikator;
        return $this;
    }

    /**
     * Gets as kvitteringsTypeKode
     *
     * @return string
     */
    public function getKvitteringsTypeKode()
    {
        return $this->kvitteringsTypeKode;
    }

    /**
     * Sets a new kvitteringsTypeKode
     *
     * @param string $kvitteringsTypeKode
     * @return self
     */
    public function setKvitteringsTypeKode($kvitteringsTypeKode)
    {
        $this->kvitteringsTypeKode = $kvitteringsTypeKode;
        return $this;
    }

    /**
     * Gets as kvitteringsEmail
     *
     * @return string
     */
    public function getKvitteringsEmail()
    {
        return $this->kvitteringsEmail;
    }

    /**
     * Sets a new kvitteringsEmail
     *
     * @param string $kvitteringsEmail
     * @return self
     */
    public function setKvitteringsEmail($kvitteringsEmail)
    {
        $this->kvitteringsEmail = $kvitteringsEmail;
        return $this;
    }
}

