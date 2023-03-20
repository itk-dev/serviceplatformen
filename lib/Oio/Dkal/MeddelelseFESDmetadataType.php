<?php

namespace Oio\Dkal;

/**
 * Class representing MeddelelseFESDmetadataType
 *
 *
 * XSD Type: MeddelelseFESDmetadataType
 */
class MeddelelseFESDmetadataType
{
    /**
     * @var string $fESDdokumentIdentifikator
     */
    private $fESDdokumentIdentifikator = null;

    /**
     * @var string $fESDaktoerIdentifikator
     */
    private $fESDaktoerIdentifikator = null;

    /**
     * @var string $fESDsagIdentifikator
     */
    private $fESDsagIdentifikator = null;

    /**
     * @var string $fESDsagsklassifikationIdentifikator
     */
    private $fESDsagsklassifikationIdentifikator = null;

    /**
     * Gets as fESDdokumentIdentifikator
     *
     * @return string
     */
    public function getFESDdokumentIdentifikator()
    {
        return $this->fESDdokumentIdentifikator;
    }

    /**
     * Sets a new fESDdokumentIdentifikator
     *
     * @param string $fESDdokumentIdentifikator
     * @return self
     */
    public function setFESDdokumentIdentifikator($fESDdokumentIdentifikator)
    {
        $this->fESDdokumentIdentifikator = $fESDdokumentIdentifikator;
        return $this;
    }

    /**
     * Gets as fESDaktoerIdentifikator
     *
     * @return string
     */
    public function getFESDaktoerIdentifikator()
    {
        return $this->fESDaktoerIdentifikator;
    }

    /**
     * Sets a new fESDaktoerIdentifikator
     *
     * @param string $fESDaktoerIdentifikator
     * @return self
     */
    public function setFESDaktoerIdentifikator($fESDaktoerIdentifikator)
    {
        $this->fESDaktoerIdentifikator = $fESDaktoerIdentifikator;
        return $this;
    }

    /**
     * Gets as fESDsagIdentifikator
     *
     * @return string
     */
    public function getFESDsagIdentifikator()
    {
        return $this->fESDsagIdentifikator;
    }

    /**
     * Sets a new fESDsagIdentifikator
     *
     * @param string $fESDsagIdentifikator
     * @return self
     */
    public function setFESDsagIdentifikator($fESDsagIdentifikator)
    {
        $this->fESDsagIdentifikator = $fESDsagIdentifikator;
        return $this;
    }

    /**
     * Gets as fESDsagsklassifikationIdentifikator
     *
     * @return string
     */
    public function getFESDsagsklassifikationIdentifikator()
    {
        return $this->fESDsagsklassifikationIdentifikator;
    }

    /**
     * Sets a new fESDsagsklassifikationIdentifikator
     *
     * @param string $fESDsagsklassifikationIdentifikator
     * @return self
     */
    public function setFESDsagsklassifikationIdentifikator($fESDsagsklassifikationIdentifikator)
    {
        $this->fESDsagsklassifikationIdentifikator = $fESDsagsklassifikationIdentifikator;
        return $this;
    }
}

