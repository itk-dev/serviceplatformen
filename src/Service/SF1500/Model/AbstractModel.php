<?php

/**
 * This file is part of itk-dev/serviceplatformen.
 *
 * (c) 2020 ITK Development
 *
 * This source file is subject to the MIT license.
 */

namespace ItkDev\Serviceplatformen\Service\SF1500\Model;

abstract class AbstractModel implements \JsonSerializable
{
    protected array $data;
    protected array $relations;

    public function __construct(array $data)
    {
        if (!isset($data['id'])) {
            throw new \InvalidArgumentException(sprintf('Property id not defined in %s', static::class));
        }
        $this->data = $data;
        $this->relations = [];
        $this->build($data);
    }

    /**
     * All properties (apart from id) are nullable.
     *
     * @param $name
     * @return mixed|null
     */
    public function __get($name)
    {
        return $this->data[$name] ?? null;
    }

    public function __set($name, $value): self
    {
        $this->data[$name] = $value;

        return $this;
    }

    public function offsetExists($offset): bool
    {
        return \array_key_exists($offset, $this->data);
    }

    public function offsetGet($offset)
    {
        return $this->data[$offset];
    }

    public function offsetSet($offset, $value): void
    {
        throw new \RuntimeException(sprintf('%s is immutable', static::class));
    }

    public function offsetUnset($offset): void
    {
        throw new \RuntimeException(sprintf('%s is immutable', static::class));
    }

    public function jsonSerialize()
    {
        return ['data' => $this->data, 'relations' => $this->relations];
    }

    public function getData()
    {
        return $this->data;
    }

    protected function build(array $data)
    {
    }

    public function setRelation(string $name, string $type, $value)
    {
        $this->relations[$name][$type] = $value;
    }

    public function getRelation(string $name, ?string $type)
    {
        $value = $this->relations[$name] ?? null;

        if (null !== $type) {
            $value = $value[$type] ?? null;
        }

        return $value;
    }
}
