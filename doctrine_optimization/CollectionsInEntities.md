* Don't allow access to collections outside entity
* Hide collections in Entities

### _Bad example_
```php
class User 
{
    private $bans;
    
    public function getBans(): Collection 
    {
        return $this->bans;
    }
}
```
action to use this collection
```php
public user banUser(Uuid $userId)
{
    $user = $this->repository->find($userId);
    
    $user->getBans()->add(new Ban($user);
}
```
### _Good practice - Better example_
```php
class User 
{
    private $bans;
    
    public function ban(): Collection 
    {
        return $this->bans[] = new Ban($this);
    }
}
```
```php
public user banUser(Uuid $userId)
{
    $user = $this->repository->find($userId);
   
    $user->ban();
}
```
