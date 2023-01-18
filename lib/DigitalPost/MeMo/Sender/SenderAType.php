<?php

namespace DigitalPost\MeMo\Sender;

/**
 * Class representing SenderAType
 */
class SenderAType
{
    /**
     * @var string $senderID
     */
    private $senderID = null;

    /**
     * @var string $idType
     */
    private $idType = null;

    /**
     * @var string $idTypeLabel
     */
    private $idTypeLabel = null;

    /**
     * @var string $label
     */
    private $label = null;

    /**
     * @var \DigitalPost\MeMo\AttentionData $attentionData
     */
    private $attentionData = null;

    /**
     * @var \DigitalPost\MeMo\ContactPoint $contactPoint
     */
    private $contactPoint = null;

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
     * Gets as idType
     *
     * @return string
     */
    public function getIdType()
    {
        return $this->idType;
    }

    /**
     * Sets a new idType
     *
     * @param string $idType
     * @return self
     */
    public function setIdType($idType)
    {
        $this->idType = $idType;
        return $this;
    }

    /**
     * Gets as idTypeLabel
     *
     * @return string
     */
    public function getIdTypeLabel()
    {
        return $this->idTypeLabel;
    }

    /**
     * Sets a new idTypeLabel
     *
     * @param string $idTypeLabel
     * @return self
     */
    public function setIdTypeLabel($idTypeLabel)
    {
        $this->idTypeLabel = $idTypeLabel;
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
     * Gets as attentionData
     *
     * @return \DigitalPost\MeMo\AttentionData
     */
    public function getAttentionData()
    {
        return $this->attentionData;
    }

    /**
     * Sets a new attentionData
     *
     * @param \DigitalPost\MeMo\AttentionData $attentionData
     * @return self
     */
    public function setAttentionData(?\DigitalPost\MeMo\AttentionData $attentionData = null)
    {
        $this->attentionData = $attentionData;
        return $this;
    }

    /**
     * Gets as contactPoint
     *
     * @return \DigitalPost\MeMo\ContactPoint
     */
    public function getContactPoint()
    {
        return $this->contactPoint;
    }

    /**
     * Sets a new contactPoint
     *
     * @param \DigitalPost\MeMo\ContactPoint $contactPoint
     * @return self
     */
    public function setContactPoint(?\DigitalPost\MeMo\ContactPoint $contactPoint = null)
    {
        $this->contactPoint = $contactPoint;
        return $this;
    }
}

