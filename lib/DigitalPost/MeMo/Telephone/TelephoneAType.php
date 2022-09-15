<?php

namespace DigitalPost\MeMo\Telephone;

/**
 * Class representing TelephoneAType
 */
class TelephoneAType
{
    /**
     * @var string $telephoneNumber
     */
    private $telephoneNumber = null;

    /**
     * @var string $relatedAgent
     */
    private $relatedAgent = null;

    /**
     * Gets as telephoneNumber
     *
     * @return string
     */
    public function getTelephoneNumber()
    {
        return $this->telephoneNumber;
    }

    /**
     * Sets a new telephoneNumber
     *
     * @param string $telephoneNumber
     * @return self
     */
    public function setTelephoneNumber($telephoneNumber)
    {
        $this->telephoneNumber = $telephoneNumber;
        return $this;
    }

    /**
     * Gets as relatedAgent
     *
     * @return string
     */
    public function getRelatedAgent()
    {
        return $this->relatedAgent;
    }

    /**
     * Sets a new relatedAgent
     *
     * @param string $relatedAgent
     * @return self
     */
    public function setRelatedAgent($relatedAgent)
    {
        $this->relatedAgent = $relatedAgent;
        return $this;
    }
}

