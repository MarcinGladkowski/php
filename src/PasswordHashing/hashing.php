<?php
/**
 * Use in PHP password_hash() and verify the hash using: password_verify()
 * mt_rand() is not secure for crypto
 */

/**
 * Default parameter is PASSWORD_DEFAULT but we can also use:
 * PASSWORD_BCRYPT
 * PASSWORD_ARGON2I
 * PASSWORD_ARGON2ID
 */
$hash = password_hash('my_super_password', PASSWORD_DEFAULT);

/**
 * password_needs_rehash() - helper function when PHP changes default hashing algorithms
 */

/**
 * COST OF hashing: BCRYPT - default is 10. Setting a higher is harder for machine to generate it
 */

$cost = 8;

do {
    $cost++;
    $start = microtime(true);
    password_hash('test', PASSWORD_BCRYPT, ['cost' => $cost]);
    $end = microtime(true);
    print_r(sprintf("Cost => %d - time => %s \n", $cost, $end - $start));
} while (($end - $start) < 1);


/**
 * Password verify
 * Don use strict comparison operator ===
 * Use built in PHP functions - check algorithms, cost factors ...
 */
$result = password_verify('password', 'some hash');