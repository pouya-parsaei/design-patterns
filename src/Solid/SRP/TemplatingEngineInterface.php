<?php

namespace Src\Solid\SRP;

interface TemplatingEngineInterface
{

    public function render(string $string, array $params): string;
}
