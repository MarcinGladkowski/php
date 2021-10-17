<?php

/**
 * Why Generics are useful ?
 *
 * On post list we cannot be sure what exactly is in $posts
 */
$posts = [
    'foo',
    null,
    new stdClass()
];

/** To be safe we can prevent errors by check an instance */
foreach ($posts as $post) {
    if (! $post instanceof  Post) {
        continue;
    }

    // do action on Post!
}

/**
 * Working on Post array
 */
function handlePosts(array $posts) {
    foreach ($posts as $post) {
        // ... what a guarantee we iterate over Posts ?
    }
}

/**
 * From PHP 7.0 we can use operator ...
 */
function handleUnpackedPosts(Post ...$posts) {
    foreach ($posts as $post) {

    }
}
/** But call of this method always have to be called with unpack */
handleUnpackedPosts(...$posts);



/**
 * But we can use PHPdoc
 *
 * @return Post[]
 */
class BlogModel {
    public function findPosts(): array
    {
        return [];
    }
}
/** @var Post[] $posts */
$posts = (new BlogModel())->findPosts();


/**
 * Try implement simple Generics
 */
class Collection implements \Iterator, \ArrayAccess
{

    private int $position;

    private array $array = [];

    public function __construct()
    {
        $this->position = 0;
    }

    public function current()
    {
        return $this->array[$this->position];
    }

    public function next()
    {
        ++$this->position;
    }

    public function key()
    {
        return $this->position;
    }

    public function valid()
    {
        return array_key_exists($this->position, $this->array);
    }

    public function rewind()
    {
        $this->position = 0;
    }

    public function offsetExists($offset)
    {
        return array_key_exists($offset, $this->array);
    }

    public function offsetGet($offset)
    {
        return $this->array[$offset];
    }

    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->array[] = $value;
        } else {
            $this->array[$offset] = $value;
        }
    }

    public function offsetUnset($offset)
    {
        unset($this->array[$offset]);
    }
}

$collection = new Collection();
$collection[] = new Post();

foreach ($collection as $item) {
    // Post
}

/**
 * Create more specific Collection
 *
 * Now we can only work with Post instances in collection
 * - We need a separate implementation of each kind of instances
 * - Creating subclasses make mess in code
 */
class PostCollection extends Collection
{
    public function current(): ?Post
    {
        return parent::current();
    }

    public function offsetGet($offset): ?Post {
        return parent::offsetGet($offset);
    }

    public function offsetSet($offset, $value) {
        if (! $value instanceof Post) {
            throw new InvalidArgumentException("value must be instance of Post.");
        }

        parent::offsetSet($offset, $value);
    }
}

/**
 * How generics would look like ?
 *
 * It's mean we can use only one class for each type
 *
 *
 * class GenericCollection<T> implements Iterator, ArrayAccess
 * {
 * public function current() : ?T {
 *       return $this->array[$this->position];
 * }
 *
 * public function offsetGet($offset) : ?T {
 *      return $this->array[$offset] ?? null;
 * }
 *
 * public function offsetSet($offset, $value) {
 *     if (! $value instanceof T) {
 *         throw new InvalidArgumentException("value must be instance of {T}.");
 *     }
 *
 *     if (is_null($offset)) {
 *          $this->array[] = $value;
 *     } else {
 *          $this->array[$offset] = $value;
 *     }
 * }
 *
 * // public function __construct() ...
 * // public function next() ...
 * // public function key() ...
 * // public function valid() ...
 * // public function rewind() ...
 * // public function offsetExists($offset) ...
 * }
 *
 *
 * $collection = new GenericCollection<Post>();
 * $collection[] = new Post(1);
 *
 * // This would throw the InvalidArgumentException.
 * $collection[] = 'abc';
 *
 * foreach ($collection as $item) {
 *     echo "{$item->getId()}\n";
 * }
 */


