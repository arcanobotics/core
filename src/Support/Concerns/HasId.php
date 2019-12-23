<?php

namespace Arcanobotics\Core\Support\Concerns;

use Arcanobotics\Core\Support\Snowflake;
use RuntimeException;

trait HasId
{
    private ?Snowflake $id = null;

    /**
     * @param \Arcanobotics\Core\Support\Snowflake|null $id
     *
     * @return \Arcanobotics\Core\Support\Concerns\HasId
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