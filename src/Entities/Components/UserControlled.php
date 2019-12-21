<?php

namespace Ollieread\MMO\Entities\Components;

use Ollieread\MMO\Data\User;
use Ollieread\MMO\Entities\Contracts\Component;

class UserControlled implements Component
{
    private User $user;

    /**
     * @return \Ollieread\MMO\Data\User
     */
    public function getUser(): User
    {
        return $this->user;
    }

    /**
     * @param \Ollieread\MMO\Data\User $user
     *
     * @return UserControlled
     */
    public function setUser(User $user): UserControlled
    {
        $this->user = $user;

        return $this;
    }

    public function isControlledBy(User $user): bool
    {
        return $this->getUser()->getId()->is($user->getId());
    }
}