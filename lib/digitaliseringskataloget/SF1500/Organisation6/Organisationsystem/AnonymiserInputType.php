<?php

namespace Digitaliseringskataloget\SF1500\Organisation6\Organisationsystem;

/**
 * Class representing AnonymiserInputType
 *
 *
 * XSD Type: AnonymiserInputType
 */
class AnonymiserInputType
{
    /**
     * @var string $personUUID
     */
    private $personUUID = null;

    /**
     * @var string $personCPR
     */
    private $personCPR = null;

    /**
     * Gets as personUUID
     *
     * @return string
     */
    public function getPersonUUID()
    {
        return $this->personUUID;
    }

    /**
     * Sets a new personUUID
     *
     * @param string $personUUID
     * @return self
     */
    public function setPersonUUID($personUUID)
    {
        $this->personUUID = $personUUID;
        return $this;
    }

    /**
     * Gets as personCPR
     *
     * @return string
     */
    public function getPersonCPR()
    {
        return $this->personCPR;
    }

    /**
     * Sets a new personCPR
     *
     * @param string $personCPR
     * @return self
     */
    public function setPersonCPR($personCPR)
    {
        $this->personCPR = $personCPR;
        return $this;
    }
}

