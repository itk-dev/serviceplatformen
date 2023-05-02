<?php

namespace Digitaliseringskataloget\SF1500\Organisation6\Klasse;

/**
 * Class representing SoegeordType
 *
 *
 * XSD Type: SoegeordType
 */
class SoegeordType
{
    /**
     * @var string $soegeordIdentifikator
     */
    private $soegeordIdentifikator = null;

    /**
     * @var string $beskrivelseTekst
     */
    private $beskrivelseTekst = null;

    /**
     * @var string $soegeordKategoriTekst
     */
    private $soegeordKategoriTekst = null;

    /**
     * Gets as soegeordIdentifikator
     *
     * @return string
     */
    public function getSoegeordIdentifikator()
    {
        return $this->soegeordIdentifikator;
    }

    /**
     * Sets a new soegeordIdentifikator
     *
     * @param string $soegeordIdentifikator
     * @return self
     */
    public function setSoegeordIdentifikator($soegeordIdentifikator)
    {
        $this->soegeordIdentifikator = $soegeordIdentifikator;
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
     * Gets as soegeordKategoriTekst
     *
     * @return string
     */
    public function getSoegeordKategoriTekst()
    {
        return $this->soegeordKategoriTekst;
    }

    /**
     * Sets a new soegeordKategoriTekst
     *
     * @param string $soegeordKategoriTekst
     * @return self
     */
    public function setSoegeordKategoriTekst($soegeordKategoriTekst)
    {
        $this->soegeordKategoriTekst = $soegeordKategoriTekst;
        return $this;
    }
}

