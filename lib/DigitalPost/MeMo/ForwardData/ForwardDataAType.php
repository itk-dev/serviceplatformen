<?php

namespace DigitalPost\MeMo\ForwardData;

/**
 * Class representing ForwardDataAType
 */
class ForwardDataAType
{
    /**
     * @var string $messageUUID
     */
    private $messageUUID = null;

    /**
     * @var \DateTime $originalMessageDateTime
     */
    private $originalMessageDateTime = null;

    /**
     * @var string $originalSender
     */
    private $originalSender = null;

    /**
     * @var string $originalContentResponsible
     */
    private $originalContentResponsible = null;

    /**
     * @var string $contactPointID
     */
    private $contactPointID = null;

    /**
     * @var string $comment
     */
    private $comment = null;

    /**
     * Gets as messageUUID
     *
     * @return string
     */
    public function getMessageUUID()
    {
        return $this->messageUUID;
    }

    /**
     * Sets a new messageUUID
     *
     * @param string $messageUUID
     * @return self
     */
    public function setMessageUUID($messageUUID)
    {
        $this->messageUUID = $messageUUID;
        return $this;
    }

    /**
     * Gets as originalMessageDateTime
     *
     * @return \DateTime
     */
    public function getOriginalMessageDateTime()
    {
        return $this->originalMessageDateTime;
    }

    /**
     * Sets a new originalMessageDateTime
     *
     * @param \DateTime $originalMessageDateTime
     * @return self
     */
    public function setOriginalMessageDateTime(\DateTime $originalMessageDateTime)
    {
        $this->originalMessageDateTime = $originalMessageDateTime;
        return $this;
    }

    /**
     * Gets as originalSender
     *
     * @return string
     */
    public function getOriginalSender()
    {
        return $this->originalSender;
    }

    /**
     * Sets a new originalSender
     *
     * @param string $originalSender
     * @return self
     */
    public function setOriginalSender($originalSender)
    {
        $this->originalSender = $originalSender;
        return $this;
    }

    /**
     * Gets as originalContentResponsible
     *
     * @return string
     */
    public function getOriginalContentResponsible()
    {
        return $this->originalContentResponsible;
    }

    /**
     * Sets a new originalContentResponsible
     *
     * @param string $originalContentResponsible
     * @return self
     */
    public function setOriginalContentResponsible($originalContentResponsible)
    {
        $this->originalContentResponsible = $originalContentResponsible;
        return $this;
    }

    /**
     * Gets as contactPointID
     *
     * @return string
     */
    public function getContactPointID()
    {
        return $this->contactPointID;
    }

    /**
     * Sets a new contactPointID
     *
     * @param string $contactPointID
     * @return self
     */
    public function setContactPointID($contactPointID)
    {
        $this->contactPointID = $contactPointID;
        return $this;
    }

    /**
     * Gets as comment
     *
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Sets a new comment
     *
     * @param string $comment
     * @return self
     */
    public function setComment($comment)
    {
        $this->comment = $comment;
        return $this;
    }
}

