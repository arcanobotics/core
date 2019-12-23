<?php

namespace Arcanobotics\Core\Entities;

use Arcanobotics\Core\Components\Effects;
use Arcanobotics\Core\Components\Health;
use Arcanobotics\Core\Components\Location;
use Arcanobotics\Core\Components\Movement;
use Arcanobotics\Core\Support\Position;
use Arcanobotics\Core\Support\Size;

class EntityPlayer extends Entity
{
    public const BASE_HEALTH   = 100;

    public const BASE_MOVEMENT = 4;

    public function setupComponents(): void
    {
        $this->add(new Movement(self::BASE_MOVEMENT))
            ->add(new Location(new Position(0, 0)))
            ->add(new Health(self::BASE_HEALTH))
            ->add(new Effects);
    }

    public function boot(): void
    {
        parent::boot();

        $this->setSize(new Size(35, 24, 7));
    }
}