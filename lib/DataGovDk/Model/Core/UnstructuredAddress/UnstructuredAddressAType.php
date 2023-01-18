<?php

namespace DataGovDk\Model\Core\UnstructuredAddress;

/**
 * Class representing UnstructuredAddressAType
 */
class UnstructuredAddressAType
{
    /**
     * @var string $unstructured
     */
    private $unstructured = null;

    /**
     * Gets as unstructured
     *
     * @return string
     */
    public function getUnstructured()
    {
        return $this->unstructured;
    }

    /**
     * Sets a new unstructured
     *
     * @param string $unstructured
     * @return self
     */
    public function setUnstructured($unstructured)
    {
        $this->unstructured = $unstructured;
        return $this;
    }
}

