<?php

namespace Src\AbstractFactory\DocumentFactory;

interface DocumentFactory
{

    public function createDocumentHeader(array $params): DocumentHeader;

    public function createDocumentBody(array $params): DocumentBody;

    public function createDocumentFooter(array $params): DocumentFooter;

}
