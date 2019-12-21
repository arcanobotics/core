<?php

namespace Ollieread\MMO\Entities\Components;

use Ds\Map;
use InvalidArgumentException;
use Ollieread\MMO\Entities\Contracts\Attribute;

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