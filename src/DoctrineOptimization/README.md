### Doctrine ORM strategies/optimization/performance
TO check/test/describe

---
### Batch processing data

* [Processing a lot of data (Doctrine doc) - bulk operations](https://www.doctrine-project.org/projects/doctrine-orm/en/2.8/reference/batch-processing.html)
    * Insert operations - in batches
    * Iterating results - instead of loading the whole result into memory at once (no possible for fetch-join)
    * Can use `clear()`
    * Or use `detach()`
  