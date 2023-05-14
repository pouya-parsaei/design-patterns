<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Src\Solid\LSP\EncodeableFileInterface;
use Src\Solid\LSP\FileServiceInterface;

class FileController extends Controller
{
    public function download(FileServiceInterface $fileService, EncodeableFileInterface $encodeableFile)
    {
        return $fileService->encode($encodeableFile);
    }
}
