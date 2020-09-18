<?php

/*
 * This file is part of itk-dev/datatidy.
 *
 * (c) 2020 ITK Development
 *
 * This source file is subject to the MIT license.
 */

namespace ItkDev\Serviceplatformen\Service;

use ItkDev\Serviceplatformen\Request\RequestGeneratorInterface;
use SoapClient;

/**
 * Class AbstractService
 */
abstract class AbstractService
{
    private $requestGenerator;
    private $soapClient;

    /**
     * AbstractService constructor.
     *
     * @param SoapClient $soapClient
     * @param RequestGeneratorInterface $requestGenerator
     */
    public function __construct(SoapClient $soapClient, RequestGeneratorInterface $requestGenerator)
    {
        $this->soapClient = $soapClient;
        $this->requestGenerator = $requestGenerator;
    }

    /**
     * Performs a call to the provided operation with the message in the right context.
     *
     * @param string $operation the operation on the service to call.
     * @param array $message the message to be passed to the operation.
     *
     * @return object the raw response.
     */
    public function makeCall(string $operation, array $message): object
    {
        $request = $this->requestGenerator->makeRequest($message);

        return call_user_func_array([$this->soapClient, $operation], [$request]);
    }
}
