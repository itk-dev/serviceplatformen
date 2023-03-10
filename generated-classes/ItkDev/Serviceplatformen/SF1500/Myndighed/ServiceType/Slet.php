<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF1500\Myndighed\ServiceType;

use SoapFault;
use ItkDev\Serviceplatformen\Service\SF1500\SoapClientBase;

/**
 * This class stands for Slet ServiceType
 * @subpackage Services
 */
class Slet extends SoapClientBase
{
    /**
     * Sets the RequestHeader SoapHeader param
     * @uses SoapClientBase::setSoapHeader()
     * @param \ItkDev\Serviceplatformen\SF1500\Myndighed\StructType\RequestHeaderType $requestHeader
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string|null $actor
     * @return \ItkDev\Serviceplatformen\SF1500\Myndighed\ServiceType\Slet
     */
    public function setSoapHeaderRequestHeader(\ItkDev\Serviceplatformen\SF1500\Myndighed\StructType\RequestHeaderType $requestHeader, string $namespace = 'http://kombit.dk/xml/schemas/RequestHeader/1/', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'RequestHeader', $requestHeader, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named slet
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequestHeader
     * - SOAPHeaderNamespaces: http://kombit.dk/xml/schemas/RequestHeader/1/
     * - SOAPHeaderTypes: \ItkDev\Serviceplatformen\SF1500\Myndighed\StructType\RequestHeaderType
     * - SOAPHeaders: required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \ItkDev\Serviceplatformen\SF1500\Myndighed\StructType\UuidNoteInputType $request
     * @return \ItkDev\Serviceplatformen\SF1500\Myndighed\StructType\BasicOutputType|bool
     */
    public function slet(\ItkDev\Serviceplatformen\SF1500\Myndighed\StructType\UuidNoteInputType $request)
    {
        try {
            $this->setResult($resultSlet = $this->getSoapClient()->__soapCall('slet', [
                $request,
            ], [], [], $this->outputHeaders));
        
            return $resultSlet;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see SoapClientBase::getResult()
     * @return \ItkDev\Serviceplatformen\SF1500\Myndighed\StructType\BasicOutputType
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
