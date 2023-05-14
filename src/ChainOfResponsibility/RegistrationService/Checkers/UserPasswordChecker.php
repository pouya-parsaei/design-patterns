<?php

namespace Src\ChainOfResponsibility\RegistrationService\Checkers;

use Src\ChainOfResponsibility\RegistrationService\Checker;
use Src\ChainOfResponsibility\RegistrationService\RegistrationRequest;

class UserPasswordChecker extends Checker
{
    public function check(RegistrationRequest $request):bool
    {
        if(!$this->isPasswordValid($request->getPassword)){
            return false;
        }

        return parent::check($request);
    }

    private function isPasswordValid(string $password):bool
    {
        return true;
    }
}
