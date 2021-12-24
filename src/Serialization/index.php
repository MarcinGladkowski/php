<?php

/** serialize() */
echo serialize(true) . PHP_EOL;
echo serialize(1) . PHP_EOL;
echo serialize(2.4) . PHP_EOL;
echo serialize("Hello world") . PHP_EOL;
echo serialize([1, 2 ,3]) . PHP_EOL;
echo serialize(['a' => 1, 'b' => 2]) . PHP_EOL;

/** To get these values back you can use unserialize() function */