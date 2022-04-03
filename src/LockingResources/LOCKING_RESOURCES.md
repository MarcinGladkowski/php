### Locking resources
We have some mechanism to prevent using the same resources 
by some processes ad the same time:
* mutexes
* semaphores

### Mutexes
Use to locking resource. This is for indicate if some resource 
is available or not. If the lock exists, the resource is unsafe to 
use. They are exists in unix environments. 
We can use:
* Own written file lock mechanism
* Use `flock`
* Use `sync pecl package` 

### Semaphores
Used to restrict resources. We have **counting** semaphores and **binary**
semaphores.

* Use **pecl** packages `sysvsem`

