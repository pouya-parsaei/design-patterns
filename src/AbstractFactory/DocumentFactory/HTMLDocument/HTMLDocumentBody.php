<?php

namespace Src\AbstractFactory\DocumentFactory\HTMLDocument;

use Src\AbstractFactory\DocumentFactory\DocumentBody;

class HTMLDocumentBody implements DocumentBody
{
    public function __construct(private array $params)
    {

    }

    public function generate(): string
    {
        return "
                <body>
                    <p>{$this->params['content']}</p>
                </body>
                ";
    }
}
