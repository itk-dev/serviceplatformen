<?php

namespace DigitalPost\MeMo\Action;

/**
 * Class representing ActionAType
 */
class ActionAType
{
    /**
     * @var string $label
     */
    private $label = null;

    /**
     * @var string $actionCode
     */
    private $actionCode = null;

    /**
     * @var \DateTime $startDateTime
     */
    private $startDateTime = null;

    /**
     * @var \DateTime $endDateTime
     */
    private $endDateTime = null;

    /**
     * @var \DigitalPost\MeMo\Reservation $reservation
     */
    private $reservation = null;

    /**
     * @var \DigitalPost\MeMo\EntryPoint $entryPoint
     */
    private $entryPoint = null;

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
     * Gets as actionCode
     *
     * @return string
     */
    public function getActionCode()
    {
        return $this->actionCode;
    }

    /**
     * Sets a new actionCode
     *
     * @param string $actionCode
     * @return self
     */
    public function setActionCode($actionCode)
    {
        $this->actionCode = $actionCode;
        return $this;
    }

    /**
     * Gets as startDateTime
     *
     * @return \DateTime
     */
    public function getStartDateTime()
    {
        return $this->startDateTime;
    }

    /**
     * Sets a new startDateTime
     *
     * @param \DateTime $startDateTime
     * @return self
     */
    public function setStartDateTime(\DateTime $startDateTime = null)
    {
        $this->startDateTime = $startDateTime;
        return $this;
    }

    /**
     * Gets as endDateTime
     *
     * @return \DateTime
     */
    public function getEndDateTime()
    {
        return $this->endDateTime;
    }

    /**
     * Sets a new endDateTime
     *
     * @param \DateTime $endDateTime
     * @return self
     */
    public function setEndDateTime(\DateTime $endDateTime = null)
    {
        $this->endDateTime = $endDateTime;
        return $this;
    }

    /**
     * Gets as reservation
     *
     * @return \DigitalPost\MeMo\Reservation
     */
    public function getReservation()
    {
        return $this->reservation;
    }

    /**
     * Sets a new reservation
     *
     * @param \DigitalPost\MeMo\Reservation $reservation
     * @return self
     */
    public function setReservation(?\DigitalPost\MeMo\Reservation $reservation = null)
    {
        $this->reservation = $reservation;
        return $this;
    }

    /**
     * Gets as entryPoint
     *
     * @return \DigitalPost\MeMo\EntryPoint
     */
    public function getEntryPoint()
    {
        return $this->entryPoint;
    }

    /**
     * Sets a new entryPoint
     *
     * @param \DigitalPost\MeMo\EntryPoint $entryPoint
     * @return self
     */
    public function setEntryPoint(?\DigitalPost\MeMo\EntryPoint $entryPoint = null)
    {
        $this->entryPoint = $entryPoint;
        return $this;
    }
}

