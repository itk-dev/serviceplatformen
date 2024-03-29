<?php

/**
 * This file is part of itk-dev/serviceplatformen.
 *
 * (c) 2020 ITK Development
 *
 * This source file is subject to the MIT license.
 */

namespace ItkDev\Serviceplatformen\Service\SF1500;

use ItkDev\Serviceplatformen\Service\Exception\SoapException;
use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * @see https://github.com/WsdlToPhp/PackageEws365/blob/master/SoapClient/SoapClientBase.php
 */
class SoapClientBase extends AbstractSoapClientBase
{
    protected SF1500 $sf1500;

    const SOAP_DISABLE_CACHE = 'soap_disable_cache';

    public function getSoapClientClassName(?string $soapClientClassName = null): string
    {
        return parent::getSoapClientClassName(SoapClient::class);
    }

    public static function getDefaultWsdlOptions(): array
    {
        return [
                self::WSDL_SOAP_VERSION => SOAP_1_2,
            ]+parent::getDefaultWsdlOptions();
    }

    public function setSF1500(SF1500 $sf1500): self
    {
        $this->sf1500 = $sf1500;

        return $this;
    }

    public function getSoapClient(): ?SoapClient
    {
        $soapClient = parent::getSoapClient();
        assert($soapClient instanceof SoapClient);
        $soapClient->sf1500 = $this->sf1500;

        return $soapClient;
    }

    public function saveLastError(string $methodName, SoapFault $soapFault): self
    {
        // Throw a SOAP exception rather than just storing a SOAP fault as the parent class does.
        throw new SoapException($soapFault, $this->getLastRequest(), $this->getLastResponse());
    }
}
