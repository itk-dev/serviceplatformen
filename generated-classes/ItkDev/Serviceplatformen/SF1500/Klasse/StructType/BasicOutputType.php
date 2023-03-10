<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF1500\Klasse\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BasicOutputType StructType
 * Meta information extracted from the WSDL
 * - definition: urn:oio:sagdok:basaloutput:ADD:1.0.0
 * @subpackage Structs
 */
class BasicOutputType extends AbstractStructBase
{
    /**
     * The StandardRetur
     * Meta information extracted from the WSDL
     * - content: standardretur
     * - ref: sd:StandardRetur
     * @var \ItkDev\Serviceplatformen\SF1500\Klasse\StructType\StandardReturType|null
     */
    protected ?\ItkDev\Serviceplatformen\SF1500\Klasse\StructType\StandardReturType $StandardRetur = null;
    /**
     * Constructor method for BasicOutputType
     * @uses BasicOutputType::setStandardRetur()
     * @param \ItkDev\Serviceplatformen\SF1500\Klasse\StructType\StandardReturType $standardRetur
     */
    public function __construct(?\ItkDev\Serviceplatformen\SF1500\Klasse\StructType\StandardReturType $standardRetur = null)
    {
        $this
            ->setStandardRetur($standardRetur);
    }
    /**
     * Get StandardRetur value
     * @return \ItkDev\Serviceplatformen\SF1500\Klasse\StructType\StandardReturType|null
     */
    public function getStandardRetur(): ?\ItkDev\Serviceplatformen\SF1500\Klasse\StructType\StandardReturType
    {
        return $this->StandardRetur;
    }
    /**
     * Set StandardRetur value
     * @param \ItkDev\Serviceplatformen\SF1500\Klasse\StructType\StandardReturType $standardRetur
     * @return \ItkDev\Serviceplatformen\SF1500\Klasse\StructType\BasicOutputType
     */
    public function setStandardRetur(?\ItkDev\Serviceplatformen\SF1500\Klasse\StructType\StandardReturType $standardRetur = null): self
    {
        $this->StandardRetur = $standardRetur;
        
        return $this;
    }
}
