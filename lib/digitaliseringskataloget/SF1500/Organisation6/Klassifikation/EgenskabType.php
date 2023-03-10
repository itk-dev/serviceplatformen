<?php

namespace Digitaliseringskataloget\SF1500\Organisation6\Klassifikation;

/**
 * Class representing EgenskabType
 *
 *
 * XSD Type: EgenskabType
 */
class EgenskabType
{
    /**
     * @var \Digitaliseringskataloget\Sagdok3_0_0\Virkning $virkning
     */
    private $virkning = null;

    /**
     * @var string $brugervendtNoegleTekst
     */
    private $brugervendtNoegleTekst = null;

    /**
     * @var string $titelTekst
     */
    private $titelTekst = null;

    /**
     * @var string $beskrivelseTekst
     */
    private $beskrivelseTekst = null;

    /**
     * @var string $kaldenavnTekst
     */
    private $kaldenavnTekst = null;

    /**
     * @var string $ophavsretTekst
     */
    private $ophavsretTekst = null;

    /**
     * Gets as virkning
     *
     * @return \Digitaliseringskataloget\Sagdok3_0_0\Virkning
     */
    public function getVirkning()
    {
        return $this->virkning;
    }

    /**
     * Sets a new virkning
     *
     * @param \Digitaliseringskataloget\Sagdok3_0_0\Virkning $virkning
     * @return self
     */
    public function setVirkning(?\Digitaliseringskataloget\Sagdok3_0_0\Virkning $virkning = null)
    {
        $this->virkning = $virkning;
        return $this;
    }

    /**
     * Gets as brugervendtNoegleTekst
     *
     * @return string
     */
    public function getBrugervendtNoegleTekst()
    {
        return $this->brugervendtNoegleTekst;
    }

    /**
     * Sets a new brugervendtNoegleTekst
     *
     * @param string $brugervendtNoegleTekst
     * @return self
     */
    public function setBrugervendtNoegleTekst($brugervendtNoegleTekst)
    {
        $this->brugervendtNoegleTekst = $brugervendtNoegleTekst;
        return $this;
    }

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
     * Gets as beskrivelseTekst
     *
     * @return string
     */
    public function getBeskrivelseTekst()
    {
        return $this->beskrivelseTekst;
    }

    /**
     * Sets a new beskrivelseTekst
     *
     * @param string $beskrivelseTekst
     * @return self
     */
    public function setBeskrivelseTekst($beskrivelseTekst)
    {
        $this->beskrivelseTekst = $beskrivelseTekst;
        return $this;
    }

    /**
     * Gets as kaldenavnTekst
     *
     * @return string
     */
    public function getKaldenavnTekst()
    {
        return $this->kaldenavnTekst;
    }

    /**
     * Sets a new kaldenavnTekst
     *
     * @param string $kaldenavnTekst
     * @return self
     */
    public function setKaldenavnTekst($kaldenavnTekst)
    {
        $this->kaldenavnTekst = $kaldenavnTekst;
        return $this;
    }

    /**
     * Gets as ophavsretTekst
     *
     * @return string
     */
    public function getOphavsretTekst()
    {
        return $this->ophavsretTekst;
    }

    /**
     * Sets a new ophavsretTekst
     *
     * @param string $ophavsretTekst
     * @return self
     */
    public function setOphavsretTekst($ophavsretTekst)
    {
        $this->ophavsretTekst = $ophavsretTekst;
        return $this;
    }
}

