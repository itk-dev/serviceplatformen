<?php

namespace ItkDev\Serviceplatformen\Service\SF2900;

use WsdlToPhp\PackageBase\AbstractStructBase;

class Result
{
    public function __construct(
        public readonly AbstractStructBase $request,
        public readonly ?AbstractStructBase $response,
    ) {
    }
}
