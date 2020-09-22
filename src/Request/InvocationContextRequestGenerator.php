<?php

/*
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
     * @param string $serviceAgreementUuid
     * @param string $userSystemUuid
     * @param string $serviceUuid
     * @param string $userUuid
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
