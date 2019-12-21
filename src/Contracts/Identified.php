<?php

namespace Arcanobotics\Core\Contracts;

use Arcanobotics\Core\Support\Snowflake;

interface Identified
{
    public function getId(): Snowflake;
}