<?php

namespace DigitalPost\MeMo\TechnicalDocument;

/**
 * Class representing TechnicalDocumentAType
 */
class TechnicalDocumentAType
{
    /**
     * @var string $technicalDocumentID
     */
    private $technicalDocumentID = null;

    /**
     * @var string $label
     */
    private $label = null;

    /**
     * @var \DigitalPost\MeMo\File[] $file
     */
    private $file = [
        
    ];

    /**
     * Gets as technicalDocumentID
     *
     * @return string
     */
    public function getTechnicalDocumentID()
    {
        return $this->technicalDocumentID;
    }

    /**
     * Sets a new technicalDocumentID
     *
     * @param string $technicalDocumentID
     * @return self
     */
    public function setTechnicalDocumentID($technicalDocumentID)
    {
        $this->technicalDocumentID = $technicalDocumentID;
        return $this;
    }

    /**
     * Gets as label
     *
     * @return string
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * Sets a new label
     *
     * @param string $label
     * @return self
     */
    public function setLabel($label)
    {
        $this->label = $label;
        return $this;
    }

    /**
     * Adds as file
     *
     * @return self
     * @param \DigitalPost\MeMo\File $file
     */
    public function addToFile(\DigitalPost\MeMo\File $file)
    {
        $this->file[] = $file;
        return $this;
    }

    /**
     * isset file
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFile($index)
    {
        return isset($this->file[$index]);
    }

    /**
     * unset file
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFile($index)
    {
        unset($this->file[$index]);
    }

    /**
     * Gets as file
     *
     * @return \DigitalPost\MeMo\File[]
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * Sets a new file
     *
     * @param \DigitalPost\MeMo\File[] $file
     * @return self
     */
    public function setFile(array $file)
    {
        $this->file = $file;
        return $this;
    }
}

