<?php

namespace DigitalPost\MeMo\EMail;

/**
 * Class representing EMailAType
 */
class EMailAType
{
    /**
     * @var string $emailAddress
     */
    private $emailAddress = null;

    /**
     * @var string $relatedAgent
     */
    private $relatedAgent = null;

    /**
     * Gets as emailAddress
     *
     * @return string
     */
    public function getEmailAddress()
    {
        return $this->emailAddress;
    }

    /**
     * Sets a new emailAddress
     *
     * @param string $emailAddress
     * @return self
     */
    public function setEmailAddress($emailAddress)
    {
        $this->emailAddress = $emailAddress;
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

