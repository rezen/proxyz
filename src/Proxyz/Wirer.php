<?php

namespace Proxyz;

use Exception;

// Setup globals which are used for holding modifiers
if (!isset($GLOBALS['PROXYZ_OVERRIDES'])) {
    $GLOBALS['PROXYZ_OVERRIDES'] = [];
}

if (!isset($GLOBALS['PROXYZ_WRAPS'])) {
    $GLOBALS['PROXYZ_WRAPS'] = [];
}

/**
 * Add a method that overrides the default function
 *
 * @param  string  $name
 * @param  callable $method
 */
function addOverride($name, $method) 
{
    if (!in_array($name, getModdableMethods())) {
        throw new Exception("That function is not supported by the proxy");
    }
    $GLOBALS['PROXYZ_OVERRIDES'][$name] = $method;
}

/**
 * Add a method that wrap over a method call
 *
 * @param  string  $name
 * @param  callable $method
 */
function addWrapper(string $name, $method) 
{
    if (!in_array($name, getModdableMethods())) {
        throw new Exception("That function is not supported by the proxy");
    }
    $GLOBALS['PROXYZ_WRAPS'][$name] = $method;
}

/**
 * Get names of all methods that you can modify
 */ 
function getModdableMethods() 
{
    return require '_methods.php';
}

/**
 * Used by generated methods to call underlying function or modifier
 *
 * @param  string  $name
 * @param  callable $method
 */
function callMethod($name, $args) 
{
    $path = explode('\\', $name);
    $method = array_pop($path);

    if (array_key_exists($method, $GLOBALS['PROXYZ_OVERRIDES'])) {
        // Call override method, passing in args
        return call_user_func_array($GLOBALS['PROXYZ_OVERRIDES'][$method], $args);
    }

    if (array_key_exists($method, $GLOBALS['PROXYZ_WRAPS'])) {
        // Call wrapper method passing in method args and method to call
        return call_user_func_array($GLOBALS['PROXYZ_WRAPS'][$method], [$args, $method]);
    }

    return call_user_func_array($name, $args);
}