<?php

namespace Src\Bridge\SurveyModule;

abstract class Survey
{
    public function __construct(protected Presentation $mode)
    {

    }
    abstract public function display();
}
