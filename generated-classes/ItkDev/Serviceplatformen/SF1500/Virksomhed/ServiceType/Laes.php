<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF1500\Virksomhed\ServiceType;

use SoapFault;
use ItkDev\Serviceplatformen\Service\SF1500\SoapClientBase;

/**
 * This class stands for Laes ServiceType
 * @subpackage Services
 */
class Laes extends SoapClientBase
{
    /**
     * Sets the RequestHeader SoapHeader param
     * @uses SoapClientBase::setSoapHeader()
     * @param \ItkDev\Serviceplatformen\SF1500\Virksomhed\StructType\RequestHeaderType $requestHeader
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string|null $actor
     * @return \ItkDev\Serviceplatformen\SF1500\Virksomhed\ServiceType\Laes
     */
    public function setSoapHeaderRequestHeader(\ItkDev\Serviceplatformen\SF1500\Virksomhed\StructType\RequestHeaderType $requestHeader, string $namespace = 'http://kombit.dk/xml/schemas/RequestHeader/1/', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'RequestHeader', $requestHeader, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named laes
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequestHeader
     * - SOAPHeaderNamespaces: http://kombit.dk/xml/schemas/RequestHeader/1/
     * - SOAPHeaderTypes: \ItkDev\Serviceplatformen\SF1500\Virksomhed\StructType\RequestHeaderType
     * - SOAPHeaders: required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \ItkDev\Serviceplatformen\SF1500\Virksomhed\StructType\LaesInputType $request
     * @return \ItkDev\Serviceplatformen\SF1500\Virksomhed\StructType\LaesOutputType|bool
     */
    public function laes(\ItkDev\Serviceplatformen\SF1500\Virksomhed\StructType\LaesInputType $request)
    {
        try {
            $this->setResult($resultLaes = $this->getSoapClient()->__soapCall('laes', [
                $request,
            ], [], [], $this->outputHeaders));
        
            return $resultLaes;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see SoapClientBase::getResult()
     * @return \ItkDev\Serviceplatformen\SF1500\Virksomhed\StructType\LaesOutputType
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
