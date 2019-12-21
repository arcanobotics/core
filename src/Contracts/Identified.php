<?php

namespace Ollieread\MMO\Contracts;

use Ollieread\MMO\Support\Snowflake;

interface Identified
{
    public function getId(): Snowflake;
}