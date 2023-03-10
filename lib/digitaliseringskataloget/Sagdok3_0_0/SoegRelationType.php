<?php

namespace Digitaliseringskataloget\Sagdok3_0_0;

/**
 * Class representing SoegRelationType
 *
 *
 * XSD Type: SoegRelationType
 */
class SoegRelationType
{
    /**
     * @var \Digitaliseringskataloget\Sagdok3_0_0\SoegVirkning $soegVirkning
     */
    private $soegVirkning = null;

    /**
     * @var \Digitaliseringskataloget\Sagdok3_0_0\ReferenceID $referenceID
     */
    private $referenceID = null;

    /**
     * Gets as soegVirkning
     *
     * @return \Digitaliseringskataloget\Sagdok3_0_0\SoegVirkning
     */
    public function getSoegVirkning()
    {
        return $this->soegVirkning;
    }

    /**
     * Sets a new soegVirkning
     *
     * @param \Digitaliseringskataloget\Sagdok3_0_0\SoegVirkning $soegVirkning
     * @return self
     */
    public function setSoegVirkning(?\Digitaliseringskataloget\Sagdok3_0_0\SoegVirkning $soegVirkning = null)
    {
        $this->soegVirkning = $soegVirkning;
        return $this;
    }

    /**
     * Gets as referenceID
     *
     * @return \Digitaliseringskataloget\Sagdok3_0_0\ReferenceID
     */
    public function getReferenceID()
    {
        return $this->referenceID;
    }

    /**
     * Sets a new referenceID
     *
     * @param \Digitaliseringskataloget\Sagdok3_0_0\ReferenceID $referenceID
     * @return self
     */
    public function setReferenceID(?\Digitaliseringskataloget\Sagdok3_0_0\ReferenceID $referenceID = null)
    {
        $this->referenceID = $referenceID;
        return $this;
    }
}

