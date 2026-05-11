<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF2900\ServiceType;

use SoapFault;
use ItkDev\Serviceplatformen\Service\SF2900\SoapClientBase;

/**
 * This class stands for Fordelingsobjekt ServiceType
 * @subpackage Services
 */
class Fordelingsobjekt extends SoapClientBase
{
    /**
     * Method to call the operation originally named FordelingsobjektAfsend
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \ItkDev\Serviceplatformen\SF2900\StructType\FordelingsobjektAfsendRequestType $request
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\FordelingsobjektAfsendResponseType|bool
     */
    public function FordelingsobjektAfsend(\ItkDev\Serviceplatformen\SF2900\StructType\FordelingsobjektAfsendRequestType $request)
    {
        try {
            $this->setResult($resultFordelingsobjektAfsend = $this->getSoapClient()->__soapCall('FordelingsobjektAfsend', [
                $request,
            ], [], [], $this->outputHeaders));
        
            return $resultFordelingsobjektAfsend;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see SoapClientBase::getResult()
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\FordelingsobjektAfsendResponseType
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
