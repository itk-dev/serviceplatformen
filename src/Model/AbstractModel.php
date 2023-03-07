<?php

namespace ItkDev\Serviceplatformen\Model;

abstract class AbstractModel implements \JsonSerializable
{
    private array $data;

    public function __construct(array $data)
    {
        $this->data = $data;
        $this->build($data);
    }

    public function __get($name)
    {
        if (\array_key_exists($name, $this->data)) {
            return $this->data[$name];
        }

        throw new \OutOfBoundsException(sprintf('Undefined property: %s', $name));
    }

    public function __set($name, $value)
    {
        throw new \RuntimeException(sprintf('%s not implemented', __METHOD__));
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
        return $this->data;
    }

    public function getData()
    {
        return $this->data;
    }

    protected function build(array $data) {}
}
