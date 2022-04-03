<?php

/**
 * Namespaces are useful to avoid problem with loading classes with the same names. The behaviour
 * is the same for constants and functions also.
 * The namespaces working without composer also.
 */

require_once 'Transaction.php';

use SecondPackage\Transaction;

/**
 * This class does not have namespace. The class will be put to global scope.
 */
var_dump(new Transaction());

/**
 * Without "\" PHP looking for a function in local namespace and then in global namespace.
 * This mean we can easily overwrite global functions
 */
explode(' ', "Hello world");

function explode(): string
{
    return "Foo";
}

/**
 * To avoid this problem we can using global functions with backslash in front of function name
 * \explode() -> It should have positive impact on speed of interpreter (avoid looking for the function
 * in local scope).
 */

\explode(" ", "hello world");