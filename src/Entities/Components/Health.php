<?php

namespace Arcanobotics\Core\Entities\Components;

use Arcanobotics\Core\Entities\Contracts\Component;

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