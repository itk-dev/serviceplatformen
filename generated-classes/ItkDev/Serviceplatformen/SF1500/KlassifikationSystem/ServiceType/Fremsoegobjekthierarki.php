<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF1500\KlassifikationSystem\ServiceType;

use SoapFault;
use ItkDev\Serviceplatformen\Service\SF1500\SoapClientBase;

/**
 * This class stands for Fremsoegobjekthierarki ServiceType
 * @subpackage Services
 */
class Fremsoegobjekthierarki extends SoapClientBase
{
    /**
     * Sets the RequestHeader SoapHeader param
     * @uses SoapClientBase::setSoapHeader()
     * @param \ItkDev\Serviceplatformen\SF1500\KlassifikationSystem\StructType\RequestHeaderType $requestHeader
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string|null $actor
     * @return \ItkDev\Serviceplatformen\SF1500\KlassifikationSystem\ServiceType\Fremsoegobjekthierarki
     */
    public function setSoapHeaderRequestHeader(\ItkDev\Serviceplatformen\SF1500\KlassifikationSystem\StructType\RequestHeaderType $requestHeader, string $namespace = 'http://kombit.dk/xml/schemas/RequestHeader/1/', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'RequestHeader', $requestHeader, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named fremsoegobjekthierarki
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequestHeader
     * - SOAPHeaderNamespaces: http://kombit.dk/xml/schemas/RequestHeader/1/
     * - SOAPHeaderTypes: \ItkDev\Serviceplatformen\SF1500\KlassifikationSystem\StructType\RequestHeaderType
     * - SOAPHeaders: required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \ItkDev\Serviceplatformen\SF1500\KlassifikationSystem\StructType\FremsoegObjekthierarkiInputType $request
     * @return \ItkDev\Serviceplatformen\SF1500\KlassifikationSystem\StructType\FremsoegObjekthierarkiOutputType|bool
     */
    public function fremsoegobjekthierarki(\ItkDev\Serviceplatformen\SF1500\KlassifikationSystem\StructType\FremsoegObjekthierarkiInputType $request)
    {
        try {
            $this->setResult($resultFremsoegobjekthierarki = $this->getSoapClient()->__soapCall('fremsoegobjekthierarki', [
                $request,
            ], [], [], $this->outputHeaders));
        
            return $resultFremsoegobjekthierarki;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see SoapClientBase::getResult()
     * @return \ItkDev\Serviceplatformen\SF1500\KlassifikationSystem\StructType\FremsoegObjekthierarkiOutputType
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
