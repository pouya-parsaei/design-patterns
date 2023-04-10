<?php

namespace Src\Solid\OCP;


class GenericEncoder
{

    public function __construct(private EncoderFactoryInterface $encoderFactory)
    {
    }

    public function encode($data, string $format): string
    {
        $encoder = $this->encoderFactory->createEncoder($format);

        return $encoder->encode($data);
    }
}
