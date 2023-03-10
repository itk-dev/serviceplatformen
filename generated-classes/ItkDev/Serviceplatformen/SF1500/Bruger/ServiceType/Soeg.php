<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF1500\Bruger\ServiceType;

use SoapFault;
use ItkDev\Serviceplatformen\Service\SF1500\SoapClientBase;

/**
 * This class stands for Soeg ServiceType
 * @subpackage Services
 */
class Soeg extends SoapClientBase
{
    /**
     * Sets the RequestHeader SoapHeader param
     * @uses SoapClientBase::setSoapHeader()
     * @param \ItkDev\Serviceplatformen\SF1500\Bruger\StructType\RequestHeaderType $requestHeader
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string|null $actor
     * @return \ItkDev\Serviceplatformen\SF1500\Bruger\ServiceType\Soeg
     */
    public function setSoapHeaderRequestHeader(\ItkDev\Serviceplatformen\SF1500\Bruger\StructType\RequestHeaderType $requestHeader, string $namespace = 'http://kombit.dk/xml/schemas/RequestHeader/1/', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'RequestHeader', $requestHeader, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named soeg
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequestHeader
     * - SOAPHeaderNamespaces: http://kombit.dk/xml/schemas/RequestHeader/1/
     * - SOAPHeaderTypes: \ItkDev\Serviceplatformen\SF1500\Bruger\StructType\RequestHeaderType
     * - SOAPHeaders: required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \ItkDev\Serviceplatformen\SF1500\Bruger\StructType\SoegInputType $request
     * @return \ItkDev\Serviceplatformen\SF1500\Bruger\StructType\SoegOutputType|bool
     */
    public function soeg(\ItkDev\Serviceplatformen\SF1500\Bruger\StructType\SoegInputType $request)
    {
        try {
            $this->setResult($resultSoeg = $this->getSoapClient()->__soapCall('soeg', [
                $request,
            ], [], [], $this->outputHeaders));
        
            return $resultSoeg;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see SoapClientBase::getResult()
     * @return \ItkDev\Serviceplatformen\SF1500\Bruger\StructType\SoegOutputType
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
