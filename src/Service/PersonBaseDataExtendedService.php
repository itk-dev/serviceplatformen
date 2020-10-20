<?php

/**
 * This file is part of itk-dev/serviceplatformen.
 *
 * (c) 2020 ITK Development
 *
 * This source file is subject to the MIT license.
 */

namespace ItkDev\Serviceplatformen\Service;

use ItkDev\Serviceplatformen\Service\Exception\NoPnrFoundException;
use ItkDev\Serviceplatformen\Service\Exception\ServiceException;

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
     *
     * @throws ServiceException
     */
    public function personLookup(string $pnr): object
    {
        try {
            return $this->makeCall('personLookup', ['PNR' => $pnr]);
        } catch (ServiceException $exception) {
            throw $this->handleServiceException($exception);
        }
    }

    /**
     * Returns specific exception based on the generic ServiceException.
     * If no specific exception can be determined, the original exception will be returned.
     *
     * @param ServiceException $exception the exception to determine.
     *
     * @return ServiceException the specific exception or the original exception if no specific could be determined.
     */
    private function handleServiceException(ServiceException $exception): ServiceException
    {
        if (strpos($exception->getMessage(), 'PNR not found') !== false) {
            return new NoPnrFoundException($exception->getMessage(), $exception->getCode());
        }

        return $exception;
    }
}
