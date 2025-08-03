<?php

/**
 * ??=
 *
 * In many cases can replace isset() and ?: operators to check if value is initialized and assigned
 * Consider to use but remember about falsy values
 */

$configuration = [];

$configuration['option'] ??= 'default';

var_dump($configuration);