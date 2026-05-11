<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF2900\ServiceType;

use SoapFault;
use ItkDev\Serviceplatformen\Service\SF2900\SoapClientBase;

/**
 * This class stands for Fordelingskvittering ServiceType
 * @subpackage Services
 */
class Fordelingskvittering extends SoapClientBase
{
    /**
     * Method to call the operation originally named FordelingskvitteringModtag
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \ItkDev\Serviceplatformen\SF2900\StructType\FordelingskvitteringModtagRequestType $request
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\FordelingskvitteringModtagResponseType|bool
     */
    public function FordelingskvitteringModtag(\ItkDev\Serviceplatformen\SF2900\StructType\FordelingskvitteringModtagRequestType $request)
    {
        try {
            $this->setResult($resultFordelingskvitteringModtag = $this->getSoapClient()->__soapCall('FordelingskvitteringModtag', [
                $request,
            ], [], [], $this->outputHeaders));
        
            return $resultFordelingskvitteringModtag;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see SoapClientBase::getResult()
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\FordelingskvitteringModtagResponseType
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
