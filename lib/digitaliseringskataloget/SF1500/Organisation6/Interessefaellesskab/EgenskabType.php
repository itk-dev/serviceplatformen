<?php

namespace Digitaliseringskataloget\SF1500\Organisation6\Interessefaellesskab;

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
     * @var string $interessefaellesskabNavn
     */
    private $interessefaellesskabNavn = null;

    /**
     * @var string $interessefaellesskabTypeTekst
     */
    private $interessefaellesskabTypeTekst = null;

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
     * Gets as interessefaellesskabNavn
     *
     * @return string
     */
    public function getInteressefaellesskabNavn()
    {
        return $this->interessefaellesskabNavn;
    }

    /**
     * Sets a new interessefaellesskabNavn
     *
     * @param string $interessefaellesskabNavn
     * @return self
     */
    public function setInteressefaellesskabNavn($interessefaellesskabNavn)
    {
        $this->interessefaellesskabNavn = $interessefaellesskabNavn;
        return $this;
    }

    /**
     * Gets as interessefaellesskabTypeTekst
     *
     * @return string
     */
    public function getInteressefaellesskabTypeTekst()
    {
        return $this->interessefaellesskabTypeTekst;
    }

    /**
     * Sets a new interessefaellesskabTypeTekst
     *
     * @param string $interessefaellesskabTypeTekst
     * @return self
     */
    public function setInteressefaellesskabTypeTekst($interessefaellesskabTypeTekst)
    {
        $this->interessefaellesskabTypeTekst = $interessefaellesskabTypeTekst;
        return $this;
    }
}

