<?php

declare(strict_types=1);

namespace App\DesignPatterns\Interpreter;

/**
 * Terminal expression represents value
 */
class Number implements Expression
{
    public function __construct(private readonly int $number)
    {
    }

    public function interpret(array $context): int
    {
        return $this->number;
    }
}
