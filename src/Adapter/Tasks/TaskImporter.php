<?php

namespace Src\Adapter\Tasks;

interface TaskImporter
{
    public function import(): array;
}
