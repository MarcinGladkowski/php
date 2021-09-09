<?php declare(strict_types=1);

class Route
{
    protected string $path;
    protected array $callback;

    public function __construct(
        string $path,
        array $callback
    ) {
        $this->path = $path;
        $this->callback = $callback;
    }

    public function getPath()
    {
        return $this->path;
    }

    public function execute()
    {
        return call_user_func($this->callback);
    }
}