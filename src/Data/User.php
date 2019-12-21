<?php

namespace Arcanobotics\Core\Data;

use Arcanobotics\Core\Support\Snowflake;

class User
{
    private Snowflake $id;

    private string $username;

    /**
     * @return \Arcanobotics\Core\Support\Snowflake
     */
    public function getId(): Snowflake
    {
        return $this->id;
    }

    /**
     * @param \Arcanobotics\Core\Support\Snowflake $id
     *
     * @return User
     */
    public function setId(Snowflake $id): User
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return string
     */
    public function getUsername(): string
    {
        return $this->username;
    }

    /**
     * @param string $username
     *
     * @return User
     */
    public function setUsername(string $username): User
    {
        $this->username = $username;

        return $this;
    }
}