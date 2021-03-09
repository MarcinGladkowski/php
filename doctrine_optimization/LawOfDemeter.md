### Law of demeter
_Bad example_
```php
class User 
{
    public function hassAccessTo(Resource $resource): bool
    {
        return (bool) array_filter(
            $this->role->getAccessLevels(),
            function (AccessLevel $acl) use ($resource) : bool {
                return $acl->canAccess($resource);
            }
        );
    }
}
```
_Good_
```php
class User 
{
    public function hassAccessTo(Resource $resource): bool
    {
        return $this->role->allowsAccessTo($resource);
    }
}
```