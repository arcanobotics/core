<?php

namespace Ollieread\MMO\Concerns;

use Ollieread\MMO\Support\Snowflake;
use RuntimeException;

trait HasId
{
    private ?Snowflake $id = null;

    /**
     * @param \Ollieread\MMO\Support\Snowflake|null $id
     *
     * @return \Ollieread\MMO\Concerns\HasId
     */
    public function setId(?Snowflake $id): self
    {
        if ($this->id === null) {
            $this->id = $id;

            return $this;
        }

        throw new RuntimeException('ID already set, cannot overwrite');
    }

    public function getId(): Snowflake
    {
        return $this->id;
    }
}