<?php

namespace Src\Solid\OCP;

class EncoderFactory implements EncoderFactoryInterface, EncoderFactoryConfigInterface
{
    private array $factories = [];

    public function addEncoderFactory(string $format, callable $factory): void
    {
        $this->factories[$format] = $factory;
    }

    public function createEncoder(string $format): EncoderInterface
    {
        if (!isset($this->factories[$format])) {
            throw new \InvalidArgumentException('invalid format');
        }

        $factory = $this->factories[$format];

        return $factory();
    }
}
