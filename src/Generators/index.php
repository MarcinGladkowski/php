<?php

/**
 * This function return Generator to iterate over it
 */
function twoNumbers( ): Generator
{
    yield 1;
    yield 2;
}

/**
 * Iterating without loop
 */
$twoNumber = twoNumbers();
var_dump($twoNumber->current()); // return 1
$twoNumber->next();
var_dump($twoNumber->current()); // return 2
$twoNumber->next();
var_dump($twoNumber->current()); // return null;

/**
 * Iterate over using loop
 */
foreach(twoNumbers() as $number) {
    var_dump($number);
}


/**
 * This code of block will cause an Fatal Error of allowed memory
 *
 * $numbers = range(1, 3_000_000);
 *
 */


$start = 1;
$end = 3_000_000;

/**
 * But using Generator it's possible to iterate over 3_000_000 numbers
 */

function lazyLoad(int $start, int $end): Generator
{
    for ($i = $start; $i < $end; $i++) {
        yield $i;
    }
 }

foreach(lazyLoad($start, $end) as $item) {
    var_dump($item);
}

