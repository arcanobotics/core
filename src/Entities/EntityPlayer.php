<?php

namespace Ollieread\MMO\Entities;

use Ollieread\MMO\Entities\Components\Effects;
use Ollieread\MMO\Entities\Components\Health;
use Ollieread\MMO\Entities\Components\Location;
use Ollieread\MMO\Entities\Components\Movement;
use Ollieread\MMO\Support\Position;

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