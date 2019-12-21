<?php

namespace Arcanobotics\Core\Support;

class Size
{
    /**
     * @var int
     */
    private int $height;

    /**
     * @var int
     */
    private int $width;

    /**
     * @var int
     */
    private int $depth;

    public function __construct(int $height, int $width, int $depth)
    {
        $this->height = $height;
        $this->width  = $width;
        $this->depth  = $depth;
    }

    /**
     * @return int
     */
    public function height(): int
    {
        return $this->height;
    }

    /**
     * @return int
     */
    public function width(): int
    {
        return $this->width;
    }

    /**
     * @return int
     */
    public function depth(): int
    {
        return $this->depth;
    }
}