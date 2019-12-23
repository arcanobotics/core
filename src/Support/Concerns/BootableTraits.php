<?php

namespace Arcanobotics\Core\Support\Concerns;

trait BootableTraits
{
    public function boot(): void
    {
        $traits = class_uses(static::class);

        foreach ($traits as $trait) {
            if (method_exists($this, 'boot' . $trait)) {
                $this->{'boot' . $trait}();
            }
        }
    }
}