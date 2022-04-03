<?php declare(strict_types=1);

namespace App\DependencyInjectionAndContainers;

use Psr\Container\ContainerInterface;

class Container implements ContainerInterface
{
    private array $entries = [];

    public function get($id)
    {
        if (!$this->has($id)) {
            throw new NotFoundException("Class "  . $id . " has no binding");
        }

        $entry = $this->entries[$id];

        return $entry($this);
    }

    public function has(string $id): bool
    {
        return isset($this->entries[$id]);
    }

    public function set(string $id, callable $concrete)
    {
        $this->entries[$id] = $concrete;
    }
}