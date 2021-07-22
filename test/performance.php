<?php
/**
 * It is interesting to look at things from a performance perspective,
 * see what impact there is using namespaced functions as opposed to the
 * function directly. Generally the upside of testability will far outweigh
 * any performance caveats.
 * 
 * For adding functions to performance tests, avoid tests that make network calls.
 */
require 'vendor/autoload.php';

use Performance\Performance;

$tests = [
    [["Php","Xml","utf8_decode"], ["\x2e"]],
    [["Php", "Info", "gc_status"], []],
    [["Php", "Filesystem", "file_get_contents"], ["composer.json"]],
    [["Php", "Datetime", "getdate"], []],
    [["Php", "Archive", "zlib_get_coding_type"], []]
];

foreach($tests as $test) {
    [$fn, $args] = $test;
    $count = count($fn);
    $raw = $fn[$count - 1];
    $function = "\\Proxyz\\" . implode("\\", $fn);

    // Using this as a dividing line
    Performance::point("-------- $raw ----------");
    Performance::finish();

    Performance::point("$raw | 1    | pxy");
    $a = call_user_func_array($function, $args);
    Performance::finish();
    
    Performance::point("$raw | 1000 | pxy");
    foreach (range(0, 1000) as $number) {
        $a = call_user_func_array($function, $args);    
    }
    Performance::finish();
 
    Performance::point("$raw | 1    |");
    $b = call_user_func_array($raw, $args);
    Performance::finish();

    Performance::point("$raw | 1000 |");
    foreach (range(0, 1000) as $number) {
        $b = call_user_func_array($raw, $args);
    }
    Performance::finish();
}

Performance::results();
