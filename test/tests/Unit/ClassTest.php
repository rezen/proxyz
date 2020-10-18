<?php

namespace Proxyz\Tests\Unit;

use Exception;
use Proxyz\Tests\UnitTest;
use function Proxyz\Php\Filesystem\file_get_contents;

class ClassTest extends UnitTest
{
    function test_autoload_delegate_classes()
    {
        \Proxyz\enableClassProxy();
        $this->assertTrue(class_exists("\\Proxyz\\X\SplFileInfo"));

        // Verify default behaviour
        $info = new \Proxyz\X\SplFileInfo(null);
        $this->assertEquals($info->isLink(), false);
        
        // Verify override works
        $compare = "SAME";
        \Proxyz\addOverride("SplFileInfo@isLink", function() use ($compare) {
            return $compare;
        });
        $info = new \Proxyz\X\SplFileInfo(null);
        $this->assertEquals($info->isLink(), $compare);
    }

    function test_override_construct_with_wrap()
    {
        \Proxyz\enableClassProxy();
        \Proxyz\addOverride("SplFileInfo@__construct", function($filename, $mode) {
            $this->name = $filename;
            $this->mode = $mode;
        });
        $info = new \Proxyz\X\SplFileInfo("example.txt", "r");
        $this->assertEquals($info->name, "example.txt");
        $this->assertEquals($info->mode, "r");
    }

    function test_override_static()
    {
        \Proxyz\enableClassProxy();
        \Proxyz\addOverride(\Sample\Dance::class . "@dance", function() {
            return static::$favorite;
        });
        $this->assertEquals(\Sample\Dance::$favorite, \Proxyz\X\Sample\Dance::dance());
    }

    function test_new_instance_works()
    {
        $partner = "Jane Doe";
        $instance = \Proxyz\newInstance(\Sample\Dance::class, [$partner]);
        $this->assertEquals($instance, new \Sample\Dance($partner));
    }

    function test_new_instance_construct_overrides()
    {
        \Proxyz\addOverride("SplFileInfo@__construct", function($filename, $mode) {
            $this->name = $filename;
            $this->mode = $mode;
        });

        $info = \Proxyz\newInstance(\SplFileInfo::class, ["example.txt", "r"]);
        $this->assertEquals($info->name, "example.txt");
        $this->assertEquals($info->mode, "r");
    }

    function test_class_create()
    {
        $partner = "Sammy Davis Jr.";
        $instance = new \Proxyz\X\Sample\Dance($partner);
        $this->assertEquals([$partner], $instance->step());
    }

    function test_new_instance_overrides_class()
    {
        $first = "A";
        \Proxyz\addOverride(\SplFileInfo::class, \Sample\Dance::class);
        $instance = \Proxyz\newInstance(\SplFileInfo::class, [$first]);
        $this->assertTrue(method_exists($instance, 'dance'));
        $this->assertEquals($instance->partner, $first);
    }
}