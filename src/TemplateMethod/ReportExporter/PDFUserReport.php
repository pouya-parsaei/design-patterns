<?php

namespace Src\TemplateMethod\ReportExporter;

class PDFUserReport extends  UserReport
{

    public function __construct(private \PDFlib $pdfLib)
    {

    }
    protected function export($preparedData)
    {
        // create pdf
    }
}
