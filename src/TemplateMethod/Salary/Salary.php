<?php

namespace Src\TemplateMethod\Salary;

abstract class Salary
{
    public function calculate()
    {
        return $this->getBaseSalary() + $this->extra();
    }

    protected function extra()
    {

    }

    abstract protected function getBaseSalary();
}
