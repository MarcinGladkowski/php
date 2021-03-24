<?php
/** @see https://stitcher.io/blog/php-8-named-arguments  */

/**
 * - Great for using some DTO
 * - We shouldn't be afraid about order of arguments but we can use name of parameters!
 */

class CustomerData
{
    public static function new(...$args): self
    {
        return new self(...$args);
    }

    public function __construct(
        public string $name,
        public string $email,
        public int $age
    )
    {}
}

$input = [
    'name' => 'Marcin',
    'email' => 'marcingladowski@gmail.com',
    'age' => 31
];

$customerData = new CustomerData(
    name: $input['name'],
    email: $input['email'],
    age: $input['age'],
);

$customerData2 = new CustomerData(...$input);

var_dump($customerData->name);
var_dump($customerData->email);
var_dump($customerData->age);


# example with omit default value
# Look at all parameters for setcookie function
setcookie(
    name: 'TestCookie',
    expires_or_options: time()
);

# without named arguments
setcookie(
    'test',
    '',
    time()
);

# use spreading operator with named arguments:
$nextCustomerData = new CustomerData(...$input);

# using static method
$nextStaticCustomerData = CustomerData::new(...$input);
