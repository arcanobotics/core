<?php

namespace Ollieread\MMO\Entities;

use Ds\Map;
use Ds\Sequence;
use Ollieread\MMO\Entities\Contracts\Component;
use Ollieread\MMO\Entities\Contracts\Components as Contract;

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