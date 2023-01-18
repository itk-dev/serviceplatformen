<?php

namespace DigitalPost\MeMo\Reservation;

/**
 * Class representing ReservationAType
 */
class ReservationAType
{
    /**
     * @var string $description
     */
    private $description = null;

    /**
     * @var string $reservationUUID
     */
    private $reservationUUID = null;

    /**
     * @var string $abstract
     */
    private $abstract = null;

    /**
     * @var string $location
     */
    private $location = null;

    /**
     * @var \DateTime $startDateTime
     */
    private $startDateTime = null;

    /**
     * @var \DateTime $endDateTime
     */
    private $endDateTime = null;

    /**
     * @var string $organizerMail
     */
    private $organizerMail = null;

    /**
     * @var string $organizerName
     */
    private $organizerName = null;

    /**
     * Gets as description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * @param string $description
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Gets as reservationUUID
     *
     * @return string
     */
    public function getReservationUUID()
    {
        return $this->reservationUUID;
    }

    /**
     * Sets a new reservationUUID
     *
     * @param string $reservationUUID
     * @return self
     */
    public function setReservationUUID($reservationUUID)
    {
        $this->reservationUUID = $reservationUUID;
        return $this;
    }

    /**
     * Gets as abstract
     *
     * @return string
     */
    public function getAbstract()
    {
        return $this->abstract;
    }

    /**
     * Sets a new abstract
     *
     * @param string $abstract
     * @return self
     */
    public function setAbstract($abstract)
    {
        $this->abstract = $abstract;
        return $this;
    }

    /**
     * Gets as location
     *
     * @return string
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Sets a new location
     *
     * @param string $location
     * @return self
     */
    public function setLocation($location)
    {
        $this->location = $location;
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
    public function setStartDateTime(\DateTime $startDateTime)
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
    public function setEndDateTime(\DateTime $endDateTime)
    {
        $this->endDateTime = $endDateTime;
        return $this;
    }

    /**
     * Gets as organizerMail
     *
     * @return string
     */
    public function getOrganizerMail()
    {
        return $this->organizerMail;
    }

    /**
     * Sets a new organizerMail
     *
     * @param string $organizerMail
     * @return self
     */
    public function setOrganizerMail($organizerMail)
    {
        $this->organizerMail = $organizerMail;
        return $this;
    }

    /**
     * Gets as organizerName
     *
     * @return string
     */
    public function getOrganizerName()
    {
        return $this->organizerName;
    }

    /**
     * Sets a new organizerName
     *
     * @param string $organizerName
     * @return self
     */
    public function setOrganizerName($organizerName)
    {
        $this->organizerName = $organizerName;
        return $this;
    }
}

