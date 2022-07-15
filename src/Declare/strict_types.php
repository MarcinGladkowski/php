<?php

//declare(strict_types=1);

/**
 * Without declare(strict_types=1); the string parameter will be converted to int! event if we have type
 * hinted parameters!
 */

function sum(int $a, int $b) {
    return $a + $b;
}

var_dump(sum('2' ,4));