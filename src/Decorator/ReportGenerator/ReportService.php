<?php

namespace Src\Decorator\ReportGenerator;

class ReportService implements ReportGenerator
{

    public function generate(): string
    {
        return 'total amount : 100000';
    }
}
