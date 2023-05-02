<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF1500\KlassifikationSystem\ServiceType;

use SoapFault;
use ItkDev\Serviceplatformen\Service\SF1500\SoapClientBase;

/**
 * This class stands for Import ServiceType
 * @subpackage Services
 */
class Import extends SoapClientBase
{
    /**
     * Sets the RequestHeader SoapHeader param
     * @uses SoapClientBase::setSoapHeader()
     * @param \ItkDev\Serviceplatformen\SF1500\KlassifikationSystem\StructType\RequestHeaderType $requestHeader
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string|null $actor
     * @return \ItkDev\Serviceplatformen\SF1500\KlassifikationSystem\ServiceType\Import
     */
    public function setSoapHeaderRequestHeader(\ItkDev\Serviceplatformen\SF1500\KlassifikationSystem\StructType\RequestHeaderType $requestHeader, string $namespace = 'http://kombit.dk/xml/schemas/RequestHeader/1/', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'RequestHeader', $requestHeader, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named import
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequestHeader
     * - SOAPHeaderNamespaces: http://kombit.dk/xml/schemas/RequestHeader/1/
     * - SOAPHeaderTypes: \ItkDev\Serviceplatformen\SF1500\KlassifikationSystem\StructType\RequestHeaderType
     * - SOAPHeaders: required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \ItkDev\Serviceplatformen\SF1500\KlassifikationSystem\StructType\ImporterKlassifikationSystemInputType $request
     * @return \ItkDev\Serviceplatformen\SF1500\KlassifikationSystem\StructType\MultipleOutputType|bool
     */
    public function import(\ItkDev\Serviceplatformen\SF1500\KlassifikationSystem\StructType\ImporterKlassifikationSystemInputType $request)
    {
        try {
            $this->setResult($resultImport = $this->getSoapClient()->__soapCall('import', [
                $request,
            ], [], [], $this->outputHeaders));
        
            return $resultImport;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see SoapClientBase::getResult()
     * @return \ItkDev\Serviceplatformen\SF1500\KlassifikationSystem\StructType\MultipleOutputType
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
