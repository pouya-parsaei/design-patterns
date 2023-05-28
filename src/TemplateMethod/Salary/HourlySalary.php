<?php

namespace Src\TemplateMethod\Salary;

class HourlySalary extends Salary
{

    protected function getBaseSalary()
    {
        return 0;
    }
}
