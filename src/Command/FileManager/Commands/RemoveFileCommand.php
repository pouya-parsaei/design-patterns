<?php

namespace Src\Command\FileManager\Commands;

use Src\Command\FileManager\FileCommand;
use Src\Command\FileManager\FileManager;

class RemoveFileCommand implements FileCommand
{
    public function __construct(
        private FileManager $fileManager,
        private int $fileId
    )
    {

    }

    public function execute()
    {
        $this->fileManager->remove($this);
    }
}
