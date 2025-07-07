<?php

class Response
{
    public function __construct(
        public string $name,
        public string $age
    )
    {
    }

    public function __toString(): string
    {
        return "{$this->name}: {$this->age}";
    }
}


$cli = new Fiber(function (string $value): Response {
    echo $value . "\n";
    echo 'What is your name?' . PHP_EOL;
    $result['name'] = Fiber::suspend();
    echo 'What is your age?' . PHP_EOL;
    $result['age'] = Fiber::suspend();

    return new Response($result['name'], $result['age']);
});

echo $cli->start('Welcome to the CLI application!');

while (!$cli->isTerminated()) {
    echo $cli->resume(trim(fgets(STDIN)));
}

echo $cli->getReturn();