<?php

namespace Src\Decorator\UserPresenter;

class UserPresenter
{
    public function __construct(private User $user)
    {

    }

    public function fullName()
    {
        return $this->user->getFirstName() . ' ' . $this->user->getLastName();
    }

    public function persianRegisterDate()
    {
        return $this->user->getRegisterDate()->format('persian_format');
    }
}
