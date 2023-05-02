<?php

namespace Digitaliseringskataloget\Sagdok3_0_0;

/**
 * Class representing FlerRelationType
 *
 *
 * XSD Type: FlerRelationType
 */
class FlerRelationType
{
    /**
     * @var \Digitaliseringskataloget\Sagdok3_0_0\Virkning $virkning
     */
    private $virkning = null;

    /**
     * @var \Digitaliseringskataloget\Sagdok3_0_0\ReferenceID $referenceID
     */
    private $referenceID = null;

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

