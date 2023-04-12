<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Src\AbstractFactory\DocumentFactory\DocumentFactory;

class ReportController extends Controller
{
    public function __construct(private DocumentFactory $documentFactory)
    {

    }

    public function printReport(Request $request)
    {
        $header = $this->documentFactory->createDocumentHeader(['title' => 'title test']);
        $body = $this->documentFactory->createDocumentBody(['content' => 'content test']);
        $footer = $this->documentFactory->createDocumentFooter(['footer_text' => 'footer test']);

        return view('document', compact('header', 'body', 'footer'));
    }
}
