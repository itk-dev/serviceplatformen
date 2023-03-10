<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF1500\OrganisationAdministration\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListOutputType StructType
 * Meta information extracted from the WSDL
 * - definition: urn:oio:sagdok:listoutput:ADD:1.0.0
 * @subpackage Structs
 */
class ListOutputType extends AbstractStructBase
{
    /**
     * The StandardRetur
     * Meta information extracted from the WSDL
     * - content: standardretur
     * - ref: sd:StandardRetur
     * @var \ItkDev\Serviceplatformen\SF1500\OrganisationAdministration\StructType\StandardReturType|null
     */
    protected ?\ItkDev\Serviceplatformen\SF1500\OrganisationAdministration\StructType\StandardReturType $StandardRetur = null;
    /**
     * Constructor method for ListOutputType
     * @uses ListOutputType::setStandardRetur()
     * @param \ItkDev\Serviceplatformen\SF1500\OrganisationAdministration\StructType\StandardReturType $standardRetur
     */
    public function __construct(?\ItkDev\Serviceplatformen\SF1500\OrganisationAdministration\StructType\StandardReturType $standardRetur = null)
    {
        $this
            ->setStandardRetur($standardRetur);
    }
    /**
     * Get StandardRetur value
     * @return \ItkDev\Serviceplatformen\SF1500\OrganisationAdministration\StructType\StandardReturType|null
     */
    public function getStandardRetur(): ?\ItkDev\Serviceplatformen\SF1500\OrganisationAdministration\StructType\StandardReturType
    {
        return $this->StandardRetur;
    }
    /**
     * Set StandardRetur value
     * @param \ItkDev\Serviceplatformen\SF1500\OrganisationAdministration\StructType\StandardReturType $standardRetur
     * @return \ItkDev\Serviceplatformen\SF1500\OrganisationAdministration\StructType\ListOutputType
     */
    public function setStandardRetur(?\ItkDev\Serviceplatformen\SF1500\OrganisationAdministration\StructType\StandardReturType $standardRetur = null): self
    {
        $this->StandardRetur = $standardRetur;
        
        return $this;
    }
}
