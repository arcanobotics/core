<?php

namespace Ollieread\MMO\Entities\Components;

use Ollieread\MMO\Entities\Contracts\Component;
use Ollieread\MMO\Support\Coord;
use Ollieread\MMO\Support\Position;

class Location implements Component
{
    public static function for(int $x, int $y): Location
    {
        return new static(new Position($x, $y));
    }

    /**
     * @var \Ollieread\MMO\Support\Position
     */
    private Position $position;

    /**
     * @var \Ollieread\MMO\Support\Coord
     */
    private Coord $coords;

    public function __construct(Position $position)
    {
        $this->position = $position;
    }

    /**
     * @return \Ollieread\MMO\Support\Position
     */
    public function getPosition(): Position
    {
        return $this->position;
    }

    /**
     * @return \Ollieread\MMO\Support\Coord
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