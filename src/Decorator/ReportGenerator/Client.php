<?php

namespace Src\Decorator\ReportGenerator;

class Client
{
    public function getReport()
    {
        $report = new ReportService();
        $reportWithHeader = new ReportWithHeader($report);

        echo $reportWithHeader->generate();
    }
}
