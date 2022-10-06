<?php

/* INTEGERS */
/**
 * We can check size of INTEGER by
 *
 * PHP_INT_MAX;
 * PHP_INT_MIN;
 * PHP_INT_SIZE;
 *
 */

$x = 5; // base 10
$y = 0x2a; // base 16
$z = 055; // 45 - octo-numbers
$b = 0b11; // 11 binary numbers


$overflowNumber = PHP_INT_MAX + 1;
// change type from int to float
var_dump($overflowNumber);

/**
 * Casting
 *
 * (int)
 * (integer)
 *
 * Casting for example 'test' returns 0!
 *
 * helper builtin function is_int()
 *
 * From PHP 7.4 we can type 200000 like 200_000 -> be careful when casing that in string!
 *
 * (int) '200_000' -> 200
 */
