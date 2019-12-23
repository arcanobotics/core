<?php

namespace Arcanobotics\Core\Support\Concerns;

use Arcanobotics\Core\Components\Components;
use Arcanobotics\Core\Components\Contracts\Component;
use Arcanobotics\Core\Components\Contracts\Components as ComponentsContract;
use Ds\Sequence;

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

    public function has(string $componentClass): bool
    {
        return $this->components->get($componentClass) !== null;
    }

    protected function add(Component $component): self
    {
        $this->components->add($component);

        return $this;
    }

    protected function bootHasComponents(): void
    {
        $this->components = new Components;
    }
}