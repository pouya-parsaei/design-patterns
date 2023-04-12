<?php

namespace Src\AbstractFactory\DocumentFactory\HTMLDocument;

use Src\AbstractFactory\DocumentFactory\DocumentFooter;

class HTMLDocumentFooter implements DocumentFooter
{

    public function __construct(private array $params)
    {

    }

    public function generate(): string
    {
        return "
                <footer>
                    <p>{$this->params['footer_text']}</p>
                </footer>
                </html>
                ";
    }
}
