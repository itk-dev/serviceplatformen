<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF2900\ServiceType;

use SoapFault;
use ItkDev\Serviceplatformen\Service\SF2900\SoapClientBase;

/**
 * This class stands for Fordelingsmodtager ServiceType
 * @subpackage Services
 */
class Fordelingsmodtager extends SoapClientBase
{
    /**
     * Method to call the operation originally named FordelingsmodtagerList
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \ItkDev\Serviceplatformen\SF2900\StructType\FordelingsmodtagerListRequestType $request
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\FordelingsmodtagerListResponseType|bool
     */
    public function FordelingsmodtagerList(\ItkDev\Serviceplatformen\SF2900\StructType\FordelingsmodtagerListRequestType $request)
    {
        try {
            $this->setResult($resultFordelingsmodtagerList = $this->getSoapClient()->__soapCall('FordelingsmodtagerList', [
                $request,
            ], [], [], $this->outputHeaders));
        
            return $resultFordelingsmodtagerList;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named FordelingsmodtagerValider
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \ItkDev\Serviceplatformen\SF2900\StructType\FordelingsmodtagerValiderRequestType $request
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\FordelingsmodtagerValiderResponseType|bool
     */
    public function FordelingsmodtagerValider(\ItkDev\Serviceplatformen\SF2900\StructType\FordelingsmodtagerValiderRequestType $request)
    {
        try {
            $this->setResult($resultFordelingsmodtagerValider = $this->getSoapClient()->__soapCall('FordelingsmodtagerValider', [
                $request,
            ], [], [], $this->outputHeaders));
        
            return $resultFordelingsmodtagerValider;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see SoapClientBase::getResult()
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\FordelingsmodtagerListResponseType|\ItkDev\Serviceplatformen\SF2900\StructType\FordelingsmodtagerValiderResponseType
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
