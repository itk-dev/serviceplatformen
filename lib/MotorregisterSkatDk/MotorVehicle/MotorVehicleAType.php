<?php

namespace MotorregisterSkatDk\MotorVehicle;

/**
 * Class representing MotorVehicleAType
 */
class MotorVehicleAType
{
    /**
     * @var string $licenseNumber
     */
    private $licenseNumber = null;

    /**
     * @var string $chassisNumber
     */
    private $chassisNumber = null;

    /**
     * Gets as licenseNumber
     *
     * @return string
     */
    public function getLicenseNumber()
    {
        return $this->licenseNumber;
    }

    /**
     * Sets a new licenseNumber
     *
     * @param string $licenseNumber
     * @return self
     */
    public function setLicenseNumber($licenseNumber)
    {
        $this->licenseNumber = $licenseNumber;
        return $this;
    }

    /**
     * Gets as chassisNumber
     *
     * @return string
     */
    public function getChassisNumber()
    {
        return $this->chassisNumber;
    }

    /**
     * Sets a new chassisNumber
     *
     * @param string $chassisNumber
     * @return self
     */
    public function setChassisNumber($chassisNumber)
    {
        $this->chassisNumber = $chassisNumber;
        return $this;
    }
}

