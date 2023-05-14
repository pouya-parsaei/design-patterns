<?php

namespace Src\Facade\Permission;

class JudiciaryPermission
{
    public function validate(string $nationalCode): bool
    {
        return $nationalCode;
    }
}
