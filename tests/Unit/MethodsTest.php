<?php

namespace Proxyz\Tests\Unit;

use Proxyz\Tests\UnitTest;

class MethodsTest extends UnitTest
{
    public function test_add_override()
    {
        $this->assertGreaterThan(0, 1);
    }
}