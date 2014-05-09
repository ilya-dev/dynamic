<?php namespace Spec\Dynamic;

use PhpSpec\ObjectBehavior;

class DynamicTraitTestSpec extends ObjectBehavior {

    function it_is_initializable()
    {
        $this->shouldHaveType('Dynamic\DynamicTraitTest');
    }

    function it_returns_the_same_instance_of_Dynamic()
    {
        $instance = $this->getDynamicInstance();

        $instance->shouldHaveType('Dynamic\Dynamic');
        $instance->shouldBeEqualTo($this->getDynamicInstance());
    }

}

namespace Dynamic;

class DynamicTraitTest {

    use DynamicTrait;

}

