<?php


// Predefined constants https://www.php.net/manual/en/errorfunc.constants.php
var_dump(error_reporting()); // returns integer int(32767)

ini_set('display_errors', 0);
ini_set('error_reporting', E_ERROR);
error_reporting(E_ERROR);

// get all errors, not working with lower setting like only E_ERROR
function displayError($errno, $errstr, $errfile, $errline)
{
    echo 'In my system the error occurred on file ' . $errfile . "\n";
}
set_error_handler('displayError');

// Set errors to E_ERROR level not display warning about trying access to undefined index
//error_reporting(E_ERROR);

$a['test'];

//error_reporting(E_ALL);

// Report all errors except E_NOTICE
//error_reporting(E_ALL & ~E_NOTICE);

