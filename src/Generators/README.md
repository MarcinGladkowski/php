# Generators
> The one of all advantages the Generators are using for memory optimization.
> Usually the array is stored in memory when it's created.

For ex. the creation of simple big bunch of numbers in this way:
```php
range(1, 3_000_000);
```
Will cause the ```Fatal error: Allowed memory size...```

> Using yield keyword"  
> Great to use with lazy collections (like in Laravel)
> Cannot iterate again on once iterated Generator