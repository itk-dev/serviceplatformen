<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF1500\OrganisationSystem\ServiceType;

use SoapFault;
use ItkDev\Serviceplatformen\Service\SF1500\SoapClientBase;

/**
 * This class stands for Anonymiser ServiceType
 * @subpackage Services
 */
class Anonymiser extends SoapClientBase
{
    /**
     * Sets the RequestHeader SoapHeader param
     * @uses SoapClientBase::setSoapHeader()
     * @param \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\RequestHeaderType $requestHeader
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string|null $actor
     * @return \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\ServiceType\Anonymiser
     */
    public function setSoapHeaderRequestHeader(\ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\RequestHeaderType $requestHeader, string $namespace = 'http://kombit.dk/xml/schemas/RequestHeader/1/', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'RequestHeader', $requestHeader, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named anonymiser
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequestHeader
     * - SOAPHeaderNamespaces: http://kombit.dk/xml/schemas/RequestHeader/1/
     * - SOAPHeaderTypes: \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\RequestHeaderType
     * - SOAPHeaders: required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\AnonymiserInputType $request
     * @return \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\BasicOutputType|bool
     */
    public function anonymiser(\ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\AnonymiserInputType $request)
    {
        try {
            $this->setResult($resultAnonymiser = $this->getSoapClient()->__soapCall('anonymiser', [
                $request,
            ], [], [], $this->outputHeaders));
        
            return $resultAnonymiser;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see SoapClientBase::getResult()
     * @return \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\BasicOutputType
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
