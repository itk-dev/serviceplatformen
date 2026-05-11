<?php

namespace Digitaliseringskataloget\Sftp;

/**
 * Class representing ReceiptType
 *
 *
 * XSD Type: ReceiptType
 */
class ReceiptType
{
    /**
     * @var string $message
     */
    private $message = null;

    /**
     * Gets as message
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Sets a new message
     *
     * @param string $message
     * @return self
     */
    public function setMessage($message)
    {
        $this->message = $message;
        return $this;
    }
}

