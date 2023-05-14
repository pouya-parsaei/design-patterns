<?php

namespace Src\Bridge\SurveyModule;

class PaymentForm extends Survey
{
    public function __construct(Presentation $presentation, private string $price, private string $title)
    {
        parent::__construct($presentation);
    }

    public function display()
    {
        // TODO: Implement display() method.
    }
}
