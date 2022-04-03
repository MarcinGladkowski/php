# Iterate over objects

## Traversable

> https://www.php.net/manual/en/class.traversable.php

In PHP we have general interface which is ```Travesable```
The interesting thing is the interface doesn't have any methods or variables - is empty.

### Interface \Iterator
> Allow implementing custom iterator by using this interface

For simple list it shouldn't necessary to implement own iterator.

The language provides the bunch of built-in iterators:
> https://www.php.net/manual/en/spl.iterators.php

Good and fast example is generate Iterator by using ArrayIterator.,

#### Interface \IteratorAggregate
> Only one method to implement getIterator()


#### Type hinting
We can use unit type hinting like ```Collection|array|Iterator``` we should 
use ```iterable```.

