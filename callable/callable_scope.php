<?php

$incrementBy = 2;
$increment = static function ($num) use ($incrementBy) {
  return $num + $incrementBy;
};

function addAndModify(int $num1, int $num2, callable $modifier) {
    $total = $num1 + $num2;
    return $modifier($total);
}

echo addAndModify(1, 2, $increment) . PHP_EOL;

class Increment
{
    public int $incrementBy = 1;

    public function getClosure() {
        return function ($num) {
            return $this->incrementBy + $num;
        };
    }
}

$one = new Increment();
$two = new Increment();
$two->incrementBy = 2;


$oneClosure = $one->getClosure();
$oneClosure = $oneClosure->bindTo($two);

echo addAndModify(1, 2, $oneClosure) . PHP_EOL;