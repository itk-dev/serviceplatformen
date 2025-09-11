<?php

/**
 * This file is part of itk-dev/serviceplatformen.
 *
 * (c) 2020 ITK Development
 *
 * This source file is subject to the MIT license.
 */

namespace ItkDev\Serviceplatformen\Service\SF1500;

use ItkDev\Serviceplatformen\Service\SF1500\Model\AbstractModel;

/**
 * @template T of AbstractModel
 */
interface ServiceInterface
{
    /**
     * @return T[]
     */
    public function soeg(array $query, array $fields = []): array;

    /**
     * @param array|string[] $ids
     *
     * @return T[]
     */
    public function list(array $ids, array $fields = []): array;

    /**
     * @return T|null
     */
    public function laes(string $id, array $fields = []);

    /**
     * @template Client of SoapClientBase
     *
     * @param class-string<Client> $className
     *
     * @return Client
     */
    public function getClient(string $className, array $options = []): SoapClientBase;
}
