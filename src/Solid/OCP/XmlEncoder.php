<?php

namespace Src\Solid\OCP;

class XmlEncoder implements EncoderInterface
{
    public function encode($data): string
    {
        return "encoded xml";
    }
}
