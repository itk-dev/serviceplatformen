<?php

namespace Oio\Fjernprint;

/**
 * Class representing DigitalPostParametreType
 *
 *
 * XSD Type: DigitalPostParametreType
 */
class DigitalPostParametreType
{
    /**
     * @var \DateTime $afsendelseDatoTid
     */
    private $afsendelseDatoTid = null;

    /**
     * @var int $meddelelseIndholdstypeIdentifikator
     */
    private $meddelelseIndholdstypeIdentifikator = null;

    /**
     * @var string $meddelelseSvarTypeNavn
     */
    private $meddelelseSvarTypeNavn = null;

    /**
     * @var int $meddelelseSvarPostkasseIdentifikator
     */
    private $meddelelseSvarPostkasseIdentifikator = null;

    /**
     * @var int $meddelelseSvarEmneIdentifikator
     */
    private $meddelelseSvarEmneIdentifikator = null;

    /**
     * @var \Oio\Dkal\MeddelelseFESDmetadata $meddelelseFESDmetadata
     */
    private $meddelelseFESDmetadata = null;

    /**
     * @var bool $medsendDokumentRegistreringIndikator
     */
    private $medsendDokumentRegistreringIndikator = null;

    /**
     * Gets as afsendelseDatoTid
     *
     * @return \DateTime
     */
    public function getAfsendelseDatoTid()
    {
        return $this->afsendelseDatoTid;
    }

    /**
     * Sets a new afsendelseDatoTid
     *
     * @param \DateTime $afsendelseDatoTid
     * @return self
     */
    public function setAfsendelseDatoTid(?\DateTime $afsendelseDatoTid = null)
    {
        $this->afsendelseDatoTid = $afsendelseDatoTid;
        return $this;
    }

    /**
     * Gets as meddelelseIndholdstypeIdentifikator
     *
     * @return int
     */
    public function getMeddelelseIndholdstypeIdentifikator()
    {
        return $this->meddelelseIndholdstypeIdentifikator;
    }

    /**
     * Sets a new meddelelseIndholdstypeIdentifikator
     *
     * @param int $meddelelseIndholdstypeIdentifikator
     * @return self
     */
    public function setMeddelelseIndholdstypeIdentifikator($meddelelseIndholdstypeIdentifikator)
    {
        $this->meddelelseIndholdstypeIdentifikator = $meddelelseIndholdstypeIdentifikator;
        return $this;
    }

    /**
     * Gets as meddelelseSvarTypeNavn
     *
     * @return string
     */
    public function getMeddelelseSvarTypeNavn()
    {
        return $this->meddelelseSvarTypeNavn;
    }

    /**
     * Sets a new meddelelseSvarTypeNavn
     *
     * @param string $meddelelseSvarTypeNavn
     * @return self
     */
    public function setMeddelelseSvarTypeNavn($meddelelseSvarTypeNavn)
    {
        $this->meddelelseSvarTypeNavn = $meddelelseSvarTypeNavn;
        return $this;
    }

    /**
     * Gets as meddelelseSvarPostkasseIdentifikator
     *
     * @return int
     */
    public function getMeddelelseSvarPostkasseIdentifikator()
    {
        return $this->meddelelseSvarPostkasseIdentifikator;
    }

    /**
     * Sets a new meddelelseSvarPostkasseIdentifikator
     *
     * @param int $meddelelseSvarPostkasseIdentifikator
     * @return self
     */
    public function setMeddelelseSvarPostkasseIdentifikator($meddelelseSvarPostkasseIdentifikator)
    {
        $this->meddelelseSvarPostkasseIdentifikator = $meddelelseSvarPostkasseIdentifikator;
        return $this;
    }

    /**
     * Gets as meddelelseSvarEmneIdentifikator
     *
     * @return int
     */
    public function getMeddelelseSvarEmneIdentifikator()
    {
        return $this->meddelelseSvarEmneIdentifikator;
    }

    /**
     * Sets a new meddelelseSvarEmneIdentifikator
     *
     * @param int $meddelelseSvarEmneIdentifikator
     * @return self
     */
    public function setMeddelelseSvarEmneIdentifikator($meddelelseSvarEmneIdentifikator)
    {
        $this->meddelelseSvarEmneIdentifikator = $meddelelseSvarEmneIdentifikator;
        return $this;
    }

    /**
     * Gets as meddelelseFESDmetadata
     *
     * @return \Oio\Dkal\MeddelelseFESDmetadata
     */
    public function getMeddelelseFESDmetadata()
    {
        return $this->meddelelseFESDmetadata;
    }

    /**
     * Sets a new meddelelseFESDmetadata
     *
     * @param \Oio\Dkal\MeddelelseFESDmetadata $meddelelseFESDmetadata
     * @return self
     */
    public function setMeddelelseFESDmetadata(?\Oio\Dkal\MeddelelseFESDmetadata $meddelelseFESDmetadata = null)
    {
        $this->meddelelseFESDmetadata = $meddelelseFESDmetadata;
        return $this;
    }

    /**
     * Gets as medsendDokumentRegistreringIndikator
     *
     * @return bool
     */
    public function getMedsendDokumentRegistreringIndikator()
    {
        return $this->medsendDokumentRegistreringIndikator;
    }

    /**
     * Sets a new medsendDokumentRegistreringIndikator
     *
     * @param bool $medsendDokumentRegistreringIndikator
     * @return self
     */
    public function setMedsendDokumentRegistreringIndikator($medsendDokumentRegistreringIndikator)
    {
        $this->medsendDokumentRegistreringIndikator = $medsendDokumentRegistreringIndikator;
        return $this;
    }
}

