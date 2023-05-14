<?php

namespace Src\Decorator\ReportGenerator;

class ReportWithHeader extends ReportDecorator
{

    public function generate(): string
    {
        return <<< HEADER
            report header
            {$this->reportGenerator->generate()}
            HEADER;

    }
}
