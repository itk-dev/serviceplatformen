<?php

namespace Digitaliseringskataloget\Sagdok3_0_0;

/**
 * Class representing UuidLabelInputType
 *
 *
 * XSD Type: UuidLabelInputType
 */
class UuidLabelInputType extends UnikIdType
{
    /**
     * @var string $label
     */
    private $label = null;

    /**
     * Gets as label
     *
     * @return string
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * Sets a new label
     *
     * @param string $label
     * @return self
     */
    public function setLabel($label)
    {
        $this->label = $label;
        return $this;
    }
}

