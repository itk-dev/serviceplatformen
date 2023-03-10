<?php

namespace Digitaliseringskataloget\SF1500\Organisation6\Klasse;

/**
 * Class representing TilstandListeType
 *
 *
 * XSD Type: TilstandListeType
 */
class TilstandListeType
{
    /**
     * @var \Digitaliseringskataloget\SF1500\Organisation6\Klasse\PubliceretStatus[] $publiceretStatus
     */
    private $publiceretStatus = [
        
    ];

    /**
     * Adds as publiceretStatus
     *
     * @return self
     * @param \Digitaliseringskataloget\SF1500\Organisation6\Klasse\PubliceretStatus $publiceretStatus
     */
    public function addToPubliceretStatus(\Digitaliseringskataloget\SF1500\Organisation6\Klasse\PubliceretStatus $publiceretStatus)
    {
        $this->publiceretStatus[] = $publiceretStatus;
        return $this;
    }

    /**
     * isset publiceretStatus
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPubliceretStatus($index)
    {
        return isset($this->publiceretStatus[$index]);
    }

    /**
     * unset publiceretStatus
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPubliceretStatus($index)
    {
        unset($this->publiceretStatus[$index]);
    }

    /**
     * Gets as publiceretStatus
     *
     * @return \Digitaliseringskataloget\SF1500\Organisation6\Klasse\PubliceretStatus[]
     */
    public function getPubliceretStatus()
    {
        return $this->publiceretStatus;
    }

    /**
     * Sets a new publiceretStatus
     *
     * @param \Digitaliseringskataloget\SF1500\Organisation6\Klasse\PubliceretStatus[] $publiceretStatus
     * @return self
     */
    public function setPubliceretStatus(array $publiceretStatus = null)
    {
        $this->publiceretStatus = $publiceretStatus;
        return $this;
    }
}

