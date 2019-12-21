<?php

namespace Arcanobotics\Core\Entities;

use Arcanobotics\Core\Entities\Components\Effects;
use Arcanobotics\Core\Entities\Components\Health;
use Arcanobotics\Core\Entities\Components\Location;
use Arcanobotics\Core\Entities\Components\Movement;
use Arcanobotics\Core\Support\Position;

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
}