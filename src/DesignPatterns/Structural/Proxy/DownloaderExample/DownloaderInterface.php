<?php

namespace App\DesignPatterns\Structural\Proxy\DownloaderExample;

interface DownloaderInterface
{
    public function download(string $url): string;
}