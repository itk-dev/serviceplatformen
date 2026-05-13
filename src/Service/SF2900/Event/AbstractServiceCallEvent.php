<?php

/**
 * This file is part of itk-dev/serviceplatformen.
 *
 * (c) 2020 ITK Development
 *
 * This source file is subject to the MIT license.
 */

namespace ItkDev\Serviceplatformen\Service\SF2900\Event;

use Symfony\Contracts\EventDispatcher\Event;
use WsdlToPhp\PackageBase\AbstractStructBase;

abstract class AbstractServiceCallEvent extends Event
{
    public function __construct(
        private readonly AbstractStructBase $request,
        private readonly ?AbstractStructBase $response = null,
    ) {
    }

    public function getRequest(): AbstractStructBase
    {
        return $this->request;
    }

    public function getResponse(): ?AbstractStructBase
    {
        return $this->response;
    }
}
