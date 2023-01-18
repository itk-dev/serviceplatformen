<?php

namespace DigitalPost\MeMo\EntryPoint;

/**
 * Class representing EntryPointAType
 */
class EntryPointAType
{
    /**
     * @var string $url
     */
    private $url = null;

    /**
     * Gets as url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Sets a new url
     *
     * @param string $url
     * @return self
     */
    public function setUrl($url)
    {
        $this->url = $url;
        return $this;
    }
}

