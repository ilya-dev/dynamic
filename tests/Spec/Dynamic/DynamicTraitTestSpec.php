<?php namespace Spec\Dynamic;

use PhpSpec\ObjectBehavior;

class DynamicTraitTestSpec extends ObjectBehavior {

    function it_is_initializable()
    {
        $this->shouldHaveType('Dynamic\DynamicTraitTest');
    }

}

namespace Dynamic;

class DynamicTraitTest {

    use DynamicTrait;

}

