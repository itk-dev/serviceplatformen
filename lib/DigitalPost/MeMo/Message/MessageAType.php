<?php

namespace DigitalPost\MeMo\Message;

/**
 * Class representing MessageAType
 */
class MessageAType
{
    /**
     * @var float $memoVersion
     */
    private $memoVersion = null;

    /**
     * @var string $memoSchVersion
     */
    private $memoSchVersion = null;

    /**
     * @var \DigitalPost\MeMo\MessageHeader $messageHeader
     */
    private $messageHeader = null;

    /**
     * @var \DigitalPost\MeMo\MessageBody $messageBody
     */
    private $messageBody = null;

    /**
     * Gets as memoVersion
     *
     * @return float
     */
    public function getMemoVersion()
    {
        return $this->memoVersion;
    }

    /**
     * Sets a new memoVersion
     *
     * @param float $memoVersion
     * @return self
     */
    public function setMemoVersion($memoVersion)
    {
        $this->memoVersion = $memoVersion;
        return $this;
    }

    /**
     * Gets as memoSchVersion
     *
     * @return string
     */
    public function getMemoSchVersion()
    {
        return $this->memoSchVersion;
    }

    /**
     * Sets a new memoSchVersion
     *
     * @param string $memoSchVersion
     * @return self
     */
    public function setMemoSchVersion($memoSchVersion)
    {
        $this->memoSchVersion = $memoSchVersion;
        return $this;
    }

    /**
     * Gets as messageHeader
     *
     * @return \DigitalPost\MeMo\MessageHeader
     */
    public function getMessageHeader()
    {
        return $this->messageHeader;
    }

    /**
     * Sets a new messageHeader
     *
     * @param \DigitalPost\MeMo\MessageHeader $messageHeader
     * @return self
     */
    public function setMessageHeader(\DigitalPost\MeMo\MessageHeader $messageHeader)
    {
        $this->messageHeader = $messageHeader;
        return $this;
    }

    /**
     * Gets as messageBody
     *
     * @return \DigitalPost\MeMo\MessageBody
     */
    public function getMessageBody()
    {
        return $this->messageBody;
    }

    /**
     * Sets a new messageBody
     *
     * @param \DigitalPost\MeMo\MessageBody $messageBody
     * @return self
     */
    public function setMessageBody(?\DigitalPost\MeMo\MessageBody $messageBody = null)
    {
        $this->messageBody = $messageBody;
        return $this;
    }
}

