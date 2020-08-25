#!/usr/bin/env php
<?php

$root = realpath(dirname(__FILE__) . "/../");
require $root . '/vendor/autoload.php';

use Symfony\Component\DomCrawler\Crawler;

function renderMethod($name) {
    return implode("\n",  [
        "",
        "function $name() {",
        "  return \Proxyz\callMethod(__FUNCTION__, func_get_args());",
        "}",
    ]);
}

function generateModule($module, $references=[]) {
    $root = realpath(dirname(__FILE__) . "/../");
    $name = ucfirst($module);
    $path = "$root/src/Proxyz/$name.php";

    $body = '<?php namespace Proxyz\\' . $name . ";\n// This file is dynamically generated ... do not edit \n";
    $methods = [];
    foreach($references as $reference) {
        $methods = array_merge($methods, crawlReferenceMethods($reference));
    }
    $body = array_reduce($methods, function($body, $method) {
        return $body . renderMethod($method);
    }, $body);

    $body .= "\nfunction methods() {\n";
    $body .= "  return " . json_encode($methods, JSON_PRETTY_PRINT) . ";";
    $body .= "}\n";

    file_put_contents($path, $body);
}

function crawlReferenceMethods($reference) {
    $html = file_get_contents($reference);
    $crawler = new Crawler($html);
    $elements = $crawler->filter('#layout-content .chunklist_reference li');
    $methods = $elements->each(function($el) use (&$body) {
        return preg_replace("/[^A-z0-9_]+/", "_", $el->children()->first()->text());
    });
    sort($methods);
    return $methods;
}


$generate = [
    'curl' => [
        'https://www.php.net/manual/en/ref.curl.php'
    ],
    'filesystem' => [
        'https://www.php.net/manual/en/ref.filesystem.php'
    ],
    'system' => [
        'https://www.php.net/manual/en/ref.exec.php'
    ],
    'session' => [
        'https://www.php.net/manual/en/ref.session.php',
    ],
    'mysqli' => [
        'https://www.php.net/manual/en/class.mysqli.php'
    ],
    'mail' => [
        'https://www.php.net/manual/en/ref.imap.php',
        'https://www.php.net/manual/en/ref.mail.php',
    ],
    'info' => [
        'https://www.php.net/manual/en/ref.info.php',
    ],
    'openssl' => [
        'https://www.php.net/manual/en/ref.openssl.php'
    ],
    'xml' => [
        'https://www.php.net/manual/en/ref.xml.php',
    ],
    'network' => [
        'https://www.php.net/manual/en/ref.network.php',
    ],
    'ftp' => [
        'https://www.php.net/manual/en/ref.ftp.php',
    ],
    'socket' => [
        'https://www.php.net/manual/en/ref.sockets.php'
    ]
];

foreach($generate as $module => $references) {
    generateModule($module, $references);
}

exit(0);