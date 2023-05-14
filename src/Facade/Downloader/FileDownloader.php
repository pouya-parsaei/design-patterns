<?php

namespace Src\Facade\Downloader;

class FileDownloader
{

    public function download(string $url,string $filename):string
    {
        $file = file_get_contents($url);

        file_put_contents($filename,$file);

        return $filename;
    }
}
