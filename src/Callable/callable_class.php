<?php

class Modifiers
{
    public function square(int $num) {
        return $num * $num;
    }

    public function cube(int $num) {
        return $num * $num * $num;
    }
}

function addAndModify(int $num1, int $num2, callable $modifier) {
    $total = $num1 + $num2;
    return call_user_func($modifier, $total); // the same as $modifier($total)
}

var_dump(addAndModify(1, 2, [Modifiers::class, 'square']));
var_dump(addAndModify(1, 2, [Modifiers::class, 'cube']));

// With instance
$modifier = new Modifiers();

var_dump(addAndModify(1, 2, [$modifier, 'cube']));

