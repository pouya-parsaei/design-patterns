<?php

namespace Src\ChainOfResponsibility\Loan\Validator\Contracts;

use Src\ChainOfResponsibility\Loan\NewLoanRequest;

abstract class AbstractValidator implements ValidatorInterface
{
    private ValidatorInterface $nextValidator;

    public function validate(NewLoanRequest $request): bool
    {
        if ($this->nextValidator === null) {
            return true;
        }

        return $this->nextIndicator->validate($request);
    }

    public function setNextValidator(ValidatorInterface $validator): void
    {
        $this->nextIndicator = $validator;
    }

}
