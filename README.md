# Dynamic

Syntactic sugar for everyone.

> Dynamic helps you handle calls to non-existent methods.

## Example

```php
<?php require __DIR__.'/../vendor/autoload.php';

use Dynamic\DynamicTrait;

class Example {

    use DynamicTrait;

    public function __construct()
    {
        $this->getDynamicInstance()->redirect('/^say(\w+)To$/', 'say');
    }

    public function say($what, $to)
    {
        echo ucfirst("$what, $to!"), PHP_EOL;
    }

}

$example = new Example;

echo $example->sayHelloTo('Jack'), $example->sayByeTo('John');

```

Can you guess what the output will be? Check it out yourself!

```shell
git clone https://github.com/ilya-dev/dynamic.git
cd dynamic
php examples/first.php
```

## Documentation

Don't forget to add `Dynamic\DynamicTrait` trait to your class.

+ `void redirect(string $pattern, string $method)`
+ `mixed handle(mixed $instance, string $method, array $arguments = [])`

## Installation

```shell
php composer.phar require "ilya/dynamic:~1"
```

## License

Dynamic is licensed under the MIT license.
