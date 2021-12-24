<?php declare(strict_types=1);

namespace App\Static\LateStaticBinding;

class ClassB extends ClassA
{
    protected static string $name = 'B';
}