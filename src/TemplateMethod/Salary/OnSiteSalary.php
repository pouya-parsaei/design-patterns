<?php

namespace Src\TemplateMethod\Salary;

class OnSiteSalary extends Salary
{

    protected function getBaseSalary()
    {
        return 5000000;
    }
}
