<?php

namespace Src\TemplateMethod\Salary;

class RemoteSalary extends Salary
{

    protected function getBaseSalary()
    {
        return 400000;
    }
}
