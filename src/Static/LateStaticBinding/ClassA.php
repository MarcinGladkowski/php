<?php declare(strict_types=1);

namespace App\Static\LateStaticBinding;

class ClassA
{
    protected static string $name = 'A';

    public static function getName(): string
    {
        // replace with self to see problem
        return static::$name;
    }

    public static function make(): static
    {
        return new static();
    }
}