<?php

namespace Arcanobotics\Core\Support;

class Coord extends Position
{
    public static function from(Position $position): Coord
    {
        return new static($position->getX() >> 5, $position->getY() >> 5);
    }

    public function is(?Coord $coord = null): bool
    {
        return $coord ? ($coord->getX() === $this->getX() && $coord->getY() === $this->getY()) : false;
    }

    public function __toString()
    {
        return 'coord:' . $this->getX() . ',' . $this->getY();
    }
}