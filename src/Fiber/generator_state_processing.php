<?php

$cli = (function () {
    $state = [];
    $state['name'] = yield 'What is your name?';
    $state['age'] = yield 'How old are you?';

    return $state;
})();

$cli->rewind();
while ($cli->valid()) {
    $prompt = $cli->current();
    echo $prompt . "\n";
    $input = trim(fgets(STDIN));
    $cli->send($input);
}

$result = $cli->getReturn();

// Display the collected information
echo "\nCollected information:\n";
echo "Name: " . $result['name'] . "\n";
echo "Age: " . $result['age'] . "\n";
