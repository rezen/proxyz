<?php

namespace Proxyz\Tests\Unit;

use Exception;
use Proxyz\Tests\UnitTest;
use function Proxyz\Php\Filesystem\file_get_contents;

class FunctionsTest extends UnitTest
{
    function test_proxy_add_wrapper()
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

    function test_get_moddable_methods()
    {
        $methods = \Proxyz\getModdableMethods();
        $this->assertTrue(in_array("fclose", $methods));
    }

    function test_get_method_namespace()
    {
        $this->assertEquals("Proxyz\\Php\\Curl", \Proxyz\getMethodNamespace('curl_init'));
    }
}