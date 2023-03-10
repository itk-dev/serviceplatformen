<?php

/**
 * This file is part of itk-dev/serviceplatformen.
 *
 * (c) 2020 ITK Development
 *
 * This source file is subject to the MIT license.
 */

namespace ItkDev\Serviceplatformen\Service\SF1500;

use ItkDev\Serviceplatformen\SF1500\Bruger\ClassMap as BrugerClassMap;
use ItkDev\Serviceplatformen\SF1500\Bruger\ServiceType\Soeg as BrugerSoeg;
use ItkDev\Serviceplatformen\SF1500\Person\ClassMap as PersonClassMap;
use ItkDev\Serviceplatformen\SF1500\Person\ServiceType\Laes as PersonLaes;
use ItkDev\Serviceplatformen\SF1500\Person\ServiceType\Soeg as PersonSoeg;

class SoapClient extends \SoapClient
{
    public SF1500 $sf1500;


    private ?string $lastRequest;

    /**
     * TODO: Update signature cf. https://www.php.net/manual/en/soapclient.dorequest.php.
     */
    #[\ReturnTypeWillChange]
    public function __doRequest($request, $location, $action, $version, $oneWay = null)
    {
        if (null !== $this->sf1500) {
            $location = $this->sf1500->getSoapLocation($location);
            $request = $this->sf1500->formatSoapRequest($request, $location, $action, (int)$version, (bool)$oneWay);
        }

        // TODO: Cache the request and response!

        $this->lastRequest = $request;

        return parent::__doRequest($request, $location, $action, $version, $oneWay);
    }

    #[\ReturnTypeWillChange]
    public function __getLastRequest()
    {
        return $this->lastRequest ?? parent::__getLastRequest();
    }

    public static function getBrugerSoeg(SF1500 $sf1500, array $options = []): BrugerSoeg
    {
        return
            (new BrugerSoeg([
                    SoapClientBase::WSDL_URL => __DIR__.'/../../../resources/sf1500/Tekniske specifikationer (v6.0 Services)/v6_0_0_0/wsdl/Bruger.wsdl',
                    SoapClientBase::WSDL_CLASSMAP => BrugerClassMap::get(),
                ] + $options))
                ->setSF1500($sf1500);
    }

    public static function getPersonSoeg(SF1500 $sf1500, array $options = []): PersonSoeg
    {
        return
            (new PersonSoeg([
                    SoapClientBase::WSDL_URL => __DIR__.'/../../../resources/sf1500/Tekniske specifikationer (v6.0 Services)/v6_0_0_0/wsdl/Person.wsdl',
                    SoapClientBase::WSDL_CLASSMAP => PersonClassMap::get(),
                ] + $options))
            ->setSF1500($sf1500);
    }

    public static function getPersonLaes(SF1500 $sf1500, array $options = []): PersonLaes
    {
        return
            (new PersonLaes([
                    SoapClientBase::WSDL_URL => __DIR__.'/../../../resources/sf1500/Tekniske specifikationer (v6.0 Services)/v6_0_0_0/wsdl/Person.wsdl',
                    SoapClientBase::WSDL_CLASSMAP => PersonClassMap::get(),
                ] + $options))
                ->setSF1500($sf1500);
    }
}
