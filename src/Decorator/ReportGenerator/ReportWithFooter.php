<?php

namespace Src\Decorator\ReportGenerator;

class ReportWithFooter extends ReportDecorator
{

    public function generate(): string
    {
        return <<< FOOTER
            {$this->reportGenerator->generate()}
            report footer
            FOOTER;
    }
}
