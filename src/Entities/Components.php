<?php

namespace Arcanobotics\Core\Entities;

use Arcanobotics\Core\Entities\Contracts\Component;
use Arcanobotics\Core\Entities\Contracts\Components as Contract;
use Ds\Map;
use Ds\Sequence;

class Components implements Contract
{
    private Map $components;

    public function __construct()
    {
        $this->components = new Map;
    }

    public function add(Component $component): Components
    {
        $this->components->put(get_class($component), $component);

        return $this;
    }

    public function get(string $componentClass, $default = null): ?Component
    {
        return $this->components->get($componentClass);
    }

    public function all(): Sequence
    {
        return $this->components->values();
    }
}