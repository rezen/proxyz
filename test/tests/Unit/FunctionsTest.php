<?php

namespace Proxyz\Tests\Unit;

use Exception;
use Proxyz\Tests\UnitTest;
use function Proxyz\Php\Filesystem\file_get_contents;
use function Proxyz\Php\System\passthru;

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

    function test_references_work()
    {
        \Proxyz\Php\System\passthru("echo works", $x);
        $this->assertEquals($x, 0);
    }

    /**
     * @doesNotPerformAssertions
     */ 
    function test_references_work_without_ref()
    {
        \Proxyz\Php\System\passthru("echo works");
    }

    /**
     * @doesNotPerformAssertions
     */ 
    function test_variable_safe_namespace_ref() {
        // One of the paramters defaults to DateTimeZone::ALL
        \Proxyz\Php\Datetime\timezone_identifiers_list();
    }
}