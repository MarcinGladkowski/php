<?php

/**
 * Include - throwing a Warning when file is not exists
 * Require - throwing a Error when file is not exists
 *
 * suffix _once mean the file is attached once time.
 */

include_once 'first_to_include.php';

$x++;

echo $x . PHP_EOL;

/** not using _once can overwrite our data/variables etc */
include 'first_to_include.php';

echo $x . PHP_EOL;
