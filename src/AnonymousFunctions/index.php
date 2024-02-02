<?php

/**
 * based on: https://medium.com/@vlreshet/stop-using-old-fashioned-closures-in-modern-php-there-are-4-ways-to-replace-them-51d8661e2f7e
 *
 * Anonymous function is CLOSURE!
 * - no specified name
 * - most usage as callable parameter
 */

class User
{
    public function __construct(
        public readonly string $name,
        public readonly bool $active
    ) {
    }
}



$users = [
  new User('Tom', true),
  new User('Ben', false),
];

class UserProcessor
{
    public function handle(array $users): void
    {
        /**
         * The Question is what when we got more statements to filter
         * age, profession ...etc.
         */
        $activeUsers = array_filter($users, static function (User $user) {
            // ... add more filtering here?
            return $user->active;
        });
        // ...
    }

    /**
     * From PHP 8.1 we can pass methods as callable
     */
    public function handleMethod(array $users): void
    {

        $activeUsers = array_filter($users, function (User $user) {
            // ... add more filtering here?
            return $this->filterUsers($user);
        });
        // ...
    }

    public function filterUsers(User $user): bool
    {
        return $user->active;
    }
}

/**
 * Use invokable classes
 * - most modern way.
 * - keep everything in classes
 * - reusable
 */
class ActiveUsersFilter
{
    public function __invoke(User $user): bool
    {
        return $user->active;
    }
}

$activeUsers = array_filter(
    array: $users,
    callback: new ActiveUsersFilter()
);
