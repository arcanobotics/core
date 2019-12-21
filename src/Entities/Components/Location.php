<?php

namespace Arcanobotics\Core\Entities\Components;

use Arcanobotics\Core\Entities\Contracts\Component;
use Arcanobotics\Core\Support\Coord;
use Arcanobotics\Core\Support\Position;

class Location implements Component
{
    public static function for(int $x, int $y): Location
    {
        return new static(new Position($x, $y));
    }

    /**
     * @var \Arcanobotics\Core\Support\Position
     */
    private Position $position;

    /**
     * @var \Arcanobotics\Core\Support\Coord
     */
    private Coord $coords;

    public function __construct(Position $position)
    {
        $this->position = $position;
    }

    /**
     * @return \Arcanobotics\Core\Support\Position
     */
    public function getPosition(): Position
    {
        return $this->position;
    }

    /**
     * @return \Arcanobotics\Core\Support\Coord
     */
    public function getCoords(): Coord
    {
        return $this->coords;
    }

    public function set(int $x, int $y): void
    {
        $this->position = new Position($x, $y);
        $this->coords   = $this->position->coords();
    }
}