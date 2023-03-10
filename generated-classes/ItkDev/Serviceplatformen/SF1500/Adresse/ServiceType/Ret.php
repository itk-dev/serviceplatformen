<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF1500\Adresse\ServiceType;

use SoapFault;
use ItkDev\Serviceplatformen\Service\SF1500\SoapClientBase;

/**
 * This class stands for Ret ServiceType
 * @subpackage Services
 */
class Ret extends SoapClientBase
{
    /**
     * Sets the RequestHeader SoapHeader param
     * @uses SoapClientBase::setSoapHeader()
     * @param \ItkDev\Serviceplatformen\SF1500\Adresse\StructType\RequestHeaderType $requestHeader
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string|null $actor
     * @return \ItkDev\Serviceplatformen\SF1500\Adresse\ServiceType\Ret
     */
    public function setSoapHeaderRequestHeader(\ItkDev\Serviceplatformen\SF1500\Adresse\StructType\RequestHeaderType $requestHeader, string $namespace = 'http://kombit.dk/xml/schemas/RequestHeader/1/', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'RequestHeader', $requestHeader, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named ret
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequestHeader
     * - SOAPHeaderNamespaces: http://kombit.dk/xml/schemas/RequestHeader/1/
     * - SOAPHeaderTypes: \ItkDev\Serviceplatformen\SF1500\Adresse\StructType\RequestHeaderType
     * - SOAPHeaders: required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \ItkDev\Serviceplatformen\SF1500\Adresse\StructType\RetInputType $request
     * @return \ItkDev\Serviceplatformen\SF1500\Adresse\StructType\BasicOutputType|bool
     */
    public function ret(\ItkDev\Serviceplatformen\SF1500\Adresse\StructType\RetInputType $request)
    {
        try {
            $this->setResult($resultRet = $this->getSoapClient()->__soapCall('ret', [
                $request,
            ], [], [], $this->outputHeaders));
        
            return $resultRet;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see SoapClientBase::getResult()
     * @return \ItkDev\Serviceplatformen\SF1500\Adresse\StructType\BasicOutputType
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
