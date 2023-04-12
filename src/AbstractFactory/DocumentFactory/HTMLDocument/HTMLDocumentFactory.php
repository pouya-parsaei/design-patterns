<?php

namespace Src\AbstractFactory\DocumentFactory\HTMLDocument;

use Src\AbstractFactory\DocumentFactory\DocumentBody;
use Src\AbstractFactory\DocumentFactory\DocumentFactory;
use Src\AbstractFactory\DocumentFactory\DocumentFooter;
use Src\AbstractFactory\DocumentFactory\DocumentHeader;

class HTMLDocumentFactory implements DocumentFactory
{

    public function createDocumentHeader(array $params): DocumentHeader
    {
        return new HTMLDocumentHeader($params);
    }

    public function createDocumentBody(array $params): DocumentBody
    {
        return new HTMLDocumentBody($params);
    }

    public function createDocumentFooter(array $params): DocumentFooter
    {
        return new HTMLDocumentFooter($params);
    }
}
