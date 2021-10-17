<?php

// Bad things of array
$a = [];
$a[] = 'A';
$a[] = 'B';

print_r($a);

unset($a[1]);

$a[] = 'C';

print_r($a); // will be gap in indexes, it can cause a problem when you use for loop by indexes


/**
 * Best practices:
 *
 * Instead of use arrays, use an DTO's (I mean with some public methods)
 */
$order = [
    'id' => 123,
    'desc' => 'some text',
    'canceled' => false,
    'usr' => 0,
    'skus' => [1, 'test', '123']
];

// choose, or properties promotion from PHP 8
class Order {
    public int $id;
    public string $desc;
    public bool $canceled;
    public User $user;
    public array $skus = [];
}

/**
 * Options example
 *
 * Yes - we can add and PHPdoc to show how to build options. But there are a better option.
 *
 * @param array $options
 *  - layout: Template
 *  - label: Label to use
 *  ...
 */
function generate(array $options): string {}


// better option
class FormatterOptions
{
    public string $template;
    public string $label;
    // .... can have a specific methods!

    public function setColor(string $color) {}
    public function darkMode(bool $mode) {}
    // and others
}

function generateTemplate(FormatterOptions $options): string {}
