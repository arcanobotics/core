<?php

namespace Arcanobotics\Core\Entities;

use Arcanobotics\Core\Components\Health;
use Arcanobotics\Core\Components\Movement;
use Arcanobotics\Core\Components\UserControlled;
use Arcanobotics\Core\Entities\Contracts\Entity as Contract;
use Arcanobotics\Core\Support\ClassNames;
use Arcanobotics\Core\Support\Concerns\BootableTraits;
use Arcanobotics\Core\Support\Concerns\HasComponents;
use Arcanobotics\Core\Support\Concerns\HasId;
use Arcanobotics\Core\Support\Size;

abstract class Entity implements Contract
{
    use BootableTraits,
        HasComponents,
        HasId;

    private Size $size;

    public function isMovable(): bool
    {
        return $this->has(Movement::class);
    }

    public function isDamageable(): bool
    {
        return $this->has(Health::class);
    }

    public function isUserControlled(): bool
    {
        return $this->has(UserControlled::class);
    }

    public function getName(): string
    {
        return ClassNames::instance()->get(static::class);
    }

    public function getSize(): Size
    {
        return $this->size;
    }

    protected function setSize(Size $size): Entity
    {
        $this->size = $size;

        return $this;
    }
}