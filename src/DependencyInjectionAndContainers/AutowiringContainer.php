<?php declare(strict_types=1);

namespace App\DependencyInjectionAndContainers;

use Psr\Container\ContainerInterface;
use ReflectionClass;

class AutowiringContainer implements ContainerInterface
{
    private array $entries = [];

    public function get($id)
    {
        if ($this->has($id)) {
            $entry = $this->entries[$id];

            if (is_callable($entry)) {
                return $entry($this);
            }
            $id = $entry;
        }
        return $this->resolve($id);
    }

    public function has(string $id): bool
    {
        return isset($this->entries[$id]);
    }

    public function set(string $id, callable|string $concrete)
    {
        $this->entries[$id] = $concrete;
    }

    private function resolve(string $id): object|callable
    {
        /**
         * Steps to implement
         * 1. Inspect the class that we are trying to get from the container
         * 2. Inspect the constructor of class
         * 3. Inspect the constructor parameters (dependencies)
         * 4. If the constructor parameter is a class then try to resolve that class using the container
         */

        $reflection = new ReflectionClass($id);

        $constructorDependencies = $reflection->getConstructor()?->getParameters();

        // base condition
        if (!$constructorDependencies) {
            return new $id;
        }

        $dependencies = array_map(
            function (\ReflectionParameter $reflectionParameter) use ($id) {

                $name = $reflectionParameter->getName();
                $type = $reflectionParameter->getType();

                if (!$type) {
                    throw new ContainerException(sprintf("Failed to resolve class %s because is missing a type hint", $id));
                }

                if ($type instanceof \ReflectionUnionType) {
                    throw new ContainerException(sprintf("Failed to resolve class %s because of union type hint", $id));
                }

                if ($type instanceof \ReflectionNamedType && !$type->isBuiltin()) {
                    return $this->get($type->getName());
                }

                throw new ContainerException(sprintf("Failed to resolve class %s", $id));

            }, $constructorDependencies);

        return $reflection->newInstanceArgs($dependencies);
    }
}