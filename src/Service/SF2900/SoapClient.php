<?php

/**
 * This file is part of itk-dev/serviceplatformen.
 *
 * (c) 2020 ITK Development
 *
 * This source file is subject to the MIT license.
 */

namespace ItkDev\Serviceplatformen\Service\SF2900;

class SoapClient extends \SoapClient
{
    public SF2900 $sf2900;

    private ?string $lastRequest;

    /**
     * TODO: Update signature cf. https://www.php.net/manual/en/soapclient.dorequest.php.
     */
    public function __doRequest($request, $location, $action, $version, $oneWay = null): ?string
    {
        $this->lastRequest = $request;

        $location = $this->sf2900->getSoapLocation($location);

        return parent::__doRequest($request, $location, $action, $version, $oneWay);
    }

    public function __getLastRequest(): ?string
    {
        return $this->lastRequest ?? parent::__getLastRequest();
    }
}
