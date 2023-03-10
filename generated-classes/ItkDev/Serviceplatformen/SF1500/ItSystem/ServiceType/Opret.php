<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF1500\ItSystem\ServiceType;

use SoapFault;
use ItkDev\Serviceplatformen\Service\SF1500\SoapClientBase;

/**
 * This class stands for Opret ServiceType
 * @subpackage Services
 */
class Opret extends SoapClientBase
{
    /**
     * Sets the RequestHeader SoapHeader param
     * @uses SoapClientBase::setSoapHeader()
     * @param \ItkDev\Serviceplatformen\SF1500\ItSystem\StructType\RequestHeaderType $requestHeader
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string|null $actor
     * @return \ItkDev\Serviceplatformen\SF1500\ItSystem\ServiceType\Opret
     */
    public function setSoapHeaderRequestHeader(\ItkDev\Serviceplatformen\SF1500\ItSystem\StructType\RequestHeaderType $requestHeader, string $namespace = 'http://kombit.dk/xml/schemas/RequestHeader/1/', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'RequestHeader', $requestHeader, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named opret
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequestHeader
     * - SOAPHeaderNamespaces: http://kombit.dk/xml/schemas/RequestHeader/1/
     * - SOAPHeaderTypes: \ItkDev\Serviceplatformen\SF1500\ItSystem\StructType\RequestHeaderType
     * - SOAPHeaders: required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \ItkDev\Serviceplatformen\SF1500\ItSystem\StructType\OpretInputType $request
     * @return \ItkDev\Serviceplatformen\SF1500\ItSystem\StructType\OpretOutputType|bool
     */
    public function opret(\ItkDev\Serviceplatformen\SF1500\ItSystem\StructType\OpretInputType $request)
    {
        try {
            $this->setResult($resultOpret = $this->getSoapClient()->__soapCall('opret', [
                $request,
            ], [], [], $this->outputHeaders));
        
            return $resultOpret;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see SoapClientBase::getResult()
     * @return \ItkDev\Serviceplatformen\SF1500\ItSystem\StructType\OpretOutputType
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
