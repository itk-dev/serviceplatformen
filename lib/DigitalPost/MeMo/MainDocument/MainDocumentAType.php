<?php

namespace DigitalPost\MeMo\MainDocument;

/**
 * Class representing MainDocumentAType
 */
class MainDocumentAType
{
    /**
     * @var string $mainDocumentID
     */
    private $mainDocumentID = null;

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
     * @var \DigitalPost\MeMo\Action[] $action
     */
    private $action = [
        
    ];

    /**
     * Gets as mainDocumentID
     *
     * @return string
     */
    public function getMainDocumentID()
    {
        return $this->mainDocumentID;
    }

    /**
     * Sets a new mainDocumentID
     *
     * @param string $mainDocumentID
     * @return self
     */
    public function setMainDocumentID($mainDocumentID)
    {
        $this->mainDocumentID = $mainDocumentID;
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

    /**
     * Adds as action
     *
     * @return self
     * @param \DigitalPost\MeMo\Action $action
     */
    public function addToAction(\DigitalPost\MeMo\Action $action)
    {
        $this->action[] = $action;
        return $this;
    }

    /**
     * isset action
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAction($index)
    {
        return isset($this->action[$index]);
    }

    /**
     * unset action
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAction($index)
    {
        unset($this->action[$index]);
    }

    /**
     * Gets as action
     *
     * @return \DigitalPost\MeMo\Action[]
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Sets a new action
     *
     * @param \DigitalPost\MeMo\Action[] $action
     * @return self
     */
    public function setAction(array $action = null)
    {
        $this->action = $action;
        return $this;
    }
}

