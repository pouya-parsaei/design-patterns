<?php

namespace Src\Facade\Permission;

class PolicePermission
{
    public function validate(string $nationalCode): bool
    {
        return true;
    }
}
