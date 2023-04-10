<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Src\Solid\LSP\FileServiceInterface;

class FileController extends Controller
{
    public function download(FileServiceInterface $fileService)
    {
        return $fileService->encode();// inja chi bayad pass bedim?
    }
}
