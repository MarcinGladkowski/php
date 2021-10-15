<?php

$a = [];
$a[] = 'A';
$a[] = 'B';

print_r($a);

unset($a[1]);

$a[] = 'C';

print_r($a); // will be gap in indexes, it can cause a problem when you use for loop by indexes
