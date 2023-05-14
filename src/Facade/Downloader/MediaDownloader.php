<?php

namespace Src\Facade\Downloader;

class MediaDownloader
{
    public function __construct(private FileDownloader $fileDownloader, private FileEncoder $fileEncoder)
    {

    }

    public function downloadMP3(string $url): void
    {
        $downloadedFile = $this->fileDownloader->download($url, 'sample-file.mp3');

        $encodedFile = $this->fileEncoder->encodeToMP3($downloadedFile);
    }
}
