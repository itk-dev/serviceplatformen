<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF1500\Facet\ServiceType;

use SoapFault;
use ItkDev\Serviceplatformen\Service\SF1500\SoapClientBase;

/**
 * This class stands for List ServiceType
 * @subpackage Services
 */
class _List extends SoapClientBase
{
    /**
     * Sets the RequestHeader SoapHeader param
     * @uses SoapClientBase::setSoapHeader()
     * @param \ItkDev\Serviceplatformen\SF1500\Facet\StructType\RequestHeaderType $requestHeader
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string|null $actor
     * @return \ItkDev\Serviceplatformen\SF1500\Facet\ServiceType\_List
     */
    public function setSoapHeaderRequestHeader(\ItkDev\Serviceplatformen\SF1500\Facet\StructType\RequestHeaderType $requestHeader, string $namespace = 'http://kombit.dk/xml/schemas/RequestHeader/1/', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'RequestHeader', $requestHeader, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named list
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequestHeader
     * - SOAPHeaderNamespaces: http://kombit.dk/xml/schemas/RequestHeader/1/
     * - SOAPHeaderTypes: \ItkDev\Serviceplatformen\SF1500\Facet\StructType\RequestHeaderType
     * - SOAPHeaders: required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \ItkDev\Serviceplatformen\SF1500\Facet\StructType\ListInputType $request
     * @return \ItkDev\Serviceplatformen\SF1500\Facet\StructType\ListOutputType|bool
     */
    public function _list_2(\ItkDev\Serviceplatformen\SF1500\Facet\StructType\ListInputType $request)
    {
        try {
            $this->setResult($resultList = $this->getSoapClient()->__soapCall('list', [
                $request,
            ], [], [], $this->outputHeaders));
        
            return $resultList;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see SoapClientBase::getResult()
     * @return \ItkDev\Serviceplatformen\SF1500\Facet\StructType\ListOutputType
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
