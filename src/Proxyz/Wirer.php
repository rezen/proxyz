<?php

namespace Proxyz;

use Closure;
use Exception;
use ReflectionClass;

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
    $GLOBALS['PROXYZ_WRAPS'][$name] = $method;
}

/**
 * Get names of all methods that you can modify
 */ 
function getModdableMethods(): array
{
    return array_keys(require '_methods.php');
}

/**
 * Determine if a method is moddable
 */
function isModdable($name): bool
{   
    return getMethodNamespace($name) !== null;
}

/**
 * Determine namespace a method belongs to
 */
function getMethodNamespace($name) 
{
    $methods = require '_methods.php';
    return $methods[$name] ?? null;
}

/**
 * Call object method and execute override if set
 *
 * @param  callable  $callable
 * @param  array $args
 */
function callMethod($callable, $args) 
{
    [$class, $method] = $callable;
    $className = is_string($class) ? $class : get_class($class);
    $id = "{$className}@{$method}"; 
    $reflection = new ReflectionClass($className);
    $override = $GLOBALS['PROXYZ_OVERRIDES'][$id] ?? null;
    
    if (is_null($override)) {
        return call_user_func_array($callable, $args);
    }
    // Calling object method
    if (!is_string($class)) {
        $fn = Closure::bind($override, $class);
        return $fn(...$args);
    }

    // Calling static method
    $override = Closure::bind($override, null, $className);
    return $override(...$args);
}

/**
 * Used by generated functions to call underlying function or modifier
 *
 * @param  callable $callable
 * @param  array $args
 */
function callFunction($name, $args) 
{
    $path = explode('\\', $name);
    $id = $callable = array_pop($path);
    if (array_key_exists($id, $GLOBALS['PROXYZ_OVERRIDES'])) {
        // Call override method, passing in args
        return call_user_func_array($GLOBALS['PROXYZ_OVERRIDES'][$id], $args);
    }

    if (array_key_exists($id, $GLOBALS['PROXYZ_WRAPS'])) {
        // Call wrapper method passing in method args and method to call
        return call_user_func_array($GLOBALS['PROXYZ_WRAPS'][$id], [$args, $callable]);
    }
    return call_user_func_array($name, $args);
}

/**
 * Pass call through function override or method override depending on the signature
 *
 * @param  callable  $callable
 * @param  array $args
 */
function call($name, $args) 
{
    if (is_array($name)) {
        if (count($name) === 1) {
            $name = $name[0];
        } else {
            return callMethod($name, $args);
        }
    }        
    return callFunction($name, $args);
}

/**
 * Construct a new instance, with override of the class 
 * or override of __construct
 * 
 * @param  string $className
 * @param  array $args
 */
function newInstance(string $className, array $args)
{
    $reflection = new ReflectionClass($className);

    // Is there a class replacing this class?
    if (isset($GLOBALS['PROXYZ_OVERRIDES'][$className])) {
        $class = $GLOBALS['PROXYZ_OVERRIDES'][$className];
        $reflection = new ReflectionClass($class);
        return $reflection->newInstanceArgs($args);
    }

    // Is there a constructor override
    $id = "{$className}@__construct";
    $override = $GLOBALS['PROXYZ_OVERRIDES'][$id] ?? null;
    if (is_null($override)) {
        return $reflection->newInstanceArgs($args);
    }

    // You can also override a class constructor 
    // with another class definition
    if (is_string($override) && class_exists($override)) {
        $reflection = new ReflectionClass($override);
        return $reflection->newInstanceArgs($args);
    }
    
    // Create instance without constructor
    // and then call override with binding to instance
    $instance = $reflection->newInstanceWithoutConstructor();
    $fn = Closure::bind($override, $instance);
    call_user_func_array($fn, $args);
    return $instance;
}

/**
 * Enable you to get a class that is a proxy of a target class 
 * Using pattern \Proxyz\X\{RealClass}
 */
function enableClassProxy() 
{
    $disabled = explode(",", ini_get('disable_functions'));
    if (in_array("eval", $disabled)) {
        throw new \Exception("Eval has been disabled");
    }

    spl_autoload_register(function ($class) {
        $parts = explode("\\", $class);
        if ($parts[0] !== "Proxyz") {
            return;
        }
    
        $className = array_pop($parts);
        $copy = $parts;
        array_shift($copy);
        array_shift($copy);
        $namespace = implode("\\", $parts);
        $realClass = implode("\\", array_merge($copy, [$className]));

        // Since we are verifying there is indeed a real class
        // eval is safe reasonable
        // ^[a-zA-Z_\x80-\xff][a-zA-Z0-9_\x80-\xff]*$.
        if (!class_exists($realClass)) {
            return;
        }

        $code = implode("\n", [
            "namespace {$namespace};",
            "",
            "class {$className} extends \Proxyz\Delegate",
            "{",
            "  public static \$clazz = \\{$realClass}::class;",
            "}",
        ]);
        eval($code);   
    }, true, true);
}