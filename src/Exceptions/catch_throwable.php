<?php

function calculate() {
    10 / 0;
}


/** Catch and Error */
try {
    calculate();
} catch (\Throwable $throwable) {
    var_dump('Catched exception');
}

/** Will not work */
try {
    calculate();
} catch (\Exception $exception) {
    var_dump('Catched exception');
}
