<?php

namespace Src\Solid\OCP;

class JsonEncoder implements EncoderInterface
{
    public function encode($data): string
    {
        return '{data:""}';
    }
}
