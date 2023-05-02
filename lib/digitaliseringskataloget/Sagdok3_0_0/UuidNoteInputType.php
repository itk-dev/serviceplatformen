<?php

namespace Digitaliseringskataloget\Sagdok3_0_0;

/**
 * Class representing UuidNoteInputType
 *
 *
 * XSD Type: UuidNoteInputType
 */
class UuidNoteInputType
{
    /**
     * @var string $uUIDIdentifikator
     */
    private $uUIDIdentifikator = null;

    /**
     * @var string $noteTekst
     */
    private $noteTekst = null;

    /**
     * Gets as uUIDIdentifikator
     *
     * @return string
     */
    public function getUUIDIdentifikator()
    {
        return $this->uUIDIdentifikator;
    }

    /**
     * Sets a new uUIDIdentifikator
     *
     * @param string $uUIDIdentifikator
     * @return self
     */
    public function setUUIDIdentifikator($uUIDIdentifikator)
    {
        $this->uUIDIdentifikator = $uUIDIdentifikator;
        return $this;
    }

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

