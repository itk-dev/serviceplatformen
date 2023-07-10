<?php

namespace Oio\Dkal;

/**
 * Class representing SlutbrugerIdentitetType
 *
 *
 * XSD Type: SlutbrugerIdentitetType
 */
class SlutbrugerIdentitetType
{
    /**
     * @var string $cPRnummerIdentifikator
     */
    private $cPRnummerIdentifikator = null;

    /**
     * @var string $cVRnummerIdentifikator
     */
    private $cVRnummerIdentifikator = null;

    /**
     * Gets as cPRnummerIdentifikator
     *
     * @return string
     */
    public function getCPRnummerIdentifikator()
    {
        return $this->cPRnummerIdentifikator;
    }

    /**
     * Sets a new cPRnummerIdentifikator
     *
     * @param string $cPRnummerIdentifikator
     * @return self
     */
    public function setCPRnummerIdentifikator($cPRnummerIdentifikator)
    {
        $this->cPRnummerIdentifikator = $cPRnummerIdentifikator;
        return $this;
    }

    /**
     * Gets as cVRnummerIdentifikator
     *
     * @return string
     */
    public function getCVRnummerIdentifikator()
    {
        return $this->cVRnummerIdentifikator;
    }

    /**
     * Sets a new cVRnummerIdentifikator
     *
     * @param string $cVRnummerIdentifikator
     * @return self
     */
    public function setCVRnummerIdentifikator($cVRnummerIdentifikator)
    {
        $this->cVRnummerIdentifikator = $cVRnummerIdentifikator;
        return $this;
    }
}

