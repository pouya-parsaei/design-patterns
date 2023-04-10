<?php

namespace Src\Solid\LSP;

interface FileServiceInterface
{
    public function encode(EncodeableFileInterface $file);
}
