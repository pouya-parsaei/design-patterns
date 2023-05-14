<?php

namespace Src\ChainOfResponsibility\Loan\Validator;

use App\Models\User;
use Src\ChainOfResponsibility\Loan\NewLoanRequest;
use Src\ChainOfResponsibility\Loan\Validator\Contracts\AbstractValidator;

class UserYearsToBackValidator extends AbstractValidator
{
    public function validate(NewLoanRequest $request): bool
    {
        if (!$this->canSelectTheseYearsToPayBack($request->getYearsToPayBack())) {
            return false;
        }

        return parent::validate($request);
    }

    private function canSelectTheseYearsToPayBack(int $yearsToPayBack): bool
    {
        return true;
    }
}
