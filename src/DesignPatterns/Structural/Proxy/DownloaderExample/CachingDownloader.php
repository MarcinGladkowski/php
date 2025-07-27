<?php

namespace App\DesignPatterns\Structural\Proxy\DownloaderExample;

class CachingDownloader implements DownloaderInterface
{
    private array $cache = [];

    public function __construct(
        private SimpleDownloader $simpleDownloader,
    )
    {
    }

    public function download(string $url): string
    {
        if (!isset($this->cache[$url])) {
            $this->cache[$url] = $this->simpleDownloader->download($url);

            return $this->cache[$url];
        }

        return $this->cache[$url]; // retrieving from cache
    }
}