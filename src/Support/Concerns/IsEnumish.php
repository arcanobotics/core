<?php

namespace Arcanobotics\Core\Support\Concerns;

use InvalidArgumentException;
use ReflectionClass;

trait IsEnumish
{
    private static array $instances = [];

    private static array $constants = [];

    public static function __callStatic(string $name, array $args = [])
    {
        $name = strtoupper($name);

        if (! constant("self::{$name}")) {
            throw new InvalidArgumentException('Enum ' . __CLASS__ . '::' . $name . ' doesn\'t exist');
        }

        if (! isset(self::$instances[$name])) {
            self::$instances[$name] = self::newInstance($name);
        }

        return self::$instances[$name];
    }

    private static function newInstance(string $name): IsEnumish
    {
        if (empty(self::$constants)) {
            self::$constants = (new ReflectionClass(self::class))->getConstants();
        }

        return new self(...self::$constants[$name]);
    }
}