<?php

namespace Src\Decorator\ReportGenerator;

abstract class ReportDecorator implements ReportGenerator
{

    public function __construct(protected ReportGenerator $reportGenerator)
    {
    }

}
