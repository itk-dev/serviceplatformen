<?php

namespace Oio\Fjernprint;

/**
 * Class representing ForsendelseIType
 *
 *
 * XSD Type: ForsendelseIType
 */
class ForsendelseIType
{
    /**
     * @var string $afsendelseIdentifikator
     */
    private $afsendelseIdentifikator = null;

    /**
     * @var int $forsendelseTypeIdentifikator
     */
    private $forsendelseTypeIdentifikator = null;

    /**
     * @var \Oio\Fjernprint\ForsendelseModtager $forsendelseModtager
     */
    private $forsendelseModtager = null;

    /**
     * @var string $filformatNavn
     */
    private $filformatNavn = null;

    /**
     * @var string $meddelelseIndholdData
     */
    private $meddelelseIndholdData = null;

    /**
     * @var \Oio\Fjernprint\TransaktionsParametreI $transaktionsParametreI
     */
    private $transaktionsParametreI = null;

    /**
     * @var \Oio\Fjernprint\DokumentParametre $dokumentParametre
     */
    private $dokumentParametre = null;

    /**
     * @var \Oio\Fjernprint\KanalUafhaengigeParametreI $kanalUafhaengigeParametreI
     */
    private $kanalUafhaengigeParametreI = null;

    /**
     * @var \Oio\Fjernprint\PrintParametre $printParametre
     */
    private $printParametre = null;

    /**
     * @var \Oio\Fjernprint\DigitalPostParametre $digitalPostParametre
     */
    private $digitalPostParametre = null;

    /**
     * @var \Oio\Fjernprint\PostParametre $postParametre
     */
    private $postParametre = null;

    /**
     * @var \Oio\Fjernprint\Bilag[] $bilagSamling
     */
    private $bilagSamling = null;

    /**
     * Gets as afsendelseIdentifikator
     *
     * @return string
     */
    public function getAfsendelseIdentifikator()
    {
        return $this->afsendelseIdentifikator;
    }

    /**
     * Sets a new afsendelseIdentifikator
     *
     * @param string $afsendelseIdentifikator
     * @return self
     */
    public function setAfsendelseIdentifikator($afsendelseIdentifikator)
    {
        $this->afsendelseIdentifikator = $afsendelseIdentifikator;
        return $this;
    }

    /**
     * Gets as forsendelseTypeIdentifikator
     *
     * @return int
     */
    public function getForsendelseTypeIdentifikator()
    {
        return $this->forsendelseTypeIdentifikator;
    }

    /**
     * Sets a new forsendelseTypeIdentifikator
     *
     * @param int $forsendelseTypeIdentifikator
     * @return self
     */
    public function setForsendelseTypeIdentifikator($forsendelseTypeIdentifikator)
    {
        $this->forsendelseTypeIdentifikator = $forsendelseTypeIdentifikator;
        return $this;
    }

    /**
     * Gets as forsendelseModtager
     *
     * @return \Oio\Fjernprint\ForsendelseModtager
     */
    public function getForsendelseModtager()
    {
        return $this->forsendelseModtager;
    }

    /**
     * Sets a new forsendelseModtager
     *
     * @param \Oio\Fjernprint\ForsendelseModtager $forsendelseModtager
     * @return self
     */
    public function setForsendelseModtager(?\Oio\Fjernprint\ForsendelseModtager $forsendelseModtager = null)
    {
        $this->forsendelseModtager = $forsendelseModtager;
        return $this;
    }

    /**
     * Gets as filformatNavn
     *
     * @return string
     */
    public function getFilformatNavn()
    {
        return $this->filformatNavn;
    }

    /**
     * Sets a new filformatNavn
     *
     * @param string $filformatNavn
     * @return self
     */
    public function setFilformatNavn($filformatNavn)
    {
        $this->filformatNavn = $filformatNavn;
        return $this;
    }

    /**
     * Gets as meddelelseIndholdData
     *
     * @return string
     */
    public function getMeddelelseIndholdData()
    {
        return $this->meddelelseIndholdData;
    }

    /**
     * Sets a new meddelelseIndholdData
     *
     * @param string $meddelelseIndholdData
     * @return self
     */
    public function setMeddelelseIndholdData($meddelelseIndholdData)
    {
        $this->meddelelseIndholdData = $meddelelseIndholdData;
        return $this;
    }

    /**
     * Gets as transaktionsParametreI
     *
     * @return \Oio\Fjernprint\TransaktionsParametreI
     */
    public function getTransaktionsParametreI()
    {
        return $this->transaktionsParametreI;
    }

