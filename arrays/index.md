__Based on "Larry Garfield: Never* use arrays"__

// https://steemit.com/php/@crell/php-use-associative-arrays-basically-never
// https://twitter.com/maks_rafalko/status/1141822788124196867

## PHP Arrays
* Inconsistent behaviour
* Poor performance
* No type safety
* No error handling

### What another we can use ?

#### \ArrayObject


* We should avoid to use arrays and prefer objects.
    * Less memory usage.

* Array hasn't structured. It's mean, this is possible:
```php 

$someData = [
  'id' => 123
  'test' => 100.20
  'canceled' => false,
  'usr' => 0
  'skus' => [1, 'test', '123']
]
```

