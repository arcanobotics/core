<?php

namespace Arcanobotics\Core\Support;

use Arcanobotics\Core\Support\Concerns\IsEnumish;

/**
 * Class Direction
 *
 * @method static Direction EAST()
 * @method static Direction NORTH()
 * @method static Direction NORTHEAST()
 * @method static Direction NORTHWEST()
 * @method static Direction SOUTH()
 * @method static Direction SOUTHEAST()
 * @method static Direction SOUTHWEST()
 * @method static Direction WEST()
 *
 * @package Arcanobotics\Core\Support
 */
final class Direction
{
    use IsEnumish;

    private const EAST      = [0, 1];

    private const NORTH     = [1, 0];

    private const NORTHEAST = [1, 1];

    private const NORTHWEST = [1, -1];

    private const SOUTH     = [-1, 0];

    private const SOUTHEAST = [-1, 1];

    private const SOUTHWEST = [-1, -1];

    private const WEST      = [0, -1];

    private int $offsetX;

    private int $offsetY;

    private function __construct(int $offsetX, int $offsetY)
    {
        $this->offsetX = $offsetX;
        $this->offsetY = $offsetY;
    }

    /**
     * @return int
     */
    public function getOffsetX(): int
    {
        return $this->offsetX;
    }

    /**
     * @return int
     */
    public function getOffsetY(): int
    {
        return $this->offsetY;
    }
}