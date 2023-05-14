<?php

namespace Src\Proxy\CachedDownload;


use Illuminate\Support\Facades\URL;

class CachedDownloader implements Downloader
{

    public function __construct(private Downloader $downloader)
    {

    }

    public function download(string $url)
    {
        $fileName = basename($url);

        if (!file_exists(__DIR__ . 'storage' . DIRECTORY_SEPARATOR . $fileName)) {
            $downloadedFile = $this->downloader->download($url);
            file_put_contents($fileName, $downloadedFile);
        }

        return URL::to('/') . 'public/storage/' . $fileName;
    }
}
