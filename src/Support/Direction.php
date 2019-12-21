<?php

namespace Arcanobotics\Core\Support;

class Direction
{
    private static ?Direction $north     = null;

    private static ?Direction $northEast = null;

    private static ?Direction $east      = null;

    private static ?Direction $southEast = null;

    private static ?Direction $south     = null;

    private static ?Direction $southWest = null;

    private static ?Direction $west      = null;

    private static ?Direction $northWest = null;

    public static function north(): Direction
    {
        if (self::$north === null) {
            self::$north = new self(1, 0);
        }

        return self::$north;
    }

    public static function northEast(): Direction
    {
        if (self::$northEast === null) {
            self::$northEast = new self(1, 1);
        }

        return self::$northEast;
    }

    public static function east(): Direction
    {
        if (self::$east === null) {
            self::$east = new self(0, 1);
        }

        return self::$east;
    }

    public static function southEast(): Direction
    {
        if (self::$southEast === null) {
            self::$southEast = new self(-1, 1);
        }

        return self::$southEast;
    }

    public static function south(): Direction
    {
        if (self::$south === null) {
            self::$south = new self(-1, 0);
        }

        return self::$south;
    }

    public static function southWest(): Direction
    {
        if (self::$southWest === null) {
            self::$southWest = new self(-1, -1);
        }

        return self::$southWest;
    }

    public static function west(): Direction
    {
        if (self::$west === null) {
            self::$west = new self(0, -1);
        }

        return self::$west;
    }

    public static function northWest(): Direction
    {
        if (self::$northWest === null) {
            self::$northWest = new self(1, -1);
        }

        return self::$northWest;
    }

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