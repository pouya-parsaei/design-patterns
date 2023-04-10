<?php

namespace Src\Solid\LSP;

class DropBoxFile implements DownloadableFileInterface
{

    public function rename()
    {
        // TODO: Implement rename() method.
    }

    public function move()
    {
        // TODO: Implement move() method.
    }

    public function copy()
    {
        // TODO: Implement copy() method.
    }

    public function download(): bool
    {
        return 'dropbox download';
    }
}
