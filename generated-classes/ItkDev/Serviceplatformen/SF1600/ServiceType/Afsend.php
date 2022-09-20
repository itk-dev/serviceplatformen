<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF1600\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Afsend ServiceType
 * @subpackage Services
 */
class Afsend extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named afsendBrev
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \ItkDev\Serviceplatformen\SF1600\StructType\PrintAfsendBrevRequestType $request
     * @return \ItkDev\Serviceplatformen\SF1600\StructType\PrintAfsendBrevResponseType|bool
     */
    public function afsendBrev(\ItkDev\Serviceplatformen\SF1600\StructType\PrintAfsendBrevRequestType $request)
    {
        try {
            $this->setResult($resultAfsendBrev = $this->getSoapClient()->__soapCall('afsendBrev', [
                $request,
            ], [], [], $this->outputHeaders));
        
            return $resultAfsendBrev;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \ItkDev\Serviceplatformen\SF1600\StructType\PrintAfsendBrevResponseType
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
