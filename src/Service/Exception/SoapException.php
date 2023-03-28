<?php

/**
 * This file is part of itk-dev/serviceplatformen.
 *
 * (c) 2020 ITK Development
 *
 * This source file is subject to the MIT license.
 */

namespace ItkDev\Serviceplatformen\Service\Exception;

/**
 * Class SoapException
 *
 * @package ItkDev\Serviceplatformen\Service\Exception
 */
class SoapException extends ServiceException
{
    public function __construct(readonly private \SoapFault $soapFault, readonly private ?string $request, readonly private ?string $response)
    {
        parent::__construct($this->soapFault->getMessage(), $this->soapFault->getCode(), $this->soapFault);
    }

    public function getSoapFault(): \SoapFault
    {
        return $this->soapFault;
    }

    public function getRequest(): ?string
    {
        return $this->request;
    }

    public function getResponse(): ?string
    {
        return $this->response;
    }
}
