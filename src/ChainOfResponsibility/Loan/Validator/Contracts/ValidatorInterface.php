<?php

namespace Src\ChainOfResponsibility\Loan\Validator\Contracts;

use Src\ChainOfResponsibility\Loan\NewLoanRequest;

interface ValidatorInterface
{
    public function validate(NewLoanRequest $request): bool;

    public function setNextValidator(ValidatorInterface $validator);
}
