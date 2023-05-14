<?php

namespace Src\ChainOfResponsibility\RegistrationService;

use Src\ChainOfResponsibility\RegistrationService\Checkers\ReferralChecker;
use Src\ChainOfResponsibility\RegistrationService\Checkers\UserEmailChecker;
use Src\ChainOfResponsibility\RegistrationService\Checkers\UserPasswordChecker;

class RegistrationService
{
    public function register(RegistrationRequest $request)
    {
        return $this->chainCheck()->check($request);
    }

    private function chainCheck()
    {
        $referralChecker = new ReferralChecker();
        $passwordChecker = new UserPasswordChecker($referralChecker);
        return new UserEmailChecker($passwordChecker);
    }
}
