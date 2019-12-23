<?php

namespace Arcanobotics\Core\Components;

use Arcanobotics\Core\Components\Contracts\Component;
use Arcanobotics\Core\Components\Contracts\Components as Contract;
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