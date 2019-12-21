<?php

namespace Ollieread\MMO\Entities\Contracts;

use Ds\Sequence;

interface Components
{
    public function add(Component $component);

    public function get(string $componentClass, $default = null): ?Component;

    public function all(): Sequence;
}