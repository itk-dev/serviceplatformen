<?php

namespace DigitalPost\MeMo\ContentData;

/**
 * Class representing ContentDataAType
 */
class ContentDataAType
{
    /**
     * @var \DataGovDk\Model\Core\CPRdata $cPRdata
     */
    private $cPRdata = null;

    /**
     * @var \DataGovDk\Model\Core\CVRdata $cVRdata
     */
    private $cVRdata = null;

    /**
     * @var \MotorregisterSkatDk\MotorVehicle $motorVehicle
     */
    private $motorVehicle = null;

    /**
     * @var \DataGovDk\Model\Core\PropertyNumber $propertyNumber
     */
    private $propertyNumber = null;

    /**
     * @var \DigitalPost\MeMo\CaseID $caseID
     */
    private $caseID = null;

    /**
     * @var \KleOnlineDk\KLEdata $kLEdata
     */
    private $kLEdata = null;

    /**
     * @var \WwwFormOnlineDk\FORMdata $fORMdata
     */
    private $fORMdata = null;

    /**
     * @var \DataGovDk\Model\Core\ProductionUnit $productionUnit
     */
    private $productionUnit = null;

    /**
     * @var \WwwDstDk\Da\TilSalg\Forskningsservice\Dokumentation\Hoejkvalitetsvariable\Elevregister2\Udd\Education $education
     */
    private $education = null;

    /**
     * @var \DataGovDk\Model\Core\Address $address
     */
    private $address = null;

    /**
     * @var \DataGovDk\Model\Core\UnstructuredAddress $unstructuredAddress
     */
    private $unstructuredAddress = null;

    /**
     * @var \DigitalPost\MeMo\AdditionalContentData[] $additionalContentData
     */
    private $additionalContentData = [
        
    ];

    /**
     * Gets as cPRdata
     *
     * @return \DataGovDk\Model\Core\CPRdata
     */
    public function getCPRdata()
    {
        return $this->cPRdata;
    }

    /**
     * Sets a new cPRdata
     *
     * @param \DataGovDk\Model\Core\CPRdata $cPRdata
     * @return self
     */
    public function setCPRdata(?\DataGovDk\Model\Core\CPRdata $cPRdata = null)
    {
        $this->cPRdata = $cPRdata;
        return $this;
    }

    /**
     * Gets as cVRdata
     *
     * @return \DataGovDk\Model\Core\CVRdata
     */
    public function getCVRdata()
    {
        return $this->cVRdata;
    }

    /**
     * Sets a new cVRdata
     *
     * @param \DataGovDk\Model\Core\CVRdata $cVRdata
     * @return self
     */
    public function setCVRdata(?\DataGovDk\Model\Core\CVRdata $cVRdata = null)
    {
        $this->cVRdata = $cVRdata;
        return $this;
    }

    /**
     * Gets as motorVehicle
     *
     * @return \MotorregisterSkatDk\MotorVehicle
     */
    public function getMotorVehicle()
    {
        return $this->motorVehicle;
    }

    /**
     * Sets a new motorVehicle
     *
     * @param \MotorregisterSkatDk\MotorVehicle $motorVehicle
     * @return self
     */
    public function setMotorVehicle(?\MotorregisterSkatDk\MotorVehicle $motorVehicle = null)
    {
        $this->motorVehicle = $motorVehicle;
        return $this;
    }

    /**
     * Gets as propertyNumber
     *
     * @return \DataGovDk\Model\Core\PropertyNumber
     */
    public function getPropertyNumber()
    {
        return $this->propertyNumber;
    }

    /**
     * Sets a new propertyNumber
     *
     * @param \DataGovDk\Model\Core\PropertyNumber $propertyNumber
     * @return self
     */
    public function setPropertyNumber(?\DataGovDk\Model\Core\PropertyNumber $propertyNumber = null)
    {
        $this->propertyNumber = $propertyNumber;
        return $this;
    }

    /**
     * Gets as caseID
     *
     * @return \DigitalPost\MeMo\CaseID
     */
    public function getCaseID()
    {
        return $this->caseID;
    }

    /**
     * Sets a new caseID
     *
     * @param \DigitalPost\MeMo\CaseID $caseID
     * @return self
     */
    public function setCaseID(?\DigitalPost\MeMo\CaseID $caseID = null)
    {
        $this->caseID = $caseID;
        return $this;
    }

