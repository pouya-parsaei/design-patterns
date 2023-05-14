<?php

namespace Src\Facade\Permission;

class TaxPermission
{
    public function validate(string $nationalCode): bool
    {
        return true;
    }
}
