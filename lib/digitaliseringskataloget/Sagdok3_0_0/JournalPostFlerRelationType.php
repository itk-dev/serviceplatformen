<?php

namespace Digitaliseringskataloget\Sagdok3_0_0;

/**
 * Class representing JournalPostFlerRelationType
 *
 *
 * XSD Type: JournalPostFlerRelationType
 */
class JournalPostFlerRelationType extends NulFlerRelationType
{
    /**
     * @var string $journalPostIdentifikator
     */
    private $journalPostIdentifikator = null;

    /**
     * @var string $titelTekst
     */
    private $titelTekst = null;

    /**
     * @var int $indeksIdentifikator
     */
    private $indeksIdentifikator = null;

    /**
     * @var \Digitaliseringskataloget\Sagdok3_0_0\OffentlighedUndtaget $offentlighedUndtaget
     */
    private $offentlighedUndtaget = null;

    /**
     * @var string $tilhoersforholdKode
     */
    private $tilhoersforholdKode = null;

    /**
     * Gets as journalPostIdentifikator
     *
     * @return string
     */
    public function getJournalPostIdentifikator()
    {
        return $this->journalPostIdentifikator;
    }

    /**
     * Sets a new journalPostIdentifikator
     *
     * @param string $journalPostIdentifikator
     * @return self
     */
    public function setJournalPostIdentifikator($journalPostIdentifikator)
    {
        $this->journalPostIdentifikator = $journalPostIdentifikator;
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
     * Gets as indeksIdentifikator
     *
     * @return int
     */
    public function getIndeksIdentifikator()
    {
        return $this->indeksIdentifikator;
    }

    /**
     * Sets a new indeksIdentifikator
     *
     * @param int $indeksIdentifikator
     * @return self
     */
    public function setIndeksIdentifikator($indeksIdentifikator)
    {
        $this->indeksIdentifikator = $indeksIdentifikator;
        return $this;
    }

    /**
     * Gets as offentlighedUndtaget
     *
     * @return \Digitaliseringskataloget\Sagdok3_0_0\OffentlighedUndtaget
     */
    public function getOffentlighedUndtaget()
    {
        return $this->offentlighedUndtaget;
    }

    /**
     * Sets a new offentlighedUndtaget
     *
     * @param \Digitaliseringskataloget\Sagdok3_0_0\OffentlighedUndtaget $offentlighedUndtaget
     * @return self
     */
    public function setOffentlighedUndtaget(?\Digitaliseringskataloget\Sagdok3_0_0\OffentlighedUndtaget $offentlighedUndtaget = null)
    {
        $this->offentlighedUndtaget = $offentlighedUndtaget;
        return $this;
    }

    /**
     * Gets as tilhoersforholdKode
     *
     * @return string
     */
    public function getTilhoersforholdKode()
    {
        return $this->tilhoersforholdKode;
    }

    /**
     * Sets a new tilhoersforholdKode
     *
     * @param string $tilhoersforholdKode
     * @return self
     */
    public function setTilhoersforholdKode($tilhoersforholdKode)
    {
        $this->tilhoersforholdKode = $tilhoersforholdKode;
        return $this;
    }
}

