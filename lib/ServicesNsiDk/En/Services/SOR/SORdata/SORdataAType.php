<?php

namespace ServicesNsiDk\En\Services\SOR\SORdata;

/**
 * Class representing SORdataAType
 */
class SORdataAType
{
    /**
     * @var string $sorIdentifier
     */
    private $sorIdentifier = null;

    /**
     * @var string $entryName
     */
    private $entryName = null;

    /**
     * Gets as sorIdentifier
     *
     * @return string
     */
    public function getSorIdentifier()
    {
        return $this->sorIdentifier;
    }

    /**
     * Sets a new sorIdentifier
     *
     * @param string $sorIdentifier
     * @return self
     */
    public function setSorIdentifier($sorIdentifier)
    {
        $this->sorIdentifier = $sorIdentifier;
        return $this;
    }

    /**
     * Gets as entryName
     *
     * @return string
     */
    public function getEntryName()
    {
        return $this->entryName;
    }

    /**
     * Sets a new entryName
     *
     * @param string $entryName
     * @return self
     */
    public function setEntryName($entryName)
    {
        $this->entryName = $entryName;
        return $this;
    }
}

