<?php

namespace Ollieread\MMO\Entities\Contracts;

use Ds\Sequence;

interface ComponentContainer
{
    public function as(string $componentClass);

    public function all(): Sequence;

    public function setupComponents(): void;
}