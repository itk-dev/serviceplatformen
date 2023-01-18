<?php

namespace DataGovDk\Model\Core\CVRdata;

/**
 * Class representing CVRdataAType
 */
class CVRdataAType
{
    /**
     * @var string $cvrNumber
     */
    private $cvrNumber = null;

    /**
     * @var string $companyName
     */
    private $companyName = null;

    /**
     * Gets as cvrNumber
     *
     * @return string
     */
    public function getCvrNumber()
    {
        return $this->cvrNumber;
    }

    /**
     * Sets a new cvrNumber
     *
     * @param string $cvrNumber
     * @return self
     */
    public function setCvrNumber($cvrNumber)
    {
        $this->cvrNumber = $cvrNumber;
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

