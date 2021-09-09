<?php declare(strict_types=1);

class SampleController
{
    /**
     * @Route('/')
     */
    public function myAction()
    {
        return 'Hello world';
    }
}