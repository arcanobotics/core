<?php

namespace Ollieread\MMO\Concerns;

use Ds\Sequence;
use Ollieread\MMO\Entities\Contracts\Component;
use Ollieread\MMO\Entities\Contracts\Components as ComponentsContract;
use Ollieread\MMO\Entities\Components;

trait HasComponents
{
    private ComponentsContract $components;

    public function as(string $componentClass): ?Component
    {
        return $this->components->get($componentClass);
    }

    public function all(): Sequence
    {
        return $this->components->all();
    }

    protected function add(Component $component): self
    {
        $this->components->add($component);

        return $this;
    }

    public function has(string $componentClass): bool
    {
        return $this->components->get($componentClass) !== null;
    }

    protected function bootHasComponents(): void
    {
        $this->components = new Components;
    }
}