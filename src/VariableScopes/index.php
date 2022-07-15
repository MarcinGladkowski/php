<?php

/**
 * local scope
 * global scope
 */
$x = 5; // global scope

function foo() {
    // local scope
    // echo $x; undefined variable

    global $x; // access to variable from global scope

    echo $GLOBALS['x'] . PHP_EOL;
}

foo();

/** Using static keyword */
function getValue() {
    // useful for 'caching' variables
    static $value = null;

    if ($value === null) {
        $value = someVeryExpensiveFunction();
    }

    return $value;
}

function someVeryExpensiveFunction() {
    sleep(2);

    echo 'Processing' . PHP_EOL;

    return 10;
}

getValue();
getValue();
getValue();