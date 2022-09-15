<?php

namespace DataGovDk\Model\Core\SEnumber;

/**
 * Class representing SEnumberAType
 */
class SEnumberAType
{
    /**
     * @var string $seNumber
     */
    private $seNumber = null;

    /**
     * @var string $companyName
     */
    private $companyName = null;

    /**
     * Gets as seNumber
     *
     * @return string
     */
    public function getSeNumber()
    {
        return $this->seNumber;
    }

    /**
     * Sets a new seNumber
     *
     * @param string $seNumber
     * @return self
     */
    public function setSeNumber($seNumber)
    {
        $this->seNumber = $seNumber;
        return $this;
    }

    /**
     * Gets as companyName
     *
     * @return string
     */
    public function getCompanyName()
    {
        return $this->companyName;
    }

    /**
     * Sets a new companyName
     *
     * @param string $companyName
     * @return self
     */
    public function setCompanyName($companyName)
    {
        $this->companyName = $companyName;
        return $this;
    }
}

