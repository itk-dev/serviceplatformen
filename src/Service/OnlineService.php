<?php

/**
 * This file is part of itk-dev/serviceplatformen.
 *
 * (c) 2020 ITK Development
 *
 * This source file is subject to the MIT license.
 */

namespace ItkDev\Serviceplatformen\Service;

use ItkDev\Serviceplatformen\Service\Exception\NoCvrFoundException;
use ItkDev\Serviceplatformen\Service\Exception\ServiceException;

/**
 * Class OnlineService
 */
class OnlineService extends AbstractService
{
    /**
     * Performs a call to the getLegalUnit operation on the Online Service.
     * Returns the response in raw object form.
     *
     * @param string $cvr The CVR number to look up.
     *
     * @return object the raw response in object form.
     *
     * @throws ServiceException
     */
    public function getLegalUnit(string $cvr)
    {
        $request = [
          'GetLegalUnitRequest' => [
              'LegalUnitIdentifier' => $cvr,
          ],
        ];

        try {
            return $this->makeCall('getLegalUnit', $request);
        } catch (ServiceException $exception) {
            throw $this->handleException($exception);
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
    private function handleException(ServiceException $exception)
    {
        if (strpos($exception->getMessage(), "Required property '/virksomhed/CVRNummer' missing.") !== false) {
            return new NoCvrFoundException($exception->getMessage(), $exception->getCode());
        }

        return $exception;
    }
}
