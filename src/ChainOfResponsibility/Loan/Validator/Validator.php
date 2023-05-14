<?php

namespace Src\ChainOfResponsibility\Loan\Validator;

class Validator
{
    public function chainValidator()
    {
        $yearsToPayBackValidator = new UserYearsToBackValidator();
        $maxLoanNumber = new UserMaxLoanNumberValidator($yearsToPayBackValidator);
        return new UserMaxLoanAmountValidator($maxLoanNumber);
    }
}
