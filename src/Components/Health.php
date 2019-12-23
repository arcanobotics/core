<?php

namespace Arcanobotics\Core\Components;

use Arcanobotics\Core\Components\Contracts\Component;

class Health implements Component
{
    /**
     * @var int
     */
    private int $health;

    public function __construct(int $health)
    {
        $this->health = $health;
    }
}