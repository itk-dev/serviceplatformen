<?php

/**
 * This file is part of itk-dev/serviceplatformen.
 *
 * (c) 2020 ITK Development
 *
 * This source file is subject to the MIT license.
 */

namespace ItkDev\Serviceplatformen\Service\SF1500;

class SoapClient extends \SoapClient
{
    public SF1500 $sf1500;

    private ?string $lastRequest;
    private ?string $lastFormattedRequest;
    private bool $disableCache;

    public function __construct(?string $wsdl, array $options = null)
    {
        $this->disableCache = (bool)($options[SoapClientBase::SOAP_DISABLE_CACHE] ?? false);
        unset($options[SoapClientBase::SOAP_DISABLE_CACHE]);

        parent::__construct($wsdl, $options);
    }

      /**
       * TODO: Update signature cf. https://www.php.net/manual/en/soapclient.dorequest.php.
       */
      #[\ReturnTypeWillChange]
    public function __doRequest($request, $location, $action, $version, $oneWay = null)
    {
        $formattedRequest = $request;
        if (null !== $this->sf1500) {
            $location = $this->sf1500->getSoapLocation($location);
            $formattedRequest = $this->sf1500->formatSoapRequest($request, $location, $action, (int)$version, (bool)$oneWay);
        }

        $this->lastRequest = $request;
        $this->lastFormattedRequest = $formattedRequest;

        if ($this->disableCache) {
            return parent::__doRequest($formattedRequest, $location, $action, $version, $oneWay);
        }

        return $this->sf1500->cacheSoapRequest(
            // Use original request in cache key.
            [__METHOD__, $request, $location, $action, $version],
            fn () => parent::__doRequest($formattedRequest, $location, $action, $version, $oneWay)
        );
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
