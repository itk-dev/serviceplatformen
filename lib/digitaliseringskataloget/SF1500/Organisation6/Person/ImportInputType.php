<?php

namespace Digitaliseringskataloget\SF1500\Organisation6\Person;

/**
 * Class representing ImportInputType
 *
 *
 * XSD Type: ImportInputType
 */
class ImportInputType
{
    /**
     * @var \Digitaliseringskataloget\SF1500\Organisation6\Person\Person $person
     */
    private $person = null;

    /**
     * Gets as person
     *
     * @return \Digitaliseringskataloget\SF1500\Organisation6\Person\Person
     */
    public function getPerson()
    {
        return $this->person;
    }

    /**
     * Sets a new person
     *
     * @param \Digitaliseringskataloget\SF1500\Organisation6\Person\Person $person
     * @return self
     */
    public function setPerson(\Digitaliseringskataloget\SF1500\Organisation6\Person\Person $person)
    {
        $this->person = $person;
        return $this;
    }
}

