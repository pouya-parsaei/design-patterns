<?php

namespace Src\ChainOfResponsibility\RegistrationService\Checkers;

use App\Models\Referral;
use Src\ChainOfResponsibility\RegistrationService\Checker;
use Src\ChainOfResponsibility\RegistrationService\RegistrationRequest;

class ReferralChecker extends Checker
{
    public function check(RegistrationRequest $request): bool
    {
        if (!$this->isReferralValid($request->getReferralCode())) {
            return false;
        }

        return parent::check($request);
    }

    private function isReferralValid(string $code): bool
    {
        return Referral::whereCode($code)->exists();
    }
}
