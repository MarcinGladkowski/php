<?php

$multi = 3;
/**
 * Function expression
 * - cannot use variables outside scope
 */
function multiply($x): float|int
{
    return $x * 2;
}

array_map('multiply', [1, 2, 3, 4]);

/**
 * Anonymous function
 */
$sum = static function($x, $y) use ($multi) {
  return $x + $y * $multi;
};

/**
 * Arrow function
 * - Using with 'fn' keyword
 * - Using 'parent' function scope - not necessary to use 'use' keyword
 */
$result_1 = array_map(static fn($number) => $number * 2 * $multi, [2, 3, 4]);
// works the same like
$result_2 = array_map(static function($number) use ($multi) { return $number * 2 * $multi; }, [2, 3, 4]);


var_dump($result_1, $result_2);
