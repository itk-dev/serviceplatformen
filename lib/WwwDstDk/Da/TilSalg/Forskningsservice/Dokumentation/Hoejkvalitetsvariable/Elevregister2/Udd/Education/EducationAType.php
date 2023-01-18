<?php

namespace WwwDstDk\Da\TilSalg\Forskningsservice\Dokumentation\Hoejkvalitetsvariable\Elevregister2\Udd\Education;

/**
 * Class representing EducationAType
 */
class EducationAType
{
    /**
     * @var string $educationCode
     */
    private $educationCode = null;

    /**
     * @var string $educationName
     */
    private $educationName = null;

    /**
     * Gets as educationCode
     *
     * @return string
     */
    public function getEducationCode()
    {
        return $this->educationCode;
    }

    /**
     * Sets a new educationCode
     *
     * @param string $educationCode
     * @return self
     */
    public function setEducationCode($educationCode)
    {
        $this->educationCode = $educationCode;
        return $this;
    }

    /**
     * Gets as educationName
     *
     * @return string
     */
    public function getEducationName()
    {
        return $this->educationName;
    }

    /**
     * Sets a new educationName
     *
     * @param string $educationName
     * @return self
     */
    public function setEducationName($educationName)
    {
        $this->educationName = $educationName;
        return $this;
    }
}

