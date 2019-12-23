<?php

namespace Arcanobotics\Core\Entities\Contracts;

use Arcanobotics\Core\Components\Contracts\ComponentContainer;
use Arcanobotics\Core\Support\Contracts\Identified;
use Arcanobotics\Core\Support\Size;

interface Entity extends ComponentContainer, Identified
{
    public function getName(): string;

    public function getSize(): Size;

    public function isMovable(): bool;

    public function isDamageable(): bool;

    public function isUserControlled(): bool;
}