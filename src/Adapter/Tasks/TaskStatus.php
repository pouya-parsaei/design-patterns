<?php

namespace Src\Adapter\Tasks;

enum TaskStatus: int
{
    case Init = 0;
    case Doing = 1;
    case Done = 2;
}
