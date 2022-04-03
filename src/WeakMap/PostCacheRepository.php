<?php declare(strict_types=1);

use JetBrains\PhpStorm\Pure;

class Post {}

class PostCacheRepository
{
    public function __construct(private WeakMap $postCache) {}

    public function getPost(Post $post)
    {
        if (!$this->postCache->offsetExists($post)) {
            $this->postCache[] = $this->loadPostData($post);
        }

        return $this->postCache->offsetGet($post);
    }

    private function loadPostData(Post $post): Post
    {
        // dummy return
        return new Post();
    }
}