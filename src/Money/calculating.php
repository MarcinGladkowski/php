<?php

var_dump(0.01 + 0.05);
var_dump(0.06 === 0.01 + 0.05); // false
var_dump(0.10 + 0.25 === 0.35); // true

/**
 * Solution 1
 * - use integers: 1,23$ => 123
 *
 * Cons:
 *  - limitation (64 bit integer)
 *  - subunits can change
 *  - handle rounding: 123.45 * 1.19 = 146.9055 (146,91)
 */
