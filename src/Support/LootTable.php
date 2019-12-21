<?php

namespace Arcanobotics\Core\Support;

use Ds\Map;

class LootTable
{
    /**
     * @var string
     */
    private string $name;

    private Map $items;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
}