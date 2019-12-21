<?php

namespace Arcanobotics\Core\Concerns;

use Arcanobotics\Core\Entities\Components;
use Arcanobotics\Core\Entities\Contracts\Component;
use Arcanobotics\Core\Entities\Contracts\Components as ComponentsContract;
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