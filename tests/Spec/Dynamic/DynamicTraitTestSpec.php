<?php namespace Spec\Dynamic;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Dynamic\Dynamic;

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

    function it_sets_instance_of_Dynamic(Dynamic $instance)
    {
        $this->setDynamicInstance($instance);

        $this->getDynamicInstance()->shouldBeEqualTo($instance);
    }

    function it_redirects_method_calls_to_instance(Dynamic $instance)
    {
        $instance->handle(Argument::type('Dynamic\DynamicTraitTest'), 'foo', ['bar'])
                 ->shouldBeCalled();

        $this->setDynamicInstance($instance);

        $this->getWrappedObject()->foo('bar');
    }

}

namespace Dynamic;

class DynamicTraitTest {

    use DynamicTrait;

}

