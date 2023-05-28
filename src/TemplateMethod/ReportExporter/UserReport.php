<?php

namespace Src\TemplateMethod\ReportExporter;

use Illuminate\Database\Eloquent\Collection;

abstract class UserReport
{

    public function generate(Collection $users)
    {
        $preparedData = $this->prepare($users);

        $this->export($preparedData);
    }

    private function prepare(Collection $users)
    {
        return $users->filter(function ($user){
           return $user->age > 18;
        });
    }

    abstract protected function export(Collection $preparedData);
}
