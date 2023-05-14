<?php

namespace Src\ChainOfResponsibility\Loan\Validator;

use App\Models\User;
use Src\ChainOfResponsibility\Loan\NewLoanRequest;
use Src\ChainOfResponsibility\Loan\Validator\Contracts\AbstractValidator;

class UserMaxLoanAmountValidator extends AbstractValidator
{
    public function validate(NewLoanRequest $request): bool
    {
        if ($this->hasUserReachedMaxLoanAmount($request->getUserId(), $request->getAmount())) {
            return false;
        }

        return parent::validate($request);
    }

    private function hasUserReachedMaxLoanAmount(int $userId, int $amount): bool
    {
        return true;
    }
}
