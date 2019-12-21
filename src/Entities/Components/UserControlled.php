<?php

namespace Arcanobotics\Core\Entities\Components;

use Arcanobotics\Core\Data\User;
use Arcanobotics\Core\Entities\Contracts\Component;

class UserControlled implements Component
{
    private User $user;

    /**
     * @return \Arcanobotics\Core\Data\User
     */
    public function getUser(): User
    {
        return $this->user;
    }

    /**
     * @param \Arcanobotics\Core\Data\User $user
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