<?php

namespace Sample;

class Dance 
{
    static $favorite = "mambo";

    public $partner;

    function __construct($partner)
    {
        $this->partner = $partner;
    }

    function step(): array
    {
        return [$this->partner];
    }

    static function dance($tempo="slow"): str
    {
        return "Dance, {$tempo}";
    }
}
