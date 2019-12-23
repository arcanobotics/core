<?php

namespace Arcanobotics\Core\Components;

use Arcanobotics\Core\Components\Contracts\Component;

class Movement implements Component
{
    /**
     * @var int
     */
    private int $velocity;

    public function __construct(int $velocity)
    {
        $this->velocity = $velocity;
    }

    public function getVelocity(): int
    {
        return $this->velocity;
    }
}