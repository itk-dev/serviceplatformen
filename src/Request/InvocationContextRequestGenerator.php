<?php

/**
 * This file is part of itk-dev/serviceplatformen.
 *
 * (c) 2020 ITK Development
 *
 * This source file is subject to the MIT license.
 */

namespace ItkDev\Serviceplatformen\Request;

/**
 * Class InvocationContextRequestGenerator
 */
class InvocationContextRequestGenerator implements RequestGeneratorInterface
{
    private $serviceAgreementUuid;
    private $userSystemUuid;
    private $serviceUuid;
    private $userUuid;

    /**
     * InvocationContextRequestGenerator constructor.
     *
     * @param string $serviceAgreementUuid the uuid of the service agreement.
     * @param string $userSystemUuid the uuid of the user system.
     * @param string $serviceUuid the uuid of the called service.
     * @param string $userUuid the uuid of the user, usually the uuid of the calling municipality.
     */
    public function __construct(string $serviceAgreementUuid, string $userSystemUuid, string $serviceUuid, string $userUuid)
    {
        $this->serviceAgreementUuid = $serviceAgreementUuid;
        $this->userSystemUuid = $userSystemUuid;
        $this->serviceUuid = $serviceUuid;
        $this->userUuid = $userUuid;
    }

    /**
     * {@inheritDoc}
     */
    public function makeRequest(array $message): array
    {
        $context = [
            'ServiceAgreementUUID' => $this->serviceAgreementUuid,
            'UserSystemUUID' => $this->userSystemUuid,
            'ServiceUUID' => $this->serviceUuid,
            'UserUUID' => $this->userUuid,
        ];

        $request = [
            'InvocationContext' => $context,
        ];

        return array_merge($request, $message);
    }
}
