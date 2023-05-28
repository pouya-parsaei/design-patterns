<?php

namespace Src\Command\FileManager\Commands;

use Src\Command\FileManager\FileCommand;
use Src\Command\FileManager\FileManager;

class SaveFileCommand implements FileCommand
{
    public function __construct(
        private FileManager $fileManager,
        private string $file
    )
    {

    }

    public function execute()
    {
        $this->fileManager->save($this);
    }
}
