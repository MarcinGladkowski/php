<?php

/**
 * https://medium.com/@bikramtuladhar/callback-in-php-explained-ef2957d5383e
 * https://www.exakat.io/en/the-art-of-php-callback/
 */

function add(int $a, int $b): int
{
    return $a + $b;
}

function sub(int $a, int $b): int
{
    return $a - $b;
}

/**
 * @throws ReflectionException
 */
function calculate()
{
    $arguments = func_get_args();
    $callable = array_shift($arguments); // get callable function

    return (new ReflectionFunction($callable))->invokeArgs($arguments);
}

var_dump(
    calculate(static fn($a, $b) => $a + $b, 10, 20)
);

var_dump(
    calculate('add', 5, 10)
);


function multiplyBy($data, $multiplyByNumber): float|int
{
    if (!is_numeric($data) || !is_numeric($multiplyByNumber)) {
        throw new InvalidArgumentException();
    }

    return $data * $multiplyByNumber;
}

var_dump(
    calculate('multiplyBy', 2, 10)
);





