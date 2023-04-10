<?php

namespace Src\Solid\OCP;

interface EncoderInterface
{
    public function encode($data): string;
}
