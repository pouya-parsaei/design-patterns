<?php

namespace Src\Adapter\Tasks\Packages\MSTodo;

class MSTodoAPI
{
    public function getTasks(): array
    {
        return [
            new MSTodoTask('ms todo task', 'task content', 'init')
        ];
    }
}
