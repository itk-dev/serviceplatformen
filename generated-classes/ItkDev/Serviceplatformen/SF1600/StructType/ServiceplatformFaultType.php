<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF1600\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ServiceplatformFaultType StructType
 * @subpackage Structs
 */
class ServiceplatformFaultType extends AbstractStructBase
{
    /**
     * The ErrorList
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ItkDev\Serviceplatformen\SF1600\StructType\ErrorListType|null
     */
    protected ?\ItkDev\Serviceplatformen\SF1600\StructType\ErrorListType $ErrorList = null;
    /**
     * Constructor method for ServiceplatformFaultType
     * @uses ServiceplatformFaultType::setErrorList()
     * @param \ItkDev\Serviceplatformen\SF1600\StructType\ErrorListType $errorList
     */
    public function __construct(?\ItkDev\Serviceplatformen\SF1600\StructType\ErrorListType $errorList = null)
    {
        $this
            ->setErrorList($errorList);
    }
    /**
     * Get ErrorList value
     * @return \ItkDev\Serviceplatformen\SF1600\StructType\ErrorListType|null
     */
    public function getErrorList(): ?\ItkDev\Serviceplatformen\SF1600\StructType\ErrorListType
    {
        return $this->ErrorList;
    }
    /**
     * Set ErrorList value
     * @param \ItkDev\Serviceplatformen\SF1600\StructType\ErrorListType $errorList
     * @return \ItkDev\Serviceplatformen\SF1600\StructType\ServiceplatformFaultType
     */
    public function setErrorList(?\ItkDev\Serviceplatformen\SF1600\StructType\ErrorListType $errorList = null): self
    {
        $this->ErrorList = $errorList;
        
        return $this;
    }
}
