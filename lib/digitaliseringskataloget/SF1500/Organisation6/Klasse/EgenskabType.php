<?php

namespace Digitaliseringskataloget\SF1500\Organisation6\Klasse;

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
     * @var string $beskrivelseTekst
     */
    private $beskrivelseTekst = null;

    /**
     * @var string $eksempelTekst
     */
    private $eksempelTekst = null;

    /**
     * @var string $omfangTekst
     */
    private $omfangTekst = null;

    /**
     * @var string $titelTekst
     */
    private $titelTekst = null;

    /**
     * @var string $retskildeTekst
     */
    private $retskildeTekst = null;

    /**
     * @var string $aendringsnotatTekst
     */
    private $aendringsnotatTekst = null;

    /**
     * @var \Digitaliseringskataloget\SF1500\Organisation6\Klasse\Soegeord[] $soegeord
     */
    private $soegeord = [
        
    ];

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
     * Gets as eksempelTekst
     *
     * @return string
     */
    public function getEksempelTekst()
    {
        return $this->eksempelTekst;
    }

    /**
     * Sets a new eksempelTekst
     *
     * @param string $eksempelTekst
     * @return self
     */
    public function setEksempelTekst($eksempelTekst)
    {
        $this->eksempelTekst = $eksempelTekst;
        return $this;
    }

    /**
     * Gets as omfangTekst
     *
     * @return string
     */
    public function getOmfangTekst()
    {
        return $this->omfangTekst;
    }

    /**
     * Sets a new omfangTekst
     *
     * @param string $omfangTekst
     * @return self
     */
    public function setOmfangTekst($omfangTekst)
    {
        $this->omfangTekst = $omfangTekst;
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
     * Gets as retskildeTekst
     *
     * @return string
     */
    public function getRetskildeTekst()
    {
        return $this->retskildeTekst;
    }

    /**
     * Sets a new retskildeTekst
     *
     * @param string $retskildeTekst
     * @return self
     */
    public function setRetskildeTekst($retskildeTekst)
    {
        $this->retskildeTekst = $retskildeTekst;
        return $this;
    }

    /**
     * Gets as aendringsnotatTekst
     *
     * @return string
     */
    public function getAendringsnotatTekst()
    {
        return $this->aendringsnotatTekst;
    }

    /**
     * Sets a new aendringsnotatTekst
     *
     * @param string $aendringsnotatTekst
     * @return self
     */
    public function setAendringsnotatTekst($aendringsnotatTekst)
    {
        $this->aendringsnotatTekst = $aendringsnotatTekst;
        return $this;
    }

    /**
     * Adds as soegeord
     *
     * @return self
     * @param \Digitaliseringskataloget\SF1500\Organisation6\Klasse\Soegeord $soegeord
     */
    public function addToSoegeord(\Digitaliseringskataloget\SF1500\Organisation6\Klasse\Soegeord $soegeord)
    {
        $this->soegeord[] = $soegeord;
        return $this;
    }

    /**
     * isset soegeord
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSoegeord($index)
    {
        return isset($this->soegeord[$index]);
    }

    /**
     * unset soegeord
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSoegeord($index)
    {
        unset($this->soegeord[$index]);
    }

    /**
     * Gets as soegeord
     *
     * @return \Digitaliseringskataloget\SF1500\Organisation6\Klasse\Soegeord[]
     */
    public function getSoegeord()
    {
        return $this->soegeord;
    }

    /**
     * Sets a new soegeord
     *
     * @param \Digitaliseringskataloget\SF1500\Organisation6\Klasse\Soegeord[] $soegeord
     * @return self
     */
    public function setSoegeord(array $soegeord = null)
    {
        $this->soegeord = $soegeord;
        return $this;
    }
}

