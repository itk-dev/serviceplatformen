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
    private ?string $lastFormattedRequest;
    private bool $disableCache;

    public function __construct(?string $wsdl, ?array $options = null)
    {
        $this->disableCache = (bool) ($options[SoapClientBase::SOAP_DISABLE_CACHE] ?? false);
        unset($options[SoapClientBase::SOAP_DISABLE_CACHE]);

        parent::__construct($wsdl, $options);
    }

    /**
     * TODO: Update signature cf. https://www.php.net/manual/en/soapclient.dorequest.php.
     */
    #[\ReturnTypeWillChange]
    public function __doRequest($request, $location, $action, $version, $oneWay = null)
    {
        $this->lastRequest = $request;

        $location = $this->sf2900->getSoapLocation($location);

        return $this->disableCache
            ? $this->doRequest($request, $location, $action, $version, $oneWay)
            : $this->sf2900->cacheSoapRequest(
                [__METHOD__, $request, $location, $action, $version],
                fn () => $this->doRequest($request, $location, $action, $version, $oneWay)
            );
    }

    private function doRequest(
        string $request,
        string $location,
        string $action,
        int $version,
        bool $oneWay = false,
    ): ?string {
        $formattedRequest = $this->sf2900->formatSoapRequest($request, $location, $action, $version, $oneWay);
        $this->lastFormattedRequest = $formattedRequest;

        return parent::__doRequest($formattedRequest, $location, $action, $version, $oneWay);
    }

    #[\ReturnTypeWillChange]
    public function __getLastRequest()
    {
        return $this->lastRequest ?? parent::__getLastRequest();
    }

    public function __getLastFormattedRequest(): ?string
    {
        return $this->lastFormattedRequest;
    }
}
