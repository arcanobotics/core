<?php

namespace Arcanobotics\Core\Components;

use Arcanobotics\Core\Attributes\Contracts\Attribute;
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
        if ($this->has(get_class($attribute))) {
            throw new InvalidArgumentException('Attribute is already present');
        }

        $this->attributes->put(get_class($attribute), $attribute);

        return $this;
    }

    public function has(string $attributeClass): bool
    {
        return $this->attributes->hasKey($attributeClass);
    }

    public function get(string $attributeClass): ?Attribute
    {
        return $this->attributes->get($attributeClass);
    }
}