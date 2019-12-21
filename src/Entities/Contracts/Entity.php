<?php

namespace Ollieread\MMO\Entities\Contracts;

use Ollieread\MMO\Contracts\Identified;

interface Entity extends ComponentContainer, Identified
{
    public function getName(): string;

    public function isMovable(): bool;

    public function isDamageable(): bool;

    public function isUserControlled(): bool;
}