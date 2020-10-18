<?php

namespace Proxyz;

use ReflectionClass;

class Delegate
{
    /**
     * @var string
     */
    public static $clazz;
    
    /**
     * @var object
     */
    public $sink;

    function __construct()
    {
        $this->sink = \Proxyz\newInstance(static::$clazz, func_get_args());
    }

    /**
     * @param object
     */
    static function withSink($sink)
    {
        $reflection = new ReflectionClass(static::class);
        $delegate = $reflection->newInstanceWithoutConstructor();
        $delegate->sink = $sink;
        return $delegate;
    }

    /**
     * @param string
     * @param array
     */
    function __call($name, $arguments)
    {
        return \Proxyz\callMethod([$this->sink, $name], $arguments);
    }

    /**
     * @param string
     * @param array
     */
    static function __callStatic($name, $arguments) 
    {
        return \Proxyz\callMethod([static::$clazz, $name], $arguments);
    }

    /**
     * @param string
     */
    function __get(string $name) {
        return $this->sink->{$name};
    }

    function __set(string $name, mixed $value) 
    {
        return $this->sink->{$name} = $value;
    }

    /*
    @todo
    __isset(), __unset(), __sleep(), __wakeup(), 
    __serialize(), __unserialize(), __toString(), 
    __invoke(), __set_state(), __clone(),
    __debugInfo() 
    */
}