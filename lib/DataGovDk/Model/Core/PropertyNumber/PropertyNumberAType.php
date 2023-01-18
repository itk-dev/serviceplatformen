<?php

namespace DataGovDk\Model\Core\PropertyNumber;

/**
 * Class representing PropertyNumberAType
 */
class PropertyNumberAType
{
    /**
     * @var string $propertyNumber
     */
    private $propertyNumber = null;

    /**
     * Gets as propertyNumber
     *
     * @return string
     */
    public function getPropertyNumber()
    {
        return $this->propertyNumber;
    }

    /**
     * Sets a new propertyNumber
     *
     * @param string $propertyNumber
     * @return self
     */
    public function setPropertyNumber($propertyNumber)
    {
        $this->propertyNumber = $propertyNumber;
        return $this;
    }
}

