<?php

namespace Ollieread\MMO\Entities\Components;

use Ollieread\MMO\Entities\Contracts\Component;

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