<?php declare(strict_types=1);

namespace Root\Attributes;

class SampleController
{
    #[Route(path: '/')]
    public function index()
    {
        return 'Hello world!';
    }
}