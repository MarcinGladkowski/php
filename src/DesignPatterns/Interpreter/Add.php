<?php

declare(strict_types=1);

namespace App\DesignPatterns\Interpreter;

class Add implements Expression
{
    public function __construct(
        private readonly Expression $left,
        private readonly Expression $right,
    )
    {
    }

    public function interpret(array $context): int
    {
        return $this->left->interpret($context) + $this->right->interpret($context);
    }
}
