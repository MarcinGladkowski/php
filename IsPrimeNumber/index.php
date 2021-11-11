<?php


function isPrimeNumber($n): bool {
    $x = $n**0.5;

    for ($i = 2; $i <= $x; $i++) {
        if ($n % $i == 0) {
           return false;
        }
    }
    return true;
}

function betterIsPrimeNumber(int $n, int $i = 2): bool {

    $n = (int) abs((float) $n);

    if (($n % $i === 0 && $n !== $i) || $n === 1) {
        return false;
    }

    if ($i > $n**0.5) {
        return true;
    }

    return betterIsPrimeNumber($n, $i + 1);
}


assert(true === isPrimeNumber(23));
assert(true === isPrimeNumber(2));
assert(true === isPrimeNumber(3));
assert(false === isPrimeNumber(88));
assert(false === isPrimeNumber(87));
assert(false === isPrimeNumber(4));


assert(true === betterIsPrimeNumber(23));
assert(true === betterIsPrimeNumber(2));
assert(true === betterIsPrimeNumber(3));
assert(false === betterIsPrimeNumber(88));
assert(false === betterIsPrimeNumber(4));
assert(false === betterIsPrimeNumber(87));
assert(false === betterIsPrimeNumber(-1));
