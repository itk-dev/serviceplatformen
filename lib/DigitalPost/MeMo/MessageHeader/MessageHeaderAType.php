<?php

namespace DigitalPost\MeMo\MessageHeader;

/**
 * Class representing MessageHeaderAType
 */
class MessageHeaderAType
{
    /**
     * @var string $messageType
     */
    private $messageType = null;

    /**
     * @var string $messageUUID
     */
    private $messageUUID = null;

    /**
     * @var string $messageID
     */
    private $messageID = null;

    /**
     * @var string $messageCode
     */
    private $messageCode = null;

    /**
     * @var string $label
     */
    private $label = null;

    /**
     * @var string $notification
     */
    private $notification = null;

    /**
     * @var string $additionalNotification
     */
    private $additionalNotification = null;

    /**
     * @var bool $reply
     */
    private $reply = null;

    /**
     * @var \DateTime $replyByDateTime
     */
    private $replyByDateTime = null;

    /**
     * @var \DateTime $doNotDeliverUntilDate
     */
    private $doNotDeliverUntilDate = null;

    /**
     * @var bool $mandatory
     */
    private $mandatory = null;

    /**
     * @var bool $legalNotification
     */
    private $legalNotification = null;

    /**
     * @var string $postType
     */
    private $postType = null;

    /**
     * @var \DigitalPost\MeMo\Sender $sender
     */
    private $sender = null;

    /**
     * @var \DigitalPost\MeMo\Recipient $recipient
     */
    private $recipient = null;

    /**
     * @var \DigitalPost\MeMo\ContentData $contentData
     */
    private $contentData = null;

    /**
     * @var \DigitalPost\MeMo\ForwardData $forwardData
     */
    private $forwardData = null;

    /**
     * @var \DigitalPost\MeMo\ReplyData[] $replyData
     */
    private $replyData = [
        
    ];

    /**
     * Gets as messageType
     *
     * @return string
     */
    public function getMessageType()
    {
        return $this->messageType;
    }

    /**
     * Sets a new messageType
     *
     * @param string $messageType
     * @return self
     */
    public function setMessageType($messageType)
    {
        $this->messageType = $messageType;
        return $this;
    }

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
     * Gets as messageID
     *
     * @return string
     */
    public function getMessageID()
    {
        return $this->messageID;
    }

    /**
     * Sets a new messageID
     *
     * @param string $messageID
     * @return self
     */
    public function setMessageID($messageID)
    {
        $this->messageID = $messageID;
        return $this;
    }

    /**
     * Gets as messageCode
     *
     * @return string
     */
    public function getMessageCode()
    {
        return $this->messageCode;
    }

