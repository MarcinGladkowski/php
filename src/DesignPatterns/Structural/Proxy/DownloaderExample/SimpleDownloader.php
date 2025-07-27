<?php

namespace App\DesignPatterns\Structural\Proxy\DownloaderExample;

class SimpleDownloader implements DownloaderInterface
{
    public function download(string $url): string
    {
        return file_get_contents($url);
    }
}