<?php

namespace Src\Solid\OCP;

interface EncoderFactoryInterface
{
    public function createEncoder(string $format):EncoderInterface;
}
