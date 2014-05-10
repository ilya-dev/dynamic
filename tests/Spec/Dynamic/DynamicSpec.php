<?php namespace Spec\Dynamic;

use PhpSpec\ObjectBehavior;

class DynamicSpec extends ObjectBehavior {

    function it_is_initializable()
    {
        $this->shouldHaveType('Dynamic\Dynamic');
    }

    function it_adds_a_new_path()
    {
        $this->getAllPaths()->shouldHaveCount(0);

        $this->redirect('/^get(\w+)$/', 'get');

        $this->getAllPaths()->shouldHaveCount(1);
    }

    function it_handles_a_call()
    {
        $this->redirect('/^get(\w+)$/', 'get');

        $this->handle(new Dummy, 'getJack', [42])->shouldBe('Jack is 42');
    }

}

class Dummy {

    public function get($name, $age)
    {
        return "$name is $age";
    }

}

