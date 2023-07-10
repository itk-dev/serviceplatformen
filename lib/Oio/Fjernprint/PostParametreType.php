<?php

namespace Oio\Fjernprint;

/**
 * Class representing PostParametreType
 *
 *
 * XSD Type: PostParametreType
 */
class PostParametreType
{
    /**
     * @var string $postKategoriKode
     */
    private $postKategoriKode = null;

    /**
     * @var int $allokeringsIdentifikator
     */
    private $allokeringsIdentifikator = null;

    /**
     * @var bool $returposthaandteringHosLeverandoerIndikator
     */
    private $returposthaandteringHosLeverandoerIndikator = null;

    /**
     * @var bool $informationVedAdresseAendringIndikator
     */
    private $informationVedAdresseAendringIndikator = null;

    /**
     * @var int $sideKvantitet
     */
    private $sideKvantitet = null;

    /**
     * Gets as postKategoriKode
     *
     * @return string
     */
    public function getPostKategoriKode()
    {
        return $this->postKategoriKode;
    }

    /**
     * Sets a new postKategoriKode
     *
     * @param string $postKategoriKode
     * @return self
     */
    public function setPostKategoriKode($postKategoriKode)
    {
        $this->postKategoriKode = $postKategoriKode;
        return $this;
    }

    /**
     * Gets as allokeringsIdentifikator
     *
     * @return int
     */
    public function getAllokeringsIdentifikator()
    {
        return $this->allokeringsIdentifikator;
    }

    /**
     * Sets a new allokeringsIdentifikator
     *
     * @param int $allokeringsIdentifikator
     * @return self
     */
    public function setAllokeringsIdentifikator($allokeringsIdentifikator)
    {
        $this->allokeringsIdentifikator = $allokeringsIdentifikator;
        return $this;
    }

    /**
     * Gets as returposthaandteringHosLeverandoerIndikator
     *
     * @return bool
     */
    public function getReturposthaandteringHosLeverandoerIndikator()
    {
        return $this->returposthaandteringHosLeverandoerIndikator;
    }

    /**
     * Sets a new returposthaandteringHosLeverandoerIndikator
     *
     * @param bool $returposthaandteringHosLeverandoerIndikator
     * @return self
     */
    public function setReturposthaandteringHosLeverandoerIndikator($returposthaandteringHosLeverandoerIndikator)
    {
        $this->returposthaandteringHosLeverandoerIndikator = $returposthaandteringHosLeverandoerIndikator;
        return $this;
    }

    /**
     * Gets as informationVedAdresseAendringIndikator
     *
     * @return bool
     */
    public function getInformationVedAdresseAendringIndikator()
    {
        return $this->informationVedAdresseAendringIndikator;
    }

    /**
     * Sets a new informationVedAdresseAendringIndikator
     *
     * @param bool $informationVedAdresseAendringIndikator
     * @return self
     */
    public function setInformationVedAdresseAendringIndikator($informationVedAdresseAendringIndikator)
    {
        $this->informationVedAdresseAendringIndikator = $informationVedAdresseAendringIndikator;
        return $this;
    }

    /**
     * Gets as sideKvantitet
     *
     * @return int
     */
    public function getSideKvantitet()
    {
        return $this->sideKvantitet;
    }

    /**
     * Sets a new sideKvantitet
     *
     * @param int $sideKvantitet
     * @return self
     */
    public function setSideKvantitet($sideKvantitet)
    {
        $this->sideKvantitet = $sideKvantitet;
        return $this;
    }
}

