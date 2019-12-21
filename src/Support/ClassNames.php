<?php

namespace Ollieread\MMO\Support;

use Ds\Map;

class ClassNames
{
    private static ?ClassNames $instance = null;

    public static function instance(): ClassNames
    {
        if (! (self::$instance instanceof self)) {
            self::$instance = new self;
        }

        return self::$instance;
    }

    private Map $classToName;

    private Map $nameToClass;

    public function __construct()
    {
        $this->classToName = new Map;
        $this->nameToClass = new Map;
    }

    public function add(string $class, string $name): ClassNames
    {
        $this->classToName->put($class, $name);
        $this->nameToClass->put($name, $class);

        return $this;
    }

    public function get(string $classOrName): ?string
    {
        if (class_exists($classOrName)) {
            return $this->classToName->get($classOrName);
        }

        return $this->nameToClass->get($classOrName);
    }
}