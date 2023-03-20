<?php

namespace Oio\Fjernprint;

/**
 * Class representing KanalUafhaengigeParametreIType
 *
 *
 * XSD Type: KanalUafhaengigeParametreIType
 */
class KanalUafhaengigeParametreIType
{
    /**
     * @var string $enhedTekst
     */
    private $enhedTekst = null;

    /**
     * @var string $brugerNavn
     */
    private $brugerNavn = null;

    /**
     * @var string $konteringsGruppeTekst
     */
    private $konteringsGruppeTekst = null;

    /**
     * @var \Oio\Fjernprint\ForsendelseAfsender $forsendelseAfsender
     */
    private $forsendelseAfsender = null;

    /**
     * @var bool $paatrykAfsenderAdresseIndikator
     */
    private $paatrykAfsenderAdresseIndikator = null;

    /**
     * @var bool $paatrykModtagerAdresseIndikator
     */
    private $paatrykModtagerAdresseIndikator = null;

    /**
     * @var bool $paatrykBrevdatoIndikator
     */
    private $paatrykBrevdatoIndikator = null;

    /**
     * @var string $kanalKode
     */
    private $kanalKode = null;

    /**
     * @var bool $hasteBrevIndikator
     */
    private $hasteBrevIndikator = null;

    /**
     * Gets as enhedTekst
     *
     * @return string
     */
    public function getEnhedTekst()
    {
        return $this->enhedTekst;
    }

    /**
     * Sets a new enhedTekst
     *
     * @param string $enhedTekst
     * @return self
     */
    public function setEnhedTekst($enhedTekst)
    {
        $this->enhedTekst = $enhedTekst;
        return $this;
    }

    /**
     * Gets as brugerNavn
     *
     * @return string
     */
    public function getBrugerNavn()
    {
        return $this->brugerNavn;
    }

    /**
     * Sets a new brugerNavn
     *
     * @param string $brugerNavn
     * @return self
     */
    public function setBrugerNavn($brugerNavn)
    {
        $this->brugerNavn = $brugerNavn;
        return $this;
    }

    /**
     * Gets as konteringsGruppeTekst
     *
     * @return string
     */
    public function getKonteringsGruppeTekst()
    {
        return $this->konteringsGruppeTekst;
    }

    /**
     * Sets a new konteringsGruppeTekst
     *
     * @param string $konteringsGruppeTekst
     * @return self
     */
    public function setKonteringsGruppeTekst($konteringsGruppeTekst)
    {
        $this->konteringsGruppeTekst = $konteringsGruppeTekst;
        return $this;
    }

    /**
     * Gets as forsendelseAfsender
     *
     * @return \Oio\Fjernprint\ForsendelseAfsender
     */
    public function getForsendelseAfsender()
    {
        return $this->forsendelseAfsender;
    }

    /**
     * Sets a new forsendelseAfsender
     *
     * @param \Oio\Fjernprint\ForsendelseAfsender $forsendelseAfsender
     * @return self
     */
    public function setForsendelseAfsender(?\Oio\Fjernprint\ForsendelseAfsender $forsendelseAfsender = null)
    {
        $this->forsendelseAfsender = $forsendelseAfsender;
        return $this;
    }

    /**
     * Gets as paatrykAfsenderAdresseIndikator
     *
     * @return bool
     */
    public function getPaatrykAfsenderAdresseIndikator()
    {
        return $this->paatrykAfsenderAdresseIndikator;
    }

    /**
     * Sets a new paatrykAfsenderAdresseIndikator
     *
     * @param bool $paatrykAfsenderAdresseIndikator
     * @return self
     */
    public function setPaatrykAfsenderAdresseIndikator($paatrykAfsenderAdresseIndikator)
    {
        $this->paatrykAfsenderAdresseIndikator = $paatrykAfsenderAdresseIndikator;
        return $this;
    }

    /**
     * Gets as paatrykModtagerAdresseIndikator
     *
     * @return bool
     */
    public function getPaatrykModtagerAdresseIndikator()
    {
        return $this->paatrykModtagerAdresseIndikator;
    }

    /**
     * Sets a new paatrykModtagerAdresseIndikator
     *
     * @param bool $paatrykModtagerAdresseIndikator
     * @return self
     */
    public function setPaatrykModtagerAdresseIndikator($paatrykModtagerAdresseIndikator)
    {
        $this->paatrykModtagerAdresseIndikator = $paatrykModtagerAdresseIndikator;
        return $this;
    }

    /**
     * Gets as paatrykBrevdatoIndikator
     *
     * @return bool
     */
    public function getPaatrykBrevdatoIndikator()
    {
        return $this->paatrykBrevdatoIndikator;
    }

    /**
     * Sets a new paatrykBrevdatoIndikator
     *
     * @param bool $paatrykBrevdatoIndikator
     * @return self
     */
    public function setPaatrykBrevdatoIndikator($paatrykBrevdatoIndikator)
    {
        $this->paatrykBrevdatoIndikator = $paatrykBrevdatoIndikator;
        return $this;
    }

    /**
     * Gets as kanalKode
     *
     * @return string
     */
    public function getKanalKode()
    {
        return $this->kanalKode;
    }

    /**
     * Sets a new kanalKode
     *
     * @param string $kanalKode
     * @return self
     */
    public function setKanalKode($kanalKode)
    {
        $this->kanalKode = $kanalKode;
        return $this;
    }

    /**
     * Gets as hasteBrevIndikator
     *
     * @return bool
     */
    public function getHasteBrevIndikator()
    {
        return $this->hasteBrevIndikator;
    }

    /**
     * Sets a new hasteBrevIndikator
     *
     * @param bool $hasteBrevIndikator
     * @return self
     */
    public function setHasteBrevIndikator($hasteBrevIndikator)
    {
        $this->hasteBrevIndikator = $hasteBrevIndikator;
        return $this;
    }
}

