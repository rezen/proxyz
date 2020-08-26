<?php

// Example using the loader.php 
require 'loader.php';

\Proxyz\addWrapper('file_get_contents', function($args, $fn) {
    echo "Intercepting call ... fn={$fn}\n";
    if ($args[0] === "file_that_does_not_exist.json") {
        return "{}";
    }
    return call_user_func_array($fn, $args);
});

use function \Proxyz\Php\Filesystem\file_get_contents;

echo file_get_contents("file_that_does_not_exist.json") . PHP_EOL;