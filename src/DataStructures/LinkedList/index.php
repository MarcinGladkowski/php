<?php

/**
 * Types of lists
 * - Singly linked List
 * - Circular linked  list
 * - Doubly linked list
 * - Circular doubly linked list
 */

/**
 * Singly linked list
 */
class Node
{
    public function __construct(
        public $value,
        public ?Node $next = null
    )
    {
    }
}

class LinkedList
{

    public function __construct(public ?Node $head = null, public ?Node $tail = null)
    {
    }

    public function prepend($value): Node
    {
        $this->head = $node = new Node($value, $this->head);
        $this->tail ??= $node;

        return $node;
    }

    public function insertAfter($value, Node $after)
    {
        $after->next = $node = new Node($value, $after->next);

        while ($after === $this->tail) {
            $this->tail = $node;
        }

        return $after->next;
    }

    public function append($value): Node
    {
        if (!$node = $this->head) {
            $this->head = new Node($value);
        }

        return $this->insertAfter($value, $this->tail);
    }


    public function shift(): ?Node
    {
        if (!$node = $this->head) {
            return null;
        }

        if (!$this->head = $node->next) {
            $this->tail = null;
        }

        $node->next = null;

        return $node;
    }


    public function print(): void
    {
        $node = $this->head;

        while ($node) {
            echo $node->value;

            if ($node = $node->next) {
                echo ' -> ';
            }
        }

        echo "\n";
    }
}

$list = new LinkedList();
$a = $list->prepend('a');
$b = $list->prepend('b');

$list->print();


$list->insertAfter('c', $b);

$list->print();

$list->shift();
$list->print();