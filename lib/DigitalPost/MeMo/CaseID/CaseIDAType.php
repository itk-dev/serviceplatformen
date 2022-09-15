<?php

namespace DigitalPost\MeMo\CaseID;

/**
 * Class representing CaseIDAType
 */
class CaseIDAType
{
    /**
     * @var string $caseID
     */
    private $caseID = null;

    /**
     * @var string $caseSystem
     */
    private $caseSystem = null;

    /**
     * Gets as caseID
     *
     * @return string
     */
    public function getCaseID()
    {
        return $this->caseID;
    }

    /**
     * Sets a new caseID
     *
     * @param string $caseID
     * @return self
     */
    public function setCaseID($caseID)
    {
        $this->caseID = $caseID;
        return $this;
    }

    /**
     * Gets as caseSystem
     *
     * @return string
     */
    public function getCaseSystem()
    {
        return $this->caseSystem;
    }

    /**
     * Sets a new caseSystem
     *
     * @param string $caseSystem
     * @return self
     */
    public function setCaseSystem($caseSystem)
    {
        $this->caseSystem = $caseSystem;
        return $this;
    }
}

