<?php

namespace DigitalPost\MeMo\ReplyData;

/**
 * Class representing ReplyDataAType
 */
class ReplyDataAType
{
    /**
     * @var string $messageID
     */
    private $messageID = null;

    /**
     * @var string $messageUUID
     */
    private $messageUUID = null;

    /**
     * @var string $replyUUID
     */
    private $replyUUID = null;

    /**
     * @var string $senderID
     */
    private $senderID = null;

    /**
     * @var string $recipientID
     */
    private $recipientID = null;

    /**
     * @var string $caseID
     */
    private $caseID = null;

    /**
     * @var string $contactPointID
     */
    private $contactPointID = null;

    /**
     * @var string $generatingSystemID
     */
    private $generatingSystemID = null;

    /**
     * @var string $comment
     */
    private $comment = null;

    /**
     * @var \DigitalPost\MeMo\AdditionalReplyData[] $additionalReplyData
     */
    private $additionalReplyData = [
        
    ];

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
     * Gets as replyUUID
     *
     * @return string
     */
    public function getReplyUUID()
    {
        return $this->replyUUID;
    }

    /**
     * Sets a new replyUUID
     *
     * @param string $replyUUID
     * @return self
     */
    public function setReplyUUID($replyUUID)
    {
        $this->replyUUID = $replyUUID;
        return $this;
    }

    /**
     * Gets as senderID
     *
     * @return string
     */
    public function getSenderID()
    {
        return $this->senderID;
    }

    /**
     * Sets a new senderID
     *
     * @param string $senderID
     * @return self
     */
    public function setSenderID($senderID)
    {
        $this->senderID = $senderID;
        return $this;
    }

    /**
     * Gets as recipientID
     *
     * @return string
     */
    public function getRecipientID()
    {
        return $this->recipientID;
    }

    /**
     * Sets a new recipientID
     *
     * @param string $recipientID
     * @return self
     */
    public function setRecipientID($recipientID)
    {
        $this->recipientID = $recipientID;
        return $this;
    }

    /**
     * Gets as caseID
     *
     * @return string
     */
    public function getCaseID()
    {
        return $this->caseID;
    }

    /**
     * Sets a new caseID
     *
     * @param string $caseID
     * @return self
     */
    public function setCaseID($caseID)
    {
        $this->caseID = $caseID;
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
     * Gets as generatingSystemID
     *
     * @return string
     */
    public function getGeneratingSystemID()
    {
        return $this->generatingSystemID;
    }

    /**
     * Sets a new generatingSystemID
     *
     * @param string $generatingSystemID
     * @return self
     */
    public function setGeneratingSystemID($generatingSystemID)
    {
        $this->generatingSystemID = $generatingSystemID;
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

    /**
     * Adds as additionalReplyData
     *
     * @return self
     * @param \DigitalPost\MeMo\AdditionalReplyData $additionalReplyData
     */
    public function addToAdditionalReplyData(\DigitalPost\MeMo\AdditionalReplyData $additionalReplyData)
    {
        $this->additionalReplyData[] = $additionalReplyData;
        return $this;
    }

    /**
     * isset additionalReplyData
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAdditionalReplyData($index)
    {
        return isset($this->additionalReplyData[$index]);
    }

    /**
     * unset additionalReplyData
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAdditionalReplyData($index)
    {
        unset($this->additionalReplyData[$index]);
    }

    /**
     * Gets as additionalReplyData
     *
     * @return \DigitalPost\MeMo\AdditionalReplyData[]
     */
    public function getAdditionalReplyData()
    {
        return $this->additionalReplyData;
    }

    /**
     * Sets a new additionalReplyData
     *
     * @param \DigitalPost\MeMo\AdditionalReplyData[] $additionalReplyData
     * @return self
     */
    public function setAdditionalReplyData(array $additionalReplyData = null)
    {
        $this->additionalReplyData = $additionalReplyData;
        return $this;
    }
}

