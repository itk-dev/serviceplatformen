<?php

namespace Oio\Fjernprint;

/**
 * Class representing DokumentParametreType
 *
 *
 * XSD Type: DokumentParametreType
 */
class DokumentParametreType
{
    /**
     * @var string $titelTekst
     */
    private $titelTekst = null;

    /**
     * @var string $uUIDIdentifikator
     */
    private $uUIDIdentifikator = null;

    /**
     * @var \DateTime $brevDato
     */
    private $brevDato = null;

    /**
     * @var \Oio\Fjernprint\MeddelelsesFormatObjekt $meddelelsesFormatObjekt
     */
    private $meddelelsesFormatObjekt = null;

    /**
     * Gets as titelTekst
     *
     * @return string
     */
    public function getTitelTekst()
    {
        return $this->titelTekst;
    }

    /**
     * Sets a new titelTekst
     *
     * @param string $titelTekst
     * @return self
     */
    public function setTitelTekst($titelTekst)
    {
        $this->titelTekst = $titelTekst;
        return $this;
    }

    /**
     * Gets as uUIDIdentifikator
     *
     * @return string
     */
    public function getUUIDIdentifikator()
    {
        return $this->uUIDIdentifikator;
    }

    /**
     * Sets a new uUIDIdentifikator
     *
     * @param string $uUIDIdentifikator
     * @return self
     */
    public function setUUIDIdentifikator($uUIDIdentifikator)
    {
        $this->uUIDIdentifikator = $uUIDIdentifikator;
        return $this;
    }

    /**
     * Gets as brevDato
     *
     * @return \DateTime
     */
    public function getBrevDato()
    {
        return $this->brevDato;
    }

    /**
     * Sets a new brevDato
     *
     * @param \DateTime $brevDato
     * @return self
     */
    public function setBrevDato(?\DateTime $brevDato = null)
    {
        $this->brevDato = $brevDato;
        return $this;
    }

    /**
     * Gets as meddelelsesFormatObjekt
     *
     * @return \Oio\Fjernprint\MeddelelsesFormatObjekt
     */
    public function getMeddelelsesFormatObjekt()
    {
        return $this->meddelelsesFormatObjekt;
    }

    /**
     * Sets a new meddelelsesFormatObjekt
     *
     * @param \Oio\Fjernprint\MeddelelsesFormatObjekt $meddelelsesFormatObjekt
     * @return self
     */
    public function setMeddelelsesFormatObjekt(?\Oio\Fjernprint\MeddelelsesFormatObjekt $meddelelsesFormatObjekt = null)
    {
        $this->meddelelsesFormatObjekt = $meddelelsesFormatObjekt;
        return $this;
    }
}

