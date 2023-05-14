<?php

namespace Src\Composite\ProjectManagement;

interface ProjectComponent
{
    public function done();

    public function duplicate();

    public function delete();

    public function move();

}
