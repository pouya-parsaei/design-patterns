<?php

namespace Src\AbstractFactory\DocumentFactory\PDFDocument;

use Src\AbstractFactory\DocumentFactory\DocumentBody;
use Src\AbstractFactory\DocumentFactory\DocumentFactory;
use Src\AbstractFactory\DocumentFactory\DocumentFooter;
use Src\AbstractFactory\DocumentFactory\DocumentHeader;

class PDFDocumentFactory implements DocumentFactory
{

    public function createDocumentHeader(): DocumentHeader
    {
        return new PDFDocumentHeader();
    }

    public function createDocumentBody(): DocumentBody
    {
        return new PDFDocumentBody();
    }

    public function createDocumentFooter(): DocumentFooter
    {
        return new PDFDocumentFooter();
    }
}
