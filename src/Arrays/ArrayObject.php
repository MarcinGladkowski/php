<?php

/**
 * What is purpose ?
 *
 * - we are sure for 100% the collection contains proper objects
 */
class TypedArray extends \ArrayObject
{
    protected string $type;

    public static function forType(string $type): self
    {
        $ret = new static();
        $ret->type = $type;
        return $ret;
    }

    public function __construct(...$args)
    {
        parent::__construct(...$args);
    }

    public function offsetSet($key, $value)
    {
        if (! $value instanceof $this->type) {
            throw new \TypeError(
                sprintf('Only values of %s are supported', $this->type)
            );
        }
        parent::offsetSet($key, $value);
    }
}


class Point
{
}

$pointCollection = TypedArray::forType(Point::class);

$pointCollection[] = new Point();
$pointCollection[] = new stdClass(); // exception, incorrect class