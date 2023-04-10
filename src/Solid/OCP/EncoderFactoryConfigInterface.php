<?php

namespace Src\Solid\OCP;

interface EncoderFactoryConfigInterface
{
    public function addEncoderFactory(string $format, callable $factory): void;
}
