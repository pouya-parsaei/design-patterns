<?php

namespace Src\AbstractFactory\DocumentFactory\WordDocument;

use Src\AbstractFactory\DocumentFactory\DocumentBody;
use Src\AbstractFactory\DocumentFactory\DocumentFactory;
use Src\AbstractFactory\DocumentFactory\DocumentFooter;
use Src\AbstractFactory\DocumentFactory\DocumentHeader;

class WordDocumentFactory implements DocumentFactory
{

    public function createDocumentHeader(): DocumentHeader
    {
        return new WordDocumentHeader();
    }

    public function createDocumentBody(): DocumentBody
    {
        return new WordDocumentBody();
    }

    public function createDocumentFooter(): DocumentFooter
    {
        return new WordDocumentFooter();
    }
}
