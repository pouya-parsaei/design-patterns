<?php

namespace Src\ChainOfResponsibility\RegistrationService\Checkers;

use App\Models\User;
use Src\ChainOfResponsibility\RegistrationService\Checker;
use Src\ChainOfResponsibility\RegistrationService\RegistrationRequest;

class UserEmailChecker extends Checker
{
    public function check(RegistrationRequest $request): bool
    {
        if ($this->doesEmailExist($request->getEmail())) {
            return false;
        }

        return parent::check($request);
    }

    private function doesEmailExist(string $email)
    {
        return User::whereEmail($email)->exists();
    }
}
