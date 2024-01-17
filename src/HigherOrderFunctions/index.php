<?php

/**
 * Higher order functions in PHP
 *
 *  - treated as a first-class citizens
 *  - function can be assign to variable
 *  - function can be passed as argument to other function
 *  - function can be return from other function
 *
 *  - allows to create more reusable code
 *  - more abstracted code
 *  - promoting immutability
 *  - promoting pure functions
 */


# examples
$double = static fn ($value) => $value * 2;

$doubles = array_map($double, [2, 3, 4]);

print_r($doubles); # 4, 6, 8

# array_filter
$even = static fn($value) => $value % 2 === 0;

$eventNumbers = array_filter([1, 2, 3, 4, 5, 6], $even);

print_r($eventNumbers);

