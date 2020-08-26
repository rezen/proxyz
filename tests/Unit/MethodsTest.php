<?php

namespace Proxyz\Tests\Unit;

use Exception;
use Proxyz\Tests\UnitTest;
use function Proxyz\Php\Filesystem\file_get_contents;

class MethodsTest extends UnitTest
{
    public function test_proxy_add_wrapper()
    {
        \Proxyz\addWrapper('file_get_contents', function($args, $fn) {
            if ($args[0] === "config.json") {
                return "{}";
            }
            return call_user_func_array($fn, $args);
        });
        $this->assertEquals("{}", file_get_contents("config.json"));
        $this->assertEquals(null, @file_get_contents("xyz.json"));
    }

    public function test_raises_exception_for_nonexistant_function()
    {
        $this->expectException(Exception::class);
        \Proxyz\addWrapper('fake', function($args, $fn) {
            return call_user_func_array($fn, $args);
        });
    }
}