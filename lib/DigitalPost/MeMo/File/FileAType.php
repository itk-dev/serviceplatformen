<?php

namespace DigitalPost\MeMo\File;

/**
 * Class representing FileAType
 */
class FileAType
{
    /**
     * @var string $encodingFormat
     */
    private $encodingFormat = null;

    /**
     * @var string $filename
     */
    private $filename = null;

    /**
     * @var string $language
     */
    private $language = null;

    /**
     * @var string $content
     */
    private $content = null;

    /**
     * Gets as encodingFormat
     *
     * @return string
     */
    public function getEncodingFormat()
    {
        return $this->encodingFormat;
    }

    /**
     * Sets a new encodingFormat
     *
     * @param string $encodingFormat
     * @return self
     */
    public function setEncodingFormat($encodingFormat)
    {
        $this->encodingFormat = $encodingFormat;
        return $this;
    }

    /**
     * Gets as filename
     *
     * @return string
     */
    public function getFilename()
    {
        return $this->filename;
    }

    /**
     * Sets a new filename
     *
     * @param string $filename
     * @return self
     */
    public function setFilename($filename)
    {
        $this->filename = $filename;
        return $this;
    }

    /**
     * Gets as language
     *
     * @return string
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Sets a new language
     *
     * @param string $language
     * @return self
     */
    public function setLanguage($language)
    {
        $this->language = $language;
        return $this;
    }

    /**
     * Gets as content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Sets a new content
     *
     * @param string $content
     * @return self
     */
    public function setContent($content)
    {
        $this->content = $content;
        return $this;
    }
}

