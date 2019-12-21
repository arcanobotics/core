<?php

namespace Ollieread\MMO\Entities;

use Ollieread\MMO\Concerns\BootableTraits;
use Ollieread\MMO\Concerns\HasComponents;
use Ollieread\MMO\Concerns\HasId;
use Ollieread\MMO\Entities\Components\Health;
use Ollieread\MMO\Entities\Components\Movement;
use Ollieread\MMO\Entities\Components\UserControlled;
use Ollieread\MMO\Entities\Contracts\Entity as Contract;
use Ollieread\MMO\Support\ClassNames;

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