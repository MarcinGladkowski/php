<?php


function square(int $num) {
    return $num * $num;
}

function cube(int $num) {
    return $num * $num * $num;
}

function addAndModify(int $num1, int $num2, $modifier) {
    $total = $num1 + $num2;
    return call_user_func($modifier, $total);
}

echo addAndModify(1, 2, 'square') . PHP_EOL;
echo addAndModify(1, 2, 'cube') . PHP_EOL;


// with anonymous function
$square = static function (int $num) {
    return $num * $num;
};

echo addAndModify(1, 2, $square) . PHP_EOL;

// inject anonymous function
echo addAndModify(1, 2, static function (int $num) {
   return $num * $num;
}) . PHP_EOL;