    /**
     * Sets a new transaktionsParametreI
     *
     * @param \Oio\Fjernprint\TransaktionsParametreI $transaktionsParametreI
     * @return self
     */
    public function setTransaktionsParametreI(?\Oio\Fjernprint\TransaktionsParametreI $transaktionsParametreI = null)
    {
        $this->transaktionsParametreI = $transaktionsParametreI;
        return $this;
    }

    /**
     * Gets as dokumentParametre
     *
     * @return \Oio\Fjernprint\DokumentParametre
     */
    public function getDokumentParametre()
    {
        return $this->dokumentParametre;
    }

    /**
     * Sets a new dokumentParametre
     *
     * @param \Oio\Fjernprint\DokumentParametre $dokumentParametre
     * @return self
     */
    public function setDokumentParametre(\Oio\Fjernprint\DokumentParametre $dokumentParametre)
    {
        $this->dokumentParametre = $dokumentParametre;
        return $this;
    }

    /**
     * Gets as kanalUafhaengigeParametreI
     *
     * @return \Oio\Fjernprint\KanalUafhaengigeParametreI
     */
    public function getKanalUafhaengigeParametreI()
    {
        return $this->kanalUafhaengigeParametreI;
    }

    /**
     * Sets a new kanalUafhaengigeParametreI
     *
     * @param \Oio\Fjernprint\KanalUafhaengigeParametreI $kanalUafhaengigeParametreI
     * @return self
     */
    public function setKanalUafhaengigeParametreI(?\Oio\Fjernprint\KanalUafhaengigeParametreI $kanalUafhaengigeParametreI = null)
    {
        $this->kanalUafhaengigeParametreI = $kanalUafhaengigeParametreI;
        return $this;
    }

    /**
     * Gets as printParametre
     *
     * @return \Oio\Fjernprint\PrintParametre
     */
    public function getPrintParametre()
    {
        return $this->printParametre;
    }

    /**
     * Sets a new printParametre
     *
     * @param \Oio\Fjernprint\PrintParametre $printParametre
     * @return self
     */
    public function setPrintParametre(?\Oio\Fjernprint\PrintParametre $printParametre = null)
    {
        $this->printParametre = $printParametre;
        return $this;
    }

    /**
     * Gets as digitalPostParametre
     *
     * @return \Oio\Fjernprint\DigitalPostParametre
     */
    public function getDigitalPostParametre()
    {
        return $this->digitalPostParametre;
    }

    /**
     * Sets a new digitalPostParametre
     *
     * @param \Oio\Fjernprint\DigitalPostParametre $digitalPostParametre
     * @return self
     */
    public function setDigitalPostParametre(?\Oio\Fjernprint\DigitalPostParametre $digitalPostParametre = null)
    {
        $this->digitalPostParametre = $digitalPostParametre;
        return $this;
    }

    /**
     * Gets as postParametre
     *
     * @return \Oio\Fjernprint\PostParametre
     */
    public function getPostParametre()
    {
        return $this->postParametre;
    }

    /**
     * Sets a new postParametre
     *
     * @param \Oio\Fjernprint\PostParametre $postParametre
     * @return self
     */
    public function setPostParametre(?\Oio\Fjernprint\PostParametre $postParametre = null)
    {
        $this->postParametre = $postParametre;
        return $this;
    }

    /**
     * Adds as bilag
     *
     * @return self
     * @param \Oio\Fjernprint\Bilag $bilag
     */
    public function addToBilagSamling(\Oio\Fjernprint\Bilag $bilag)
    {
        $this->bilagSamling[] = $bilag;
        return $this;
    }

    /**
     * isset bilagSamling
     *
     * @param int|string $index
     * @return bool
     */
    public function issetBilagSamling($index)
    {
        return isset($this->bilagSamling[$index]);
    }

    /**
     * unset bilagSamling
     *
     * @param int|string $index
     * @return void
     */
    public function unsetBilagSamling($index)
    {
        unset($this->bilagSamling[$index]);
    }

    /**
     * Gets as bilagSamling
     *
     * @return \Oio\Fjernprint\Bilag[]
     */
    public function getBilagSamling()
    {
        return $this->bilagSamling;
    }

    /**
     * Sets a new bilagSamling
     *
     * @param \Oio\Fjernprint\Bilag[] $bilagSamling
     * @return self
     */
    public function setBilagSamling(array $bilagSamling = null)
    {
        $this->bilagSamling = $bilagSamling;
        return $this;
    }
}

