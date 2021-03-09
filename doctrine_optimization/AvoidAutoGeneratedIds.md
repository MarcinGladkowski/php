### Reasons
* Your db operations will block each others
* You are denying bulk inserts
* You cannot make multi-requests transactions
* Your object is invalid until saved
* Your object does not work without the db
* Auto Generated ID isn't the best idea to sorting - use dateTime instead
* Prefer immutable entities
* Use UUIDS (128 bit Integer)
```php
public function __construct()
{
    $this->id = Uuid::uuid4();
}
```