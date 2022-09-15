<?php

namespace DataGovDk\Model\Core\CPRdata;

/**
 * Class representing CPRdataAType
 */
class CPRdataAType
{
    /**
     * @var string $cprNumber
     */
    private $cprNumber = null;

    /**
     * @var string $name
     */
    private $name = null;

    /**
     * Gets as cprNumber
     *
     * @return string
     */
    public function getCprNumber()
    {
        return $this->cprNumber;
    }

    /**
     * Sets a new cprNumber
     *
     * @param string $cprNumber
     * @return self
     */
    public function setCprNumber($cprNumber)
    {
        $this->cprNumber = $cprNumber;
        return $this;
    }

    /**
     * Gets as name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }
}