    /**
     * Gets as kLEdata
     *
     * @return \KleOnlineDk\KLEdata
     */
    public function getKLEdata()
    {
        return $this->kLEdata;
    }

    /**
     * Sets a new kLEdata
     *
     * @param \KleOnlineDk\KLEdata $kLEdata
     * @return self
     */
    public function setKLEdata(?\KleOnlineDk\KLEdata $kLEdata = null)
    {
        $this->kLEdata = $kLEdata;
        return $this;
    }

    /**
     * Gets as fORMdata
     *
     * @return \WwwFormOnlineDk\FORMdata
     */
    public function getFORMdata()
    {
        return $this->fORMdata;
    }

    /**
     * Sets a new fORMdata
     *
     * @param \WwwFormOnlineDk\FORMdata $fORMdata
     * @return self
     */
    public function setFORMdata(?\WwwFormOnlineDk\FORMdata $fORMdata = null)
    {
        $this->fORMdata = $fORMdata;
        return $this;
    }

    /**
     * Gets as productionUnit
     *
     * @return \DataGovDk\Model\Core\ProductionUnit
     */
    public function getProductionUnit()
    {
        return $this->productionUnit;
    }

    /**
     * Sets a new productionUnit
     *
     * @param \DataGovDk\Model\Core\ProductionUnit $productionUnit
     * @return self
     */
    public function setProductionUnit(?\DataGovDk\Model\Core\ProductionUnit $productionUnit = null)
    {
        $this->productionUnit = $productionUnit;
        return $this;
    }

    /**
     * Gets as education
     *
     * @return \WwwDstDk\Da\TilSalg\Forskningsservice\Dokumentation\Hoejkvalitetsvariable\Elevregister2\Udd\Education
     */
    public function getEducation()
    {
        return $this->education;
    }

    /**
     * Sets a new education
     *
     * @param \WwwDstDk\Da\TilSalg\Forskningsservice\Dokumentation\Hoejkvalitetsvariable\Elevregister2\Udd\Education $education
     * @return self
     */
    public function setEducation(?\WwwDstDk\Da\TilSalg\Forskningsservice\Dokumentation\Hoejkvalitetsvariable\Elevregister2\Udd\Education $education = null)
    {
        $this->education = $education;
        return $this;
    }

    /**
     * Gets as address
     *
     * @return \DataGovDk\Model\Core\Address
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Sets a new address
     *
     * @param \DataGovDk\Model\Core\Address $address
     * @return self
     */
    public function setAddress(?\DataGovDk\Model\Core\Address $address = null)
    {
        $this->address = $address;
        return $this;
    }

    /**
     * Gets as unstructuredAddress
     *
     * @return \DataGovDk\Model\Core\UnstructuredAddress
     */
    public function getUnstructuredAddress()
    {
        return $this->unstructuredAddress;
    }

    /**
     * Sets a new unstructuredAddress
     *
     * @param \DataGovDk\Model\Core\UnstructuredAddress $unstructuredAddress
     * @return self
     */
    public function setUnstructuredAddress(?\DataGovDk\Model\Core\UnstructuredAddress $unstructuredAddress = null)
    {
        $this->unstructuredAddress = $unstructuredAddress;
        return $this;
    }

    /**
     * Adds as additionalContentData
     *
     * @return self
     * @param \DigitalPost\MeMo\AdditionalContentData $additionalContentData
     */
    public function addToAdditionalContentData(\DigitalPost\MeMo\AdditionalContentData $additionalContentData)
    {
        $this->additionalContentData[] = $additionalContentData;
        return $this;
    }

    /**
     * isset additionalContentData
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAdditionalContentData($index)
    {
        return isset($this->additionalContentData[$index]);
    }

    /**
     * unset additionalContentData
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAdditionalContentData($index)
    {
        unset($this->additionalContentData[$index]);
    }

    /**
     * Gets as additionalContentData
     *
     * @return \DigitalPost\MeMo\AdditionalContentData[]
     */
    public function getAdditionalContentData()
    {
        return $this->additionalContentData;
    }

    /**
     * Sets a new additionalContentData
     *
     * @param \DigitalPost\MeMo\AdditionalContentData[] $additionalContentData
     * @return self
     */
    public function setAdditionalContentData(array $additionalContentData = null)
    {
        $this->additionalContentData = $additionalContentData;
        return $this;
    }
}

