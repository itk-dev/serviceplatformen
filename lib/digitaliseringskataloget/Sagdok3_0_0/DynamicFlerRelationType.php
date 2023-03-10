<?php

namespace Digitaliseringskataloget\Sagdok3_0_0;

/**
 * Class representing DynamicFlerRelationType
 *
 *
 * XSD Type: DynamicFlerRelationType
 */
class DynamicFlerRelationType extends FlerRelationType
{
    /**
     * @var \Digitaliseringskataloget\Sagdok3_0_0\UuidLabelInputType $rolle
     */
    private $rolle = null;

    /**
     * @var \Digitaliseringskataloget\Sagdok3_0_0\UuidLabelInputType $type
     */
    private $type = null;

    /**
     * @var string $indeks
     */
    private $indeks = null;

    /**
     * Gets as rolle
     *
     * @return \Digitaliseringskataloget\Sagdok3_0_0\UuidLabelInputType
     */
    public function getRolle()
    {
        return $this->rolle;
    }

    /**
     * Sets a new rolle
     *
     * @param \Digitaliseringskataloget\Sagdok3_0_0\UuidLabelInputType $rolle
     * @return self
     */
    public function setRolle(\Digitaliseringskataloget\Sagdok3_0_0\UuidLabelInputType $rolle)
    {
        $this->rolle = $rolle;
        return $this;
    }

    /**
     * Gets as type
     *
     * @return \Digitaliseringskataloget\Sagdok3_0_0\UuidLabelInputType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * @param \Digitaliseringskataloget\Sagdok3_0_0\UuidLabelInputType $type
     * @return self
     */
    public function setType(\Digitaliseringskataloget\Sagdok3_0_0\UuidLabelInputType $type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as indeks
     *
     * @return string
     */
    public function getIndeks()
    {
        return $this->indeks;
    }

    /**
     * Sets a new indeks
     *
     * @param string $indeks
     * @return self
     */
    public function setIndeks($indeks)
    {
        $this->indeks = $indeks;
        return $this;
    }
}