    /**
     * Sets a new messageCode
     *
     * @param string $messageCode
     * @return self
     */
    public function setMessageCode($messageCode)
    {
        $this->messageCode = $messageCode;
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
     * Gets as notification
     *
     * @return string
     */
    public function getNotification()
    {
        return $this->notification;
    }

    /**
     * Sets a new notification
     *
     * @param string $notification
     * @return self
     */
    public function setNotification($notification)
    {
        $this->notification = $notification;
        return $this;
    }

    /**
     * Gets as additionalNotification
     *
     * @return string
     */
    public function getAdditionalNotification()
    {
        return $this->additionalNotification;
    }

    /**
     * Sets a new additionalNotification
     *
     * @param string $additionalNotification
     * @return self
     */
    public function setAdditionalNotification($additionalNotification)
    {
        $this->additionalNotification = $additionalNotification;
        return $this;
    }

    /**
     * Gets as reply
     *
     * @return bool
     */
    public function getReply()
    {
        return $this->reply;
    }

    /**
     * Sets a new reply
     *
     * @param bool $reply
     * @return self
     */
    public function setReply($reply)
    {
        $this->reply = $reply;
        return $this;
    }

    /**
     * Gets as replyByDateTime
     *
     * @return \DateTime
     */
    public function getReplyByDateTime()
    {
        return $this->replyByDateTime;
    }

    /**
     * Sets a new replyByDateTime
     *
     * @param \DateTime $replyByDateTime
     * @return self
     */
    public function setReplyByDateTime(\DateTime $replyByDateTime = null)
    {
        $this->replyByDateTime = $replyByDateTime;
        return $this;
    }

    /**
     * Gets as doNotDeliverUntilDate
     *
     * @return \DateTime
     */
    public function getDoNotDeliverUntilDate()
    {
        return $this->doNotDeliverUntilDate;
    }

    /**
     * Sets a new doNotDeliverUntilDate
     *
     * @param \DateTime $doNotDeliverUntilDate
     * @return self
     */
    public function setDoNotDeliverUntilDate(?\DateTime $doNotDeliverUntilDate = null)
    {
        $this->doNotDeliverUntilDate = $doNotDeliverUntilDate;
        return $this;
    }

    /**
     * Gets as mandatory
     *
     * @return bool
     */
    public function getMandatory()
    {
        return $this->mandatory;
    }

    /**
     * Sets a new mandatory
     *
     * @param bool $mandatory
     * @return self
     */
    public function setMandatory($mandatory)
    {
        $this->mandatory = $mandatory;
        return $this;
    }

    /**
     * Gets as legalNotification
     *
     * @return bool
     */
    public function getLegalNotification()
    {
        return $this->legalNotification;
    }

    /**
     * Sets a new legalNotification
     *
     * @param bool $legalNotification
     * @return self
     */
    public function setLegalNotification($legalNotification)
    {
        $this->legalNotification = $legalNotification;
        return $this;
    }

    /**
     * Gets as postType
     *
     * @return string
     */
    public function getPostType()
    {
        return $this->postType;
    }

    /**
     * Sets a new postType
     *
     * @param string $postType
     * @return self
     */
    public function setPostType($postType)
    {
        $this->postType = $postType;
        return $this;
    }

    /**
     * Gets as sender
     *
     * @return \DigitalPost\MeMo\Sender
     */
    public function getSender()
    {
        return $this->sender;
    }

    /**
     * Sets a new sender
     *
     * @param \DigitalPost\MeMo\Sender $sender
     * @return self
     */
    public function setSender(\DigitalPost\MeMo\Sender $sender)
    {
        $this->sender = $sender;
        return $this;
    }

    /**
     * Gets as recipient
     *
     * @return \DigitalPost\MeMo\Recipient
     */
    public function getRecipient()
    {
        return $this->recipient;
    }

    /**
     * Sets a new recipient
     *
     * @param \DigitalPost\MeMo\Recipient $recipient
     * @return self
     */
    public function setRecipient(\DigitalPost\MeMo\Recipient $recipient)
    {
        $this->recipient = $recipient;
        return $this;
    }

    /**
     * Gets as contentData
     *
     * @return \DigitalPost\MeMo\ContentData
     */
    public function getContentData()
    {
        return $this->contentData;
    }

    /**
     * Sets a new contentData
     *
     * @param \DigitalPost\MeMo\ContentData $contentData
     * @return self
     */
    public function setContentData(?\DigitalPost\MeMo\ContentData $contentData = null)
    {
        $this->contentData = $contentData;
        return $this;
    }

    /**
     * Gets as forwardData
     *
     * @return \DigitalPost\MeMo\ForwardData
     */
    public function getForwardData()
    {
        return $this->forwardData;
    }

    /**
     * Sets a new forwardData
     *
     * @param \DigitalPost\MeMo\ForwardData $forwardData
     * @return self
     */
    public function setForwardData(?\DigitalPost\MeMo\ForwardData $forwardData = null)
    {
        $this->forwardData = $forwardData;
        return $this;
    }

    /**
     * Adds as replyData
     *
     * @return self
     * @param \DigitalPost\MeMo\ReplyData $replyData
     */
    public function addToReplyData(\DigitalPost\MeMo\ReplyData $replyData)
    {
        $this->replyData[] = $replyData;
        return $this;
    }

    /**
     * isset replyData
     *
     * @param int|string $index
     * @return bool
     */
    public function issetReplyData($index)
    {
        return isset($this->replyData[$index]);
    }

    /**
     * unset replyData
     *
     * @param int|string $index
     * @return void
     */
    public function unsetReplyData($index)
    {
        unset($this->replyData[$index]);
    }

    /**
     * Gets as replyData
     *
     * @return \DigitalPost\MeMo\ReplyData[]
     */
    public function getReplyData()
    {
        return $this->replyData;
    }

    /**
     * Sets a new replyData
     *
     * @param \DigitalPost\MeMo\ReplyData[] $replyData
     * @return self
     */
    public function setReplyData(array $replyData = null)
    {
        $this->replyData = $replyData;
        return $this;
    }
}

