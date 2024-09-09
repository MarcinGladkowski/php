<?php

namespace App\Deque;

/**
 * Based on https://withinboredom.info/2024/06/26/algorithms-in-php-deques-and-circular-buffers-linked-lists
 *
 * PHP functions array_shift(), and array_unshift() are very slow for arrays with a lot of elements
 * Deque is called 'Deck'
 * Is good for resolving problems like `limited queue` e.g.
 * Adding elements to the Head or Tail
 */

class Neive
{
    private array $buffer = [];

    public function push(): void
    {
        $this->buffer[] = $this;
    }

    public function pop(): mixed
    {
       return array_pop($this->buffer);
    }

    public function shift(): mixed
    {
        return array_shift($this->buffer);
    }

    public function unshift(): void
    {
        array_unshift($this->buffer);
    }
}
