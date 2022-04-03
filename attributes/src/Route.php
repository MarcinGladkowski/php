<?php declare(strict_types=1);

namespace Root\Attributes;

#[\Attribute] class Route
{
    public function __construct(
      public string $path,
      public array $callback,
    ) {}

    public function execute()
    {
        return call_user_func($this->callback);
    }
}