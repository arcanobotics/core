<?php

namespace Arcanobotics\Core\Support\Contracts;

use Arcanobotics\Core\Support\Snowflake;

interface Identified
{
    public function getId(): Snowflake;
}