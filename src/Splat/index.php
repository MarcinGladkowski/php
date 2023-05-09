<?php

class Event {}

class Dispatcher
{
    public function dispatch(Event ...$events): void
    {
        return;
    }
}


$dispatcher = new Dispatcher();

$dispatcher->dispatch();
$dispatcher->dispatch(new Event());
$dispatcher->dispatch(new Event(), new Event());
$dispatcher->dispatch(...[new Event(), new Event()]);
