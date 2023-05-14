<?php

namespace Src\Composite\ProjectManagement;

class ProjectTask implements ProjectComponent
{

    public function __construct(private string $title, private string $description, private int $status)
    {

    }
    public function done()
    {
        // TODO: Implement done() method.
    }

    public function duplicate()
    {
        // TODO: Implement duplicate() method.
    }

    public function delete()
    {
        // TODO: Implement delete() method.
    }

    public function move()
    {
        // TODO: Implement move() method.
    }
}
