<?php

namespace Arcanobotics\Core\Entities;

use Arcanobotics\Core\Concerns\BootableTraits;
use Arcanobotics\Core\Concerns\HasComponents;
use Arcanobotics\Core\Concerns\HasId;
use Arcanobotics\Core\Entities\Components\Health;
use Arcanobotics\Core\Entities\Components\Movement;
use Arcanobotics\Core\Entities\Components\UserControlled;
use Arcanobotics\Core\Entities\Contracts\Entity as Contract;
use Arcanobotics\Core\Support\ClassNames;

abstract class Entity implements Contract
{
    use BootableTraits,
        HasComponents,
        HasId;

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
}