<?php

namespace DataGovDk\Model\Core\ProductionUnit;

/**
 * Class representing ProductionUnitAType
 */
class ProductionUnitAType
{
    /**
     * @var int $productionUnitNumber
     */
    private $productionUnitNumber = null;

    /**
     * @var string $productionUnitName
     */
    private $productionUnitName = null;

    /**
     * Gets as productionUnitNumber
     *
     * @return int
     */
    public function getProductionUnitNumber()
    {
        return $this->productionUnitNumber;
    }

    /**
     * Sets a new productionUnitNumber
     *
     * @param int $productionUnitNumber
     * @return self
     */
    public function setProductionUnitNumber($productionUnitNumber)
    {
        $this->productionUnitNumber = $productionUnitNumber;
        return $this;
    }

    /**
     * Gets as productionUnitName
     *
     * @return string
     */
    public function getProductionUnitName()
    {
        return $this->productionUnitName;
    }

    /**
     * Sets a new productionUnitName
     *
     * @param string $productionUnitName
     * @return self
     */
    public function setProductionUnitName($productionUnitName)
    {
        $this->productionUnitName = $productionUnitName;
        return $this;
    }
}

