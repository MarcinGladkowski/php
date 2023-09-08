<?php

declare(strict_types=1);

namespace App\DesignPatterns\Interpreter;

interface Expression
{
    public function interpret(array $context): int;
}
