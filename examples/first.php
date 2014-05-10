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
