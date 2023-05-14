<?php

namespace Src\ChainOfResponsibility\Loan;

use Src\ChainOfResponsibility\Loan\Validator\Validator;

class LoanService
{
    public function __construct(private Validator $loanValidator)
    {

    }

    public function register(NewLoanRequest $request)
    {
        return $this->loanValidator->chainValidator()->validate($request);
    }
}
