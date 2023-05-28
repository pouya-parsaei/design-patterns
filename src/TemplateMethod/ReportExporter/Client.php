<?php

namespace Src\TemplateMethod\ReportExporter;

use App\Models\User;

class Client
{
    public function __construct(private UserReport $reporter)
    {

    }

    public function exportUsers()
    {
        $users = User::all();

        return $this->reporter->generate($users);
    }
}
