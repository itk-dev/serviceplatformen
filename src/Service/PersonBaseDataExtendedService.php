<?php

/*
 * This file is part of itk-dev/serviceplatformen.
 *
 * (c) 2020 ITK Development
 *
 * This source file is subject to the MIT license.
 */

namespace ItkDev\Serviceplatformen\Service;

/**
 * Class PersonBaseDataExtendedService
 */
class PersonBaseDataExtendedService extends AbstractService
{
    /**
     * Performs a call to the personLookup operation on the PersonBaseDataExtended service.
     * Returns the response in raw object form.
     *
     * @param string $pnr the person-number to lookup.
     *
     * @return object the raw response in object form.
     */
    public function personLookup(string $pnr): object
    {
        return $this->makeCall('personLookup', ['PNR' => $pnr]);
    }
}
