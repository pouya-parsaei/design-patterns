<?php

namespace Src\Solid\LSP;

interface DownloadableFileInterface extends FileInterface
{
    public function download():bool;
}
