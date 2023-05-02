<?php

namespace Digitaliseringskataloget\Sagdok3_0_0;

/**
 * Class representing OpretInputType
 *
 *
 * XSD Type: OpretInputType
 */
class OpretInputType
{
    /**
     * @var string $noteTekst
     */
    private $noteTekst = null;

    /**
     * Gets as noteTekst
     *
     * @return string
     */
    public function getNoteTekst()
    {
        return $this->noteTekst;
    }

    /**
     * Sets a new noteTekst
     *
     * @param string $noteTekst
     * @return self
     */
    public function setNoteTekst($noteTekst)
    {
        $this->noteTekst = $noteTekst;
        return $this;
    }
}

