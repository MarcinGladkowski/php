<?php

use App\Static\LateStaticBinding\ClassA;
use App\Static\LateStaticBinding\ClassB;

require '../../../vendor/autoload.php';


echo ClassA::getName() . PHP_EOL;
echo ClassB::getName() . PHP_EOL;