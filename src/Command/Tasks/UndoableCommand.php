<?php

namespace Src\Command\Tasks;

interface UndoableCommand extends Command
{
    public function undo();
}
