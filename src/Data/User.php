<?php

namespace Ollieread\MMO\Data;

use Ollieread\MMO\Support\Snowflake;

class User
{
    private Snowflake $id;

    private string $username;

    /**
     * @return \Ollieread\MMO\Support\Snowflake
     */
    public function getId(): Snowflake
    {
        return $this->id;
    }

    /**
     * @param \Ollieread\MMO\Support\Snowflake $id
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