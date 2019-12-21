<?php

namespace Arcanobotics\Core\Entities\Components;

use Arcanobotics\Core\Entities\Contracts\Attribute;
use Ds\Map;
use InvalidArgumentException;

class Attributes
{
    private Map $attributes;

    public function __construct()
    {
        $this->attributes = new Map;
    }

    public function add(Attribute $attribute): Attributes
    {
        if ($this->has($attribute->getName())) {
            throw new InvalidArgumentException('Attribute is already present');
        }

        $this->attributes->put($attribute->getName(), $attribute);

        return $this;
    }

    public function has(string $name): bool
    {
        return $this->attributes->hasKey($name);
    }

    public function get(string $name): ?Attribute
    {
        return $this->attributes->get($name);
    }
}