<?php

namespace Ollieread\MMO\Support;

class Coord extends Position
{
    public static function from(Position $position): Coord
    {
        return new static($position->getX() >> 5, $position->getY() >> 5);
    }
}