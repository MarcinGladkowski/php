<?php


/**
 * Custom error handler to log deprecation warnings without displaying them to users.
 */
function custom_error_handler( $errno, $errstr, $errfile, $errline ) {
    if ( $errno === E_DEPRECATED ) {
        error_log( "Custom deprecation Warning: $errstr in $errfile on line $errline" );
        return true; // Prevent PHP's default error handler from running
    }
    return false;
}

// Set the custom error handler
set_error_handler( 'custom_error_handler' );

/**
 * Enable error reporting to capture deprecation warnings.
 */
error_reporting( E_ALL );

// Deprecated function that triggers a deprecation warning
$class = new class () {};
$class->dynamicProperty = 'test';



