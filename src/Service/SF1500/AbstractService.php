<?php

/**
 * This file is part of itk-dev/serviceplatformen.
 *
 * (c) 2020 ITK Development
 *
 * This source file is subject to the MIT license.
 */

namespace ItkDev\Serviceplatformen\Service\SF1500;

use ItkDev\Serviceplatformen\Service\Exception\InvalidQueryException;
use ItkDev\Serviceplatformen\Service\SF1500\Model\AbstractModel;
use ItkDev\Serviceplatformen\SF1500\Person\StructType\FiltreretOejebliksbilledeType;

/**
 * @template T of AbstractModel
 */
abstract class AbstractService extends SF1500 implements ServiceInterface
{
    static protected $validFilters = [];

    /**
     * {@inheritdoc}
     */
    public function soeg(array $query, array $fields = []): array
    {
        $this->validateQuery($query);
        $data = $this->doSoeg($query);

        if (empty($data)) {
            return [];
        }

        if (!method_exists($data, 'getIdListe')) {
            return [];
        }
        $liste = $data->getIdListe();

        if (!method_exists($liste, 'getUUIDIdentifikator')) {
            return [];
        }
        $ids = $liste->getUUIDIdentifikator();
        if (empty($ids) || !is_array($ids)) {
            $ids = [];
        }

        return $this->list($ids, $fields);
    }

    protected function validateQuery(array $query) {
        if (empty($query) || empty(array_filter($query))) {
            throw new InvalidQueryException('Empty query');
        }
        $usedFilters = array_keys($query);
        $invalidFilters = array_diff($usedFilters, static::$validFilters);
        if (!empty($invalidFilters)) {
            throw new InvalidQueryException(sprintf(
                'Invalid filters: %s; Valid filters: %s.',
                json_encode($invalidFilters),
                json_encode(static::$validFilters)
            ));
        }
    }

    abstract protected function doSoeg(array $query): mixed;
}
