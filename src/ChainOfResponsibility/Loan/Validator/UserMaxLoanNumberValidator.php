<?php

namespace Src\ChainOfResponsibility\Loan\Validator;

use App\Models\User;
use Src\ChainOfResponsibility\Loan\NewLoanRequest;
use Src\ChainOfResponsibility\Loan\Validator\Contracts\AbstractValidator;

class UserMaxLoanNumberValidator extends AbstractValidator
{
    public function validate(NewLoanRequest $request): bool
    {
        if ($this->hasUserReachedMaxLoanNumber($request->getUserId())) {
            return false;
        }

        return parent::validate($request);
    }

    private function hasUserReachedMaxLoanNumber(int $userId): bool
    {
        return User::find($userId)->loans()->count() > 3;
    }
}
