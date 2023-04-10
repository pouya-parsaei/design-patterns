<?php

namespace Src\Solid\LSP;

interface FileInterface
{
    public function rename();

    public function move();

    public function copy();
}
