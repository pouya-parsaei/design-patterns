<?php

namespace Src\AbstractFactory\DocumentFactory\HTMLDocument;

use Src\AbstractFactory\DocumentFactory\DocumentHeader;

class HTMLDocumentHeader implements DocumentHeader
{

    public function __construct(private array $params)
    {

    }

    public function generate(): string
    {
        return "
                <html>
                    <head>
                        <title>{$this->params['title']}</title>
                    </head>
                ";
    }
}
