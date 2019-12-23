<?php

namespace Arcanobotics\Core\Support;

use Ds\Hashable;

class Position implements Hashable
{
    private int $x;

    private int $y;

    public function __construct(int $x, int $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    /**
     * @return int
     */
    public function getX(): int
    {
        return $this->x;
    }

    /**
     * @return int
     */
    public function getY(): int
    {
        return $this->y;
    }

    public function coords(): Coord
    {
        return Coord::from($this);
    }

    public function is(?Position $position = null): bool
    {
        return $position ? ($position->getX() === $this->getX() && $position->getY() === $this->getY()) : false;
    }

    public function __toString()
    {
        return 'pos:' . $this->getX() . ',' . $this->getY();
    }

    /**
     * @return mixed|string
     */
    public function hash()
    {
        return (string) $this;
    }

    /**
     * @param \Arcanobotics\Core\Support\Position|null $obj
     *
     * @return bool
     */
    public function equals($obj): bool
    {
        if ($obj !== null && get_class($obj) === self::class) {
            return $this->is($obj);
        }

        return false;
    }
}