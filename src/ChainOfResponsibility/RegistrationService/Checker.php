<?php

namespace Src\ChainOfResponsibility\RegistrationService;

abstract class Checker
{
    public function __construct(private ?Checker $nextChecker = null)
    {

    }

    public function check(RegistrationRequest $request)
    {
        if(!$this->nextChecker)
        {
            return true;
        }

        return $this->nextChecker->check($request);
    }
}
