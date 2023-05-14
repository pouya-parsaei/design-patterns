<?php

namespace Src\Proxy\CachedDownload;

interface Downloader
{
    public function download(string $url);
}
